<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/mainJewelry.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<!-- InstanceBeginEditable name="doctitle" -->
<title>Beads By Berrie - Patterns By Bead Type.</title>

<?php 
//we will be given $beadType
$beadColor=$_REQUEST["color"];
$beadSize=$_REQUEST["size"];
//$beadType=$_REQUEST["btype"];

$hostname_Catalog = "localhost";
$database_Catalog = "beadStock";
$username_Catalog = "prj_berrie";
$password_Catalog = "BerrieB11...";
$pagesize_Catalog = 12; //this is the number of items displayed per page when we do paging
$rowsize_Catalog  = 5;  //this is the number of items displayed per row
$Catalog = mysql_pconnect($hostname_Catalog, $username_Catalog, $password_Catalog) or die(mysql_error());
// Now define the DB to use with this connection
mysql_select_db($database_Catalog,$Catalog);
?>
 <style>
    #colorbutton {
  width: 48px;
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

 <td><div id="colorbutton"><a href="http://beads.beadsbyberrie.com/manager/SeeInventoryPOSbyColor.php?color=15">15</a></div> </td>
<td><div id="colorbutton"><a href="http://beads.beadsbyberrie.com/manager/SeeInventoryPOSbyColor.php?color=11">11</a></div> </td>
<td> <div id="colorbutton"><a href="http://beads.beadsbyberrie.com/manager/SeeInventoryPOSbyColor.php?color=8">8</a></div> </td>
 <td> <div id="colorbutton"><a href="http://beads.beadsbyberrie.com/manager/SeeInventoryPOSbyColor.php?color=6">6</a></div> </td>
<td> <div id="colorbutton"> <a href="http://beads.beadsbyberrie.com/manager/SeeInventoryPOSbyColor.php?color=AMS">Amos</a></div> </td>
<td> <div id="colorbutton"> <a href="http://beads.beadsbyberrie.com/manager/SeeInventoryPOSbyColor.php?color=ARC">ARC</a></div> </td>
<td> <div id="colorbutton"> <a href="http://beads.beadsbyberrie.com/manager/SeeInventoryPOSbyColor.php?color=ATLAS">Atlas</a></div> </td>
<td> <div id="colorbutton"> <a href="http://beads.beadsbyberrie.com/manager/SeeInventoryPOSbyColor.php?color=AVA">AVA</a></div> </td>
<td> <div id="colorbutton"> <a href="http://beads.beadsbyberrie.com/manager/SeeInventoryPOSbyColor.php?color=BAR">Bar</a></div> </td>
<td> <div id="colorbutton"> <a href="http://beads.beadsbyberrie.com/manager/SeeInventoryPOSbyColor.php?color=BM">Beams</a></div> </td>
<td> <div id="colorbutton"> <a href="http://beads.beadsbyberrie.com/manager/SeeInventoryPOSbyColor.php?color=BN">Bone</a></div> </td>
<td> <div id="colorbutton"> <a href="http://beads.beadsbyberrie.com/manager/SeeInventoryPOSbyColor.php?color=BWT">BowTri</a></div> </td>
<td> <div id="colorbutton"> <a href="http://beads.beadsbyberrie.com/manager/SeeInventoryPOSbyColor.php?color=BR">Brick</a></div> </td>
<td> <div id="colorbutton"> <a href="http://beads.beadsbyberrie.com/manager/SeeInventoryPOSbyColor.php?color=BG">Bugle</a></div> </td>
<td> <div id="colorbutton"> <a href="http://beads.beadsbyberrie.com/manager/SeeInventoryPOSbyColor.php?color=BUB">ButtnB</a></div> </td>
<td> <div id="colorbutton"> <a href="http://beads.beadsbyberrie.com/manager/SeeInventoryPOSbyColor.php?color=CA">Cali</a></div> </td>
<td> <div id="colorbutton"> <a href="http://beads.beadsbyberrie.com/manager/SeeInventoryPOSbyColor.php?color=CB">Cab</a></div> </td>
<td> <div id="colorbutton"> <a href="http://beads.beadsbyberrie.com/manager/SeeInventoryPOSbyColor.php?color=CRB">Carrier</a></div> </td>
<td> <div id="colorbutton"> <a href="http://beads.beadsbyberrie.com/manager/SeeInventoryPOSbyColor.php?color=CD">C.Diam</a></div> </td>
<td> <div id="colorbutton"> <a href="http://beads.beadsbyberrie.com/manager/SeeInventoryPOSbyColor.php?color=CHX">Chexx</a></div> </td>

  </tr>
   <tr>
<td> <div id="colorbutton"> <a href="http://beads.beadsbyberrie.com/manager/SeeInventoryPOSbyColor.php?color=CHL">Chili</a></div> </td>
<td> <div id="colorbutton"> <a href="http://beads.beadsbyberrie.com/manager/SeeInventoryPOSbyColor.php?color=COMP">Compnt</a></div> </td>
<td> <div id="colorbutton"> <a href="http://beads.beadsbyberrie.com/manager/SeeInventoryPOSbyColor.php?color=CR">Crystal</a></div> </td>
<td> <div id="colorbutton"><a href="http://beads.beadsbyberrie.com/manager/SeeInventoryPOSbyColor.php?color=CS">Cresnt</a></div> </td> 
<td> <div id="colorbutton"> <a href="http://beads.beadsbyberrie.com/manager/SeeInventoryPOSbyColor.php?color=CZ">CTiles</a></div> </td>
<td> <div id="colorbutton"> <a href="http://beads.beadsbyberrie.com/manager/SeeInventoryPOSbyColor.php?color=CUP">CupB</a></div> </td>
<td> <div id="colorbutton"> <a href="http://beads.beadsbyberrie.com/manager/SeeInventoryPOSbyColor.php?color=DGR">Dagger</a></div> </td>
<td> <div id="colorbutton"> <a href="http://beads.beadsbyberrie.com/manager/SeeInventoryPOSbyColor.php?color=DB">Delica</a></div> </td>
<td> <div id="colorbutton"><a href="http://beads.beadsbyberrie.com/manager/SeeInventoryPOSbyColor.php?color=DEMI">Demi</a></div> </td>
<td> <div id="colorbutton"> <a href="http://beads.beadsbyberrie.com/manager/SeeInventoryPOSbyColor.php?color=DD">D Duo</a></div> </td>
<td> <div id="colorbutton"> <a href="http://beads.beadsbyberrie.com/manager/SeeInventoryPOSbyColor.php?color=DIA">Diamon</a></div> </td>
<td> <div id="colorbutton"><a href="http://beads.beadsbyberrie.com/manager/SeeInventoryPOSbyColor.php?color=DSC">DiscD</a></div> </td>	   
<td> <div id="colorbutton"> <a href="http://beads.beadsbyberrie.com/manager/SeeInventoryPOSbyColor.php?color=DK">Druk</a></div> </td>
<td><div id="colorbutton"><a href="http://beads.beadsbyberrie.com/manager/SeeInventoryPOSbyColor.php?color=DR">Drops</a></div> </td>
<td> <div id="colorbutton"><a href="http://beads.beadsbyberrie.com/manager/SeeInventoryPOSbyColor.php?color=DRD">DrpDuo</a></div> </td> 
<td> <div id="colorbutton"><a href="http://beads.beadsbyberrie.com/manager/SeeInventoryPOSbyColor.php?color=DU">Duo</a></div> </td>
<td> <div id="colorbutton"><a href="http://beads.beadsbyberrie.com/manager/SeeInventoryPOSbyColor.php?color=FL">Flwer</a></div> </td> 
<td> <div id="colorbutton"> <a href="http://beads.beadsbyberrie.com/manager/SeeInventoryPOSbyColor.php?color=GEK">Gecko</a></div> </td>
<td> <div id="colorbutton"> <a href="http://beads.beadsbyberrie.com/manager/SeeInventoryPOSbyColor.php?color=GNK">Ginko</a></div> </td>
  </tr>
    <tr>
	   <td> <div id="colorbutton"> <a href="http://beads.beadsbyberrie.com/manager/SeeInventoryPOSbyColor.php?color=H">Heart</a></div> </td>
<td> <div id="colorbutton"> <a href="http://beads.beadsbyberrie.com/manager/SeeInventoryPOSbyColor.php?color=HC">HonyC</a></div> </td>
<td> <div id="colorbutton"> <a href="http://beads.beadsbyberrie.com/manager/SeeInventoryPOSbyColor.php?color=HCJ">HoneyJ</a></div> </td>
<td> <div id="colorbutton"> <a href="http://beads.beadsbyberrie.com/manager/SeeInventoryPOSbyColor.php?color=HM">HMoon</a></div> </td>
<td> <div id="colorbutton"> <a href="http://beads.beadsbyberrie.com/manager/SeeInventoryPOSbyColor.php?color=HN">Horn</a></div> </td>
<td> <div id="colorbutton"> <a href="http://beads.beadsbyberrie.com/manager/SeeInventoryPOSbyColor.php?color=ILOS">Ilos</a></div> </td>
<td> <div id="colorbutton"> <a href="http://beads.beadsbyberrie.com/manager/SeeInventoryPOSbyColor.php?color=IOS">Ios</a></div> </td>
<td> <div id="colorbutton"> <a href="http://beads.beadsbyberrie.com/manager/SeeInventoryPOSbyColor.php?color=ID">IrisDuo</a></div> </td>
<td> <div id="colorbutton"> <a href="http://beads.beadsbyberrie.com/manager/SeeInventoryPOSbyColor.php?color=KH">Kheops</a></div> </td>
<td> <div id="colorbutton"> <a href="http://beads.beadsbyberrie.com/manager/SeeInventoryPOSbyColor.php?color=K">Kite</a></div> </td>
<td> <div id="colorbutton"> <a href="http://beads.beadsbyberrie.com/manager/SeeInventoryPOSbyColor.php?color=KOS">Kos</a></div> </td>
<td> <div id="colorbutton"> <a href="http://beads.beadsbyberrie.com/manager/SeeInventoryPOSbyColor.php?color=LEN">Lental</a></div> </td>
<td> <div id="colorbutton"> <a href="http://beads.beadsbyberrie.com/manager/SeeInventoryPOSbyColor.php?color=LF">Leaves</a></div> </td>
<td> <div id="colorbutton"> <a href="http://beads.beadsbyberrie.com/manager/SeeInventoryPOSbyColor.php?color=LM.">L Mag</a></div> </td>
<td> <div id="colorbutton"> <a href="http://beads.beadsbyberrie.com/manager/SeeInventoryPOSbyColor.php?color=MEL">Melon</a></div> </td>
<td> <div id="colorbutton"> <a href="http://beads.beadsbyberrie.com/manager/SeeInventoryPOSbyColor.php?color=MD">Mini D</a></div> </td>
<td> <div id="colorbutton"> <a href="http://beads.beadsbyberrie.com/manager/SeeInventoryPOSbyColor.php?color=MNS">Minos</a></div> </td>
 <td> <div id="colorbutton"> <a href="http://beads.beadsbyberrie.com/manager/SeeInventoryPOSbyColor.php?color=NIB">NibBit</a></div> </td>
<td> <div id="colorbutton"> <a href="http://beads.beadsbyberrie.com/manager/SeeInventoryPOSbyColor.php?color=OB">OBead</a></div> </td>
<td> <div id="colorbutton"> <a href="http://beads.beadsbyberrie.com/manager/SeeInventoryPOSbyColor.php?color=P">Pnut</a></div> </td>
  </tr>  
     <tr>
<td> <div id="colorbutton"> <a href="http://beads.beadsbyberrie.com/manager/SeeInventoryPOSbyColor.php?color=PD">PaislyD</a></div> </td>
<td> <div id="colorbutton"> <a href="http://beads.beadsbyberrie.com/manager/SeeInventoryPOSbyColor.php?color=PAR">Paros</a></div> </td>
<td> <div id="colorbutton"> <a href="http://beads.beadsbyberrie.com/manager/SeeInventoryPOSbyColor.php?color=PRL">Pearl</a></div> </td>
<td> <div id="colorbutton"> <a href="http://beads.beadsbyberrie.com/manager/SeeInventoryPOSbyColor.php?color=PET">Petal</a></div> </td>
<td> <div id="colorbutton"> <a href="http://beads.beadsbyberrie.com/manager/SeeInventoryPOSbyColor.php?color=PIN">Pinch</a></div> </td>
<td><div id="colorbutton"><a href="http://beads.beadsbyberrie.com/manager/SeeInventoryPOSbyColor.php?color=PIP">Pips</a></div> </td>
<td> <div id="colorbutton"><a href="http://beads.beadsbyberrie.com/manager/SeeInventoryPOSbyColor.php?color=PLT">Pellet</a></div> </td>
<td> <div id="colorbutton"><a href="http://beads.beadsbyberrie.com/manager/SeeInventoryPOSbyColor.php?color=QL.">Q lent</a></div> </td>
<td> <div id="colorbutton"><a href="http://beads.beadsbyberrie.com/manager/SeeInventoryPOSbyColor.php?color=QT">QTile</a></div> </td> 
<td> <div id="colorbutton"> <a href="http://beads.beadsbyberrie.com/manager/SeeInventoryPOSbyColor.php?color=RON">RondL</a></div> </td>
<td> <div id="colorbutton"> <a href="http://beads.beadsbyberrie.com/manager/SeeInventoryPOSbyColor.php?color=RD">RounD</a></div> </td>
<td> <div id="colorbutton"> <a href="http://beads.beadsbyberrie.com/manager/SeeInventoryPOSbyColor.php?color=RT">RounT</a></div> </td>
<td> <div id="colorbutton"> <a href="http://beads.beadsbyberrie.com/manager/SeeInventoryPOSbyColor.php?color=RU">Rulla</a></div> </td>
<td> <div id="colorbutton"> <a href="http://beads.beadsbyberrie.com/manager/SeeInventoryPOSbyColor.php?color=SAM">Samos</a></div> </td>
<td> <div id="colorbutton"> <a href="http://beads.beadsbyberrie.com/manager/SeeInventoryPOSbyColor.php?color=SH">Shell</a></div> </td>
<td> <div id="colorbutton"> <a href="http://beads.beadsbyberrie.com/manager/SeeInventoryPOSbyColor.php?color=SK">Silky</a></div> </td>
<td> <div id="colorbutton"> <a href="http://beads.beadsbyberrie.com/manager/SeeInventoryPOSbyColor.php?color=SB">Square</a></div> </td>
<td> <div id="colorbutton"> <a href="http://beads.beadsbyberrie.com/manager/SeeInventoryPOSbyColor.php?color=ST">Stone</a></div> </td>
<td> <div id="colorbutton"> <a href="http://beads.beadsbyberrie.com/manager/SeeInventoryPOSbyColor.php?color=SD">StormD</a></div> </td>
<td> <div id="colorbutton"> <a href="http://beads.beadsbyberrie.com/manager/SeeInventoryPOSbyColor.php?color=TG">Tango</a></div> </td>
</tr>
	 <tr>
<td> <div id="colorbutton"> <a href="http://beads.beadsbyberrie.com/manager/SeeInventoryPOSbyColor.php?color=TEA">Teacup</a></div> </td>
<td> <div id="colorbutton"> <a href="http://beads.beadsbyberrie.com/manager/SeeInventoryPOSbyColor.php?color=TL">Tila</a></div> </td>
<td> <div id="colorbutton"> <a href="http://beads.beadsbyberrie.com/manager/SeeInventoryPOSbyColor.php?color=TNS">Tinos</a></div> </td>
<td> <div id="colorbutton"> <a href="http://beads.beadsbyberrie.com/manager/SeeInventoryPOSbyColor.php?color=TRI">Triang</a></div> </td>
<td> <div id="colorbutton"> <a href="http://beads.beadsbyberrie.com/manager/SeeInventoryPOSbyColor.php?color=TRT">Trinity</a></div> </td>
<td> <div id="colorbutton"> <a href="http://beads.beadsbyberrie.com/manager/SeeInventoryPOSbyColor.php?color=UN">Uno</a></div> </td>
<td> <div id="colorbutton"> <a href="http://beads.beadsbyberrie.com/manager/SeeInventoryPOSbyColor.php?color=TW">Twists</a></div> </td>
<td> <div id="colorbutton"> <a href="http://beads.beadsbyberrie.com/manager/SeeInventoryPOSbyColor.php?color=VEX">Vexolo</a></div> </td>
<td> <div id="colorbutton"> <a href="http://beads.beadsbyberrie.com/manager/SeeInventoryPOSbyColor.php?color=Z">ZoliD</a></div> </td>
<td> <div id="colorbutton"> <a href="http://beads.beadsbyberrie.com/manager/SeeInventoryPOSbyColor.php?color=ZOR">Zorro</a></div> </td>
		 <td> <div id="colorbutton"> <a href="http://beads.beadsbyberrie.com/manager/SeeInventoryPOSbyColor.php?color=CR&size=3mm">3mmCR</a></div> </td>
		  <td> <div id="colorbutton"> <a href="http://beads.beadsbyberrie.com/manager/SeeInventoryPOSbyColor.php?color=CR&size=4mm">4mmCR</a></div> </td>
		 <td> <div id="colorbutton"> <a href="http://beads.beadsbyberrie.com/manager/SeeInventoryPOSbyColor.php?color=CR&size=6mm">6mmCR</a></div> </td>
  </tr>
	 <tr><td></td></tr>

  </table>

<table width="1100 px" border="0" bgcolor="#000000">
  <tr>
<?php // Here we search for the items on this page; print the nav bar 
			         // and then loop through the results, outputting a cell for each item

//$resultid2= mysql_query("select * from beads where color LIKE  '%" . $beadColor . "%'" ,$Catalog);
//$resultid2= mysql_query("select * from beads where ( beadType='PT' or beadType='PTI' or beadType='PTB') and category LIKE  '%" . $beadColor . "%'" .  "order by beadType asc, baseKey desc, beadNo desc" ,$Catalog);
//$resultid2= mysql_query("select * from beads where ( beadType='PT' or beadType='PTI' or beadType='PTB' ) and ((category LIKE   '$beadColor%') or (category LIKE  '%.$beadColor%' )) order by beadType asc, baseKey desc, beadNo desc" ,$Catalog);
	 // $resultid2= mysql_query("select * from beads where ( beadType='PT' or beadType='PTI' or beadType='PTB' or beadType='PTDB' or beadType='PTBB' or beadType='PTT') and ((category LIKE   '$beadColor%') or (category LIKE  '%.$beadColor%' )) order by beadType asc, baseKey desc, beadNo desc" ,$Catalog);
	  if ($beadColor== "CR") {
	   $searchstr = "select * from beads where ( beadType='$beadColor') and ((qf)>0)  and ( size='$beadSize') order by beadType asc, baseKey asc, beadNo asc";
	  $resultid2= mysql_query($searchstr ,$Catalog);
	  } else {
		   $searchstr = "select * from beads where ( beadType='$beadColor') and ((qf)>0) order by beadType asc, baseKey asc, beadNo asc";
	  $resultid2= mysql_query($searchstr ,$Catalog);
	  };


$myitems=mysql_num_rows($resultid2);
	echo "searching=" . $searchstr . ' <br/>';
	echo "Found Items=" . $myitems . ' <br/>';

for ($i= 0; $i < $myitems; $i++) {
$row= mysql_fetch_assoc($resultid2);


if ($i%$rowsize_Catalog==0) print "</tr><tr>";
	print '<td width="160 px"  width="160 px" align="center" valign="top" bgcolor="#FFFFFF">';
    print '<table height="100%" width="100%" border="0" cellspacing="0" cellpadding="4">'."\n";
    print '<tr valign="top" align="left">';
$qty = $row['qf']+$row['qfdrwr'];
if ($qty>0) {
    print '<td align="left"><font face="Verdana, Arial, Helvetica, sans-serif" size="-1" > ';
} else {
    print '<td bgcolor="#BBBBBB" align="left"><font face="Verdana, Arial, Helvetica, sans-serif" size="-1" > ';
}
##if ( $row['beadType']=="CZ") { 
##} else {
     print "<b>" . $row['beadType'];
##};


print  " " . $row['beadNo']." - $". $row['price']. " - [". $qty . "</b>]</td>";	
##if (substr ( $row['description'] , 0 , 4 ) == "http") {
 ##   print "</tr><tr><td>". "<a href='" . $row['description']. "' target=new> " . "[see]" . "</a>  " .$row['notes']. " </td>"."\n";
 if (substr ( $row['url'] , 0 , 4 ) == "http") {
    print "</tr><tr><td>". "<a href='" . $row['url']. "' target=_blank> " . "[see]" . "</a>  " .$row['label']. " </td>"."\n";
} else {
    print "</tr><tr>"."<td>".$row['label']."</td>"."\n";
}
    print '</tr><tr>'."\n";
    print "<td  align='center' valign='top'>";
     //$imagePath = "http://beadsbyberrie.com";
	$imagePath = "http://images.bajzek.com:8888";


			$imagePath = $imagePath . "/Assets/" . $row['beadType'] . "/"  . $row['beadNo'] . ".jpg";
			
		
	print "<a href='" .  $imagePath . "' target=_blank>" . "<img src='" .  $imagePath . " ' border='0' width='150 px'  width='150 px' /></a></td>"."\n";
    print "</tr>"."\n";
    print "</tr></table></td>"."\n";			  
			 }
			  ?>
	
	</tr>
    </table>
 </center>

</body>
</html>