<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>消息详情</title>
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
			background: #F5F5F5;
		}
	</style>
</head>
<body>
	<div class="header_back">
		<a href="javascript:history.go(-1);" class="left_back"><img src="images/back.png" alt=""></a>
		<h2>消息详情</h2>
	</div>
	<div class="mt80"></div>
	<div class="chat_box">
		<div class="chat_item active">
			<h6>2018-10-23 12:23</h6>
			<h4>系统消息</h4>
			<div class="chat_content">
				<div class="ci_left">
					<img src="images/window_avatar.jpg" alt="">
				</div>
				<div class="ci_right">
					<p>您是否允许会员”石磊“查看您的隐私照片？</p>
					<ul class="ci_btn">
						<li class="active"><a href="">同意</a></li>
						<li><a href="">拒绝</a></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="chat_item">
			<h6>2018-10-23 12:23</h6>
			<h4>凌苗苗</h4>
			<div class="chat_content">
				<div class="ci_left">
					<img src="images/message_img3.jpg" alt="">
				</div>
				<div class="ci_right">
					<p>亲，我希望能够看到你的隐私图片，可以吗？</p>
				</div>
			</div>
		</div>
		<div class="chat_item active">
			<h6>2018-10-23 12:23</h6>
			<h4>王总</h4>
			<div class="chat_content">
				<div class="ci_left">
					<img src="images/message_img1.jpg" alt="">
				</div>
				<div class="ci_right">
					<p>我已经同意您的申请查看隐私照片的申请。</p>
					<!-- <p>我已经拒绝您的申请查看隐私照片的申请。</p> -->
				</div>
			</div>
		</div>
	</div>
</body>
<script src="js/common.js"></script>
</html>