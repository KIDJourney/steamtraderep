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
            <li class="<?php if (isset($donator))echo $donator;?>"><a href="<?php echo base_url('donator');?>">捐助&感谢</a></li>
            <li id="manage" class="<?php if (isset($manage)) echo $manage;?>"><a href="<?php echo base_url('manage');?>">管理</a></li>
            <!-- <li id="vps" class="<?php if (isset($vps)) echo $vps;?>"><a href="<?php echo base_url('vps');?>">steam vps plan</a></li>                           -->
          </ul>
        </div><!--/.nav-collapse -->

      </div>
    </nav>