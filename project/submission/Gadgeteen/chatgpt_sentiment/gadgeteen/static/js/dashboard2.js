
(function ($) {
    "use strict";




    /*-----------------------------*/


    var data = {
        labels: ['facebook', 'twitter', 'youtube', 'google plus'],
        series: [{
                value: 20,
                className: "bg-facebook"
    },
            {
                value: 10,
                className: "bg-twitter"
    },
            {
                value: 30,
                className: "bg-youtube"
    },
            {
                value: 40,
                className: "bg-google-plus"
    }]
        //        colors: ["#333", "#222", "#111"]
    };

    var options = {
        labelInterpolationFnc: function (value) {
            return value[0]
        }
    };

    var responsiveOptions = [
  ['screen and (min-width: 640px)', {
            chartPadding: 30,
            labelOffset: 100,
            labelDirection: 'explode',
            labelInterpolationFnc: function (value) {
                return value;
            }
  }],
  ['screen and (min-width: 1024px)', {
            labelOffset: 80,
            chartPadding: 20
  }]
];

    new Chartist.Pie('.ct-pie-chart', data, options, responsiveOptions);


    /*----------------------------------*/

    var data = {
        labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
        series: [
    [5, 4, 3, 7, 5, 10, 3, 4, 8, 10, 6, 8],
    [3, 2, 9, 5, 4, 6, 4, 6, 7, 8, 7, 4],
    [4, 6, 3, 9, 6, 5, 2, 8, 3, , 5, 4],
  ]
    };

    var options = {
        seriesBarDistance: 10
    };

    var responsiveOptions = [
  ['screen and (max-width: 640px)', {
            seriesBarDistance: 5,
            axisX: {
                labelInterpolationFnc: function (value) {
                    return value[0];
                }
            }
  }]
];

    new Chartist.Bar('.ct-bar-chart', data, options, responsiveOptions);




})(jQuery);








