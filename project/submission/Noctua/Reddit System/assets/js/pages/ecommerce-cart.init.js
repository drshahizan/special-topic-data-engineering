/*
Template Name: Skote - Admin & Dashboard Template
Author: Themesbrand
Website: https://themesbrand.com/
Contact: themesbrand@gmail.com
File: ecommerce cart Js File
*/

var currencySign = "$";
var taxRate = 0.125;
var shippingRate = 25.00;
var discountRate = 0.15;

//Bootstrap-TouchSpin
$("input[name='demo_vertical']").TouchSpin({
    verticalbuttons: true
});


$("input[name='demo_vertical']").on('change', function (event) {

    // console.log(event.currentTarget.value)
    updateQuantity(event.currentTarget);
})

function recalculateCart() {
    var subtotal = 0;

    Array.from(document.getElementsByClassName("product")).forEach(function (item) {
        var productPrice = item.querySelector(".product-price").innerHTML;
        var productQuality = item.querySelector(".product-quantity").value;

        var priceTotal = productPrice * productQuality

        item.querySelector(".product-line-price").innerHTML = priceTotal.toFixed(2);

        Array.from(item.getElementsByClassName('product-line-price')).forEach(function (e) {
            subtotal += parseFloat(e.innerHTML);
        });
    });

    /* Calculate totals */
    var tax = subtotal * taxRate;
    var discount = subtotal * discountRate;

    var shipping = (subtotal > 0 ? shippingRate : 0);
    var total = subtotal + tax + shipping - discount;

    document.getElementById("cart-subtotal").innerHTML = currencySign + subtotal.toFixed(2);
    document.getElementById("cart-discount").innerHTML = "-" + currencySign + discount.toFixed(2);
    document.getElementById("cart-shipping").innerHTML = currencySign + shipping.toFixed(2);
    document.getElementById("cart-tax").innerHTML = currencySign + tax.toFixed(2);
    document.getElementById("cart-total").innerHTML = currencySign + total.toFixed(2);
}

function updateQuantity(quantityInput) {
    var productRow = quantityInput.closest('.product');
    var price;
    if (productRow || productRow.getElementsByClassName('product-price'))
        Array.from(productRow.getElementsByClassName('product-price')).forEach(function (e) {
            price = parseFloat(e.innerHTML);
        });

    var quantity = quantityInput.value;
    var linePrice = price * quantity;
    /* Update line price display and recalc cart totals */
    Array.from(productRow.getElementsByClassName('product-line-price')).forEach(function (e) {
        e.innerHTML = linePrice.toFixed(2);
        recalculateCart();
    });
}

recalculateCart();

// Remove product from cart
var removeProduct = document.getElementById('removeItemModal')
if (removeProduct)
    removeProduct.addEventListener('show.bs.modal', function (e) {
        document.getElementById('remove-item').addEventListener('click', function (event) {
            e.relatedTarget.closest('.product').remove();
            document.getElementById("close-removeProductModal").click();
            recalculateCart();
        });
    });