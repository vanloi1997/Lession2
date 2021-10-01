<?php
    include "Model/DBConfig.php";
    $db = new Database;
    $db->connect();

    if(isset($_GET['controller'])){
        $controller  = $_GET['controller'];
    }
    else{
        $controller = '';
    }

    switch($controller){
        case 'category':{
            require_once('Controller/category/index.php');
        }
    }
?>