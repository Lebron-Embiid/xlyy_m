<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>我的照片</title>
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
		.feedback_box{
			padding: 0 0 .5rem;
		}
		.upload_item{
			background: #fff;
			border-top: 1px solid #F2F2F2;
			margin-bottom: 0;
		}
		.upload_item h4{
			padding-top: .2rem;
			border-bottom: 1px solid #F2F2F2;
		}
		.upload_item h4 span{
			color: #606060;
			font-size: .22rem;
			margin: 0 .2rem;
		}
		.upload_item h4 a{
			color: #be0020;
			font-size: .22rem;
		}
		.upload_item h4 img{
			display: inline-block;
			width: .4rem;
			height: .4rem;
			border-radius: 50%;
			margin-right: .15rem;
		}
		.feed_upload_photo{
			padding: .4rem .25rem;
		}
		a.submit_btn{
			width: 35%;
			font-size: .24rem;
			height: .75rem;
			line-height: .75rem;
			background: #be0020;
			margin: .3rem auto;
		}
		.avatar_photo .code_img{
			position: absolute;
			max-width: 100%;
			max-height: 100%;
		}
		.avatar_del_box{
			width: 1.68rem;
		}
		.avatar_del{
			display: block;
			width: .20rem;
			height: .27rem;
			margin: 0 auto .2rem;
		}
	</style>
</head>
<body>
	<div class="header_back">
		<a href="javascript:history.go(-1);" class="left_back"><img src="images/back.png" alt=""></a>
		<h2>我的照片</h2>
	</div>
	<div class="mt80"></div>
	<div class="feedback_box report_box my_photo_box">
		<div class="feed_item upload_item">
			<h4>头像<span>您的头像会被所有人看到。</span></h4>
			<div class="feed_upload_photo">
				<ul class="photo_ul">
					<li class="add_photo avatar_photo">
						<img src="" class="code_img" alt="">
						<input type="file" id="file" accept="image/*" />
						<img src="images/camera.png" class="camera_img"/>
					</li>
				</ul>
				<div class="avatar_del_box"><img src="images/delete.png" class="avatar_del" alt=""></div>
				<p style="color: #606060;font-size: .24rem;">图片尺寸需要大于100x100，最大不能超过10M。</p>
			</div>
		</div>
		<div class="feed_item upload_item" style="margin-top: .3rem;">
			<h4 style="border: 0;"><img src="images/avatar_ok.png" alt="">正确示范<a href="" style="margin-left: .2rem;">查看具体审核规范</a></h4>
			<div class="demo_box">
				<div class="demo_img">
					<img src="images/avatar_demo1.jpg" alt="">
					<img src="images/avatar_demo2.jpg" alt="">
					<img src="images/avatar_demo3.jpg" alt="">
				</div>
				<p>-确保五官清晰，正面、微侧皆可；</p>
				<p>-脸部半遮掩的照片也是允许的；</p>
			</div>
		</div>
		<div class="feed_item upload_item" style="margin-top: .3rem;">
			<h4 style="border: 0;"><img src="images/avatar_no.png" alt="">错误示范</h4>
			<div class="demo_box">
				<div class="demo_img">
					<img src="images/avatar_demo4.jpg" alt="">
					<img src="images/avatar_demo5.jpg" alt="">
					<img src="images/avatar_demo6.jpg" alt="">
				</div>
				<p>-没有头部过于裸露或不是本人均不可以；</p>
			</div>
		</div>
		<a href="javascript:void(0);" class="submit_btn avatar_btn">上传头像</a>
		<div class="feed_item upload_item">
			<h4>公开图片<span>您的公开图片会被所有的会员看到。</span></h4>
			<div class="feed_upload_photo">
				<ul class="photo_ul photo_ul1">
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
		<a href="javascript:void(0);" class="submit_btn public_btn">上传公开图片</a>
		<div class="feed_item upload_item">
			<h4>隐私图片<span>您的隐私图片只会被您授权的会员看到。</span><a href="auth_member.php">我授权的会员</a></h4>
			<div class="feed_upload_photo">
				<ul class="photo_ul photo_ul2">
					<li class="add_photo">
						<input type="file" id="file2" accept="image/*" />
						<img src="images/camera.png" class="camera_img"/>
					</li>
					<!-- <li>
						<img src="" class="img"/>
						<img src="images/delete.png" class="delete_icon delete_pic1" alt="">
					</li> -->
				</ul>
			</div>
		</div>
		<a href="javascript:void(0);" class="submit_btn screct_btn">上传私人图片</a>
	</div>
	<div class="modal_shadow"></div>
	<div class="modal_box del_photo_modal1 fix">
		<p style="margin: .6rem 0 .4rem;text-align: center;font-size: .22rem;">确定删除该图片？</p>
		<div class="more_btn_box">
			<a href="javascript:void(0);" class="modal_photo_btn1 active">确定</a>
			<a href="javascript:void(0);" class="modal_cancle_btn">取消</a>
		</div>
	</div>
	<div class="modal_box del_photo_modal2 fix">
		<p style="margin: .6rem 0 .4rem;text-align: center;font-size: .22rem;">确定删除该图片？</p>
		<div class="more_btn_box">
			<a href="javascript:void(0);" class="modal_photo_btn2 active">确定</a>
			<a href="javascript:void(0);" class="modal_cancle_btn">取消</a>
		</div>
	</div>
	<?php include "footer.php"; ?>
</body>
<script src="js/LocalResizeIMG.js"></script>
<script src="js/common.js"></script>
<script>
	$(function(){
		$(".avatar_btn").click(function(){
			$("#file").trigger("click");
		})
		$(".public_btn").click(function(){
			$("#file1").trigger("click");
		})
		$(".screct_btn").click(function(){
			$("#file2").trigger("click");
		})
		
		$(".avatar_del").click(function(){
			$(".avatar_photo").find(".code_img").attr("src","");
		})
		
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
				$('.photo_ul1').append(_str);
				var _i =  picArr1.length;
				picArr1[_i] = result.base64;
				console.log(picArr1)
			}
		});
		// 删除
		$(document).on('click', '.delete_pic1', function(event) {
			aa = $(this).parents(".pic_look").index();
			that = $(this).parents(".pic_look");
			modal.showModal(".del_photo_modal1");
		}); 
		$(".modal_photo_btn1").click(function(){
			picArr1.splice(aa,1);
			that.remove();
			console.log(picArr1);
			modal.cancleModal(".del_photo_modal1");
		})
		
		var picArr2 = new Array();// 存储图片
		var aa2 = "";
		var that2 = "";
		$('#file2').localResizeIMG({
			width:800,// 宽度
			quality: 1, // 压缩参数 1 不压缩 越小清晰度越低
			success: function (result) {
				var img = new Image();
				img.src = result.base64;
				var _str = "<li class='pic_look'><img src='"+img.src+"' class='img'/><img src='images/delete.png' class='delete_icon delete_pic2' alt=''></li>";
				$('.photo_ul2').append(_str);
				var _i =  picArr2.length;
				picArr2[_i] = result.base64;
				console.log(picArr2)
			}
		});
		// 删除
		$(document).on('click', '.delete_pic2', function(event) {
			aa2 = $(this).parents(".pic_look").index();
			that2 = $(this).parents(".pic_look");
			modal.showModal(".del_photo_modal2");
		}); 
		$(".modal_photo_btn2").click(function(){
			picArr2.splice(aa2,1);
			that2.remove();
			console.log(picArr2);
			modal.cancleModal(".del_photo_modal2");
		})
	})
</script>
</html>