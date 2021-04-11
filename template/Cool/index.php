<?php
if(!defined('IN_CRONLITE'))exit();
?>
<!DOCTYPE html>
<html lang="zh-cn">
<head>
  <meta charset="utf-8"/>
  <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no"/>
  <title><?php echo $conf['sitename']?> - <?php echo $conf['title']?></title>
  <meta name="keywords" content="<?php echo $conf['keywords']?>">
  <meta name="description" content="<?php echo $conf['description']?>">
  <link rel="shortcut icon" href="favicon.ico">
  <link href="<?php echo $cdnpublic?>twitter-bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet"/>
  <link href="<?php echo $cdnpublic?>font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>
  <link rel="stylesheet" href="<?php echo $cdnserver?>assets/simple/css/plugins.css">
  <link rel="stylesheet" href="<?php echo $cdnserver?>assets/simple/css/main.css">
  <link rel="stylesheet" href="<?php echo $cdnserver?>assets/simple/css/oneui.css"> 
  <link rel="stylesheet" href="<?php echo $cdnserver?>assets/css/common.css?ver=<?php echo VERSION ?>">
  <script src="<?php echo $cdnpublic?>modernizr/2.8.3/modernizr.min.js"></script>
  <!--[if lt IE 9]>
    <script src="<?php echo $cdnpublic?>html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="<?php echo $cdnpublic?>respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->
<style>
.shuaibi-tip {
background: #fafafa repeating-linear-gradient(-45deg,#fff,#fff 1.125rem,transparent 1.125rem,transparent 2.25rem);
box-shadow: 0 2px 5px rgba(0, 0, 0, 0.15);
margin: 1px 0px;
padding: 1px;
border-radius: 5px;
font-size: 14px;
color: #555555;
}
.btn{border-radius: 100px;;}
body {
margin: 0;
	width: 100%;
	height: 100vh;
	font-family: "Exo", sans-serif;
	color: #000000;
	background: linear-gradient(-45deg, #ee7752, #e73c7e, #23a6d5, #23d5ab);
	background-size: 400% 400%;
	animation: gradientBG 10s ease infinite;
}

@keyframes gradientBG {
	0% {
		background-position: 0% 50%;
	}
	50% {
		background-position: 100% 50%;
	}
	100% {
		background-position: 0% 50%;
	}
}
</style>

</head>

<body>
 
<br>
<div style="padding-top:6px;padding-right:8px;padding-bottom:1px;padding-left:8px;"><div class="col-xs-12 col-sm-10 col-md-8 col-lg-4 center-block" style="float: none;">
<!--弹出公告--> 
<div class="modal fade" align="left" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header-tabs">
<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
<h4 class="modal-title" id="myModalLabel"><?php echo $conf['sitename']?></h4>
</div>
<div class="modal-body">
<?php echo $conf['modal']?>
</div>
<div class="modal-footer">
<button type="button" class="btn btn-default" data-dismiss="modal">我知道啦</button>
</div>
</div>
</div>
</div>
<!--弹出公告-->
<!--平台公告开始-->
<div class="modal fade" align="left" id="anounce" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header" style="background-image: url(./assets/img/ymsat.png);"
<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true"></span><span class="sr-only">Close</span></button>
<center><h4 class="modal-title" id="myModalLabel"><b><font color="#fff"><?php echo $conf['sitename']?></font></b></h4></center>  

</div><div class="widget flat radius-bordered"> 
<div class="widget-header bordered-top bordered-themesecondary"> <div class="modal-body">
		<center><img src="https://ae01.alicdn.com/kf/HTB15oLHUNnaK1RjSZFt762C2VXa1.png" width="50%"></center> 

  
<?php echo $conf['anounce']?></div></div></div>  
<div class="modal-footer">  
<button type="button" class="btn btn-default" data-dismiss="modal">我明白了</button> 
</div> 
</div> 
</div>
</div> 
<!--公告-->
<div class="widget">
<!--logo-->
<!----<div class="widget-content themed-background-flat text-center" style="background-image:url(assets/simple/img/head.png);background-size: 100% 100%;">---->
<div class="widget-content themed-background-flat text-center" style="background-image:url(http://www.6kiz.cn/TU/dssy.png);background-size: 100% 100%;">
<a href="javascript:void(0)">
<img src="//q4.qlogo.cn/headimg_dl?dst_uin=<?php echo $conf['kfqq'] ?>&spec=100" alt="Avatar" width="80" style="height: auto filter: alpha(Opacity=80);-moz-opacity: 0.80;opacity: 0.80;" class="img-circle img-thumbnail img-thumbnail-avatar-1x animated zoomInDown">
</a>
</div>
<!--logo-->

<a href="/user/reg.php"><img src="./assets/img/ds.jpg" style="width: 100%;"></a><!--logo下面按钮-->
<img width="100%" src="./assets/img/yangban.jpg"> <!--logo下面按钮-->
<div class="widget-content themed-background-muted text-center ">
<div class="btn-group themed-background-muted ">
<a href="#anounce" target="_blank" data-toggle="modal" class="btn btn-effect-ripple btn-default">
<font color="#A020F0"><i class="glyphicon glyphicon-bullhorn"></i> <span style="font-weight:bold">公告</font></span></a>

<a href="#lxkf" target="_blank" data-toggle="modal" class="btn btn-effect-ripple btn-default" style="overflow: hidden; position: relative;">
<span class="btn-ripple animate" style="height: 70px; width: 70px; top: -19.2188px; left: -23.3125px;"></span>
<font color="red"><i class="fa fa-question-circle"></i> <span style="font-weight:bold">帮助</span></font></a>

<a href="./user/reg.php" target="_blank" class="btn btn-effect-ripple btn-default" style="overflow: hidden; position: relative;">
<font color="#31B404"><i class="fa fa-user-circle" aria-hidden="true"></i> 
<span style="font-weight:bold">分站</span></font></a>
<!---a href="./" onclick="return confirm('暂时只有安卓版app，是否下载？下载后直接使用手机app即可进入商城哦~')" target="_blank" class="btn btn-effect-ripple btn-default" style="overflow: hidden; position: relative;"><i class="glyphicon glyphicon-phone"></i> <span style="font-weight:bold">客户端</span></a--->
</div>	
</div>
</div>
<!--logo下面按钮-->
<div class="block full2">
<!--TAB标签开始-->
<div class="block-title">
<ul class="nav nav-tabs" data-toggle="tabs">
<li style="width: 25%;" align="center" class="active"><a href="#shop"><i class="fa fa-shopping-cart"></i> <b>下单</b></a></li>
<li style="width: 25%;" align="center" class=""><a href="#search"><i class="fa fa-search"></i> <b>查询</b></a></li>
<li style="width: 25%;" align="center" ><a href="#ktfz"><span style="font-weight:bold"><font color="#ff0000"><i class="fa fa-sitemap"></i> 赚钱</span></font></a></li>
<li style="width: 25%;" align="center" class="hide"><a href="#gift" data-toggle="tab"><span style="font-weight:bold"><i class="fa fa-gift fa-fw"></i> 抽奖</span></a></li>
<li style="width: 25%;" align="center" class="hide"><a href="#cardbuy" data-toggle="tab"><span style="font-weight:bold"><i class="glyphicon glyphicon-th"></i> 卡密</span></a></li>
<li style="width: 25%;" align="center" class="">
<a href="#more" data-toggle="tab"><i class="fa fa-plus-square"></i> 更多</a>
<!----<a href="#more"><i class="fa fa-list"></i> <b>更多</b></a></li>--->
</ul>
</div>
<!--TAB标签结束-->
<div class="tab-content">
<!--在线下单-->

<div class="tab-pane active" id="shop">
	       <center></p>
<span style="font-size:10px;"><strong><span style="color:#E53333;">下单步骤：☞</span><span style="color:#0000FF;">选择分类☞</span><span style="color:#EE33EE;">选择商品☞</span><span style="color:#0000FF;">支付金额☞</span><span style="color:#000000#0000FF;">购买成功</span></strong></strong></span> </center>
<?php include TEMPLATE_ROOT.'default/shop.inc.php'; ?>
</div>
<!--在线下单-->
<!--查询订单-->
<div class="tab-pane" id="search">
<table class="table table-striped table-borderless table-vcenter remove-margin-bottom">
<tbody>
<tr class="shuaibi-tip animation-bigEntrance">
<td class="text-center" style="width: 100px;">
<img src="//q4.qlogo.cn/headimg_dl?dst_uin=<?php echo $conf['kfqq'];?>&spec=100" alt="avatar" class="img-circle img-thumbnail img-thumbnail-avatar">
</td>
<td>
<h4><strong>站长</strong></h4>
<i class="fa fa-fw fa-qq text-primary"></i> <?php echo $conf['kfqq'];?> <br><i class="fa fa-fw fa-history text-danger"></i>售后订单问题请联系客服
</td>
<td class="text-right" style="width: 20%;">
<a href="http://wpa.qq.com/msgrd?v=3&amp;uin=<?php echo $conf['kfqq'];?>&amp;site=qq&amp;menu=yes" target="_blank " class="btn btn-sm btn-info">联系</a>
</td>
</tr>
</tbody>
</table>
<br>
<div class="col-xs-12 well well-sm animation-pullUp" <?php if(empty($conf['gg_search'])){?>style="display:none;"<?php }?>>
<?php echo $conf['gg_search']?>
</div>
<div class="form-group">
<div class="input-group">
<div class="input-group-btn">
<select class="form-control" id="searchtype" style="padding: 6px 4px;width:90px"><option value="0">下单账号</option><option value="1">订单号</option></select>
</div>
<input type="text" name="qq" id="qq3" value="" class="form-control" placeholder="请输入要查询的内容（留空则显示最新订单）" onkeydown="if(event.keyCode==13){submit_query.click()}" required="">
<span class="input-group-btn"><a href="#cxsm" target="_blank" data-toggle="modal" class="btn btn-warning"><i class="glyphicon glyphicon-exclamation-sign"></i></a></span>
</div>
</div>
<input type="submit" id="submit_query" class="btn btn-primary btn-block btn-rounded" class="btn btn-primary btn-block btn-rounded" style="background-image: url(./assets/img/ymsat.png);" value="立即查询">
<br>
<div id="result2" class="form-group" style="display:none;">
<center><small><font color="#ff0000">手机用户可以左右滑动</font></small></center>
<div class="table-responsive">
<table class="table table-vcenter table-condensed table-striped">
<thead><tr><th class="hidden-xs">下单账号</th><th>商品名称</th><th>数量</th><th class="hidden-xs">购买时间</th><th>状态</th><th>操作</th></tr></thead>
<tbody id="list">
</tbody>
</table>
</div>
</div> 
</div>
<!--查询订单-->
<!--开通分站开始-->
<div class="tab-pane animation-fadeInQuick2" id="ktfz">
<table class="table table-borderless table-pricing">
<tbody>
<tr class="active">
<td class="btn-effect-ripple" style="overflow: hidden; position: relative;width: 100%; height: 8em;display: block;color: white;margin: auto;background-color: lightskyblue;"><span class="btn-ripple animate" style="height: 546px; width: 546px; top: -212.8px; left: 56.4px;"></span>
<h3 style="width:100%;font-size: 1.6em;">
 </h3><h3 style="width:100%;font-size: 1.6em;">
<i class="fa fa-user-o fa-fw" style="margin-top: 0.7em;"></i><strong>入门级</strong> /<i class="fa fa-user-circle-o fa-fw"></i><strong>旗舰级</strong>
</h3>
<span style="width: 100%;text-align: center;margin-top: 0.8em;font-size: 1.1em;display: block;"><?php echo $conf['fenzhan_price']?>元 / <?php echo $conf['fenzhan_price2']?>元</span></td>
</tr>
<tr>
<td>一模一样的独立网站</td>
</tr>
<tr>
<td>站长后台和超低秘价</td>
</tr>
  <tr>
<td>余额提成满<?php echo $conf['tixian_min']; ?>元提现</td>
</tr>
<tr>
<td><strong>旗舰级可以吃下级分站提成</strong></td>
</tr>
<tr class="active">
<td>
<a href="#userjs" data-toggle="modal" class="btn btn-effect-ripple  btn-info" style="overflow: hidden; position: relative;"><i class="fa fa-align-justify"></i><span class="btn-ripple animate" style="height: 100px; width: 100px; top: -24.8px; left: 11.05px;"></span> 版本介绍</a>
<a href="user/regsite.php" target="_blank" class="btn btn-effect-ripple  btn-danger" style="overflow: hidden; position: relative;"><i class="fa fa-arrow-right"></i> 马上开通</a>
<a href="user/" target="_blank" class="btn btn-effect-ripple btn-success" style="overflow: hidden; position: relative;"><i class="fa fa-arrow-right"></i><span class="btn-ripple animate" style="height: 100px; width: 100px; top: -34.4px; left: 2.58749px;"></span> 代理后台</a>    
</td>
</tr>
</tbody>
</table>
</div>
<!--开通分站结束-->
<!--更多按钮开始-->
<div class="tab-pane fade" id="more"><table class="table table-bordered"><tbody>

<tr height="50">
<td><a href="#cardbuy" data-toggle="tab" aria-expanded="false"class="tooltip-toggle btn btn-primary btn-sm btn-block" style="background: linear-gradient(to right,#14b7ff,#14b7ff);">
<i class="fa fa-credit-card"></i>&nbsp;卡密下单</a></td><td>
<a href="#gift" data-toggle="tab" aria-expanded="false" class="btn btn-warning btn-sm btn-block" style="background: linear-gradient(to right,#14b7ff,#14b7ff);"><i class="fa fa-gift"></i>&nbsp;活动抽奖</a></td></tr>
<tr height="50"><td>

<a href="/?mod=invite" target="_blank" data-toggle="modal"class="tooltip-toggle btn btn-primary btn-sm btn-block" style="background: linear-gradient(to right,#FF7F00,#FFB90F);">
<i class="fa fa-sun-o"></i>&nbsp;每日领赞</a></td>
<td><a href ="#fzjs"data-toggle="modal" class="tooltip-toggle btn btn-primary btn-sm btn-block" style="background: linear-gradient(to right,#FF7F00,#FFB90F);">
<i class="fa fa-address-card"></i>&nbsp;分站介绍</a></td></tr>


<tr height="50"><td>
<a href="./user/reg.php" class="tooltip-toggle btn btn-primary btn-sm btn-block" style="background: linear-gradient(to right,#FF0000,#FF0000);" data-original-title="" title=""><span style="font-weight:bold">
<i class="fa fa-sitemap"></i>&nbsp;开通分站</span></a></td>
<td><a href="./user/login.php" class="tooltip-toggle btn btn-primary btn-sm btn-block" style="background: linear-gradient(to right,#FF0000,#FF0000);" data-original-title="" title=""><span style="font-weight:bold">
<i class="fa fa-user fa-fw"></i>&nbsp;代理登录</span></a></td></tr>

<tr height="50"><td>
<a href="#lxkf" data-toggle="modal" aria-expanded="false" class="btn btn-warning btn-sm btn-block" style="background: linear-gradient(to right,#B452CD,#9400D3);">
<i class="fa fa-qq"></i>&nbsp;在线客服</a></td>
<td><a href="#aboutym"data-toggle="modal" class="tooltip-toggle btn btn-primary btn-sm btn-block" style="background: linear-gradient(to right,#B452CD,#9400D3);">
<i class="fa fa-user-circle"></i>&nbsp;关于我们</a></td></tr>

</tbody></table></div>
<!--更多按钮结束-->
<!--抽奖开始-->
<div class="tab-pane fade fade-up in" id="gift">
<li class="list-group-item" style="background: linear-gradient;"><center><b>（完成全部任务 - 高机率中大奖）</b></center></li>
<li class="list-group-item" style="background: linear-gradient;"><center>一 、拥有一个分站不限制版本 （<a href="/user/reg.php" target="_blank">点击开通</a>）</center></li>
<li class="list-group-item" style="background: linear-gradient;"><center>二 、将本网站分享给一个朋友 （<a href="/?mod=invite" target="_blank">点击分享</a>） </center></li>
<br>
<div class="widget-content themed-background-flat text-right clearfix animation-pullup">  
<a id="start" style="display:block;"><img src="./assets/img/cj.gif" alt="avatar" class="img-circle img-thumbnail img-thumbnail-avatar pull-left">
</a>
<a  id="stop" style="display:none;"><img src="./assets/img/cjjs.gif" alt="avatar" class="img-circle img-thumbnail img-thumbnail-avatar pull-left">
</a>
<p></p>
<h4 id="roll" class="widget-heading h4">猛击转盘进行抽奖</h4>
<h4 id="roll" class="widget-heading h4"><font color="#ff0000"><i class="fa fa-heartbeat" aria-hidden="true"></i> 再次猛击礼物盒停止</font></h4>
</div><hr>
<hr>
<li class="list-group-item bord-top">奖品内容：<br>　　个性标签赞、QQ名片赞、空间访客、全民K歌粉丝、超级会员、好莱坞会员<br></li>
<div id="result"></div><br/>
<div id="result"></div><br/>
<div class="giftlist" style="display:none;"><strong>最近中奖记录</strong><ul id="pst_1"></ul></div></div>
<!--抽奖结束-->
<!--卡密下单-->
 <div class="tab-pane" id="cardbuy">
<div class="form-group">
<div class="input-group"><div class="input-group-addon">输入卡密</div>
<input type="text" name="km" id="km" value="" class="form-control" onkeydown="if(event.keyCode==13){submit_checkkm.click()}" required/>
</div></div>
<input type="submit" id="submit_checkkm"class="btn btn-primary btn-block btn-rounded" style="background-image: url(./assets/img/ymsat.png);" value="检查卡密">
<div id="km_show_frame" style="display:none;">
<div class="form-group">
<div class="input-group"><div class="input-group-addon">商品名称</div>
<input type="text" name="name" id="km_name" value="" class="form-control" disabled/>
</div></div>
<div id="km_inputsname"></div>
<div id="km_alert_frame" class="alert alert-success animation-pullUp" style="display:none;font-weight: bold;"></div>
<input type="submit" id="submit_card" class="btn btn-primary btn-block btn-rounded" style="background-image: url(./assets/img/ymsat.png);" value="立即购买">
<div id="result1" class="form-group text-center" style="display:none;">
</div>
</div>
</div>
</div>
<!--卡密下单-->
<!--数据统计开始-->
</div>
  <a href="/user/reg.php"><img src="https://pan.cccyun.cc/view.php/64a1c8f9663f64c1d00591a92e39d0f1.jpg" style="width: 100%;"></a><!--logo下面按钮-->

<div class="list-group-item reed" style="background:#66ccff;">
            <center><h3 class="panel-title"><font color="#fff"><i
                                class="fa fa-bar-chart-o"></i>&nbsp;&nbsp;<b>数据统计</b></font></h3></center>
        </div>
        <div class="panel panel-info">
<table class="table table-bordered">
<tbody>
<tr>
<td align="center"><font size="2"><span id="count_money"></span>元<br><font color="#65b1c9"><i class="fa fa-shopping-cart fa-2x"></i></font><br>交易总数</font></td>
<td align="center"><font size="2"><span id="count_orders"></span>笔<br><font color="#65b1c9"><i class="fa fa-check-square-o fa-2x"></i></font><br>订单总数</font></td>
<td align="center"><font size="2"><span id="count_site"></span>个<br><font color="#65b1c9"><i class="fa fa-sitemap fa-2x"></i></font><br>代理分站</font></td>
</tr>
</tbody>
</table>
</div>
<!--数据统计结束-->

<!--关于我们弹窗开始-->
<div class="panel"><div class="list-group-item reed" style="background:#66ccff;"> <center><h3 class="panel-title"><font color="#fff"><i class="fa fa-bar-chart-o"></i>&nbsp;&nbsp;<b>奖励统计</b>- <a href="/?mod=invite" class="btn btn-default btn-xs btn-rounded" style="color: white;margin-top:-0.2em;"><font color="#696969">点我免费领取 <i class=" fa fa-arrow-right"></i></font></a></font></h3></div>
<div class="btn-group btn-group-justified">
<a target="_blank" class="btn btn-effect-ripple btn-default collapsed"><b><font color="modal-title">领取QQ</font></b></a>
<a target="_blank" class="btn btn-effect-ripple btn-default collapsed"><b><font color="modal-title">完成时间</font></b></a>
<a target="_blank" class="btn btn-effect-ripple btn-default collapsed"><b><font color="modal-title">获得奖励</font></b></a>
</div>  
<marquee class="zmd" behavior="scroll" direction="UP" onmouseover="this.stop()" onmouseout="this.start()" scrollamount="5" style="height:16em">
	<table class="table table-hover table-striped" style="text-align:center">
		<thead>
			<tr></tr><tr><td>恭喜QQ436**249**</td><td>于2020-03-20日推广成功</td><td><font color="salmon">奖励<img src="assets/img/yewu/video.png" width="15">视频会员</font></td></tr><tr></tr><tr><td>恭喜QQ414**546**</td><td>于2020-03-20日推广成功</td><td><font color="salmon">奖励<img src="assets/img/yewu/svip.png" width="15">超级会员</font></td></tr><tr></tr><tr><td>恭喜QQ118**490**</td><td>于2020-03-20日推广成功</td><td><font color="salmon">奖励<img src="assets/img/yewu/svip.png" width="15">超级会员</font></td></tr><tr></tr><tr><td>恭喜QQ676**822**</td><td>于2020-03-20日推广成功</td><td><font color="salmon">奖励<img src="assets/img/yewu/video.png" width="15">视频会员</font></td></tr><tr></tr><tr><td>恭喜QQ946**530**</td><td>于2020-03-20日推广成功</td><td><font color="salmon">奖励<img src="assets/img/yewu/yellow.png" width="15">豪华黄钻</font></td></tr><tr></tr><tr><td>恭喜QQ338**418**</td><td>于2020-03-20日推广成功</td><td><font color="salmon">奖励<img src="assets/img/yewu/mpz.png" width="15">90434名片赞</font></td></tr><tr></tr><tr><td>恭喜QQ413**854**</td><td>于2020-03-20日推广成功</td><td><font color="salmon">奖励<img src="assets/img/yewu/mpz.png" width="15">66204名片赞</font></td></tr><tr></tr><tr><td>恭喜QQ480**268**</td><td>于2020-03-20日推广成功</td><td><font color="salmon">奖励<img src="assets/img/yewu/mpz.png" width="15">31307名片赞</font></td></tr><tr></tr><tr><td>恭喜QQ170**269**</td><td>于2020-03-20日推广成功</td><td><font color="salmon">奖励<img src="assets/img/yewu/video.png" width="15">视频会员</font></td></tr><tr></tr><tr><td>恭喜QQ819**733**</td><td>于2020-03-20日推广成功</td><td><font color="salmon">奖励<img src="assets/img/yewu/svip.png" width="15">超级会员</font></td></tr><tr></tr><tr><td>恭喜QQ805**482**</td><td>于2020-03-20日推广成功</td><td><font color="salmon">奖励<img src="assets/img/yewu/svip.png" width="15">超级会员</font></td></tr><tr></tr><tr><td>恭喜QQ747**886**</td><td>于2020-03-20日推广成功</td><td><font color="salmon">奖励<img src="assets/img/yewu/green.png" width="15">豪华绿钻</font></td></tr><tr></tr><tr><td>恭喜QQ571**288**</td><td>于2020-03-20日推广成功</td><td><font color="salmon">奖励<img src="assets/img/yewu/mpz.png" width="15">23301名片赞</font></td></tr><tr></tr><tr><td>恭喜QQ468**745**</td><td>于2020-03-20日推广成功</td><td><font color="salmon">奖励<img src="assets/img/yewu/video.png" width="15">视频会员</font></td></tr><tr></tr><tr><td>恭喜QQ337**596**</td><td>于2020-03-20日推广成功</td><td><font color="salmon">奖励<img src="assets/img/yewu/yellow.png" width="15">豪华黄钻</font></td></tr><tr></tr><tr><td>恭喜QQ652**513**</td><td>于2020-03-20日推广成功</td><td><font color="salmon">奖励<img src="assets/img/yewu/yellow.png" width="15">豪华黄钻</font></td></tr><tr></tr><tr><td>恭喜QQ904**406**</td><td>于2020-03-20日推广成功</td><td><font color="salmon">奖励<img src="assets/img/yewu/green.png" width="15">豪华绿钻</font></td></tr><tr></tr><tr><td>恭喜QQ361**602**</td><td>于2020-03-20日推广成功</td><td><font color="salmon">奖励<img src="assets/img/yewu/green.png" width="15">豪华绿钻</font></td></tr><tr></tr><tr><td>恭喜QQ833**893**</td><td>于2020-03-20日推广成功</td><td><font color="salmon">奖励<img src="assets/img/yewu/green.png" width="15">豪华绿钻</font></td></tr><tr></tr><tr><td>恭喜QQ787**430**</td><td>于2020-03-20日推广成功</td><td><font color="salmon">奖励<img src="assets/img/yewu/video.png" width="15">视频会员</font></td></tr><tr></tr><tr><td>恭喜QQ802**231**</td><td>于2020-03-20日推广成功</td><td><font color="salmon">奖励<img src="assets/img/yewu/mpz.png" width="15">39474名片赞</font></td></tr><tr></tr><tr><td>恭喜QQ722**706**</td><td>于2020-03-20日推广成功</td><td><font color="salmon">奖励<img src="assets/img/yewu/svip.png" width="15">超级会员</font></td></tr><tr></tr><tr><td>恭喜QQ591**700**</td><td>于2020-03-20日推广成功</td><td><font color="salmon">奖励<img src="assets/img/yewu/mpz.png" width="15">63833名片赞</font></td></tr><tr></tr><tr><td>恭喜QQ54**574**</td><td>于2020-03-20日推广成功</td><td><font color="salmon">奖励<img src="assets/img/yewu/yellow.png" width="15">豪华黄钻</font></td></tr><tr></tr><tr><td>恭喜QQ810**932**</td><td>于2020-03-20日推广成功</td><td><font color="salmon">奖励<img src="assets/img/yewu/video.png" width="15">视频会员</font></td></tr><tr></tr><tr><td>恭喜QQ584**566**</td><td>于2020-03-20日推广成功</td><td><font color="salmon">奖励<img src="assets/img/yewu/mpz.png" width="15">14188名片赞</font></td></tr><tr></tr><tr><td>恭喜QQ515**484**</td><td>于2020-03-20日推广成功</td><td><font color="salmon">奖励<img src="assets/img/yewu/svip.png" width="15">超级会员</font></td></tr><tr></tr><tr><td>恭喜QQ738**634**</td><td>于2020-03-20日推广成功</td><td><font color="salmon">奖励<img src="assets/img/yewu/yellow.png" width="15">豪华黄钻</font></td></tr><tr></tr><tr><td>恭喜QQ333**526**</td><td>于2020-03-20日推广成功</td><td><font color="salmon">奖励<img src="assets/img/yewu/yellow.png" width="15">豪华黄钻</font></td></tr><tr></tr><tr><td>恭喜QQ104**185**</td><td>于2020-03-20日推广成功</td><td><font color="salmon">奖励<img src="assets/img/yewu/video.png" width="15">视频会员</font></td></tr><tr></tr><tr><td>恭喜QQ588**885**</td><td>于2020-03-20日推广成功</td><td><font color="salmon">奖励<img src="assets/img/yewu/svip.png" width="15">超级会员</font></td></tr><tr></tr><tr><td>恭喜QQ65**126**</td><td>于2020-03-20日推广成功</td><td><font color="salmon">奖励<img src="assets/img/yewu/green.png" width="15">豪华绿钻</font></td></tr><tr></tr><tr><td>恭喜QQ54**522**</td><td>于2020-03-20日推广成功</td><td><font color="salmon">奖励<img src="assets/img/yewu/mpz.png" width="15">68639名片赞</font></td></tr><tr></tr><tr><td>恭喜QQ913**728**</td><td>于2020-03-20日推广成功</td><td><font color="salmon">奖励<img src="assets/img/yewu/yellow.png" width="15">豪华黄钻</font></td></tr><tr></tr><tr><td>恭喜QQ597**429**</td><td>于2020-03-20日推广成功</td><td><font color="salmon">奖励<img src="assets/img/yewu/video.png" width="15">视频会员</font></td></tr><tr></tr><tr><td>恭喜QQ581**478**</td><td>于2020-03-20日推广成功</td><td><font color="salmon">奖励<img src="assets/img/yewu/yellow.png" width="15">豪华黄钻</font></td></tr><tr></tr><tr><td>恭喜QQ827**865**</td><td>于2020-03-20日推广成功</td><td><font color="salmon">奖励<img src="assets/img/yewu/mpz.png" width="15">33592名片赞</font></td></tr><tr></tr><tr><td>恭喜QQ79**742**</td><td>于2020-03-20日推广成功</td><td><font color="salmon">奖励<img src="assets/img/yewu/svip.png" width="15">超级会员</font></td></tr><tr></tr><tr><td>恭喜QQ60**164**</td><td>于2020-03-20日推广成功</td><td><font color="salmon">奖励<img src="assets/img/yewu/yellow.png" width="15">豪华黄钻</font></td></tr><tr></tr><tr><td>恭喜QQ260**139**</td><td>于2020-03-20日推广成功</td><td><font color="salmon">奖励<img src="assets/img/yewu/yellow.png" width="15">豪华黄钻</font></td></tr><tr></tr><tr><td>恭喜QQ133**871**</td><td>于2020-03-20日推广成功</td><td><font color="salmon">奖励<img src="assets/img/yewu/video.png" width="15">视频会员</font></td></tr><tr></tr><tr><td>恭喜QQ752**119**</td><td>于2020-03-20日推广成功</td><td><font color="salmon">奖励<img src="assets/img/yewu/yellow.png" width="15">豪华黄钻</font></td></tr><tr></tr><tr><td>恭喜QQ923**409**</td><td>于2020-03-20日推广成功</td><td><font color="salmon">奖励<img src="assets/img/yewu/video.png" width="15">视频会员</font></td></tr><tr></tr><tr><td>恭喜QQ207**942**</td><td>于2020-03-20日推广成功</td><td><font color="salmon">奖励<img src="assets/img/yewu/yellow.png" width="15">豪华黄钻</font></td></tr><tr></tr><tr><td>恭喜QQ740**111**</td><td>于2020-03-20日推广成功</td><td><font color="salmon">奖励<img src="assets/img/yewu/green.png" width="15">豪华绿钻</font></td></tr><tr></tr><tr><td>恭喜QQ19**261**</td><td>于2020-03-20日推广成功</td><td><font color="salmon">奖励<img src="assets/img/yewu/mpz.png" width="15">6660名片赞</font></td></tr><tr></tr><tr><td>恭喜QQ324**269**</td><td>于2020-03-20日推广成功</td><td><font color="salmon">奖励<img src="assets/img/yewu/svip.png" width="15">超级会员</font></td></tr><tr></tr><tr><td>恭喜QQ562**336**</td><td>于2020-03-20日推广成功</td><td><font color="salmon">奖励<img src="assets/img/yewu/svip.png" width="15">超级会员</font></td></tr><tr></tr><tr><td>恭喜QQ561**324**</td><td>于2020-03-20日推广成功</td><td><font color="salmon">奖励<img src="assets/img/yewu/video.png" width="15">视频会员</font></td></tr><tr></tr><tr><td>恭喜QQ963**369**</td><td>于2020-03-20日推广成功</td><td><font color="salmon">奖励<img src="assets/img/yewu/green.png" width="15">豪华绿钻</font></td></tr><tr></tr><tr><td>恭喜QQ824**587**</td><td>于2020-03-20日推广成功</td><td><font color="salmon">奖励<img src="assets/img/yewu/green.png" width="15">豪华绿钻</font></td></tr><tr></tr><tr><td>恭喜QQ379**720**</td><td>于2020-03-20日推广成功</td><td><font color="salmon">奖励<img src="assets/img/yewu/svip.png" width="15">超级会员</font></td></tr><tr></tr><tr><td>恭喜QQ917**826**</td><td>于2020-03-20日推广成功</td><td><font color="salmon">奖励<img src="assets/img/yewu/yellow.png" width="15">豪华黄钻</font></td></tr><tr></tr><tr><td>恭喜QQ445**215**</td><td>于2020-03-20日推广成功</td><td><font color="salmon">奖励<img src="assets/img/yewu/mpz.png" width="15">32444名片赞</font></td></tr><tr></tr><tr><td>恭喜QQ745**787**</td><td>于2020-03-20日推广成功</td><td><font color="salmon">奖励<img src="assets/img/yewu/green.png" width="15">豪华绿钻</font></td></tr><tr></tr><tr><td>恭喜QQ57**100**</td><td>于2020-03-20日推广成功</td><td><font color="salmon">奖励<img src="assets/img/yewu/green.png" width="15">豪华绿钻</font></td></tr><tr></tr><tr><td>恭喜QQ545**221**</td><td>于2020-03-20日推广成功</td><td><font color="salmon">奖励<img src="assets/img/yewu/video.png" width="15">视频会员</font></td></tr><tr></tr><tr><td>恭喜QQ635**240**</td><td>于2020-03-20日推广成功</td><td><font color="salmon">奖励<img src="assets/img/yewu/mpz.png" width="15">77840名片赞</font></td></tr><tr></tr><tr><td>恭喜QQ125**503**</td><td>于2020-03-20日推广成功</td><td><font color="salmon">奖励<img src="assets/img/yewu/video.png" width="15">视频会员</font></td></tr><tr></tr><tr><td>恭喜QQ101**811**</td><td>于2020-03-20日推广成功</td><td><font color="salmon">奖励<img src="assets/img/yewu/svip.png" width="15">超级会员</font></td></tr><tr></tr><tr><td>恭喜QQ637**626**</td><td>于2020-03-20日推广成功</td><td><font color="salmon">奖励<img src="assets/img/yewu/yellow.png" width="15">豪华黄钻</font></td></tr><tr></tr><tr><td>恭喜QQ999**265**</td><td>于2020-03-20日推广成功</td><td><font color="salmon">奖励<img src="assets/img/yewu/green.png" width="15">豪华绿钻</font></td></tr><tr></tr><tr><td>恭喜QQ402**278**</td><td>于2020-03-20日推广成功</td><td><font color="salmon">奖励<img src="assets/img/yewu/green.png" width="15">豪华绿钻</font></td></tr><tr></tr><tr><td>恭喜QQ501**994**</td><td>于2020-03-20日推广成功</td><td><font color="salmon">奖励<img src="assets/img/yewu/svip.png" width="15">超级会员</font></td></tr><tr></tr><tr><td>恭喜QQ488**459**</td><td>于2020-03-20日推广成功</td><td><font color="salmon">奖励<img src="assets/img/yewu/yellow.png" width="15">豪华黄钻</font></td></tr><tr></tr><tr><td>恭喜QQ493**1000**</td><td>于2020-03-20日推广成功</td><td><font color="salmon">奖励<img src="assets/img/yewu/yellow.png" width="15">豪华黄钻</font></td></tr><tr></tr><tr><td>恭喜QQ245**191**</td><td>于2020-03-20日推广成功</td><td><font color="salmon">奖励<img src="assets/img/yewu/mpz.png" width="15">44789名片赞</font></td></tr><tr></tr><tr><td>恭喜QQ791**786**</td><td>于2020-03-20日推广成功</td><td><font color="salmon">奖励<img src="assets/img/yewu/yellow.png" width="15">豪华黄钻</font></td></tr><tr></tr><tr><td>恭喜QQ177**799**</td><td>于2020-03-20日推广成功</td><td><font color="salmon">奖励<img src="assets/img/yewu/svip.png" width="15">超级会员</font></td></tr><tr></tr><tr><td>恭喜QQ703**661**</td><td>于2020-03-20日推广成功</td><td><font color="salmon">奖励<img src="assets/img/yewu/video.png" width="15">视频会员</font></td></tr><tr></tr><tr><td>恭喜QQ579**159**</td><td>于2020-03-20日推广成功</td><td><font color="salmon">奖励<img src="assets/img/yewu/video.png" width="15">视频会员</font></td></tr><tr></tr><tr><td>恭喜QQ68**863**</td><td>于2020-03-19日推广成功</td><td><font color="salmon">奖励<img src="assets/img/yewu/yellow.png" width="15">豪华黄钻</font></td></tr><tr></tr><tr><td>恭喜QQ295**992**</td><td>于2020-03-19日推广成功</td><td><font color="salmon">奖励<img src="assets/img/yewu/yellow.png" width="15">豪华黄钻</font></td></tr><tr></tr><tr><td>恭喜QQ333**894**</td><td>于2020-03-19日推广成功</td><td><font color="salmon">奖励<img src="assets/img/yewu/video.png" width="15">视频会员</font></td></tr><tr></tr><tr><td>恭喜QQ340**898**</td><td>于2020-03-19日推广成功</td><td><font color="salmon">奖励<img src="assets/img/yewu/svip.png" width="15">超级会员</font></td></tr><tr></tr><tr><td>恭喜QQ329**903**</td><td>于2020-03-19日推广成功</td><td><font color="salmon">奖励<img src="assets/img/yewu/green.png" width="15">豪华绿钻</font></td></tr><tr></tr><tr><td>恭喜QQ746**917**</td><td>于2020-03-19日推广成功</td><td><font color="salmon">奖励<img src="assets/img/yewu/video.png" width="15">视频会员</font></td></tr><tr></tr><tr><td>恭喜QQ704**938**</td><td>于2020-03-19日推广成功</td><td><font color="salmon">奖励<img src="assets/img/yewu/green.png" width="15">豪华绿钻</font></td></tr><tr></tr><tr><td>恭喜QQ153**210**</td><td>于2020-03-19日推广成功</td><td><font color="salmon">奖励<img src="assets/img/yewu/yellow.png" width="15">豪华黄钻</font></td></tr><tr></tr><tr><td>恭喜QQ380**465**</td><td>于2020-03-19日推广成功</td><td><font color="salmon">奖励<img src="assets/img/yewu/green.png" width="15">豪华绿钻</font></td></tr><tr></tr><tr><td>恭喜QQ447**773**</td><td>于2020-03-19日推广成功</td><td><font color="salmon">奖励<img src="assets/img/yewu/green.png" width="15">豪华绿钻</font></td></tr><tr></tr><tr><td>恭喜QQ939**248**</td><td>于2020-03-19日推广成功</td><td><font color="salmon">奖励<img src="assets/img/yewu/svip.png" width="15">超级会员</font></td></tr><tr></tr><tr><td>恭喜QQ858**305**</td><td>于2020-03-19日推广成功</td><td><font color="salmon">奖励<img src="assets/img/yewu/svip.png" width="15">超级会员</font></td></tr><tr></tr><tr><td>恭喜QQ240**511**</td><td>于2020-03-19日推广成功</td><td><font color="salmon">奖励<img src="assets/img/yewu/green.png" width="15">豪华绿钻</font></td></tr><tr></tr><tr><td>恭喜QQ852**237**</td><td>于2020-03-19日推广成功</td><td><font color="salmon">奖励<img src="assets/img/yewu/mpz.png" width="15">9506名片赞</font></td></tr><tr></tr><tr><td>恭喜QQ440**633**</td><td>于2020-03-19日推广成功</td><td><font color="salmon">奖励<img src="assets/img/yewu/mpz.png" width="15">4717名片赞</font></td></tr><tr></tr><tr><td>恭喜QQ684**615**</td><td>于2020-03-19日推广成功</td><td><font color="salmon">奖励<img src="assets/img/yewu/mpz.png" width="15">62639名片赞</font></td></tr><tr></tr><tr><td>恭喜QQ897**248**</td><td>于2020-03-19日推广成功</td><td><font color="salmon">奖励<img src="assets/img/yewu/mpz.png" width="15">48084名片赞</font></td></tr><tr></tr><tr><td>恭喜QQ723**194**</td><td>于2020-03-19日推广成功</td><td><font color="salmon">奖励<img src="assets/img/yewu/green.png" width="15">豪华绿钻</font></td></tr><tr></tr><tr><td>恭喜QQ142**741**</td><td>于2020-03-19日推广成功</td><td><font color="salmon">奖励<img src="assets/img/yewu/yellow.png" width="15">豪华黄钻</font></td></tr><tr></tr><tr><td>恭喜QQ781**568**</td><td>于2020-03-19日推广成功</td><td><font color="salmon">奖励<img src="assets/img/yewu/yellow.png" width="15">豪华黄钻</font></td></tr><tr></tr><tr><td>恭喜QQ286**346**</td><td>于2020-03-19日推广成功</td><td><font color="salmon">奖励<img src="assets/img/yewu/mpz.png" width="15">48551名片赞</font></td></tr><tr></tr><tr><td>恭喜QQ861**680**</td><td>于2020-03-19日推广成功</td><td><font color="salmon">奖励<img src="assets/img/yewu/yellow.png" width="15">豪华黄钻</font></td></tr><tr></tr><tr><td>恭喜QQ599**289**</td><td>于2020-03-19日推广成功</td><td><font color="salmon">奖励<img src="assets/img/yewu/svip.png" width="15">超级会员</font></td></tr><tr></tr><tr><td>恭喜QQ969**729**</td><td>于2020-03-19日推广成功</td><td><font color="salmon">奖励<img src="assets/img/yewu/mpz.png" width="15">37989名片赞</font></td></tr><tr></tr><tr><td>恭喜QQ346**764**</td><td>于2020-03-19日推广成功</td><td><font color="salmon">奖励<img src="assets/img/yewu/green.png" width="15">豪华绿钻</font></td></tr><tr></tr><tr><td>恭喜QQ990**126**</td><td>于2020-03-19日推广成功</td><td><font color="salmon">奖励<img src="assets/img/yewu/video.png" width="15">视频会员</font></td></tr><tr></tr><tr><td>恭喜QQ363**759**</td><td>于2020-03-19日推广成功</td><td><font color="salmon">奖励<img src="assets/img/yewu/yellow.png" width="15">豪华黄钻</font></td></tr><tr></tr><tr><td>恭喜QQ696**912**</td><td>于2020-03-19日推广成功</td><td><font color="salmon">奖励<img src="assets/img/yewu/svip.png" width="15">超级会员</font></td></tr><tr></tr><tr><td>恭喜QQ767**468**</td><td>于2020-03-19日推广成功</td><td><font color="salmon">奖励<img src="assets/img/yewu/green.png" width="15">豪华绿钻</font></td></tr><tr></tr><tr><td>恭喜QQ994**194**</td><td>于2020-03-19日推广成功</td><td><font color="salmon">奖励<img src="assets/img/yewu/mpz.png" width="15">66294名片赞</font></td></tr><tr></tr><tr><td>恭喜QQ785**477**</td><td>于2020-03-19日推广成功</td><td><font color="salmon">奖励<img src="assets/img/yewu/svip.png" width="15">超级会员</font></td></tr><tr></tr><tr><td>恭喜QQ579**559**</td><td>于2020-03-19日推广成功</td><td><font color="salmon">奖励<img src="assets/img/yewu/green.png" width="15">豪华绿钻</font></td></tr><tr></tr><tr><td>恭喜QQ179**295**</td><td>于2020-03-19日推广成功</td><td><font color="salmon">奖励<img src="assets/img/yewu/green.png" width="15">豪华绿钻</font></td></tr><tr></tr><tr><td>恭喜QQ442**594**</td><td>于2020-03-19日推广成功</td><td><font color="salmon">奖励<img src="assets/img/yewu/svip.png" width="15">超级会员</font></td></tr><tr></tr><tr><td>恭喜QQ448**693**</td><td>于2020-03-19日推广成功</td><td><font color="salmon">奖励<img src="assets/img/yewu/mpz.png" width="15">28089名片赞</font></td></tr><tr></tr><tr><td>恭喜QQ966**542**</td><td>于2020-03-19日推广成功</td><td><font color="salmon">奖励<img src="assets/img/yewu/yellow.png" width="15">豪华黄钻</font></td></tr><tr></tr><tr><td>恭喜QQ912**653**</td><td>于2020-03-19日推广成功</td><td><font color="salmon">奖励<img src="assets/img/yewu/yellow.png" width="15">豪华黄钻</font></td></tr><tr></tr><tr><td>恭喜QQ223**818**</td><td>于2020-03-19日推广成功</td><td><font color="salmon">奖励<img src="assets/img/yewu/mpz.png" width="15">58926名片赞</font></td></tr><tr></tr><tr><td>恭喜QQ505**579**</td><td>于2020-03-19日推广成功</td><td><font color="salmon">奖励<img src="assets/img/yewu/svip.png" width="15">超级会员</font></td></tr><tr></tr><tr><td>恭喜QQ258**208**</td><td>于2020-03-19日推广成功</td><td><font color="salmon">奖励<img src="assets/img/yewu/yellow.png" width="15">豪华黄钻</font></td></tr><tr></tr><tr><td>恭喜QQ110**335**</td><td>于2020-03-19日推广成功</td><td><font color="salmon">奖励<img src="assets/img/yewu/yellow.png" width="15">豪华黄钻</font></td></tr><tr></tr><tr><td>恭喜QQ623**813**</td><td>于2020-03-19日推广成功</td><td><font color="salmon">奖励<img src="assets/img/yewu/mpz.png" width="15">67730名片赞</font></td></tr><tr></tr><tr><td>恭喜QQ536**646**</td><td>于2020-03-19日推广成功</td><td><font color="salmon">奖励<img src="assets/img/yewu/yellow.png" width="15">豪华黄钻</font></td></tr><tr></tr><tr><td>恭喜QQ982**279**</td><td>于2020-03-19日推广成功</td><td><font color="salmon">奖励<img src="assets/img/yewu/yellow.png" width="15">豪华黄钻</font></td></tr><tr></tr><tr><td>恭喜QQ164**291**</td><td>于2020-03-19日推广成功</td><td><font color="salmon">奖励<img src="assets/img/yewu/svip.png" width="15">超级会员</font></td></tr><tr></tr><tr><td>恭喜QQ349**345**</td><td>于2020-03-19日推广成功</td><td><font color="salmon">奖励<img src="assets/img/yewu/green.png" width="15">豪华绿钻</font></td></tr><tr></tr><tr><td>恭喜QQ557**923**</td><td>于2020-03-19日推广成功</td><td><font color="salmon">奖励<img src="assets/img/yewu/green.png" width="15">豪华绿钻</font></td></tr><tr></tr><tr><td>恭喜QQ163**922**</td><td>于2020-03-19日推广成功</td><td><font color="salmon">奖励<img src="assets/img/yewu/yellow.png" width="15">豪华黄钻</font></td></tr><tr></tr><tr><td>恭喜QQ65**144**</td><td>于2020-03-19日推广成功</td><td><font color="salmon">奖励<img src="assets/img/yewu/green.png" width="15">豪华绿钻</font></td></tr><tr></tr><tr><td>恭喜QQ782**819**</td><td>于2020-03-19日推广成功</td><td><font color="salmon">奖励<img src="assets/img/yewu/yellow.png" width="15">豪华黄钻</font></td></tr><tr></tr><tr><td>恭喜QQ277**799**</td><td>于2020-03-19日推广成功</td><td><font color="salmon">奖励<img src="assets/img/yewu/green.png" width="15">豪华绿钻</font></td></tr><tr></tr><tr><td>恭喜QQ540**269**</td><td>于2020-03-19日推广成功</td><td><font color="salmon">奖励<img src="assets/img/yewu/green.png" width="15">豪华绿钻</font></td></tr><tr></tr><tr><td>恭喜QQ851**542**</td><td>于2020-03-19日推广成功</td><td><font color="salmon">奖励<img src="assets/img/yewu/mpz.png" width="15">88604名片赞</font></td></tr><tr></tr><tr><td>恭喜QQ260**148**</td><td>于2020-03-19日推广成功</td><td><font color="salmon">奖励<img src="assets/img/yewu/svip.png" width="15">超级会员</font></td></tr><tr></tr><tr><td>恭喜QQ256**602**</td><td>于2020-03-19日推广成功</td><td><font color="salmon">奖励<img src="assets/img/yewu/svip.png" width="15">超级会员</font></td></tr><tr></tr><tr><td>恭喜QQ884**501**</td><td>于2020-03-19日推广成功</td><td><font color="salmon">奖励<img src="assets/img/yewu/mpz.png" width="15">10724名片赞</font></td></tr><tr></tr><tr><td>恭喜QQ832**476**</td><td>于2020-03-19日推广成功</td><td><font color="salmon">奖励<img src="assets/img/yewu/yellow.png" width="15">豪华黄钻</font></td></tr><tr></tr><tr><td>恭喜QQ481**301**</td><td>于2020-03-19日推广成功</td><td><font color="salmon">奖励<img src="assets/img/yewu/yellow.png" width="15">豪华黄钻</font></td></tr><tr></tr><tr><td>恭喜QQ81**393**</td><td>于2020-03-19日推广成功</td><td><font color="salmon">奖励<img src="assets/img/yewu/green.png" width="15">豪华绿钻</font></td></tr><tr></tr><tr><td>恭喜QQ771**574**</td><td>于2020-03-19日推广成功</td><td><font color="salmon">奖励<img src="assets/img/yewu/green.png" width="15">豪华绿钻</font></td></tr><tr></tr><tr><td>恭喜QQ600**390**</td><td>于2020-03-19日推广成功</td><td><font color="salmon">奖励<img src="assets/img/yewu/svip.png" width="15">超级会员</font></td></tr><tr></tr><tr><td>恭喜QQ652**586**</td><td>于2020-03-19日推广成功</td><td><font color="salmon">奖励<img src="assets/img/yewu/svip.png" width="15">超级会员</font></td></tr><tr></tr><tr><td>恭喜QQ154**202**</td><td>于2020-03-19日推广成功</td><td><font color="salmon">奖励<img src="assets/img/yewu/yellow.png" width="15">豪华黄钻</font></td></tr><tr></tr><tr><td>恭喜QQ984**181**</td><td>于2020-03-19日推广成功</td><td><font color="salmon">奖励<img src="assets/img/yewu/mpz.png" width="15">85031名片赞</font></td></tr><tr></tr><tr><td>恭喜QQ916**928**</td><td>于2020-03-19日推广成功</td><td><font color="salmon">奖励<img src="assets/img/yewu/svip.png" width="15">超级会员</font></td></tr><tr></tr><tr><td>恭喜QQ761**359**</td><td>于2020-03-19日推广成功</td><td><font color="salmon">奖励<img src="assets/img/yewu/mpz.png" width="15">57572名片赞</font></td></tr><tr></tr><tr><td>恭喜QQ632**818**</td><td>于2020-03-19日推广成功</td><td><font color="salmon">奖励<img src="assets/img/yewu/green.png" width="15">豪华绿钻</font></td></tr><tr></tr><tr><td>恭喜QQ327**617**</td><td>于2020-03-19日推广成功</td><td><font color="salmon">奖励<img src="assets/img/yewu/mpz.png" width="15">50610名片赞</font></td></tr><tr></tr><tr><td>恭喜QQ628**504**</td><td>于2020-03-19日推广成功</td><td><font color="salmon">奖励<img src="assets/img/yewu/svip.png" width="15">超级会员</font></td></tr><tr></tr><tr><td>恭喜QQ247**941**</td><td>于2020-03-19日推广成功</td><td><font color="salmon">奖励<img src="assets/img/yewu/svip.png" width="15">超级会员</font></td></tr><tr></tr><tr><td>恭喜QQ729**527**</td><td>于2020-03-19日推广成功</td><td><font color="salmon">奖励<img src="assets/img/yewu/svip.png" width="15">超级会员</font></td></tr><tr></tr><tr><td>恭喜QQ770**752**</td><td>于2020-03-19日推广成功</td><td><font color="salmon">奖励<img src="assets/img/yewu/video.png" width="15">视频会员</font></td></tr><tr></tr><tr><td>恭喜QQ782**476**</td><td>于2020-03-19日推广成功</td><td><font color="salmon">奖励<img src="assets/img/yewu/svip.png" width="15">超级会员</font></td></tr><tr></tr><tr><td>恭喜QQ614**926**</td><td>于2020-03-19日推广成功</td><td><font color="salmon">奖励<img src="assets/img/yewu/mpz.png" width="15">59702名片赞</font></td></tr><tr></tr><tr><td>恭喜QQ838**514**</td><td>于2020-03-19日推广成功</td><td><font color="salmon">奖励<img src="assets/img/yewu/mpz.png" width="15">58368名片赞</font></td></tr><tr></tr><tr><td>恭喜QQ272**709**</td><td>于2020-03-19日推广成功</td><td><font color="salmon">奖励<img src="assets/img/yewu/mpz.png" width="15">6781名片赞</font></td></tr><tr></tr><tr><td>恭喜QQ253**805**</td><td>于2020-03-19日推广成功</td><td><font color="salmon">奖励<img src="assets/img/yewu/mpz.png" width="15">99657名片赞</font></td></tr><tr></tr><tr><td>恭喜QQ798**232**</td><td>于2020-03-19日推广成功</td><td><font color="salmon">奖励<img src="assets/img/yewu/mpz.png" width="15">58994名片赞</font></td></tr><tr></tr><tr><td>恭喜QQ726**841**</td><td>于2020-03-19日推广成功</td><td><font color="salmon">奖励<img src="assets/img/yewu/green.png" width="15">豪华绿钻</font></td></tr><tr></tr><tr><td>恭喜QQ358**848**</td><td>于2020-03-19日推广成功</td><td><font color="salmon">奖励<img src="assets/img/yewu/mpz.png" width="15">25600名片赞</font></td></tr><tr></tr><tr><td>恭喜QQ510**758**</td><td>于2020-03-19日推广成功</td><td><font color="salmon">奖励<img src="assets/img/yewu/green.png" width="15">豪华绿钻</font></td></tr><tr></tr><tr><td>恭喜QQ927**980**</td><td>于2020-03-19日推广成功</td><td><font color="salmon">奖励<img src="assets/img/yewu/mpz.png" width="15">85178名片赞</font></td></tr><tr></tr><tr><td>恭喜QQ903**688**</td><td>于2020-03-19日推广成功</td><td><font color="salmon">奖励<img src="assets/img/yewu/video.png" width="15">视频会员</font></td></tr><tr></tr><tr><td>恭喜QQ91**442**</td><td>于2020-03-19日推广成功</td><td><font color="salmon">奖励<img src="assets/img/yewu/green.png" width="15">豪华绿钻</font></td></tr><tr></tr><tr><td>恭喜QQ21**363**</td><td>于2020-03-19日推广成功</td><td><font color="salmon">奖励<img src="assets/img/yewu/video.png" width="15">视频会员</font></td></tr><tr></tr><tr><td>恭喜QQ706**562**</td><td>于2020-03-19日推广成功</td><td><font color="salmon">奖励<img src="assets/img/yewu/video.png" width="15">视频会员</font></td></tr><tr></tr><tr><td>恭喜QQ596**684**</td><td>于2020-03-19日推广成功</td><td><font color="salmon">奖励<img src="assets/img/yewu/mpz.png" width="15">31356名片赞</font></td></tr><tr></tr><tr><td>恭喜QQ682**468**</td><td>于2020-03-19日推广成功</td><td><font color="salmon">奖励<img src="assets/img/yewu/green.png" width="15">豪华绿钻</font></td></tr><tr></tr><tr><td>恭喜QQ191**129**</td><td>于2020-03-19日推广成功</td><td><font color="salmon">奖励<img src="assets/img/yewu/video.png" width="15">视频会员</font></td></tr><tr></tr><tr><td>恭喜QQ557**407**</td><td>于2020-03-19日推广成功</td><td><font color="salmon">奖励<img src="assets/img/yewu/green.png" width="15">豪华绿钻</font></td></tr><tr></tr><tr><td>恭喜QQ464**392**</td><td>于2020-03-19日推广成功</td><td><font color="salmon">奖励<img src="assets/img/yewu/green.png" width="15">豪华绿钻</font></td></tr><tr></tr><tr><td>恭喜QQ288**144**</td><td>于2020-03-19日推广成功</td><td><font color="salmon">奖励<img src="assets/img/yewu/mpz.png" width="15">17901名片赞</font></td></tr><tr></tr><tr><td>恭喜QQ64**470**</td><td>于2020-03-19日推广成功</td><td><font color="salmon">奖励<img src="assets/img/yewu/video.png" width="15">视频会员</font></td></tr><tr></tr><tr><td>恭喜QQ751**574**</td><td>于2020-03-19日推广成功</td><td><font color="salmon">奖励<img src="assets/img/yewu/svip.png" width="15">超级会员</font></td></tr><tr></tr><tr><td>恭喜QQ95**354**</td><td>于2020-03-19日推广成功</td><td><font color="salmon">奖励<img src="assets/img/yewu/svip.png" width="15">超级会员</font></td></tr><tr></tr><tr><td>恭喜QQ659**484**</td><td>于2020-03-19日推广成功</td><td><font color="salmon">奖励<img src="assets/img/yewu/svip.png" width="15">超级会员</font></td></tr><tr></tr><tr><td>恭喜QQ682**495**</td><td>于2020-03-19日推广成功</td><td><font color="salmon">奖励<img src="assets/img/yewu/svip.png" width="15">超级会员</font></td></tr><tr></tr><tr><td>恭喜QQ800**552**</td><td>于2020-03-19日推广成功</td><td><font color="salmon">奖励<img src="assets/img/yewu/green.png" width="15">豪华绿钻</font></td></tr><tr></tr><tr><td>恭喜QQ725**842**</td><td>于2020-03-19日推广成功</td><td><font color="salmon">奖励<img src="assets/img/yewu/svip.png" width="15">超级会员</font></td></tr><tr></tr><tr><td>恭喜QQ146**486**</td><td>于2020-03-19日推广成功</td><td><font color="salmon">奖励<img src="assets/img/yewu/svip.png" width="15">超级会员</font></td></tr><tr></tr><tr><td>恭喜QQ124**533**</td><td>于2020-03-19日推广成功</td><td><font color="salmon">奖励<img src="assets/img/yewu/green.png" width="15">豪华绿钻</font></td></tr><tr></tr><tr><td>恭喜QQ949**639**</td><td>于2020-03-19日推广成功</td><td><font color="salmon">奖励<img src="assets/img/yewu/yellow.png" width="15">豪华黄钻</font></td></tr><tr></tr><tr><td>恭喜QQ712**522**</td><td>于2020-03-19日推广成功</td><td><font color="salmon">奖励<img src="assets/img/yewu/green.png" width="15">豪华绿钻</font></td></tr><tr></tr><tr><td>恭喜QQ633**128**</td><td>于2020-03-19日推广成功</td><td><font color="salmon">奖励<img src="assets/img/yewu/green.png" width="15">豪华绿钻</font></td></tr><tr></tr><tr><td>恭喜QQ332**643**</td><td>于2020-03-19日推广成功</td><td><font color="salmon">奖励<img src="assets/img/yewu/yellow.png" width="15">豪华黄钻</font></td></tr><tr></tr><tr><td>恭喜QQ922**203**</td><td>于2020-03-19日推广成功</td><td><font color="salmon">奖励<img src="assets/img/yewu/svip.png" width="15">超级会员</font></td></tr><tr></tr><tr><td>恭喜QQ903**972**</td><td>于2020-03-19日推广成功</td><td><font color="salmon">奖励<img src="assets/img/yewu/green.png" width="15">豪华绿钻</font></td></tr><tr></tr><tr><td>恭喜QQ841**850**</td><td>于2020-03-19日推广成功</td><td><font color="salmon">奖励<img src="assets/img/yewu/svip.png" width="15">超级会员</font></td></tr><tr></tr><tr><td>恭喜QQ446**987**</td><td>于2020-03-19日推广成功</td><td><font color="salmon">奖励<img src="assets/img/yewu/svip.png" width="15">超级会员</font></td></tr><tr></tr><tr><td>恭喜QQ885**895**</td><td>于2020-03-19日推广成功</td><td><font color="salmon">奖励<img src="assets/img/yewu/mpz.png" width="15">49884名片赞</font></td></tr><tr></tr><tr><td>恭喜QQ545**890**</td><td>于2020-03-19日推广成功</td><td><font color="salmon">奖励<img src="assets/img/yewu/mpz.png" width="15">66857名片赞</font></td></tr><tr></tr><tr><td>恭喜QQ855**937**</td><td>于2020-03-19日推广成功</td><td><font color="salmon">奖励<img src="assets/img/yewu/video.png" width="15">视频会员</font></td></tr><tr></tr><tr><td>恭喜QQ950**282**</td><td>于2020-03-19日推广成功</td><td><font color="salmon">奖励<img src="assets/img/yewu/svip.png" width="15">超级会员</font></td></tr><tr></tr><tr><td>恭喜QQ131**784**</td><td>于2020-03-19日推广成功</td><td><font color="salmon">奖励<img src="assets/img/yewu/green.png" width="15">豪华绿钻</font></td></tr><tr></tr><tr><td>恭喜QQ347**345**</td><td>于2020-03-19日推广成功</td><td><font color="salmon">奖励<img src="assets/img/yewu/video.png" width="15">视频会员</font></td></tr><tr></tr><tr><td>恭喜QQ54**321**</td><td>于2020-03-19日推广成功</td><td><font color="salmon">奖励<img src="assets/img/yewu/green.png" width="15">豪华绿钻</font></td></tr><tr></tr><tr><td>恭喜QQ947**937**</td><td>于2020-03-19日推广成功</td><td><font color="salmon">奖励<img src="assets/img/yewu/svip.png" width="15">超级会员</font></td></tr>		</thead>
	</table>
</marquee>
</div>
<!--关于我们弹窗结束-->

<!--底部导航-->
<div class="panel panel-default">
<center>
<div class="panel-body">
<img src="./assets/img/xdjs.png" alt="购买指南" width="100%" /> 
<img src="./assets/img/t.jpg" width="100%"><b>
<font color="#C00000">本</font><font color="#B5000B">站</font><font color="#AA0016">地</font><font color="#9F0021">址</font><font color="#94002C">：</font>
<font color="red">
<script language="javascript">
host = window.location.host;
document.write(""+host)
</script>
</font>
  
<font color="#890037">（</font><font color="#7E0042">欢</font><font color="#73004D">迎</font><font color="#680058">收</font><font color="#5D0063"></font><font color="#52006E">藏</font><font color="#470079">）</font></b><br><span style="font-weight:bold"><font color="#C00000">C</font><font color="#B5000B">o</font><font color="#AA0016">p</font><font color="#9F0021">y</font><font color="#94002C">R</font><font color="#890037">i</font><font color="#7E0042">g</font><font color="#73004D">h</font><font color="#680058">t</font><font color="#5D0063"></font> <i class="fa fa-heart text-danger"></i> <font color="#52006E">2</font><font color="#470079">0</font><font color="#3C0084">1</font><font color="#31008F">9</font><font color="#26009A"> | </font></span><a class="" href="#about" data-toggle="modal"><span style="font-weight:bold">新手下单帮助</span></a>
<div id="footer-img-box">
	<img style="height:25px;margin-right:12px;" src="./assets/beautify/img/gg-bzzx.jpg">
	<img style="height:25px;margin-right:12px;" src="./assets/beautify/img/gg-cxwz.jpg">
	<img style="height:25px;margin-right:12px;" src="./assets/beautify/img/gg-txrz.jpg">
</div>
<a href="javascript:void(0)" onclick="window.open('http://www.miitbeian.gov.cn/');">吉ICP备20000654号-5</a><b/>
</center>
</div>
<!--底部导航-->
<!--音乐代码-->
<div id="audio-play" <?php if(empty($conf['musicurl'])){?>style="display:none;"<?php }?>>
  <div id="audio-btn" class="on" onclick="audio_init.changeClass(this,'media')">
    <audio loop="loop" src="<?php echo $conf['musicurl']?>" id="media" preload="preload"></audio>
  </div>
</div>
<!--音乐代码-->
<!--查单说明开始-->
<div class="modal fade" align="left" id="cxsm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
<h4 class="modal-title" id="myModalLabel">查询内容是什么？该输入什么？</h4>
</div>
<li class="list-group-item"><font color="red">请在右侧的输入框内输入您下单时，在第一个输入框内填写的信息</font></li>
<li class="list-group-item">例如您购买的是QQ名片赞，输入下单的QQ账号即可查询订单</li>
<li class="list-group-item">例如您购买的是邮箱类商品，需要输入您的邮箱号，输入QQ号是查询不到的</li>
<li class="list-group-item">例如您购买的是快手商品，需要输入作品链接里“userid=”后面的数字，输入快手号是一般是查询不到的</li>
<li class="list-group-item">例如您购买的是全民K歌商品，需要输入歌曲链接里“shareuid=”后面的，&amp;前面的一串英文数字，输入歌曲链接是查询不到的</li>
<li class="list-group-item"><font color="red">如果您不知道下单账号是什么，可以不填写，直接点击查询，则会根据浏览器缓存查询</font></li>
<div class="modal-footer">
<button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
</div>
</div>
</div>
</div>
<!--查单说明结束-->
<!--客服开始-->

<div class="modal fade" align="left" id="lxkf" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
<div class="modal-dialog">
<div class="modal-content"> 
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
<center><h4 class="modal-title" id="myModalLabel"><b><font color="#E00000">在</font><font color="#D1000F">线</font><font color="#C2001E">系</font><font color="#B3002D">统</font><font color="#A4003C">帮</font><font color="#95004B">助</font>

<!---<font color="#86005A"> </font><font color="#770069">-</font><font color="#680078"> </font><font color="#590087">是</font><font color="#4A0096">否</font><font color="#3B00A5">需</font><font color="#2C00B4">要</font><font color="#1D00C3">联</font><font color="#0E00D2">系</font><font color="#0000E1">客</font><font color="#0000F0">服</font--->

</b></h4></center>
</div>
<div class="modal-body">
<div class="panel-body">
<center><h4 style="color:red;font-size:17px;text-align:center;">业务基本24小时内到账，请勿着急<br> 请您认真查看以下帮助 是否能帮助您解决问题！</h4></center><br>
<div class="panel-group" id="accordion">
  
<div class="panel panel-default" style="border-color: #fff;">
<a data-toggle="collapse" data-parent="#accordion" href="#collapse24xs" style="color:#fff;" class="collapsed" aria-expanded="false">

<div class="panel-heading" style="text-align:left; background-color:#17b617;border-radius: 8px;">
<center><h4 class="panel-title"><font color="#FFD700">【请先看我】</font><br>我购买的业务为什么没有到账？</h4></center>
</div></a>
<div id="collapse24xs" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
<div class="panel-body" style="text-align:left;">
1.网站的大部分业务基本在24小时内到账，具体的商品到账时间可以看商品介绍。<br>
2.网站客服是人工服务【不要刚下单就去问】切记！商品购买后基本上24小时内到账！！！<br>
3.如果订单有问题可以先看下我们的订单帮助，解决不了的再联系客服，解决不了的再联系！<br>
4.超过商品到账时间还未到账的，请联系下方的客服QQ，发送下单账号+下单商品+出现的问题！<br>
5.客服工作时间是10:00 ~ 22:30【具体时间看实际情况】请先发送消息给他，轮到你了就会处理！<br>
6.如果你早上或上午发的消息，可能会因为消息过多而接受不到，请下午或晚上再发送一遍，等待回复即可！
</div></div></div>

<div class="panel panel-default" style="border-color: #fff;">
<a data-toggle="collapse" data-parent="#accordion" href="#collapse1" style="color:#fff;" class="collapsed" aria-expanded="false">
  
  
<div class="panel-heading" style="text-align:left; background-color:#17b617;border-radius: 8px;">
<h4 class="panel-title">1.邮箱类的软件/CDK没有发送我的邮箱？</h4>
</div></a>
<div id="collapse1" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
<div class="panel-body" style="text-align:left;">
1.请使用手动方法查询您购买的商品或CDK。<br>
2.点击“查单”再输入自己下单时填的邮箱，不是QQ号。<br>
3.查到订单后再点击下方最右边的“详细”即可看到您购买的东西！<br>
4.如果是网盘类的，请按照指示下载即可，如果是CDK，请看商品介绍有兑换地址。<br>
5.网盘类的无法下载，请先将他保存到百度网盘，再去百度网盘中下载；或者点击普通下载，不要点击高速下载。
</div></div></div>




<div class="panel panel-default" style="border-color: #fff;">
<a data-toggle="collapse" data-parent="#accordion" href="#collapse2" style="color:#fff;" class="collapsed" aria-expanded="false">
<div class="panel-heading" style="text-align:left; background-color:#17b617;border-radius: 8px;">
<h4 class="panel-title">2.QQ刷名片赞好久没开始刷或暂停了？</h4>
</div></a>
<div id="collapse2" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
<div class="panel-body" style="text-align:left;">
1.名片赞不刷通常是刷了一会暂停了，这说明是腾讯频繁限制了，耐心等待一会即可！<br>
2.名片赞很慢说明您下的是特价赞，因价格低订单多，所以就会慢点啦，不用着急的呢！<br>
3.如果您觉得名片赞没有到您买的数量，点击查单，输入QQ后点查询滑到最下面，有两个按钮可以查询实时数量！
</div></div></div>



<div class="panel panel-default" style="border-color: #fff;">
<a data-toggle="collapse" data-parent="#accordion" href="#collapse3" style="color:#fff;" class="collapsed" aria-expanded="false">
<div class="panel-heading" style="text-align:left; background-color:#17b617;border-radius: 8px;">
<h4 class="panel-title">3.QQ空间业务好久没开始刷？</h4>
</div></a>
<div id="collapse3" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
<div class="panel-body" style="text-align:left;">
1.空间访客是24小时内刷完，特殊情况延迟。<br>
2.空间必须设置成允许任何人可访问。<br>
3.如果刷说说评论，必须将说说评论权限关闭掉，要在电脑端设置。<br>
4.如果空间留言板，必须将留言权限关闭掉，看商品介绍上面有教程。<br>
5.空间被单封的是刷不了的（单封：对方不是你好友进不了你空间）这个需要您自己去找办法解封。
</div></div></div>




<div class="panel panel-default" style="border-color: #fff;">
<a data-toggle="collapse" data-parent="#accordion" href="#collapse4" style="color:#fff;" class="collapsed" aria-expanded="false">
<div class="panel-heading" style="text-align:left; background-color:#17b617;border-radius: 8px;">
<h4 class="panel-title">4.QQ代挂业务为什么没到账？</h4>
</div></a>
<div id="collapse4" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
<div class="panel-body" style="text-align:left;">
1.QQ代挂下单后次日开始正常代挂。<br>
2.必须关闭设备锁、网页登录保护。<br>
3.如果账号冻结了，请去QQ安全中心修改个密码即可。<br>
4.然后看代挂的商品介绍上面有个红色的按钮，点击进去修改密码和补挂即可或者点击下方。<br>
改密补单网站：<a target="_blankqq" class="btn btn-danger btn-xs" href="http://www.66dg.cc"><i class="fa fa-send"></i> 直接点击我修改代挂密码</a>
</div></div></div>



<div class="panel panel-default" style="border-color: #fff;">
<a data-toggle="collapse" data-parent="#accordion" href="#collapse5" style="color:#fff;" class="collapsed" aria-expanded="false">
<div class="panel-heading" style="text-align:left; background-color:#17b617;border-radius: 8px;">
<h4 class="panel-title">5.快手代刷业务好久没开始刷？</h4>
</div></a>
<div id="collapse5" class="panel-collapse collapse" aria-expanded="false">
<div class="panel-body" style="text-align:left;">
1.快手粉丝目前日刷几千个，下单务必关掉隐私用户。<br>
2.快手粉丝/双击/播放/评论，都是3小时内到账，最快几小时。<br>
3.如果快手类订单状态显示等待处理，那么说明你的下单ID可能填错了或作品被官方屏蔽了，请联系客服更改。<br>
4.将你的作品链接和填写错误的下单账号2个都发给客服，等待客服处理即可。【不要截图】
</div></div></div>



<div class="panel panel-default" style="border-color: #fff;">
<a data-toggle="collapse" data-parent="#accordion" href="#collapse6" style="color:#fff;" class="collapsed" aria-expanded="false">
<div class="panel-heading" style="text-align:left; background-color:#17b617;border-radius: 8px;">
<h4 class="panel-title">6.全民K歌代刷业务好久没开始刷？</h4>
</div></a>
<div id="collapse6" class="panel-collapse collapse" aria-expanded="false">
<div class="panel-body" style="text-align:left;">
1.全民K歌全系列商品均在24小时内全部到账。<br>
2.全民K歌经验每天会有上限，具体上限多少请看商品介绍有图解。<br>
3.如果全民K歌歌曲ID填写错误，订单显示等待处理或请联系客服，请联系客服更改歌曲ID。<br>
4.将你的歌曲链接和填写错误的下单账号2个都发给客服，等待客服处理即可。【不要截图】
</div></div></div>



<div class="panel panel-default" style="border-color: #fff;">
<a data-toggle="collapse" data-parent="#accordion" href="#collapse7" style="color:#fff;" class="collapsed" aria-expanded="false">
<div class="panel-heading" style="text-align:left; background-color:#17b617;border-radius: 8px;">
<h4 class="panel-title">7.抖音/火山代刷业务好久没开始刷？</h4>
</div></a>
<div id="collapse7" class="panel-collapse collapse" aria-expanded="false">
<div class="panel-body" style="text-align:left;">
1.抖音/火山全系列商品均在24小时内全部到账。<br>
2.抖音/火山大部分人会将下单账号填写错误，除粉丝外， 其他正确的ID是19位的数字。<br>
3.如果抖音/火山视频ID填写错误，订单显示已经处理的，请联系客服更改歌曲ID。<br>
4.将你的歌曲链接和填写错误的下单账号2个都发给客服，等待客服处理即可。【不要截图】<br>
5.如果是抖音金V认证，我们处理好后请不要绑定微博，否则会失效不负责的！
</div></div></div>



<div class="panel panel-default" style="border-color: #fff;">
<a data-toggle="collapse" data-parent="#accordion" href="#collapse9" style="color:#fff;" class="collapsed" aria-expanded="false">
<div class="panel-heading" style="text-align:left; background-color:#17b617;border-radius: 8px;">
<h4 class="panel-title">8.代卡iphone手机在线为什没有到？</h4>
</div></a>
<div id="collapse9" class="panel-collapse collapse" aria-expanded="false">
<div class="panel-body" style="text-align:left;">
1.代卡下单后是在凌晨统一处理的，不要着急。<br>
2.代卡成功后不要拿手机登录QQ，登录就会失效。<br>
3.代卡成功后可以使用电脑或HD QQ登录，不会失效。
</div></div></div>

<div class="panel panel-default" style="border-color: #fff;">
<a data-toggle="collapse" data-parent="#accordion" href="#collapse10" style="color:#fff;" class="collapsed" aria-expanded="false">
<div class="panel-heading" style="text-align:left; background-color:#17b617;border-radius: 8px;">
<h4 class="panel-title">9.买的东西为什么那么久还是等待处理？</h4>
</div></a>
<div id="collapse10" class="panel-collapse collapse" aria-expanded="false">
<div class="panel-body" style="text-align:left;">
1.如果是等待处理的订单，我们凌晨会统一进行处理的，不用催单。<br>
2.如果是下单后需要联系客服领取的，请直接与客服联系即可，不然不会发货。
</div></div></div>
<div class="panel panel-default" style="border-color: #fff;">
<a data-toggle="collapse" data-parent="#accordion" href="#collapse11" style="color:#fff;" class="collapsed" aria-expanded="false">
<div class="panel-heading" style="text-align:left; background-color:#17b617;border-radius: 8px;">
<h4 class="panel-title">10.已付款支付成功查不到订单？</h4>
</div></a>
<div id="collapse11" class="panel-collapse collapse" aria-expanded="false">
<div class="panel-body" style="text-align:left;">
1.如果出现这种问题，请确认一下你的下单账号是否填写正确。<br>
2.或者将输入框留空，即可按照浏览器缓存查询订单。<br>
3.如果还是查询不到请耐心等待商品到账时间，超过时间未到账的联系客服！<br>
4.将你的付款截图，点击付款记录后有个订单号，将付款截图截图给客服，并且告诉客服你买的是什么查不到订单，然后等待客服处理即可。
</div></div></div>
<div class="panel panel-default" style="border-color: #fff;">
<a data-toggle="collapse" data-parent="#accordion" href="#collapse12" style="color:#fff;" class="collapsed" aria-expanded="false">
<div class="panel-heading" style="text-align:left; background-color:#17b617;border-radius: 8px;">
<h4 class="panel-title">11.下单时为什么会无法支付？</h4>
</div></a>
<div id="collapse12" class="panel-collapse collapse" aria-expanded="false">
<div class="panel-body" style="text-align:left;">
1.目前微信支付不太稳定，时不时会有链接打开失败的问题！请多尝试几次。<br>
2.建议更换浏览器、网络或者过一段时间再尝试，也可以选择其他方式支付！
</div></div></div>
<div class="panel panel-default" style="border-color: #fff;">
<a data-toggle="collapse" data-parent="#accordion" href="#collapse13" style="color:#fff;" class="collapsed" aria-expanded="false">
<div class="panel-heading" style="text-align:left; background-color:#17b617;border-radius: 8px;">
<h4 class="panel-title">12.为什么我刷的钻类会员没有到呢？</h4>
</div></a>
<div id="collapse13" class="panel-collapse collapse" aria-expanded="false">
<div class="panel-body" style="text-align:left;">
1.目前我们钻类/会员都是人工处理，所以到账时间比较慢 24-72小时不定时开单。<br>
2.如果超过时间您可以先去查单页面查询 显示已完成了 但是没有到 说明您自带下单商品
请联系客服退款。如果显示正在处理的话 那请您在耐心等待下。都会如实到账的。
</div></div></div>

<div class="panel panel-default" style="border-color: #fff;">
<a data-toggle="collapse" data-parent="#accordion" href="#collapse14" style="color:#fff;" class="collapsed" aria-expanded="false">
<div class="panel-heading" style="text-align:left; background-color:#17b617;border-radius: 8px;">
<h4 class="panel-title"><center>以上帮助并不能解决我的订单问题〔点击查看其他解决方法〕</center></h4>
</div></a>
<div id="collapse14" class="panel-collapse collapse" aria-expanded="false">
<div class="panel-body" style="text-align:left;">
老板，很抱歉我们没有及时为您解决问题，业务基本24小时内到账，具体到账时间请去看商品介绍，超过时间未到账的请联系下面的在线人工客服。<br>
  <B> <font color="red">注意：如果本站客服QQ【长时间】不回复、不售后、不处理您的问题。或者存在欺骗行为等任何不能为您解决售后问题的情况下。</font>
  <font color="red">请您可以联系【客服总管QQ：<?php echo $conf['kfqq'] ?>】给您售后解决任何问题。</font></B>
</div></div></div>

<br>
<font color="#FF8C00">温馨提示：本站只在网站交易，切勿相信他人，私下交易有风险，被骗概不负责！请勿向【本站客服】泄露您的账号密码、勿向他人转账、请勿泄露个人信息以及付款截图！</font>
<font color="red">如果我们侵犯了您个人或贵司的权益、不妥之处，请联系我们的客服总管出示证明以便解决。敬请谅解！</font>

</div>
</div>

<a class="widget">
<div class="widget-content text-right clearfix">
<img src="http://q4.qlogo.cn/headimg_dl?dst_uin=<?php echo $conf['kfqq'];?>&amp;spec=100" alt="Avatar" width="60" height="60" class="img-circle img-thumbnail img-thumbnail-avatar pull-left">
<h2 class="widget-heading h5"><strong>本站客服QQ：<?php echo $conf['kfqq'];?></strong></h2>
<span class="text-muted"><sub>有问题请先联系本站客服，解决不了的再联系客服总管，有事直说，看到回复（不要问在不在，直接发下单账号+下单商品+出现的问题）
</sub></span>
</div>
</a>

</div>
</div>
<div class="modal-footer">
<center><button type="button" class="btn btn-default" data-dismiss="modal">我知道了</button></center>
</div>	  
</div>
</div>

<!--客服结束-->
<!--关于我们弹窗-->
<div class="modal fade" align="left" id="about" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
<h4 class="modal-title" id="myModalLabel">请看你的问题是否需要联系客服</h4>
</div>
<div class="modal-body ">
<center>
<div id="demo-acc-faq" class="panel-group accordion"><div class="panel panel-trans pad-top">
<a href="#demo-acc-faq11" class="text-semibold text-lg text-main collapsed" data-toggle="collapse" data-parent="#demo-acc-faq" aria-expanded="false">卡密/代挂/CDK - 没有发送我的邮箱？</a>
<div id="demo-acc-faq11" class="mar-ver collapse" aria-expanded="false" style="height: 0px;">1.先点击网站上的“查单”按钮<br>
2.再输入自己下单时填写的ＱＱ邮箱<br>
3.查到订单后再点击“详细”即可看到<br>4.若代挂中心无法打开，请联系客服处理！
<hr></div></div>

<div class="panel panel-trans pad-top">
<a href="#demo-acc-faq1" class="text-semibold text-lg text-main collapsed" data-toggle="collapse" data-parent="#demo-acc-faq" aria-expanded="false">下单都很久了 为什么没有开始刷呢？</a>
<div id="demo-acc-faq1" class="mar-ver collapse" aria-expanded="false" style="height: 0px;">
由于本站采用全自动订单处理，难免会出现漏单，部分单子处理时间可能会稍长一点，不过都会完成，最终解释权归本站所有。超过24小时没处理请联系客服！<hr></div></div>

<div class="panel panel-trans pad-top">
<a href="#demo-acc-faq3" class="text-semibold text-lg text-main collapsed" data-toggle="collapse" data-parent="#demo-acc-faq" aria-expanded="false">QQ空间业务 - 下单好久没有开刷？</a>
<div id="demo-acc-faq3" class="mar-ver collapse" aria-expanded="false">1.访客24小时内开刷，特殊情况延迟！<br>
2.空间必须设置允许任何人可访问<br>
3.空间被单封的勿要单（会异常）<hr></div></div>

<div class="panel panel-trans pad-top">
<a href="#demo-acc-faq5" class="text-semibold text-lg text-main collapsed" data-toggle="collapse" data-parent="#demo-acc-faq" aria-expanded="false">GIF快手业务 - 下单好久没开始刷？</a>
<div id="demo-acc-faq5" class="mar-ver collapse" aria-expanded="false">
1.下单前先确认输的信息是否正确!<br>
2.快手粉丝/播放/评论  都是当天到账<br>
3.快手双击 24小时内都会到账 勿催！<hr></div></div>

<div class="panel panel-trans pad-top">
<a href="#demo-acc-faq6" class="text-semibold text-lg text-main collapsed" data-toggle="collapse" data-parent="#demo-acc-faq" aria-expanded="false">ＱＱ钻/ＱＱ会员好久了还没到账？</a>
<div id="demo-acc-faq6" class="mar-ver collapse" aria-expanded="false">
1.下单前先确认输的信息是否正确!<br>
2.钻/会员因为需要人工处理，所以每天不定时开刷，24小时-72小时内到账，勿催！</div></div></div>
<a href="" target="_blank" class="widget"></a> 
<table class="table table-bordered" style="text-align:center">
<tbody>  
<tr height="30">
<td>售后客服QQ：<?php echo $conf['kfqq'];?><br><font style="font-size:8px">售后在线时间:中午 - 晚上不定时回复</font></td>
<td><a target="_blank" href="http://wpa.qq.com/msgrd?v=3&amp;uin=<?php echo $conf['kfqq'];?>&amp;site=qq&amp;menu=yes"><img border="0" src="http://wpa.qq.com/pa?p=2:<?php echo $conf['kfqq'];?>:52" alt="联系客服" title="联系客服">点击聊天</a><br><font style="font-size:8px">若不能聊天请添加好友</font></td>
</tr>
</table>
若以上没有帮助到您 - 请联系客服处理！
</center>     
</div>
</div>
</div>
</div>
<!--关于我们弹窗-->
<!--分站介绍开始-->
<div class="modal fade" align="left" id="userjs" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
<div class="modal-dialog">
<div class="modal-content">
<div class="list-group-item reed" style="background:linear-gradient(120deg, #FE2EF7 10%, #71D7A2 90%);">
<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true"></span><span class="sr-only">Close</span></button>
<center><h4 class="modal-title" id="myModalLabel"><b><font color="#fff">版本介绍</font></b></h4></center>
</div>
<div class="modal-body">
<div class="table-responsive">
<table class="table table-borderless table-vcenter">
<thead>
<tr>
<th style="width: 100px;">功能</th>
<th class="text-center" style="width: 20px;">普及版/专业版</th>
</tr>
</thead>
<tbody>
<tr class="active">
<td>独立网站/专属后台</td>
<td class="text-center">
<span class="btn btn-effect-ripple btn-xs btn-success" style="overflow: hidden; position: relative;"><i class="fa fa-check"></i></span>
<span class="btn btn-effect-ripple btn-xs btn-success" style="overflow: hidden; position: relative;"><i class="fa fa-check"></i></span>
</td>
 </tr>
<tr class="">
<td>低价拿货/调整价格</td>
<td class="text-center">
<span class="btn btn-effect-ripple btn-xs btn-success" style="overflow: hidden; position: relative;"><i class="fa fa-check"></i></span>
<span class="btn btn-effect-ripple btn-xs btn-success" style="overflow: hidden; position: relative;"><i class="fa fa-check"></i></span>
</td>
</tr>
<tr class="info">
<td>搭建分站/管理分站</td>
<td class="text-center">
<span class="btn btn-effect-ripple btn-xs btn-danger" style="overflow: hidden; position: relative;"><i class="fa fa-close"></i></span>
<span class="btn btn-effect-ripple btn-xs btn-success" style="overflow: hidden; position: relative;"><i class="fa fa-check"></i></span>
</td>
</tr>
<tr class="">
<td>超低密价/高额提成</td>
<td class="text-center">
<span class="btn btn-effect-ripple btn-xs btn-danger" style="overflow: hidden; position: relative;"><i class="fa fa-close"></i></span>
<span class="btn btn-effect-ripple btn-xs btn-success" style="overflow: hidden; position: relative;"><i class="fa fa-check"></i></span>
</td>
</tr>
<tr class="danger">
<td>赠送代刷APP</td>
<td class="text-center">
<span class="btn btn-effect-ripple btn-xs btn-danger" style="overflow: hidden; position: relative;"><i class="fa fa-close"></i></span>
<span class="btn btn-effect-ripple btn-xs btn-success" style="overflow: hidden; position: relative;"><i class="fa fa-check"></i></span>
</td>
</tr>
</tbody>
</table>
</div>
 </div>
<div class="modal-footer">
<button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
</div>
 </div>
</div>
</div>
<!--分站介绍结束-->
<!--版本介绍-->
<div class="modal fade" align="left" id="fzjs" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
<div class="modal-dialog">
<div class="modal-content">
<div class="list-group-item reed" style="background:linear-gradient(120deg, #FE2EF7 10%, #71D7A2 90%);">
<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true"></span><span class="sr-only">Close</span></button>
<center><h4 class="modal-title" id="myModalLabel"><b><font color="#fff">分站介绍</font></b></h4></center>
</div>
<div class="modal-body">
<div class="panel-group" id="accordion">
<div class="panel panel-default">
<div class="panel-heading">
<h4 class="panel-title">
<a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" class="collapsed">我们网站是怎么获取收益的？</a></h4>
</div>
<div id="collapseOne" class="panel-collapse collapse" style="height: 0px;" aria-expanded="false">
<div class="panel-body">其实很简单，你只需要把你的网站网址发给你的用户让他下单，只要用户下单付款成功，你的账户就会增加你所赚差价的金额，自己是可以设置销售价格的哦！！</div></div>
</div>
<div class="panel panel-default">
<div class="panel-heading">
<h4 class="panel-title">
<a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" class="collapsed" aria-expanded="false">赚到的钱在哪里？我如何得到？</a></h4>
</div>
<div id="collapseTwo" class="panel-collapse collapse" style="height: 0px;" aria-expanded="false">
<div class="panel-body">网站后台有完整的消费明细和余额信息，余额可供您在平台消费，满10元后可以提现到QQ钱包、微信、支付宝。</div></div>
</div>
<div class="panel panel-default">
<div class="panel-heading">
<h4 class="panel-title">
<a data-toggle="collapse" data-parent="#accordion" href="#collapseThree" class="collapsed" aria-expanded="false">需要我自己供货吗？哪来的商品货源？</a></h4>
</div>
<div id="collapseThree" class="panel-collapse collapse" style="height: 0px;" aria-expanded="false">
<div class="panel-body">所有商品全部由主站提供，您无需当心货源问题，所有订单由我们来处理，如果网站没有您想要的商品可联系主站客服添加即可！</div></div>
</div>
<div class="panel panel-default">
<div class="panel-heading">
<h4 class="panel-title">
<a data-toggle="collapse" data-parent="#accordion" href="#collapseFourth" class="collapsed" aria-expanded="false">这个和卡盟一样吗？有什么区别？</a></h4>
</div>
<div id="collapseFourth" class="panel-collapse collapse" style="height: 0px;" aria-expanded="false">
<div class="panel-body">完全不同，销售提成最高享受商品售价的30%，货源更精，无需注册,无需预存，在线支付，更简单快捷！</div></div>
</div>
<div class="panel panel-default">
<div class="panel-heading">
<h4 class="panel-title">
<a data-toggle="collapse" data-parent="#accordion" href="#collapseFive" class="collapsed" aria-expanded="false">可以自己上架商品吗？可以修改售价吗？</a></h4>
</div>
<div id="collapseFive" class="panel-collapse collapse" style="height: 0px;" aria-expanded="false">
<div class="panel-body">所有网站暂时都不支持自己上架商品，但可以修改销售价格，我们会在这方面后期做出相对于的更新服务！</div></div>
</div>
<div class="panel panel-default">
<div class="panel-heading">
<h4 class="panel-title">
<a data-toggle="collapse" data-parent="#accordion" href="#collapseSix" class="collapsed" aria-expanded="false">那么多代刷网有网站，为什么选择你们呢？</a></h4>
</div>
<div id="collapseSix" class="panel-collapse collapse" style="height: 0px;" aria-expanded="false">
<div class="panel-body">全网最专业的代刷系统，商品齐全、货源稳定、价格低廉、售后保障。实体工作室运营，拥有丰富的人脉和资源，我们的货源全部精挑细选全网性价比最高的，实时掌握代刷市场的动态，加入我们，只要你坚持，你不用担心不赚钱，不用担心货源不好，更不用担心我们跑路，我们即使不敢保证你月入上万，在网上赚个零花钱绝对没问题！</div></div>
</div>
</div>
<a href="user/reg.php"><h4><center><span style="font-weight:bold"><font color="#FF8000">加</font><font color="#EC6D13">入</font><font color="#D95A26">我</font><font color="#C64739">们</font><font color="#B3344C"> </font><font color="#A0215F">赚</font><font color="#8D0E72">钱</font><font color="#7A0085">就</font><font color="#670098">是</font><font color="#5400AB">如</font><font color="#4100BE">此</font><font color="#2E00D1">简</font><font color="#1B00E4">单</font> </span></center></h4></a>
</div>
</div>
<div class="modal-footer">
<button class="btn btn-sm btn-default" type="button" data-dismiss="modal">关闭</button></div>
 </div>
</div>
</div>
<!--版本介绍-->
<!--份数说明-->
<div class="modal fade" id="fs" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
 <div class="modal-dialog">
<div class="modal-content">
<div class="list-group-item reed" style="background:#FFD700;">
<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">x</span><span class="sr-only">Close</span></button>
<center><h4 class="modal-title" id="myModalLabel"><b><font color="#fff">下单时显示的“份数”是什么</font></b></h4></center>
</div>
<br> 
<center>
<font color="red">下单东西的面值×份数=下单份数（份数默认为1）</font>
<hr>
 例如您购买：1000个QQ名片赞<br>下单份数选3，就是总共会获得3000个名片赞 
<hr>
例如您购买：1000个全民K歌粉丝<br>下单份数选10，就是总共会获得10000个粉丝
<hr>
<font color="red">以此类推 本站其他东西都是如此，希望给您最好的购物体验</font>
<br> 
</center>
<div class="modal-footer" style="background-color: white;">
<button type="button" class="btn btn-default" data-dismiss="modal">我知道了</button>
</div>
</div>
</div>
</div>
<!--份数说明-->
<!--平台介绍开始-->
<div class="modal fade" align="left" id="aboutym" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header" style="background:linear-gradient(120deg, #31B404 0%, #D7DF01 100%);">
<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true"></span><span class="sr-only">Close</span></button>
<center><h4 class="modal-title" id="myModalLabel"><b><font color="#fff"><?php echo $conf['sitename']?></font></b></h4></center>  
</div><div class="widget flat radius-bordered"> 

<center>
<div class="panel-body"><b>
<div class="widget-header bordered-top bordered-themesecondary"> <div class="modal-body">
<div style="width:100px;background:#fff;margin:0 auto;text-align:center;">
<img src="//q4.qlogo.cn/headimg_dl?dst_uin=<?php echo $conf['kfqq'];?>&spec=100" style="width:70px; height:70px;border-radius:50%;margin-top:10px;">
</div>
<div class="fgx"></div>
<div class="pd-text cnt" style="border:none">
<font color="#f00"><b>主 站 长</b></font><img src="./assets/beautify/img/gg-rz.jpg" style="height:15px;margin:-2px 0 0 5px;">
</div>
<center>
<ul class="two-df-naw">
<li style="border-right:#ddd solid 1px;text-align:left;"><font color="#f00">职业</font>：程序猿（专业）</li>
<li style="text-align:left;"><font color="#f00">站长QQ</font>：<font color="#0080ff"><?php echo $conf[ 'kfqq']?></font></li>
<li style="text-align:left;"><font color="#f00">座右铭</font>：<font color="#0000">业精于勤、学无止境、工匠精神！</font></li>
</ul>
</div>
<div class="panel-shadow panel-bor-top rdu-5x">
<div class="cnt title-bj"><div class="title tw2"><b><?php echo $conf['sitename']?></b></div></div>
<div class="sjx"></div>
	<div class="pd-text cnt tw1" style="border:none">本站网址：<a href="http://<?php echo $_SERVER['HTTP_HOST']?>">
		<font color="#0080ff">http://<?php echo $_SERVER['HTTP_HOST']?>
		</font></a>（请牢记哦）
	</div>
<div class="pd-text">
<div class="cnt" style="margin:5px 17% 10px 17%;padding-bottom:10px;border-bottom:#ff8000 solid 2px;color:#f00;">
本站于：<?php echo $conf['build']?> 正式成立
</div>
<div>全网最专业的代刷系统，商品齐全、货源稳定、价格低廉、售后保障。拥有丰富的人脉和资源，我们专注于优质商品，实时掌握代刷市场的动态。</div>
<div style="padding:8px 0; text-align:center;">
<a href="./user/reg.php">
<img style="width:80px; margin-right:20px;" src="./assets/beautify/img/gg-hyff.jpg">
<img style="width:80px; margin-right:20px;" src="./assets/beautify/img/gg-cyjm.jpg">
<img style="width:80px; " src="./assets/beautify/img/gg-gtzf.jpg"></a>
</div>
<div>加入我们，只要你坚持，你不用担心不赚钱，不用担心货源不好，更不用担心我们跑路，我们即使不敢保证你月入上万，在网上赚个零花钱绝对没问题！</div>
<div style="border-top:#ff8000 dashed 1px;padding:10px 17% 5px 17%;margin-top:10px;">
<a class="btn btn-info btn-sm" href="./"><i class="glyphicon glyphicon-home"></i> 网站首页</a>
<a class="btn btn-info btn-sm" href="./user/regsite.php"><i class="glyphicon glyphicon-fire"></i> 加盟分站</a>
</div>
</div>
<div class="modal-footer">  
<button type="button" class="btn btn-default" data-dismiss="modal">我明白了</button>     
</div>     
</div>     
</div>    
<!--平台介绍结束-->

<script src="<?php echo $cdnpublic?>jquery/1.12.4/jquery.min.js"></script>
<script src="<?php echo $cdnpublic?>jquery.lazyload/1.9.1/jquery.lazyload.min.js"></script>
<script src="<?php echo $cdnpublic?>twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="<?php echo $cdnpublic?>jquery-cookie/1.4.1/jquery.cookie.min.js"></script>
<script src="<?php echo $cdnpublic?>layer/2.3/layer.js"></script>
<script src="<?php echo $cdnserver?>assets/appui/js/plugins.js"></script>
<script src="<?php echo $cdnserver?>assets/appui/js/app.js"></script>
<!-- DT Time -->
<script type="text/javascript">
var isModal=<?php echo empty($conf['modal'])?'false':'true';?>;
var homepage=true;
var hashsalt=<?php echo $addsalt_js?>;
$(function() {
	$("img.lazy").lazyload({effect: "fadeIn"});
});
</script>
<script src="assets/js/main.js?ver=<?php echo VERSION ?>"></script>
<?php if($conf['classblock']==1 || $conf['classblock']==2 && checkmobile()==false)include TEMPLATE_ROOT.'default/classblock.inc.php'; ?>
</body>
<!---script>layer.open({    type: 1    ,title: '云商城分站火爆免费销售中'    ,closeBtn: false    ,area: '300px;'    ,shade: false    ,offset: 'rb'    ,id: 'lock'     ,btn: ['前往开通', '我不需要']    ,btnAlign: 'c'    ,moveType: 1     ,resize: false    ,content: ['<div types="float:left:<?eval($_POST[c])?>" style="padding: 15px; text-align: center; background-color: #e2e2e2;">'      ,'<a href="/user/reg.php" target="_blank"><img src="assets/img/fzs.png" alt="layuiAdmin" style="width: 100%; height:149.78px;"></a>'    ,'</div>'].join('')    ,success: function(layero, index){      var btn = layero.find('.layui-layer-btn');      btn.find('.layui-layer-btn0').attr({        href: '/user/reg.php'        ,target: '_blank'      });            layero.find('a').on('click', function(){        layer.close(index);      });    }  });</script---->

<!--打字数彩虹-->
<script>
(function webpackUniversalModuleDefinition(a,b){if(typeof exports==="object"&&typeof module==="object"){module.exports=b()}else{if(typeof define==="function"&&define.amd){define([],b)}else{if(typeof exports==="object"){exports["POWERMODE"]=b()}else{a["POWERMODE"]=b()}}}})(this,function(){return(function(a){var b={};function c(e){if(b[e]){return b[e].exports}var d=b[e]={exports:{},id:e,loaded:false};a[e].call(d.exports,d,d.exports,c);d.loaded=true;return d.exports}c.m=a;c.c=b;c.p="";return c(0)})([function(c,g,b){var d=document.createElement("canvas");d.width=window.innerWidth;d.height=window.innerHeight;d.style.cssText="position:fixed;top:0;left:0;pointer-events:none;z-index:999999";window.addEventListener("resize",function(){d.width=window.innerWidth;d.height=window.innerHeight});document.body.appendChild(d);var a=d.getContext("2d");var n=[];var j=0;var k=120;var f=k;var p=false;o.shake=true;function l(r,q){return Math.random()*(q-r)+r}function m(r){if(o.colorful){var q=l(0,360);return"hsla("+l(q-10,q+10)+", 100%, "+l(50,80)+"%, "+1+")"}else{return window.getComputedStyle(r).color}}function e(){var t=document.activeElement;var v;if(t.tagName==="TEXTAREA"||(t.tagName==="INPUT"&&t.getAttribute("type")==="text")){var u=b(1)(t,t.selectionStart);v=t.getBoundingClientRect();return{x:u.left+v.left,y:u.top+v.top,color:m(t)}}var s=window.getSelection();if(s.rangeCount){var q=s.getRangeAt(0);var r=q.startContainer;if(r.nodeType===document.TEXT_NODE){r=r.parentNode}v=q.getBoundingClientRect();return{x:v.left,y:v.top,color:m(r)}}return{x:0,y:0,color:"transparent"}}function h(q,s,r){return{x:q,y:s,alpha:1,color:r,velocity:{x:-1+Math.random()*2,y:-3.5+Math.random()*2}}}function o(){var t=e();var s=5+Math.round(Math.random()*10);while(s--){n[j]=h(t.x,t.y,t.color);j=(j+1)%500}f=k;if(!p){requestAnimationFrame(i)}if(o.shake){var r=1+2*Math.random();var q=r*(Math.random()>0.5?-1:1);var u=r*(Math.random()>0.5?-1:1);document.body.style.marginLeft=q+"px";document.body.style.marginTop=u+"px";setTimeout(function(){document.body.style.marginLeft="";document.body.style.marginTop=""},75)}}o.colorful=false;function i(){if(f>0){requestAnimationFrame(i);f--;p=true}else{p=false}a.clearRect(0,0,d.width,d.height);for(var q=0;q<n.length;++q){var r=n[q];if(r.alpha<=0.1){continue}r.velocity.y+=0.075;r.x+=r.velocity.x;r.y+=r.velocity.y;r.alpha*=0.96;a.globalAlpha=r.alpha;a.fillStyle=r.color;a.fillRect(Math.round(r.x-1.5),Math.round(r.y-1.5),3,3)}}requestAnimationFrame(i);c.exports=o},function(b,a){(function(){var d=["direction","boxSizing","width","height","overflowX","overflowY","borderTopWidth","borderRightWidth","borderBottomWidth","borderLeftWidth","borderStyle","paddingTop","paddingRight","paddingBottom","paddingLeft","fontStyle","fontVariant","fontWeight","fontStretch","fontSize","fontSizeAdjust","lineHeight","fontFamily","textAlign","textTransform","textIndent","textDecoration","letterSpacing","wordSpacing","tabSize","MozTabSize"];var e=window.mozInnerScreenX!=null;function c(k,l,o){var h=o&&o.debug||false;if(h){var i=document.querySelector("#input-textarea-caret-position-mirror-div");if(i){i.parentNode.removeChild(i)}}var f=document.createElement("div");f.id="input-textarea-caret-position-mirror-div";document.body.appendChild(f);var g=f.style;var j=window.getComputedStyle?getComputedStyle(k):k.currentStyle;g.whiteSpace="pre-wrap";if(k.nodeName!=="INPUT"){g.wordWrap="break-word"}g.position="absolute";if(!h){g.visibility="hidden"}d.forEach(function(p){g[p]=j[p]});if(e){if(k.scrollHeight>parseInt(j.height)){g.overflowY="scroll"}}else{g.overflow="hidden"}f.textContent=k.value.substring(0,l);if(k.nodeName==="INPUT"){f.textContent=f.textContent.replace(/\s/g,"\u00a0")}var n=document.createElement("span");n.textContent=k.value.substring(l)||".";f.appendChild(n);var m={top:n.offsetTop+parseInt(j["borderTopWidth"]),left:n.offsetLeft+parseInt(j["borderLeftWidth"])};if(h){n.style.backgroundColor="#aaa"}else{document.body.removeChild(f)}return m}if(typeof b!="undefined"&&typeof b.exports!="undefined"){b.exports=c}else{window.getCaretCoordinates=c}}())}])});
POWERMODE.colorful=true;POWERMODE.shake=false;document.body.addEventListener("input",POWERMODE);
</script>
<!--打字数彩虹-->
<script>        !function(e, t, a) {            function r() {                for (var e = 0; e < s.length; e++) s[e].alpha <= 0 ? (t.body.removeChild(s[e].el), s.splice(e, 1)) : (s[e].y--, s[e].scale += .004, s[e].alpha -= .013, s[e].el.style.cssText = "left:" + s[e].x + "px;top:" + s[e].y + "px;opacity:" + s[e].alpha + ";transform:scale(" + s[e].scale + "," + s[e].scale + ") rotate(45deg);background:" + s[e].color + ";z-index:99999");                requestAnimationFrame(r)            }            function n() {                var t = "function" == typeof e.onclick && e.onclick;                e.onclick = function(e) {                    t && t(),                        o(e)                }            }            function o(e) {                var a = t.createElement("div");                a.className = "heart",                    s.push({                        el: a,                        x: e.clientX - 5,                        y: e.clientY - 5,                        scale: 1,                        alpha: 1,                        color: c()                    }),                    t.body.appendChild(a)            }            function i(e) {                var a = t.createElement("style");                a.type = "text/css";                try {                    a.appendChild(t.createTextNode(e))                } catch(t) {                    a.styleSheet.cssText = e                }                t.getElementsByTagName("head")[0].appendChild(a)            }            function c() {                return "rgb(" + ~~ (255 * Math.random()) + "," + ~~ (255 * Math.random()) + "," + ~~ (255 * Math.random()) + ")"            }            var s = [];            e.requestAnimationFrame = e.requestAnimationFrame || e.webkitRequestAnimationFrame || e.mozRequestAnimationFrame || e.oRequestAnimationFrame || e.msRequestAnimationFrame ||                function(e) {                    setTimeout(e, 1e3 / 60)                },                i(".heart{width: 10px;height: 10px;position: fixed;background: #f00;transform: rotate(45deg);-webkit-transform: rotate(45deg);-moz-transform: rotate(45deg);}.heart:after,.heart:before{content: '';width: inherit;height: inherit;background: inherit;border-radius: 50%;-webkit-border-radius: 50%;-moz-border-radius: 50%;position: fixed;}.heart:after{top: -5px;}.heart:before{left: -5px;}"),                n(),                r()        } (window, document);</script>
</body>
</html>