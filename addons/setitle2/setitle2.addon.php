<?php
	if(!defined("__ZBXE__")) exit();
	if(Context::getResponseMethod()!='HTML') return;
	if($called_position != "before_display_content") return;

	if(Context::get('module') == 'admin' && $addon_info->isadmin == "notadmin") return;
	if ($addon_info->isadmin == "onlyadmin" && Context::get('module') != 'admin')return; //관리자 출력여부

	$member = Context::get('logged_info');
	$module = &getModel('module');
	$point = &getModel('point');
	$pointconfig = $module->getModuleConfig('point'); //각종 정보 담아오기

	if ($addon_info->permission == "memberonly" && !$member->user_id) return;
	if ($addon_info->permission == "notmember" && $member->user_id) return; //멤버만 적용시키기

	$title1 = explode("/%/", $addon_info->vtitle1);
	$title1 = $title1[mt_rand(0,(count($title1) - 1))];
	$title2 = explode("/%/", $addon_info->vtitle2);
	$title2 = $title2[mt_rand(0,(count($title2) - 1))]; //가상타이틀을 변수에 넣기

	$oldTitle = Context::getBrowserTitle();
	if ($addon_info->striptag == "Y"){$oldTitle = strip_tags($oldTitle);} //기존타이틀 가져오기

	$title1 = str_replace("%id%", $member->user_id, $title1);
	$title2 = str_replace("%id%", $member->user_id, $title2);
	$title1 = str_replace("%nick%", $member->nick_name, $title1);
	$title2 = str_replace("%nick%", $member->nick_name, $title2);
	$title1 = str_replace("%name%", $member->user_name, $title1);
	$title2 = str_replace("%name%", $member->user_name, $title2);
	$title1 = str_replace("%point%", $point->getPoint(abs($member->member_srl)), $title1);
	$title2 = str_replace("%point%", $point->getPoint(abs($member->member_srl)), $title2);
	$title1 = str_replace("%level%", $point->getLevel(($point->getPoint(abs($member->member_srl))), $pointconfig->level_step), $title1);
	$title2 = str_replace("%level%", $point->getLevel(($point->getPoint(abs($member->member_srl))), $pointconfig->level_step), $title2); //치환자

	switch ($addon_info->type){
		case "backward": $title = $oldTitle . " " . $title1; break;
		case "only1": $title = $title1; break;
		case "random": if (mt_rand(0,1)==0){ $title = $title1; }else{ $title=$title2; } break;
		case "all": $title = $title1 . " " . $oldTitle . " " . $title2; break;
		default: $title = $title = $title1 . " " . $oldTitle;
	} //타이틀 가공


	Context::setBrowserTitle($title); //적용
?>