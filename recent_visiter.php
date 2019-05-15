<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>最近来访</title>
	<meta name="keywords" content="关键词">
	<meta name="description" content="网站描述">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no" />
	<meta name="renderer" content="webkit">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/common.css">
	<link rel="stylesheet" href="css/index.css">
	<script src="js/rem.js"></script>
	<script src="js/jquery-2.1.4.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/modal.js"></script>
	<style>
		body{
			background: #f5f5f5;
		}
	</style>
</head>
<body>
	<ul class="find_common_nav">
		<li><a href="find.php">发现</a></li>
		<li class="active"><a href="recent_visiter.php">最近来访</a></li>
		<li><a href="find_attention.php">关注</a></li>
	</ul>
	<div class="mt80"></div>
	<div class="recent_visiter_box">
		<a href="vip_detail.php">
			<div class="visiter_item active">
				<div class="img"><img src="images/girl_avatar_img1.jpg" alt=""></div>
				<div class="right">
					<h5>小青<span>上午11:30</span></h5>
					<h6>28、江苏省盐城市</h6>
					<p>期待奢华的生活方式</p>
					<span class="see">小青查看了您的个人资料</span>
				</div>
			</div>
		</a>
		<div class="dont_look">
			<p>以下最近来访的会员只有<a href="buy_primary_vip.php">升级</a>才能看到哦~~</p>
		</div>
		<a href="javascript:void(0);">
			<div class="visiter_item active">
				<div class="img"><img src="images/girl_avatar_img1.jpg" alt=""></div>
				<div class="right">
					<h5>小青<span>上午11:30</span></h5>
					<h6>28、江苏省盐城市</h6>
					<p>期待奢华的生活方式</p>
					<span class="see">小青查看了您的个人资料</span>
				</div>
			</div>
		</a>
		<a href="javascript:void(0);">
			<div class="visiter_item">
				<div class="img"><img src="images/girl_avatar_img1.jpg" alt=""></div>
				<div class="right">
					<h5>小青<span>上午11:30</span></h5>
					<h6>28、江苏省盐城市</h6>
					<p>期待奢华的生活方式</p>
					<span class="see">小青查看了您的个人资料</span>
				</div>
			</div>
		</a>
	</div>
	<?php include "footer.php"; ?>
</body>
<script src="js/common.js"></script>
</html>