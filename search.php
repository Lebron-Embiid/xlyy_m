<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>搜索</title>
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
	<style>
		a.submit_btn{
			width: 3.3rem;
			height: .85rem;
			line-height: .85rem;
			background: #bd2f2f;
			font-size: .28rem;
			margin-top: .2rem;
		}
	</style>
</head>
<body>
	<div class="header_back">
		<a href="javascript:history.go(-1);" class="left_back"><img src="images/back.png" alt=""></a>
		<h2>搜索</h2>
	</div>
	<div class="mt80"></div>
	<div class="basic_info_box search_box">
		<!-- 女会员 -->
		<!-- <div class="bi_select_box">
			<div class="bis_item">
				<span>所在地</span>
				<div>
					
				</div>
			</div>
			<div class="bis_item">
				<span>年龄</span>
				<div>
					<select name="age" id="">
						<option value="">25</option>
					</select>
				</div>
			</div>
			<div class="bis_item">
				<span>身高</span>
				<div>
					<select name="height" id="">
						<option value="">170cm</option>
					</select>
				</div>
			</div>
			<div class="bis_item">
				<span>体重</span>
				<div>
					<select name="weight" id="">
						<option value="">60kg</option>
					</select>
				</div>
			</div>
			<div class="bis_item">
				<span>学历</span>
				<div>
					<select name="education" id="">
						<option value="">大专</option>
					</select>
				</div>
			</div>
			<div class="bis_item">
				<span>职业</span>
				<div>
					<select name="job" id="">
						<option value="">企业高管</option>
					</select>
				</div>
			</div>
			<div class="bis_item">
				<span>是否吸烟</span>
				<div>
					<select name="job" id="">
						<option value="">是</option>
					</select>
				</div>
			</div>
			<div class="bis_item">
				<span>是否喝酒</span>
				<div>
					<select name="job" id="">
						<option value="">是</option>
					</select>
				</div>
			</div>
			<div class="bis_item">
				<span>年收入</span>
				<div>
					<select name="smoke" id="">
						<option value="">50-100万</option>
					</select>
				</div>
			</div>
			<div class="bis_item">
				<span>净值</span>
				<div>
					<select name="drink" id="">
						<option value="">1000万+</option>
					</select>
				</div>
			</div>
		</div> -->
		<!-- 男会员 -->
		<div class="bi_select_box">
			<div class="bis_item">
				<span>所在地</span>
				<div>
					
				</div>
			</div>
			<div class="bis_item">
				<span>年龄</span>
				<div>
					<select name="age" id="">
						<option value="">25</option>
					</select>
				</div>
			</div>
			<div class="bis_item">
				<span>身高</span>
				<div>
					<select name="height" id="">
						<option value="">170cm</option>
					</select>
				</div>
			</div>
			<div class="bis_item">
				<span>体重</span>
				<div>
					<select name="weight" id="">
						<option value="">60kg</option>
					</select>
				</div>
			</div>
			<div class="bis_item">
				<span>学历</span>
				<div>
					<select name="education" id="">
						<option value="">大专</option>
					</select>
				</div>
			</div>
			<div class="bis_item">
				<span>职业</span>
				<div>
					<select name="job" id="">
						<option value="">企业高管</option>
					</select>
				</div>
			</div>
			<div class="bis_item">
				<span>发色</span>
				<div>
					<select name="job" id="">
						<option value="">黑色</option>
					</select>
				</div>
			</div>
			<div class="bis_item">
				<span>发型</span>
				<div>
					<select name="job" id="">
						<option value="">直发</option>
					</select>
				</div>
			</div>
			<div class="bis_item">
				<span>是否吸烟</span>
				<div>
					<select name="smoke" id="">
						<option value="">不抽，但不反感抽烟</option>
					</select>
				</div>
			</div>
			<div class="bis_item">
				<span>是否喝酒</span>
				<div>
					<select name="drink" id="">
						<option value="">几乎每天小酌，但不喝醉</option>
					</select>
				</div>
			</div>
		</div>
		<div class="search_label_box">
			<h4>身材标签<span>（最多选择3个）</span></h4>
			<ul class="search_ul figure_ul">
				<li>温柔和婉</li>
				<li>活泼可爱</li>
				<li>善解人意</li>
				<li>善解人意</li>
				<li>温柔和婉</li>
				<li>活泼可爱</li>
				<li>善解人意</li>
				<li>善解人意</li>
			</ul>
			<h4>性格标签<span>（最多选择3个）</span></h4>
			<ul class="search_ul char_ul">
				<li>温柔和婉</li>
				<li>活泼可爱</li>
				<li>善解人意</li>
				<li>善解人意</li>
				<li>温柔和婉</li>
				<li>活泼可爱</li>
				<li>善解人意</li>
				<li>善解人意</li>
			</ul>
		</div>
		<div class="search_ser_type">
			<span>服务类型</span>
			<div>
				<label for="type1"><input type="checkbox" name="type" id="type1">叫醒服务</label>
				<label for="type2"><input type="checkbox" name="type" id="type2">假扮女友</label>
				<label for="type3"><input type="checkbox" name="type" id="type3">旅游陪伴</label>
				<label for="type4"><input type="checkbox" name="type" id="type4">出席商务场合</label>
			</div>
		</div>
		<a href="result.php" class="submit_btn">搜索</a>
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
		var figure_arr = [];
		var char_arr = [];
		$(".figure_ul").on("click","li",function(){
			var idx = $(this).index();
			if($(this).hasClass("active")){
				$(this).removeClass("active");
				figure_arr.pop();
			}else{
				if(figure_arr.length < 3){
					figure_arr.push(idx);
					$(this).addClass("active");
				}
			}
		})
		$(".char_ul").on("click","li",function(){
			var idx = $(this).index();
			if($(this).hasClass("active")){
				$(this).removeClass("active");
				char_arr.pop();
			}else{
				if(char_arr.length < 3){
					char_arr.push(idx);
					$(this).addClass("active");
				}
			}
		})
		
		var modal = new LModal();
		$(".save_btn").click(function(){
			modal.showModal(".must_modal");
		})
	})
</script>
</html>