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
		<a href="" class="right_word">提交</a>
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
				<input type="text" name="username" placeholder="请在此输入您的真实姓名">
				<img src="images/clear.png" class="clear_input" alt="">
			</div>
			<div class="form_item">
				<span>身份证号</span>
				<input type="text" name="id_card" placeholder="请在此输入您的身份证号">
				<img src="images/clear.png" class="clear_input" alt="">
			</div>
		</div>
		<h5>您的信息提交之后，我们会在24小时之内审核！</h5>
	</div>
	<?php include "footer.php"; ?>
</body>
<script>
	$(function(){
		function run(input_file,get_data){
	        /*input_file：文件按钮对象*/
	        /*get_data: 转换成功后执行的方法*/
	        if ( typeof(FileReader) === 'undefined' ){
	            alert("抱歉，你的浏览器不支持 FileReader，不能将图片转换为Base64，请使用现代浏览器操作！");
	        } else {
	            try{
	                /*图片转Base64 核心代码*/
	                var file = input_file.files[0];
	                //这里我们判断下类型如果不是图片就返回 去掉就可以上传任意文件
	                if(!/image\/\w+/.test(file.type)){
	                    alert("请确保文件为图像类型");
	                    return false;
	                }
	                var reader = new FileReader();
	                reader.onload = function(){
	                    get_data(this.result);
	                }
	                reader.readAsDataURL(file);
	            }catch (e){
	                alert('图片转Base64出错啦！'+ e.toString())
	            }
	        }
	    }
		$(".name_photo_box").on("change",".file",function(){
			var _this = this;
			run(_this, function (data) {
				$(_this).siblings(".ub_photo").attr('src',data);
			});
		})
		
		$(".form_box").on("click",".clear_input",function(){
			$(this).siblings("input").val("");
		})
	})
</script>
</html>