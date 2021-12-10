<?php
session_start();
if(isset($_POST['do_login']))
{
 $host="labs.inspedralbes.cat";
 $username="a18polpuipui_pol";
 $password="Movie1234";
 $databasename="a18polpuipui_movie";
 $connect=mysql_connect($host,$username,$password);
 $db=mysql_select_db($databasename);

 $username=$_POST['username'];
 $pass=$_POST['password'];
 $select_data=mysql_query("select * from user where user='$username' and password='$password'");
 if($row=mysql_fetch_array($select_data))
 {
  $_SESSION['username']=$row['username'];
  echo "success";
 }
 else
 {
  echo "fail";
 }
 exit();
}
?>