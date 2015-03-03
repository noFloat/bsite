<?php
	session_start();
 	header("Content-type: text/html; charset=utf-8"); 
 	include"final.php";
 	$_SESSION['user']=NULL; 
 	$user=trim($_POST["user"]);
  	$keyword = md5(md5($_POST["keyword"]));	
 	$code=$_POST['check'];
	$sql = "SELECT * FROM user WHERE user = '$user' and keyword='$keyword' ";
	$res = $dbh->query($sql);
	$num_results=$res->fetch(PDO::FETCH_ASSOC);
	if($code!=$_SESSION['check'])  
    {  
          echo"<script type='text/javascript'>alert('验证码错误');location='../login.php';</script>";  
    }  else{
			if($user == "")  
			{   
			  echo"<script type='text/javascript'>alert('请填写用户名');location='../login.php'; </script>";  
			}  
			elseif($keyword == "")  
			{  
			  echo"<script type='text/javascript'>alert('请填写密码');location='../login.php';</script>";      
			}  
			else{ 
			   if($num_results==0)  
			   {  
			    echo"<script type='text/javascript'>alert('密码错误');location='../login.php';</script>";   
			   }  
			   else {
			   	$_SESSION['user']= trim($_POST["user"]);
			    echo"<script type='text/javascript'>alert('登陆成功');location='../index.php';</script>";  
			 }
		}
	}
?>
