<?php
include "konekcija.php";
$mysqli = new mysqli($db_server, $db_user, $db_pass, $db_db);
if ($mysqli->connect_error) {
    die("err");
} 
if (isset($_REQUEST['id'])){
$sql = "DELETE FROM planinar WHERE id=".$_REQUEST['id'];
if ($mysqli->query($sql) === TRUE) {
    echo "ok";
} else {
    echo "err";
}
$mysqli->close();
}

?>