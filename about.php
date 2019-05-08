<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>关于</title>
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
	<script src="js/modal.js"></script>
	<style>
		body{
			padding-top: .4rem;
		}
	</style>
</head>
<body>
	<div class="header_back">
		<a href="javascript:history.go(-1);" class="left_back"><img src="images/back.png" alt=""></a>
		<h2>关于</h2>
	</div>
	<div class="mt80"></div>
	<div class="person_nav_box settings_box mb40">
		<div class="pn_item">
			<a href="platform_agreement.php">
				<p>平台协议</p>
				<p><img src="images/three.png" class="three" alt=""></p>
			</a>
		</div>
		<div class="pn_item">
			<a href="user_agreement.php">
				<p>用户协议</p>
				<p><img src="images/three.png" class="three" alt=""></p>
			</a>
		</div>
		<div class="pn_item">
			<a href="privacy_statement.php">
				<p>隐私声明</p>
				<p><img src="images/three.png" class="three" alt=""></p>
			</a>
		</div>
	</div>
	<div class="person_nav_box settings_box">
		<div class="pn_item">
			<a href="contact.php">
				<p>联系我们</p>
				<p><img src="images/three.png" class="three" alt=""></p>
			</a>
		</div>
		<div class="pn_item">
			<a href="about_us.php">
				<p>关于我们</p>
				<p><img src="images/three.png" class="three" alt=""></p>
			</a>
		</div>
		<div class="pn_item">
			<a href="web_version.php">
				<p>网站版本</p>
				<p style="color: #9a9a9a;font-size: .2rem;">1.0.0</p>
			</a>
		</div>
	</div>
	<?php include "footer.php"; ?>
</body>
<script src="js/common.js"></script>
</html>