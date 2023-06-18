/*
Template Name: Skote - Admin & Dashboard Template
Author: Themesbrand
Website: https://themesbrand.com/
Contact: themesbrand@gmail.com
File: Sparkline chart Init
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

$(document).ready(function() {
    var SparklineCharts = function() {
      var sparklineChart1Colors = getChartColorsArray("sparkline1");
      if (sparklineChart1Colors) {
        $('#sparkline1').sparkline([20, 40, 30], {
          type: 'pie',
          height: '200',
          resize: true,
          sliceColors: sparklineChart1Colors
        });
      }
  
      var sparklineCharts2Colors = getChartColorsArray("sparkline2");
      if (sparklineCharts2Colors) {
        $("#sparkline2").sparkline([5,6,2,8,9,4,7,10,11,12,10,4,7,10], {
          type: 'bar',
          height: '200',
          barWidth: 10,
          barSpacing: 7,
          barColor: sparklineCharts2Colors
        });
      }
  
      var sparklineCharts3Colors = getChartColorsArray("sparkline3");
      if (sparklineCharts3Colors) {
        $('#sparkline3').sparkline([5, 6, 2, 9, 4, 7, 10, 12,4,7,10], {
          type: 'bar',
          height: '200',
          barWidth: '10',
          resize: true,
          barSpacing: '7',
          barColor: sparklineCharts3Colors[0]
        });
        $('#sparkline3').sparkline([5, 6, 2, 9, 4, 7, 10, 12,4,7,10], {
          type: 'line',
          height: '200',
          lineColor: sparklineCharts3Colors[1],
          fillColor: 'transparent',
          composite: true,
          lineWidth: 2,
          highlightLineColor: 'rgba(0,0,0,.1)',
          highlightSpotColor: 'rgba(0,0,0,.2)'
        });
      }
  
      var sparklineCharts4Colors = getChartColorsArray("sparkline4");
      if (sparklineCharts4Colors) {
        $("#sparkline4").sparkline([0, 23, 43, 35, 44, 45, 56, 37, 40, 45, 56, 7, 10], {
          type: 'line',
          width: '100%',
          height: '200',
          lineColor: sparklineCharts4Colors,
          fillColor: 'transparent',
          spotColor: sparklineCharts4Colors,
          lineWidth: 2,
          minSpotColor: undefined,
          maxSpotColor: undefined,
          highlightSpotColor: undefined,
          highlightLineColor: undefined
        });
      }
      var sparklineCharts5Colors = getChartColorsArray("sparkline5");
      if (sparklineCharts5Colors) {
        $('#sparkline5').sparkline([15, 23, 55, 35, 54, 45, 66, 47, 30], {
          type: 'line',
          width: '100%',
          height: '200',
          chartRangeMax: 50,
          resize: true,
          lineColor: sparklineCharts5Colors[0],
          fillColor: 'rgba(85, 110, 230, 0.3)',
          highlightLineColor: 'rgba(0,0,0,.1)',
          highlightSpotColor: 'rgba(0,0,0,.2)',
        });
    
        $('#sparkline5').sparkline([0, 13, 10, 14, 15, 10, 18, 20, 0], {
          type: 'line',
          width: '100%',
          height: '200',
          chartRangeMax: 40,
          lineColor: sparklineCharts5Colors[1],
          fillColor: 'rgba(52, 195, 143, 0.3)',
          composite: true,
          resize: true,
          highlightLineColor: 'rgba(0,0,0,.1)',
          highlightSpotColor: 'rgba(0,0,0,.2)',
        });
      }
  
      var sparklineCharts6Colors = getChartColorsArray("sparkline6");
      if (sparklineCharts6Colors) {
        $("#sparkline6").sparkline([4, 6, 7, 7, 4, 3, 2, 1, 4, 4, 5, 6, 3, 4, 5, 8, 7, 6, 9, 3, 2, 4, 1, 5, 6, 4, 3, 7], {
          type: 'discrete',
          width: '280',
          height: '200',
          lineColor: sparklineCharts6Colors
        });
      }
  
      var sparklineCharts7Colors = getChartColorsArray("sparkline7");
        if (sparklineCharts7Colors) {
        $('#sparkline7').sparkline([10,12,12,9,7], {
          type: 'bullet',
          width: '280',
          height: '80',
          targetColor: sparklineCharts7Colors[0],
          performanceColor: sparklineCharts7Colors[1],
        });
      }

      var sparklineCharts8Colors = getChartColorsArray("sparkline8");
        if (sparklineCharts8Colors) {
        $('#sparkline8').sparkline([4,27,34,52,54,59,61,68,78,82,85,87,91,93,100], {
          type: 'box',
          width: '280',
          height: '80',
          boxLineColor: sparklineCharts8Colors,
          boxFillColor: '#f1f1f1',
          whiskerColor: sparklineCharts8Colors,
          outlierLineColor: sparklineCharts8Colors,
          medianColor: sparklineCharts8Colors,
          targetColor: sparklineCharts8Colors
        });
      }
      var sparklineCharts9Colors = getChartColorsArray("sparkline9");
      if (sparklineCharts9Colors) {
        $('#sparkline9').sparkline([1,1,0,1,-1,-1,1,-1,0,0,1,1], {
          height: '80',
          width: '100%',
          type: 'tristate',
          posBarColor: sparklineCharts9Colors[0],
          negBarColor: sparklineCharts9Colors[1],
          zeroBarColor: sparklineCharts9Colors[2],
          barWidth: 8,
          barSpacing: 3,
          zeroAxis: false
        });
      }
  
  
  
    }
    var sparkResize;
  
    $(window).resize(function(e) {
      clearTimeout(sparkResize);
      sparkResize = setTimeout(SparklineCharts, 500);
    });
    SparklineCharts();
  
  });