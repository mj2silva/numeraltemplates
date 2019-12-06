<?php
// Conectando y seleccionado la base de datos  
$dbconn = pg_connect("host=localhost dbname=numeral-parties-dev user=postgres password=66566656")
    or die('No se ha podido conectar: ' . pg_last_error());