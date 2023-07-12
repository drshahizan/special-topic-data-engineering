from django.urls import path
from . import views
from django.urls import re_path
from django.contrib.auth import views as auth_views
from django.contrib import admin
from .views import dashboard,index,positive_word_cloud,negative_word_cloud,sentiment_pie_chart,sentiment_length_plot


urlpatterns = [
    path('', index, name='index'),
    path('dashboard/', dashboard, name='dashboard'),
    path('positive_word_cloud/', positive_word_cloud, name='positive_word_cloud'),
    path('negative_word_cloud/', negative_word_cloud, name='negative_word_cloud'),
    path('sentiment_pie_chart/', sentiment_pie_chart, name='sentiment_pie_chart'),
    path('sentiment_length_plot/', sentiment_length_plot, name='sentiment_length_plot'),
    
]
