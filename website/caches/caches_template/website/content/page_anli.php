<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
    <title>中也科技案例</title>
	<meta name="Keywords" content="小程序,微信小程序,小程序制作,微信小程序制作,小程序工具,微信小程序工具,小程序开发,微信小程序开发,小程序平台,微信小程序平台" />
    <meta name="Description" content="【中也科技】是一家领先微信小程序开发企业,为中小企业提供微商城、新零售、餐饮o2o、小程序等一体化解决方案,帮助中小型企业向智能商业转型升级。" />
    
	<link rel="icon" href="../../../../favicon.ico">
    <link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH;?>website/basic.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH;?>website/swiper.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH;?>website/swiper.min.css" />
    <script src="<?php echo JS_PATH;?>website/jquery-1.11.0.min.js" type="text/javascript" charset="utf-8"></script>
    
		<style>
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
    </style>
    <script type="text/javascript">
					$(document).ready(function(){
            var waphei = $(window).height();
            var wapwei = $(window).width();
            $(".panel").css("height", waphei);
            $(".panel").css("width", 0.4 * wapwei);
            $(".panel").css("right", -0.4 * wapwei);
            $(".wapbar").click(function () {
                $(".panel").css("display", "block")
                $(".panel").animate({
                    "right": "0"
                })
            })
            $(".barguan").click(function () {
                $(".panel").animate({
                    "right": -0.4 * wapwei
                })
            })
            $(".panel li a").css("height", 0.12 * waphei);
            $(".panel li a").css("lineHeight", 0.12 * waphei + "px");
					})
    </script>
    <style>
        body {
            background: #fff;
            font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
            font-size: 14px;
            color: #000;
            margin: 0;
            padding: 0;
        }

        .swiper-container {
            width: 100%;
            padding-top: 50px;
            padding-bottom: 50px;
            margin-top: 50px;
        }

        .swiper-slide {
            background-position: center;
            background-size: cover;
            width: 200px;
            height: 400px;
        }

        .swiper-slide img {
            display: inline-block;
            width: 200px;
            height: 400px;
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
        <div style="width: 100%;height: 60px;"></div>
        <div class="anli">
            <div class="anlicon ">
                <img src="<?php echo IMG_PATH;?>website/anli1.jpg" alt="">
                <p class="xiangqing1">查看详情</p>
                <div class="anlier">
                    <img src="<?php echo IMG_PATH;?>website/jiudian.png" alt="">
                    <p class="guan">
                        <img src="<?php echo IMG_PATH;?>website/guanbi.png" alt="">
                    </p>
                </div>
            </div>
            <div class="anlicon ">
                <img src="<?php echo IMG_PATH;?>website/anli2.jpg" alt="">
                <p class="xiangqing2">查看详情</p>
                <div class="anlier">
                    <img src="<?php echo IMG_PATH;?>website/tongcheng.png" alt="">
                    <p class="guan">
                        <img src="<?php echo IMG_PATH;?>website/guanbi.png" alt="">
                    </p>
                </div>
            </div>
            <div class="anlicon ">
                <img src="<?php echo IMG_PATH;?>website/anli3.jpg" alt="">
                <p class="xiangqing1">查看详情</p>
                <div class="anlier">
                    <img src="<?php echo IMG_PATH;?>website/shangcheng.png" alt="">
                    <p class="guan">
                        <img src="<?php echo IMG_PATH;?>website/guanbi.png" alt="">
                    </p>
                </div>
            </div>
            <div class="anlicon ">
                <img src="<?php echo IMG_PATH;?>website/anli4.jpg" alt="">
                <p class="xiangqing2">查看详情</p>
                <div class="anlier">
                    <img src="<?php echo IMG_PATH;?>website/tongcheng.png" alt="">
                    <p class="guan">
                        <img src="<?php echo IMG_PATH;?>website/guanbi.png" alt="">
                    </p>
                </div>
            </div>
            <div class="anlicon ">
                <img src="<?php echo IMG_PATH;?>website/anli5.jpg" alt="">
                <p class="xiangqing1">查看详情</p>
                <div class="anlier">
                    <img src="<?php echo IMG_PATH;?>website/canyin.png" alt="">
                    <p class="guan">
                        <img src="<?php echo IMG_PATH;?>website/guanbi.png" alt="">
                    </p>
                </div>
            </div>
            <div class="anlicon">
                <img src="<?php echo IMG_PATH;?>website/anli6.jpg" alt="">
                <p class="xiangqing1">查看详情</p>
                <div class="anlier">
                    <img src="<?php echo IMG_PATH;?>website/wanneng.png" alt="">
                    <p class="guan">
                        <img src="<?php echo IMG_PATH;?>website/guanbi.png" alt="">
                    </p>
                </div>
            </div>
        </div>
        <script type="text/javascript">
            $(".guan").click(function () {
                $(this).parent().animate({
                    "opacity": "0"
                });
                $(this).parent().css("display", "none");
            })
            $(".anlicon .xiangqing1").click(function () {
                $(this).next().css("display", "block");
                $(this).next().animate({
                    "opacity": "1"
                })
            })
            $(".anlicon .xiangqing2").click(function () {
                $(this).next().css("display", "block");
                $(this).next().animate({
                    "opacity": "1"
                })
            })
        </script>




        <?php include template('default','footer'); ?>
    </div>
    <div class="wap">
        <?php include template('default','header_1'); ?>
        <div class="wapancon" style="margin-top: 50px;">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="<?php echo IMG_PATH;?>website/l1.png" alt="">
                    </div>
                    <div class="swiper-slide">
                        <img src="<?php echo IMG_PATH;?>website/y1.jpg" alt="">
                    </div>
                    <div class="swiper-slide">
                        <img src="<?php echo IMG_PATH;?>website/t3.jpg" alt="">
                    </div>
                    <div class="swiper-slide">
                        <img src="<?php echo IMG_PATH;?>website/m3.jpg" alt="">
                    </div>
                    <div class="swiper-slide">
                        <img src="<?php echo IMG_PATH;?>website/p3.jpg" alt="">
                    </div>

                </div>

                <div class="swiper-pagination"></div>
            </div>


            <script src="<?php echo JS_PATH;?>website/swiper.min.js"></script>
            <script type="text/javascript" src="<?php echo JS_PATH;?>website/basic.js"></script>
            <script>
                var swiper = new Swiper('.swiper-container', {
                    effect: 'coverflow',
                    grabCursor: true,
                    centeredSlides: true,
                    slidesPerView: 'auto',
                    coverflowEffect: {
                        rotate: 50,
                        stretch: 0,
                        depth: 100,
                        modifier: 1,
                        slideShadows: true,
                    },
                    pagination: {
                        el: '.swiper-pagination',
                    },
                });
            </script>
        </div>

        <?php include template('default','footer_1'); ?>
    </div>
</body>

</html>
