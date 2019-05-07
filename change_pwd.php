<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>修改密码</title>
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
		.form_box{
			border-bottom: 0;
		}
		.form_box .form_item{
			background: #fff;
		}
		.form_box .form_item span{
			width: 30%;
		}
		.form_box .form_item .input{
			width: 40%;
		}
	</style>
</head>
<body>
	<div class="header_back">
		<a href="javascript:history.go(-1);" class="left_back"><img src="images/back.png" alt=""></a>
		<h2>修改密码</h2>
		<a href="javascript:void(0);" class="right_word save_btn">保存</a>
	</div>
	<div class="mt80"></div>
	<div class="form_box" style="padding-top: .35rem;">
		<div class="form_item">
			<span>当前密码</span>
			<input type="password" class="input" name="old_pwd" placeholder="请输入当前密码">
			<div class="right_click"><img src="images/clear.png" class="clear_input" alt=""></div>
		</div>
		<div class="form_item">
			<span>新密码</span>
			<input type="password" class="input" name="new_pwd" placeholder="新密码">
			<div class="right_click"><img src="images/clear.png" class="clear_input" alt=""></div>
		</div>
		<div class="form_item">
			<span>再次输入新密码</span>
			<input type="password" class="input" name="again_pwd" placeholder="确认新密码">
			<div class="right_click"><img src="images/clear.png" class="clear_input" alt=""></div>
		</div>
	</div>
	<?php include "footer.php"; ?>
</body>
<script src="js/common.js"></script>
</html>