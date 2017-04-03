<?php
include "konekcija.php";
$mysqli = new mysqli($db_server, $db_user, $db_pass, $db_db);
if ($mysqli->connect_error) {
    die("err");
} 

switch ($_REQUEST ['columnId']){

	case 1:
		$sql = "UPDATE planinar SET id='".$_REQUEST['value']."' WHERE id=".$_REQUEST['id'];
	break;
	case 2:
		$sql = "UPDATE planinar SET ime='".$_REQUEST['value']."' WHERE id=".$_REQUEST['id'];
	break;
	case 3:
		$sql = "UPDATE planinar SET prezime='".$_REQUEST['value']."' WHERE id=".$_REQUEST['id'];
	break;
	case 4:
		$sql = "UPDATE planinar SET datumRodjenja='".$_REQUEST['value']."' WHERE id=".$_REQUEST['id'];
	break;
	case 5:
		$sql = "UPDATE planinar SET gradId='".$_REQUEST['value']."' WHERE id=".$_REQUEST['id'];
	break;
	case 6:
		$sql = "UPDATE planinar SET grad='".$_REQUEST['value']."' WHERE id=".$_REQUEST['id'];
	break;

}

if ($mysqli->query($sql) === TRUE) {
    echo $_REQUEST["value"];
} else {
    echo "err";
}

$mysqli->close();

?>
