table方式
<html>
<style>
table tr td{
   color:red;
   font-size=30px;
   border:1px solid red;
   width:200px;
   height:30px;
   text-align:center;
}
</style>
<body>

<?php
header("Content-type:text/html;charset=utf-8");

$link=mysql_connect("localhost","root","35693756") or die("数据库链接失败".mysql_error);
$db=mysql_select_db("mysql2",$link);
$sql="SELECT * from t_user";
$result=mysql_query($sql,$link);

//从结果集中获取数据
//$arrresult= mysql_fetch_array($result);
 ?>
 <table cellspacing=0>

<tr>
<td>username</td>
<td>pwd</td>
</tr>
<?php
while($arrresult= mysql_fetch_array($result)){
     ?>
     <tr>
     <td >
             <?php  echo $arrresult["username"]; ?>
      </td>

       <td >
                   <?php  echo $arrresult["pwd"]; ?>
            </td>
             <tr>
 <?php
 }
 ?>

 </table>
</body>
</html>

select方式

<html>
<style>
</style>
<body>

<?php
header("Content-type:text/html;charset=utf-8");

$link=mysql_connect("localhost","root","35693756") or die("数据库链接失败".mysql_error);
$db=mysql_select_db("mysql2",$link);
$sql="SELECT * from t_user";
$result=mysql_query($sql,$link);
$result2=mysql_query($sql,$link);
//从结果集中获取数据
//$arrresult= mysql_fetch_array($result);
 ?>
<select>
<?php
while($arrresult= mysql_fetch_array($result)){
     ?>
            <option> <?php  echo $arrresult["username"]; ?> </option>
 <?php
 }
 ?>
</select>

<select>
<?php
while($arrresult= mysql_fetch_array($result2)){
     ?>
            <option> <?php  echo $arrresult["pwd"]; ?> </option>
 <?php
 }
 ?>
</select>

</body>
</html>