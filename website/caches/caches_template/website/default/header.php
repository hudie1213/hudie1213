<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><header>
    <div class="top flexbasic">
        <div class="logo"><img src="<?php echo IMG_PATH;?>website/logo.jpg" /></div>
        <nav class="nav">
            <a href="index.html">首页</a>
            <!--<a href="anli.html">案例</a>-->
            <!--<a href="jiameng.html">小程序加盟</a>-->
            <!--<a href="zixun.html">小程序资讯</a>-->
            <!--<a href="about.html">关于我们</a>-->
            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=e4e1ce50443144b5f6717f1036834b82&action=category&num=4&order=listorder+DESC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('order'=>'listorder DESC','limit'=>'4',));}?>
            <?php $n=1;if(is_array($data)) foreach($data AS $val) { ?>
            <a href="<?php echo $val['url'];?>"><?php echo $val['catname'];?></a>
            <?php $n++;}unset($n); ?>
            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
        </nav>
        <div class="login none">
            <a href="">登录</a>
            <a href="">注册</a>
        </div>
    </div>
</header>