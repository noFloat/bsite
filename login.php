<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>哔哩哔哩弹幕视频网 - ( ゜- ゜)つロ  乾杯~  - bilibili</title>
	<link rel = "stylesheet" type = "text/css" href = "css/home.css">
</head>
<body>
<div class = "title">
		<div class="title_head">
			<div class = "titleSecond">
				<div class = "title_left">
					<img src = "img/robet.png">
				</div>
			</div>
		</div>
</div>
<div class = "bili"><img src = "img/bili.png"></div>
<div class = "word_login">
	<div class = "word_login_center">
		<hr style="float:left;width:580px;"/>
		<font style="float:left;">登陆</font>
		<hr style="float:left;width:580px;"/>
</div>
</div>
<div class = "login_site">
	<div class = "register_jpg" >
		<p>还没有账号？
			</br>
				快来注册会员，与大家一起！
			</br>
				共享弹幕交流所带来的无限欢乐吧
		</p>
		<a href= "register.php">
			立即注册
		</a>
	</div>
	<div class = "line">
	</div>
	<div class ="login_site_direct">
		<form method="post" action="user/check.php" name="login_user" target="_top">
			<div class ="user_box">
				<input name="user" type="text"  placeholder="请输入用户名" size="15"> 
			</div>
			<div class ="user_box">
				<input name="keyword" type="password" placeholder="密码" size="15">
			</div>	
			<div class ="user_check">
				<input name="check" type="text" placeholder="验证码" size="15">
				<div class="user_check_image">
					<img  title="点击刷新" src="user/checkword_from.php" align="absbottom" onclick="this.src='user/checkword_from.php?'+Math.random();"></img>
				</div>
			</div>								
			<div class="user_sub">			
				<input type="submit" value="登陆">
			</div>
		</form>
		<iframe name=abc  style='width:0;height:0;visibility:hidden;'></iframe>
	</div>
</div>
</body>
</html>