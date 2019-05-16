<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>邀约服务</title>
	<meta name="keywords" content="关键词">
	<meta name="description" content="网站描述">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no" />
	<meta name="renderer" content="webkit">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/common.css">
	<link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/mobileSelect.css">
	<link href="css/rolldate.css" rel="stylesheet"></head>
    <script src="js/auto-size.js"></script>
	<script src="js/rem.js"></script>
	<script src="js/jquery-2.1.4.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/modal.js"></script>
	<style>
		body{
			background: #f5f5f5;
		}
		a.submit_btn{
			width: 3.3rem;
			height: .85rem;
			line-height: .85rem;
			margin: .7rem auto;
			font-size: .28rem;
			border-radius: .1rem;
		}
	</style>
</head>
<body>
	<div class="header_back">
		<a href="javascript:history.go(-1);" class="left_back"><img src="images/back.png" alt=""></a>
		<h2>邀约服务</h2>
	</div>
	<div class="mt80"></div>
	<div class="vip_detail_content invite_ser_box">
		<div class="vdc_content_box">
			<h4>邀约对象</h4>
			<div class="invite_obj">
				<input type="text" value="顾思雅" disabled>
			</div>
		</div>
		<div class="vdc_content_box">
			<h4>邀约详情</h4>
			<ul class="vcb_list isb_detail">
				<li>
					<div class="vl_left"><img src="images/invite_ser_icon1.png" alt="">起始日期</div>
					<div class="vl_right">
						<!-- <p>03/10/2014</p> -->
						<input type="text" class="time_txt" readonly="readonly" id="trigger1">
						<div class="time_img time_img1"><img src="images/invite_ser_icon8.png" alt=""></div>
					<div>
				</li>
				<li>
					<div class="vl_left"><img src="images/invite_ser_icon1.png" alt="">截止日期</div>
					<div class="vl_right">
						<!-- <p>03/10/2014</p> -->
						<input type="text" class="time_txt" readonly="readonly" id="trigger2">
						<div class="time_img time_img2"><img src="images/invite_ser_icon8.png" alt=""></div>
					<div>
				</li>
				<li>
					<div class="vl_left"><img src="images/invite_ser_icon2.png" alt="">时间</div>
					<div class="vl_right">
						<!-- <span>请填写详细的邀约时间</span> -->
						<input readonly type="text" class="ser_txt" id="datetime" placeholder="请填写详细的邀约时间">
						<img src="images/three.png" class="isb_next" alt="">
					<div>
				</li>
				<li>
					<div class="vl_left"><img src="images/invite_ser_icon3.png" alt="">地点</div>
					<div class="vl_right">
						<!-- <span>请填写详细的邀约地点</span> -->
						<div id="trigger4">请填写详细的邀约地点</div>
						<img src="images/three.png" class="isb_next" alt="">
					<div>
				</li>
				<li>
					<div class="vl_left"><img src="images/invite_ser_icon4.png" alt="">服务</div>
					<div class="vl_right">
						<!-- <span>闹钟</span> -->
						<input type="text" class="ser_txt" value="闹钟服务" readonly="readonly" id="trigger3">
						<img src="images/three.png" class="isb_next" alt="">
					<div>
				</li>
				<li>
					<div class="vl_left"><img src="images/invite_ser_icon5.png" alt="">报价</div>
					<div class="vl_right">
						<span><input type="text" class="ser_txt" value="20">元/次</span>
						<!-- <img src="images/three.png" class="isb_next" alt=""> -->
					<div>
				</li>
				<li>
					<div class="vl_left"><img src="images/invite_ser_icon6.png" alt="">总价</div>
					<div class="vl_right">
						<span><input type="text" class="ser_txt" value="20">元</span>
						<!-- <img src="images/three.png" class="isb_next" alt=""> -->
					<div>
				</li>
				<li>
					<div class="vl_left"><img src="images/invite_ser_icon7.png" alt="">联系手机</div>
					<div class="vl_right">
						<input type="text" name="phone" placeholder="请填写手机号，方便联系" class="isb_phone">
					<div>
				</li>
			</ul>
			<p class="isb_till">仅有在对方同意您的邀约后，对方才能看到您的电话号码</p>
		</div>
		<div class="vdc_content_box">
			<h4>备注</h4>
			<div class="invite_remark">
				<textarea name="remark" placeholder="请在此填写其他关于本次预约服务的备注。" id="" cols="30" rows="10"></textarea>
			</div>
		</div>
		<div class="vdc_content_box">
			<h4>邀约流程</h4>
			<div class="invite_process">
				<ul class="ip_process_ul">
					<li class="active">
						<div>
							<p>发出邀约</p>
							<span></span>
						</div>
					</li>
					<li>
						<div>
							<p>协商价格</p>
							<span></span>
						</div>
					</li>
					<li>
						<div>
							<p>确认支付方式</p>
							<span></span>
						</div>
					</li>
					<li>
						<div>
							<p>邀约成功下线服务</p>
							<span></span>
						</div>
					</li>
					<li>
						<div>
							<p>评价</p>
							<span></span>
						</div>
					</li>
				</ul>
			</div>
		</div>
		<div class="vdc_content_box">
			<h4>平台保障</h4>
			<ul class="invite_platform">
				<li>
					<img src="images/invite_plat1.png" alt="">
					<h5>真实资料</h5>
					<p>实名认证 真实可靠</p>
				</li>
				<li>
					<img src="images/invite_plat2.png" alt="">
					<h5>自动赔付</h5>
					<p>对方爽约 平台赔付</p>
				</li>
				<li>
					<img src="images/invite_plat3.png" alt="">
					<h5>在线客服</h5>
					<p>在线客服 全程服务</p>
				</li>
			</ul>
		</div>
		<div class="vdc_content_box">
			<h4>注意事项</h4>
			<ul class="invite_remind">
				<p>1. 请尊重对方并详细说明此次预约服务的详细内容，这样被接受的概率更高；</p>
				<p>2. 此信息将作为产生纠纷时的依据；</p>
				<p>3. 产生违规行为的一方将受到相应的惩罚；</p>
				<p>4. 预约服务的费用请在与对方赴约后按照承诺的金额当面支付给对方，本平台不收取任何保证金，不做任何担保。</p>
			</ul>
		</div>
		<a href="" class="submit_btn">提交</a>
	</div>
	<div class="modal_shadow"></div>
	<!-- 信息必须完善 弹窗 -->
	<div class="modal_box fill_use_modal fix">
		<div class="close_img"><img src="images/close.png" alt=""></div>
		<p style="margin-top: .5rem;text-align: center;">您的会员信息必须填满80%，才能使用该功能！</p>
		<a href="basic_info.php" class="single_ok">立即填写</a>
	</div>
	<?php include "footer.php"; ?>
</body>
<script src="js/common.js"></script>
<script src="js/mobileSelect.js"></script>
<script src="js/rolldate.js"></script>
<script>
	$(function(){		
		var modal = new LModal();
		$(".vip_fixed_footer").on("click",".vf_right",function(){
			modal.showModal(".fill_use_modal");
		})
		
		
		$(".time_img1").click(function(){
			$(this).siblings("#trigger1").trigger("click");
		})
		$(".time_img2").click(function(){
			$(this).siblings("#trigger2").trigger("click");
		})
		<!--日期选择-->
		var years=[];
		var month=[];
		var day=[];
		var myDate = new Date();
		myDate.getFullYear();    //获取完整的年份(4位,1970-????)
		myDate.getMonth();       //获取当前月份(0-11,0代表1月)
		myDate.getDate();
		var _data=[];
		for(i=0; i<myDate.getFullYear()-1980; i++){
		    //年
		    var obj={};
		    var yer=1980+i+1;
		    obj.value=1980+i+1;
		    var _data2=[];
		    for(n=0; n<12; n++){
		        //月
		        var obj2={};
		        if(n<9){
		            obj2.value='0'+(n+1);
		        }else{
		            obj2.value=n+1;
		        }
		        var _data3=[];
		        if(n==1){
		            var cond1 = yer % 4 == 0;  //条件1：年份必须要能被4整除
		            var cond2 = yer % 100 != 0;  //条件2：年份不能是整百数
		            var cond3 = yer % 400 ==0;
		            var cond = cond1 && cond2 || cond3;
		            //闰年
		            if(cond){
		                for(y=0; y<29; y++){
		                    //日
		                    var obj3={};
		                    if(y<9){
		                        obj3.value='0'+(y+1);
		                    }else{
		                        obj3.value=y+1;
		                    }
		                    _data3.push(obj3)
		                }
		            }else{
		                for(y=0; y<28; y++){
		                    //日
		                    var obj3={};
		                    if(y<9){
		                        obj3.value='0'+(y+1);
		                    }else{
		                        obj3.value=y+1;
		                    }
		                    _data3.push(obj3)
		                }
		            }
		        }else if(n==0||n==2||n==4||n==6||n==7||n==9||n==11){
		            for(y=0; y<31; y++){
		                //日
		                var obj3={};
		                if(y<9){
		                    obj3.value='0'+(y+1);
		                }else{
		                    obj3.value=y+1;
		                }
		                _data3.push(obj3)
		            }
		        }else{
		            for(y=0; y<30; y++){
		                //日
		                var obj3={};
		                if(y<9){
		                    obj3.value='0'+(y+1);
		                }else{
		                    obj3.value=y+1;
		                }
		                _data3.push(obj3)
		            }
		        }
		        obj2.childs=_data3;
		        _data2.push(obj2);
		    }
		    obj.childs=_data2;
		    _data.push(obj)
		}
		
		var mobileSelect1 = new MobileSelect({
		    trigger: '#trigger1',
		    title: '日期选择',
		    wheels: [
		        {data:_data}
		    ],
		    transitionEnd:function(indexArr, data){
		        console.log(data);
		    },
		    callback:function(indexArr, data){
		        console.log(data);
		        $("#trigger1").val(data[0].value+'-'+data[1].value+'-'+data[2].value)
		    }
		});
		var mobileSelect2 = new MobileSelect({
		    trigger: '#trigger2',
		    title: '日期选择',
		    wheels: [
		        {data:_data}
		    ],
		    transitionEnd:function(indexArr, data){
		        console.log(data);
		    },
		    callback:function(indexArr, data){
		        console.log(data);
		        $("#trigger2").val(data[0].value+'-'+data[1].value+'-'+data[2].value)
		    }
		});
		// 邀约时间
		new rolldate.Date({
			el:'#datetime',
			format:'YYYY-MM-DD hh:mm',
			beginYear:2000,
			endYear:2100,
			theme:'black',
			confirmBefore:function(el,date){
				console.log(date)
			},
		 })
		//服务选择
		var mobileSelect3 = new MobileSelect({
		    trigger: '#trigger3',
		    title: '服务选择',
		    wheels: [
		        {data:[
		                {id:'1',value:'闹钟服务'},
		                {id:'2',value:'假扮女友'},
		                {id:'3',value:'旅游陪伴'},
		                {id:'4',value:'出席商务场合'}
		            ]}
		    ],
		    transitionEnd:function(indexArr, data){
		        console.log(data);
		    },
		    callback:function(indexArr, data){
		        console.log(data);
		        $("#trigger3").val(data[0].value)
		    }
		});
		// 地点
		var mobileSelect4 = new MobileSelect({
		    trigger: '#trigger4',
		    title: '地区选择',
		    wheels: [
		                {data:address}
		            ],
		    transitionEnd:function(indexArr, data){
		        console.log(data);
		    },
		    callback:function(indexArr, data){
				if(data[0].value == data[1].value){
					$("#trigger4").html(data[0].value)
				}
		        console.log(data);
		    }  
		});
	})
</script>
</html>