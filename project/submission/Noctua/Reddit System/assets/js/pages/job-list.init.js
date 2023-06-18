/*
Template Name: Skote - Admin & Dashboard Template
Author: Themesbrand
Website: https://themesbrand.com/
Contact: themesbrand@gmail.com
File: job list Init Js File
*/

var url = "assets/json/";
var allJobList = '';

//Job list by json
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
getJSON("job-list.json", function (err, data) {
    if (err !== null) {
        console.log("Something went wrong: " + err);
    } else {
        allJobList = data;
        loadJobListData(allJobList);
    }
});


function loadJobListData(datas) {
    $('#job-list').DataTable({
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
            { data: "id" },
            { data: "jobTitle" },
            { data: "companyName" },
            { data: "location" },
            { data: "experience" },
            { data: "positions" },
            {
                data: "type",
                render: function (data, type, full) {
                    return isType(full.type);
                },
            },
            { data: "postDate" },
            { data: "updateDate" },
            {
                data: "status",
                render: function (data, type, full) {
                    return isStatus(full.status);
                },
            },
            {
                data: null,
                'bSortable': false,
                render: function (data, type, full) {
                    return '<ul class="list-unstyled hstack gap-1 mb-0">\
                    <li data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="View">\
                        <a href="#" class="btn btn-sm btn-soft-primary"><i class="mdi mdi-eye-outline"></i></a>\
                    </li>\
                    <li data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Edit">\
                        <a href="#" class="btn btn-sm btn-soft-info"><i class="mdi mdi-pencil-outline"></i></a>\
                    </li>\
                    <li data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Delete">\
                        <a href="#jobDelete" data-bs-toggle="modal" class="btn btn-sm btn-soft-danger"><i class="mdi mdi-delete-outline"></i></a>\
                    </li>\
                </ul>';
                },
            },
        ]
    });

    $('#searchTableList').keyup(function () {
        $('#job-list').DataTable().search($(this).val()).draw();
    });
    $('.dataTables_paginate').addClass('pagination-rounded');
    $(".dataTables_filter").hide();
}

function isType(val) {
    switch (val) {
        case "Full Time":
            return ('<span class="badge badge-soft-success">' + val + "</span>");
        case "Part Time":
            return ('<span class="badge badge-soft-danger">' + val + "</span>");
    }
}

function isStatus(val) {
    switch (val) {
        case "Active":
            return ('<span class="badge bg-success">' + val + "</span>");
        case "New":
            return ('<span class="badge bg-info">' + val + "</span>");
        case "Close":
            return ('<span class="badge bg-danger">' + val + "</span>");
    }
}

var date = new Date();
var today = new Date(date.getFullYear(), date.getMonth(), date.getDate());
if(document.querySelector("#datepicker1 input")){
    $('#datepicker1 input').datepicker('setDate', today);
}

function filterData() {
    var isstatus = document.getElementById("idStatus").value;
    var typeVal = document.getElementById("idType").value;
    var pickerVal = document.querySelector("#datepicker1 input").value;

    var filterData = allJobList.filter(function (data) {
        var status = data.status;
        var statusFilter = false;
        var typeFilter = false;
        var dateFilter = false;

        if (status == "all" || isstatus == "all") {
            statusFilter = true;
        } else {
            statusFilter = status == isstatus;
        }

        if (data.type == "all" || typeVal == "all") {
            typeFilter = true;
        } else {
            typeFilter = data.type == typeVal;
        }

        if (new Date(data.postDate) <= new Date(pickerVal)) {
            dateFilter = true;
        } else {
            dateFilter = false;
        }

        if (statusFilter && typeFilter && dateFilter) {
            return statusFilter && typeFilter && dateFilter;
        }
    });

    if ($.fn.DataTable.isDataTable('#job-list')) {
        $('#job-list').DataTable().destroy();
    }
    loadJobListData(filterData);
}