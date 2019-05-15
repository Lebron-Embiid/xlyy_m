<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>我的置顶</title>
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
	<style>
		body{
			background: #fff;
		}
	</style>
</head>
<body>
	<div class="header_back">
		<a href="javascript:history.go(-1);" class="left_back"><img src="images/back.png" alt=""></a>
		<h2>我的置顶</h2>
	</div>
	<div class="mt80"></div>
	<div class="my_top_box">
		<ul class="top_nav_ul">
			<li>置顶</li>
			<li>是否置顶</li>
			<li>咨询</li>
		</ul>
		<ul class="top_content_ul">
			<li>
				<span>首页置顶</span>
				<p><img src="images/ok2.png" alt="">已置顶</p>
				<a href="">咨询</a>
			</li>
			<li>
				<span>搜索结果页面置顶</span>
				<p><img src="images/ok2.png" alt="">已置顶</p>
				<a href="">咨询</a>
			</li>
			<li>
				<span>发现页面置顶</span>
				<p><img src="images/ok1.png" alt="">未置顶</p>
				<a href="">咨询</a>
			</li>
		</ul>
	</div>
	<?php include "footer.php"; ?>
</body>
</html>