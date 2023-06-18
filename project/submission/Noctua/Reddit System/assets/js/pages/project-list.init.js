/*
Template Name: Skote - Admin & Dashboard Template
Author: Themesbrand
Website: https://themesbrand.com/
Contact: themesbrand@gmail.com
File: project list Init Js File
*/

var url = "assets/json/";
var allProjectList = '';
var editList = false;

//Project list by json
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
getJSON("project-list.json", function (err, data) {
    if (err !== null) {
        console.log("Something went wrong: " + err);
    } else {
        allProjectList = data;
        loadProjectList(allProjectList);
        addProjectList();
    }
});

// add edit project list
function addProjectList() {
    var inputValueJson = sessionStorage.getItem('inputValue');
    if (inputValueJson) {
        inputValueJson = JSON.parse(inputValueJson);
        
        Array.from(inputValueJson).forEach(function (element) {
            allProjectList.push(element);
            if ($.fn.DataTable.isDataTable('#projectList-table')) {
                $('#projectList-table').DataTable().destroy();
            }
            loadProjectList(allProjectList)
        });
    }
    // edit list
    var editinputValueJson = sessionStorage.getItem('editInputValue');
    if(editinputValueJson){
        editinputValueJson = JSON.parse(editinputValueJson);
        allProjectList = allProjectList.map(function (item) {
            if (item.id == editinputValueJson.id) {
                return editinputValueJson;
            }
            return item;
        });
        if ($.fn.DataTable.isDataTable('#projectList-table')) {
            $('#projectList-table').DataTable().destroy();
        }
        loadProjectList(allProjectList)
    };
}

// load table list data
function loadProjectList(datas) {
    $('#projectList-table').DataTable({
        data: datas,
        "bLengthChange": false,
        language: {
            oPaginate: {
                sNext: '<i class="mdi mdi-chevron-right"></i>',
                sPrevious: '<i class="mdi mdi-chevron-left"></i>',
            }
        },
        order: [[0, 'desc']],
        columns: [
            {
                data: "id",
                render: function (data, type, full) {
                    return '<div class="d-none">'+full.id+'</div><div class="avatar-sm bg-light rounded p-2">\
                    <img src="'+ full.projectLogoImg + '" alt="" class="img-fluid rounded-circle">\
                    </div>';
                },
            },
            {
                data: null,
                render: function (data, type, full) {
                    return '<div>\
                    <h5 class="text-truncate font-size-14"><a href="javascript: void(0);" class="text-dark">'+ full.projectTitle + '</a></h5>\
                    <p class="text-muted mb-0">'+ full.projectDesc + '</p>\
                    </div>';
                },
            },
            { data: 'dueDate' },
            {
                data: "status",
                render: function (data, type, full) {
                    return isStatus(full.status);
                },
            },
            {
                data: "assignedto",
                render: function (data, type, full) {
                    var assignedElem = full.assignedto;
                    var showElem = 3;
                    var imgHtml = '<div class="avatar-group">';
                    Array.from(assignedElem.slice(0, showElem)).forEach(function (img) {
                        imgHtml += '<a href="javascript: void(0);" class="avatar-group-item" data-img="' + img.assigneeImg + '"  data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="' + img.assigneeName + '">\
                                    <img src="'+ img.assigneeImg + '" alt="" class="rounded-circle avatar-xs" />\
                                </a>';
                    });
                    if(assignedElem.length > showElem){
                        var elemLength = assignedElem.length - showElem;
                        imgHtml += '<a href="javascript: void(0);" class="avatar-group-item"  data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="'+elemLength+' More">\
                        <div class="avatar-xs">\
                        <div class="avatar-title rounded-circle">'+elemLength+'+</div>\
                        </div>\
                    </a>'
                    }
                    imgHtml += '</div>';
                    return imgHtml;
                },
            },
            {
                data: null,
                'bSortable': false,
                render: function (data, type, full) {
                    return '<div class="dropdown">\
                <a href="#" class="dropdown-toggle card-drop" data-bs-toggle="dropdown" aria-expanded="false">\
                    <i class="mdi mdi-dots-horizontal font-size-18"></i>\
                </a>\
                <ul class="dropdown-menu dropdown-menu-end">\
                    <li><a href="projects-create.html" class="dropdown-item edit-list" data-edit-id="'+ full.id + '"><i class="mdi mdi-pencil font-size-16 text-success me-1"></i> Edit</a></li>\
                    <li><a href="#removeItemModal" data-bs-toggle="modal" class="dropdown-item remove-list" data-remove-id="'+ full.id + '"><i class="mdi mdi-trash-can font-size-16 text-danger me-1"></i> Remove</a></li>\
                </ul>\
            </div>';
                },
            },
        ],
        drawCallback: function (oSettings) {
            tooltipElm();
            projectListActions();
        },
    });

    $('#searchTableList').keyup(function () {
        $('#projectList-table').DataTable().search($(this).val()).draw();
    });
    $(".dataTables_length select").addClass('form-select form-select-sm');
    $('.dataTables_paginate').addClass('pagination-rounded');
    $(".dataTables_filter").hide();
}

function isStatus(val) {
    switch (val) {
        case "Completed":
            return ('<span class="badge bg-success">' + val + "</span>");
        case "Inprogress":
            return ('<span class="badge bg-warning">' + val + "</span>");
        case "Delay":
            return ('<span class="badge bg-danger">' + val + "</span>");
    }
}

function _toConsumableArray(arr) { if (Array.isArray(arr)) { for (var i = 0, arr2 = Array(arr.length); i < arr.length; i++) { arr2[i] = arr[i]; } return arr2; } else { return Array.from(arr); } }

function tooltipElm() {
    var tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]');
    var tooltipList = [].concat(_toConsumableArray(tooltipTriggerList)).map(function (tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl);
    });
};

document.getElementById("addProject-btn").addEventListener("click", function () {
    sessionStorage.setItem('editInputValue', "")
});

// project list actions
function projectListActions(){
    // edit list actions
    var getEditid = 0;
	Array.from(document.querySelectorAll(".edit-list")).forEach(function (elem) {
		elem.addEventListener('click', function (event) {
            getEditid = elem.getAttribute('data-edit-id');

            allProjectList = allProjectList.map(function (item) {
				if (item.id == getEditid) {
					sessionStorage.setItem('editInputValue', JSON.stringify(item));
				}
				return item;
			});
        });
    });

    // remove list actions
    Array.from(document.querySelectorAll(".remove-list")).forEach(function (item) {
        item.addEventListener('click', function (event) {
            getid = item.getAttribute('data-remove-id');
            document.getElementById("remove-item").addEventListener("click", function () {
                function arrayRemove(arr, value) {
                    return arr.filter(function (ele) {
                        return ele.id != value;
                    });
                }
                var filtered = arrayRemove(allProjectList, getid);

                allProjectList = filtered;
                if ( $.fn.DataTable.isDataTable('#projectList-table') ) {
                    $('#projectList-table').DataTable().destroy();
                }
                loadProjectList(allProjectList)
                document.getElementById("close-removeProjectModal").click();
            });
        });
    });
}