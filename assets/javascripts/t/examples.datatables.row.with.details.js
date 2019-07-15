
(function( $ ) {

	'use strict';

	var datatableInit = function() {
		var $table = $('#datatable-details');

		// format function for row details
		var fnFormatDetails = function( datatable, tr ) {
			var data = datatable.fnGetData( tr );

			return [
				'<table class="table mb-none">',
					'<tr class="b-top-none">',
						'<td><label class="mb-none">1. Permasalahan:</label></td>',
						'<td>' + data[1]+ ' ' + data[4] + '</td>',
					'</tr>',
					'<tr>',
						'<td><label class="mb-none">2. Fungsi & Kegunaan:</label></td>',
						'<td>Could provide a link here</td>',
					'</tr>',
					'<tr>',
						'<td><label class="mb-none">3. Pengguna:</label></td>',
						'<td>And any further details here (images etc)</td>',
					'</tr>',
					'<tr>',
						'<td><label class="mb-none">4. Uraian dan Alur Proses:</label></td>',
						'<td></td>',
					'</tr>',
					'<tr>',
						'<td><label class="mb-none">&nbsp&nbsp&nbsp&nbsp4.1 Inputing:</label></td>',
						'<td>Opo! (images etc)</td>',
					'</tr>',
					'<tr>',
						'<td><label class="mb-none">&nbsp&nbsp&nbsp&nbsp4.2 Proses-proses:</label></td>',
						'<td>Opo! (images etc)</td>',
					'</tr>',
					'<tr>',
						'<td><label class="mb-none">&nbsp&nbsp&nbsp&nbsp4.3 Output:</label></td>',
						'<td>Opo! (images etc)</td>',
					'</tr>',
					'<tr>',
						'<td><label class="mb-none">5 Kebutuhan Komputer & Peripheral:</label></td>',
						'<td>Opo! (images etc)</td>',
					'</tr>',
				'</div>'
			].join('');
		};

		// insert the expand/collapse column
		var th = document.createElement( 'th' );
		var td = document.createElement( 'td' );
		td.innerHTML = '<i data-toggle class="fa fa-plus-square-o text-primary h5 m-none" style="cursor: pointer;"></i>';
		td.className = "text-center";

		$table
			.find( 'thead tr' ).each(function() {
				this.insertBefore( th, this.childNodes[0] );
			});

		$table
			.find( 'tbody tr' ).each(function() {
				this.insertBefore(  td.cloneNode( true ), this.childNodes[0] );
			});

		// initialize
		var datatable = $table.dataTable({
			aoColumnDefs: [{
				bSortable: false,
				aTargets: [ 0 ]
			}],
			aaSorting: [
				[1, 'asc']
			]
		});

		// add a listener
		$table.on('click', 'i[data-toggle]', function() {
			var $this = $(this),
				tr = $(this).closest( 'tr' ).get(0);

			if ( datatable.fnIsOpen(tr) ) {
				$this.removeClass( 'fa-minus-square-o' ).addClass( 'fa-plus-square-o' );
				datatable.fnClose( tr );
			} else {
				$this.removeClass( 'fa-plus-square-o' ).addClass( 'fa-minus-square-o' );
				datatable.fnOpen( tr, fnFormatDetails( datatable, tr), 'details' );
			}
		});
	};

	$(function() {
		datatableInit();
	});

}).apply( this, [ jQuery ]);