<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><div class="panel">
    <p class="barguan">关闭</p>
    <ul>
        <li>
            <a href="index.html">首页</a>
        </li>
        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=e4e1ce50443144b5f6717f1036834b82&action=category&num=4&order=listorder+DESC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('order'=>'listorder DESC','limit'=>'4',));}?>
        <?php $n=1;if(is_array($data)) foreach($data AS $val) { ?><li>
        <li>
            <a href="<?php echo $val['url'];?>"><?php echo $val['catname'];?></a>
        </li>
        <?php $n++;}unset($n); ?>
        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
    </ul>
</div>

<div class="wapheader">
    <div class="waplogo">
        <a href="index.html">
            <img src="<?php echo IMG_PATH;?>website/waplogo.png">
        </a>
    </div>
    <div class="wapbar">
        <img src="<?php echo IMG_PATH;?>website/bar.png">
    </div>
</div>