<?php
session_start();
include("class/refresh.php");
refreshcheck();
include("template/index.html");
?>