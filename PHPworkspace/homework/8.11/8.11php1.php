<?php
header("Content-type:text/html;charset=utf-8");
$link=mysql_connect("localhost","root","35693756") or die("Êý¾Ý¿âÁ´½ÓÊ§°Ü".mysql_error);
$db=mysql_select_db("homework",$link);
$sql="SELECT * from bm";
$result=mysql_query($sql,$link);
   $jsonobj;
   $arr=array();
    while($arrresult= mysql_fetch_array($result)){
   $a1=array('bmid'=>$arrresult['bmid'],'bmname'=>$arrresult['bmname']);
array_push($arr,$a1);
 }
 echo json_encode($arr);
?>