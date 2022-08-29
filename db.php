<?php


$cleardb_url      = parse_url(getenv("CLEARDB_DATABASE_URL"));
$host   = $cleardb_url["host"];
$user = $cleardb_url["user"];
$pass = $cleardb_url["pass"];
$dbname     = substr($cleardb_url["path"],1);

	$database_username = 'root';
	$database_password = '';
	$pdo_conn = new PDO("mysql:host=".$host.";dbname=".$dbname, $user, $pass );
?>
