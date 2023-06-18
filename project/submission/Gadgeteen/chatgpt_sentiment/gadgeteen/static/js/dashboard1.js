( function ( $ ) {
	"use strict";

	var data = [],
		totalPoints = 300;

	function getRandomData() {

		if ( data.length > 0 )
			data = data.slice( 1 );

		// Do a random walk

		while ( data.length < totalPoints ) {

			var prev = data.length > 0 ? data[ data.length - 1 ] : 50,
				y = prev + Math.random() * 10 - 5;

			if ( y < 0 ) {
				y = 0;
			} else if ( y > 100 ) {
				y = 100;
			}

			data.push( y );
		}

		// Zip the generated y values with the x values

		var res = [];
		for ( var i = 0; i < data.length; ++i ) {
			res.push( [ i, data[ i ] ] )
		}

		return res;
	}

	// Set up the control widget

	var updateInterval = 30;
	$( "#updateInterval" ).val( updateInterval ).change( function () {
		var v = $( this ).val();
		if ( v && !isNaN( +v ) ) {
			updateInterval = +v;
			if ( updateInterval < 1 ) {
				updateInterval = 1;
			} else if ( updateInterval > 3000 ) {
				updateInterval = 3000;
			}
			$( this ).val( "" + updateInterval );
		}
	} );

	var plot = $.plot( "#cpu-load", [ getRandomData() ], {
		series: {
			shadowSize: 0 // Drawing is faster without shadows
		},
		yaxis: {
			min: 0,
			max: 100
		},
		xaxis: {
			show: false
		},
		colors: [ "#007BFF" ],
		grid: {
			color: "transparent",
			hoverable: true,
			borderWidth: 0,
			backgroundColor: 'transparent'
		},
		tooltip: true,
		tooltipOpts: {
			content: "Y: %y",
			defaultTheme: false
		}


	} );

	function update() {

		plot.setData( [ getRandomData() ] );

		// Since the axes don't change, we don't need to call plot.setupGrid()

		plot.draw();
		setTimeout( update, updateInterval );
	}

	update();


} )( jQuery );


// Dashboard 1 Morris-chart
$( function () {
	"use strict";
	// Morris bar chart
	Morris.Bar( {
		element: 'morris-bar-chart',
		data: [ {
			y: '2006',
			a: 100,
			b: 90
        }, {
			y: '2007',
			a: 75,
			b: 65
        }, {
			y: '2008',
			a: 50,
			b: 40
        }, {
			y: '2009',
			a: 75,
			b: 65
        }, {
			y: '2010',
			a: 50,
			b: 40
        }, {
			y: '2011',
			a: 75,
			b: 65
        }, {
			y: '2012',
			a: 100,
			b: 90
        } ],
		xkey: 'y',
		ykeys: [ 'a', 'b' ],
		labels: [ 'A', 'B' ],
		barColors: [ '#343957', '#5873FE' ],
		hideHover: 'auto',
		gridLineColor: '#eef0f2',
		resize: true
	} );


	jQuery( '#vmap13' ).vectorMap( {
		map: 'usa_en',
		color: '#007BFF',
		borderColor: '#fff',
		backgroundColor: '#fff',
		enableZoom: true,
		showTooltip: true,
		selectedColor: null,
		hoverColor: null,
		colors: {
			mo: '#001BFF',
			fl: '#001BFF',
			or: '#001BFF'
		},
		onRegionClick: function ( event, code, region ) {
			event.preventDefault();
		}
	} );
} );

