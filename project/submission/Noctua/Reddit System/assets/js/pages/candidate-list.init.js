/*
Template Name: Skote - Admin & Dashboard Template
Author: Themesbrand
Website: https://themesbrand.com/
Contact: themesbrand@gmail.com
File: candidate-list Init Js File
*/

var url = "assets/json/";
var allCandidateList = '';

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
getJSON("candidate-list.json", function (err, data) {
    if (err !== null) {
        console.log("Something went wrong: " + err);
    } else {
        allCandidateList = data;
        loadCandidateListData(allCandidateList);
    }
});

function loadCandidateListData(datas) {
    document.querySelector("#candidate-list").innerHTML = '';

    Array.from(datas).forEach(function (listData, index) {
        var tagHtmlValue = '';
        Array.from(listData.skill).forEach(function (tag, index) {
            tagHtmlValue += '<span class="badge badge-soft-secondary">' + tag + '</span>'
        })
        document.querySelector("#candidate-list").innerHTML += '<div class="col-xl-3 col-md-6">\
        <div class="card">\
            <div class="card-body">\
                <div class="d-flex align-start mb-3">\
                    <div class="flex-grow-1">'+isType(listData.type)+'</div>\
                    <button type="button" class="btn btn-light btn-sm like-btn" data-bs-toggle="button"><i class="bx bx-heart"></i></button>\
                </div>\
                <div class="text-center mb-3">\
                    <img src="'+listData.candidateImg+'" alt="" class="avatar-sm rounded-circle" />\
                    <h6 class="font-size-15 mt-3 mb-1">'+listData.candidateName+'</h6>\
                    <p class="mb-0 text-muted">UI/UX Designer</p>\
                </div>\
                <div class="d-flex mb-3 justify-content-center gap-2 text-muted">\
                    <div>\
                        <i class="bx bx-map align-middle text-primary"></i> '+listData.location+'\
                    </div>\
                    <p class="mb-0 text-center"><i class="bx bx-money align-middle text-primary"></i> '+listData.pay+'</p>\
                </div>\
                <div class="hstack gap-2 justify-content-center">'+tagHtmlValue+'</div>\
                <div class="mt-4 pt-1">\
                    <a href="candidate-overview.php" class="btn btn-soft-primary d-block">View Profile</a>\
                </div>\
            </div>\
        </div>\
    </div>';
    });
}

function isType(val) {
    switch (val) {
        case "Full Time":
            return ('<span class="badge badge-soft-success">' + val + "</span>");
        case "Freelance":
            return ('<span class="badge badge-soft-info">' + val + "</span>");
        case "Part Time":
            return ('<span class="badge badge-soft-danger">' + val + "</span>");
        case "Internship":
            return ('<span class="badge badge-soft-warning">' + val + "</span>");
    }
}

// Search list
var searchElementList = document.getElementById("searchList");
searchElementList.addEventListener("keyup", function () {
    var inputVal = searchElementList.value.toLowerCase();
    function filterItems(arr, query) {
        return arr.filter(function (el) {
            return el.candidateName.toLowerCase().indexOf(query.toLowerCase()) !== -1
        })
    }

    var filterData = filterItems(allCandidateList, inputVal);
    loadCandidateListData(filterData)
});

var date = new Date();
var today = new Date(date.getFullYear(), date.getMonth(), date.getDate());

$('#datepicker1 input').datepicker('setDate', today);

function filterData() {
    var typeVal = document.getElementById("idType").value;
    var pickerVal = document.querySelector("#datepicker1 input").value;

    var filterData = allCandidateList.filter(function (data) {
        var typeFilter = false;
        var dateFilter = false;
        if (data.type == "all" || typeVal == "all") {
            typeFilter = true;
        } else {
            typeFilter = data.type == typeVal;
        }

        if (new Date(data.createDate) <= new Date(pickerVal)) {
            dateFilter = true;
        } else {
            dateFilter = false;
        }

        if (typeFilter && dateFilter) {
            return typeFilter && dateFilter;
        }
    });

    loadCandidateListData(filterData);
}