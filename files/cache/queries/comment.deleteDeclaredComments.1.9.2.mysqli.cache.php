<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("deleteDeclaredComments");
$query->setAction("delete");
$query->setPriority("");

${'comment_srl4_argument'} = new ConditionArgument('comment_srl', $args->comment_srl, 'in');
${'comment_srl4_argument'}->checkFilter('number');
${'comment_srl4_argument'}->checkNotNull();
${'comment_srl4_argument'}->createConditionValue();
if(!${'comment_srl4_argument'}->isValid()) return ${'comment_srl4_argument'}->getErrorMessage();
if(${'comment_srl4_argument'} !== null) ${'comment_srl4_argument'}->setColumnType('number');

$query->setTables(array(
new Table('`xe_comment_declared`', '`comment_declared`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`comment_srl`',$comment_srl4_argument,"in")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>