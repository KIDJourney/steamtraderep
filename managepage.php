<?php
session_start();
if (!isset($_SESSION["admin"])){
    die("你无权访问这个页面! . (from page) <br>");
} else {
    include("template/managepage.html");
    include("class/manageclass.php");
}
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $manageprocess = new manage;
}
?>
