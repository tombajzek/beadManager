<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/mainJewelry.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<!-- InstanceBeginEditable name="doctitle" -->
<title>Beads By Berrie - Online Sales Report</title>

<?php 
//we will be given $beadType
//$beadType=$_REQUEST["btype"];

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

<body>
<table width="500 px" border="1"bgcolor="#FFFFFF">
	<tr>
		<td width="150 px" > SKU </td><td>QF</td><td>Rain</td><td>Sales</td><td>Added</td><td>Add Inventory</td></tr>
  <tr>
<?php // Here we search for the items on this page; print the nav bar 
// and then loop through the results, outputting a cell for each item

	//$resultid2= mysql_query("select * from beads where online = 'yes'  order by beadType , baseKey , beadNo " ,$Catalog);
	  $resultid2= mysql_query("select * from beads where online = 'onl'  order by beadType ,  beadNo " ,$Catalog);

//
$i = 0;								// Set a position pointer
while ($row= mysql_fetch_assoc($resultid2)) {	// Loop thru result set
	//if ($i%$rowsize_Catalog==0) {
		//print "</tr><tr>";
	//}

	$qtyTot = $row['shelf'] + $row['qf'] + $row['qfdrwr'] + $row['drawer'];
	$qtyOnl = $row['qf'] + $row['qfdrwr'];
	if ($qtyTot>-1) {
		print '<td width="150 px"  align="center" valign="top" bgcolor="#FFFFFF">';
		//print '<table height="100%" width="100%" border="0" cellspacing="0" cellpadding="4">'."\n";
		//print '<tr valign="top" align="left">';
		//print '<td align="left"><font face="Verdana, Arial, Helvetica, sans-serif" size="-1" > ';

		print $row['beadType'] . "-" . $row['beadNo']." &nbsp;&nbsp;</td><td > &nbsp;&nbsp;&nbsp;&nbsp;"  . $qtyOnl . "</td><td>&nbsp;&nbsp;&nbsp;&nbsp;</td><td>&nbsp;&nbsp;&nbsp;&nbsp;</td><td>&nbsp;&nbsp;&nbsp;&nbsp;</td><td>&nbsp;&nbsp;&nbsp;&nbsp;";
		//if ($row['toBuy'] !== "" || isset($row['toBuy']) || $row['toBuy'] !== NULL) {
		//if ( strlen($row['toBuy']) !==0) {
			//print " [" . $row['toBuy'] . "]</b>";
		//};
		//if ( $row['copyright'] =="y") {
			//print "&radic;";
		//};
		print '</td></tr><tr>'."\n";
		//print "<td  align='center' valign='top'>";
		//$imagePath = "http://beadsbyberrie.com";
		//$imagePath = $imagePath . "/Assets/" . $row['beadType'] . "/" . $row['beadNo'] . ".jpg";
		//print "<a href='" .  $imagePath . "' target=new>" . "<img src='" .  $imagePath . " ' border='0' width='200 px'  width='200 px' target='new' /></a></td>"."\n";
		//print "</tr>"."\n";		
		//print "</tr></table></td>";	
		$i++;
	};

};

?>	
	</tr>
</table>
</center>
</body>
</html>