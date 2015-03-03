<?php
 	header("Content-type: text/html; charset=utf-8"); 
 	include"final.php";
 	$email= trim($_POST["email"]);
 	$user = trim($_POST["user"]);
 	$keyword = $_POST["keyword"];
  	$keyword_pre = md5(md5($keyword));		
 	$url="../index.php";
	$sql="INSERT INTO user(user,keyword,email)VALUES('$user','$keyword_pre','$email')";
	$sql_check ="SELECT *FROM user WHERE user = '$user'";
	$res_check = $dbh ->query($sql_check);
	$num_results=$res_check->fetch(PDO::FETCH_ASSOC);
	$res=$dbh->prepare($sql);
	if($user == ""|| $keyword =""||$email = ""){
		if($user == ""){
			echo"<script type='text/javascript'>alert('请填写用户名');history.back(-1); </script>";
		}elseif($keyword == ""){
			echo"<script type='text/javascript'>alert('请填写密码');history.back(-1);</script>"; 
		}else{echo"<script type='text/javascript'>alert('请填写邮箱');history.back(-1);</script>"; }
	}else{
		if(strlen($user) < 4||strlen($user) > 16){
			echo"<script type='text/javascript'>alert('请输入5到15位的用户名');history.back(-1);</script>";
		}elseif($num_results!=0){
			echo"<script type='text/javascript'>alert('用户名重复');history.back(-1);</script>";
		}else{
			if($res ->execute()){
				echo"<script type='text/javascript'>alert('注册成功');location='../index.php';</script>";
				setcookie('$user','$user',time()+(7*24*60*60));
			}else{
				echo"<script type='text/javascript'>alert('注册失败，请重新注册');history.back(-1);</script>"; 
			}
		}
	}
?>
