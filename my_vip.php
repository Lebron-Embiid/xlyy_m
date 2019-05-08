<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>我的会员信息</title>
	<meta name="keywords" content="关键词">
	<meta name="description" content="网站描述">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no" />
	<meta name="renderer" content="webkit">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/common.css">
	<link rel="stylesheet" href="css/person.css">
	<script src="js/rem.js"></script>
	<script src="js/jquery-2.1.4.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</head>
<body>
	<div class="header_back">
		<a href="javascript:history.go(-1);" class="left_back"><img src="images/back.png" alt=""></a>
		<h2>我的会员信息</h2>
		<a href="service_introduce.php" class="right_img"><img src="images/warning.png" alt=""></a>
	</div>
	<div class="mt80"></div>
	<div class="my_vip_mess">
		<div class="card_box">
			<img src="images/vip_card.jpg" alt="">
			<div class="card_layer">
				<p>首次开通：2017-11-25</p>
				<p>有效期至：2019-12-30</p>
			</div>
		</div>
		<ul>
			<li class="active"><a href="">会员续费</a></li>
			<li><a href="">会员升级</a></li>
		</ul>
	</div>
	<div class="my_privilege_box">
		<h4>我的特权</h4>
		<ul class="privilege_ul">
			<li><img src="images/my_privilege1.png" alt=""><p>闹钟服务</p></li>
			<li><img src="images/my_privilege2.png" alt=""><p>假扮女友</p></li>
			<li><img src="images/my_privilege3.png" alt=""><p>旅游陪伴</p></li>
			<li><img src="images/my_privilege4.png" alt=""><p>商务场合</p></li>
			<li><img src="images/my_privilege5.png" alt=""><p>更多服务</p></li>
		</ul>
		<ul>
			<li><img src="images/my_tequan1.png" alt=""><p>浏览</p></li>
			<li><img src="images/my_tequan2.png" alt=""><p>无限关注</p></li>
			<li><img src="images/my_tequan3.png" alt=""><p>搜索</p></li>
			<li><img src="images/my_tequan4.png" alt=""><p>转发</p></li>
			<li><img src="images/my_tequan5.png" alt=""><p>红包</p></li>
		</ul>
		<ul>
			<li><img src="images/my_tequan6.png" alt=""><p>谁看过我</p></li>
			<li><img src="images/my_tequan7.png" alt=""><p>我的粉丝</p></li>
			<li><img src="images/my_tequan8.png" alt=""><p>上传照片</p></li>
			<li><img src="images/my_tequan9.png" alt=""><p>投诉</p></li>
			<li><img src="images/my_tequan10.png" alt=""><p>充值提现</p></li>
		</ul>
	</div>
	<?php include "footer.php"; ?>
</body>
</html>