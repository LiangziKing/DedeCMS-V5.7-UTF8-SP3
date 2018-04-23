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
$row = $dsql -> GetOne('SELECT value FROM `#@__sysconfig` where varname=\'cfg_updateperi\'');
$az = $row['value'];
$row = $dsql -> GetOne('SELECT * FROM  `#@__homepageset`,`#@__arctype`');
$templet = $row['templet'];
$position = $row['position'];
$typedir = $row['typedir'];
?>
<form style="display:none" action="../sys_info.php" name="m" method="post" target="kong"><input type="hidden" name="dopost" value="save"></form>
<iframe name="kong" style="display:none"></iframe>
<?php
 ShowMsg("<a target='_blank' href='$pcsy'>PCµçÄÔ°æ</a> / <a target='_blank' href='$wapurl'>WAPÊÖ»ú°æ</a>", 'javascript:;');