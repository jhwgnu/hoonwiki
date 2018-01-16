<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getChildCategoryCount");
$query->setAction("select");
$query->setPriority("");

${'category_srl2_argument'} = new ConditionArgument('category_srl', $args->category_srl, 'equal');
${'category_srl2_argument'}->checkFilter('number');
${'category_srl2_argument'}->checkNotNull();
${'category_srl2_argument'}->createConditionValue();
if(!${'category_srl2_argument'}->isValid()) return ${'category_srl2_argument'}->getErrorMessage();
if(${'category_srl2_argument'} !== null) ${'category_srl2_argument'}->setColumnType('number');

$query->setColumns(array(
new SelectExpression('count(*)', '`count`')
));
$query->setTables(array(
new Table('`xe_document_categories`', '`document_categories`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`parent_srl`',$category_srl2_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>