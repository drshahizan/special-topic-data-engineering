/*
Template Name: Skote - Admin & Dashboard Template
Author: Themesbrand
Website: https://themesbrand.com/
Contact: themesbrand@gmail.com
File: file manager Init Js File
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


var radialChartColors = getChartColorsArray("radial-chart");
if (radialChartColors) {
    var options = {
        series: [76],
        chart: {
            height: 150,
            type: 'radialBar',
            sparkline: {
                enabled: true
            }
        },
        colors: ['#556ee6'],
        plotOptions: {
            radialBar: {
                startAngle: -90,
                endAngle: 90,
                track: {
                    background: "#e7e7e7",
                    strokeWidth: '97%',
                    margin: 5, // margin is in pixels

                },

                hollow: {
                    size: '60%',
                },

                dataLabels: {
                    name: {
                        show: false
                    },
                    value: {
                        offsetY: -2,
                        fontSize: '16px'
                    }
                }
            }
        },
        grid: {
            padding: {
                top: -10
            }
        },
        stroke: {
            dashArray: 3
        },
        labels: ['Storage'],
    };
    var chart = new ApexCharts(document.querySelector("#radial-chart"), options);
    chart.render();
}