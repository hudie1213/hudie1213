<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
		<meta name="Keywords" content="小程序,微信小程序,小程序制作,微信小程序制作,小程序工具,微信小程序工具,小程序开发,微信小程序开发,小程序平台,微信小程序平台" />
		<meta name="Description" content="【中也科技】是一家领先微信小程序开发企业,为中小企业提供微商城、新零售、餐饮o2o、小程序等一体化解决方案,帮助中小型企业向智能商业转型升级。" />
		<title>中也科技资讯</title>
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
		
		<div class="zixuncontent">
			<ul class="longlist">
				<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=7b5096eca8a6073a4e49acb54b046659&action=lists&catid=8&order=id+DESC&page=%24page&num=7&moreinfo=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$pagesize = 7;$page = intval($page) ? intval($page) : 1;if($page<=0){$page=1;}$offset = ($page - 1) * $pagesize;$content_total = $content_tag->count(array('catid'=>'8','order'=>'id DESC','moreinfo'=>'1','limit'=>$offset.",".$pagesize,'action'=>'lists',));$pages = pages($content_total, $page, $pagesize, $urlrule);$data = $content_tag->lists(array('catid'=>'8','order'=>'id DESC','moreinfo'=>'1','limit'=>$offset.",".$pagesize,'action'=>'lists',));}?>
				<!--<pre><?php echo print_r($data);?></pre>-->
				<?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>
				<?php list($copyfrom) = explode('|', $v['copyfrom'])?>
				<li><a href="<?php echo $v['url'];?>">
				  <div class="longliimg">
				  	<img src="<?php echo $v['thumb'];?>" alt="" />
				  </div>
				  <div class="longlicon">
				  	<h1><?php echo $v['title'];?></h1>
				  	<p><?php echo $v['description'];?></p>
				  	<h2><?php echo $copyfrom;?><span style="margin-left: 20px;"><?php echo date('Y-m-d',$v['inputtime']);?></span></h2>
				  </div>
				</a></li>
				<?php $n++;}unset($n); ?>
				<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
				<?php echo $pages;?>
			</ul>
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
		<script type="text/javascript">
			window.onload=function(){
			var longliwei=$(".longlist li").width();
			var longimgwei=$(".longliimg").width();
			$(".longlicon").width()=longliwei-longimgwei;
			
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
		<div class="wapzicon" style="margin-top: 50px;">
			<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=7b5096eca8a6073a4e49acb54b046659&action=lists&catid=8&order=id+DESC&page=%24page&num=7&moreinfo=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$pagesize = 7;$page = intval($page) ? intval($page) : 1;if($page<=0){$page=1;}$offset = ($page - 1) * $pagesize;$content_total = $content_tag->count(array('catid'=>'8','order'=>'id DESC','moreinfo'=>'1','limit'=>$offset.",".$pagesize,'action'=>'lists',));$pages = pages($content_total, $page, $pagesize, $urlrule);$data = $content_tag->lists(array('catid'=>'8','order'=>'id DESC','moreinfo'=>'1','limit'=>$offset.",".$pagesize,'action'=>'lists',));}?>
			<!--<pre><?php echo print_r($data);?></pre>-->
			<?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>
			<?php list($copyfrom) = explode('|', $v['copyfrom'])?>
			<div class="zhu">
				<a href="<?php echo $v['url'];?>">
				<div class="left">
					<p><?php echo $v['title'];?></p>
					<span><?php echo $copyfrom;?> &ensp;|&ensp;<?php echo date('Y-m-d',$v['inputtime']);?></span>
				</div>
				<div class="right">
					<img src="<?php echo $v['thumb'];?>" style="height:100px;" />
				</div>
				</a>
			</div>
			<?php $n++;}unset($n); ?>
			<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
			<?php echo $pages;?>
			<?php include template('default','footer_1'); ?>
	</div>
	</body>
</html>
