<?php
include ('../controller/controller.php');
$controller=new controller;


    

if ($_SERVER['REQUEST_METHOD'] == "GET") {
    $id=$_GET['id'];
        $formdata="UPDATE `project1` SET `bin` = '0' WHERE `project1`.`id` =".$id;
    
    $controller->bin($formdata);
}