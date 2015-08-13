<?
header("Content-type:text/html;charset=utf-8");
$v1=$_GET['uname'];
$v2=$_GET['sex'];
$v3=$_GET['country'];
$v4=$_GET['idtype'];
$v5=$_GET['idnumber'];
$v6=$_GET['phonenumber'];
$v7=$_GET['telephone'];
$v8=$_GET['email'];
$v9=$_GET['site'];
$v10=$_GET['postcode'];
$v11=$_GET['type'];
$v12=$_GET['provinces'];
$v13=$_GET['schoolname'];
$v14=$_GET['faculty'];
$v15=$_GET['class'];
$v16=$_GET['stunumber'];
$v17=$_GET['schooling'];
$v18=$_GET['edustartdate'];
$v19=$_GET['cardnumber'];
$v20=$_GET['range'];

$link=mysql_connect('localhost','root','35693756') or die('连接数据库失败'.mysql_error());
$db=mysql_select_db("mysql2",$link);

$sql="INSERT into traveller(uname,sex,country,idtype,idnumber,phonenumber,telephone,email,site,postcode,type,provinces,schoolname,faculty,class,stunumber,schooling,edustartdate,cardnumber,range) VALUES ('$v1','$v2','$v3','$v4','$v5','$v6','$v7','$v8','$v9','$v10','$v11','$v12','$v13','$v14','$v15','$v15','$v16','$v17','$v18','$v19','$v20')";
$result=mysql_query($sql,$link);
 echo '注册成功';
//if($result){
//  echo 保存成功;
//}
//else{
//      echo 保存失败;
//}
?>