<?php
/**
 * Created by PhpStorm.
 * User: Rogelio
 * Date: 27/10/14
 * Time: 08:29 PM
 */
require_once('helpers.php');
require_once('seguridad.php');
require_once('./template/header.php');
require_once('./template/menu.php');
include('./clases/Examen.php');
require_once('./db/db.php');
if(empty($_GET['url']))
    $_GET['url'] = 'examen';
controller($_GET['url']);
require_once('./template/footer.php');