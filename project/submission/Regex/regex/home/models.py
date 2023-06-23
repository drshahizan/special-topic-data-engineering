from django.db import models
# Create your models here.

class Products(models.Model):
    no = models.IntegerField(primary_key=True)
    Product_href = models.CharField(max_length=200)
    ProductName = models.CharField(max_length=200)
    ProductPrice = models.DecimalField(max_digits=5, decimal_places=2)
    ProductSold = models.IntegerField()
    ProductRating = models.DecimalField(max_digits=2, decimal_places=1)
    ProductDesc = models.CharField(max_length=3000)
    ProductImg = models.CharField(max_length=100)
    Product_5star = models.DecimalField(max_digits=3, decimal_places=1)
    Product_4Star = models.DecimalField(max_digits=3, decimal_places=1)
    Product_3Star = models.DecimalField(max_digits=3, decimal_places=1)
    Product_2Star = models.DecimalField(max_digits=3, decimal_places=1)
    Product_1Star = models.DecimalField(max_digits=3, decimal_places=1)
    class Meta:
        db_table = 'tb_products'
        app_label = 'home'

class Sales(models.Model):
    no = models.IntegerField(primary_key=True)
    Product = models.ForeignKey(Products, on_delete=models.CASCADE)
    ProductSales = models.DecimalField(max_digits=10, decimal_places=2)
    class Meta:
        db_table = 'tb_sales'
        app_label = 'home'