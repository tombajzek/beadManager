-- 
-- Editor SQL for DB table beads
-- Created by http://editor.datatables.net/generator
-- 

CREATE TABLE IF NOT EXISTS `beads` (
	`id` int(10) NOT NULL auto_increment,
	`btype` varchar(255),
	`subtype` varchar(255),
	`bead` varchar(255),
	`prefixkey` varchar(255),
	`basek` numeric(9,2),
	`suffixkey` varchar(255),
	`loc` varchar(255),
	`drawer` int(10),
	`shelf` int(10),
	`qf` int(10),
	`personal` int(10),
	`cost` numeric(9,2),
	`price` numeric(9,2),
	`vendorIdD` varchar(255),
	`vstockno` varchar(255),
	`label` text,
	`color` varchar(255),
	`size` varchar(255),
	`inUnit` varchar(255),
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
);