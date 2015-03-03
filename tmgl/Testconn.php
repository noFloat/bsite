<?php
/**
 * connection settings
 * replace with your own hostname, database, username and password 
 */
	$dsn = 'mysql:host=localhost;dbname=bsite'; 
    $username = 'root';  
    $passwd = '';  
	$conn = new PDO($dsn,$username,$passwd);
	$conn -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	$conn->exec('set names utf8');
?>
