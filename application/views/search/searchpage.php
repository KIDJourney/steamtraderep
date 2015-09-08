    <link rel="stylesheet" type="text/css" href="<?php echo base_url('css/base.css');?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('css/index.css');?>">
    <script type="text/javascript" src="<?php echo base_url('js/index.js');?>"></script>
</head>
<body>
    <div id="container">
        <div id="title">
            <div id="main-title">Steam跳蚤市场吧骗子查询系统</div>
            <div id="sub-title">谨慎交易！</div>
        </div>
        <form action="search/searchresult" method="GET">
            <input class="search-field search" type="text" name="userinput" placeholder="&nbsp要检索的信息(贴吧id steam 常用id 64位id 淘宝id 支付宝邮箱 支付宝账号)">
            <button type="submit" class="btn btn-sm btn-primary" style="margin:0px 15px;width:60px;">查询</button>
        </form> <br>
        <?php if (count($recent)) { ?>
        <span class="text-info" style="margin-left:10px;margin-top:10px;">大家最近在搜：
            <?php foreach($recent as $value){
                $element = '<a href="' . 'http://steamrep.sinaapp.com/search/searchresult?userinput=' . urlencode($value['content']) . '&flag=true">';
                $element = $element . $value['content'] ;
                $element = $element . '</a>';
                echo $element . ' ';
            }
            ?>
        </span>
        <?php } ?>
    </div>
    <div id="footer">
        <div id="declaration">
            <p>Copyright 2015 &nbsp By Hetong & KIDJourney</p>
        </div>
        <div id="donate">
            给萌萌的迅哥捐助
        </div>
    </div>
    <div id="donate-page"><div id="donate-img"></div></div>
</body>
</html>
