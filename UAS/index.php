<?php
session_start();

isset($_SESSION["login"])?$sesi=$_SESSION["login"]:$sesi="";
if ($sesi==false) {
    isset($_GET["page"])?$page=$_GET["page"]:$page="";
    if ($page=="index_signup") {
        include "controller/register.php";
    }elseif($page=="home") {
        include "controller/ctrlhome.php";
    }else{
        include "controller/login.php";}
    
}else{
    isset($_GET["page"])?$page=$_GET["page"]:$page="";
    if ($page=="index_content") {
        include "controller/seasion.php";
    }elseif ($page=="index_content2") {
        include "controller/seasion.php";
    }elseif ($page=="index_content3") {
        include "controller/seasion.php";
    }elseif ($page=="index_content4") {
        include "controller/seasion.php";
    }elseif ($page=="index_content5") {
        include "controller/seasion.php";
    }elseif($page=="home") {
        include "controller/ctrlhome.php";
    }elseif ($page=="logout") {
        include "controller/logout.php";
    }else{
        include "controller/ctrlhome.php";
    }
}
?>