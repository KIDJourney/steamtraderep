<?php
session_start();
include("template/report.html");
include("class/reportclass.php");
?>

<?php

if ($_SERVER["REQUEST_METHOD"]!="POST"){
    die("非法访问");
} else {
    $reportProcess = new report;
}

?>