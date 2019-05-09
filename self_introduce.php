<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>自我介绍</title>
	<meta name="keywords" content="关键词">
	<meta name="description" content="网站描述">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no" />
	<meta name="renderer" content="webkit">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/swiper.min.css">
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/common.css">
	<link rel="stylesheet" href="css/person.css">
	<script src="js/rem.js"></script>
	<script src="js/jquery-2.1.4.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/modal.js"></script>
</head>
<body>
	<div class="header_back">
		<a href="javascript:history.go(-1);" class="left_back"><img src="images/back.png" alt=""></a>
		<h2>自我介绍</h2>
		<a href="javascript:void(0);" class="right_word save_btn">保存</a>
	</div>
	<div class="mt80"></div>
	<div class="basic_info_box self_introduce_box">
		<div class="basic_title"><span></span>一句话介绍*<i>5-25个字符</i></div>
		<div class="sib_text">
			<textarea name="one" id="one" style="height: 1.2rem;" placeholder="请填写一句话概括您自己" cols="30" rows="10"></textarea>
		</div>
		<div class="basic_title"><span></span>自我介绍</div>
		<div class="sib_text">
			<textarea name="self" id="" style="height: 4.9rem;" cols="30" rows="10"></textarea>
			<p>请输入25-250个字符</p>
		</div>
	</div>
	<div class="modal_shadow"></div>
	<div class="modal_box must_modal fix">
		<div class="close_img"><img src="images/close.png" alt=""></div>
		<p style="text-align: center;margin: .8rem 0 .5rem;">‘<span id="must">一句话介绍</span>’是必填选项，请填写！</p>
	</div>
	<?php include "footer.php"; ?>
</body>
<script src="js/common.js"></script>
<script>
	$(function(){
		var modal = new LModal();
		$(".save_btn").click(function(){
			var one = $("#one").val();
			if(one == ""){
				modal.showModal(".must_modal");
			}
		})
	})
</script>
</html>