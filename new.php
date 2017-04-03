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
		});						
	});
	</script>


	<script>
	$(document).ready(function(){
		var t = $(".tabela").dataTable({
			"columns": [
			{ "title": "ID" },
			{ "title": "Ime" },
			{ "title": "Prezime" },
			{ "title": "Datum rodjenja" },
			{ "title": "ID grada" },
			{ "title": "Grad" },
			],	
			paging: false,
			searching: false,
			"order": [[ 0, "desc" ]],
			"ajax": "server_obrada.php",
			"processing": true,
			"serverSide": true
		});	
		$("#ubaci").click(function(){	
			var id = $("#id").val();
			var ime = $("#ime").val();
			var prezime = $("#prezime").val();
			var datumRodjenja = $("#datumRodjenja").val();
			var gradId = $("#gradId").val();
			var grad = $("#grad").val();
			$.post("add.php",{"id":id,
				"ime":ime,
				"prezime": prezime,
				"datumRodjenja": datumRodjenja,
				"gradId": gradId,					
				"grad": grad,					
			},function(result){
				t.row.add([result, id, ime, prezime, datumRodjenja ,gradId, grad]).draw();
				t.ajax.reload();									
			});
		});
	});
	</script>
	

</head>
<body>	

	<p id="header">UNOS NOVOG PLANINARA</p>
	<p id="title" style="text-align:center">Ukoliko želite da unesete novog planinara, popunite formu ispod.</p>

	<table class="tabela display" width="100%">
		<tbody>
		</tbody>
	</table>

	
	
	<div class="unos">
		<form id="formaUnos"  action="#" title="Unos planinara">
			<label for="id">ID</label><br />
			<input type="text" name="id" id="id" class="required" rel="1" />
			<br />
			<label for="ime">Ime</label><br />
			<input type="text" name="ime" id="ime" rel="2" />
			<br />
			<label for="prezime">Prezime</label><br />
			<input type="text" name="prezime" id="prezime" rel="3" />
			<br />
			<label for="datumRodjenja">Datum rodjenja</label><br />
			<input type="text" name="datumRodjenja" id="DatumRodjenja" rel="4" />
			<br />
			<label for="gradId">ID grada</label><br />
			<input type="text" name="gradId" id="gradId" rel="5" />
			<br />
			<label for="grad">Grad</label><br />
			<input type="text" name="grad" id="grad" rel="6" />
			<br />
			<br/>
			<input type="button" name="ubaci" id="ubaci" value="Unesite" />
		</form>
	</div>
	<br>

<div class="pocetna">
		<form action="index.php" method="post">
			<input type="submit" value="Početna stranica">
		</form>	
	</div>

</body>
</html>





