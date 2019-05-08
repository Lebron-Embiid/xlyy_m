<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>实名认证</title>
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
			background: #fff;
		}
	</style>
</head>
<body>
	<div class="header_back">
		<a href="javascript:history.go(-1);" class="left_back"><img src="images/back.png" alt=""></a>
		<h2>实名认证</h2>
		<a href="javascript:void(0);" class="right_word">提交</a>
	</div>
	<div class="mt80"></div>
	<div class="name_auth_box">
		<ul class="name_photo_box">
			<li>
				<div class="upload_box">
					<img src="" class="ub_photo" alt="">
					<input type="file" class="file" accept="images/*" name="">
				</div>
				<p>身份证正面</p>
			</li>
			<li>
				<div class="upload_box">
					<img src="" class="ub_photo" alt="">
					<input type="file" class="file" accept="images/*" name="">
				</div>
				<p>身份证反面</p>
			</li>
			<li>
				<div class="upload_box">
					<img src="" class="ub_photo" alt="">
					<input type="file" class="file" accept="images/*" name="">
				</div>
				<p>清晰头像</p>
			</li>
		</ul>
		<div class="form_box">
			<div class="form_item">
				<span>真实姓名</span>
				<input type="text" class="input" name="username" placeholder="请在此输入您的真实姓名">
				<div class="right_click"><img src="images/clear.png" class="clear_input" alt=""></div>
			</div>
			<div class="form_item">
				<span>身份证号</span>
				<input type="text" class="input" name="id_card" placeholder="请在此输入您的身份证号">
				<div class="right_click"><img src="images/clear.png" class="clear_input" alt=""></div>
			</div>
		</div>
		<h5>您的信息提交之后，我们会在24小时之内审核！</h5>
	</div>
	<div class="modal_shadow"></div>
	<div class="modal_box">
		<div class="close_img"><img src="images/close.png" alt=""></div>
		<img src="images/kefu.png" class="img" alt="">
		<p>平台运营会在24小时之内审核您的身份信息。请您耐心等待！</p>
		<a href="" class="single_ok">确定</a>
	</div>
	<?php include "footer.php"; ?>
</body>
<script src="js/common.js"></script>
<script>
	$(function(){
		var modal = new LModal();
		$("body").on("click",".right_word",function(){
			modal.showModal(".modal_box");
		})
		$(".single_ok").click(function(){
			modal.cancleModal(".modal_box");
		})
	})
</script>
</html>