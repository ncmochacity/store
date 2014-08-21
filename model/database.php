<?php
	include('config.php');
	
	$dbname = 'manarsap_accessory';
	$dsn="mysql:host=$host;dbname=$dbname"; 
	
        try{
            $db=new PDO($dsn, $username, $password);
        }
        catch (PDOException $e){
            $error_message=$e->getMessage();
            include('../database_error.php');
            exit();
        }

?>