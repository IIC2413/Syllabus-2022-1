<?php

$db = new PDO("pgsql:dbname=profesor;host=localhost;port=5432;user=XXXX;password=XXXX");
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$db->setAttribute(PDO::ATTR_EMULATE_PREPARES, 1);

$nombre = str_replace("┌", "-", $_GET['query']);

$query = "SELECT * FROM pelicula where nombre like '".$nombre."%' order by nombre asc limit 250;";

//echo $query;
$stmt = $db->prepare($query);

if (!$stmt) {
    echo "\nPDO::errorInfo():\n";
    print_r($db->errorInfo());
} else{

	$stmt->execute();
	//$db->exec($query);

	$peliculas = $stmt->fetchAll(PDO::FETCH_NUM);

	$colcount = $stmt->columnCount();

	$result = array();
	header('Content-Type: application/json; charset=utf-8');
	echo json_encode($peliculas);

}


?>
