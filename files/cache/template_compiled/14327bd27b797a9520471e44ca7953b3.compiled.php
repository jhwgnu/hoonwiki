<?php if(!defined("__XE__"))exit;?>
<?php if($__Context->not_permitted){ ?>
<?php Context::addJsFile("modules/beluxe/ruleset/checkPassword.xml", FALSE, "", 0, "body", TRUE, "") ?><form  action="./" method="post" class="pid_ajax-form"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" /><input type="hidden" name="ruleset" value="checkPassword" />
<?php if($__Context->is_modal){ ?><input type="hidden" name="is_modal" value="2" /><?php } ?>
<input type="hidden" name="success_return_url" value="<?php echo getUrl('is_modal',$__Context->is_modal?2:'') ?>" />
<input type="hidden" name="comment_srl" value="<?php echo $__Context->comment_srl ?>" />
<input type="hidden" name="act" value="procBoardVerificationPassword" />
	<div>
		<span class="scBtn black"><input type="password" name="password" placeholder="<?php echo $__Context->lang->password ?>" /></span>
		<span class="scBtn black"><input type="submit" value="<?php echo $__Context->lang->cmd_input ?>" /></span>
		<span class="scBtn"><a href="<?php echo getUrl('act',!$__Context->is_modal||($__Context->is_modal&&!$__Context->us_vmodal)?'':'dispBoardContentCommentList') ?>"<?php if($__Context->is_modal&&!$__Context->us_vmodal){ ?> data-modal-hide<?php } ?>><?php echo $__Context->lang->cmd_back ?></a></span>
	</div>
</form>
<?php }else{ ?>
<?php Context::addJsFile("modules/beluxe/ruleset/deleteComment.xml", FALSE, "", 0, "body", TRUE, "") ?><form  action="./" method="post" class="pid_ajax-form"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" /><input type="hidden" name="ruleset" value="deleteComment" />
<?php if($__Context->is_modal){ ?><input type="hidden" name="is_modal" value="<?php echo $__Context->us_vmodal?2:1 ?>" /><?php } ?>
<?php if($__Context->is_modal&&$__Context->us_vmodal){ ?><input type="hidden" name="success_return_act" value="dispBoardContentCommentList" /><?php } ?>
<input type="hidden" name="module_srl" value="<?php echo $__Context->mi->module_srl ?>" />
<input type="hidden" name="document_srl" value="<?php echo $__Context->document_srl ?>" />
<input type="hidden" name="comment_srl" value="<?php echo $__Context->comment_srl ?>" />
<input type="hidden" name="act" value="procBoardDeleteComment" />
	<?php 
		$__Context->ds_nick = $__Context->ci['nick_name']->display == 'Y';
		$__Context->ds_user =	$__Context->ci['user_name']->display == 'Y';
	 ?>
	<div id="siWrt">
		<div class="scCpar clearBar">
			<div class="author">
				<?php if(($__Context->mi->display_profile!='N'&&$__Context->mi->display_profile!='D')){ ?>
					<?php if($__Context->oComment->getProfileImage()){ ?><img src="<?php echo $__Context->oComment->getProfileImage() ?>" alt="Profile" class="profile" /><?php } ?>
					<?php if(!$__Context->oComment->getProfileImage()){ ?><span class="profile"></span><?php } ?>
				<?php } ?>
				<h3>
					<?php 
						$__Context->mbsl = $__Context->oComment->get('member_srl');
						$__Context->home = $__Context->oComment->get('homepage');
						$__Context->nick = (!$__Context->mbsl||$__Context->ds_nick||!$__Context->ds_user)?$__Context->oComment->getNickName():'';
						$__Context->nick .= ($__Context->mbsl&&$__Context->ds_user)?($__Context->nick?' (':'').$__Context->oComment->getUserName().($__Context->nick?')':''):'';
					 ?>
					<?php if(!$__Context->mbsl && !$__Context->home){ ?><i><?php echo $__Context->nick ?></i><?php } ?>
					<?php if($__Context->mbsl){ ?><span class="scHLink member_<?php echo $__Context->mbsl ?>"><?php echo $__Context->nick ?></span><?php } ?>
					<?php if(!$__Context->mbsl && $__Context->home){ ?><i class="scHLink" data-href="<?php echo $__Context->home ?>"><?php echo $__Context->nick ?></i><?php } ?>
				</h3>
				<p class="time"><?php echo $__Context->oComment->getRegdate('Y.m.d H:i') ?></p>
			</div>
			<div class="scPvCon clearBar">
				<?php echo preg_replace(array('!(<[A-Za-z]+\s+[^>]*)name\s*=\s*(\"|\')?([^>\"\']+)(\"|\')?!is','!<(iframe|embed|object)([^>]*)>(.*?)<\/(iframe|embed|object)>!is'), array('$1','<div class="message"><p>$1 $2</p></div>'), $__Context->oComment->getContent(false)) ?>
			</div>
		</div>
		<div class="btnArea"<?php if($__Context->is_modal){ ?> style="margin-bottom:0"<?php } ?>>
			<span class="scBtn"><a href="<?php echo getUrl('act',!$__Context->is_modal||($__Context->is_modal&&!$__Context->us_vmodal)?'':'dispBoardContentCommentList') ?>"<?php if($__Context->is_modal&&!$__Context->us_vmodal){ ?> data-modal-hide<?php } ?>>
				<?php echo $__Context->is_modal&&!$__Context->us_vmodal?$__Context->lang->cmd_close:$__Context->lang->cmd_back ?>
			</a></span>
			<span class="scBtn black"><button type="submit" accesskey="s"><?php echo $__Context->lang->comment ?> <?php echo $__Context->lang->cmd_delete ?></button></span>
		</div>
	</div>
</form>
<?php } ?>