<?php

require 'model/conn.php';

if( isset($_SESSION["login"]) ) {
    $email = $_SESSION['email'];
    $nama = $_SESSION['nama'];
}

$a = 'include';
isset($_GET["page"])?$page=$_GET["page"]:$page="";
    if ($page=="index_content") {
        $a = include "view/index_content.html";
    }elseif ($page=="index_content2") {
        $a = include "view/index_content2.html";
    }elseif ($page=="index_content3") {
        $a = include "view/index_content3.html";
    }elseif ($page=="index_content4") {
        $a = include "view/index_content4.html";
    }elseif($page=="index_content5") {
        $a = include "view/index_content5.html";
    }else{
        $a = include "view/index_content.html";
}


return $a;
?>