<?php
include "konekcija.php";
$mysqli = new mysqli($db_server, $db_user, $db_pass, $db_db);
if ($mysqli->connect_error) {
    die("err");
} 

$sql = "INSERT INTO planinar (id, ime, prezime, datumRodjenja, gradId, grad) VALUES 
('".$_REQUEST['id']."','".$_REQUEST['ime']."','".$_REQUEST['prezime']."','".$_REQUEST['datumRodjenja']."','".$_REQUEST['gradId']."','".$_REQUEST['grad']."')"; 

if ($mysqli->query($sql) === TRUE) {
    echo $mysqli->insert_id;
} else {
    echo "err";
}

$mysqli->close();

?>