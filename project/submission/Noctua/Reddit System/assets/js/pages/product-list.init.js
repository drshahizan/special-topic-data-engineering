
/*
Template Name: Skote - Admin & Dashboard Template
Author: Themesbrand
Website: https://themesbrand.com/
Contact: themesbrand@gmail.com
File: product list filter init js
*/


var url = "assets/json/";
var allProductList = '';
var editList = false; 

//order list by json
var getJSON = function (jsonurl, callback) {
    var xhr = new XMLHttpRequest();
    xhr.open("GET", url + jsonurl, true);
    xhr.responseType = "json";
    xhr.onload = function () {
        var status = xhr.status;
        if (status === 200) {
            callback(null, xhr.response);
        } else {
            callback(status, xhr.response);
        }
    };
    xhr.send();
};

// get json
getJSON("ecommerce-product-list.json", function (err, data) {
    if (err !== null) {
        console.log("Something went wrong: " + err);
    } else {
        allProductList = data;
        loadProductData(allProductList);
    }
});

// load product data
function loadProductData(datas) {
    document.querySelector("#product-list").innerHTML = '';
    datas.forEach(function (listData, index) {
        var discountLabel = listData.discount ? '<div class="avatar-sm product-ribbon">\
        <span class="avatar-title rounded-circle bg-primary">'+listData.discount+'</span>\
    </div>' : "";

    document.querySelector("#product-list").innerHTML +='<div class="col-xl-4 col-sm-6">\
        <div class="card">\
            <div class="card-body">\
                <div class="product-img position-relative">\
                    '+discountLabel+'\
                    <img src="'+listData.productImg+'" alt="" class="img-fluid mx-auto d-block">\
                </div>\
                <div class="mt-4 d-flex align-items-center">\
                    <div class="flex-grow-1">\
                    <h5 class="mb-1 text-truncate"><a href="javascript: void(0);" class="text-dark">'+listData.productName+'</a></h5>\
                    <div class="badge bg-success font-size-11"><i class="bx bxs-star me-1"></i>'+listData.rating+'</div>\
                    </div>\
                    <div class="flex-shrink-0">\
                        <h5 class="my-0"><b>'+listData.productPrice+'</b></h5>\
                    </div>\
                </div>\
            </div>\
        </div>\
    </div>';
    });

    
}

Array.from(document.querySelectorAll('.product-list a')).forEach(function (listTab) {
    listTab.addEventListener("click", function () {
        var productListElem = document.querySelector(".file-manager-menu a.active");
        if (productListElem) productListElem.classList.remove("active");
        listTab.classList.add('active');

        var tabname = listTab.querySelector('.tablist-name').innerHTML;
        document.getElementById("product-list").innerHTML = '';

        if (tabname != 'All') {
            var filterData = allProductList.filter(function (productList) {
                return productList.category === tabname;
            });
        } else {
            var filterData = allProductList;
        }
        loadProductData(filterData);
    })
});


$(document).ready(function () {
    var minVal;
    var maxVal;
    $("#pricerange").ionRangeSlider({
        skin: "square",
        type: "double",
        grid: true,
        min: 0,
        max: 1000,
        from: 100,
        to: 800,
        prefix: "$",
        onChange: function (data) {
            minVal = data.from;
            maxVal = data.to;

            filterDataAll = allProductList.filter(function (product) {
                var listArray = product.productPrice.split("$");
                return parseFloat(listArray[1]) >= minVal && parseFloat(listArray[1]) <= maxVal;
            });

            loadProductData(filterDataAll);
        }
    });
});


// Search product list
var searchProductList = document.getElementById("searchProductList");
searchProductList.addEventListener("keyup", function () {
    var inputVal = searchProductList.value.toLowerCase();
    function filterItems(arr, query) {
        return arr.filter(function (el) {
            return (el.productName.toLowerCase().indexOf(query.toLowerCase()) !== -1)
        })
    }

    var filterData = filterItems(allProductList, inputVal);

    loadProductData(filterData);
});


// discount-filter
var arraylist = [];
document.querySelectorAll("#discount-filter .form-check").forEach(function (item) {
    var inputVal = item.querySelector(".form-check-input").value;
    item.querySelector(".form-check-input").addEventListener("change", function () {
        if (item.querySelector(".form-check-input").checked) {
            arraylist.push(inputVal);
        } else {
            arraylist.splice(arraylist.indexOf(inputVal), 1);
        }

        var filterproductdata = allProductList;
        if(item.querySelector(".form-check-input").checked && inputVal == 0){
            filterDataAll = filterproductdata.filter(function (product) {
                if (product.discount) {
                    var listArray = product.discount.split("%");
                    return parseFloat(listArray[0]) < 10;
                }
            });
        }else if(item.querySelector(".form-check-input").checked && arraylist.length > 0){
            var compareval = Math.min.apply(Math, arraylist);
            filterDataAll = filterproductdata.filter(function (product) {
                if (product.discount) {
                    var listArray = product.discount.split("%");
                    return parseFloat(listArray[0]) >= compareval;
                }
            });   
        }else{
            filterDataAll = allProductList;
        }

        loadProductData(filterDataAll);
    });
});


// Customer Rating
document.querySelectorAll("#rating-filter .form-check").forEach(function (item) {
    var inputVal = item.querySelector(".form-check-label .rate-value").innerHTML;
    item.querySelector(".form-check-input").addEventListener("change", function () {
        if (item.querySelector(".form-check-input").checked) {
            arraylist.push(inputVal);
        } else {
            arraylist.splice(arraylist.indexOf(inputVal), 1);
        }

        var filterproductdata = allProductList;
        if(item.querySelector(".form-check-input").checked && inputVal == 1){
            filterDataAll = filterproductdata.filter(function (product) {
                if (product.discount) {
                    var listArray = product.rating;
                    return parseFloat(listArray) == 1;
                }
            });
        }else if(item.querySelector(".form-check-input").checked && arraylist.length > 0){
            var compareval = Math.min.apply(Math, arraylist);
            filterDataAll = filterproductdata.filter(function (product) {
                if (product.rating) {
                    var listArray = product.rating;
                    return parseFloat(listArray) >= compareval;
                }
            });
        }else{
            filterDataAll = allProductList;
        }
        loadProductData(filterDataAll);
    });
});
