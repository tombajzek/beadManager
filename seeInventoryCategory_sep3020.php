<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/mainJewelry.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<!-- InstanceBeginEditable name="doctitle" -->
<title>Beads By Berrie - Patterns By Bead Type.</title>

<?php 
//we will be given $beadType
$beadColor=$_REQUEST["color"];
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
 <td><div id="colorbutton"><a href="http://beads.beadsbyberrie.com/manager/seeInventoryCategory.php?color=15.">15</a></div> </td>
<td><div id="colorbutton"><a href="http://beads.beadsbyberrie.com/manager/seeInventoryCategory.php?color=11.">11</a></div> </td>
<td> <div id="colorbutton"><a href="http://beads.beadsbyberrie.com/manager/seeInventoryCategory.php?color=8.">8</a></div> </td>
 <td> <div id="colorbutton"><a href="http://beads.beadsbyberrie.com/manager/seeInventoryCategory.php?color=6.">6</a></div> </td>
<td> <div id="colorbutton"> <a href="http://beads.beadsbyberrie.com/manager/seeInventoryCategory.php?color=AMS.">Amos</a></div> </td>
<td> <div id="colorbutton"> <a href="http://beads.beadsbyberrie.com/manager/seeInventoryCategory.php?color=ARC.">ARC</a></div> </td>
<td> <div id="colorbutton"> <a href="http://beads.beadsbyberrie.com/manager/seeInventoryCategory.php?color=ATLAS.">Atlas</a></div> </td>
<td> <div id="colorbutton"> <a href="http://beads.beadsbyberrie.com/manager/seeInventoryCategory.php?color=AVA.">AVA</a></div> </td>
<td> <div id="colorbutton"> <a href="http://beads.beadsbyberrie.com/manager/seeInventoryCategory.php?color=BAR.">Bar</a></div> </td>
<td> <div id="colorbutton"> <a href="http://beads.beadsbyberrie.com/manager/seeInventoryCategory.php?color=BM.">Beams</a></div> </td>
<td> <div id="colorbutton"> <a href="http://beads.beadsbyberrie.com/manager/seeInventoryCategory.php?color=BN.">Bone</a></div> </td>
<td> <div id="colorbutton"> <a href="http://beads.beadsbyberrie.com/manager/seeInventoryCategory.php?color=BWT.">BowTri</a></div> </td>
<td> <div id="colorbutton"> <a href="http://beads.beadsbyberrie.com/manager/seeInventoryCategory.php?color=BR.">Brick</a></div> </td>
<td> <div id="colorbutton"> <a href="http://beads.beadsbyberrie.com/manager/seeInventoryCategory.php?color=BG.">Bugle</a></div> </td>
<td> <div id="colorbutton"> <a href="http://beads.beadsbyberrie.com/manager/seeInventoryCategory.php?color=BUB.">ButtnB</a></div> </td>
<td> <div id="colorbutton"> <a href="http://beads.beadsbyberrie.com/manager/seeInventoryCategory.php?color=CA.">Cali</a></div> </td>
<td> <div id="colorbutton"> <a href="http://beads.beadsbyberrie.com/manager/seeInventoryCategory.php?color=CB.">Cab</a></div> </td>
<td> <div id="colorbutton"> <a href="http://beads.beadsbyberrie.com/manager/seeInventoryCategory.php?color=CRB.">Carrier</a></div> </td>
<td> <div id="colorbutton"> <a href="http://beads.beadsbyberrie.com/manager/seeInventoryCategory.php?color=CD.">C.Diam</a></div> </td>
<td> <div id="colorbutton"> <a href="http://beads.beadsbyberrie.com/manager/seeInventoryCategory.php?color=CHX.">Chexx</a></div> </td>

  </tr>
   <tr>
<td> <div id="colorbutton"> <a href="http://beads.beadsbyberrie.com/manager/seeInventoryCategory.php?color=CHL.">Chili</a></div> </td>
<td> <div id="colorbutton"> <a href="http://beads.beadsbyberrie.com/manager/seeInventoryCategory.php?color=COMP.">Compnt</a></div> </td>
<td> <div id="colorbutton"> <a href="http://beads.beadsbyberrie.com/manager/seeInventoryCategory.php?color=CR.">Crystal</a></div> </td>
<td> <div id="colorbutton"><a href="http://beads.beadsbyberrie.com/manager/seeInventoryCategory.php?color=CS.">Cresnt</a></div> </td> 
<td> <div id="colorbutton"> <a href="http://beads.beadsbyberrie.com/manager/seeInventoryCategory.php?color=CZ.">CTiles</a></div> </td>
<td> <div id="colorbutton"> <a href="http://beads.beadsbyberrie.com/manager/seeInventoryCategory.php?color=CUP.">CupB</a></div> </td>
<td> <div id="colorbutton"> <a href="http://beads.beadsbyberrie.com/manager/seeInventoryCategory.php?color=DGR.">Dagger</a></div> </td>
<td> <div id="colorbutton"> <a href="http://beads.beadsbyberrie.com/manager/seeInventoryCategory.php?color=DB.">Delica</a></div> </td>
<td> <div id="colorbutton"><a href="http://beads.beadsbyberrie.com/manager/seeInventoryCategory.php?color=DEMI.">Demi</a></div> </td>
<td> <div id="colorbutton"> <a href="http://beads.beadsbyberrie.com/manager/seeInventoryCategory.php?color=DD.">D Duo</a></div> </td>
<td> <div id="colorbutton"> <a href="http://beads.beadsbyberrie.com/manager/seeInventoryCategory.php?color=DIA.">Diamon</a></div> </td>
<td> <div id="colorbutton"><a href="http://beads.beadsbyberrie.com/manager/seeInventoryCategory.php?color=DSC.">DiscD</a></div> </td>	   
<td> <div id="colorbutton"> <a href="http://beads.beadsbyberrie.com/manager/seeInventoryCategory.php?color=DK.">Druk</a></div> </td>
<td><div id="colorbutton"><a href="http://beads.beadsbyberrie.com/manager/seeInventoryCategory.php?color=DR.">Drops</a></div> </td>
<td> <div id="colorbutton"><a href="http://beads.beadsbyberrie.com/manager/seeInventoryCategory.php?color=DRD.">DrpDuo</a></div> </td> 
<td> <div id="colorbutton"> <a href="http://beads.beadsbyberrie.com/manager/seeInventoryCategory.php?color=DUE.">Duet</a></div> </td>
<td> <div id="colorbutton"><a href="http://beads.beadsbyberrie.com/manager/seeInventoryCategory.php?color=DU.">Duo</a></div> </td>
<td> <div id="colorbutton"><a href="http://beads.beadsbyberrie.com/manager/seeInventoryCategory.php?color=FL.">Flwer</a></div> </td> 
<td> <div id="colorbutton"> <a href="http://beads.beadsbyberrie.com/manager/seeInventoryCategory.php?color=GEK.">Gecko</a></div> </td>
<td> <div id="colorbutton"> <a href="http://beads.beadsbyberrie.com/manager/seeInventoryCategory.php?color=GNK.">Ginko</a></div> </td>
  </tr>
    <tr>
	   <td> <div id="colorbutton"> <a href="http://beads.beadsbyberrie.com/manager/seeInventoryCategory.php?color=H.">Heart</a></div> </td>
<td> <div id="colorbutton"> <a href="http://beads.beadsbyberrie.com/manager/seeInventoryCategory.php?color=HC.">HonyC</a></div> </td>
<td> <div id="colorbutton"> <a href="http://beads.beadsbyberrie.com/manager/seeInventoryCategory.php?color=HCJ.">HoneyJ</a></div> </td>
<td> <div id="colorbutton"> <a href="http://beads.beadsbyberrie.com/manager/seeInventoryCategory.php?color=HM.">HMoon</a></div> </td>
<td> <div id="colorbutton"> <a href="http://beads.beadsbyberrie.com/manager/seeInventoryCategory.php?color=HN.">Horn</a></div> </td>
<td> <div id="colorbutton"> <a href="http://beads.beadsbyberrie.com/manager/seeInventoryCategory.php?color=ILOS.">Ilos</a></div> </td>
<td> <div id="colorbutton"> <a href="http://beads.beadsbyberrie.com/manager/seeInventoryCategory.php?color=IOS.">Ios</a></div> </td>
<td> <div id="colorbutton"> <a href="http://beads.beadsbyberrie.com/manager/seeInventoryCategory.php?color=ID.">IrisDuo</a></div> </td>
<td> <div id="colorbutton"> <a href="http://beads.beadsbyberrie.com/manager/seeInventoryCategory.php?color=KH.">Kheops</a></div> </td>
<td> <div id="colorbutton"> <a href="http://beads.beadsbyberrie.com/manager/seeInventoryCategory.php?color=K.">Kite</a></div> </td>
<td> <div id="colorbutton"> <a href="http://beads.beadsbyberrie.com/manager/seeInventoryCategory.php?color=KOS.">Kos</a></div> </td>
<td> <div id="colorbutton"> <a href="http://beads.beadsbyberrie.com/manager/seeInventoryCategory.php?color=LEN.">Lental</a></div> </td>
<td> <div id="colorbutton"> <a href="http://beads.beadsbyberrie.com/manager/seeInventoryCategory.php?color=LF.">Leaves</a></div> </td>
<td> <div id="colorbutton"> <a href="http://beads.beadsbyberrie.com/manager/seeInventoryCategory.php?color=LM.">L Mag</a></div> </td>
<td> <div id="colorbutton"> <a href="http://beads.beadsbyberrie.com/manager/seeInventoryCategory.php?color=MEL.">Melon</a></div> </td>
<td> <div id="colorbutton"> <a href="http://beads.beadsbyberrie.com/manager/seeInventoryCategory.php?color=MD.">Mini D</a></div> </td>
<td> <div id="colorbutton"> <a href="http://beads.beadsbyberrie.com/manager/seeInventoryCategory.php?color=MNS.">Minos</a></div> </td>
 <td> <div id="colorbutton"> <a href="http://beads.beadsbyberrie.com/manager/seeInventoryCategory.php?color=NIB.">NibBit</a></div> </td>
<td> <div id="colorbutton"> <a href="http://beads.beadsbyberrie.com/manager/seeInventoryCategory.php?color=OB.">OBead</a></div> </td>
<td> <div id="colorbutton"> <a href="http://beads.beadsbyberrie.com/manager/seeInventoryCategory.php?color=P.">Pnut</a></div> </td>
  </tr>  
     <tr>
<td> <div id="colorbutton"> <a href="http://beads.beadsbyberrie.com/manager/seeInventoryCategory.php?color=PD.">PaislyD</a></div> </td>
<td> <div id="colorbutton"> <a href="http://beads.beadsbyberrie.com/manager/seeInventoryCategory.php?color=PAR.">Paros</a></div> </td>
<td> <div id="colorbutton"> <a href="http://beads.beadsbyberrie.com/manager/seeInventoryCategory.php?color=PRL.">Pearl</a></div> </td>
<td> <div id="colorbutton"> <a href="http://beads.beadsbyberrie.com/manager/seeInventoryCategory.php?color=PET.">Petal</a></div> </td>
<td> <div id="colorbutton"> <a href="http://beads.beadsbyberrie.com/manager/seeInventoryCategory.php?color=PIN.">Pinch</a></div> </td>
<td><div id="colorbutton"><a href="http://beads.beadsbyberrie.com/manager/seeInventoryCategory.php?color=PIP.">Pips</a></div> </td>
<td> <div id="colorbutton"><a href="http://beads.beadsbyberrie.com/manager/seeInventoryCategory.php?color=PLT.">Pellet</a></div> </td>
<td> <div id="colorbutton"><a href="http://beads.beadsbyberrie.com/manager/seeInventoryCategory.php?color=QL.">Q lent</a></div> </td>
<td> <div id="colorbutton"><a href="http://beads.beadsbyberrie.com/manager/seeInventoryCategory.php?color=QT.">QTile</a></div> </td> 
<td> <div id="colorbutton"> <a href="http://beads.beadsbyberrie.com/manager/seeInventoryCategory.php?color=RON.">RondL</a></div> </td>
<td> <div id="colorbutton"> <a href="http://beads.beadsbyberrie.com/manager/seeInventoryCategory.php?color=RD.">RounD</a></div> </td>
<td> <div id="colorbutton"> <a href="http://beads.beadsbyberrie.com/manager/seeInventoryCategory.php?color=RT.">RounT</a></div> </td>
<td> <div id="colorbutton"> <a href="http://beads.beadsbyberrie.com/manager/seeInventoryCategory.php?color=RU.">Rulla</a></div> </td>
<td> <div id="colorbutton"> <a href="http://beads.beadsbyberrie.com/manager/seeInventoryCategory.php?color=SAM.">Samos</a></div> </td>
<td> <div id="colorbutton"> <a href="http://beads.beadsbyberrie.com/manager/seeInventoryCategory.php?color=SH.">Shell</a></div> </td>
<td> <div id="colorbutton"> <a href="http://beads.beadsbyberrie.com/manager/seeInventoryCategory.php?color=SK.">Silky</a></div> </td>
<td> <div id="colorbutton"> <a href="http://beads.beadsbyberrie.com/manager/seeInventoryCategory.php?color=SB.">Square</a></div> </td>
<td> <div id="colorbutton"> <a href="http://beads.beadsbyberrie.com/manager/seeInventoryCategory.php?color=ST.">Stone</a></div> </td>
<td> <div id="colorbutton"> <a href="http://beads.beadsbyberrie.com/manager/seeInventoryCategory.php?color=SD.">StormD</a></div> </td>
<td> <div id="colorbutton"> <a href="http://beads.beadsbyberrie.com/manager/seeInventoryCategory.php?color=TG.">Tango</a></div> </td>
</tr>
	 <tr>
<td> <div id="colorbutton"> <a href="http://beads.beadsbyberrie.com/manager/seeInventoryCategory.php?color=TEA.">Teacup</a></div> </td>
<td> <div id="colorbutton"> <a href="http://beads.beadsbyberrie.com/manager/seeInventoryCategory.php?color=TL.">Tila</a></div> </td>
<td> <div id="colorbutton"> <a href="http://beads.beadsbyberrie.com/manager/seeInventoryCategory.php?color=TNS.">Tinos</a></div> </td>
<td> <div id="colorbutton"> <a href="http://beads.beadsbyberrie.com/manager/seeInventoryCategory.php?color=TRI.">Triang</a></div> </td>
<td> <div id="colorbutton"> <a href="http://beads.beadsbyberrie.com/manager/seeInventoryCategory.php?color=TRT.">Trinity</a></div> </td>
<td> <div id="colorbutton"> <a href="http://beads.beadsbyberrie.com/manager/seeInventoryCategory.php?color=UN.">Uno</a></div> </td>
<td> <div id="colorbutton"> <a href="http://beads.beadsbyberrie.com/manager/seeInventoryCategory.php?color=TW.">Twists</a></div> </td>
<td> <div id="colorbutton"> <a href="http://beads.beadsbyberrie.com/manager/seeInventoryCategory.php?color=VEX.">Vexolo</a></div> </td>
<td> <div id="colorbutton"> <a href="http://beads.beadsbyberrie.com/manager/seeInventoryCategory.php?color=Z.">ZoliD</a></div> </td>
<td> <div id="colorbutton"> <a href="http://beads.beadsbyberrie.com/manager/seeInventoryCategory.php?color=ZOR.">Zorro</a></div> </td>
  </tr>
	 <tr><td></td></tr>
<tr>
<td><div id="colorbutton"> <a href="http://beads.beadsbyberrie.com/manager/seeInventoryCategory.php?color=B.">Brclet</a></div> </td>
<td> <div id="colorbutton"> <a href="http://beads.beadsbyberrie.com/manager/seeInventoryCategory.php?color=N.">Neck</a></div> </td>
<td> <div id="colorbutton"> <a href="http://beads.beadsbyberrie.com/manager/seeInventoryCategory.php?color=E.">Earring</a></div> </td>
<td> <div id="colorbutton"> <a href="http://beads.beadsbyberrie.com/manager/seeInventoryCategory.php?color=EMB.">Embrd</a></div> </td>
<td> <div id="colorbutton"> <a href="http://beads.beadsbyberrie.com/manager/seeInventoryCategory.php?color=L.">Loom</a></div> </td>
<td> &nbsp; &nbsp;&nbsp;</td>
	<td> <div id="colorbutton"> <a href="http://beads.beadsbyberrie.com/manager/seeInventoryCategory.php?color=TU.">Tutorial</a></div> </td>
<td> &nbsp; &nbsp;&nbsp;</td>
<td> <div id="colorbutton"> <a href="http://beads.beadsbyberrie.com/manager/seeInventoryCategory.php?color=V.">Video</a></div> </td>
<td> &nbsp; &nbsp;&nbsp;</td>
<td> <div id="colorbutton"> <a href="http://beads.beadsbyberrie.com/manager/seeInventoryCategory.php?color=D0.">Easy</a></div> </td>
<td> <div id="colorbutton"> <a href="http://beads.beadsbyberrie.com/manager/seeInventoryCategory.php?color=D1.">Average</a></div> </td>
<td> <div id="colorbutton"> <a href="http://beads.beadsbyberrie.com/manager/seeInventoryCategory.php?color=D2.">Hard</a></div> </td>
	<td> &nbsp; &nbsp;&nbsp;</td>
	<td><div id="colorbutton"> <a href="http://beads.beadsbyberrie.com/manager/seeInventoryCategory.php?color=FREE.">Copy√</a></div>
	<td><div id="colorbutton"> <a href="http://beads.beadsbyberrie.com/manager/seeInventoryCategory.php?color=PAID.">Copy$</a></div></td>
	<td> &nbsp; &nbsp;&nbsp;</td>
	<td><div id="colorbutton"> <a href="http://beads.beadsbyberrie.com/manager/seeInventoryCategory.php?color=DIANA.">Diana</a></div>
</tr>
  </table>

<table width="1100 px" border="0" bgcolor="#000000">
  <tr>
<?php // Here we search for the items on this page; print the nav bar 
			         // and then loop through the results, outputting a cell for each item

//$resultid2= mysql_query("select * from beads where color LIKE  '%" . $beadColor . "%'" ,$Catalog);
//$resultid2= mysql_query("select * from beads where ( beadType='PT' or beadType='PTI' or beadType='PTB') and category LIKE  '%" . $beadColor . "%'" .  "order by beadType asc, baseKey desc, beadNo desc" ,$Catalog);
//$resultid2= mysql_query("select * from beads where ( beadType='PT' or beadType='PTI' or beadType='PTB' ) and ((category LIKE   '$beadColor%') or (category LIKE  '%.$beadColor%' )) order by beadType asc, baseKey desc, beadNo desc" ,$Catalog);
	  $resultid2= mysql_query("select * from beads where ( beadType='PT' or beadType='PTI' or beadType='PTB' or beadType='PTDB' or beadType='PTBB' or beadType='PTT') and ((category LIKE   '$beadColor%') or (category LIKE  '%.$beadColor%' )) order by beadType asc, baseKey desc, beadNo desc" ,$Catalog);


$myitems=mysql_num_rows($resultid2);


for ($i= 0; $i < $myitems; $i++) {
$row= mysql_fetch_assoc($resultid2);


if ($i%$rowsize_Catalog==0) print "</tr><tr>";
	print '<td width="160 px"  width="160 px" align="center" valign="top" bgcolor="#FFFFFF">';
    print '<table height="100%" width="100%" border="0" cellspacing="0" cellpadding="4">'."\n";
    print '<tr valign="top" align="left">';
$qty = $row['shelf']+$row['cortland']+$row['drawer'];
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
##if (substr ( $row['description'] , 0 , 4 ) == "http") {
 ##   print "</tr><tr><td>". "<a href='" . $row['description']. "' target=new> " . "[see]" . "</a>  " .$row['notes']. " </td>"."\n";
 if (substr ( $row['url'] , 0 , 4 ) == "http") {
    print "</tr><tr><td>". "<a href='" . $row['url']. "' target=_blank> " . "[see]" . "</a>  " .$row['label']. " </td>"."\n";
} else {
    print "</tr><tr>"."<td>".$row['label']."</td>"."\n";
}
    print '</tr><tr>'."\n";
    print "<td  align='center' valign='top'>";
     $imagePath = "http://beadsbyberrie.com";


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