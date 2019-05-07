<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>关闭账号</title>
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
		.form_box p{
			color: #8f8f8f;
			font-size: .2rem;
			text-align: center;
		}
	</style>
</head>
<body>
	<div class="header_back">
		<a href="javascript:history.go(-1);" class="left_back"><img src="images/back.png" alt=""></a>
		<h2>关闭账号</h2>
		<a href="reason.php" class="right_word">关闭</a>
	</div>
	<div class="mt80"></div>
	<div class="form_box" style="padding-top: .35rem;">
		<div class="form_item">
			<span>手机号</span>
			<input type="password" class="input phone_txt" name="old_pwd" placeholder="请输入手机号码">
			<div class="right_click"><img src="images/clear.png" class="clear_input" alt=""></div>
		</div>
		<div class="form_item">
			<span>验证码</span>
			<input type="password" class="input" name="new_pwd" placeholder="请输入验证码">
			<div class="right_click"><input type="button" value="获取验证码" class="getCode"></input></div>
		</div>
		<div class="form_item">
			<span>密码</span>
			<input type="password" class="input" name="again_pwd" placeholder="6-16位字母/数字">
			<div class="right_click"><img src="images/eye.png" class="clear_eye" alt=""></div>
		</div>
		<p style="margin-top: .5rem;">关闭账号您的信息将不再被服务器保存并永久删除无法恢复，</p>
		<p>他人将无法再看到您的个人信息。</p>
		<p>请慎重考虑。当您再次登陆时，系统将自动开通您的账号。</p>
	</div>
	<?php include "footer.php"; ?>
</body>
<script src="js/common.js"></script>
</html>