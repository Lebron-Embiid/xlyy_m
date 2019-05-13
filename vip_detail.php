<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>会员详情</title>
	<meta name="keywords" content="关键词">
	<meta name="description" content="网站描述">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no" />
	<meta name="renderer" content="webkit">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/swiper.min.css">
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/common.css">
	<link rel="stylesheet" href="css/index.css">
	<script src="js/rem.js"></script>
	<script src="js/jquery-2.1.4.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/swiper.min.js"></script>
	<script src="js/modal.js"></script>
	<style>
		body{
			background: #f5f5f5;
		}
		.header_back{
			background: rgba(0,0,0,.3);
			border: 0;
			transition: all .5s ease;
		}
		.header_back.active{
			background: rgba(0,0,0,1);
		}
	</style>
</head>
<body>
	<div class="header_back">
		<a href="javascript:history.go(-1);" class="left_back"><img src="images/back.png" alt=""></a>
		<h2>会员详情</h2>
		<div class="head_right">
			<img src="images/share.png" class="share_icon" alt="">
			<div class="menu_icon">
				<img src="images/menu.png" alt="">
				<ul>
					<li><a href="">投诉她</a></li>
					<li><a href="">屏蔽她</a></li>
				</ul>
			</div>
		</div>
	</div>
	<div class="fix_shadow_bg"></div>
	<div class="vip_detail_banner">
		<img src="images/vip_detail_banner.jpg" class="img_bg" alt="">
		<div class="vip_detail_layer">
			<div class="left">
				<ul>
					<li><img src="images/vip_banner_icon1.png" alt="">女<span>85后</span></li>
					<li><img src="images/vip_banner_icon2.png" alt="">深圳市</li>
					<li><img src="images/vip_banner_icon2.png" alt="">关注4</li>
				</ul>
				<p>我的成功男士，你在哪里？</p>
			</div>
			<div class="right">
				<a href="">+关注</a>
				<!-- <a href="" class="active">已关注</a> -->
			</div>
		</div>
	</div>
	<div class="vip_detail_content">
		<div class="vdc_content_box">
			<h4>最近活动</h4>
			<ul class="vcb_list">
				<li><div class="vl_left"><img src="images/vip_active_icon1.png" alt="">会员注册日期</div><div class="vl_right">2019-03-22<div></li>
				<li><div class="vl_left"><img src="images/vip_active_icon1.png" alt="">上次登录日期</div><div class="vl_right">3天前</div></li>
				<li><div class="vl_left"><img src="images/vip_active_icon2.png" alt="">预约成功次数</div><div class="vl_right">15</div></li>
				<li><div class="vl_left"><img src="images/vip_active_icon3.png" alt="">预约失信次数</div><div class="vl_right">0</div></li>
				<li><div class="vl_left"><img src="images/vip_active_icon1.png" alt="">综合评价</div><div class="vl_right"><img src="images/star.png" class="star_icon" alt=""><img src="images/star.png" class="star_icon" alt=""><img src="images/star.png" class="star_icon" alt=""><img src="images/star.png" class="star_icon" alt=""><img src="images/star.png" class="star_icon" alt=""></div></li>
			</ul>
		</div>
		<div class="vdc_content_box">
			<h4>个人服务</h4>
			<ul class="vcb_service">
				<li>
					<div class="vs_left"><img src="images/vip_ser_icon1.png" alt=""><span>闹钟服务</span></div>
					<a href="">
						<div class="vs_right">10元/次<img src="images/three.png" alt=""><div>
					</a>
				</li>
				<li>
					<div class="vs_left"><img src="images/vip_ser_icon2.png" alt=""><span>假扮女友</span>不前往异地</div>
					<a href="">
						<div class="vs_right">1000元/天<img src="images/three.png" alt=""><div>
					</a>
				</li>
				<li>
					<div class="vs_left"><img src="images/vip_ser_icon3.png" alt=""><span>旅游陪伴</span>可前往异地</div>
					<a href="">
						<div class="vs_right">2000元/天<img src="images/three.png" alt=""><div>
					</a>
				</li>
				<li>
					<div class="vs_left"><img src="images/vip_ser_icon4.png" alt=""><span>商务场合</span>可前往异地</div>
					<a href="">
						<div class="vs_right">1000元/天<img src="images/three.png" alt=""><div>
					</a>
				</li>
			</ul>
		</div>
		<div class="vdc_content_box">
			<h4>个人标签</h4>
			<ul class="vcb_label_ul">
				<li><a href="javascript:void(0);">温柔和婉</a></li>
				<li><a href="javascript:void(0);">活泼可爱</a></li>
				<li><a href="javascript:void(0);">善解人意</a></li>
				<li><a href="javascript:void(0);">温柔和婉</a></li>
				<li><a href="javascript:void(0);">活泼可爱</a></li>
				<li><a href="javascript:void(0);">善解人意</a></li>
			</ul>
		</div>
		<div class="vdc_content_box">
			<ul class="vcb_nav_ul">
				<li class="active"><a href="javascript:void(0);">基本信息</a></li>
				<li><a href="javascript:void(0);">描述</a></li>
				<li><a href="javascript:void(0);">评价</a></li>
			</ul>
			<!-- 基本信息 -->
			<ul class="vcb_list vcb_nav_content active">
				<li><div class="vl_left"><img src="images/vip_info_icon1.png" alt="">用户名</div><div class="vl_right">舒文熙<div></li>
				<li><div class="vl_left"><img src="images/vip_info_icon2.png" alt="">会员等级</div><div class="vl_right">初级会员<div></li>
				<li><div class="vl_left"><img src="images/vip_info_icon3.png" alt="">所在地</div><div class="vl_right">深圳<div></li>
				<li><div class="vl_left"><img src="images/vip_info_icon4.png" alt="">年龄</div><div class="vl_right">27<div></li>
				<li><div class="vl_left"><img src="images/vip_info_icon5.png" alt="">身材</div><div class="vl_right">丰满<div></li>
				<li><div class="vl_left"><img src="images/vip_info_icon6.png" alt="">体重</div><div class="vl_right">70kg<div></li>
				<li><div class="vl_left"><img src="images/vip_info_icon7.png" alt="">学历</div><div class="vl_right">博士<div></li>
				<li><div class="vl_left"><img src="images/vip_info_icon8.png" alt="">职业</div><div class="vl_right">白领精英<div></li>
				<li><div class="vl_left"><img src="images/vip_info_icon9.png" alt="">发型</div><div class="vl_right">长直发<div></li>
				<li><div class="vl_left"><img src="images/vip_info_icon10.png" alt="">发色</div><div class="vl_right">栗色<div></li>
				<li><div class="vl_left"><img src="images/vip_info_icon11.png" alt="">吸烟</div><div class="vl_right">偶尔<div></li>
				<li><div class="vl_left"><img src="images/vip_info_icon12.png" alt="">喝酒</div><div class="vl_right">少量<div></li>
			</ul>
			<!-- 描述 -->
			<div class="vcb_nav_content vcb_description ">
				<div class="vd_desc_item">
					<h5>自我介绍</h5>
					<div class="vd_desc_content">
						<p>帅哥，对面容姣好的男子的统称。又叫美男子、型男、俊男、靓仔、花美男。古代人认为，身长八尺有余（185cm以上），而形貌昳丽，为人洁白晰，鬓鬓颇有须。盈盈公府步，冉冉府中趋，就是帅哥。现代人认为，男子五官清秀俊美，双眼有神，身材高大八尺有余，且有才华，气质优雅， 即为帅哥。帅哥往往比相貌平庸者拥有更多的机遇，演艺圈是帅哥较多的地方。好说话可以调皮但不可以说脏话。穿着时髦，不需要拥有太酷的发型，要有魅力，够吸引人。</p>
					</div>
				</div>
				<div class="vd_desc_item">
					<h5>寻找</h5>
					<div class="vd_desc_content">
						<p>希望有财力的绅士，高大，健壮，会照顾人，喜欢旅行，会关爱。我希望男士能有1000万以上的资产，年收入在100万以上。</p>
					</div>
				</div>
			</div>
			<!-- 评价 -->
			<div class="vcb_nav_content vcb_eval_box">
				<div class="vd_eval_item ">
					<div class="eval_item_box">
						<div class="ve_left">
							<h6>综合评价：<img src="images/star.png" alt=""><img src="images/star.png" alt=""><img src="images/star.png" alt=""><img src="images/star.png" alt=""><img src="images/star.png" alt=""></h6>
							<div class="vei_content">小倩的服务不错，推荐所有人使用。</div>
							<p><img src="images/down.png" class="ve_down" alt="">2018-10-20 10：54</p>
						</div>
						<div class="ve_right">
							<p>侯孝贤</p>
							<img src="images/eval_img1.jpg" alt="">
						</div>
					</div>
					<div class="eval_child_box active">
						<div class="ve_left">
							<div class="vei_content">多谢侯孝贤哥的好评！</div>
							<p>2018-10-20 10：54</p>
						</div>
						<div class="ve_right">
							<p>苏子晓</p>
							<img src="images/eval_img2.jpg" alt="">
						</div>
					</div>
				</div>
				<div class="vd_eval_item ">
					<div class="eval_item_box">
						<div class="ve_left">
							<h6>综合评价：<img src="images/star.png" alt=""><img src="images/star.png" alt=""><img src="images/star.png" alt=""><img src="images/star.png" alt=""><img src="images/star.png" alt=""></h6>
							<div class="vei_content">小倩的服务不错，推荐所有人使用。</div>
							<p><img src="images/down.png" class="ve_down" alt="">2018-10-20 10：54</p>
						</div>
						<div class="ve_right">
							<p>侯孝贤</p>
							<img src="images/eval_img1.jpg" alt="">
						</div>
					</div>
					<div class="eval_child_box active">
						<div class="ve_left">
							<div class="vei_content">多谢侯孝贤哥的好评！</div>
							<p>2018-10-20 10：54</p>
						</div>
						<div class="ve_right">
							<p>苏子晓</p>
							<img src="images/eval_img2.jpg" alt="">
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="vdc_content_box">
			<h4>她的认证</h4>
			<ul class="her_auth_box">
				<li>
					<div class="img"><img src="images/vip_auth_icon1.png" class="auth_icon" alt=""><img src="images/ok.png" class="auth_status" alt=""></div>
					<p>实名认证</p>
				</li>
				<li>
					<div class="img"><img src="images/vip_auth_icon2.png" class="auth_icon" alt=""><img src="images/ok.png" class="auth_status" alt=""></div>
					<p>实名认证</p>
				</li>
				<li>
					<div class="img"><img src="images/vip_auth_icon3.png" class="auth_icon" alt=""><img src="images/ok.png" class="auth_status" alt=""></div>
					<p>实名认证</p>
				</li>
				<li>
					<div class="img"><img src="images/vip_auth_icon4.png" class="auth_icon" alt=""><img src="images/ok.png" class="auth_status" alt=""></div>
					<p>实名认证</p>
				</li>
			</ul>
		</div>
		<div class="vdc_content_box">
			<h4>常见问题<a href="common_problem.php">更多&gt;</a></h4>
			<ul class="vdc_problem_box">
				<li><a href="common_problem.php">价格可以商量吗？</a></li>
				<li><a href="common_problem.php">发出邀约后可以取消吗？</a></li>
				<li><a href="common_problem.php">女会员的服务靠谱吗？</a></li>
				<li><a href="common_problem.php">我如何发出邀约？</a></li>
				<li><a href="common_problem.php">邀约的流程是怎么样的？</a></li>
			</ul>
		</div>
		<div class="vdc_content_box">
			<h4>用户咨询<a href="">更多&gt;</a></h4>
			<div class="vdc_user_advisory">
				<div class="user_adv_item">
					<div class="ua_left">
						<img src="images/atten_img1.jpg" alt="">
						<p>晓霞</p>
					</div>
					<div class="ua_right">
						<h3>这个邀约的价格包括一切费用吗？我往返的交通费用是要自己承担吗？</h3>
						<div class="ua_box">
							<span>官方回复：</span>
							<p>您好！价格是不包含来往交通费的，请根据你的自身条件选择前往约定地点。如您需要对方承担您往返的交通费用，请事先与对方协商。感谢您对xxx网站的支持，祝您生活愉快。</p>
						</div>
						<h6>2018-12-13  09:12</h6>
					</div>
				</div>
				<div class="user_adv_item">
					<div class="ua_left">
						<img src="images/atten_img1.jpg" alt="">
						<p>晓霞</p>
					</div>
					<div class="ua_right">
						<h3>这个邀约的价格包括一切费用吗？我往返的交通费用是要自己承担吗？</h3>
						<div class="ua_box">
							<span>官方回复：</span>
							<p>您好！价格是不包含来往交通费的，请根据你的自身条件选择前往约定地点。如您需要对方承担您往返的交通费用，请事先与对方协商。感谢您对xxx网站的支持，祝您生活愉快。</p>
						</div>
						<h6>2018-12-13  09:12</h6>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="modal_shadow"></div>
	<!-- 分享 弹窗 -->
	<div class="modal_box share_modal fix">
		<div class="close_img" style="margin-bottom: 0;"><img src="images/close.png" alt=""></div>
		<p style="font-size: .22rem;margin-bottom: .3rem;">分享至：</p>
		<div class="modal_share_box">
			<div class="s_img"><a href=""><img src="images/share_logo1.jpg" alt=""><p>微信好友</p></a></div>
			<div class="s_img"><a href=""><img src="images/share_logo2.jpg" alt=""><p>微信朋友圈</p></a></div>
			<div class="s_img"><a href=""><img src="images/share_logo3.jpg" alt=""><p>新浪微博</p></a></div>
			<div class="s_img"><a href=""><img src="images/share_logo4.jpg" alt=""><p>复制链接</p></a></div>
		</div>
	</div>
	<!-- 信息必须完善 弹窗 -->
	<div class="modal_box fill_use_modal fix">
		<div class="close_img"><img src="images/close.png" alt=""></div>
		<p style="margin-top: .5rem;text-align: center;">您的会员信息必须填满80%，才能使用该功能！</p>
		<a href="basic_info.php" class="single_ok">立即填写</a>
	</div>
	<!-- 图片预览 弹窗 -->
	<div class="modal_box send_mess_modal photo_preview_modal fix">
		<div class="swiper-container preview_container">
			<div class="swiper-wrapper">
				<div class="swiper-slide">
					<img src="images/vip_preview_img.jpg" alt="" class="v_img">
					<div class="prev_layer">
						<a href=""><img src="images/love.png" alt=""></a>320
					</div>
				</div>
				<div class="swiper-slide">
					<img src="images/vip_preview_img.jpg" alt="" class="v_img">
					<div class="prev_layer">
						<a href=""><img src="images/love.png" alt=""></a>330
					</div>
				</div>
				<div class="swiper-slide">
					<img src="images/vip_preview_img.jpg" alt="" class="v_img">
					<div class="prev_layer">
						<a href=""><img src="images/love.png" alt=""></a>340
					</div>
				</div>
			</div>
			<div class="swiper-button-prev"><img src="images/left_arrow.png" alt=""></div>
			<div class="swiper-button-next"><img src="images/right_arrow.png" alt=""></div>
		</div>
	</div>
	<!-- 发送消息 弹窗 -->
	<div class="modal_box send_mess_modal fix">
		<img src="images/vip_preview_img.jpg" alt="" class="v_img">
		<textarea name="send_mess" id="" class="textarea" cols="30" rows="10"></textarea>
		<div class="more_btn_box">
			<a href="" class="modal_send_btn active">发送</a>
			<a href="javascript:void(0);" class="modal_cancle_btn">取消</a>
		</div>
	</div>
	<!-- 发红包 弹窗 -->
	<div class="modal_box send_money_modal fix">
		<div class="close_img" style="margin-bottom: .1rem;"><img src="images/close.png" alt=""></div>
		<p style="font-size: .26rem;text-align: center;margin-bottom: .3rem;">金额</p>
		<div class="modal_red_type">
			<div class="r_img"><input type="radio" name="pay[]" checked id=""><a href="javascript:void(0);"><img src="images/red_logo1.jpg" alt=""></a></div>
			<div class="r_img"><input type="radio" name="pay[]" id=""><a href="javascript:void(0);"><img src="images/red_logo2.jpg" alt=""></a></div>
			<div class="r_img"><input type="radio" name="pay[]" id=""><a href="javascript:void(0);"><img src="images/red_logo3.jpg" alt=""></a></div>
		</div>
		<div class="modal_red_word active">
			<h5>使用微信支付</h5>
		</div>
		<div class="modal_red_word">
			<h5>使用余额支付</h5>
		</div>
		<div class="modal_red_word">
			<h5>使用支付宝支付</h5>
		</div>
		<p>（您打赏的红包将立刻进入对方的钱包中，对方可以自由选择微信或支付宝进行提现。红包发出后一概不予退还。）</p>
		<a href="" class="single_ok">发红包</a>
	</div>
	<div class="modal_box custom_modal fix" style="top:15%;">
		<div class="close_img"><img src="images/close.png" alt=""></div>
		<img src="images/kefu.png" class="img" alt="">
		<p style="text-align: center;font-size: .22rem;margin-bottom: .4rem;">客服会在24小时之内回答您的问题。</p>
		<textarea name="" id="" class="textarea" cols="30" rows="10" style="width: 100%;height: 2.3rem;margin-bottom: .4rem;"></textarea>
		<div class="more_btn_box">
			<a href="" class="modal_custom_btn active">发送</a>
			<a href="javascript:void(0);" class="modal_cancle_btn">取消</a>
		</div>
	</div>
	<div class="fixed_mb120"></div>
	<div class="vip_fixed_footer">
		<div class="vf_left">
			<a href="javascript:void(0);">
				<img src="images/vip_footer_icon1.png" alt="">
				<p>私信</p>
			</a>
		</div>
		<div class="vf_center">
			<a href="javascript:void(0);">
				<img src="images/vip_footer_icon2.png" alt="">
				<p>红包</p>
			</a>
		</div>
		<div class="vf_right">
			<a href="invite_service.php">邀约服务</a>
		</div>
	</div>
</body>
<script src="js/common.js"></script>
<script>
	$(function(){
		var swiper = new Swiper('.preview_container',{
			initialSlide: 0,		//默认第1个显示
			loop: false,			//swiper循环
			speed: 300,			//轮播滑动开始到结束的时间
			nextButton: '.swiper-button-next',
			prevButton: '.swiper-button-prev',
		});
		
		$(window).scroll(function(){
			if($(window).scrollTop() >= $(".vip_detail_banner").height()){
				$(".header_back").addClass("active");
			}else{
				$(".header_back").removeClass("active");
			}
		})
		
		var modal = new LModal();
		// 图片预览
		$("body").on("click",".img_bg",function(){
			$(".photo_preview_modal").addClass("show");
			$(".modal_shadow").addClass("active");
		})
		$(".modal_shadow").click(function(){
			$(".photo_preview_modal").removeClass("show");
			$(this).removeClass("active");
		})
		// 分享
		$("body").on("click",".share_icon",function(){
			modal.showModal(".share_modal");
		})
		// 私信
		$(".vip_fixed_footer").on("click",".vf_left",function(){
			modal.showModal(".send_mess_modal");
		})
		// 红包
		$(".vip_fixed_footer").on("click",".vf_center",function(){
			modal.showModal(".send_money_modal");
		})
		// 完善信息
		// $(".vip_fixed_footer").on("click",".vf_right",function(){
		// 	modal.showModal(".fill_use_modal");
		// })
		
	})
</script>
</html>