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
            { "title": "Planinari" },
			{ "title": "Grad" },
            { "title": "Uspon" },
			
        ],
		 "language": {
                "url": "DataTables-1.10.4/i18n/serbian.json"
            },

	"stateSave": true,
	 "columnDefs": [ {
            "targets": [ 3 ],
            "visible": false
        },{
            "targets": [ 2 ],
            "orderData": [ 0, 1 ]
        }, {
            "targets": [ 1 ],
            "orderData": [ 1, 0 ]
        }, {
            "targets": [ 0 ],
            "orderData": [ 2, 0 ]
        } ]
	});
});
</script>
</head>


<body bgcolor="#BCF5A9">

<p id="header">Uspon</p>
	<p id="title" style="text-align:center">Pogledajte koji planinari dolaze u goste!</p>

<?php
	$baza = mysqli_connect ( "localhost", "root", "", "domacidrugi" );
	if (mysqli_connect_errno()){
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	?>
<table class="tabela display" width="100%">
<thead>
<tr>
<th>Planinari</th>
<th>Grad</th>
<th>Idu na uspon u goste</th>

</tr>
</thead>
<tbody>

<?php
$sql = "SELECT l.id, l.prezime, l.grad, u.nazivUspona FROM domacidrugi.planinari l JOIN domacidrugi.grad g on (l.gradId=g.gradId) JOIN domacidrugi.uspon u on (g.gradId = h.gradId)";
if ($result = $baza->query($sql)) {
	
	while ($row = mysqli_fetch_array($result)){
	
?>
<tr id="<?php echo $row[0];?>">
	<td><?php echo $row[1];?></td>
	<td><?php echo $row[2];?></td>
	<td><?php echo $row[3];?></td>
	<td><?php echo $row[4];?></td>
</tr>
<?php
	
	}
}

$baza->close();
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
