/*
Template Name: Skote - Admin & Dashboard Template
Author: Themesbrand
Website: https://themesbrand.com/
Contact: themesbrand@gmail.com
File: Saas dashboard Init Js File
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


// Line chart
var linechartBasicColors = getChartColorsArray("line-chart");
if (linechartBasicColors) {
    var options = {
        series: [{
            name: 'series1',
            data: [31, 40, 36, 51, 49, 72, 69, 56, 68, 82, 68, 76]
        }],
        chart: {
            height: 320,
            type: 'line',
            toolbar: 'false',
            dropShadow: {
                enabled: true,
                color: '#000',
                top: 18,
                left: 7,
                blur: 8,
                opacity: 0.2
            },
        },
        dataLabels: {
            enabled: false
        },
        colors: linechartBasicColors,

        stroke: {
            curve: 'smooth',
            width: 3,
        },

    };

    var chart = new ApexCharts(document.querySelector("#line-chart"), options);
    chart.render();
}


// Pie chart
// Line chart
var donutchartColors = getChartColorsArray("donut-chart");
if (donutchartColors) {
    var options = {
        series: [56, 38, 26],
        chart: {
            type: 'donut',
            height: 262,
        },
        labels: ['Series A', 'Series B', 'Series C'],
        colors: donutchartColors,
        legend: {
            show: false,
        },
        plotOptions: {
            pie: {
                donut: {
                    size: '70%',
                }
            }
        }
    };

    var chart = new ApexCharts(document.querySelector("#donut-chart"), options);
    chart.render();
}

// Radialchart 1
var radialChartColors = getChartColorsArray("radialchart-1");
if (radialChartColors) {
    var radialoptions1 = {
        series: [37],
        chart: {
            type: 'radialBar',
            width: 60,
            height: 60,
            sparkline: {
                enabled: true
            }
        },
        dataLabels: {
            enabled: false
        },
        colors: radialChartColors,
        plotOptions: {
            radialBar: {
                hollow: {
                    margin: 0,
                    size: '60%'
                },
                track: {
                    margin: 0
                },
                dataLabels: {
                    show: false
                }
            }
        }
    };

    var radialchart1 = new ApexCharts(document.querySelector("#radialchart-1"), radialoptions1);
    radialchart1.render();
}

// Radialchart 2
var radialChart1Colors = getChartColorsArray("radialchart-2");
if (radialChart1Colors) {
    var radialoptions2 = {
        series: [72],
        chart: {
            type: 'radialBar',
            width: 60,
            height: 60,
            sparkline: {
                enabled: true
            }
        },
        dataLabels: {
            enabled: false
        },
        colors: radialChart1Colors,
        plotOptions: {
            radialBar: {
                hollow: {
                    margin: 0,
                    size: '60%'
                },
                track: {
                    margin: 0
                },
                dataLabels: {
                    show: false
                }
            }
        }
    };

    var radialchart2 = new ApexCharts(document.querySelector("#radialchart-2"), radialoptions2);
    radialchart2.render();
}


// Radialchart 3
var radialChart3Colors = getChartColorsArray("radialchart-3");
if (radialChart3Colors) {
    var radialoptions3 = {
        series: [54],
        chart: {
            type: 'radialBar',
            width: 60,
            height: 60,
            sparkline: {
                enabled: true
            }
        },
        dataLabels: {
            enabled: false
        },
        colors: ['#f46a6a'],
        plotOptions: {
            radialBar: {
                hollow: {
                    margin: 0,
                    size: '60%'
                },
                track: {
                    margin: 0
                },
                dataLabels: {
                    show: false
                }
            }
        }
    };

    var radialchart3 = new ApexCharts(document.querySelector("#radialchart-3"), radialoptions3);
    radialchart3.render();
}