<?php
// This program exports the QF POS-only data in Rain format as of Jan 2020
$hostname_Catalog = "localhost";
$database_Catalog = "beadStock";
$username_Catalog = "prj_berrie";
$password_Catalog = "BerrieB11...";
$pagesize_Catalog = 12; //this is the number of items displayed per page
$rowsize_Catalog  = 4;  //this is the number of items displayed per row
$conn = mysql_pconnect($hostname_Catalog, $username_Catalog, $password_Catalog) or die("Can't conntct!");
// Now define the DB to use with this connection
mysql_select_db($database_Catalog,$conn);


$eqry = "select * from beads where qf > 0 order by beadType asc, beadNo asc";

error_log('EOB: eqry= ' . $eqry);

$eresult = mysql_query($eqry,$conn) or die("Can't fetch bead info!");

//echo '<table><tbody>';
$csv = '';
while ($eptr = mysql_fetch_assoc($eresult)) {
	// Exclude those not online
	if ($eptr['onLine'] == 'onl') {
		// Ignore the online records
	} else {
		$beadType = $eptr['beadType'];
		$beadNo = $eptr['beadNo'];
		$color = $eptr['color'];
		$category = '291,351';			// These are our beads
		$finish = $eptr['category']; 	//this will hold the bead finish info
		$desc2 = '';
		$delim = '';						// Define an empty delimiter for nnon-seed bead skus
		// This section creates the category list required by Rain to properly define bead products
		if ($beadType=="6") { 
			$category .= ",353";
			$desc2 = ' size 6/0 beads, available in 6 in. tubes.';
			$delim = '-';				// Add a '-' as a delim for seed beads
		}
		if ($beadType=="8") { 
			$category .= ",293";
			$desc2 = ' size 8/0 beads, available in 6 in. tubes.';
			$delim = '-';				// Add a '-' as a delim for seed beads
		}
		if ($beadType=="11") { 
			$category .= ",300";
			$desc2 = ' size 11/0 beads, available in 6 in. tubes.';
			$delim = '-';				// Add a '-' as a delim for seed beads
		}
		if ($beadType=="15") { 
			$category .= ",301";
			$desc2 = ' size 15/0 beads, available in 3.5 in. tubes.';
			$delim = '-';				// Add a '-' as a delim for seed beads
		}
		if ($beadType=="DB") { 
			$category .= ",292";
			$desc2 = ' Miyuki Delica beads, available in 10 gm. tubes.';
			$delim = '-';				// Add a '-' as a delim for seed beads
		}
		
		if ( strpos($color,"BK.") !== FALSE) { $category .= ",302";}
		if ( strpos($color,"WE.") !== FALSE) { $category .= ",298";}
		if ( strpos($color,"GY.") !== FALSE) { $category .= ",309";} 
		if ( strpos($color,"RD.") !== FALSE) { $category .= ",295";} 
		if ( strpos($color,"BE.") !== FALSE) { $category .= ",304";}  
		if ( strpos($color,"GN.") !== FALSE) { $category .= ",305";} 
		if ( strpos($color,"YW.") !== FALSE) { $category .= ",307";} 
		if ( strpos($color,"PK.") !== FALSE) { $category .= ",303";} 
		if ( strpos($color,"BN.") !== FALSE) { $category .= ",308";}
		if ( strpos($color,"OE.") !== FALSE) { $category .= ",310";}  
		if ( strpos($color,"CL.") !== FALSE) { $category .= ",311";} 
		if ( strpos($color,"CM.") !== FALSE) { $category .= ",312";} 
		if ( strpos($color,"SR.") !== FALSE) { $category .= ",313";} 
		if ( strpos($color,"GD.") !== FALSE) { $category .= ",314";}  
		if ( strpos($color,"MC.") !== FALSE) { $category .= ",315";} 
		//now add bead finish categories
		if ( strpos($finish,"SD.") !== FALSE) { $category .= ",324";}
		if ( strpos($finish,"CD.") !== FALSE) { $category .= ",326";}
		if ( strpos($finish,"CN.") !== FALSE) { $category .= ",323";}
		if ( strpos($finish,"OE.") !== FALSE) { $category .= ",327";}
		if ( strpos($finish,"ME.") !== FALSE) { $category .= ",331";}
		if ( strpos($finish,"LR.") !== FALSE) { $category .= ",328";}
		if ( strpos($finish,"MC.") !== FALSE) { $category .= ",329";}
		if ( strpos($finish,"GD.") !== FALSE) { $category .= ",330";}
		if ( strpos($finish,"DT.") !== FALSE) { $category .= ",332";}
		if ( strpos($finish,"GT.") !== FALSE) { $category .= ",333";}
		if ( strpos($finish,"TT.") !== FALSE) { $category .= ",334";}
		
		// Now we can build our import file for Rain
		$sku = $beadType . $delim . $beadNo;		// $delim is '-' for seed beads
		$title = $sku . '  ' . $eptr['label'];
//		$shortDesc = $sku . ' <b>' . $eptr['label'] .  '</b> ' . $desc2;
		$shortDesc = '<b>' . $eptr['label'] .  '</b> ' . $desc2;
		$price = $eptr['price'];
		$cost = sprintf("%.2f", ( ( 2 * $price ) / 3 ) );	// QF cost is 2/3 our price
		$qty = $eptr['qf'] + $eptr['qfdrwr'] ;
		
		// Now build the input string for each product from the data above
		$csv .= '"' . $category . '",'	// categoryIds
			. "None,"			// dept
			. ","				// status
			. '"' . addslashes($title) . '",'		// productTitle
			. '"' . addslashes($shortDesc) . '",'	// shortDesc in Rain
			. "each,"			// units
			. "store,"			// availability
			. ","				// inventoryLimit
			. ","				// options
			. ","				// assignedOptionValues
			. $sku . ","		// sku
			. ","				// UPC
			. ","				// manufacturer's productId
			. "'',"				// alt lookups
			. "'',"				// manufacturer
			. "1586052,"		// vendor
			. ","				// s/n
			. ","				// storeLocationId
			. ","				// weight
			. ","				// defaultCost
			. $price . ","		// price
			. ","				// salePrice
			. ","				// wholesalePrice
			. ","				// wholesaleDesc
			. $cost . ","		// cost
			. $qty . ","		// inventory
			. "2,"				// reorder point
			. "5,"				// stocklevel
			. ","				// caseUnitQty
			. ","				// retailUnitType
			. ","				// caseUnitType
			. "";				// taxCode
		$csv .= "\r\n";
	}
}

echo $csv;
//echo '</tbody></table>';
?>