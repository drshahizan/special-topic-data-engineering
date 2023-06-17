from django.shortcuts import render
from .models import Post
from django.views.generic.list import ListView

# Create your views here.
class ManageCourseListView(ListView):
    model = Post
    template_name = 'post/list.html'