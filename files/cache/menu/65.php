<?php if(!defined("__XE__")) exit(); $menu = new stdClass();$lang_type = Context::getLangType(); $is_logged = Context::get('is_logged'); $logged_info = Context::get('logged_info'); $site_srl = 0;$site_admin = false;if($site_srl) { $oModuleModel = getModel('module');$site_module_info = $oModuleModel->getSiteInfo($site_srl); if($site_module_info) Context::set('site_module_info',$site_module_info);else $site_module_info = Context::get('site_module_info');$grant = $oModuleModel->getGrant($site_module_info, $logged_info); if($grant->manager ==1) $site_admin = true;}if($is_logged) {if($logged_info->is_admin=="Y") $is_admin = true; else $is_admin = false; $group_srls = array_keys($logged_info->group_list); } else { $is_admin = false; $group_srls = array(); }; $_menu_names[67] = array("en"=>'Welcome Page',"ko"=>'Welcome Page',"jp"=>'Welcome Page',"zh-CN"=>'Welcome Page',"zh-TW"=>'Welcome Page',"fr"=>'Welcome Page',"de"=>'Welcome Page',"ru"=>'Welcome Page',"es"=>'Welcome Page',"tr"=>'Welcome Page',"vi"=>'Welcome Page',"mn"=>'Welcome Page',); $_menu_names[69] = array("en"=>'Board',"ko"=>'Board',"jp"=>'Board',"zh-CN"=>'Board',"zh-TW"=>'Board',"fr"=>'Board',"de"=>'Board',"ru"=>'Board',"es"=>'Board',"tr"=>'Board',"vi"=>'Board',"mn"=>'Board',); $_menu_names[70] = array("en"=>'SAMPLE 1',"ko"=>'SAMPLE 1',"jp"=>'SAMPLE 1',"zh-CN"=>'SAMPLE 1',"zh-TW"=>'SAMPLE 1',"fr"=>'SAMPLE 1',"de"=>'SAMPLE 1',"ru"=>'SAMPLE 1',"es"=>'SAMPLE 1',"tr"=>'SAMPLE 1',"vi"=>'SAMPLE 1',"mn"=>'SAMPLE 1',); $_menu_names[71] = array("en"=>'SAMPLE 1-1',"ko"=>'SAMPLE 1-1',"jp"=>'SAMPLE 1-1',"zh-CN"=>'SAMPLE 1-1',"zh-TW"=>'SAMPLE 1-1',"fr"=>'SAMPLE 1-1',"de"=>'SAMPLE 1-1',"ru"=>'SAMPLE 1-1',"es"=>'SAMPLE 1-1',"tr"=>'SAMPLE 1-1',"vi"=>'SAMPLE 1-1',"mn"=>'SAMPLE 1-1',); $_menu_names[72] = array("en"=>'SAMPLE 2',"ko"=>'SAMPLE 2',"jp"=>'SAMPLE 2',"zh-CN"=>'SAMPLE 2',"zh-TW"=>'SAMPLE 2',"fr"=>'SAMPLE 2',"de"=>'SAMPLE 2',"ru"=>'SAMPLE 2',"es"=>'SAMPLE 2',"tr"=>'SAMPLE 2',"vi"=>'SAMPLE 2',"mn"=>'SAMPLE 2',); $_menu_names[73] = array("en"=>'SAMPLE 3',"ko"=>'SAMPLE 3',"jp"=>'SAMPLE 3',"zh-CN"=>'SAMPLE 3',"zh-TW"=>'SAMPLE 3',"fr"=>'SAMPLE 3',"de"=>'SAMPLE 3',"ru"=>'SAMPLE 3',"es"=>'SAMPLE 3',"tr"=>'SAMPLE 3',"vi"=>'SAMPLE 3',"mn"=>'SAMPLE 3',); $_menu_names[75] = array("en"=>'XEIcon',"ko"=>'XEIcon',"jp"=>'XEIcon',"zh-CN"=>'XEIcon',"zh-TW"=>'XEIcon',"fr"=>'XEIcon',"de"=>'XEIcon',"ru"=>'XEIcon',"es"=>'XEIcon',"tr"=>'XEIcon',"vi"=>'XEIcon',"mn"=>'XEIcon',); $_menu_names[135] = array("en"=>'빅데이터핀테크',"ko"=>'빅데이터핀테크',"jp"=>'빅데이터핀테크',"zh-CN"=>'빅데이터핀테크',"zh-TW"=>'빅데이터핀테크',"fr"=>'빅데이터핀테크',"de"=>'빅데이터핀테크',"ru"=>'빅데이터핀테크',"es"=>'빅데이터핀테크',"tr"=>'빅데이터핀테크',"vi"=>'빅데이터핀테크',"mn"=>'빅데이터핀테크',); $_menu_names[133] = array("en"=>'통계학',"ko"=>'통계학',"jp"=>'통계학',"zh-CN"=>'통계학',"zh-TW"=>'통계학',"fr"=>'통계학',"de"=>'통계학',"ru"=>'통계학',"es"=>'통계학',"tr"=>'통계학',"vi"=>'통계학',"mn"=>'통계학',); $_menu_names[131] = array("en"=>'데이터분석',"ko"=>'데이터분석',"jp"=>'데이터분석',"zh-CN"=>'데이터분석',"zh-TW"=>'데이터분석',"fr"=>'데이터분석',"de"=>'데이터분석',"ru"=>'데이터분석',"es"=>'데이터분석',"tr"=>'데이터분석',"vi"=>'데이터분석',"mn"=>'데이터분석',); $_menu_names[138] = array("en"=>'test1',"ko"=>'test1',"jp"=>'test1',"zh-CN"=>'test1',"zh-TW"=>'test1',"fr"=>'test1',"de"=>'test1',"ru"=>'test1',"es"=>'test1',"tr"=>'test1',"vi"=>'test1',"mn"=>'test1',); ; $menu->list = array(67=>array("node_srl" => 67, "parent_srl" => 0, "menu_name_key" => 'Welcome Page', "isShow" => (true ? true : false), "text" => (true ? $_menu_names[67][$lang_type] : ""), "href" => (true ? '' : ""), "url" => (true ? '' : ""), "is_shortcut" => 'Y', "desc" => '', "open_window" => 'N', "normal_btn" => '', "hover_btn" => '', "active_btn" => '', "selected" => (array("") && in_array(Context::get("mid"), array("")) ? 1 : 0), "expand" => 'N', "list" => array(), "link" => (true ? (array("") && in_array(Context::get("mid"), array("")) ? $_menu_names[67][$lang_type] : $_menu_names[67][$lang_type]) : ""),),69=>array("node_srl" => 69, "parent_srl" => 0, "menu_name_key" => 'Board', "isShow" => (true ? true : false), "text" => (true ? $_menu_names[69][$lang_type] : ""), "href" => (true ? getSiteUrl('', '','mid','board') : ""), "url" => (true ? 'board' : ""), "is_shortcut" => 'N', "desc" => '', "open_window" => 'N', "normal_btn" => '', "hover_btn" => '', "active_btn" => '', "selected" => (array("#","#","#","#","board") && in_array(Context::get("mid"), array("#","#","#","#","board")) ? 1 : 0), "expand" => 'N', "list" => array(70=>array("node_srl" => 70, "parent_srl" => 69, "menu_name_key" => 'SAMPLE 1', "isShow" => (true ? true : false), "text" => (true ? $_menu_names[70][$lang_type] : ""), "href" => (true ? '#' : ""), "url" => (true ? '#' : ""), "is_shortcut" => 'Y', "desc" => '', "open_window" => 'N', "normal_btn" => '', "hover_btn" => '', "active_btn" => '', "selected" => (array("#","#") && in_array(Context::get("mid"), array("#","#")) ? 1 : 0), "expand" => 'N', "list" => array(71=>array("node_srl" => 71, "parent_srl" => 70, "menu_name_key" => 'SAMPLE 1-1', "isShow" => (true ? true : false), "text" => (true ? $_menu_names[71][$lang_type] : ""), "href" => (true ? '#' : ""), "url" => (true ? '#' : ""), "is_shortcut" => 'Y', "desc" => '', "open_window" => 'N', "normal_btn" => '', "hover_btn" => '', "active_btn" => '', "selected" => (array("#") && in_array(Context::get("mid"), array("#")) ? 1 : 0), "expand" => 'N', "list" => array(), "link" => (true ? (array("#") && in_array(Context::get("mid"), array("#")) ? $_menu_names[71][$lang_type] : $_menu_names[71][$lang_type]) : ""),),), "link" => (true ? (array("#","#") && in_array(Context::get("mid"), array("#","#")) ? $_menu_names[70][$lang_type] : $_menu_names[70][$lang_type]) : ""),),72=>array("node_srl" => 72, "parent_srl" => 69, "menu_name_key" => 'SAMPLE 2', "isShow" => (true ? true : false), "text" => (true ? $_menu_names[72][$lang_type] : ""), "href" => (true ? '#' : ""), "url" => (true ? '#' : ""), "is_shortcut" => 'Y', "desc" => '', "open_window" => 'N', "normal_btn" => '', "hover_btn" => '', "active_btn" => '', "selected" => (array("#") && in_array(Context::get("mid"), array("#")) ? 1 : 0), "expand" => 'N', "list" => array(), "link" => (true ? (array("#") && in_array(Context::get("mid"), array("#")) ? $_menu_names[72][$lang_type] : $_menu_names[72][$lang_type]) : ""),),73=>array("node_srl" => 73, "parent_srl" => 69, "menu_name_key" => 'SAMPLE 3', "isShow" => (true ? true : false), "text" => (true ? $_menu_names[73][$lang_type] : ""), "href" => (true ? '#' : ""), "url" => (true ? '#' : ""), "is_shortcut" => 'Y', "desc" => '', "open_window" => 'N', "normal_btn" => '', "hover_btn" => '', "active_btn" => '', "selected" => (array("#") && in_array(Context::get("mid"), array("#")) ? 1 : 0), "expand" => 'N', "list" => array(), "link" => (true ? (array("#") && in_array(Context::get("mid"), array("#")) ? $_menu_names[73][$lang_type] : $_menu_names[73][$lang_type]) : ""),),), "link" => (true ? (array("#","#","#","#","board") && in_array(Context::get("mid"), array("#","#","#","#","board")) ? $_menu_names[69][$lang_type] : $_menu_names[69][$lang_type]) : ""),),75=>array("node_srl" => 75, "parent_srl" => 0, "menu_name_key" => 'XEIcon', "isShow" => (true ? true : false), "text" => (true ? $_menu_names[75][$lang_type] : ""), "href" => (true ? getSiteUrl('', '','mid','xeicon') : ""), "url" => (true ? 'xeicon' : ""), "is_shortcut" => 'N', "desc" => '', "open_window" => 'N', "normal_btn" => '', "hover_btn" => '', "active_btn" => '', "selected" => (array("xeicon") && in_array(Context::get("mid"), array("xeicon")) ? 1 : 0), "expand" => 'N', "list" => array(), "link" => (true ? (array("xeicon") && in_array(Context::get("mid"), array("xeicon")) ? $_menu_names[75][$lang_type] : $_menu_names[75][$lang_type]) : ""),),135=>array("node_srl" => 135, "parent_srl" => 0, "menu_name_key" => '빅데이터핀테크', "isShow" => (true ? true : false), "text" => (true ? $_menu_names[135][$lang_type] : ""), "href" => (true ? getSiteUrl('', '','mid','bdi') : ""), "url" => (true ? 'bdi' : ""), "is_shortcut" => 'N', "desc" => '', "open_window" => 'N', "normal_btn" => '', "hover_btn" => '', "active_btn" => '', "selected" => (array("statistics","data","bdi") && in_array(Context::get("mid"), array("statistics","data","bdi")) ? 1 : 0), "expand" => 'N', "list" => array(133=>array("node_srl" => 133, "parent_srl" => 135, "menu_name_key" => '통계학', "isShow" => (true ? true : false), "text" => (true ? $_menu_names[133][$lang_type] : ""), "href" => (true ? getSiteUrl('', '','mid','statistics') : ""), "url" => (true ? 'statistics' : ""), "is_shortcut" => 'N', "desc" => '', "open_window" => 'N', "normal_btn" => '', "hover_btn" => '', "active_btn" => '', "selected" => (array("statistics") && in_array(Context::get("mid"), array("statistics")) ? 1 : 0), "expand" => 'N', "list" => array(), "link" => (true ? (array("statistics") && in_array(Context::get("mid"), array("statistics")) ? $_menu_names[133][$lang_type] : $_menu_names[133][$lang_type]) : ""),),131=>array("node_srl" => 131, "parent_srl" => 135, "menu_name_key" => '데이터분석', "isShow" => (true ? true : false), "text" => (true ? $_menu_names[131][$lang_type] : ""), "href" => (true ? getSiteUrl('', '','mid','data') : ""), "url" => (true ? 'data' : ""), "is_shortcut" => 'N', "desc" => '', "open_window" => 'N', "normal_btn" => '', "hover_btn" => '', "active_btn" => '', "selected" => (array("data") && in_array(Context::get("mid"), array("data")) ? 1 : 0), "expand" => 'N', "list" => array(), "link" => (true ? (array("data") && in_array(Context::get("mid"), array("data")) ? $_menu_names[131][$lang_type] : $_menu_names[131][$lang_type]) : ""),),), "link" => (true ? (array("statistics","data","bdi") && in_array(Context::get("mid"), array("statistics","data","bdi")) ? $_menu_names[135][$lang_type] : $_menu_names[135][$lang_type]) : ""),),138=>array("node_srl" => 138, "parent_srl" => 0, "menu_name_key" => 'test1', "isShow" => (true ? true : false), "text" => (true ? $_menu_names[138][$lang_type] : ""), "href" => (true ? getSiteUrl('', '','mid','test1') : ""), "url" => (true ? 'test1' : ""), "is_shortcut" => 'N', "desc" => '', "open_window" => 'N', "normal_btn" => '', "hover_btn" => '', "active_btn" => '', "selected" => (array("test1") && in_array(Context::get("mid"), array("test1")) ? 1 : 0), "expand" => 'N', "list" => array(), "link" => (true ? (array("test1") && in_array(Context::get("mid"), array("test1")) ? $_menu_names[138][$lang_type] : $_menu_names[138][$lang_type]) : ""),),); if(!$is_admin) { recurciveExposureCheck($menu->list); }Context::set("included_menu", $menu); ?>