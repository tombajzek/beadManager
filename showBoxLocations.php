<?php
// This lists the beadType table in a single column for reference. 
// Note that things other than beads are included in this table

// DataTables PHP library and database connection
$type =	'Mysql';
$host =	'127.0.0.1';
$db =	'beadStock';
$user =	'prj_berrie';
$pass =	'BerrieB11...';
$port =	'3306';
$dsn =	"mysql:host=$host;dbname=$db;charset=utf8";
$opt =	[PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC];
$pdo =	new PDO($dsn, $user, $pass, $opt);

// Now output our header
?>
<!DOCTYPE HTML>
<html lang="en"><!-- InstanceBegin template="/Templates/intranet09.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<link rel="stylesheet" type="text/css" href="css/beads.css">
</head>
<body>
<table width="250px">
	<thead>
		<th width="30%" class="left">Box #</th>
		<th width="*%" class="left">Location</th>
	</thead>
	<tbody>
<?php
// Now fetch the table
$qry = $pdo->query('select distinct beadType, baseKey, location from beads where beadType like "%Box%" and location !="" order by beadType, baseKey, location');
while ($row = $qry->fetch()) {
	echo '<tr>';
		echo '<td>' . $row['baseKey'] . '</td>';
		echo '<td>' . $row['location'] . '</td>';
	echo '</tr>';
} 

?>
	</tbody>
</table>
</body>