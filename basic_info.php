<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>基本信息</title>
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
		<h2>基本信息</h2>
		<a href="javascript:void(0);" class="right_word save_btn">保存</a>
	</div>
	<div class="mt80"></div>
	<div class="basic_info_box">
		<div class="basic_title"><span></span>标记*号的为必填项</div>
		<div class="bi_select_box">
			<div class="bis_item no_down">
				<span>会员名*</span>
				<div><input type="text" name="vip_name" id="vip_name"></div>
			</div>
			<div class="bis_item">
				<span>年龄*</span>
				<div>
					<select name="age" id="">
						<option value="">25</option>
					</select>
				</div>
			</div>
			<div class="bis_item">
				<span>所在地*</span>
				<div>
					
				</div>
			</div>
			<div class="bis_item">
				<span>职业*</span>
				<div>
					<select name="job" id="">
						<option value="">企业高管</option>
					</select>
				</div>
			</div>
			<div class="bis_item">
				<span>身高*</span>
				<div>
					<select name="height" id="">
						<option value="">170cm</option>
					</select>
				</div>
			</div>
			<div class="bis_item">
				<span>体重*</span>
				<div>
					<select name="weight" id="">
						<option value="">60kg</option>
					</select>
				</div>
			</div>
			<div class="bis_item">
				<span>学历*</span>
				<div>
					<select name="education" id="">
						<option value="">大专</option>
					</select>
				</div>
			</div>
			<div class="bis_item">
				<span>是否吸烟*</span>
				<div>
					<select name="smoke" id="">
						<option value="">不抽，但不反感抽烟</option>
					</select>
				</div>
			</div>
			<div class="bis_item">
				<span>是否喝酒*</span>
				<div>
					<select name="drink" id="">
						<option value="">几乎每天小酌，但不喝醉</option>
					</select>
				</div>
			</div>
			<div class="bis_item">
				<span>年收入*</span>
				<div>
					<select name="income" id="">
						<option value="">10-50万</option>
					</select>
				</div>
			</div>
			<div class="bis_item">
				<span>净值*</span>
				<div>
					<select name="net" id="">
						<option value="">1000万+</option>
					</select>
				</div>
			</div>
		</div>
	</div>
	<div class="modal_shadow"></div>
	<div class="modal_box must_modal fix">
		<div class="close_img"><img src="images/close.png" alt=""></div>
		<p style="text-align: center;margin: .8rem 0 .5rem;">‘<span id="must">所在地</span>’是必填选项，请填写！</p>
	</div>
	<?php include "footer.php"; ?>
</body>
<script src="js/common.js"></script>
<script>
	$(function(){
		var modal = new LModal();
		$(".save_btn").click(function(){
			var vip_name = $("#vip_name").val();
			if(vip_name == ""){
				$("#must").html($("#vip_name").parent().siblings().html());
				modal.showModal(".must_modal");
			}
		})
	})
</script>
</html>