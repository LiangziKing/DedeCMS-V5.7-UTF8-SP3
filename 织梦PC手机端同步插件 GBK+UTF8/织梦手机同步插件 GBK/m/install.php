<?php
 require_once(dirname(__FILE__) . '/../config.php');
$row = $dsql -> GetOne('SELECT aid FROM `#@__sysconfig` ORDER BY aid DESC ');
$aid1 = $row['aid'] + 1;
$aid2 = $row['aid'] + 2;
$aid3 = $row['aid'] + 3;
$aid4 = $row['aid'] + 4;
$dsql -> ExecuteNoneQuery("INSERT INTO `#@__sysconfig`(`aid`,`varname`,`info`,`value`,`type`,`groupid`) VALUES ('$aid1','pc','PCģ����','pc','string','1')");
$dsql -> ExecuteNoneQuery("INSERT INTO `#@__sysconfig`(`aid`,`varname`,`info`,`value`,`type`,`groupid`) VALUES ('$aid2','m','WAPģ����','m','string','1')");
$dsql -> ExecuteNoneQuery("INSERT INTO `#@__sysconfig`(`aid`,`varname`,`info`,`value`,`type`,`groupid`) VALUES ('$aid3','wapurl','�ֻ�����ʵ�ַ','http://m.xxx.com','string','1')");
$dsql -> ExecuteNoneQuery("INSERT INTO `#@__sysconfig`(`aid`,`varname`,`info`,`value`,`type`,`groupid`) VALUES ('$aid4','canshu','ר�ݲ��������գ�','','string','9')");
echo "֯���ֻ�ͬ������Ѱ�װ�ɹ���";

?>