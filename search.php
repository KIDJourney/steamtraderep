﻿<html>
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
    <link rel="stylesheet" type="text/css" href="css/base.css">
    <link rel="stylesheet" type="text/css" href="css/search.css">
    <script type="text/javascript" src="js/jquery-2.1.0.min.js"></script>
</head>
<body>
    <div id="container">
        <form id="search" action="<?php $_SERVER["PHP_SELF"];?>" method="post">
            <input class="search search-field" id="search-field" type="text" name="userinput">
            <input class="search search-button" type="submit" name="search" value="查询">
            <input class="search search-button" type="button" value="返回">
        </form>
        <ul id="info"></ul>
    </div>
    <script type="text/javascript" src="js/search.js"></script>
</body>
</html>

<?php
if (!$_SERVER["REQUEST_METHOD"] == "POST"){
    die("你无权访问这个网页！");
} else {
    include("class/searchclass.php");
    $serachprocess = new search();
}
?>