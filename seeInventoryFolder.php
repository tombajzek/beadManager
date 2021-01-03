<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/mainJewelry.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<!-- InstanceBeginEditable name="doctitle" -->
<title>Beads By Berrie - Inventory.</title>

<?php 
//we will be given $beadType
$beadType=strtoupper($_REQUEST["btype"]);


$hostname_Catalog = "localhost";
$database_Catalog = "beadStock";
$username_Catalog = "prj_berrie";
$password_Catalog = "BerrieB11...";
$pagesize_Catalog = 12; //this is the number of items displayed per page
$rowsize_Catalog  = 4;  //this is the number of items displayed per row
$Catalog = mysql_pconnect($hostname_Catalog, $username_Catalog, $password_Catalog) or die(mysql_error());
// Now define the DB to use with this connection
mysql_select_db($database_Catalog,$Catalog);
?>
</head>


<body >
<table width="1100 px" border="0" bgcolor="#000000">
  <tr>
<?php // Here we search for the items on this page; print the nav bar 
			         // and then loop through the results, outputting a cell for each item


if ($beadType=="PT" || $beadType=="PTI" || $beadType=="PTB" || $beadType=="PTDB" || $beadType=="PTT" ) {
$resultid2= mysql_query("select * from beads where beadType = '" . $beadType . "'  order by baseKey desc, beadNo asc" ,$Catalog);
	//order by beadType asc, baseKey desc, beadNo desc
} else
{
$resultid2= mysql_query("select * from beads where beadType = '" . $beadType . "'" .  "order by baseKey, BeadNo" ,$Catalog);
}


$myitems=mysql_num_rows($resultid2);


for ($i= 0; $i < $myitems; $i++) {
$row= mysql_fetch_assoc($resultid2);


if ($i%$rowsize_Catalog==0) print "</tr><tr>";
	print '<td width="210 px"  width="210 px" align="center" valign="top" bgcolor="#FFFFFF">';
    print '<table height="100%" width="100%" border="0" cellspacing="0" cellpadding="4">'."\n";
    print '<tr valign="top" align="left">';
    $qty = $row['shelf']+$row['qf']+$row['drawer']+$row['store3'];
	$qtyD = $row['drawer'];
	$qtyS = $row['shelf'];
	$qtyQF = $row['qfdrwr'] + $row['qf'];
	$qtyQFoff = $row['store3'];
if ($qty>0) {
    print '<td align="left"><font face="Verdana, Arial, Helvetica, sans-serif" size="-1" > ';
} else {
    print '<td bgcolor="#BBBBBB" align="left"><font face="Verdana, Arial, Helvetica, sans-serif" size="-1" > ';
}
print  $row['beadNo']." - $". $row['price']. " - [". $qtyD . "] [" . $qtyS . "] - [" . $qtyQF . "][QFoff=" . $row['store3'] . "]";
	if ( strlen($row['onLine']) !==0) {
			print " <b>{" . $row['onLine'] . "}</b>";
		};
	print "</td>";	
if (substr ( $row['url'] , 0 , 4 ) == "http") {
    print "</tr><tr><td>". "<a href='" . $row['url']. "' target=new> " . "[see]" . "</a>  " .$row['label']. " </td>"."\n";
} else {
    print "</tr><tr>"."<td>".$row['label']."</td>"."\n";
}
    print '</tr><tr>'."\n";
    print "<td  align='center' valign='top'>";
	//$imagePath = "http://beadsbyberrie.com";
     $imagePath = "http://images.bajzek.com:8888";


			$imagePath = $imagePath . "/Assets/" . $row['beadType'] . "/" . $row['beadNo'] . ".jpg";
			
	
		
	print "<a href='" .  $imagePath . "' target=new>" . "<img src='" .  $imagePath . " ' border='0' width='200 px'  width='200 px' target='new' /></a></td>"."\n";
    print "</tr>"."\n";
    print "</tr></table></td>"."\n";			  
			 }
			  ?>
	
	</tr>
    </table>
 </center>

</body>
</html>