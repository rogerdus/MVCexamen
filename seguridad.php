<?php
/**
 * Created by PhpStorm.
 * User: Rogelio
 * Date: 9/10/14
 * Time: 04:21 PM
 */

    $idu = $_COOKIE['idu'];
    $acceso = $_COOKIE['acceso'];
    session_start();
    $idu2 = $_SESSION['idu'];
    $acceso2 = $_SESSION['acceso'];

    if($idu2 ==NULL OR  $acceso2 ==NULL){
        $msg = "Los campos deben de ir llenos";
        print "<meta http-equiv='refresh' content='0; url=index.php?msg=$msg'>";
        exit;
    }


?>