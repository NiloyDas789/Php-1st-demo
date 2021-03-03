<?php
include ('../controller/controller.php');
$controller=new controller;

function validation($data)
{
    $data = htmlspecialchars($data);
    $data = stripslashes($data);
    $data = trim($data);
    return $data;
}
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $id=$_POST['id'];
    $name=validation($_POST['uname']);
    $pwd=validation($_POST['pswd']);
    $num=validation($_POST['num']);
    if ($name=='' || $pwd=='' || $num=='') {
    	echo "field must not empty";
    }
    else{
    	$formdata="UPDATE `project1` SET `name` = '$name', `pass` = '$pwd', `mobile` = '$num' WHERE `project1`.`id` = '$id';";
    }
    $controller->update($formdata);
}