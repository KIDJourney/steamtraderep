    <style>
        #manage {
          position: absolute;
          float:right;
      left:90%;
        }
    </style>
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <a class="navbar-brand" href="<?php echo base_url(); ?>">主页</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="search/donator">捐助&感谢</a></li>
            <li id="manage"><a href="<?php echo base_url('manage');?>">管理</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>