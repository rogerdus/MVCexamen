<?php
/**
 * Created by PhpStorm.
 * User: Rogelio
 * Date: 27/10/14
 * Time: 08:21 PM
 */
$db_name = "sistemae";
$db_server = "localhost";
$db_user ="root";
$db_pass = "";
$db_conecction=mysql_connect($db_server,$db_user,$db_pass) or die ("Error hosting");
$base=mysql_select_db($db_name,$db_conecction) or die("Error en la conexion de base de datos");
mysql_query("SET NAMES 'utf8'");
