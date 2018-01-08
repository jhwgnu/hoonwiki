<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getBeluxeList");
$query->setAction("select");
$query->setPriority("");
if(isset($args->s_mid)) {
${'s_mid3_argument'} = new ConditionArgument('s_mid', $args->s_mid, 'like');
${'s_mid3_argument'}->createConditionValue();
if(!${'s_mid3_argument'}->isValid()) return ${'s_mid3_argument'}->getErrorMessage();
} else
${'s_mid3_argument'} = NULL;if(${'s_mid3_argument'} !== null) ${'s_mid3_argument'}->setColumnType('varchar');
if(isset($args->s_browser_title)) {
${'s_browser_title4_argument'} = new ConditionArgument('s_browser_title', $args->s_browser_title, 'like');
${'s_browser_title4_argument'}->createConditionValue();
if(!${'s_browser_title4_argument'}->isValid()) return ${'s_browser_title4_argument'}->getErrorMessage();
} else
${'s_browser_title4_argument'} = NULL;if(${'s_browser_title4_argument'} !== null) ${'s_browser_title4_argument'}->setColumnType('varchar');
if(isset($args->s_comment)) {
${'s_comment5_argument'} = new ConditionArgument('s_comment', $args->s_comment, 'like');
${'s_comment5_argument'}->createConditionValue();
if(!${'s_comment5_argument'}->isValid()) return ${'s_comment5_argument'}->getErrorMessage();
} else
${'s_comment5_argument'} = NULL;if(isset($args->s_module)) {
${'s_module6_argument'} = new ConditionArgument('s_module', $args->s_module, 'equal');
${'s_module6_argument'}->createConditionValue();
if(!${'s_module6_argument'}->isValid()) return ${'s_module6_argument'}->getErrorMessage();
} else
${'s_module6_argument'} = NULL;if(${'s_module6_argument'} !== null) ${'s_module6_argument'}->setColumnType('varchar');
if(isset($args->s_module_category_srl)) {
${'s_module_category_srl7_argument'} = new ConditionArgument('s_module_category_srl', $args->s_module_category_srl, 'equal');
${'s_module_category_srl7_argument'}->createConditionValue();
if(!${'s_module_category_srl7_argument'}->isValid()) return ${'s_module_category_srl7_argument'}->getErrorMessage();
} else
${'s_module_category_srl7_argument'} = NULL;if(${'s_module_category_srl7_argument'} !== null) ${'s_module_category_srl7_argument'}->setColumnType('number');

${'page9_argument'} = new Argument('page', $args->{'page'});
${'page9_argument'}->ensureDefaultValue('1');
if(!${'page9_argument'}->isValid()) return ${'page9_argument'}->getErrorMessage();

${'page_count10_argument'} = new Argument('page_count', $args->{'page_count'});
${'page_count10_argument'}->ensureDefaultValue('10');
if(!${'page_count10_argument'}->isValid()) return ${'page_count10_argument'}->getErrorMessage();

${'list_count11_argument'} = new Argument('list_count', $args->{'list_count'});
${'list_count11_argument'}->ensureDefaultValue('20');
if(!${'list_count11_argument'}->isValid()) return ${'list_count11_argument'}->getErrorMessage();

${'sort_index8_argument'} = new Argument('sort_index', $args->{'sort_index'});
${'sort_index8_argument'}->ensureDefaultValue('module_srl');
if(!${'sort_index8_argument'}->isValid()) return ${'sort_index8_argument'}->getErrorMessage();

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`xe_modules`', '`modules`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithoutArgument('`module`',"'beluxe'","equal")))
,new ConditionGroup(array(
new ConditionWithArgument('`mid`',$s_mid3_argument,"like", 'or')
,new ConditionWithArgument('`browser_title`',$s_browser_title4_argument,"like", 'or')
,new ConditionWithArgument('`comment`',$s_comment5_argument,"like", 'or')
,new ConditionWithArgument('`module`',$s_module6_argument,"equal", 'or')
,new ConditionWithArgument('`module_category_srl`',$s_module_category_srl7_argument,"equal", 'or')),'and')
));
$query->setGroups(array());
$query->setOrder(array(
new OrderByColumn(${'sort_index8_argument'}, "desc")
));
$query->setLimit(new Limit(${'list_count11_argument'}, ${'page9_argument'}, ${'page_count10_argument'}));
return $query; ?>