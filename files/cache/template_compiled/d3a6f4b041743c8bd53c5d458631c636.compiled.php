<?php if(!defined("__XE__"))exit;
if($__Context->is_modal){;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/beluxe/skins/default','___setting.html');
} ?>
<?php if(!$__Context->is_modal){;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/beluxe/skins/default','__header.html');
} ?>
<div id="siHrm"><a name="document"></a>
	<ul class="scFrm">
		<li class="scElps"><strong><?php echo $__Context->lang->tag ?></strong></li>
	</ul>
</div>
<div id="siBody">
	<div class="scContent">
		<div class="scTags">
			<?php if($__Context->tag_list&&count($__Context->tag_list))foreach($__Context->tag_list as $__Context->val){ ?>
				<?php if($__Context->val->count>20){ ?>
					<?php  $__Context->tag_class = "rank i1"  ?>
				<?php }elseif($__Context->val->count>15){ ?>
					<?php  $__Context->tag_class = "rank i2"  ?>
				<?php }elseif($__Context->val->count>10){ ?>
					<?php  $__Context->tag_class = "rank i3"  ?>
				<?php }elseif($__Context->val->count>5){ ?>
					<?php  $__Context->tag_class = "i4"  ?>
				<?php }else{ ?>
					<?php  $__Context->tag_class = ""  ?>
				<?php } ?>
				<?php if($__Context->layout_info->mid){ ?>
					<a<?php if($__Context->tag_class){ ?> class="<?php echo $__Context->tag_class ?>"<?php } ?> href="<?php echo getUrl('','mid',$__Context->layout_info->mid,'search_target','tag','search_keyword',$__Context->val->tag) ?>"><?php echo htmlspecialchars($__Context->val->tag) ?></a>
				<?php }else{ ?>
					<a<?php if($__Context->tag_class){ ?> class="<?php echo $__Context->tag_class ?>"<?php } ?> href="<?php echo getUrl('','mid',$__Context->mid,'search_target','tag','search_keyword',$__Context->val->tag) ?>"><?php echo htmlspecialchars($__Context->val->tag) ?></a>
				<?php } ?>
			<?php } ?>
		</div>
	</div>
</div>
<div class="btnArea">
    <span class="scBtn"><a href="<?php echo getUrl('act','') ?>"><?php echo $__Context->lang->cmd_back ?></a></span>
</div>
<?php if(!$__Context->is_modal){;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/beluxe/skins/default','__footer.html');
} ?>