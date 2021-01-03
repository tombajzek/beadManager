/*
 * Editor client script for DB table beads
 * Created by http://editor.datatables.net/generator
 */

linkSpacer = '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';

(function ($) {

	var bType; // We'll need this throughout
	
	// Here we define names for columns, based on their header labels
	var z_bType = 0;
	var z_beadNo = 1;
	var z_key = 2;
	var z_drwr = 3;
	var z_shelf = 4;
	var z_QF_Dr = 5;
	var z_QF = 6;
	var z_QFoff = 7;
	var z_onL = 8;
	var z_buy = 9;
	var z_Etsy = 10;
	var z_Gall = 11;
	var z_priv = 12;
	var z_sale = 13;
	var z_dscrd = 14;
	var z_excs = 15;
	var z_loc = 16;
	var z_cost = 17;
	var z_price = 18;
	var z_label= 19;
	var z_vStockNo = 20;
	var z_copy = 21;
	var z_flag = 22;
	var z_img = 23;
	// end of column name definitions

	$(document).ready(function () {
		var editor = new $.fn.dataTable.Editor({
			ajax: 'php/table.beads.php',
			table: '#beads',
			fields: [{
					"label": "bType:",
					"name": "beadType"
				},
				{
					"label": "bead#:",
					"name": "beadNo"
				},
				{
					"label": "Key:",
					"name": "baseKey"
				},
				{
					"label": "loc:",
					"name": "location"
				},
				{
					"label": "drawer:",
					"name": "drawer"
				},
				{
					"label": "shelf:",
					"name": "shelf"
				},
				{
					"label": "QFdrawer:",
					"name": "qfdrwr"
				},
				{
					"label": "QF:",
					"name": "qf"
				},
				{
					"label": "store2:",
					"name": "store2"
				},
				{
					"label": "store3:",
					"name": "store3"
				},
				{
					"label": "Gallery:",
					"name": "ncg"
				},
				{
					"label": "excess:",
					"name": "excess"
				},
				{
					"label": "discarded:",
					"name": "discarded"
				},
				{
					"label": "priv:",
					"name": "diana"
				},
				{
					"label": "sale:",
					"name": "sale"
				},
				{
					"label": "cost:",
					"name": "cost"
				},
				{
					"label": "price:",
					"name": "price"
				},
				{
					"label": "label:",
					"name": "label",
					"type": "textarea"
				},
				{
					"label": "url:",
					"name": "url",
					"type": "textarea"
				},
				{
					"label": "notes:",
					"name": "notes",
					"type": "textarea"
				},
				{
					"label": "vStockNo:",
					//					"className": "left", 
					"name": "vstockno"
				},
				{
					"label": "color:",
					"name": "color"
				},
				{
					"label": "category:",
					"name": "category"
				},
				{
					"label": "size:",
					"name": "size"
				},
				{
					"label": "inUnit:",
					"name": "inUnit"
				},
				{
					"label": "pkgSize:",
					"name": "pkgSize"
				},
				{
					"label": "partial:",
					"name": "partial"
				},
				{
					"label": "vendorID:",
					//					"className": "left", 
					"name": "vendorID"
				},
				{
					"label": "image:",
					"name": "image"
				},
				{
					"label": "disc:",
					"name": "discontinued",
					"type": "radio",
					"def": "no",
					"options": [
						"yes",
						"no",
						''
					]
				},
				{
					"label": "drop:",
					"name": "dropped",
					"type": "radio",
					"def": "no",
					"options": [
						"yes",
						"no",
						''
					]
				},
				{
					"label": "toBuy",
					"name": "toBuy",
					"type": "radio",
					"def": "",
					"options": [
						"buy",
						"?",
						"",
						"drop",
						"disc",
						"no"
					]
				},
				{
					"label": "online:",
					"name": "onLine",
					"type": "radio",
					"def": "",
					"options": [
						"new onl",
						"onl",
						"?",
						''
					]
				},
				{
					"label": "copyright:",
					"name": "copyright",
					"type": "radio",
					"def": "",
					"options": [
//						{ label: "&#x00a9;", value: "&#x00a9;" },
						{ label: "©", value: "©" },
						{ label: "", value: "" }
					]
				},
				{
					"label": "flag:",
					"name": "flag",
					"type": "radio",
					"def": "",
					"options": [
						"ƒ",
						""
//						{ label: "√", value:"√" },
//						{ label: "", value: "" }
					]
				},
				{
					"label": "salePrice:",
					"name": "saleprice"
				},
				{
					"label": "updated:",
					"name": "updated",
					"type": "readonly"
				}
			]
		});



//		$('#beads').on('click', 'tbody td:not(:first-child)', function (e) {
//			editor.bubble(this);
		$('#beads').on('click', 'tbody tr td.bubbly', function (e) {
			editor.bubble(this);
		});

		// Prevent accidental closure in unsaved editor panel
		var openVals;
		editor.on('open', function () {
			//  Save values of fiends at open
			openVals = JSON.stringify(editor.get());

			editor.on('preClose', function (e) {
				// On close, ask for confirmation if changes have been made
				if (openVals !== JSON.stringify(editor.get())) {
					return confirm('Do you want to abandon your changes to this record?');
				}
			})
		});

		editor.on('postCreate postEdit close', function () {
			editor.off('preClose');
		});


		var table = $('#beads').DataTable({
			fixedHeader: true,
			dom: 'Bfrtip',
			ajax: 'php/table.beads.php',
			columns: [{
					"className": "left xFilter bTypeC",
					"data": "beadType"
				},
				{
					"className": "left cFilter",
					"data": "beadNo"
				},
				{
					"className": "left xFilter baseKeyC",
					"data": "baseKey"
				},
				{
					"className": "center quantC bubbly",
					"data": "drawer"
				},
				{
					"className": "center quantC bubbly",
					"data": "shelf"
				},
				{
					"className": "center quantC bubbly",
					"data": "qfdrwr"
				},
				{
					"className": "center quantC bubbly",
					"data": "qf"
				},
				{
					"className": "center quantC bubbly",
					"data": "store3"				// QFoff
				},
				{
					"className": "center quantC bubbly",
					"data": "onLine"
				},
				{
					"className": "center quantC bubbly",
					"data": "toBuy"
				},
				{
					"className": "center quantC bubbly",
					"data": "store2"				// Etsy
				},
				{
					"className": "center quantC bubbly",
					"data": "ncg"					// Gallery
				},
				{
					"className": "center quantC bubbly",
					"data": "diana"
				},
				{
					"className": "center quantC bubbly",
					"data": "sale"
				},
				{
					"className": "center quantC bubbly",
					"data": "discarded"
				},
				{
					"className": "center quantC bubbly",
					"data": "excess"
				},
				{
					"className": "center locationC bubbly",
					"data": "location"
				},
				{
					"className": "right costC bubbly",
					"data": "cost"
				},
				{
					"className": "right priceC bubbly",
					"data": "price"
				},
				{
					"className": "left labelC bubbly",
					"data": "label"
				},
				{
					"className": "left stockNoC bubbly",
					"data": "vstockno"
				},
				{
					"className": "left bubbly",
					"data": "copyright"
				},
				{
					"className": "left bubbly",
					"data": "flag"
				},
				{
					"data": null,
					"className": "imgC",
					"render": function (data, type, row) {
						var imagePath;
						imagePath = "http://beadsbyberrie.com/Assets/";
						return '<a href="' + imagePath + data.beadType + '/' + data.beadNo + '.jpg" target="_blank">\&#x1F5BC</a>';
					}
				}
			],
			select: {
				"style": "single"
			},
			columnDefs: [{
//					"targets": [0, 1, 2, 3, 4, 5, 6, 7, 8, 12, 13, 16, 18, 19, 21, 22],
					"targets": [
						z_bType,
						z_beadNo,
						z_key,
						z_drwr,
						z_shelf,
						z_QF_Dr,
						z_QF,
						z_Etsy,
						z_onL,
						z_buy,
						z_loc,
						z_price,
						z_label,
						z_copy,
						z_flag,
						z_img						
					],
					"visible": true
				},
				{
//					"targets": [9, 10, 11, 14, 15, 17, 20],
					"targets": [
						z_sale,
						z_Gall,
						z_QFoff,
						z_priv,
						z_dscrd,
						z_excs,
						z_cost,
						z_vStockNo
					],
					"visible": false
				},
				{
					"searchable": false
				}
			],
			lengthChange: false,
			stateSave: false,
			buttons: [{
					extend: 'create',
					editor: editor
				},
				{
					extend: 'edit',
					editor: editor
				},
				{
					extend: 'remove',
					editor: editor
				},
				{
					extend: 'selectedSingle',
					text: 'Duplicate',
					action: function (e, dt, node, config) {
						// Put the selected rown into (hidden) edit mode,
						// then get the values for all its fields
						var values = editor.edit(
							table.row({
								selected: true
							}).index(),
							false
						).val();
						// Create a new entry (discarding the previous edit)
						// and set values from the read values
						editor
							.create({
								title: 'Duplicate record',
								buttons: 'Create from existing'
							})
							.set(values);
					}
				},
				{
					extend: 'colvisGroup',
					text: 'Inv',
					className: 'invView',
//					show: [0, 1, 2, 3, 4, 5, 6, 7, 8, 12, 13, 16, 18, 19, 21, 22],
					show: [
						z_bType,
						z_beadNo,
						z_key,
						z_drwr,
						z_shelf,
						z_QF_Dr,
						z_QF,
						z_Etsy,
						z_onL,
						z_buy,
						z_loc,
						z_price,
						z_label,
						z_copy,
						z_flag,
						z_img												
					],
//					hide: [9, 10, 11, 14, 15, 17, 20]
					hide: [
						z_sale,
						z_Gall,
						z_QFoff,
						z_priv,
						z_dscrd,
						z_excs,
						z_cost,
						z_vStockNo						
					]
				},
				{
					extend: 'colvisGroup',
					text: 'Order',
					className: 'orderView',
//					show: [0, 1, 2, 3, 4, 5, 7, 8, 12, 13, 17, 18, 19, 20, 21, 22],
					show: [
						z_bType,
						z_beadNo,
						z_key,
						z_drwr,
						z_shelf,
						z_QF_Dr,
						z_QF,
						z_Etsy,
						z_onL,
						z_buy,
						z_cost,
						z_price,
						z_label,
						z_vStockNo,
						z_copy,
						z_flag,
						z_img,												
					],
//					hide: [9, 10, 11, 14, 15, 16]
					hide: [
						z_loc,
						z_sale,
						z_Gall,
						z_QFoff,
						z_priv,
						z_dscrd,
						z_excs						
					]
				},
				{
					extend: 'colvisGroup',
					text: 'Sites',
//					show: [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 19],
					show: [
						z_bType,
						z_beadNo,
						z_key,
						z_drwr,
						z_shelf,
						z_QF_Dr,
						z_QF,
						z_QFoff,
						z_onL,
						z_buy,
						z_Etsy,
						z_Gall,
						z_sale,
						z_dscrd,
						z_excs,
						z_label,
						z_flag,
						z_img												
					],
//					hide: [16, 17, 18, 20, 21],
					hide: [
						z_priv,
						z_loc,
						z_price,
						z_cost,
						z_vStockNo,
						z_copy					
					],
					className: 'sitesView'
				},
				{
					text: "Pix",
					action: function (e, dt, node, config) {
						window.open('http://beads.beadsbyberrie.com/manager/seeInventoryFolder.php?btype=' + bType);
					}
				}
			],
			initComplete: function () {
				// Append a page target form input to the pagination section
				$('#beads_paginate').prepend('<form><input type="submit" id="goto" value="go"><input id="toPage" type="text" placeholder="goto" size="4"></form>');
				// Append a link to the color chart

			}
		});

		// Add column filtering here for columns with className="xFilter"
		// Add a text input to filterable header cells - exact match
		$('#beads thead th.xFilter').each(function () {
			var title = $(this).text();
			$(this).html('<input type="text" id="' + title + '" class="xFilter" placeholder="' + title + '" style="width: 60px;" />');
		});

		// Add column filtering here for columns with className="cFilter"
		// Add a text input to filterable header cells - loose match
		$('#beads thead th.cFilter').each(function () {
			var title = $(this).text();
			$(this).html('<input type="text" id="' + title + '" class="cFilter" placeholder="' + title + '" style="width: 60px;" />');
		});

		// Apply the search
		table.columns().every(function () {
			var that = this;

			$('input', this.header()).on('keyup change', function () {
				if (that.search() !== this.value) {
					if ($(this).hasClass('cFilter')) {
						that
							.search(this.value) // For inexact match
							.draw();
					} else {
						that
							.search(this.value ? '^' + this.value + '$' : '', true, false) // For exact match
							.draw();
					}
				}
			});
		});

		// Pick up the beadType when the user changes it
		$('#bType').on('blur', function () {
			bType = $('#bType').val();
			var colorChartUrl = '<a id = "chartLink" href = "..//seeInventoryFolderColorChart.php?btype=' + bType + '" target = "_blank" > See Inventory Color Chart </a>';
			$('#colorChart').html(colorChartUrl + linkSpacer);
		});

		// Create the link to the color chart
		// $('#bType').on('change', function () {
		// });

		// Process the link to swap visibility of the label and Stock# columns
		$('#toggle1').on('click', function () {
			if ($('#toggle1').val() === 'Show Stock#') {
				$('.labelC').hide();
				$('#toggle1').val('Show Label');
				$('.stockNoC').show();
			} else {
				$('.stockNoC').hide();
				$('#toggle1').val('Show Stock#');
				$('.labelC').show();
			}
		});

		// Here we process the Pix button by loading the image loader
		//		$('#pixLink').on('click', function (){
		//			window.open('http://beads.beadsbyberrie.com/seeInventoryFolder.php?btype=' + bType);
		//		} );


		// This should be a handler for the goto page input, but this won't work as is
		$('#goto').on('click', function () {
			preventDefault();
			var toPage = $('#toPage').val();
			table.page(toPage).draw('page');
		});

		// Here are handlers to label views whe view buttons are clicked
		$('.invView').on('click', function () {
			$('#bHead').html('Bead Manager   - Inventory View');
		});
		$('.orderView').on('click', function () {
			$('#bHead').html('Bead Manager   - Ordering View');
		});
		$('.sitesView').on('click', function () {
			$('#bHead').html('Bead Manager   - Sites View');
		});
	});


	// Define the handler for the color chart link
	$('#colorChart').on('click', function () {
		window.open(colorChartUrl);
	})

}(jQuery));