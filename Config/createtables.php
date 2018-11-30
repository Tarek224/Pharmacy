<?php 
	include('database.php');
	$create_tbl = "CREATE TABLE IF NOT EXISTS medcine(
	medcine_id int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
	name varchar(100) NOT NULL,
    image varchar(250) NOT NULL,
    avli int(11) NOT NULL,
	price int(11) NOT NULL);";
    $pdo->exec($create_tbl);
?>
