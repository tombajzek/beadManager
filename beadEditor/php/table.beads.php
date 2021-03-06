<?php

/*
 * Editor server script for DB table beads
 * Created by http://editor.datatables.net/generator
 */

// DataTables PHP library and database connection
include( "lib/DataTables.php" );

// Alias Editor classes so they are easy to use
use
	DataTables\Editor,
	DataTables\Editor\Field,
	DataTables\Editor\Format,
	DataTables\Editor\Mjoin,
	DataTables\Editor\Options,
	DataTables\Editor\Upload,
	DataTables\Editor\Validate;

// The following statement can be removed after the first run (i.e. the database
// table has been created). It is a good idea to do this to help improve
// performance.
$db->sql( "CREATE TABLE IF NOT EXISTS `beads` (
	`id` int(10) NOT NULL auto_increment,
	`btype` varchar(255),
	`subtype` varchar(255),
	`bead` varchar(255),
	`prefixkey` varchar(255),
	`basek` numeric(9,2),
	`suffixkey` varchar(255),
	`loc` int(10),
	`drawer` int(10),
	`shelf` int(10),
	`qf` int(10),
	`ncg` int(10),
	`store2` int(10),
	`store3` int(10),
	`excess` int(10),
	`discarded` int(10),
	`personal` int(10),
	`cost` numeric(9,2),
	`price` numeric(9,2),
	`vendorID` varchar(255),
	`vstockno` varchar(255),
	`label` text,
	`flag` varchar(255),
	`color` varchar(255),
	`category` varchar(255),
	`size` varchar(255),
	`inunit` varchar(255),
	`pkgsize` varchar(255),
	`url` text,
	`partial` numeric(9,2),
	`notes` text,
	`image` varchar(255),
	`discontinued` varchar(255),
	`dropped` varchar(255),
	`saleprice` numeric(9,2),
	`basis` numeric(9,2),
	`updated` datetime,
	PRIMARY KEY( `id` )
);" );

// Build our Editor instance and process the data coming from _POST
Editor::inst( $db, 'beads', 'id' )
	->fields(
		Field::inst( 'beadType' )
			->validator( 'Validate::notEmpty' ),
//		Field::inst( 'subtype' ),
		Field::inst( 'beadNo' )
			->validator( 'Validate::notEmpty' ),
		Field::inst( 'prefixkey' )
			->set( false ),
		Field::inst( 'baseKey' )
			->validator( 'Validate::notEmpty' ),
		Field::inst( 'suffixkey' )
			->set( false ),
		Field::inst( 'location' ),
		Field::inst( 'drawer' ),
		Field::inst( 'shelf' ),
		Field::inst( 'qfdrwr' ),
		Field::inst( 'qf' ),
		Field::inst( 'ncg' ),
		Field::inst( 'store2' ),
		Field::inst( 'store3' ),
		Field::inst( 'discarded' ),
		Field::inst( 'excess' ),
		Field::inst( 'diana' ),
		Field::inst( 'sale' ),
		Field::inst( 'cost' ),
		Field::inst( 'price' ),
		Field::inst( 'vendorID' ),
		Field::inst( 'vstockno' ),
		Field::inst( 'label' ),
		Field::inst( 'color' ),
		Field::inst( 'category' ),
		Field::inst( 'size' ),
		Field::inst( 'inUnit' ),
		Field::inst( 'pkgSize' ),
		Field::inst( 'url' ),
		Field::inst( 'partialTube' ),
		Field::inst( 'notes' ),
//		Field::inst( 'image' )
		Field::inst( 'onLine' ),
		Field::inst( 'toBuy' ),
		Field::inst( 'discontinued' ),
//		Field::inst( 'dropped' ),
		Field::inst( 'salePrice' ),
		Field::inst( 'copyright' ),
		Field::inst( 'flag' ),
		Field::inst( 'basis' )
			->set( false ),
		Field::inst( 'updated' )
			->set(Field::SET_BOTH)
			->setValue(date("Y-m-d H:i:s"))
			->getFormatter( function( $val, $data, $opts) {
				return date("Y-m-d H:i:s", strtotime( $val) );
			} )
			->setFormatter( function( $val, $data, $opts) {
				return date("Y-m-d H:i:s", strtotime($val));		
			} )
	)
	->process( $_POST )
	->json();
