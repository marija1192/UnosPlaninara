<?php
include "konekcija.php";

$table = $db_table;
$primaryKey = 'id';
 
$columns = array(
array(
        'db' => 'id',
        'dt' => 'DT_RowId',
        'formatter' => function( $d, $row ) {
            return $d;
        }
      ),
   array( 'db' => 'id','dt' => 0 ),
    array( 'db' => 'ime','dt' => 1 ),
    array( 'db' => 'prezime','dt' => 2 ),   
    array( 'db' => 'datumRodjenja','dt' => 3 ),   
    array( 'db' => 'gradId','dt' => 4 ),   
    array( 'db' => 'grad','dt' => 5 ), 

);
 
// SQL server connection information
$sql_details = array(
    'user' => $db_user,
    'pass' => $db_pass,
    'db'   => $db_db,
    'host' => $db_server
);

require( 'DataTables-1.10.4/examples/server_side/scripts/ssp.class.php' );
 
echo json_encode(
    SSP::simple( $_GET, $sql_details, $table, $primaryKey, $columns )
);
?>