<?php
header("Content-type:text/html;charset=utf-8");
$link=mysql_connect("localhost","root","35693756") or die("Êý¾Ý¿âÁ´½ÓÊ§°Ü".mysql_error);
$db=mysql_select_db("homework",$link);
$sql="SELECT yuangong.ygid,yuangong.name,yuangong.money,bm.bmname,bm.bmms from yuangong,bm WHERE yuangong.bmid=bm.bmid";
$result=mysql_query($sql,$link);
   $jsonobj;
   $arr=array();
    while($arrresult= mysql_fetch_array($result)){
   $a1=array('ygid'=>$arrresult['ygid'],'name'=>$arrresult['name'],'money'=>$arrresult['money'],'bmname'=>$arrresult['bmname'],'bmms'=>$arrresult['bmms']);
array_push($arr,$a1);
 }
 echo json_encode($arr);
?>