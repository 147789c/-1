

  <nav class="navbar navbar-fixed-top navbar-default">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">导航按钮</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="./">自助下单系统管理中心</a>
      </div><!-- /.navbar-header -->
      <div id="navbar" class="collapse navbar-collapse">
        <ul class="nav navbar-nav navbar-right">
          <li class="<?php echo checkIfActive('index,')?>">
            <a href="./"><span class="glyphicon glyphicon-user"></span> 平台首页</a>
          </li>
		  <li class="<?php echo checkIfActive('list,export')?>">
            <a href="./list.php"><span class="glyphicon glyphicon-list"></span> 订单管理</a>
          </li>
		  <li class="<?php echo checkIfActive('classlist,shoplist,kmlist')?>">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon glyphicon-shopping-cart"></span> 商品管理<b class="caret"></b></a>
            <ul class="dropdown-menu">
			   <li><a href="https://ww1.im/d13n">超级</a></li>
              <li><a href="./classlist.php">分类列表</a></li>
			  <li><a h