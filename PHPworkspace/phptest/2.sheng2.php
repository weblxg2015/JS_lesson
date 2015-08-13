<?php
$v1= $_POST['si'];
header("Content-type:text/html;charset=utf-8");
$link=mysql_connect("localhost","root","35693756") or die("Êý¾Ý¿âÁ´½ÓÊ§°Ü".mysql_error);
$db=mysql_select_db("mysql2",$link);
$sql="SELECT city.cityname from city,sheng where city.sid=sheng.shengid and sheng.shengid='$v1'";
$result=mysql_query($sql,$link);
   $jsonobj;
   $arr=array();
    while($arrresult= mysql_fetch_array($result)){
     $a1=array('cityname'=>$arrresult['cityname']);
array_push($arr,$a1);
 }
 echo json_encode($arr);
?>