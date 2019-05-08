<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>举报不良信息</title>
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
		.reason_select label{
			color: #545454;
			font-size: .2rem;
			padding: .2rem .25rem;
		}
		.report_box{
			padding-top: .5rem;
		}
		.reason_select{
			margin-bottom: .5rem;
		}
		.feed_item textarea{
			border: 0;
		}
		.upload_item{
			background: #fff;
			border-top: 1px solid #F2F2F2;
		}
		.upload_item h4{
			padding-top: .4rem;
			border-bottom: 1px solid #F2F2F2;
		}
		.feed_upload_photo{
			padding: .4rem .25rem;
		}
	</style>
</head>
<body>
	<div class="header_back">
		<a href="javascript:history.go(-1);" class="left_back"><img src="images/back.png" alt=""></a>
		<h2>举报不良信息</h2>
		<a href="" class="right_word save_btn">保存</a>
	</div>
	<div class="mt80"></div>
	<div class="feedback_box report_box">
		<div class="reason_select">
			<label for="report1"><input type="checkbox" name="report[]" id="report1">我的-举报不良信息</label>
			<label for="report2"><input type="checkbox" name="report[]" id="report2">欺诈（酒托，饭托等）</label>
			<label for="report3"><input type="checkbox" name="report[]" id="report3">涉嫌政治或暴力内容</label>
			<label for="report4"><input type="checkbox" name="report[]" id="report4">恶意骚扰，不文明行为</label>
			<label for="report5"><input type="checkbox" name="report[]" id="report5">淫秽色情</label>
			<label for="report6"><input type="checkbox" name="report[]" id="report6">其他</label>
		</div>
		<div class="feed_item" style="margin-bottom: .5rem;">
			<h4>备注</h4>
			<textarea name="remark" id="" placeholder="请填写备注" cols="30" rows="10"></textarea>
		</div>
		<div class="feed_item upload_item">
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
	</div>
	<div class="modal_shadow"></div>
	<div class="modal_box del_photo_modal fix">
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