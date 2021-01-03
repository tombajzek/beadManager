<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/mainJewelry.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<!-- InstanceBeginEditable name="doctitle" -->
<title>Beads By Berrie - Inventory.</title>

<?php 
//we will be given $beadType
$beadType=$_REQUEST["btype"];
$subType=$_REQUEST["subType"];

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
<style>
    #subtypebutton {
  width: 100px;
  height: 20px;
  background-color: #EEEEEE;
  moz-border-radius: 5px;
  -webkit-border-radius: 5px;
  border: 1px solid #CCCCCC;
  text-align: center;
  padding: 1px;
}
#subtypebutton:hover {opacity: 0.6; }
A:link {color: blue; text-decoration:none}
A:visited {color: blue; text-decoration:none}
A:hover {text-decoration:underline; opacity: 0.6; }
  </style> 
<style>
    #categorybutton {
  width: 100px;
  height: 20px;
  background-color: #EEEE00;
  moz-border-radius: 5px;
  -webkit-border-radius: 5px;
  border: 1px solid #CCCCCC;
  text-align: center;
  padding: 1px;
}
#categorybutton {opacity: 0.6; }
A:link {color: green; text-decoration:none}
A:visited {color: green; text-decoration:none}
A:hover {text-decoration:underline; opacity: 0.6; }
  </style> 
</head>


<body >
<table>
 <tr>
 <td><div id="subtypebutton"><a href="http://beads.beadsbyberrie.com/seeInventoryFolderNew.php?subType=PT&btype=PTRN">Patterns</a></div> </td>
<td> <div id="subtypebutton"><a href="http://beads.beadsbyberrie.com/seeInventoryFolderNew.php?subType=PTBB&btype=PTRN">Patterns Berrie</a></div> </td>
 <td> <div id="subtypebutton"><a href="http://beads.beadsbyberrie.com/seeInventoryFolderNew.php?subType=PTB&btype=PTRN">Pattern Books</a></div> </td>
<td> <div id="subtypebutton"><a href="http://beads.beadsbyberrie.com/seeInventoryFolderNew.php?subType=PTT&btype=PTRN">Tutorials</a></div> </td> 
<td> <div id="subtypebutton"> <a href="http://beads.beadsbyberrie.com/seeInventoryFolderNew.php?subType=PTI&btype=PTRN">Ideas</a></div> </td>
<td> <div id="categorybutton"> <a href="http://beads.beadsbyberrie.com/seeInventoryFolderNew.php?category=L.&btype=PTRN">Loom</a></div> </td>

  </tr>
  </table>
<table width="1100 px" border="0" bgcolor="#000000">
  <tr>
<?php // Here we search for the items on this page; print the nav bar 
			         // and then loop through the results, outputting a cell for each item

//$resultid2= mysql_query("select * from beads where beadType = '" . $beadType . "'" .  "order by beadType,beadNo" ,$Catalog);

$resultid2= mysql_query("select * from beads where beadType = '" . $beadType . "'" .  " and subType='" . $subType ."' order by beadType,beadNo" ,$Catalog);


//$resultid2= mysql_query('select * from beads where beadType = "'  . $beadType . '"'. " order by $beadType" . '"' ,$Catalog);
//print 'select * from beads where beadType = "'  . $beadType . '"' . " order by //$beadType" . '"';

$myitems=mysql_num_rows($resultid2);


for ($i= 0; $i < $myitems; $i++) {
$row= mysql_fetch_assoc($resultid2);


if ($i%$rowsize_Catalog==0) print "</tr><tr>";
	print '<td width="210 px"  width="210 px" align="center" valign="top" bgcolor="#FFFFFF">';
    print '<table height="100%" width="100%" border="0" cellspacing="0" cellpadding="4">'."\n";
    print '<tr valign="top" align="left">';
$qty = $row[shelf]+$row[cortland]+$row[diana]+$row[drawer];
if ($qty>0) {
    print '<td align="left"><font face="Verdana, Arial, Helvetica, sans-serif" size="-1" > ';
} else {
    print '<td bgcolor="#BBBBBB" align="left"><font face="Verdana, Arial, Helvetica, sans-serif" size="-1" > ';
}
print  $row[beadNo]." - $". $row[price]. " - (". $qty . ")</td>";	
if (substr ( $row[description] , 0 , 4 ) == "http") {
    print "</tr><tr><td>". "<a href='" . $row[description]. "' target=new> " . "[see]" . "</a>  " .$row[notes]. " </td>"."\n";
} else {
    print "</tr><tr>"."<td>".$row[description]."</td>"."\n";
}
    print '</tr><tr>'."\n";
    print "<td  align='center' valign='top'>";
     $imagePath = "http://beadsbyberrie.com";


	    if (  $row[beadType]=="DB"  |  $row[beadType]=="TL"  | $row[beadType]=="B" | $row[beadType]=="F" | $row[beadType]=="BN" | $row[beadType]=="BN" | $row[beadType]=="SH" | $row[beadType]=="ST" )
	    {
			$imagePath = $imagePath . "/Assets/" . $row[beadType] . "/" . $row[beadType] . $row[beadNo] . ".jpg";
			
		}
		else if (  $row[beadType]=="CZ" | $row[beadType]=="SB" | $row[beadType]=="PTRN"  | $row[beadType]=="BPAT" ) 
		{
			$imagePath =  $imagePath . "/Assets/" . $row[beadType] . "/" . $row[beadNo] . ".jpg";
		} 
	    else if ($row[beadType]=="CR" )
	    {   $imagePath = $imagePath . "/Assets/" . $row[beadType] . "/" . $row[beadType] . $row[beadNo] . ".jpg";

	    } else {
		$imagePath =  $imagePath . "/Assets/" . $row[beadType] . "/" . $row[beadType] . "-" . $row[beadNo] . ".jpg";

	    }
		
	print "<a href='" .  $imagePath . "' target=new>" . "<img src='" .  $imagePath . " ' border='0' width='200 px'  width='200 px' /></a></td>"."\n";
    print "</tr>"."\n";
    print "</tr></table></td>"."\n";			  
			 }
			  ?>
	
	</tr>
    </table>
 </center>

</body>
</html>