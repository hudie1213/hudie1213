<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!DOCTYPE html>
<html>

<head>

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
        <meta name="Keywords" content="小程序,微信小程序,小程序制作,微信小程序制作,小程序工具,微信小程序工具,小程序开发,微信小程序开发,小程序平台,微信小程序平台" />
        <meta name="Description" content="【中也科技】是一家领先微信小程序开发企业,为中小企业提供微商城、新零售、餐饮o2o、小程序等一体化解决方案,帮助中小型企业向智能商业转型升级。" />
        <title>中也科技资讯</title>
		<link rel="icon" href="../../../../favicon.ico">
        <link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH;?>website/basic.css" />
        <script src="<?php echo JS_PATH;?>website/jquery-1.11.0.min.js" type="text/javascript" charset="utf-8"></script>
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
        <style type="text/css">
            .wapzixuncon{
                width: 90%;
                margin: 60px auto 50px;
            }
            .wapzixuncon h1{
                text-align: center;
                font-size: 18px;
            }
            .wapzixuncon h2{
                text-align: center;
                margin: 30px auto 20px;
                height: 30px;
                border-bottom: 1px solid #ccc;
            }
            .wapzixuncon p{
                text-indent: 28px;
                font-size:14px;
            }
            .wapzixuncon p img{
                width: 100%;

            }
            .wapziguan{
                margin-bottom: 20px;
            }
            .wapziguan a{
                display: block;
                width: 130px;
                font-size: 16px;
                height: 42px;
                line-height: 42px;
                text-align: center;
                background: url(<?php echo IMG_PATH;?>website/fanhui.png) no-repeat left center;
                background-size: 30px;
                transition: 0.2s;
            }
            .wapziguan a:hover{
                background: url(<?php echo IMG_PATH;?>website/fanhuih.png) no-repeat left center;
                background-size: 30px;
            }
            @media screen and (min-width: 760px){

            }
        </style>
    </head>

    <div>
<div class="pc">
<?php include template('default','header'); ?>
        <script type="text/javascript">
            var headerTop = $(".top").height();
            var logoImg = $(".logo img").height();
            var logoImgmt = ($(".top").height() - $(".logo img").height()) / 2;
            $(".logo img").css("margin-top", logoImgmt)
        </script>

        <div class="zixuncontent">
            <div class="zixuntext">
                <h1><?php echo $title;?></h1>
                <h2>发布：<?php echo $copyfrom;?>
                    <span style="margin-left: 50px;"><?php echo str_cut($inputtime,15,$dot='');?></span>
                </h2>
                <?php echo $content;?>
                <p style="text-align: center;margin-top: 20px;">
                上一篇：<a href="<?php echo $previous_page['url'];?>"><?php echo $previous_page['title'];?></a>
                下一篇：<a href="<?php echo $next_page['url'];?>"><?php echo $next_page['title'];?></a>
                </p>
            </div>
<div class="shortlist">
				<ul>
					<h1>最新资讯</h1>
                    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=6a23842006c7cf43e62b70ea27f76547&action=lists&catid=8&order=id+DESC&num=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'8','order'=>'id DESC','limit'=>'1',));}?>
                    <?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>
                    <li><h2><?php echo $v['title'];?></h2>
                        <a href="<?php echo $v['url'];?>">

                            <div class="shortshow">
                                <div class="shortimg">
                                    <img src="<?php echo $v['thumb'];?>"/>
                                </div>
                                <div class="shortcon">
                                    <p><?php echo $v['description'];?></p>
                                </div>
                            </div>
                        </a></li>
                    <?php $n++;}unset($n); ?>
                    <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=80f2e83cd88accaeee5bd3486018806e&action=lists&catid=8&order=id+DESC&num=2&start=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'8','order'=>'id DESC','limit'=>'1,2',));}?>
                    <?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>
                    <li><a href="<?php echo $v['url'];?>"><?php echo $v['title'];?></a></li>
                    <?php $n++;}unset($n); ?>
                    <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
				</ul>
				<ul>
					<h1>最热资讯</h1>
                    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=f3ae969237563683000abe1cbe3548fa&action=lists&catid=8&order=id+ASC&num=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'8','order'=>'id ASC','limit'=>'1',));}?>
                    <?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>
                    <li><h2><?php echo $v['title'];?></h2>
                        <a href="<?php echo $v['url'];?>">

                            <div class="shortshow">
                                <div class="shortimg">
                                    <img src="<?php echo $v['thumb'];?>"/>
                                </div>
                                <div class="shortcon">
                                    <p><?php echo $v['description'];?></p>
                                </div>
                            </div>
                        </a></li>
                    <?php $n++;}unset($n); ?>
                    <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=dd222bdeff556f07ea75e9b35b29d79c&action=lists&catid=8&order=id+ASC&num=2&start=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'8','order'=>'id ASC','limit'=>'1,2',));}?>
                    <?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>
                    <li><a href="<?php echo $v['url'];?>"><?php echo $v['title'];?></a></li>
                    <?php $n++;}unset($n); ?>
                    <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
				</ul>
		</div>
        </div>
<?php include template('default','footer'); ?>
</div>

<div class="wap">
    <?php include template('default','header_1'); ?>
    <div class="wapzixuncon">
        <div class="wapziguan">
            <a href="<?php echo APP_PATH;?>index.php?m=content&c=index&a=lists&catid=8">返回列表</a>
        </div>
        <h1><?php echo $title;?></h1>
        <h2>发布：<?php echo $copyfrom;?><span style="margin-left: 50px;"><?php echo str_cut($inputtime,15,$dot='');?></span></h2>
        <?php echo $content;?>
        <p style="text-align: center;margin-top: 20px;">
        上一篇：<a href="<?php echo $previous_page['url'];?>"><?php echo str_cut($previous_page['title'],20);?></a>
        下一篇：<a href="<?php echo $next_page['url'];?>"><?php echo str_cut($next_page['title'],20);?></a></p>
    </div>
    <?php include template('default','footer_1'); ?>
</div>



    </body>

</html>
