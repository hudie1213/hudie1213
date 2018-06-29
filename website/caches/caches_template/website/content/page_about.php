<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
		<meta name="Keywords" content="小程序,微信小程序,小程序制作,微信小程序制作,小程序工具,微信小程序工具,小程序开发,微信小程序开发,小程序平台,微信小程序平台" />
		<meta name="Description" content="【中也科技】是一家领先微信小程序开发企业,为中小企业提供微商城、新零售、餐饮o2o、小程序等一体化解决方案,帮助中小型企业向智能商业转型升级。" />
		<title>关于我们</title>
		<link rel="icon" href="../../../../favicon.ico">
		<link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH;?>website/basic.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH;?>website/banner.css" />
		<script src="<?php echo JS_PATH;?>website/jquery-1.11.0.min.js" type="text/javascript" charset="utf-8"></script>
		<script src="<?php echo JS_PATH;?>website/basic.js" type="text/javascript" charset="utf-8"></script>
		<style type="text/css">
			@media screen and (min-width: 760px) {
				.pc{
					display: block;
				}
				.wap{
					display: none;
				}
			}
			@media screen and (max-width: 759px) {
				.pc{
					display: none;
				}
				.wap{
					display: block;
				}
			}
			.video {
                width: 100%;
				height: 0;
				padding-bottom: 35%;
				overflow: hidden;
                background: #000;
                position: relative;
				margin-top:60px;
            }
            .des{
                position: absolute;
                left: 0;
                top: 50%;
                margin-top: -30px;
                text-align: center;
                width: 100%;
                height: 48px;
                line-height: 48px;
                font-size: 48px;
				color: #fff;
            }
		</style>
	</head>
	<body>
		<div class="pc">

			<?php include template('default','header'); ?>
		<script type="text/javascript">
			var headerTop = $(".top").height();
			var logoImg = $(".logo img").height();
			var logoImgmt = ($(".top").height() - $(".logo img").height()) / 2;
			$(".logo img").css("margin-top", logoImgmt)
		</script>
		
		
		<div class="video">
            <video width="100%" id="vid" height="auto" autoplay="autoplay" controls="controls" loop="loop">
                <source src="statics/images/website/1.Ogg" type="video/ogg"></source>
				<source src="statics/images/website/1.avi" type="video/avi"></source>
				<source src="statics/images/website/1.webm" type="video/webm"></source>
            </video>
            <!--<p class="des">
                让世界更精彩
            </p>-->
        </div>
		<div style="width: 100%;">
			<img src="<?php echo IMG_PATH;?>website/about.png" style="width: 100%;display: block;"/>
		</div>
<script>
window.onload=function(){
var myvideo=document.ElementById("vid")
myvideo.muted=true;
}

</script>


			<?php include template('default','footer'); ?>
		</div>
		<div class="wap">
			<?php include template('default','header_1'); ?>
			<script type="text/javascript">
				window.onload = function () {
					var waphei = $(window).height();
					var wapwei = $(window).width();
					$(".panel").css("height", waphei);
					$(".panel").css("width", 0.4 * wapwei);
					$(".panel").css("right",-0.4*wapwei);
					$(".wapbar").click(function () {
						$(".panel").css("display","block")
						$(".panel").animate({
							"right": "0"
						})
					})
					$(".barguan").click(function(){
						$(".panel").animate({
							"right": -0.4*wapwei
						})
					})
					$(".panel li a").css("height",0.1*waphei);
					$(".panel li a").css("lineHeight",0.1*waphei+"px")
				}
			</script>
			<div class="wapguancon" style="margin-top: 50px;">
				<img src="<?php echo IMG_PATH;?>website/wapguan.jpg" >
			</div>

			<?php include template('default','footer_1'); ?>
		</div>
	</body>
</html>
