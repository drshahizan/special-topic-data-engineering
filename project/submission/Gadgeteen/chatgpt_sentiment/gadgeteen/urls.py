from django.urls import path
from . import views
from django.urls import re_path
from django.contrib.auth import views as auth_views
from django.contrib import admin


urlpatterns = [
    path('',
         views.ManageCourseListView.as_view(),
         name='manage_course_list'),
]
