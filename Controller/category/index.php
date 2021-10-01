<?php

    if(isset($_GET['action'])){
        $action  = $_GET['action'];
    }
    else{
        $action = '';
    }

    $thanhcong = array();

    switch($action){
        default:{
            require_once('View/category/list.php');
        }
    }

    if(isset($_POST['add-category'])){
        $name = $_POST['name'];
        $parent = $_POST['parent'];

        if($db->AddCategory($name,$parent)){
            $_SESSION['status'] = "Thêm Danh Mục Thành Công";
            $_SESSION['status_code'] = "success";
        }
    }
?>