<?php
header("Content-type:text/html;charset=utf-8");
//echo 'hello world!'
//  $v1= $_GET['uname'];
//   $v2= $_GET['pwd'];
//   echo "用户名： $v1 密码：$v2";

//   $v1= $_POST['uname'];
//   $v2= $_POST['pwd'];

//不用区分post与get方法
  $v1= $_REQUEST['uname'];
   $v2= $_REQUEST['pwd'];

//链接数据库

//连接数据库服务器
//$link=mysql_connect("localhost","root","3569756");
//if($link){
//echo '数据库连接成功';
//}
//else{
//echo '连接数据库失败';
//}

$link=mysql_connect("localhost","root","35693756") or die("连接数据库失败".mysql_error());
// if($link){
// echo '数据库连接成功';
// }
////连接数据库
$db=mysql_select_db("mysql2",$link);
//if($db){
//    echo '数据库连接成功';
//}else{
//   echo"数据库连接失败";
//}
//执行sql
//$sql="UPDATE t_user set username='cc' WHERE userid=1";
$sql="SELECT * from t_user where username='$v1' and pwd='$v2'";
//$sql="DELETE psd from t_user where userid=2";
$result=mysql_query($sql,$link);
//echo $result;
//if($result){
////将结果集转换为数组
 $arr_result=mysql_fetch_row($result);

if(!empty($arr_result)){
  echo '存在数据，登录成功';
// echo '<script>alert("登陆成功");location.href="test01.html";</script>';
}
else{
echo '用户名密码错误，登录失败';
}

//while(){
//    echo '存在数据，登录成功';
//}
//else{
//   echo '用户名密码错误，登录失败';
//   }

?>