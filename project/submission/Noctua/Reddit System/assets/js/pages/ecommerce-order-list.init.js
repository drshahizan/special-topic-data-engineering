/*
Template Name: Skote - Admin & Dashboard Template
Author: Themesbrand
Website: https://themesbrand.com/
Contact: themesbrand@gmail.com
File: ecommerce order list Js File
*/

var url = "assets/json/";
var allOrderList = '';
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
getJSON("ecommerce-order-list.json", function (err, data) {
    if (err !== null) {
        console.log("Something went wrong: " + err);
    } else {
        allOrderList = data;
        loadOrderListData(allOrderList);
    }
});

function loadOrderListData(datas){
    $('#order-list').DataTable({
        data: datas,
        "bLengthChange": false,
        order: [[1, 'desc']],
        language: {
            oPaginate: {
                sNext: '<i class="mdi mdi-chevron-right"></i>',
                sPrevious: '<i class="mdi mdi-chevron-left"></i>',
            }
        },
        columns: [
            {
                data: "id",
                render: function (data, type, full) {
                    return '<div class="form-check font-size-16">\
                        <input class="form-check-input" type="checkbox" id="orderlistIdCheck-'+ full.id + '">\
                        <label class="form-check-label" for="orderlistIdCheck-'+ full.id + '"></label>\
                    </div>';
                },
            },
            { 
                data: null,
                render: function (data, type, full) {
                    return '<a href="javascript: void(0);" class="text-body orderlist-id fw-bold">#SK'+ full.id + '</a>';
                },
            },{ 
                data: "billName",
                render: function (data, type, full) {
                    return '<div class="customerlist-name">'+ full.billName + '</div>';
                },
            },
            { data: 'date' },
            { data: 'totalPay' },
            { 
                data: "payStatus",
                render: function (data, type, full) {
                    return isStatus(full.payStatus);
                },
            },
            { 
                data: "payMethod",
                render: function (data, type, full) {
                    return isMethod(full.payMethod);
                },
            },
            {
                data: null,
                'bSortable': false,
                render: function (data, type, full) {
                    return '<button type="button" class="btn btn-primary btn-sm btn-rounded viewdetail-btn" data-bs-toggle="modal" data-bs-target=".orderdetailsModal">View Details</button>';
                },
            },
            {
                data: null,
                'bSortable': false,
                render: function (data, type, full) {
                    return '<div class="d-flex gap-3">\
                    <a href="#newOrderModal" data-bs-toggle="modal" class="text-success edit-list" data-edit-id="'+ full.id + '"><i class="mdi mdi-pencil font-size-18"></i></a>\
                    <a href="#removeItemModal" data-bs-toggle="modal" class="text-danger remove-list" data-remove-id="'+ full.id + '"><i class="mdi mdi-delete font-size-18"></i></a>\
                </div>';
                },
            },
        ],
        drawCallback: function (oSettings) {
            editOrderList();
            removeItem();
            orderDetailShow();
        },
    });

    $('#searchTableList').keyup(function () {
        $('#order-list').DataTable().search($(this).val()).draw();
    });
    $(".dataTables_length select").addClass('form-select form-select-sm');
    $('.dataTables_paginate').addClass('pagination-rounded');
    $(".dataTables_filter").hide();
}

function isStatus(val) {
    switch (val) {
        case "Paid":
            return ('<span class="badge rounded-pill badge-soft-success font-size-12">' + val + "</span>");
        case "Refund":
            return ('<span class="badge rounded-pill badge-soft-warning font-size-12">' + val + "</span>");
        case "Chargeback":
            return ('<span class="badge rounded-pill badge-soft-danger font-size-12">' + val + "</span>");
    }
}

function isMethod(val) {
    switch (val) {
        case "Mastercard":
            return ('<div><i class="fab fa-cc-mastercard me-1"></i>' + val + "</div>");
        case "Visa":
            return ('<div><i class="fab fa-cc-visa me-1"></i>' + val + "</div>");
        case "Paypal":
            return ('<div><i class="fab fa-cc-paypal me-1"></i>' + val + "</div>");
        case "COD":
            return ('<div><i class="fas fa-money-bill-alt me-1"></i>' + val + "</div>");
    }
}


var date = new Date();
var today = new Date(date.getFullYear(), date.getMonth(), date.getDate());

$('#orderdate-input').datepicker('setDate', today);

//Create a new folder
var createOrderForms = document.querySelectorAll('.createorder-form')
Array.prototype.slice.call(createOrderForms).forEach(function (form) {
    form.addEventListener('submit', function (event) {
        if (!form.checkValidity()) {
            event.preventDefault();
            event.stopPropagation();
        } else {
            event.preventDefault();
            var customerName = document.getElementById('customername-field').value;
            var orderDateInput = document.getElementById('orderdate-input').value;
            var payAmountInput = document.getElementById('payamount-input').value;
            var payStatusInput = document.getElementById('paystatus-input').value;
            var payMethodInput = document.getElementById('paymethod-input').value;

            if (customerName !== "" && orderDateInput !== "" && payAmountInput !== "" && payStatusInput !== "" && payMethodInput !== "" && !editList) {
                var newOrderId = findNextId();
                var newOrder = {
                    'id': newOrderId,
                    "billName": customerName,
                    "date": orderDateInput,
                    "totalPay": payAmountInput,
                    "payStatus": payStatusInput,
                    'payMethod': payMethodInput
                };

                allOrderList.push(newOrder);
            }else if(customerName !== "" && orderDateInput !== "" && payAmountInput !== "" && payStatusInput !== "" && payMethodInput !== "" && editList){
                var getEditid = 0;
                getEditid = document.getElementById("orderid-input").value;
                allOrderList = allOrderList.map(function (item) {
                    if (item.id == getEditid) {
                        var editObj = {
                            'id': getEditid,
                            "billName": customerName,
                            "date": orderDateInput,
                            "totalPay": payAmountInput,
                            "payStatus": payStatusInput,
                            'payMethod': payMethodInput
                        }
                        return editObj;
                    }
                    return item;
                });
                editList = false;
            }

            if ( $.fn.DataTable.isDataTable('#order-list') ) {
                $('#order-list').DataTable().destroy();
            }
            loadOrderListData(allOrderList)
            $("#newOrderModal").modal("hide");
        }
        form.classList.add('was-validated');
    }, false)
});


function fetchIdFromObj(member) {
    return parseInt(member.id);
}

function findNextId() {
    if (allOrderList.length === 0) {
        return 0;
    }
    var lastElementId = fetchIdFromObj(allOrderList[allOrderList.length - 1]),
        firstElementId = fetchIdFromObj(allOrderList[0]);
    return (firstElementId >= lastElementId) ? (firstElementId + 1) : (lastElementId + 1);
}

Array.from(document.querySelectorAll(".addOrder-modal")).forEach(function (elem) {
    elem.addEventListener('click', function (event) {
        editList = false;
        document.getElementById("createorder-form").classList.remove('was-validated');
        document.getElementById("newOrderModalLabel").innerHTML = "Add New Order";
        document.getElementById("addNewOrder-btn").innerHTML = "Create";
        document.getElementById("orderid-input").value = "";
        document.getElementById("customername-field").value = "";
        $('#orderdate-input').datepicker('setDate', today);
        document.getElementById("payamount-input").value = "";
        document.getElementById("paystatus-input").value = "Paid";
        document.getElementById("paymethod-input").value = "Mastercard";
    });
});

// edit order list function
function editOrderList() {
    var getEditid = 0;
    Array.from(document.querySelectorAll(".edit-list")).forEach(function (elem) {
        elem.addEventListener('click', function (event) {
            getEditid = elem.getAttribute('data-edit-id');
            editList = true;
            document.getElementById("createorder-form").classList.remove('was-validated');
            allOrderList = allOrderList.map(function (item) {
                if (item.id == getEditid) {
                    document.getElementById("newOrderModalLabel").innerHTML = "Edit Order";
                    document.getElementById("addNewOrder-btn").innerHTML = "Save";
                    document.getElementById("orderid-input").value = item.id;
                    document.getElementById("customername-field").value = item.billName;
                    $('#orderdate-input').datepicker('setDate', item.date);
                    document.getElementById("payamount-input").value = item.totalPay;
                    document.getElementById("paystatus-input").value = item.payStatus;
                    document.getElementById("paymethod-input").value = item.payMethod;
                }
                return item;
            });
        });
    });
}

// remove item
function removeItem() {
    var getid = 0;
    Array.from(document.querySelectorAll(".remove-list")).forEach(function (item) {
        item.addEventListener('click', function (event) {
            getid = item.getAttribute('data-remove-id');
            document.getElementById("remove-item").addEventListener("click", function () {
                function arrayRemove(arr, value) {
                    return arr.filter(function (ele) {
                        return ele.id != value;
                    });
                }
                var filtered = arrayRemove(allOrderList, getid);

                allOrderList = filtered;
                if ( $.fn.DataTable.isDataTable('#order-list') ) {
                    $('#order-list').DataTable().destroy();
                }
                loadOrderListData(allOrderList);
                document.getElementById("close-removeOrderModal").click();
            });
        });
    });
}

function orderDetailShow() {
    Array.from(document.querySelectorAll("#order-list tbody tr")).forEach(function (item) {
        item.querySelector(".viewdetail-btn").addEventListener("click", function () {
            
          var orderlistId = item.querySelector(".orderlist-id").innerHTML;
          var customerlistName = item.querySelector(".customerlist-name").innerHTML;
          
          document.querySelector("#orderlist-overview .list-id").innerHTML = orderlistId;
          document.querySelector("#orderlist-overview .orderlist-customer").innerHTML = customerlistName;
        });
    });
}