<?php
 require_once(dirname(__FILE__) . '/../config.php');
$row = $dsql -> GetOne('SELECT value FROM `#@__sysconfig` where varname=\'cfg_df_style\'');
$style = $row['value'];
$row = $dsql -> GetOne('SELECT value FROM `#@__sysconfig` where varname=\'cfg_basehost\'');
$pcsy = $row['value'];
$row = $dsql -> GetOne('SELECT value FROM `#@__sysconfig` where varname=\'pc\'');
$pc = $row['value'];
$row = $dsql -> GetOne('SELECT value FROM `#@__sysconfig` where varname=\'m\'');
$m = $row['value'];
$row = $dsql -> GetOne('SELECT value FROM `#@__sysconfig` where varname=\'wapurl\'');
$wapurl = $row['value'];
$row = $dsql -> GetOne('SELECT value FROM `#@__sysconfig` where varname=\'canshu\'');
$pcwap = $row['value'];
$row = $dsql -> GetOne('SELECT value FROM `#@__sysconfig` where varname=\'cfg_updateperi\'');
$az = $row['value'];
$row = $dsql -> GetOne('SELECT * FROM  `#@__homepageset`,`#@__arctype`');
$templet = $row['templet'];
$position = $row['position'];

?>