<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>注册</title>
	<meta name="keywords" content="关键词">
	<meta name="description" content="网站描述">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no" />
	<meta name="renderer" content="webkit">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/common.css">
	<link rel="stylesheet" href="css/login.css">
	<script src="js/rem.js"></script>
	<script src="js/jquery-2.1.4.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/common.js"></script>
	<style>
		body{
			padding: .45rem .2rem;
		}
	</style>
</head>
<body>
	<div class="header_back">
		<a href="javascript:history.go(-1);" class="left_back"><img src="images/back.png" alt=""></a>
		<h2>新用户注册</h2>
	</div>
	<div class="mt80"></div>
	<div class="login_box">
		<div class="login_form">
			<form action="" method="post">
				<img src="images/logo.png" class="logo_img" alt="">
				<div class="sex_box">
					<span>我是</span>
					<div>
						<input type="radio" name="sex" value="0" <?php if($_GET['sex'] == 0){ echo 'checked'; } ?>>
						<input type="radio" name="sex" value="1" <?php if($_GET['sex'] == 1){ echo 'checked'; } ?>>
					</div>
				</div>
				<div class="login_item">
					<input type="text" class="input" name="username" placeholder="会员号">
					<div class="right_click"><img src="images/clear.png" class="clear_input" alt=""></div>
				</div>
				<div class="login_item">
					<input type="number" class="input phone_txt" name="phone" placeholder="手机号码">
					<div class="right_click"><img src="images/clear.png" class="clear_input" alt=""></div>
				</div>
				<div class="login_item">
					<input type="text" class="input" name="code" placeholder="请输入验证码">
					<div class="right_click"><input type="button" value="获取验证码" class="getCode"></input></div>
				</div>
				<div class="login_item">
					<input type="password" class="input" name="password" placeholder="密码">
					<div class="right_click"><img src="images/eye.png" class="clear_eye" alt=""></div>
				</div>
				<p style="color: #818181;font-size: .22rem;margin-bottom: 1rem;">密码必须同时包含字母和数字，至少8位</p>
				<div class="remember_box" style="margin-bottom: .2rem;">
					<label for="remember"><input type="checkbox" name="remember" id="remember">同意本网站的<a href="user_agreement.php">用户协议</a>，<a href="privacy_statement.php">隐私声明</a>和<a href="platform_agreement.php">平台协议</a></label>
				</div>
				<input type="submit" value="登录" class="login_btn" style="margin-bottom: .2rem;">
				<p class="forget" style="justify-content: flex-end;"><a href="login.php">已有账号？登录</a></p>
			</form>
		</div>
	</div>
</body>
</html>