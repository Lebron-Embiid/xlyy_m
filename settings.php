<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>设置</title>
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
</head>
<body>
	<div class="header_back">
		<a href="javascript:history.go(-1);" class="left_back"><img src="images/back.png" alt=""></a>
		<h2>设置</h2>
	</div>
	<div class="mt80"></div>
	<div class="person_nav_box settings_box mb20">
		<div class="pn_item">
			<a href="account.php">
				<p>帐号与安全</p>
				<p><img src="images/three.png" class="three" alt=""></p>
			</a>
		</div>
	</div>
	<div class="person_nav_box settings_box">
		<div class="pn_item">
			<a href="feedback.php">
				<p>意见反馈</p>
				<p><img src="images/three.png" class="three" alt=""></p>
			</a>
		</div>
		<div class="pn_item">
			<a href="report.php">
				<p>举报不良信息</p>
				<p><img src="images/three.png" class="three" alt=""></p>
			</a>
		</div>
		<div class="pn_item">
			<a href="about.php">
				<p>关于</p>
				<p><img src="images/three.png" class="three" alt=""></p>
			</a>
		</div>
	</div>
	<a href="javascript:void(0);" class="login_out">退出登录</a>
	<div class="modal_shadow"></div>
	<div class="modal_box login_out_modal">
		<p style="margin: .6rem 0 .4rem;text-align: center;font-size: .22rem;">您是否确认退出？</p>
		<div class="more_btn_box">
			<a href="javascript:void(0);" class="login_out_btn active">确定</a>
			<a href="javascript:void(0);" class="modal_cancle_btn">取消</a>
		</div>
	</div>
	<?php include "footer.php"; ?>
</body>
<script src="js/common.js"></script>
<script>
	$(function(){
		var modal = new LModal();
		$("body").on("click",".login_out",function(){
			modal.showModal(".login_out_modal");
		})
		$(".login_out_btn").click(function(){
			modal.cancleModal(".modal_box");
			window.location = "login.php";
		})
	})
</script>
</html>