<?php

mb_internal_encoding("UTF8");

$pdo = new PDO("mysql:dbname=lesson02;host=localhost;","root","mysql");

$pdo->exec("insert into 4each_keijiban(handlname,title,comments)
values('".$POST['handlname']"','".$POST['title']"','".$POST['comments']"');");
	
header("Location:http://localhost/4each_keijiban/index.php");

?>
