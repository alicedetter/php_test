<?php
session_start();
require_once("lang/sv.php");


    $user="root";
    $pass="";
    $db="phptest";
    $host="localhost";
    $conn=mysqli_connect($host, $user, $pass,$db) or die("DB unsuccessful!!");    




    function isLevel($level){
        if(isset($_SESSION['level']) && intval($_SESSION['level'])>=$level){
            return true;
        }else{
            return false;
        }
    }

    function showName(){
        if(isset($_SESSION['namn'])){
            return $_SESSION['namn'];
        }else{
            return "";
        }
    }

?>