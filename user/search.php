<?php
 	header("Content-type: text/html; charset=utf-8");
 	include"final.php";
 	$searchs = $_POST['search_box'];
 	$sql = "SELECT * FROM movie WHERE title  like '%$searchs%'";
	$res = $dbh->prepare($sql);
	$res->execute();
	$result = $res->fetchall(PDO::FETCH_ASSOC);
	foreach($result as $key =>$value){
		echo $value['title'];
	}
 ?>