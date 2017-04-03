<html>
<head>
	<script src="js/jquery-2.1.1.min.js"></script>
	<script src="DataTables-1.10.4/media/js/jquery.dataTables.min.js"></script>
	<script src="jeditable/jquery.jeditable.js"></script>
	<script src="DataTables-1.10.4/extensions/editable/jquery.dataTables.editable.js"></script>
	<link rel="stylesheet" type="text/css" href="DataTables-1.10.4/media/css/jquery.dataTables.min.css" />
	<script src="DataTables-1.10.4/extensions/Plugins/integration/bootstrap/3/dataTables.bootstrap.js"></script>
	<link rel="stylesheet" href="DataTables-1.10.4/extensions/Plugins/integration/bootstrap/3/dataTables.bootstrap.css">
	<link rel="stylesheet" href="bs/css/bootstrap.min.css">
	<link rel="stylesheet" href="bs/css/bootstrap-theme.min.css">
	<link rel="stylesheet" href="bs/css/style.css">
	<script src="bs/js/bootstrap.min.js"></script>
	<meta charset="UTF-8">

	<style>
	.row_selected td {
		background-color: #d3d3d3 !important; /* Add !important to make sure override datables base styles */
	}
	</style>

	<script>
	$(document).ready(function(){
		$(".tabela").dataTable( {
			"language": {
				"url": "DataTables-1.10.4/i18n/serbian.json"
			},
			"columns": [
			{ "title": "ID"},
			{ "title": "Ime" },
			{ "title": "Prezime" },
			{ "title": "Datum rodjenja" },
			{ "title": "ID grada" },
			{ "title": "Grad" },
			]}).makeEditable({
				sUpdateURL: "update.php",
				pagingType : "simple_numbers",
				stateSave : true,
			});
		});
	</script>

</head>
<body bgcolor="#BCF5A9">

	<?php
	include "konekcija.php";
	$mysqli = new mysqli($db_server, $db_user, $db_pass, $db_db);
	if ($mysqli->connect_error) {
		die("err");
	} 
	?>

	<p id="header">Izmena podataka</p>
	<p id="title" style="text-align:center">Ukoliko želite da izvšite izmenu nekog unosa, kliknite dva puta i upišite novu vrednost.</p>

	

	<table class="tabela display" width="100%">
		<thead>
			<tr class="danger">
				<th>ID</th>
				<th>Ime</th>
				<th>Prezime</th>
				<th>Datum rodjenja</th>
				<th>ID grada</th>
				<th>Grad</th>
			</tr>
		</thead>
		<tbody>
			<?php
			$sql = "SELECT * FROM planinar";
			if ($result = $mysqli->query($sql)) {
				while ($row = $result->fetch_object()){
					?>
		<tr id="<?php echo $row->id;?>">
						<td><?php echo $row->id;?></td>
						<td><?php echo $row->ime;?></td>
						<td><?php echo $row->prezime;?></td>
						<td><?php echo $row->datumRodjenja;?></td>
						<td><?php echo $row->gradid;?></td>
						<td><?php echo $row->grad;?></td>
					</tr>
					<?php

				}

			}
			$mysqli->close();
			?>
		</tbody>
	</table>

	<div class="pocetna">
		<form action="index.php" method="post">
			<input type="submit" value="Početna stranica">
		</form>	
	</div>
	
</body>
</html>