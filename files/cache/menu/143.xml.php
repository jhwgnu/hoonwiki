<?php define('__XE__', true); require_once('/jhwon11/www/config/config.inc.php'); $oContext = Context::getInstance(); $oContext->init(); header("Content-Type: text/xml; charset=UTF-8"); header("Expires: Mon, 26 Jul 1997 05:00:00 GMT"); header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT"); header("Cache-Control: no-store, no-cache, must-revalidate"); header("Cache-Control: post-check=0, pre-check=0", false); header("Pragma: no-cache"); $lang_type = Context::getLangType(); $is_logged = Context::get('is_logged'); $logged_info = Context::get('logged_info'); $site_srl = 0;$site_admin = false;if($site_srl) { $oModuleModel = getModel('module');$site_module_info = $oModuleModel->getSiteInfo($site_srl); if($site_module_info) Context::set('site_module_info',$site_module_info);else $site_module_info = Context::get('site_module_info');$grant = $oModuleModel->getGrant($site_module_info, $logged_info); if($grant->manager ==1) $site_admin = true;}if($is_logged) {if($logged_info->is_admin=="Y") $is_admin = true; else $is_admin = false; $group_srls = array_keys($logged_info->group_list); } else { $is_admin = false; $group_srls = array(); } $oContext->close(); ?><root><node node_srl="145" parent_srl="0" menu_name_key='Data Analysis' text="<?php if(true) { $_names = array("en"=>'Data Analysis',"ko"=>'Data Analysis',"jp"=>'Data Analysis',"zh-CN"=>'Data Analysis',"zh-TW"=>'Data Analysis',"fr"=>'Data Analysis',"de"=>'Data Analysis',"ru"=>'Data Analysis',"es"=>'Data Analysis',"tr"=>'Data Analysis',"vi"=>'Data Analysis',"mn"=>'Data Analysis',); print $_names[$lang_type]; }?>" url="<?php print(true?'data_analysis':"")?>" href="<?php print(true?getSiteUrl('', '','mid','data_analysis'):"")?>" is_shortcut='N' desc='' open_window='N' expand='N' normal_btn='' hover_btn='' active_btn='' link="<?php if(true) {?><?php print $_names[$lang_type]; ?><?php }?>"><node node_srl="149" parent_srl="145" menu_name_key='Python' text="<?php if(true) { $_names = array("en"=>'Python',"ko"=>'Python',"jp"=>'Python',"zh-CN"=>'Python',"zh-TW"=>'Python',"fr"=>'Python',"de"=>'Python',"ru"=>'Python',"es"=>'Python',"tr"=>'Python',"vi"=>'Python',"mn"=>'Python',); print $_names[$lang_type]; }?>" url="<?php print(true?'python_data':"")?>" href="<?php print(true?getSiteUrl('', '','mid','python_data'):"")?>" is_shortcut='N' desc='' open_window='N' expand='N' normal_btn='' hover_btn='' active_btn='' link="<?php if(true) {?><?php print $_names[$lang_type]; ?><?php }?>" /><node node_srl="255" parent_srl="145" menu_name_key='Linear Algebra' text="<?php if(true) { $_names = array("en"=>'Python',"ko"=>'Python',"jp"=>'Python',"zh-CN"=>'Python',"zh-TW"=>'Python',"fr"=>'Python',"de"=>'Python',"ru"=>'Python',"es"=>'Python',"tr"=>'Python',"vi"=>'Python',"mn"=>'Python',"en"=>'Linear Algebra',"ko"=>'Linear Algebra',"jp"=>'Linear Algebra',"zh-CN"=>'Linear Algebra',"zh-TW"=>'Linear Algebra',"fr"=>'Linear Algebra',"de"=>'Linear Algebra',"ru"=>'Linear Algebra',"es"=>'Linear Algebra',"tr"=>'Linear Algebra',"vi"=>'Linear Algebra',"mn"=>'Linear Algebra',); print $_names[$lang_type]; }?>" url="<?php print(true?'linear_algebra':"")?>" href="<?php print(true?getSiteUrl('', '','mid','linear_algebra'):"")?>" is_shortcut='N' desc='' open_window='N' expand='N' normal_btn='' hover_btn='' active_btn='' link="<?php if(true) {?><?php print $_names[$lang_type]; ?><?php }?>" /><node node_srl="259" parent_srl="145" menu_name_key='Statistical Learning' text="<?php if(true) { $_names = array("en"=>'Python',"ko"=>'Python',"jp"=>'Python',"zh-CN"=>'Python',"zh-TW"=>'Python',"fr"=>'Python',"de"=>'Python',"ru"=>'Python',"es"=>'Python',"tr"=>'Python',"vi"=>'Python',"mn"=>'Python',"en"=>'Linear Algebra',"ko"=>'Linear Algebra',"jp"=>'Linear Algebra',"zh-CN"=>'Linear Algebra',"zh-TW"=>'Linear Algebra',"fr"=>'Linear Algebra',"de"=>'Linear Algebra',"ru"=>'Linear Algebra',"es"=>'Linear Algebra',"tr"=>'Linear Algebra',"vi"=>'Linear Algebra',"mn"=>'Linear Algebra',"en"=>'Statistical Learning',"ko"=>'Statistical Learning',"jp"=>'Statistical Learning',"zh-CN"=>'Statistical Learning',"zh-TW"=>'Statistical Learning',"fr"=>'Statistical Learning',"de"=>'Statistical Learning',"ru"=>'Statistical Learning',"es"=>'Statistical Learning',"tr"=>'Statistical Learning',"vi"=>'Statistical Learning',"mn"=>'Statistical Learning',); print $_names[$lang_type]; }?>" url="<?php print(true?'stats_learning':"")?>" href="<?php print(true?getSiteUrl('', '','mid','stats_learning'):"")?>" is_shortcut='N' desc='' open_window='N' expand='N' normal_btn='' hover_btn='' active_btn='' link="<?php if(true) {?><?php print $_names[$lang_type]; ?><?php }?>" /></node><node node_srl="147" parent_srl="0" menu_name_key='Web Application' text="<?php if(true) { $_names = array("en"=>'Data Analysis',"ko"=>'Data Analysis',"jp"=>'Data Analysis',"zh-CN"=>'Data Analysis',"zh-TW"=>'Data Analysis',"fr"=>'Data Analysis',"de"=>'Data Analysis',"ru"=>'Data Analysis',"es"=>'Data Analysis',"tr"=>'Data Analysis',"vi"=>'Data Analysis',"mn"=>'Data Analysis',"en"=>'Web Application',"ko"=>'Web Application',"jp"=>'Web Application',"zh-CN"=>'Web Application',"zh-TW"=>'Web Application',"fr"=>'Web Application',"de"=>'Web Application',"ru"=>'Web Application',"es"=>'Web Application',"tr"=>'Web Application',"vi"=>'Web Application',"mn"=>'Web Application',); print $_names[$lang_type]; }?>" url="<?php print(true?'web_application':"")?>" href="<?php print(true?getSiteUrl('', '','mid','web_application'):"")?>" is_shortcut='N' desc='' open_window='N' expand='N' normal_btn='' hover_btn='' active_btn='' link="<?php if(true) {?><?php print $_names[$lang_type]; ?><?php }?>"><node node_srl="153" parent_srl="147" menu_name_key='XE' text="<?php if(true) { $_names = array("en"=>'XE',"ko"=>'XE',"jp"=>'XE',"zh-CN"=>'XE',"zh-TW"=>'XE',"fr"=>'XE',"de"=>'XE',"ru"=>'XE',"es"=>'XE',"tr"=>'XE',"vi"=>'XE',"mn"=>'XE',); print $_names[$lang_type]; }?>" url="<?php print(true?'xpress_engine':"")?>" href="<?php print(true?getSiteUrl('', '','mid','xpress_engine'):"")?>" is_shortcut='N' desc='' open_window='N' expand='N' normal_btn='' hover_btn='' active_btn='' link="<?php if(true) {?><?php print $_names[$lang_type]; ?><?php }?>" /><node node_srl="158" parent_srl="147" menu_name_key='git' text="<?php if(true) { $_names = array("en"=>'XE',"ko"=>'XE',"jp"=>'XE',"zh-CN"=>'XE',"zh-TW"=>'XE',"fr"=>'XE',"de"=>'XE',"ru"=>'XE',"es"=>'XE',"tr"=>'XE',"vi"=>'XE',"mn"=>'XE',"en"=>'git',"ko"=>'git',"jp"=>'git',"zh-CN"=>'git',"zh-TW"=>'git',"fr"=>'git',"de"=>'git',"ru"=>'git',"es"=>'git',"tr"=>'git',"vi"=>'git',"mn"=>'git',); print $_names[$lang_type]; }?>" url="<?php print(true?'git':"")?>" href="<?php print(true?getSiteUrl('', '','mid','git'):"")?>" is_shortcut='N' desc='' open_window='N' expand='N' normal_btn='' hover_btn='' active_btn='' link="<?php if(true) {?><?php print $_names[$lang_type]; ?><?php }?>" /><node node_srl="240" parent_srl="147" menu_name_key='Environment' text="<?php if(true) { $_names = array("en"=>'XE',"ko"=>'XE',"jp"=>'XE',"zh-CN"=>'XE',"zh-TW"=>'XE',"fr"=>'XE',"de"=>'XE',"ru"=>'XE',"es"=>'XE',"tr"=>'XE',"vi"=>'XE',"mn"=>'XE',"en"=>'git',"ko"=>'git',"jp"=>'git',"zh-CN"=>'git',"zh-TW"=>'git',"fr"=>'git',"de"=>'git',"ru"=>'git',"es"=>'git',"tr"=>'git',"vi"=>'git',"mn"=>'git',"en"=>'Environment',"ko"=>'Environment',"jp"=>'Environment',"zh-CN"=>'Environment',"zh-TW"=>'Environment',"fr"=>'Environment',"de"=>'Environment',"ru"=>'Environment',"es"=>'Environment',"tr"=>'Environment',"vi"=>'Environment',"mn"=>'Environment',); print $_names[$lang_type]; }?>" url="<?php print(true?'environment':"")?>" href="<?php print(true?getSiteUrl('', '','mid','environment'):"")?>" is_shortcut='N' desc='' open_window='N' expand='N' normal_btn='' hover_btn='' active_btn='' link="<?php if(true) {?><?php print $_names[$lang_type]; ?><?php }?>" /></node><node node_srl="188" parent_srl="0" menu_name_key='Programming Language' text="<?php if(($is_admin==true||(is_array($group_srls)&&count(array_intersect($group_srls, array(-3))))||($is_logged&&0))) { $_names = array("en"=>'Data Analysis',"ko"=>'Data Analysis',"jp"=>'Data Analysis',"zh-CN"=>'Data Analysis',"zh-TW"=>'Data Analysis',"fr"=>'Data Analysis',"de"=>'Data Analysis',"ru"=>'Data Analysis',"es"=>'Data Analysis',"tr"=>'Data Analysis',"vi"=>'Data Analysis',"mn"=>'Data Analysis',"en"=>'Web Application',"ko"=>'Web Application',"jp"=>'Web Application',"zh-CN"=>'Web Application',"zh-TW"=>'Web Application',"fr"=>'Web Application',"de"=>'Web Application',"ru"=>'Web Application',"es"=>'Web Application',"tr"=>'Web Application',"vi"=>'Web Application',"mn"=>'Web Application',"en"=>'Programming Language',"ko"=>'Programming Language',"jp"=>'Programming Language',"zh-CN"=>'Programming Language',"zh-TW"=>'Programming Language',"fr"=>'Programming Language',"de"=>'Programming Language',"ru"=>'Programming Language',"es"=>'Programming Language',"tr"=>'Programming Language',"vi"=>'Programming Language',"mn"=>'Programming Language',); print $_names[$lang_type]; }?>" url="<?php print(($is_admin==true||(is_array($group_srls)&&count(array_intersect($group_srls, array(-3))))||($is_logged&&0))?'programming_language':"")?>" href="<?php print(($is_admin==true||(is_array($group_srls)&&count(array_intersect($group_srls, array(-3))))||($is_logged&&0))?getSiteUrl('', '','mid','programming_language'):"")?>" is_shortcut='N' desc='' open_window='N' expand='N' normal_btn='' hover_btn='' active_btn='' link="<?php if(($is_admin==true||(is_array($group_srls)&&count(array_intersect($group_srls, array(-3))))||($is_logged&&0))) {?><?php print $_names[$lang_type]; ?><?php }?>"><node node_srl="190" parent_srl="188" menu_name_key='Python' text="<?php if(true) { $_names = array("en"=>'Python',"ko"=>'Python',"jp"=>'Python',"zh-CN"=>'Python',"zh-TW"=>'Python',"fr"=>'Python',"de"=>'Python',"ru"=>'Python',"es"=>'Python',"tr"=>'Python',"vi"=>'Python',"mn"=>'Python',); print $_names[$lang_type]; }?>" url="<?php print(true?'python':"")?>" href="<?php print(true?getSiteUrl('', '','mid','python'):"")?>" is_shortcut='N' desc='' open_window='N' expand='N' normal_btn='' hover_btn='' active_btn='' link="<?php if(true) {?><?php print $_names[$lang_type]; ?><?php }?>" /><node node_srl="212" parent_srl="188" menu_name_key='C++' text="<?php if(true) { $_names = array("en"=>'Python',"ko"=>'Python',"jp"=>'Python',"zh-CN"=>'Python',"zh-TW"=>'Python',"fr"=>'Python',"de"=>'Python',"ru"=>'Python',"es"=>'Python',"tr"=>'Python',"vi"=>'Python',"mn"=>'Python',"en"=>'C++',"ko"=>'C++',"jp"=>'C++',"zh-CN"=>'C++',"zh-TW"=>'C++',"fr"=>'C++',"de"=>'C++',"ru"=>'C++',"es"=>'C++',"tr"=>'C++',"vi"=>'C++',"mn"=>'C++',); print $_names[$lang_type]; }?>" url="<?php print(true?'cpp':"")?>" href="<?php print(true?getSiteUrl('', '','mid','cpp'):"")?>" is_shortcut='N' desc='' open_window='N' expand='N' normal_btn='' hover_btn='' active_btn='' link="<?php if(true) {?><?php print $_names[$lang_type]; ?><?php }?>" /></node></root>