<?php if(!defined("__XE__"))exit;?><li>
	<input type="hidden" name="parent_key[]" value="<?php echo $__Context->item->parent_srl ?>" class="_parent_key" />
	<input type="hidden" name="item_key[]" value="<?php echo $__Context->item->category_srl ?>" class="_item_key" />
	<input class="lang_code" type="text" name="item_title[]" placeholder="<?php echo $__Context->lang->title ?>" value="<?php echo htmlspecialchars($__Context->item->title, ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" />
	<span class="side">
		<?php  $__Context->g_val = $__Context->type_list[$__Context->item->type] ?>
		<span class="dxSmSelect" data-index="0">
			<input type="hidden" name="item_type[]" value="<?php echo $__Context->g_val?$__Context->item->type:'' ?>" class="_value" />
			<label class="_title"><?php echo $__Context->g_val?$__Context->g_val->title:$__Context->lang->is_default ?></label>
			<dl class="dxcSmLayer x"></dl>
		</span>
		<span class="dxSmSelect" data-type="panel" data-index="1"<?php if($__Context->item->color){ ?> style="border:1px solid <?php echo $__Context->item->color ?>;"<?php } ?>>
			<input type="hidden" name="item_color[]" value="<?php echo $__Context->item->color ?>" class="_item_color" />
			<?php 
				$__Context->tmp = array($__Context->item->navigation->sort_index,$__Context->item->navigation->order_type,$__Context->item->navigation->list_count,$__Context->item->navigation->page_count,$__Context->item->navigation->clist_count,$__Context->item->navigation->dlist_count);
				$__Context->tmp = $__Context->item->expand.'|@|'.implode('|@|',$__Context->tmp);
			 ?>
			<input type="hidden" name="item_opts[]" value="<?php echo $__Context->tmp ?>" class="_value" />
			<label class="_title"<?php if($__Context->tmp!='N|@||@||@||@||@||@|'){ ?> style="color:blue"<?php } ?>><?php echo $__Context->lang->cmd_option ?></label>
			<dl class="dxcSmLayer x"></dl>
		</span>
		<?php if(count($__Context->group_list)){ ?><span class="dxSmSelect" data-type="array">
			<input type="hidden" name="group_srls[]" value="<?php echo implode('|@|',$__Context->item->group_srls) ?>" class="_value" />
			<label class="_title"<?php if(count($__Context->item->group_srls)){ ?> style="color:blue"<?php } ?>><?php echo $__Context->lang->category_group_srls ?></label>
			<dl class="dxcSmLayer x">
				<?php if($__Context->group_list&&count($__Context->group_list))foreach($__Context->group_list as $__Context->g_val){ ?><dt data-val="<?php echo $__Context->g_val->group_srl ?>">
					<label><input type="checkbox" value="<?php echo $__Context->g_val->group_srl ?>"<?php if(in_array($__Context->g_val->group_srl,$__Context->item->group_srls)){ ?> checked="checked"<?php } ?> /> <?php echo $__Context->g_val->title ?></label>
				</dt><?php } ?>
			</dl>
		</span><?php } ?>
		<a href="#delete" class="x_inline _delete x_icon-remove" title="<?php echo $__Context->lang->cmd_delete ?>"><em>X</em></a>
	</span>
	<?php if($__Context->csrl && $__Context->menu[$__Context->csrl]){ ?><ul>
		<?php 
			$__Context->depth++;
			$__Context->list = $__Context->menu[$__Context->csrl];
		 ?>
		<?php if($__Context->list&&count($__Context->list))foreach($__Context->list as $__Context->csrl=>$__Context->item){;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/beluxe/tpl','category.item.html');
} ?>
	</ul><?php } ?>
</li>
