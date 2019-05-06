<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>我的粉丝</title>
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
		<h2>我的粉丝</h2>
	</div>
	<div class="mt80"></div>
	<div class="atten_box">
		<div class="atten_till">
			<div><span></span>我的粉丝12位</div>
		</div>
		<ul class="atten_list">
			<li class="active">
				<div class="left">
					<div class="img"><img src="images/atten_img1.jpg" alt=""></div>
					<div class="word">
						<h4>小情</h4>
						<h6>28、江苏省盐城市</h6>
						<p>期待奢华的生活方式</p>
					</div>
				</div>
				<div class="right">
					<a href="" class="def_atten">+关注</a>
				</div>
			</li>
			<div class="toLevel_box">
				<p>普通用户只能看到最近一位粉丝的信息，如果您希望查看更多，请升级</p>
				<a href="" class="top_vip_btn">立即升级</a>
			</div>
			<li>
				<div class="left">
					<div class="img"><img src="images/atten_img2.jpg" alt=""></div>
					<div class="word">
						<h4>小情</h4>
						<h6>------</h6>
						<p>------</p>
					</div>
				</div>
				<div class="right">
					<a href=""><img src="images/each.png" alt="">互相关注</a>
				</div>
			</li>
			<li>
				<div class="left">
					<div class="img"><img src="images/atten_img3.jpg" alt=""></div>
					<div class="word">
						<h4>小情</h4>
						<h6>------</h6>
						<p>------</p>
					</div>
				</div>
				<div class="right">
					<a href="" class="def_atten">+关注</a>
				</div>
			</li>
		</ul>
	</div>
	<?php include "footer.php"; ?>
</body>
</html>