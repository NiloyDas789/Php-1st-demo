<?php
include ('controller/controller.php');
$controller=new controller;

function validation($data)
{
    $data = htmlspecialchars($data);
    $data = stripslashes($data);
    $data = trim($data);
    return $data;
}
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $name=validation($_POST['uname']);
    $pwd=validation($_POST['pswd']);
    $num=validation($_POST['num']);
    if ($name=='' || $pwd=='' || $num=='') {
    	echo "field must not empty";
    }
    else{
    	$formdata="INSERT INTO `project1` (`name`, `pass`, `mobile`) VALUES ('$name', '$pwd', '$num')";
    }
    $controller->store($formdata);
}