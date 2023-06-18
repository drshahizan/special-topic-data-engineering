/*
Template Name: Skote - Admin & Dashboard Template
Author: Themesbrand
Website: https://themesbrand.com/
Contact: themesbrand@gmail.com
File: Vector Maps init Js File
*/

! function($) {
	"use strict";

	var VectorMap = function() {
	};

	VectorMap.prototype.init = function() {
		//various examples
		$('#world-map-markers').vectorMap({
			map : 'world_mill_en',
			normalizeFunction : 'polynomial',
			hoverOpacity : 0.7,
			hoverColor : false,
			regionStyle : {
				initial : {
					fill : '#d4dadd'
				}
			},
			 markerStyle: {
                initial: {
                    r: 9,
                    'fill': '#556ee6',
                    'fill-opacity': 0.9,
                    'stroke': '#fff',
                    'stroke-width' : 7,
                    'stroke-opacity': 0.4
                },

                hover: {
                    'stroke': '#fff',
                    'fill-opacity': 1,
                    'stroke-width': 1.5
                }
            },
			backgroundColor : 'transparent',
			markers : [{
				latLng : [41.90, 12.45],
				name : 'Vatican City'
			}, {
				latLng : [43.73, 7.41],
				name : 'Monaco'
			}, {
				latLng : [-0.52, 166.93],
				name : 'Nauru'
			}, {
				latLng : [-8.51, 179.21],
				name : 'Tuvalu'
			}, {
				latLng : [43.93, 12.46],
				name : 'San Marino'
			}, {
				latLng : [47.14, 9.52],
				name : 'Liechtenstein'
			}, {
				latLng : [7.11, 171.06],
				name : 'Marshall Islands'
			}, {
				latLng : [17.3, -62.73],
				name : 'Saint Kitts and Nevis'
			}, {
				latLng : [3.2, 73.22],
				name : 'Maldives'
			}, {
				latLng : [35.88, 14.5],
				name : 'Malta'
			}, {
				latLng : [12.05, -61.75],
				name : 'Grenada'
			}, {
				latLng : [13.16, -61.23],
				name : 'Saint Vincent and the Grenadines'
			}, {
				latLng : [13.16, -59.55],
				name : 'Barbados'
			}, {
				latLng : [17.11, -61.85],
				name : 'Antigua and Barbuda'
			}, {
				latLng : [-4.61, 55.45],
				name : 'Seychelles'
			}, {
				latLng : [7.35, 134.46],
				name : 'Palau'
			}, {
				latLng : [42.5, 1.51],
				name : 'Andorra'
			}, {
				latLng : [14.01, -60.98],
				name : 'Saint Lucia'
			}, {
				latLng : [6.91, 158.18],
				name : 'Federated States of Micronesia'
			}, {
				latLng : [1.3, 103.8],
				name : 'Singapore'
			}, {
				latLng : [0.33, 6.73],
				name : 'SÃ£o TomÃ© and PrÃ­ncipe'
			}]
    });
    
    $('#usa-vectormap').vectorMap({
			map : 'us_merc_en',
			backgroundColor : 'transparent',
			regionStyle : {
				initial : {
					fill : '#556ee6'
				}
			}
    });
    
    $('#india-vectormap').vectorMap({
			map : 'in_mill_en',
			backgroundColor : 'transparent',
			regionStyle : {
				initial : {
					fill : '#556ee6'
				}
			}
    });
    
    $('#australia-vectormap').vectorMap({
			map : 'au_mill_en',
			backgroundColor : 'transparent',
			regionStyle : {
				initial : {
					fill : '#556ee6'
				}
			}
    });
    
    $('#chicago-vectormap').vectorMap({
			map : 'us-il-chicago_mill_en',
			backgroundColor : 'transparent',
			regionStyle : {
				initial : {
					fill : '#556ee6'
				}
			}
    });

    $('#uk-vectormap').vectorMap({
			map : 'uk_mill_en',
			backgroundColor : 'transparent',
			regionStyle : {
				initial : {
					fill : '#556ee6'
				}
			}
		});
    
    $('#canada-vectormap').vectorMap({
			map : 'ca_lcc_en',
			backgroundColor : 'transparent',
			regionStyle : {
				initial : {
					fill : '#556ee6'
				}
			}
    });

	},
	//init
	$.VectorMap = new VectorMap, $.VectorMap.Constructor =
	VectorMap
}(window.jQuery),

//initializing
function($) {
	"use strict";
	$.VectorMap.init()
}(window.jQuery);