/*
Template Name: Skote - Admin & Dashboard Template
Author: Themesbrand
Website: https://themesbrand.com/
Contact: themesbrand@gmail.com
File: Echarts Init Js File
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
                    var color = getComputedStyle(document.documentElement).getPropertyValue(
                        newValue
                    );
                    if (color) return color;
                    else return newValue;
                } else {
                    var val = value.split(",");
                    if (val.length == 2) {
                        var rgbaColor = getComputedStyle(
                            document.documentElement
                        ).getPropertyValue(val[0]);
                        rgbaColor = "rgba(" + rgbaColor + "," + val[1] + ")";
                        return rgbaColor;
                    } else {
                        return newValue;
                    }
                }
            });
        } else {
            console.warn('data-colors Attribute not found on:', chartId);
        }
    }
}

// line chart
var lineChartColors = getChartColorsArray("line-chart");
if (lineChartColors) {
    var dom = document.getElementById("line-chart");
    var myChart = echarts.init(dom);
    var app = {};
    option = null;
    option = {
        // Setup grid
        grid: {
            zlevel: 0,
            x: 50,
            x2: 50,
            y: 30,
            y2: 30,
            borderWidth: 0,
            backgroundColor: 'rgba(0,0,0,0)',
            borderColor: 'rgba(0,0,0,0)',
        },
        xAxis: {
            type: 'category',
            data: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
            axisLine: {
                lineStyle: {
                    color: '#8791af'
                },
            },
        },
        yAxis: {
            type: 'value',
            axisLine: {
                lineStyle: {
                    color: '#8791af'
                },
            },
            splitLine: {
                lineStyle: {
                    color: "rgba(166, 176, 207, 0.1)"
                }
            }
        },
        series: [{
            data: [820, 932, 901, 934, 1290, 1330, 1320],
            type: 'line'
        }],
        color: lineChartColors,
    };
    ;
    if (option && typeof option === "object") {
        myChart.setOption(option, true);
    }
}

// mix line & bar
var mixLineChartColors = getChartColorsArray("mix-line-bar");
if (mixLineChartColors) {
    var dom = document.getElementById("mix-line-bar");
    var myChart = echarts.init(dom);
    var app = {};
    option = null;
    app.title = 'Data view';

    option = {
        // Setup grid
        grid: {
            zlevel: 0,
            x: 80,
            x2: 50,
            y: 30,
            y2: 30,
            borderWidth: 0,
            backgroundColor: 'rgba(0,0,0,0)',
            borderColor: 'rgba(0,0,0,0)',
        },
        tooltip: {
            trigger: 'axis',
            axisPointer: {
                type: 'cross',
                crossStyle: {
                    color: '#999'
                }
            }
        },
        toolbox: {
            orient: 'center',
            left: 0,
            top: 20,
            feature: {
                dataView: { readOnly: false, title: "Data View" },
                magicType: { type: ['line', 'bar'], title: { line: "For line chart", bar: "For bar chart" } },
                restore: { title: "restore" },
                saveAsImage: { title: "Download Image" }
            }
        },
        color: mixLineChartColors,
        legend: {
            data: ['Evaporation', 'Precipitation', 'Average temperature'],
            textStyle: { color: '#8791af' }
        },
        xAxis: [
            {
                type: 'category',
                data: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug'],
                axisPointer: {
                    type: 'shadow'
                },
                axisLine: {
                    lineStyle: {
                        color: '#8791af'
                    },
                },
            }
        ],
        yAxis: [
            {
                type: 'value',
                name: 'Water volume',
                min: 0,
                max: 250,
                interval: 50,
                axisLine: {
                    lineStyle: {
                        color: '#8791af'
                    },
                },
                splitLine: {
                    lineStyle: {
                        color: "rgba(166, 176, 207, 0.1)"
                    }
                },
                axisLabel: {
                    formatter: '{value} ml'
                }
            },
            {
                type: 'value',
                name: 'Temperature',
                min: 0,
                max: 25,
                interval: 5,
                axisLine: {
                    lineStyle: {
                        color: '#8791af'
                    },
                },
                splitLine: {
                    lineStyle: {
                        color: "rgba(166, 176, 207, 0.1)"
                    }
                },
                axisLabel: {
                    formatter: '{value} Ã‚Â°C'
                }
            }
        ],
        series: [
            {
                name: 'Evaporation',
                type: 'bar',
                data: [2.0, 4.9, 7.0, 23.2, 25.6, 76.7, 135.6, 162.2]
            },
            {
                name: 'Precipitation',
                type: 'bar',
                data: [2.6, 5.9, 9.0, 26.4, 28.7, 70.7, 175.6, 182.2]
            },
            {
                name: 'Average Temperature',
                type: 'line',
                yAxisIndex: 1,
                data: [2.0, 2.2, 3.3, 4.5, 6.3, 10.2, 20.3, 23.4]
            }
        ]
    };
    ;
    if (option && typeof option === "object") {
        myChart.setOption(option, true);
    }
}

// Doughnut Chart
var doughnutChartColors = getChartColorsArray("doughnut-chart");
if (doughnutChartColors) {
    var dom = document.getElementById("doughnut-chart");
    var myChart = echarts.init(dom);
    var app = {};
    option = null;

    option = {
        tooltip: {
            trigger: 'item',
            formatter: "{a} <br/>{b}: {c} ({d}%)"
        },
        legend: {
            orient: 'vertical',
            x: 'left',
            data: ['Laptop', 'Tablet', 'Mobile', 'Others', 'Desktop'],
            textStyle: { color: '#8791af' }
        },
        color: doughnutChartColors,
        series: [
            {
                name: 'Total sales',
                type: 'pie',
                radius: ['50%', '70%'],
                avoidLabelOverlap: false,
                label: {
                    normal: {
                        show: false,
                        position: 'center'
                    },
                    emphasis: {
                        show: true,
                        textStyle: {
                            fontSize: '30',
                            fontWeight: 'bold'
                        }
                    }
                },
                labelLine: {
                    normal: {
                        show: false
                    }
                },
                data: [
                    { value: 335, name: 'Laptop' },
                    { value: 310, name: 'Tablet' },
                    { value: 234, name: 'Mobile' },
                    { value: 135, name: 'Others' },
                    { value: 1548, name: 'Desktop' }
                ]
            }
        ]
    };
    ;
    if (option && typeof option === "object") {
        myChart.setOption(option, true);
    }
}

// pie chart
var pieChartColors = getChartColorsArray("pie-chart");
if (pieChartColors) {
    var dom = document.getElementById("pie-chart");
    var myChart = echarts.init(dom);
    var app = {};
    option = null;
    option = {
        tooltip: {
            trigger: 'item',
            formatter: "{a} <br/>{b} : {c} ({d}%)"
        },
        legend: {
            orient: 'vertical',
            left: 'left',
            data: ['Laptop', 'Tablet', 'Mobile', 'Others', 'Desktop'],
            textStyle: { color: '#8791af' }
        },
        color: pieChartColors,
        series: [
            {
                name: 'Total sales',
                type: 'pie',
                radius: '55%',
                center: ['50%', '60%'],
                data: [
                    { value: 335, name: 'Laptop' },
                    { value: 310, name: 'Tablet' },
                    { value: 234, name: 'Mobile' },
                    { value: 135, name: 'Others' },
                    { value: 1548, name: 'Desktop' }
                ],
                itemStyle: {
                    emphasis: {
                        shadowBlur: 10,
                        shadowOffsetX: 0,
                        shadowColor: 'rgba(0, 0, 0, 0.5)'
                    }
                }
            }
        ]
    };
    ;
    if (option && typeof option === "object") {
        myChart.setOption(option, true);
    }
}

// scatter chart
var scatterChartColors = getChartColorsArray("scatter-chart");
if (scatterChartColors) {
    var dom = document.getElementById("scatter-chart");
    var myChart = echarts.init(dom);
    var app = {};
    option = null;
    option = {
        // Setup grid
        grid: {
            zlevel: 0,
            x: 50,
            x2: 50,
            y: 30,
            y2: 30,
            borderWidth: 0,
            backgroundColor: 'rgba(0,0,0,0)',
            borderColor: 'rgba(0,0,0,0)',
        },
        xAxis: {
            axisLine: {
                lineStyle: {
                    color: '#8791af'
                },
            },
            splitLine: {
                lineStyle: {
                    color: "rgba(166, 176, 207, 0.1)"
                }
            }
        },
        yAxis: {
            axisLine: {
                lineStyle: {
                    color: '#8791af'
                },
            },
            splitLine: {
                lineStyle: {
                    color: "rgba(166, 176, 207, 0.1)"
                }
            }
        },
        series: [{
            symbolSize: 10,
            data: [
                [10.0, 8.04],
                [8.0, 6.95],
                [13.0, 7.58],
                [9.0, 8.81],
                [11.0, 8.33],
                [14.0, 9.96],
                [6.0, 7.24],
                [4.0, 4.26],
                [12.0, 10.84],
                [7.0, 4.82],
                [5.0, 5.68]
            ],
            type: 'scatter'
        }],
        color: scatterChartColors
    };
    ;
    if (option && typeof option === "object") {
        myChart.setOption(option, true);
    }
}


// bubble chart
var bubbleChartColors = getChartColorsArray("bubble-chart");
if (bubbleChartColors) {
    var dom = document.getElementById("bubble-chart");
    var myChart = echarts.init(dom);
    var app = {};
    option = null;

    var data = [
        [[28604, 77, 17096869, 'Australia', 1990], [31163, 77.4, 27662440, 'Canada', 1990], [1516, 68, 1154605773, 'China', 1990], [13670, 74.7, 10582082, 'Cuba', 1990], [28599, 75, 4986705, 'Finland', 1990], [29476, 77.1, 56943299, 'France', 1990], [31476, 75.4, 78958237, 'Germany', 1990], [28666, 78.1, 254830, 'Iceland', 1990], [1777, 57.7, 870601776, 'India', 1990], [29550, 79.1, 122249285, 'Japan', 1990], [2076, 67.9, 20194354, 'North Korea', 1990], [12087, 72, 42972254, 'South Korea', 1990], [24021, 75.4, 3397534, 'New Zealand', 1990], [43296, 76.8, 4240375, 'Norway', 1990], [10088, 70.8, 38195258, 'Poland', 1990], [19349, 69.6, 147568552, 'Russia', 1990], [10670, 67.3, 53994605, 'Turkey', 1990], [26424, 75.7, 57110117, 'United Kingdom', 1990], [37062, 75.4, 252847810, 'United States', 1990]],
        [[44056, 81.8, 23968973, 'Australia', 2015], [43294, 81.7, 35939927, 'Canada', 2015], [13334, 76.9, 1376048943, 'China', 2015], [21291, 78.5, 11389562, 'Cuba', 2015], [38923, 80.8, 5503457, 'Finland', 2015], [37599, 81.9, 64395345, 'France', 2015], [44053, 81.1, 80688545, 'Germany', 2015], [42182, 82.8, 329425, 'Iceland', 2015], [5903, 66.8, 1311050527, 'India', 2015], [36162, 83.5, 126573481, 'Japan', 2015], [1390, 71.4, 25155317, 'North Korea', 2015], [34644, 80.7, 50293439, 'South Korea', 2015], [34186, 80.6, 4528526, 'New Zealand', 2015], [64304, 81.6, 5210967, 'Norway', 2015], [24787, 77.3, 38611794, 'Poland', 2015], [23038, 73.13, 143456918, 'Russia', 2015], [19360, 76.5, 78665830, 'Turkey', 2015], [38225, 81.4, 64715810, 'United Kingdom', 2015], [53354, 79.1, 321773631, 'United States', 2015]]
    ];

    option = {
        // Setup grid
        grid: {
            zlevel: 0,
            x: 50,
            x2: 50,
            y: 30,
            y2: 30,
            borderWidth: 0,
            backgroundColor: 'rgba(0,0,0,0)',
            borderColor: 'rgba(0,0,0,0)',
        },
        legend: {
            right: 10,
            data: ['2018', '2019']
        },
        xAxis: {
            axisLine: {
                lineStyle: {
                    color: '#8791af'
                },
            },
            splitLine: {
                lineStyle: {
                    type: 'dashed',
                    color: "rgba(166, 176, 207, 0.1)"
                }
            },
        },
        yAxis: {
            axisLine: {
                lineStyle: {
                    color: '#8791af'
                },
            },
            splitLine: {
                lineStyle: {
                    type: 'dashed',
                    color: "rgba(166, 176, 207, 0.1)"
                }
            },
            scale: true
        },
        series: [{
            name: '2018',
            data: data[0],
            type: 'scatter',
            symbolSize: function (data) {
                return Math.sqrt(data[2]) / 5e2;
            },
            label: {
                emphasis: {
                    show: true,
                    formatter: function (param) {
                        return param.data[3];
                    },
                    position: 'top'
                }
            },
            itemStyle: {
                normal: {
                    shadowBlur: 10,
                    shadowColor: 'rgba('+bubbleChartColors[0]+', 0.5)',
                    shadowOffsetY: 5,
                    color: new echarts.graphic.RadialGradient(0.4, 0.3, 1, [{
                        offset: 0,
                        color: 'rgba('+bubbleChartColors[0]+', 0.1)',
                    }, {
                        offset: 1,
                        color: 'rgb('+bubbleChartColors[0]+')',
                    }])
                }
            }
        }, {
            name: '2019',
            data: data[1],
            type: 'scatter',
            symbolSize: function (data) {
                return Math.sqrt(data[2]) / 5e2;
            },
            label: {
                emphasis: {
                    show: true,
                    formatter: function (param) {
                        return param.data[3];
                    },
                    position: 'top'
                }
            },
            itemStyle: {
                normal: {
                    shadowBlur: 10,
                    shadowColor: 'rgba('+bubbleChartColors[1]+', 0.5)',
                    shadowOffsetY: 5,
                    color: new echarts.graphic.RadialGradient(0.4, 0.3, 1, [{
                        offset: 0,
                        color: 'rgba('+bubbleChartColors[1]+', 0.1)',
                    }, {
                        offset: 1,
                        color: 'rgb('+bubbleChartColors[1]+')',
                    }])
                }
            }
        }]
    };;
    if (option && typeof option === "object") {
        myChart.setOption(option, true);
    }
}

// candlestick chart

var candleStickChartColors = getChartColorsArray("candlestick-chart");
if (candleStickChartColors) {
var dom = document.getElementById("candlestick-chart");
var myChart = echarts.init(dom);
var app = {};
option = null;
option = {
    // Setup grid
    grid: {
        zlevel: 0,
        x: 50,
        x2: 50,
        y: 30,
        y2: 30,
        borderWidth: 0,
        backgroundColor: 'rgba(0,0,0,0)',
        borderColor: 'rgba(0,0,0,0)',
    },
    xAxis: {
        data: ['2017-10-24', '2017-10-25', '2017-10-26', '2017-10-27'],
        axisLine: {
            lineStyle: {
              color: '#8791af'
            },
        },
        splitLine: {
            lineStyle: {
                color:"rgba(166, 176, 207, 0.1)"
            }
        },
    },
    yAxis: {
        axisLine: {
            lineStyle: {
              color: '#8791af'
            },
        },
        splitLine: {
            lineStyle: {
                color:"rgba(166, 176, 207, 0.1)"
            }
        },
    },
    series: [{
        type: 'k',
        data: [
            [20, 30, 10, 35],
            [40, 35, 30, 55],
            [33, 38, 33, 40],
            [40, 40, 32, 42]
        ],
        
        itemStyle: {
            normal: {
                color: candleStickChartColors[0], 
                color0: candleStickChartColors[1],
                borderColor: candleStickChartColors[0],
                borderColor0: candleStickChartColors[1]
            }
        }
    }]
};
;
if (option && typeof option === "object") {
    myChart.setOption(option, true);
}
}


// gauge chart
var gaugeChartColors = getChartColorsArray("gauge-chart");
if (gaugeChartColors) {
    var dom = document.getElementById("gauge-chart");
    var myChart = echarts.init(dom);
    var app = {};
    option = null;
    option = {
    
        tooltip: {
            formatter: "{a} <br/>{b} : {c}%"
        },
        toolbox: {
            feature: {
                restore: { title: "Refresh" },
                saveAsImage: { title: "Download Image" }
            }
        },
        series: [
            {
                name: 'Business indicator',
                type: 'gauge',
                detail: { formatter: '{value}%' },
                axisLine: {
                    lineStyle: {
                        color: [[0.2, gaugeChartColors[0]],[0.8, gaugeChartColors[1]],[1, gaugeChartColors[2]]],
                        width: 20
                    }
                },
                data: [{ value: 50, name: 'Completion rate' }]
            }
        ]
    };

    setInterval(function () {
        option.series[0].data[0].value = (Math.random() * 100).toFixed(2) - 0;
        myChart.setOption(option, true);
    }, 2000);
    ;
    if (option && typeof option === "object") {
        myChart.setOption(option, true);
    }
}