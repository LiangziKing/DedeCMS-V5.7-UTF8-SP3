<?php
 require_once(dirname(__FILE__) . '/../config.php');
$row = $dsql -> GetOne('SELECT value FROM `#@__sysconfig` where varname=\'pc\'');
$pc = $row['value'];
if($pc == ""){
    ShowMsg('����ʹ�ã�Ϊ�����ò�����', 'install.php');
    exit();
}
require_once(dirname(__FILE__) . '/canshu.php');
$banben = $_POST['banben'];
setcookie('uptype', $_POST['uptype']);
setcookie('starttime', $_POST['starttime']);
setcookie('startid', $_POST['startid']);
$chushihua = '���ô��󣬳�ʼ������';
if($banben == 'waphome'){
    $dsql -> ExecuteNoneQuery("update #@__homepageset set templet = '$m/index.htm';");
    $dsql -> ExecuteNoneQuery('update #@__homepageset set position = \'../m/index.html\';');
    $dsql -> ExecuteNoneQuery("update #@__sysconfig set value = '$m' where varname='cfg_df_style';");
    $dsql -> ExecuteNoneQuery("update #@__sysconfig set value = '$banben' where varname='canshu';");
    if(strstr($typedir, '{cmspath}/m/')){
        ShowMsg($chushihua, 'ling.php');
    }else{
        echo '<script>setTimeout("document.cun.submit()",1000);</script>';
        ShowMsg('2������WAP����ҳ', 'javascript:;');
        echo '<script>setTimeout("document.waphome.submit()",2000);</script>';
    }
}else if($banben == 'pchome'){
    $dsql -> ExecuteNoneQuery("update #@__homepageset set templet = '$pc/index.htm';");
    $dsql -> ExecuteNoneQuery('update #@__homepageset set position = \'../index.html\';');
    $dsql -> ExecuteNoneQuery("update #@__sysconfig set value = '$pc' where varname='cfg_df_style';");
    $dsql -> ExecuteNoneQuery('update #@__arctype set typedir=replace(typedir,\'{cmspath}/m/\',\'{cmspath}/\');');
    $dsql -> ExecuteNoneQuery("update #@__sysconfig set value = '$banben' where varname='canshu';");
    if(strstr($typedir, '{cmspath}/m/m/')){
        ShowMsg($chushihua, 'ling.php');
    }else{
        echo '<script>setTimeout("document.cun.submit()",1000);</script>';
        ShowMsg('2������PC����ҳ', 'javascript:;');
        echo '<script>setTimeout("document.pchome.submit()",2000);</script>';
    }
}else if($banben == 'wap'){
    if($empower == "0"){
        ShowMsg($shibiema, 'javascript:;');
        exit();
    }
	$dsql -> ExecuteNoneQuery('update #@__arctype set typedir=replace(typedir,\'{cmspath}/m/m/\',\'{cmspath}/\');');
	$dsql -> ExecuteNoneQuery('update #@__arctype set typedir=replace(typedir,\'{cmspath}/m/\',\'{cmspath}/\');');
    $dsql -> ExecuteNoneQuery("update #@__homepageset set templet = '$m/index.htm';");
    $dsql -> ExecuteNoneQuery('update #@__homepageset set position = \'../m/index.html\';');
    $dsql -> ExecuteNoneQuery("update #@__sysconfig set value = '$m' where varname='cfg_df_style';");
    $dsql -> ExecuteNoneQuery('update #@__arctype set typedir=replace(typedir,\'{cmspath}/\',\'{cmspath}/m/\');');
    $dsql -> ExecuteNoneQuery("update #@__sysconfig set value = '$banben' where varname='canshu';");
    if(strstr($typedir, '{cmspath}/m/')){
        ShowMsg($chushihua, 'ling.php');
    }else{
        echo '<script>setTimeout("document.cun.submit()",1000);</script>';
        ShowMsg('2������WAP�棡', 'javascript:;');
        echo '<script>setTimeout("document.pcwap.submit()",2000);</script>';
    }
}else if($banben == 'pc'){
    $dsql -> ExecuteNoneQuery("update #@__homepageset set templet = '$pc/index.htm';");
    $dsql -> ExecuteNoneQuery('update #@__homepageset set position = \'../index.html\';');
    $dsql -> ExecuteNoneQuery("update #@__sysconfig set value = '$pc' where varname='cfg_df_style';");
    $dsql -> ExecuteNoneQuery('update #@__arctype set typedir=replace(typedir,\'{cmspath}/m/\',\'{cmspath}/\');');
    $dsql -> ExecuteNoneQuery("update #@__sysconfig set value = '$banben' where varname='canshu';");
    if(strstr($typedir, '{cmspath}/m/m/')){
        ShowMsg($chushihua, 'ling.php');
    }else{
        echo '<script>setTimeout("document.cun.submit()",1000);</script>';
        ShowMsg('2������PC�棡', 'javascript:;');
        echo '<script>setTimeout("document.pcwap.submit()",2000);</script>';
    }
}else if($banben == 'pcwap'){
    if($empower == "0"){
        ShowMsg($shibiema, 'javascript:;');
        exit();
    }
	$dsql -> ExecuteNoneQuery('update #@__arctype set typedir=replace(typedir,\'{cmspath}/m/m/\',\'{cmspath}/\');');
	$dsql -> ExecuteNoneQuery('update #@__arctype set typedir=replace(typedir,\'{cmspath}/m/\',\'{cmspath}/\');');
    $dsql -> ExecuteNoneQuery("update #@__homepageset set templet = '$m/index.htm';");
    $dsql -> ExecuteNoneQuery('update #@__homepageset set position = \'../m/index.html\';');
    $dsql -> ExecuteNoneQuery("update #@__sysconfig set value = '$m' where varname='cfg_df_style';");
    $dsql -> ExecuteNoneQuery('update #@__arctype set typedir=replace(typedir,\'{cmspath}/\',\'{cmspath}/m/\');');
    $dsql -> ExecuteNoneQuery("update #@__sysconfig set value = '$banben' where varname='canshu';");
    if(strstr($typedir, '{cmspath}/m/')){
        ShowMsg($chushihua, 'ling.php');
    }else{
        echo '<script>setTimeout("document.cun.submit()",1000);</script>';
        ShowMsg('2������PC+WAP�棡', 'javascript:;');
        echo '<script>setTimeout("document.pcwap.submit()",2000);</script>';
    }
}else if($pcwap == 'pcwap'){
    if($empower == "0"){
        ShowMsg($shibiema, 'javascript:;');
        exit();
    }
    $dsql -> ExecuteNoneQuery("update #@__homepageset set templet = '$pc/index.htm';");
    $dsql -> ExecuteNoneQuery('update #@__homepageset set position = \'../index.html\';');
    $dsql -> ExecuteNoneQuery("update #@__sysconfig set value = '$pc' where varname='cfg_df_style';");
    $dsql -> ExecuteNoneQuery('update #@__arctype set typedir=replace(typedir,\'{cmspath}/m/\',\'{cmspath}/\');');
    $dsql -> ExecuteNoneQuery('update #@__sysconfig set value = \'pc\' where varname=\'canshu\';');
    if(strstr($typedir, '{cmspath}/m/m/')){
        ShowMsg($chushihua, 'ling.php');
    }else{
        echo '<script>setTimeout("document.cun.submit()",1000);</script>';
        ShowMsg('2������PC�棡', 'javascript:;');
        echo '<script>setTimeout("document.pcwap.submit()",2000);</script>';
    }
}
?>

<form style="display:none" action="../sys_info.php" name="cun" method="post" target="kong"><input type="hidden" name="dopost" value="save"></form>
<form style="display:none" name="pcwap" action="../makehtml_all.php" target="stafrm" method="post">
  <input type="hidden" name="action" value="make" />
  <input name="uptype" type="text" value="<?php echo $uptype ?>" />
  <input name="starttime" type="text"  value="<?php echo $starttime ?>" />
  <input name="startid" type="text" value="<?php echo $startid ?>" />
</form>

<form style="display:none" name="waphome" action="../makehtml_homepage.php" target="stafrm" method="post">
 <input type="hidden" name="dopost" value="make">
 <input name="templet" type="text" value="<?php echo $m ?>/index.htm"> 
 <input name="position" type="text" value="../m/index.html"> 
 <input name="saveset" type="text" value="1">
 <input name="showmod" type="text" value="1"/>
</form>

<form style="display:none" name="pchome" action="../makehtml_homepage.php" target="stafrm" method="post">
 <input type="hidden" name="dopost" value="make">
 <input name="templet" type="text" value="<?php echo $pc ?>/index.htm"> 
 <input name="position" type="text" value="../index.html"> 
 <input name="saveset" type="text" value="1">
 <input name="showmod" type="text" value="1"/>
</form>
<iframe name="kong" style="display:none"></iframe>