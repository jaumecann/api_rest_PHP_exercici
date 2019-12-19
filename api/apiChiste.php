<?php

include("_db.php");

$sql = "SELECT * FROM chistes ORDER BY RAND() LIMIT 1";

// mysqli es interno de php, una librería 
$result = $mysqli->query($sql);

$numrows = $result->num_rows;
echo $numrows;

$datos = array();

if($numrows>0){
    $datos['type'] = "success";
    $datos['data'] = $result->fetch_all(MYSQLI_ASSOC);
}
else
{
    $datos['type'] = "error";
    $datos['data'] = 'No hay chistes';
}

?>