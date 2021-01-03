<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/mainJewelry.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<!-- InstanceBeginEditable name="doctitle" -->
<title>Beads By Berrie - Inventory By Color.</title>

<?php 
//we will be given $beadType
$beadColor=$_REQUEST["color"];
$beadType=$_REQUEST["btype"];

$hostname_Catalog = "localhost";
$database_Catalog = "beadStock";
$username_Catalog = "prj_berrie";
$password_Catalog = "BerrieB11...";
$pagesize_Catalog = 12; //this is the number of items displayed per page
$rowsize_Catalog  = 6;  //this is the number of items displayed per row
$Catalog = mysql_pconnect($hostname_Catalog, $username_Catalog, $password_Catalog) or die(mysql_error());
// Now define the DB to use with this connection
mysql_select_db($database_Catalog,$Catalog);
?>
 <style>
    #colorbutton {
  width: 45px;
  height: 20px;
  background-color: #EEEEEE;
  moz-border-radius: 5px;
  -webkit-border-radius: 5px;
  border: 1px solid #CCCCCC;
  text-align: center;
  padding: 1px;
}
#colorbutton:hover {opacity: 0.6; }
A:link {color: blue; text-decoration:none}
A:visited {color: blue; text-decoration:none}
A:hover {text-decoration:underline; opacity: 0.6; }
  </style>
</head>


<body >
 <table>
 <tr>
 <td><div id="colorbutton"><a href="http://beads.beadsbyberrie.com/manager/seeInventoryColor.php?color=RD.">Red</a></div> </td>
<td> <div id="colorbutton"><a href="http://beads.beadsbyberrie.com/manager/seeInventoryColor.php?color=BE.">Blue</a></div> </td>
 <td> <div id="colorbutton"><a href="http://beads.beadsbyberrie.com/manager/seeInventoryColor.php?color=PE.">Purple</a></div> </td>
<td> <div id="colorbutton"><a href="http://beads.beadsbyberrie.com/manager/seeInventoryColor.php?color=GN.">Green</a></div> </td> 
<td> <div id="colorbutton"> <a href="http://beads.beadsbyberrie.com/manager/seeInventoryColor.php?color=PK.">Pink</a></div> </td>
<td> <div id="colorbutton"> <a href="http://beads.beadsbyberrie.com/manager/seeInventoryColor.php?color=BN.">Brown</a></div> </td>
<td> <div id="colorbutton"> <a href="http://beads.beadsbyberrie.com/manager/seeInventoryColor.php?color=YW.">Yellow</a></div> </td>
<td> <div id="colorbutton"> <a href="http://beads.beadsbyberrie.com/manager/seeInventoryColor.php?color=OE.">Orange</a></div> </td>
<td> <div id="colorbutton"> <a href="http://beads.beadsbyberrie.com/manager/seeInventoryColor.php?color=BK.">Black</a></div> </td>
<td> <div id="colorbutton"> <a href="http://beads.beadsbyberrie.com/manager/seeInventoryColor.php?color=WE.">White</a></div> </td>
<td> <div id="colorbutton"> <a href="http://beads.beadsbyberrie.com/manager/seeInventoryColor.php?color=GY.">Grey</a></div> </td>
<td> <div id="colorbutton"> <a href="http://beads.beadsbyberrie.com/manager/seeInventoryColor.php?color=CL.">Crystal</a></div> </td>
<td> <div id="colorbutton"> <a href="http://beads.beadsbyberrie.com/manager/seeInventoryColor.php?color=CM.">Cream</a></div> </td>
<td> <div id="colorbutton"> <a href="http://beads.beadsbyberrie.com/manager/seeInventoryColor.php?color=SR.">Silver</a></div> </td>
<td> <div id="colorbutton"> <a href="http://beads.beadsbyberrie.com/manager/seeInventoryColor.php?color=GD.">Gold</a></div> </td>
<td> <div id="colorbutton"> <a href="http://beads.beadsbyberrie.com/manager/seeInventoryColor.php?color=CR.">Copper</a></div> </td>
<td> <div id="colorbutton"> <a href="http://beads.beadsbyberrie.com/manager/seeInventoryColor.php?color=BS.">Brass</a></div> </td>
<td> <div id="colorbutton"> <a href="http://beads.beadsbyberrie.com/manager/seeInventoryColor.php?color=MI.">Multi</a></div> </td>
<td> <div id="colorbutton"> <a href="http://beads.beadsbyberrie.com/manager/seeInventoryColor.php?color=MD.">Mixed</a></div> </td>


  </tr>
  </table>

<table width="1100 px" border="0" bgcolor="#000000">
  <tr>
<?php // Here we search for the items on this page; print the nav bar 
			         // and then loop through the results, outputting a cell for each item

//$resultid2= mysql_query("select * from beads where color LIKE  '%" . $beadColor . "%'" ,$Catalog);
//$resultid2= mysql_query("select * from beads where color LIKE  '%" . $beadColor . "%'" .  "order by beadType,beadNo" ,$Catalog);
$resultid2= mysql_query("select * from beads where  online = 'yes' and beadtype=11 and color LIKE  '%" . $beadColor . "%'" .  "order by beadType,beadNo" ,$Catalog);


$myitems=mysql_num_rows($resultid2);


for ($i= 0; $i < $myitems; $i++) {
$row= mysql_fetch_assoc($resultid2);


if ($i%$rowsize_Catalog==0) print "</tr><tr>";
	print '<td width="160 px"  width="160 px" align="center" valign="top" bgcolor="#FFFFFF">';
    print '<table height="100%" width="100%" border="0" cellspacing="0" cellpadding="4">'."\n";
    print '<tr valign="top" align="left">';
$qty = $row['shelf']+$row['qf']+$row['drawer'];
if ($qty>0) {
    print '<td align="left"><font face="Verdana, Arial, Helvetica, sans-serif" size="-1" > ';
} else {
    print '<td bgcolor="#BBBBBB" align="left"><font face="Verdana, Arial, Helvetica, sans-serif" size="-1" > ';
}
##if ( $row['beadType']=="CZ") { 
##} else {
     print $row['beadType'];
##};


print  " " . $row['beadNo']." - $". $row['price']. " - [". $qty . "]</td>";	
if (substr ( $row['description'] , 0 , 4 ) == "http") {
    print "</tr><tr><td>". "<a href='" . $row['description']. "' target=new> " . "[see]" . "</a>  " .$row['notes']. " </td>"."\n";
} else {
    print "</tr><tr>"."<td>".$row['label']."</td>"."\n";
}
    print '</tr><tr>'."\n";
    print "<td  align='center' valign='top'>";
     $imagePath = "http://beadsbyberrie.com";


			$imagePath = $imagePath . "/Assets/" . $row['beadType'] . "/"  . $row['beadNo'] . ".jpg";
			
		
	print "<a href='" .  $imagePath . "' target=new>" . "<img src='" .  $imagePath . " ' border='0' width='150 px'  width='150 px' /></a></td>"."\n";
    print "</tr>"."\n";
    print "</tr></table></td>"."\n";			  
			 }
			  ?>
	
	</tr>
    </table>
 </center>

</body>
</html>