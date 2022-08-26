<?php
session_start();
$page = $_GET['page'];
if ($page === null){
    $page = 'main';
}
$page = trim($page, "\/' $%&#@!\'");

require "header.php";
require $page.'.php';
require "footer.php";
?>
