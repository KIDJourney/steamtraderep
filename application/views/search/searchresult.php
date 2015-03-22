`<html>
<head>
    <script>
        var config=<?php echo $json;?>;
    </script> 
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('css/base.css');?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('css/search.css');?>">
    <script type="text/javascript" src="<?php echo base_url('js/jquery-2.1.0.min.js');?>"></script>
</head>
<body>
    <div id="container">
        <form action="searchresult" method="GET">
            <input class="search search-field" id="search-field" type="text" name="userinput" value="<?php echo $stickyform; ?>">
            <button type="submit" class="btn btn-sm btn-primary" style="margin:0px 15px;width:60px;">查询</button>
            <input class="btn btn-sm btn-primary" style="margin:0px;width:60px;" type="button" value="返回" onclick="self.location='<?php echo  base_url();?>'">
        </form><br>
        <ul id="info"></ul>
        <div id="massage-bar"></div>
    </div>
    <script type="text/javascript" src="<?php echo base_url('js/search.js');?>"></script>
</body>
</html>