<?php
$v1=$_POST['name'];
$v2=$_POST['age'];
$v3=$_POST['money'];
$v4=$_POST['date'];
$v5=$_POST['position'];
$v6=$_POST['bmid'];
header("Content-type:text/html;charset=utf-8");
$link=mysql_connect("localhost","root","35693756") or die("Êý¾Ý¿âÁ´½ÓÊ§°Ü".mysql_error);
$db=mysql_select_db("homework",$link);
$sql="INSERT INTO yuangong(name,age,money,date,position,bmid)VALUES('$v1','$v2','$v3','$v4','$v5','$v6')";
$result=mysql_query($sql,$link);
?>