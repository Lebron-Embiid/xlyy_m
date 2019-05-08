<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>短信验证登录</title>
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
		.modal_box{
			padding: 0 .3rem .9rem;
		}
	</style>
</head>
<body>
	<div class="header_back">
		<a href="javascript:history.go(-1);" class="left_back"><img src="images/back.png" alt=""></a>
		<h2>短信验证登录</h2>
	</div>
	<div class="mt80"></div>
	<div class="login_box">
		<div class="login_form">
			<form action="person.php" method="post">
				<div class="login_item">
					<input type="number" class="input phone_txt" required name="phone" placeholder="请输入手机号码">
					<div class="right_click"><img src="images/clear.png" class="clear_input" alt=""></div>
				</div>
				<div class="login_item">
					<input type="text" class="input" name="code" required placeholder="请输入验证码">
					<div class="right_click"><input type="button" value="获取验证码" class="getCode"></input></div>
				</div>
				<p class="warn_till"><img src="images/warning1.png" alt="">未注册过的手机会自动创建为新账户</p>
				<input type="submit" value="登录" class="login_btn" style="margin-bottom: .2rem;">
				<p class="forget" style="justify-content: flex-end;"><a href="login.php">帐号密码登录</a></p>
			</form>
		</div>
	</div>
	<div class="modal_shadow1"></div>
	<div class="modal_box select_sex_modal fix">
		<p style="margin: .7rem 0;text-align: center;font-size: .24rem;">我是</p>
		<ul class="select_box">
			<li class="active">
				<img src="images/man.png" alt="">
				<a href="javascript:void(0);">男<input type="radio" name="sex[]" id=""></a>
			</li>
			<li>
				<img src="images/woman.png" alt="">
				<a href="javascript:void(0);">女<input type="radio" name="sex[]" id=""></a>
			</li>
		</ul>
	</div>
</body>
<script src="js/modal.js"></script>
<script>
	$(function(){
		var modal = new LModal();
		setTimeout(function(){
			modal.showModal(".select_sex_modal");
		},500)
		$(".select_box").on("click","li",function(){
			modal.cancleModal(".select_sex_modal");
		})
	})
</script>
</html>