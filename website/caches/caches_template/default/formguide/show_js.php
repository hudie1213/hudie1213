<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><script language="javascript" type="text/javascript" src="<?php echo JS_PATH;?>dialog.js"></script>
<link href="<?php echo CSS_PATH;?>table_form.css" rel="stylesheet" type="text/css" />
<link href="<?php echo CSS_PATH;?>dialog.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="<?php echo JS_PATH;?>dialog.js"></script>
<div class="box">

    <div class="content1">
				<form method="post" action="<?php echo APP_PATH;?>index.php?m=formguide&c=index&a=show&formid=<?php echo $formid;?>&siteid=<?php echo $this->siteid;?>"<?php if($no_allowed) { ?> target="member_login"<?php } ?> name="myform" id="myform">
<table class="table_form" width="100%" cellspacing="0">
<tbody>
 <?php $n=1; if(is_array($forminfos_data)) foreach($forminfos_data AS $field => $info) { ?>
	<?php if($info['formtype']=='omnipotent') { ?>
		<?php $n=1; if(is_array($forminfos_data)) foreach($forminfos_data AS $_fm => $_fm_value) { ?>
			<?php if($_fm_value['iscomnipotent']) { ?>
				<?php $info['form'] = str_replace('{'.$_fm.'}',$_fm_value['form'],$info['form']);?>
			<?php } ?>
		<?php $n++;}unset($n); ?>
	<?php } ?>
	<tr>
      <th width="30%" style="padding: 0;text-align: right;font-size: 18px;" class="ziduan"><?php if($info['star']) { ?> <font color="red">*</font><?php } ?> <span><?php echo $info['name'];?></span>
	  </th>
      <td style="padding-top:30px;box-sizing:border-box;text-align: center;width: 70%;" class="input"><?php echo $info['form'];?>  <?php echo $info['tips'];?></td>
    </tr>
<?php $n++;}unset($n); ?>
<tr>
	<td class="yinti"></td>
<td   class="submittd"><div class="submit ib"><input style="width:140px;height: 50px;margin-top: 30px; margin-left:13%;text-indent:0;" type="submit"<?php if($no_allowed) { ?> disabled=""<?php } ?> name="dosubmit" id="dosubmit" value=" 提交 "></div> <?php if($no_allowed) { ?>您还没有<a href="<?php echo APP_PATH;?>index.php?m=member&c=index&alogin&forward=<?php echo urlencode(HTTP_REFERER);?>" style="color:red">登录</a>或<a href="" style="color:red">注册</a>网站，请登录后提交表单<?php } ?></td>
</tr>
	</tbody>
</table>

</form>
    </div>
</div>