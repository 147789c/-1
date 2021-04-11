<?php
include("../includes/common.php");
$title='MD5加密';
include './head.php';
?> 
<div class="container" style="padding-top:0px;">
<div class="col-xs-12 col-sm-10 col-lg-8 center-block" style="float: none;">

<?php
$hu   = 'mds';
$mds  = $_POST['mds']?$_POST['mds']:$_GET['mds'];
$mds  = $mds?$mds:"";
$typ  = $_POST['Md5Type'];
$mds1 = strtoupper(md5($mds));
$mds2 = strtolower($mds1);
$mds3 = substr($mds1,8,16);
$mds4 = strtolower($mds3);
if($typ == '3'){
	$results  = $mds4;
}elseif($typ == '1'){
	$results =  $mds2;
}elseif($typ == '2'){
	$results = $mds3;
}else{
	$results = $mds1;
}
?>
<div class="row">
                <div class="col-sm-12">
                  <div class="panel panel-success">
                    <header class="panel-heading font-bold">MD5加密</header>
                    <div class="panel-body">
				<div class="box">
    <div id="c">
      <div class="box1" style="text-align:center;"> 
	  <form action="" method="post">
	  <div class="list-group-item">
                    <div class="input-group">
                        <div class="input-group-addon">欲加密的字符串</div>
                        <input  class="form-control" name="mds" type="text" id="mds" size="35" url="true" value="<?php echo $mds;?>"/>
                    </div>
                </div>
			  <div class="form-group">
									<div class="col-sm-9 checkbox i-checks">
										<p>
											<label class="radio-inline c-radio">
												<input id="md32l" name="Md5Type" value="0" <?php if($typ==0) echo "checked";?> type="radio" /> <span class="fa fa-check"></span>32位[大]
											</label>
											<label class="radio-inline c-radio">
												<input id="md32s" name="Md5Type" value="1" <?php if($typ==1) echo "checked";?> type="radio" />
												<span class="fa fa-check"></span><font color="green"> 32位[小]</font>
											</label>
											<label class="radio-inline c-radio">
												<input id="md16l" name="Md5Type" value="2" <?php if($typ==2) echo "checked";?> type="radio" />
												<span class="fa fa-check"></span><font color="green"> 16位[大]</font>
											</label>
											<label class="radio-inline c-radio">
												<input id="md16s" name="Md5Type" value="3" <?php if($typ==3) echo "checked";?> type="radio" />
												<span class="fa fa-check"></span><font color="green"> 16位[小]</font>
											</label>
										</p>
									</div>
								</div>
                        <input name="btnS" class="btn btn-success" type="submit" value="加密"  id="sub"/>
		            </form>
		     
                <div class="list-group-item">
                    <div class="input-group">
                        <div class="input-group-addon">加密后结果</div>
                        <input type="text" class="form-control" id="result"  value="<?php echo $results;?>">
                    </div>
                </div>     
      </div>
    </div>	
				</div>
			</div>
		</div>
	</div>