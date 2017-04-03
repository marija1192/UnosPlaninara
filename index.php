<html>
<head>
	<script src="js/jquery-2.1.1.min.js"></script>
	<script src="DataTables-1.10.4/media/js/jquery.dataTables.min.js"></script>
	<script src="jeditable/jquery.jeditable.js"></script>
	<script src="DataTables-1.10.4/extensions/editable/jquery.dataTables.editable.js"></script>
	<script src="DataTables-1.10.4/extensions/Plugins/integration/bootstrap/3/dataTables.bootstrap.js"></script>
	<link rel="stylesheet" type="text/css" href="DataTables-1.10.4/media/css/jquery.dataTables.min.css" />
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
		$(".tabela").dataTable({
			"columns": [   
			{ "title": "ID" },
			{ "title": "Ime" },
			{ "title": "Prezime" },
			{ "title": "Datum rodjenja" },
			{ "title": "ID grada" },
			{ "title": "Grad" },
			],	
			"scrollX": true,
			"ajax": "server_obrada.php",

			"processing": true,
			"serverSide": true,
			"language": {
				"url": "DataTables-1.10.4/i18n/serbian.json"
			},		
		}).makeEditable({
			sDeleteURL: "delete.php",
			sDeleteHttpMethod: "GET"
		});							
	});
	</script>

</head>
<body>	

	<p id="header">Planinarski klub Srbije</p>

	<table class="tabela display" width="100%">
		<tbody>
		</tbody>
	</table>

	<div class="dugme">
		<p>Označite željeni unos za brisanje i kliknite na --> <button id="btnDeleteRow">Obriši unos</button>
	</p>
	<form action="tabela.php" method="post">Za izmenu unosa kliknite na --> 
		<input type="submit" value="Izmeni unos">
	</form>	

	<form action="new.php" method="post">Za novi unos kliknite na --> 
		<input type="submit" value="Unesi">
	</form>	

	<form action="domacidrugi.php" method="post">Pogledajte TOP 10 planinara za 2015. godinu --> 
		<input type="submit" value="10 najboljih">
	</form>	

	<form action="connect.php" method="post">Pratite gostovanja planinara na usponima --> 
		<input type="submit" value="Usponi">
	</form>	
</div>

</body>
</html>





