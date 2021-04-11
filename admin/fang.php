<?php
include("../includes/common.php");
$title='防黑设置';
include './head.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
 
    $aval = ($_POST['content']);
    if ($aval == "")
    echo $aval;
	if(rename($yl,$aval)){
  echo "防黑进程加载完毕，新的后台地址为/'$aval'";
  }else{
    showmsg('防黑进程加载失败！', 3);
  } 
}
?>
<div class="row">
                <div class="col-sm-12">
                  <div class="panel panel-success">
                    <header class="panel-heading font-bold">北巷防黑系统</header>
                    <div class="panel-body">
				<div class="box">
<div class="alert alert-info">请务必在[要设置的后台地址]处进行填写你要改的后台地址</div>
<form name="" method="post"class="form-horizontal" role="form">
    <label for="name">原来的后台地址:</label></p>
    <input type="text" name="content1" value="<?php echo $yl?>"/></p>
    <label for="name">要设置的后台地址:</label></p>
    <input type="text" name="content" value="<?php echo $rename?>"/>
    <input type="submit" value="提交" name="idbtn"/></p>
	<td align="center"><font color="#808080">本站域名：<?php echo $_SERVER['HTTP_HOST']?></font></td>
</form>
</body>



