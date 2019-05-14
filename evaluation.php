<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>评价</title>
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
</head>
<body>
	<div class="header_back">
		<a href="javascript:history.go(-1);" class="left_back"><img src="images/back.png" alt=""></a>
		<h2>评价</h2>
		<a href="" class="right_word save_btn">提交</a>
	</div>
	<div class="mt80"></div>
	<div class="evaluation_box">
		<div class="modal_info_box">
			<img src="images/index_modal_img.jpg" class="avatar_img" alt="">
			<div class="modal_info_right">
				<p><img src="images/history_icon5.png" alt="">出席商务场合</p>
				<p>价格：1000元/天</p>
				<p>状态：已完成，未评价</p>
				<div>
					<img src="images/history_icon2.png" alt="">
					<p>
						<span>2018-12-17：00</span>
						<span>2018-12-18：00</span>
					</p>
				</div>
			</div>
		</div>
		<div class="eval_star_box">
			<div class="eval_star_item">
				<span>综合评价：</span>
				<ul id="star">
					<li><a href="javascript:;"></a></li>
					<li><a href="javascript:;"></a></li>
					<li><a href="javascript:;"></a></li>
					<li><a href="javascript:;"></a></li>
					<li><a href="javascript:;"></a></li>
				</ul>
			</div>
			<div class="eval_star_item">
				<span>评语：</span>
				<textarea name="eval" id="" placeholder="请在此填入您的评语 最多300字" cols="30" rows="10"></textarea>
			</div>
		</div>
	</div>
	<?php include "footer.php"; ?>
</body>
<script src="js/common.js"></script>
<script>
	$(function(){
		var i = iScore = iStar = 0;
		
		$("#star").on("mouseover","li",function(){
			fnPoint($(this).index()+1);
		})
		$("#star").on("mouseout","li",function(){
			fnPoint();
		})
		$("#star").on("click","li",function(){
			iStar = $(this).index()+1;
		})
		
		//评分处理
		function fnPoint(iArg){
			//分数赋值
			iScore = iArg || iStar;
			for (i = 0; i < $("#star li").length; i++){
				if(i < iScore){
					$("#star li").eq(i).attr("class","on");
				}else{
					$("#star li").eq(i).attr("class","");					
				}
			}	
		}
	})
</script>
</html>