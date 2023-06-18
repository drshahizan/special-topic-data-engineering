/*
Template Name: Skote - Admin & Dashboard Template
Author: Themesbrand
Website: https://themesbrand.com/
Contact: themesbrand@gmail.com
File: ecommerce customer list Js File
*/

var url = "assets/json/";
var customerListData = '';
var editList = false;

//customer list by json
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
getJSON("ecommerce-customer-list.json", function (err, data) {
    if (err !== null) {
        console.log("Something went wrong: " + err);
    } else {
        customerListData = data;
        loadCustomerList(customerListData)
    }
});


// load table list data
function loadCustomerList(datas){
    $('#customerList-table').DataTable({
        data: datas,
        "bLengthChange": false, 
        order: [[0, 'desc']],
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
                    return '<div class="d-none">'+full.id+'</div>\
                    <div class="form-check font-size-16">\
                        <input class="form-check-input" type="checkbox" id="customerlistcheck-'+ full.id + '">\
                        <label class="form-check-label" for="customerlistcheck-'+ full.id + '"></label>\
                    </div>';
                },
            },
            { data: 'userName' },
            { data: 'email' },
            { data: 'phone' },
            {
                data: 'rating',
                render: function (data, type, full) {
                    return '<span class="badge bg-success font-size-12"><i class="mdi mdi-star me-1"></i> ' + full.rating + '</span>';
                },
            },
            { data: 'balance' },
            { data: 'joinDate' },
            {
                data: null,
                'bSortable': false,
                render: function (data, type, full) {
                    return '<div class="dropdown">\
                <a href="#" class="dropdown-toggle card-drop" data-bs-toggle="dropdown" aria-expanded="false">\
                    <i class="mdi mdi-dots-horizontal font-size-18"></i>\
                </a>\
                <ul class="dropdown-menu dropdown-menu-end">\
                    <li><a href="#newCustomerModal" data-bs-toggle="modal" class="dropdown-item edit-list" data-edit-id="'+ full.id + '"><i class="mdi mdi-pencil font-size-16 text-success me-1"></i> Edit</a></li>\
                    <li><a href="#removeItemModal" data-bs-toggle="modal" class="dropdown-item remove-list" data-remove-id="'+ full.id + '"><i class="mdi mdi-trash-can font-size-16 text-danger me-1"></i> Delete</a></li>\
                </ul>\
            </div>';
                },
            },
        ],
        drawCallback: function (oSettings) {
            editCustomerList();
            removeItem();
        },
    });
    
    $('#searchTableList').keyup(function () {
        $('#customerList-table').DataTable().search($(this).val()).draw();
    });
    
    $(".dataTables_length select").addClass('form-select form-select-sm');
    $('.dataTables_paginate').addClass('pagination-rounded');
    $(".dataTables_filter").hide();
}

// form date picker
var date = new Date();
var today = new Date(date.getFullYear(), date.getMonth(), date.getDate());
$('#joindate-input').datepicker('setDate', today);

// create user modal form
var createCustomerForms = document.querySelectorAll('.createCustomer-form')
Array.prototype.slice.call(createCustomerForms).forEach(function (form) {
    form.addEventListener('submit', function (event) {
        if (!form.checkValidity()) {
            event.preventDefault();
            event.stopPropagation();
        } else {
            event.preventDefault();
            var userName = document.getElementById('username-input').value;
            var emailInput = document.getElementById('email-input').value;
            var phoneInput = document.getElementById('phone-input').value;
            var joinDateInput = document.getElementById('joindate-input').value;

            if (userName !== "" && emailInput !== "" && phoneInput !== "" && joinDateInput !== "" && !editList){
                var newUserId = findNextId();
                var newList = {
                    "id": newUserId,
                    "userName": userName,
                    "email": emailInput,
                    "phone": phoneInput,
                    "rating": "--",
                    "balance": "$00",
                    "joinDate": joinDateInput
                };
                
                customerListData.push(newList)
            }else if(userName !== "" && emailInput !== "" && phoneInput !== "" && joinDateInput !== "" && editList){
                var getEditid = 0;
                getEditid = document.getElementById("userid-input").value;
                customerListData = customerListData.map(function (item) {
                    if (item.id == getEditid) {
                        var editObj = {
                            'id': getEditid,
                            "userName": userName,
                            "email": emailInput,
                            "phone": phoneInput,
                            "rating": item.rating,
                            "balance": item.balance,
                            'joinDate': joinDateInput
                        }
                        return editObj;
                    }
                    return item;
                });
                editList = false;
            }
            if ( $.fn.DataTable.isDataTable('#customerList-table') ) {
                $('#customerList-table').DataTable().destroy();
            }
            loadCustomerList(customerListData)
            $("#newCustomerModal").modal("hide");
        }
        form.classList.add('was-validated');
    }, false)
});

function fetchIdFromObj(member) {
    return parseInt(member.id);
}

function findNextId() {
    if (customerListData.length === 0) {
        return 0;
    }
    var lastElementId = fetchIdFromObj(customerListData[customerListData.length - 1]),
        firstElementId = fetchIdFromObj(customerListData[0]);
    return (firstElementId >= lastElementId) ? (firstElementId + 1) : (lastElementId + 1);
}

// edit list event
function editCustomerList() {
    var getEditid = 0;
    Array.from(document.querySelectorAll(".edit-list")).forEach(function (elem) {
        elem.addEventListener('click', function (event) {
            getEditid = elem.getAttribute('data-edit-id');
            editList = true;
            document.getElementById("createCustomer-form").classList.remove("was-validated")
            customerListData = customerListData.map(function (item) {
                if (item.id == getEditid) {
                    document.getElementById("newCustomerModalLabel").innerHTML = "Edit Profile";
                    document.getElementById("addCustomer-btn").innerHTML = "Update";
                    document.getElementById("userid-input").value = item.id;
                    document.getElementById("username-input").value = item.userName;
                    document.getElementById("email-input").value = item.email;
                    document.getElementById("phone-input").value = item.phone;
                    $('#joindate-input').datepicker('setDate', item.joinDate);
                }
                return item;
            });
        });
    });
}

// add list event
Array.from(document.querySelectorAll(".addCustomers-modal")).forEach(function(elem) {
    elem.addEventListener('click', function (event) {
        editList = false;
        document.getElementById("createCustomer-form").classList.remove("was-validated");
        document.getElementById("newCustomerModalLabel").innerHTML = "Add Customer";
        document.getElementById("addCustomer-btn").innerHTML = "Add Customer";
        document.getElementById("userid-input").value = "";
        document.getElementById("username-input").value = "";
        document.getElementById("email-input").value = "";
        document.getElementById("phone-input").value = "";
        $('#joindate-input').datepicker('setDate', today);
    });
});


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
                var filtered = arrayRemove(customerListData, getid);

                customerListData = filtered;
                if ( $.fn.DataTable.isDataTable('#customerList-table') ) {
                    $('#customerList-table').DataTable().destroy();
                }
                loadCustomerList(customerListData);
                document.getElementById("close-removeCustomerModal").click();
            });
        });
    });
}
