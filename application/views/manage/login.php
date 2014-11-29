</head>
<body>
    <?php echo form_open('manage/index'); ?>
        管理员账户 : <input type="text" name="adminID"> <br>
        密码 : <input type="password" name="password"> <br>
        验证码 : <input type="text" name="humancheck"> <br>
        <img src="<?php echo $humancheck['image'];?>" > <br>
        <input type="submit" >
        <input class="search search-button" type="button" value="返回" onclick="self.location='<?php echo  base_url();?>'">
    </form>
</body>
</html>
