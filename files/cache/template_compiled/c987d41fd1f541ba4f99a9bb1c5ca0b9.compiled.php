<?php if(!defined("__XE__"))exit;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/beluxe/tpl','header.html') ?>
<!--#Meta:modules/beluxe/tpl/js/sitemap.js--><?php $__tmp=array('modules/beluxe/tpl/js/sitemap.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<?php  $__Context->module_info->default_category_title ? 0 : $__Context->module_info->default_category_title = Context::getLang('category') ?>
<div id="dxiStMapFrm">
	<form  class="x_form-horizontal dxcStMap" id="menu_<?php echo $__Context->menuSrl ?>" method="post"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
	<input type="hidden" name="module" value="<?php echo $__Context->module=='admin'?'admin':$__Context->module_info->module ?>" />
	<input type="hidden" name="act" value="procBeluxeAdminInsertCategory" />
	<input type="hidden" name="module_srl" value="<?php echo $__Context->module_info->module_srl ?>" />
	<input type="hidden" name="success_return_url" value="<?php echo getRequestUriByServerEnviroment() ?>" />
		<div class="default_title">
			<input class="lang_code" type="text" name="default_category_title" placeholder="<?php echo $__Context->lang->category ?>" id="default_category_title" value="<?php echo htmlspecialchars($__Context->module_info->default_category_title, ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" />
		</div>
		<ul style="display:none" class="_template">
			<li>
				<input type="hidden" name="parent_key[]" value="0" class="_parent_key" disabled="disabled" />
				<input type="hidden" name="item_key[]" value="0" class="_item_key" disabled="disabled" />
				<input type="text" name="item_title[]" value="" placeholder="<?php echo $__Context->lang->title ?>" class="_lang_code _item_title" disabled="disabled" />
				<div class="side">
					<span class="dxSmSelect" data-index="0">
						<input type="hidden" name="item_type[]" value="" class="_value" disabled="disabled" />
						<label class="_title"><?php echo $__Context->lang->is_default ?></label>
						<dl class="dxcSmLayer x"></dl>
					</span>
					<span class="dxSmSelect" data-type="panel" data-index="1">
						<input type="hidden" name="item_color[]" value="" class="_item_color" disabled="disabled" />
						<input type="hidden" name="item_opts[]" value="N|@||@||@||@||@||@|" class="_value" disabled="disabled" />
						<label class="_title"><?php echo $__Context->lang->cmd_option ?></label>
						<dl class="dxcSmLayer x"></dl>
					</span>
					<?php if(count($__Context->group_list)){ ?><span class="dxSmSelect" data-type="array">
						<input type="hidden" name="group_srls[]" value="" class="_value" disabled="disabled" />
						<label class="_title"><?php echo $__Context->lang->category_group_srls ?></label>
						<dl class="dxcSmLayer _groupList x">
							<?php if($__Context->group_list&&count($__Context->group_list))foreach($__Context->group_list as $__Context->g_val){ ?><dt data-val="<?php echo $__Context->g_val->group_srl ?>">
							<label><input type="checkbox" value="<?php echo $__Context->g_val->group_srl ?>" disabled="disabled" /> <?php echo $__Context->g_val->title ?></label>
							</dt><?php } ?>
						</dl>
					</span><?php } ?>
					<a href="#delete" class="_delete x_icon-remove" title="<?php echo $__Context->lang->cmd_delete ?>"><em>X</em></a>
				</div>
			</li>
		</ul>
		<div class="lined">
			<ul id="nav_category">
				<?php if(count($__Context->menu)){ ?>
					<?php 
						$__Context->depth = 0;
						$__Context->list = $__Context->menu[0];
					 ?>
					<?php if($__Context->list&&count($__Context->list))foreach($__Context->list as $__Context->csrl=>$__Context->item){;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/beluxe/tpl','category.item.html');
} ?>
				<?php } ?>
			</ul>
		</div>
		<div class="x_clearfix btnArea">
			<a class="x_pull-left x_btn x_btn-warning" href="#remakeCache" data-type="category"><?php echo $__Context->lang->cmd_remake_cache ?></a>
			<span class="x_pull-right">
				<a class="x_btn" href="#addMenu"><?php echo $__Context->lang->add_menu ?></a>
				<button type="submit" class="x_btn x_btn-primary"><?php echo $__Context->lang->cmd_save ?></button>
			</span>
		</div>
	</form>
</div>
<script type="text/javascript">
//<![CDATA[
xe.lang.confirm_delete = "<?php echo $__Context->lang->confirm_delete ?>";
var dxvAddStmapMenuSample = [];
dxvAddStmapMenuSample['0'] = '<dt data-val="" class="defi"><?php echo $__Context->lang->is_default ?></dt><?php if($__Context->type_list&&count($__Context->type_list))foreach($__Context->type_list as $__Context->g_key=>$__Context->g_val){ ?><dt data-val="<?php echo $__Context->g_key ?>"><?php echo $__Context->g_val->title ?></dt><?php } ?>';
dxvAddStmapMenuSample['1'] = '<dt class="defi text"><select><option value="N"><?php echo $__Context->lang->collapse ?></option><option value="Y"><?php echo $__Context->lang->expand ?></option></select></dt> \
<dt class="defi"><input type="text" id="item_color" value="" class="color-indicator" /></dt> \
<dt>-- navigation ---</dt> \
<dt class="text"><label><select> \
<option value="" class="defi"><?php echo $__Context->lang->is_default ?></option> \
<?php if($__Context->order_target&&count($__Context->order_target))foreach($__Context->order_target as $__Context->key=>$__Context->val){ ?><option value="<?php echo $__Context->key ?>"><?php echo $__Context->val ?></option><?php } ?> \
</select> <?php echo $__Context->lang->order_target ?></label></dt> \
<dt class="text"><label><select> \
<option value="" class="defi"><?php echo $__Context->lang->is_default ?></option> \
<option value="asc"><?php echo $__Context->lang->order_asc ?></option> \
<option value="desc"><?php echo $__Context->lang->order_desc ?></option> \
</select> <?php echo $__Context->lang->order_type ?></label></dt> \
<dt class="text"><label><input type="text" value="" /> <?php echo $__Context->lang->list_count ?></label></dt> \
<dt class="text"><label><input type="text" value="" /> <?php echo $__Context->lang->page_count ?></label></dt> \
<dt class="text"><label><input type="text" value="" /> <?php echo $__Context->lang->comment_count ?></label></dt> \
<dt class="text"><label><input type="text" value="" /> <?php echo $__Context->lang->doc_bottom_list ?></label></dt>';
//]]>
</script>
<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/beluxe/tpl','footer.html') ?>
