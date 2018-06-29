<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>加盟我们</title>
	<link rel="icon" href="../../../../favicon.ico">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>website/basic.css">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>website/jiameng.css" />
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>website/banner.css" />
    <script src="https://www.zhongyehuanbao.cn/website/statics/js/website/jquery-1.11.0.min.js" type="text/javascript" charset="utf-8"></script>
		<script src="https://www.zhongyehuanbao.cn/website/statics/js/website/basic.js" type="text/javascript" charset="utf-8"></script>
		<script src="https://www.zhongyehuanbao.cn/website/statics/js/website/smoove.js" type="text/javascript" charset="utf-8"></script>
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
        <div class="slide-main" id="touchMain">
            <a class="prev" href="javascript:;" stat="prev1001">
                <img src="<?php echo IMG_PATH;?>website/l-btn.png" />
            </a>
            <div class="slide-box" id="slideContent">
                <div class="slide" id="bgstylec">
                    <a stat="sslink-3" href="#">
                        <img src="<?php echo IMG_PATH;?>website/ban4.jpg" />
                    </a>
                </div>
                <div class="slide" id="bgstylea">
                    <a stat="sslink-1" href="#">
                        <img src="<?php echo IMG_PATH;?>website/ban5.jpg" />
                    </a>
                </div>
                <div class="slide" id="bgstyleb">
                    <a stat="sslink-2" href="#">
                        <img src="<?php echo IMG_PATH;?>website/ban6.jpg" />
                    </a>
                </div>
            </div>
            <a class="next" href="javascript:;" stat="next1002">
                <img src="<?php echo IMG_PATH;?>website/r-btn.png" />
            </a>
            <div class="item">
                <a class="cur" stat="item1001" href="javascript:;"></a>
                <a href="javascript:;" stat="item1002"></a>
                <a href="javascript:;" stat="item1003"></a>
            </div>
        </div>
        <script type="text/javascript" src="<?php echo JS_PATH;?>website/banner.js"></script>
        <div class="main blo">
            <h2>微信小程序生态</h2>
            <div class="indexll2">
                <div class="indexlli2">
                    <img src="<?php echo IMG_PATH;?>website/1.1.png" />
                    <p>入口52个</p>
                </div>
                <div class="indexlli2">
                    <img src="<?php echo IMG_PATH;?>website/1.2.png" />
                    <p>无需下载注册</p>
                </div>
                <div class="indexlli2">
                    <img src="<?php echo IMG_PATH;?>website/1.3.png" />
                    <p>微信数据共享</p>
                </div>
                <div class="indexlli2">
                    <img src="<?php echo IMG_PATH;?>website/1.4.png" />
                    <p>微信小游戏</p>
                </div>
                <div class="indexlli2">
                    <img src="<?php echo IMG_PATH;?>website/1.5.png" />
                    <p>LBS位置、摄像头、音 视频能力共享
                    </p>
                </div>
                <div class="indexlli2">
                    <img src="<?php echo IMG_PATH;?>website/1.6.png" />
                    <p>APP与小程序 相互跳转
                    </p>
                </div>
                <div class="indexlli2">
                    <img src="<?php echo IMG_PATH;?>website/1.7.png" />
                    <p>微信群、朋友圈 分享转发
                    </p>
                </div>
                <div class="indexlli2">
                    <img src="<?php echo IMG_PATH;?>website/1.8.png" />
                    <p>11亿活跃用户</p>
                </div>
                <div class="indexlli2">
                    <img src="<?php echo IMG_PATH;?>website/1.9.png" />
                    <p>微信卡券</p>
                </div>
                <div class="indexlli2">
                    <img src="<?php echo IMG_PATH;?>website/2.0.png" />
                    <p>小程序应用商店</p>
                </div>
            </div>
        </div>

        <div class="content blo">
            <h2>中也小程序优势</h2>
            <ul>
                <li>
                    <img src="<?php echo IMG_PATH;?>website/99.png" width="25%" />
                    <h4>丰富的模板</h4>
                    <p>模板涵模板涵盖94%的市场行业提供一站式行业解决方案 </p>
                </li>
                <li>
                    <img src="<?php echo IMG_PATH;?>website/88.png" width="25%" />
                    <h4>完善的服务</h4>
                    <p>一对一视频解决运营难题 设计开发运营维护一条龙式服务 成熟的运营销售团队%的市场行业提供一站式行业解决方案 </p>
                </li>
                <li>
                    <img src="<?php echo IMG_PATH;?>website/77.png" width="25%" />
                    <h4>制作简易</h4>
                    <p>功能组件齐全 无需代码可视化编辑 直接拖拽组件</p>
                </li>
                <li>
                    <img src="<?php echo IMG_PATH;?>website/66.png" width="25%" />
                    <h4>强大的后台</h4>
                    <p>涵盖访客分析、用户管理、商品管理、多商家管理等多项功能搭建精细化运营体系 </p>
                </li>
            </ul>
        </div>
        <div class="ppp blo">
            <h3>加盟项目类型</h3>
            <div class="indexl1">

                <div class="indexlli">
                    <img src="<?php echo IMG_PATH;?>website/indexl11.png" />
                    <h3>新零售</h3>
                    <p>线上运营，线下消费，网上处理订单，快捷方便</p>
                    <div class="mengban1">
                        <a href="nine/1/1.html"></a>
                    </div>
                </div>
                <div class="indexlli">
                    <img src="<?php echo IMG_PATH;?>website/indexl12.png" />
                    <h3>预约管理</h3>
                    <p>合理分配资源，弹性管理，提升商家运营效率</p>
                    <div class="mengban2">
                        <a href="nine/2/1.html"></a>
                    </div>
                </div>
                <div class="indexlli">
                    <img src="<?php echo IMG_PATH;?>website/indexl13.png" />
                    <h3>点餐服务</h3>
                    <p>线上预约，线下点餐，节约人力，提高服务</p>
                    <div class="mengban3">
                        <a href="nine/3/1.html"></a>
                    </div>
                </div>
                <div class="indexlli">
                    <img src="<?php echo IMG_PATH;?>website/indexl14.png" />
                    <h3>外卖系统</h3>
                    <p>自己的外卖订单管理系统，更好创收</p>
                    <div class="mengban4">
                        <a href="nine/4/1.html"></a>
                    </div>
                </div>
                <div class="indexlli">
                    <img src="<?php echo IMG_PATH;?>website/indexl15.png" />
                    <h3>新闻热点</h3>
                    <p>同步热点新闻，提高客户黏度</p>
                    <div class="mengban5">
                        <a href="nine/5/1.html"></a>
                    </div>
                </div>
                <div class="indexlli">
                    <img src="<?php echo IMG_PATH;?>website/indexl16.png" />
                    <h3>多店管理</h3>
                    <p>多个店铺一个管理，提高运营效果</p>
                    <div class="mengban6">
                        <a href="nine/6/1.html"></a>
                    </div>
                </div>
                <div class="indexlli">
                    <img src="<?php echo IMG_PATH;?>website/indexl17.png" />
                    <h3>智慧商家</h3>
                    <p>WiFi、会员卡、等多种方案引导消费</p>
                    <div class="mengban7">
                        <a href="nine/7/1.html"></a>
                    </div>
                </div>
                <div class="indexlli">
                    <img src="<?php echo IMG_PATH;?>website/indexl18.png" />
                    <h3>同城系统</h3>
                    <p>线上交流，多种数据汇总，时刻了解客户最新动态</p>
                    <div class="mengban8">
                        <a href="nine/8/1.html"></a>
                    </div>
                </div>
                <div class="indexlli">
                    <img src="<?php echo IMG_PATH;?>website/indexl19.png" />
                    <h3>营销系统</h3>
                    <p>秒杀、拼团、砍价、减免、优惠码等多种方案助力运营</p>
                    <div class="mengban9">
                        <a href="nine/9/1.html"></a>
                    </div>
                </div>
            </div>
        </div>
        <script type="text/javascript">
            $(".indexl1 div").hover(function () {
                $(this).find("div").animate({
                    "opacity": "0.3"
                }, 200)
            }, function () {
                $(this).find("div").animate({
                    "opacity": "0"
                }, 200)
            })
            $(".indexlli").hover(function () {
                $(this).find("p")
                $(this).find("p").animate({
                    "opacity": "1"
                }, 200)
            }, function () {
                $(this).find("p").animate({
                    "opacity": "0"
                }, 200)
            })
			$('.blo').smoove({
                    offset: '30%'
                });
        </script>
        <div class="xian blo"></div>
        <div class="dongzhan blo">
            <h2>加盟支持</h2>
            <div>
                <h3>盈利模式</h3>
            </div>
            <ul>
                <li>
                    <img src="<?php echo IMG_PATH;?>website/zhi1.png" width="25%" />
                    <h4>定制收入</h4>
                    <p>代理商向中也科技提供定制小程序需求，总部开发获取利润差 </p>
                </li>
                <li>
                    <img src="<?php echo IMG_PATH;?>website/zhi2.png" width="25%" />
                    <h4>推广收入</h4>
                    <p>代理商自行发展下线，快速赚取销售差价 </p>
                </li>
                <li>
                    <img src="<?php echo IMG_PATH;?>website/zhi3.png" width="25%" />
                    <h4>制作收入</h4>
                    <p>代理商以极低的价格获得中也小程序开发权限，简单制作小程序获得利润</p>
                </li>
            </ul>
        </div>
        <div class="form blo">
            <h2>加盟我们</h2>
            <div class="font">
                <script language='javascript' src='<?php echo APP_PATH;?>index.php?m=formguide&c=index&a=show&formid=12&action=js&siteid=1'></script>
                <!--<form action="#" method="post" id="userxinxi">-->
                    <!--<p>-->
                        <!--<label for="user">您的姓名</label>-->
                        <!--<input value="" type="text" id="user" name="user_name" />-->
                    <!--</p>-->
                    <!--<p>-->
                        <!--<label for="tel">您的电话</label>-->
                        <!--<input value="" type="tel" id="tel"  name="user_phone"/>-->
                    <!--</p>-->
                    <!--<p class="wouldp">-->
                        <!--<label for="would">咨询意向</label>-->
                        <!--<textarea name="would" id="would" name="user_intention"></textarea>-->
                    <!--</p>-->
                    <!--<p class="pcti">-->
                        <!--<label for="tijiao" class="pctila"></label>-->
                        <!--<input type="submit" id="tijiao" style="border: 1px solid #333;margin-top: 30px;text-indent: 0;" value="提交" />-->
                    <!--</p>-->
                <!--</form>-->
            </div>
        </div>
        
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
                $(".panel li a").css("height", 0.1 * waphei);
                $(".panel li a").css("lineHeight", 0.1 * waphei + "px")
            }
        </script>

        <div class="wapjiacon" style="margin-top: 50px;">
            <div class="top">
                        <img src="<?php echo IMG_PATH;?>website/top_bg.jpg" width="100%" />
                        <div class="dengpao">
                            <ul>
                                <li>
                                    <img src="<?php echo IMG_PATH;?>website/deng-1.jpg" width="85%" />
                                    <p>功能组件齐全 无需代码可视化编辑 直接拖拽组件</p>
                                </li>
                                <li>
                                    <img src="<?php echo IMG_PATH;?>website/deng-2.jpg" width="85%" />
                                    <p>模板涵模板涵盖94%的市场行业提供一站式行业解决方案 </p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="jiyu">
                        <h2>抓住微信小程序新机遇</h2>
                        <p>想要抓住微信小程序这一新机遇，就必须先要拥有自己的小程序。越来越多的商家和企业，选择使用“极速应用”这样的高效率专业的小程序制作工具。近在咫尺现在在面向全国招募代理，与我们一起快速打开全国市场。</p>
                    </div>
                    <div class="chengxu">
                        <ul>
                            <li>
                                <img src="<?php echo IMG_PATH;?>website/chengxu1.png" alt="" />
                                <h3>独有的小程序，无需代码专属定制</h3>
                            </li>
                            <li>
                                <img src="<?php echo IMG_PATH;?>website/chengxu2.png" alt="" />
                                <h3>无需下载、兼容性更好</h3>
                            </li>
                            <li>
                                <img src="<?php echo IMG_PATH;?>website/chengxu3.png" alt="" />
                                <h3>快捷、灵活、用完即走</h3>
                            </li>
                            <li>
                                <img src="<?php echo IMG_PATH;?>website/chengxu4.png" alt="" />
                                <h3>满足特殊场景下的个性化需求</h3>
                            </li>
                        </ul>
                    </div>
                    <div class="ppp">
            
                        <h3>加盟项目类型</h3>
                        <div class="indexl1">
            
                            <div class="indexlli">
                                <img src="<?php echo IMG_PATH;?>website/indexl11.png" />
                                <h3>新零售</h3>
                                <p>线上运营，线下消费，网上处理订单，快捷方便</p>
            
                            </div>
                            <div class="indexlli">
                                <img src="<?php echo IMG_PATH;?>website/indexl12.png" />
                                <h3>预约管理</h3>
                                <p>合理分配资源，弹性管理，提升商家运营效率</p>
            
                            </div>
                            <div class="indexlli">
                                <img src="<?php echo IMG_PATH;?>website/indexl13.png" />
                                <h3>点餐服务</h3>
                                <p>线上预约，线下点餐，节约人力，提高服务</p>
            
                            </div>
                            <div class="indexlli">
                                <img src="<?php echo IMG_PATH;?>website/indexl14.png" />
                                <h3>外卖系统</h3>
                                <p>自己的外卖订单管理系统，更好创收</p>
            
                            </div>
                            <div class="indexlli">
                                <img src="<?php echo IMG_PATH;?>website/indexl15.png" />
                                <h3>新闻热点</h3>
                                <p>同步热点新闻，提高客户黏度</p>
            
                            </div>
                            <div class="indexlli">
                                <img src="<?php echo IMG_PATH;?>website/indexl16.png" />
                                <h3>多店管理</h3>
                                <p>多个店铺一个管理，提高运营效果</p>
            
                            </div>
                            <div class="indexlli">
                                <img src="<?php echo IMG_PATH;?>website/indexl17.png" />
                                <h3>智慧商家</h3>
                                <p>WiFi、会员卡、等多种方案引导消费</p>
            
                            </div>
                            <div class="indexlli">
                                <img src="<?php echo IMG_PATH;?>website/indexl18.png" />
                                <h3>同城系统</h3>
                                <p>线上交流，多种数据汇总，时刻了解客户最新动态</p>
            
                            </div>
                            <div class="indexlli">
                                <img src="<?php echo IMG_PATH;?>website/indexl19.png" />
                                <h3>营销系统</h3>
                                <p>秒杀、拼团、砍价、减免、优惠码等多种方案助力运营</p>
            
                            </div>
                        </div>
                    </div>
                    <div class="chengxu op">
                        <h2>我们需要这样的你</h2>
                        <p>团队人员超过5人以上优先
                            <br />有互联网行业经验者优先，具备管理经验者优先</p>
                    </div>
        </div>
		<div class="form1">
		            <h2>加盟我们</h2>
		            <div class="font">
                        <script language='javascript' src='<?php echo APP_PATH;?>index.php?m=formguide&c=index&a=show&formid=12&action=js&siteid=1'></script>
		                
		            </div>
		        </div>
		        

        <?php include template('default','footer_1'); ?>
    </div>
</body>

</html>
