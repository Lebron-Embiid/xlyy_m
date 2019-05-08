<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>忘记密码</title>
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
			width: 75%;
		}
	</style>
</head>
<body>
	<div class="header_back">
		<a href="javascript:history.go(-1);" class="left_back"><img src="images/back.png" alt=""></a>
		<h2>忘记密码</h2>
		<a href="javascript:void(0);" class="right_word save_btn">保存</a>
	</div>
	<div class="mt80"></div>
	<div class="form_box" style="padding-top: .35rem;">
		<div class="form_item">
			<input type="number" class="input phone_txt" name="phone" placeholder="输入注册时使用的手机号码">
			<div class="right_click"><img src="images/clear.png" class="clear_input" alt=""></div>
		</div>
		<div class="form_item">
			<input type="text" class="input" name="code" placeholder="输入验证码">
			<div class="right_click"><input type="button" value="获取验证码" class="getCode"></input></div>
		</div>
		<div class="form_item">
			<input type="password" class="input" name="password" placeholder="设置新密码">
			<div class="right_click"><img src="images/eye.png" class="clear_eye" alt=""></div>
		</div>
	</div>
	<div class="modal_shadow"></div>
	<div class="modal_box change_pwd_modal fix">
		<div class="close_img"><img src="images/close.png" alt=""></div>
		<p style="margin-top: .5rem;text-align: center;">亲爱的用户，您已经成功重置密码。</p>
		<a href="javascript:void(0);" class="single_ok">确定</a>
	</div>
</body>
<script src="js/common.js"></script>
<script>
	$(function(){
		var modal = new LModal();
		$("body").on("click",".save_btn",function(){
			modal.showModal(".change_pwd_modal");
		})
		$(".single_ok").click(function(){
			modal.cancleModal(".change_pwd_modal");
		})
	})
</script>
</html>