<?php

include ('../controller/controller.php');
$niloy=new controller;

if ($_SERVER['REQUEST_METHOD']=="GET") {
	
	$id=$_GET['id'];

	$sql="DELETE FROM `project1` WHERE `project1`.`id` =".$id;
	$niloy->delete($sql);
}

  ?>