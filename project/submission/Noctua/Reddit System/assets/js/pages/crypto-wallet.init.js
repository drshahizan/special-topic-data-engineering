/*
Template Name: Skote - Admin & Dashboard Template
Author: Themesbrand
Website: https://themesbrand.com/
Contact: themesbrand@gmail.com
File: Crypto wallet Init Js File
*/

// get colors array from the string
function getChartColorsArray(chartId) {
    if (document.getElementById(chartId) !== null) {
        var colors = document.getElementById(chartId).getAttribute("data-colors");
        if (colors) {
            colors = JSON.parse(colors);
            return colors.map(function (value) {
                var newValue = value.replace(" ", "");
                if (newValue.indexOf(",") === -1) {
                    var color = getComputedStyle(document.documentElement).getPropertyValue(newValue);
                    if (color) return color;
                    else return newValue;;
                } else {
                    var val = value.split(',');
                    if (val.length == 2) {
                        var rgbaColor = getComputedStyle(document.documentElement).getPropertyValue(val[0]);
                        rgbaColor = "rgba(" + rgbaColor + "," + val[1] + ")";
                        return rgbaColor;
                    } else {
                        return newValue;
                    }
                }
            });
        }
    }
}


// overview-chart
var overviewChartColors = getChartColorsArray("overview-chart");
if (overviewChartColors) {
    var options = {
        series: [{
            type: 'area',
            name: 'BTC',
            data: [87, 57, 74, 99, 75, 38, 62, 47, 82, 56, 45, 47]
        }, {
            type: 'area',
            name: 'ETH',
            data: [28, 41, 52, 42, 13, 18, 29, 18, 36, 51, 55, 35]
        }, {
            type: 'line',
            name: 'LTC',
            data: [45, 52, 38, 24, 33, 65, 45, 75, 54, 18, 28, 10]
        }],
        chart: {
            height: 240,
            type: 'line',
            toolbar: {
                show: false,
            }
        },
        dataLabels: {
            enabled: false
        },
        stroke: {
            curve: 'smooth',
            width: 2,
            dashArray: [0, 0, 3]
        },
        fill: {
            type: 'solid',
            opacity: [0.15, 0.05, 1],
        },
        xaxis: {
            categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
        },
        colors: overviewChartColors,
    };

    var chartOverview = new ApexCharts(document.querySelector("#overview-chart"), options);
    chartOverview.render();

    // datatable
    $(document).ready(function () {
        $('#datatable').DataTable();

        $(".dataTables_length select").addClass('form-select form-select-sm');
    });
}