<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/mainJewelry.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<!-- InstanceBeginEditable name="doctitle" -->
<title>Beads By Berrie - Inventory By Color.</title>

<?php 
//we will be given $beadType
$beadColor=$_REQUEST["color"];
//$beadType=$_REQUEST["btype"];
	if (empty($_REQUEST["btype"])) {
		$beadType = "";
		$beadTypeLink = "";
	} else {
		$beadType="and beadType='" . $_REQUEST["btype"] . "'";
		$beadTypeLink = "&btype=" . $_REQUEST["btype"];
	};
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
    .colorbutton {
  width: 45px;
  height: 20px;
  background-color: #EEEEEE;
  moz-border-radius: 5px;
  -webkit-border-radius: 5px;
  border: 1px solid #CCCCCC;
  text-align: center;
  padding: 1px;
}
.colorbutton:hover {opacity: 0.6; }
A:link {color: blue; text-decoration:none}
A:visited {color: blue; text-decoration:none}
A:hover {text-decoration:underline; opacity: 0.6; }
  </style>
</head>


<body >
	<?php 
//	echo "/".$beadType. "/ /" .$beadTypeLink . "/" . $beadColor . "/";
		?>
 <table>
 <tr>
 <td><div class="colorbutton"><a href="http://beads.beadsbyberrie.com/manager/seeInventoryColor.php?color=RD.<?php echo $beadTypeLink;?>">Red</a></div> </td>
<td> <div class="colorbutton"><a href="http://beads.beadsbyberrie.com/manager/seeInventoryColor.php?color=BE.<?php echo $beadTypeLink;?>">Blue</a></div> </td>
 <td> <div class="colorbutton"><a href="http://beads.beadsbyberrie.com/manager/seeInventoryColor.php?color=PE.<?php echo $beadTypeLink;?>">Purple</a></div> </td>
<td> <div class="colorbutton"><a href="http://beads.beadsbyberrie.com/manager/seeInventoryColor.php?color=GN.<?php echo $beadTypeLink;?>">Green</a></div> </td> 
<td> <div class="colorbutton"> <a href="http://beads.beadsbyberrie.com/manager/seeInventoryColor.php?color=PK.<?php echo $beadTypeLink;?>">Pink</a></div> </td>
<td> <div class="colorbutton"> <a href="http://beads.beadsbyberrie.com/manager/seeInventoryColor.php?color=BN.<?php echo $beadTypeLink;?>">Brown</a></div> </td>
<td> <div class="colorbutton"> <a href="http://beads.beadsbyberrie.com/manager/seeInventoryColor.php?color=YW.<?php echo $beadTypeLink;?>">Yellow</a></div> </td>
<td> <div class="colorbutton"> <a href="http://beads.beadsbyberrie.com/manager/seeInventoryColor.php?color=OE.<?php echo $beadTypeLink;?>">Orange</a></div> </td>
<td> <div class="colorbutton"> <a href="http://beads.beadsbyberrie.com/manager/seeInventoryColor.php?color=BK.<?php echo $beadTypeLink;?>">Black</a></div> </td>
<td> <div class="colorbutton"> <a href="http://beads.beadsbyberrie.com/manager/seeInventoryColor.php?color=WE.<?php echo $beadTypeLink;?>">White</a></div> </td>
<td> <div class="colorbutton"> <a href="http://beads.beadsbyberrie.com/manager/seeInventoryColor.php?color=GY.<?php echo $beadTypeLink;?>">Grey</a></div> </td>
<td> <div class="colorbutton"> <a href="http://beads.beadsbyberrie.com/manager/seeInventoryColor.php?color=CL.<?php echo $beadTypeLink;?>">Crystal</a></div> </td>
<td> <div class="colorbutton"> <a href="http://beads.beadsbyberrie.com/manager/seeInventoryColor.php?color=CM.<?php echo $beadTypeLink;?>">Cream</a></div> </td>
<td> <div class="colorbutton"> <a href="http://beads.beadsbyberrie.com/manager/seeInventoryColor.php?color=SR.<?php echo $beadTypeLink;?>">Silver</a></div> </td>
<td> <div class="colorbutton"> <a href="http://beads.beadsbyberrie.com/manager/seeInventoryColor.php?color=GD.<?php echo $beadTypeLink;?>">Gold</a></div> </td>
<td> <div class="colorbutton"> <a href="http://beads.beadsbyberrie.com/manager/seeInventoryColor.php?color=CR.<?php echo $beadTypeLink;?>">Copper</a></div> </td>
<td> <div class="colorbutton"> <a href="http://beads.beadsbyberrie.com/manager/seeInventoryColor.php?color=BS.<?php echo $beadTypeLink;?>">Brass</a></div> </td>
<td> <div class="colorbutton"> <a href="http://beads.beadsbyberrie.com/manager/seeInventoryColor.php?color=MI.<?php echo $beadTypeLink;?>">Multi</a></div> </td>
<td> <div class="colorbutton"> <a href="http://beads.beadsbyberrie.com/manager/seeInventoryColor.php?color=MD.<?php echo $beadTypeLink;?>">Mixed</a></div> </td>
<td> <div class="colorbutton"> <a href="http://beads.beadsbyberrie.com/manager/seeInventoryColor.php?color=<?php echo $beadColor. '&btype=6';?>">6</a></div> </td>
<td> <div class="colorbutton"> <a href="http://beads.beadsbyberrie.com/manager/seeInventoryColor.php?color=<?php echo $beadColor. '&btype=8';?>">8</a></div> </td>
<td> <div class="colorbutton"> <a href="http://beads.beadsbyberrie.com/manager/seeInventoryColor.php?color=<?php echo $beadColor. '&btype=11';?>">11</a></div> </td>
<td> <div class="colorbutton"> <a href="http://beads.beadsbyberrie.com/manager/seeInventoryColor.php?color=<?php echo $beadColor. '&btype=15';?>">15</a></div> </td>
<td> <div class="colorbutton"> <a href="http://beads.beadsbyberrie.com/manager/seeInventoryColor.php?color=<?php echo $beadColor. '&btype=DB';?>">DB</a></div> </td>
<td> <div class="colorbutton"> <a href="http://beads.beadsbyberrie.com/manager/seeInventoryColor.php?color=<?php echo $beadColor. '&btype=BG';?>">BG</a></div> </td>
<td> <div class="colorbutton"> <a href="http://beads.beadsbyberrie.com/manager/seeInventoryColor.php?color=<?php echo $beadColor;?>">ALL</a></div> </td>

  </tr>
  </table>

<table width="1100 px" border="0" bgcolor="#000000">
  <tr>
<?php // Here we search for the items on this page; print the nav bar 
			         // and then loop through the results, outputting a cell for each item
	  $searchstr = "select * from beads where  onLine LIKE '%onl%' " . $beadType .  " and color LIKE  '%" . $beadColor . "%'" .  " order by beadType,beadNo";
	  $resultid2= mysql_query( $searchstr,$Catalog);
	
	


$myitems=mysql_num_rows($resultid2);
	   echo "searching=" . $searchstr . ' <br/>';
	  echo "beadType = " . $_REQUEST["btype"] . " color = " . $beadColor . "   myitems=" . $myitems;

$i=0;
while ($row= mysql_fetch_assoc($resultid2)) {


if ($i % $rowsize_Catalog==0) {
	print "</tr><tr>";
	$i = 1;
} else {
	$i++;
};
	print '<td width="160 px"  width="160 px" align="center" valign="top" bgcolor="#FFFFFF">';
    print '<table height="100%" width="100%" border="0" cellspacing="0" cellpadding="4">'."\n";
    print '<tr valign="top" align="left">';
	$qty = $row['shelf']+$row['qf']+$row['drawer'];
    print '</tr><tr>'."\n";
    print "<td  align='center' valign='top'>";
 //$imagePath = "http://beadsbyberrie.com";
	$imagePath = "http://images.bajzek.com:8888";
	
	
	print $row['beadType'] . "-" . $row['beadNo']." - " . $row['label'];
	print ' <b>{' . $row['onLine'] . '}</b> ';
		if ( $row['copyright'] =="©") {
			error_log("found copyright");
			print "©";			
		};	
	


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