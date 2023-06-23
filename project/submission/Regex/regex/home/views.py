from django.shortcuts import get_object_or_404, render, redirect
from django.core.paginator import Paginator
from django.contrib.auth.decorators import login_required
from django.contrib.auth.views import LoginView, PasswordResetView, PasswordChangeView, PasswordResetConfirmView
from admin_soft.forms import RegistrationForm, LoginForm, UserPasswordResetForm, UserSetPasswordForm, UserPasswordChangeForm
from django.contrib.auth import logout
from .models import Products, Sales

# Create your views here.

# Pages
@login_required(login_url='accounts/login/')
def index(request):
  products = Products.objects.all()
  sales = 0 
  total_price = 0
  total_sold = 0
  num_products = len(products)

  for product in products:
      total_price += product.ProductPrice
      total_sold += product.ProductSold

  if num_products > 0:
      average_price = total_price / num_products
  else:
      average_price = 0  # Handle the case where there are no products

  for product in products:
      sales += product.ProductPrice * product.ProductSold

  overall_sales = round(sales,2)
  average_price = round(average_price, 2)

  context = {
      'segment': 'index',
      'sales': overall_sales,
      'avg': average_price,
      'sold': total_sold,
  }

  return render(request, 'pages/index.html', context)

@login_required(login_url='accounts/login/')
def product(request):
  products = Products.objects.all()
  paginator = Paginator(products, 20)
  page_number = request.GET.get('page')
  page_obj = paginator.get_page(page_number)
  return render(request, 'pages/product.html', { 'segment': 'product','page_obj': page_obj })

@login_required(login_url='accounts/login/')
def prod_details(request, no):
    details = get_object_or_404(Products, no=no)
    other_products = Products.objects.exclude(no=no)[:4]
    
    for product in other_products:
        integer_stars = int(product.ProductRating)
        fractional_part = round(product.ProductRating - integer_stars, 1)
        empty_stars = 4 - integer_stars

        product.integer_stars = integer_stars
        product.fractional_part = fractional_part
        product.empty_stars = empty_stars

    integer_stars = int(details.ProductRating)
    fractional_part = round(details.ProductRating - integer_stars, 1)

    empty_stars = 4 - integer_stars

    context = {
        'details': details,
        'other_products': other_products,
        'integer_stars': integer_stars,
        'fractional_part': fractional_part,
        'empty_stars': empty_stars,
    }

    return render(request, 'pages/prod_details.html', context)

@login_required(login_url='accounts/login/')
def report(request):
  products = Products.objects.all().order_by('no')
  context ={
    'segment': 'report',
    'products': products
  }
  return render(request, 'pages/report.html', context)

@login_required(login_url='accounts/login/')
def report_sales(request):
  sales = Sales.objects.all().order_by('no')
  context ={
    'segment': 'sales',
    'sales': sales
  }
  return render(request, 'pages/report_sales.html', context)

# Authentication
class UserLoginView(LoginView):
  template_name = 'accounts/login.html'
  form_class = LoginForm

def register(request):
  if request.method == 'POST':
    form = RegistrationForm(request.POST)
    if form.is_valid():
      form.save()
      print('Account created successfully!')
      return redirect('/accounts/login/')
    else:
      print("Register failed!")
  else:
    form = RegistrationForm()

  context = { 'form': form }
  return render(request, 'accounts/register.html', context)

def logout_view(request):
  logout(request)
  return redirect('/accounts/login/')

class UserPasswordResetView(PasswordResetView):
  template_name = 'accounts/password_reset.html'
  form_class = UserPasswordResetForm

class UserPasswordResetConfirmView(PasswordResetConfirmView):
  template_name = 'accounts/password_reset_confirm.html'
  form_class = UserSetPasswordForm

class UserPasswordChangeView(PasswordChangeView):
  template_name = 'accounts/password_change.html'
  form_class = UserPasswordChangeForm
