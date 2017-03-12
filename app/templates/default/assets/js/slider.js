$( function() {
			$( "#slider-range" ).slider({
				range: true,
				min: 0,
				max: 300,
				values: [ 6, 130 ],
				slide: function( event, ui ) {
					$( "#amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
				}
			});

		    $( "#amount" ).val( "$" + $( "#slider-range" ).slider( "values", 0 ) +
		      " - $" + $( "#slider-range" ).slider( "values", 1 ) );

			/* select style */
				var params = {
					changedEl: "select",
					visRows: 5,
					scrollArrows: true
				}
				cuSel(params);
		  	} );