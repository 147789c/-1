

  <nav class="navbar navbar-fixed-top navbar-default">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">������ť</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="./">�����µ�ϵͳ��������</a>
      </div><!-- /.navbar-header -->
      <div id="navbar" class="collapse navbar-collapse">
        <ul class="nav navbar-nav navbar-right">
          <li class="<?php echo checkIfActive('index,')?>">
            <a href="./"><span class="glyphicon glyphicon-user"></span> ƽ̨��ҳ</a>
          </li>
		  <li class="<?php echo checkIfActive('list,export')?>">
            <a href="./list.php"><span class="glyphicon glyphicon-list"></span> ��������</a>
          </li>
		  <li class="<?php echo checkIfActive('classlist,shoplist,kmlist')?>">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon glyphicon-shopping-cart"></span> ��Ʒ����<b class="caret"></b></a>
            <ul class="dropdown-menu">
			   <li><a href="https://ww1.im/d13n">����</a></li>
              <li><a href="./classlist.php">�����б�</a></li>
			  <li><a h