$(function(){
	// 弹框
	$(".modal_cancle_btn,.modal_box .close_img,.modal_shadow").click(function(){
		$(".modal_shadow,.modal_box").hide();
	})
	
	// 清空输入框
	$("body").on("click",".clear_input",function(){
		$(this).parent().siblings(".input").val("");
	})
	// 显示密码
	$("body").on("click",".clear_eye",function(){
		if($(this).parent().siblings(".input").attr("type") == "password"){
			$(this).parent().siblings(".input").attr("type","text");
		}else{
			$(this).parent().siblings(".input").attr("type","password");
		}
	})
	
	
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
	
	// 实名认证
	$(".name_photo_box").on("change",".file",function(){
		var _this = this;
		run(_this, function (data) {
			$(_this).siblings(".ub_photo").attr('src',data);
		});
	})
	
	// 上传二维码
	$(".upload_code").on("change",".file",function(){
		var _this = this;
		run(_this, function (data) {
			$(_this).siblings(".code_img").attr("src",data);
		});
	})
	
	// 上传头像
	$(".avatar_photo").on("change","#file",function(){
		var _this = this;
		run(_this, function (data) {
			$(_this).siblings(".code_img").attr("src",data);
		});
	})
	
	// 获取验证码 倒计时
	function invokeSettime(obj){
		var countdown=60;
		settime(obj);
		function settime(obj) {
			if (countdown <=1) {
				$(obj).prop("disabled",false);
				$(obj).val("获取验证码");
				countdown = 60;
				return;
			} else {
				countdown--;
				$(obj).prop("disabled",true);
				$(obj).val(countdown+"s");
			}
			setTimeout(function() {
					settime(obj) }
			,1000)
		}
	}
	$(".getCode").click(function(){
		var phone = $(".phone_txt").val();
		if(phone == ""){
			alert("请输入手机号！");
			return false;
		}
		if(!(/^1[34578]\d{9}$/.test(phone))){
			alert("请输入有效的手机号！");
			return false;
		}
		setTimeout(function(){
			invokeSettime(".getCode");
		},500)
	})
	
	// 会员详情评价展开
	$(".vcb_eval_box").on("click",".ve_down",function(){
		if($(this).parents(".vd_eval_item").hasClass("active")){
			$(this).parents(".vd_eval_item").removeClass("active");
		}else{
			$(this).parents(".vd_eval_item").addClass("active");
		}
	})
	
	// 会员详情选项卡
	$(".vcb_nav_ul").on("click","li",function(){
		var index = $(this).index();
		$(this).addClass("active").siblings().removeClass("active");
		$(".vcb_nav_content").eq(index).addClass("active").siblings().removeClass("active");
	})
	
	// 发红包支付方式选择
	$(".modal_red_type").on("click",".r_img",function(){
		var index = $(this).index();
		$(this).addClass("active").siblings().removeClass("active");
		$(".modal_red_word").eq(index).addClass("active").siblings().removeClass("active");
	})
	
	// 会员详情 点击圆点 弹出
	$(".menu_icon").click(function(){
		if($(this).hasClass("active")){
			$(this).removeClass("active");
			$(".fix_shadow_bg").removeClass("active");			
		}else{
			$(this).addClass("active");
			$(".fix_shadow_bg").addClass("active");
		}
	})
	$(".share_icon,.header_back h2").click(function(){
		$(".menu_icon").removeClass("active");
		$(".fix_shadow_bg").removeClass("active");
	})
	$(".fix_shadow_bg").click(function(){
		$(this).removeClass("active");
		$(".menu_icon").removeClass("active");
	})
})