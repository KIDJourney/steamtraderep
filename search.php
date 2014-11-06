<html>
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
    <link rel="stylesheet" type="text/css" href="css/base.css">
    <link rel="stylesheet/less" type="text/css" href="css/search.less">
    <script type="text/javascript">
        var config = {"result":[{"tiebaid":"KIDJourney","steamid":"","64weiid":" 76561198076721482","taobaoid":"","zhifubaomail":" woaini7525057@163.com 275867993@qq.com 2359575017@qq.com","zhifubaoid":" \u987e\u5411\u6daa","":" \u6b3a\u8bc8"}],"status":1};
    </script>
    <script type="text/javascript" src="js/jquery-2.1.0.min.js"></script>
    <script type="text/javascript" src="js/less.min.js"></script>
    <script type="text/javascript" src="js/search.js"></script>
</head>
<body>
    <div id="container">
        <form id="search" action="<?php $_SERVER["PHP_SELF"];?>" method="post">
            <input class="search search-field" id="search-field" type="text" name="userinput">
            <input class="search search-button" id="search-submit" type="submit" name="search" value="查询">
            <a href="index.php"><input class="search search-button" type="button" value="返回"></a>
        </form>
        <ul id="info"></ul>
        <div id="massage-bar"></div>
    </div>
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