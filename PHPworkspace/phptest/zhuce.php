

//<?php
//get方式
//header("Content-type:text/html;charset=utf-8");
////  $v1=$_GET['uname'];
////   $v2=$_GET['pwd'];
////  $v3= $_GET['city'];
////  $v4= $_GET['bz'];
////   $v5= $_GET['id'];
//
//  $link=mysql_connect("localhost","root","35693756") or die("连接数据库失败".mysql_error());
//  $db=mysql_select_db("mysql2",$link);
//  $sql="INSERT into zhuce(uname,pwd,city,bz) VALUES ('$v1','$v2','$v3','$v4')";
//  $result=mysql_query($sql,$link);
////  echo '注册成功';
//   if($result){
//     echo '注册成功';
//   }
////
//     else{
//          if(empty($v1)||empty($v2)||empty($v3)||empty($v4)){
//                 echo '有选项为空，注册失败';
//             }
//             else{
//          echo '注册失败';
//          }
//      }
//?>

<?php
//post
header("Content-type:text/html;charset=utf-8");
      $v1=$_POST['uname'];
      $v2=$_POST['pwd'];
      $v3=$_POST['city'];
      $v4=$_POST['bz'];
      $v5=$_POST['id'];
  $link=mysql_connect("localhost","root","35693756") or die("连接数据库失败".mysql_error());
  $db=mysql_select_db("mysql2",$link);
// $sql="INSERT into zhuce(id,uname,pwd,city,bz) VALUES ('v5','$v1','$v2','$v3','$v4')";
    $sql="UPDATE zhuce set uname='$v1',pwd='$v2',city='$v3',bz='$v4' WHERE id='$v5'";
   $result=mysql_query($sql,$link);
//  echo '注册成功';
   if($result){
     echo '修改成功';
   }
     else{
          echo '修改失败';
        }
?>

