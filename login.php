<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>登录</title>
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
</head>
<body>
	<div class="login_bg">
		<img src="images/login_bg.jpg" alt="">
	</div>
	<div class="login_box">
		<div class="login_form top">
			<form action="person.php" method="post">
				<img src="images/logo.png" class="logo_img" alt="">
				<div class="login_item">
					<input type="number" class="input phone_txt" name="phone" placeholder="请输入手机号码">
					<div class="right_click"><img src="images/clear.png" class="clear_input" alt=""></div>
				</div>
				<div class="login_item">
					<input type="password" class="input" name="password" placeholder="密码">
					<div class="right_click"><img src="images/eye.png" class="clear_eye" alt=""></div>
				</div>
				<div class="remember_box">
					<label for="remember"><input type="checkbox" name="remember" id="remember">记住我</label>
					<a href="register.php?sex=0" style="color: #777;"><span>新用户注册</span></a>
				</div>
				<input type="submit" value="登录" class="login_btn">
				<p class="forget"><a href="forget_pwd.php">忘记密码</a><a href="login_phone.php">短信验证码登录</a></p>
			</form>
		</div>
	</div>
</body>
</html>