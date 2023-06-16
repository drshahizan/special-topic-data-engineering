from django.shortcuts import get_object_or_404, render, redirect
from django.core.paginator import Paginator
from django.contrib.auth.views import LoginView, PasswordResetView, PasswordChangeView, PasswordResetConfirmView
from admin_soft.forms import RegistrationForm, LoginForm, UserPasswordResetForm, UserSetPasswordForm, UserPasswordChangeForm
from django.contrib.auth import logout
from .models import Products

# Create your views here.

# Pages
def index(request):
  return render(request, 'pages/index.html', { 'segment': 'index' })

def billing(request):
  return render(request, 'pages/billing.html', { 'segment': 'billing' })

def tables(request):
  return render(request, 'pages/tables.html', { 'segment': 'tables' })

def vr(request):
  return render(request, 'pages/virtual-reality.html', { 'segment': 'vr' })

def profile(request):
  return render(request, 'pages/profile.html', { 'segment': 'profile' })

def product(request):
  products = Products.objects.all()
  paginator = Paginator(products, 20)
  page_number = request.GET.get('page')
  page_obj = paginator.get_page(page_number)
  return render(request, 'pages/product.html', { 'segment': 'product','page_obj': page_obj })

def prod_details(request, no):
  details = get_object_or_404(Products, no=no)
  return render(request, 'pages/prod_details.html', { 'segment': 'prod_details', 'details': details })

def sales_reports(request):
  return render(request, 'pages/sales_reports.html', { 'segment': 'sales_reports' })

def product_reports(request):
  return render(request, 'pages/prod_reports.html', { 'segment': 'prod_reports' })


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
