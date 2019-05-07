<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>意见反馈</title>
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
		a.submit_btn{
			margin-top: .4rem;
		}
		.modal_box{
			top: 35%;
		}
	</style>
</head>
<body>
	<div class="header_back">
		<a href="javascript:history.go(-1);" class="left_back"><img src="images/back.png" alt=""></a>
		<h2>意见反馈</h2>
	</div>
	<div class="mt80"></div>
	<div class="feedback_box">
		<div class="feed_item">
			<h4>反馈内容</h4>
			<textarea name="content" id="" placeholder="请详细描述您的问题" cols="30" rows="10"></textarea>
		</div>
		<div class="feed_item">
			<h4>联系方式</h4>
			<textarea name="contact" id="" placeholder="请留下您的联系方式，方便我们与您联系" cols="30" rows="10"></textarea>
		</div>
		<div class="feed_item">
			<h4>如有需要，请点击此处上传相关图片</h4>
			<div class="feed_upload_photo">
				<ul class="photo_ul">
					<li class="add_photo">
						<input type="file" id="file1" accept="image/*" />
						<img src="images/camera.png" class="camera_img"/>
					</li>
					<!-- <li>
						<img src="" class="img"/>
						<img src="images/delete.png" class="delete_icon delete_pic1" alt="">
					</li> -->
				</ul>
			</div>
		</div>
		<a href="" class="submit_btn">提交</a>
	</div>
	<div class="modal_shadow"></div>
	<div class="modal_box del_photo_modal">
		<p style="margin: .6rem 0 .4rem;text-align: center;font-size: .22rem;">确定删除该图片？</p>
		<div class="more_btn_box">
			<a href="javascript:void(0);" class="modal_photo_btn active">确定</a>
			<a href="javascript:void(0);" class="modal_cancle_btn">取消</a>
		</div>
	</div>
	<?php include "footer.php"; ?>
</body>
<script src="js/LocalResizeIMG.js"></script>
<script src="js/common.js"></script>
<script>
	$(function(){
		var modal = new LModal();
	
		var picArr1 = new Array();// 存储图片
		var aa = "";
		var that = "";
		$('#file1').localResizeIMG({
			width:800,// 宽度
			quality: 1, // 压缩参数 1 不压缩 越小清晰度越低
			success: function (result) {
				var img = new Image();
				img.src = result.base64;
				var _str = "<li class='pic_look'><img src='"+img.src+"' class='img'/><img src='images/delete.png' class='delete_icon delete_pic1' alt=''></li>";
				$('.photo_ul').append(_str);
				var _i =  picArr1.length;
				picArr1[_i] = result.base64;
				console.log(picArr1)
			}
		});
		// 删除
		$(document).on('click', '.delete_pic1', function(event) {
			aa = $(this).parents(".pic_look").index();
			that = $(this).parents(".pic_look");
			modal.showModal(".del_photo_modal");
		}); 
		$(".modal_photo_btn").click(function(){
			picArr1.splice(aa,1);
			that.remove();
			console.log(picArr1);
			modal.cancleModal(".del_photo_modal");
		})
	})
</script>
</html>