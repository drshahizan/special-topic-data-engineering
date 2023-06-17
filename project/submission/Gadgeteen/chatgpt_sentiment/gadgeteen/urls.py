from django.urls import path
from . import views
from django.urls import re_path
from django.contrib.auth import views as auth_views
from django.contrib import admin
from .views import reddit_scrape,index


urlpatterns = [
    path('', index, name='index'),
    path('reddit-scrape/', reddit_scrape, name='reddit_scrape'),
]
