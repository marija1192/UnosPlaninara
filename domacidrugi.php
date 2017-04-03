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
		$(".tabela").DataTable({
			"columns": [
			{ "title": "Pozicija" },
			{ "title": "Planinar" },
			{ "title": "Grad" },
			{ "title": "Planina" },   
			],
			"language": {
				"url": "DataTables-1.10.4/i18n/serbian.json"
			},
			"ajax": "domacidrugi.json",
			destroy:true,




		});
	});
	</script>


</head>
<body bgcolor="#BCF5A9">

	<p id="header">TOP 10</p>

	<table class="tabela display" width="100%">
		<thead>
			<tr>
				<th>Pozicija</th>
				<th>Planinar</th>
				<th>Grad</th>
				<th>Planina</th>
			</tr>
		</thead>
		<tbody>
		</tbody>
	</table>

	<div class="pocetna">
		<form action="index.php" method="post">
			<input type="submit" value="Početna stranica">
		</form>	
	</div>
</body>
</html>