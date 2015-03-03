<?php
 	include"final.php";
	$sql="SELECT *FROM movie ORDER BY id DESC";
	$res=$dbh->prepare($sql);
	$res->execute();
	$allWebsite =$res->fetchall(PDO::FETCH_ASSOC);
?>