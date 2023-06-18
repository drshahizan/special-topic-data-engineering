/*
Template Name: Skote - Admin & Dashboard Template
Author: Themesbrand
Website: https://themesbrand.com/
Contact: themesbrand@gmail.com
File: job list Init Js File
*/

var url = "assets/json/";
var allJobList = '';

var prevButton = document.getElementById('page-prev');
var nextButton = document.getElementById('page-next');

// configuration variables
var currentPage = 1;
var itemsPerPage = 8;

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
getJSON("job-grid-list.json", function (err, data) {
    if (err !== null) {
        console.log("Something went wrong: " + err);
    } else {
        allJobList = data;
        loadJobListData(allJobList, currentPage);
        paginationEvents();
    }
});


function loadJobListData(datas, page) {
    var pages = Math.ceil(datas.length / itemsPerPage)
    // make sure page is in bounds 
    if (page < 1) page = 1
    if (page > pages) page = pages
    document.querySelector("#jobgrid-list").innerHTML = '';

    for (var i = (page - 1) * itemsPerPage; i < (page * itemsPerPage) && i < datas.length; i++) {
        // datas.forEach(function (listData, index) {
            if (datas[i]) {
        var tagHtmlValue = '';
        Array.from(datas[i].requirement).forEach(function (tag, index) {
            var tagClass = '';
            if (tag == "Full Time") {
                tagClass = 'badge-soft-success'
            } else if (tag == "Urgent") {
                tagClass = 'badge-soft-warning'
            } else if (tag == "Private") {
                tagClass = 'badge-soft-info'
            }

            tagHtmlValue += '<span class="badge rounded-1 ' + tagClass + '">' + tag + '</span>'
        })

        document.querySelector("#jobgrid-list").innerHTML += '<div class="col-xl-3 col-md-6">\
        <div class="card">\
            <div class="card-body">\
                <img src="'+ datas[i].image + '" alt="" height="50" class="mb-3">\
                <h5 class="fs-17 mb-2"><a href="javascript:void(0);" class="text-dark">'+ datas[i].jobTitle + '</a> <small class="text-muted fw-normal">(' + datas[i].experience + ')</small></h5>\
                <ul class="list-inline mb-0">\
                    <li class="list-inline-item">\
                        <p class="text-muted fs-14 mb-1">'+ datas[i].companyName + '</p>\
                    </li>\
                    <li class="list-inline-item">\
                        <p class="text-muted fs-14 mb-0"><i class="mdi mdi-map-marker"></i>'+ datas[i].location + '</p>\
                    </li>\
                    <li class="list-inline-item">\
                        <p class="text-muted fs-14 mb-0"><i class="uil uil-wallet"></i>'+ datas[i].salary + '</p>\
                    </li>\
                </ul>\
                <div class="mt-3 hstack gap-2">'+ tagHtmlValue + '</div>\
                <div class="mt-4 hstack gap-2">\
                    <a href="#!" data-bs-toggle="modal" class="btn btn-soft-success w-100">View Profile</a>\
                    <a href="#applyJobs" data-bs-toggle="modal" class="btn btn-soft-primary w-100">Apply Now</a>\
                </div>\
            </div>\
        </div>\
    </div>';
        // });
    }
    }
    selectedPage();

    currentPage == 1 ? prevButton.classList.add('disabled') : prevButton.classList.remove('disabled');
    currentPage == pages ? nextButton.classList.add('disabled') : nextButton.classList.remove('disabled');
}


//datepicker1 filter
var date = new Date();
var today = new Date(date.getFullYear(), date.getMonth(), date.getDate());

$('#datepicker1 input').datepicker('setDate', today).on('changeDate', function (e) {
    var pickerVal = document.querySelector("#datepicker1 input").value;
    var filterData = allJobList.filter(function (data) {
        return new Date(data.postDate) <= new Date(pickerVal)
    });

    var pageNumber = document.getElementById('page-num');
    pageNumber.innerHTML = "";
    var dataPageNum = Math.ceil(filterData.length / itemsPerPage)
    // for each page
    for (var i = 1; i < dataPageNum + 1; i++) {
        pageNumber.innerHTML += "<a class='page-link clickPageNumber' href='#'>" + i + "</a>";
    }

    loadJobListData(filterData, currentPage);
});;

function selectedPage() {
    var pagenumLink = document.getElementById('page-num').getElementsByClassName('clickPageNumber');
    for (var i = 0; i < pagenumLink.length; i++) {
        if (i == currentPage - 1) {
            pagenumLink[i].classList.add("active");
        } else {
            pagenumLink[i].classList.remove("active");
        }
    }
};

// paginationEvents
function paginationEvents() {
    var numPages = function numPages() {
        return Math.ceil(allJobList.length / itemsPerPage);
    };

    function clickPage() {
        document.addEventListener('click', function (e) {
            if (e.target.nodeName == "A" && e.target.classList.contains("clickPageNumber")) {
                currentPage = e.target.textContent;
                loadJobListData(allJobList, currentPage);
            }
        });
    };

    function pageNumbers() {
        var pageNumber = document.getElementById('page-num');
        pageNumber.innerHTML = "";
        // for each page
        for (var i = 1; i < numPages() + 1; i++) {
            pageNumber.innerHTML += "<a class='page-link clickPageNumber' href='#'>" + i + "</a>";
        }
    }

    prevButton.addEventListener('click', function () {
        if (currentPage > 1) {
            currentPage--;
            loadJobListData(allJobList, currentPage);
        }
    });

    nextButton.addEventListener('click', function () {
        if (currentPage < numPages()) {
            currentPage++;
            loadJobListData(allJobList, currentPage);
        }
    });

    pageNumbers();
    clickPage();
    selectedPage();
}

// Search list
var searchElementList = document.getElementById("searchJob");
searchElementList.addEventListener("keyup", function () {
    var inputVal = searchElementList.value.toLowerCase();
    function filterItems(arr, query) {
        return arr.filter(function (el) {
            return el.jobTitle.toLowerCase().indexOf(query.toLowerCase()) !== -1
        })
    }

    var filterData = filterItems(allJobList, inputVal);

    searchResult(filterData);
    loadJobListData(filterData, currentPage);
});


function searchResult(data) {
    if (data.length == 0) {
        document.getElementById("pagination-element").style.display = "none";
    } else {
        document.getElementById("pagination-element").style.display = "flex";
    }

    var pageNumber = document.getElementById('page-num');
    pageNumber.innerHTML = "";
    var dataPageNum = Math.ceil(data.length / itemsPerPage)
    // for each page
    for (var i = 1; i < dataPageNum + 1; i++) {
        pageNumber.innerHTML += "<div class='page-item'><a class='page-link clickPageNumber' href='javascript:void(0);'>" + i + "</a></div>";
    }
}