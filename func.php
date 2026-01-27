<?php
session_start();

    $user="root";
    $pass="";
    $db="phptest";
    $server="localhost";
    $conn=mysqli_connect($server, $user, $pass,$db) or die("DB unsuccessful!!");

    function isLevel($level){
        if(isset($_SESSION['level']) && intval($_SESSION['level'])>=$level){
            return true;
        }else{
            return false;
        }
    }
?>