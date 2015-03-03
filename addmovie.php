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
	<hr style="float:left;width:650px;"/>
	<font style="float:left;">上传</font>
	<hr style="float:right;width:650px;"/>
</div>
<div class = "register_sum">
	<div class = "register_head">
		<form method="post" action="user/add.php" name="register_user" target="_top" enctype = "multipart/form-data"/>
			<div class = "register_box">
				<input name="movie_name" type="text"  placeholder="电影名字" size="11">  
			</div>
			<div class ="">
				<select id="s1_text1_outline" name = "classes">
                     <option value="0" selected="">0</option>
                     <option value="1">动画</option>
                     <option value="2">电影</option>
                     <option value="3">电竞</option>
                </select>
			</div>
			<div class ="">
				<input type = "hidden" name = " MAX_FILE_SIZE" value="100000000">
				<label for = "userfile">上传文件</label>
				<input type="file" multiple name="upload" placeholder="上传">
			</div>			
			<div class="register_sub">			
				<input type="submit" value="提交">
			</div>					
		</form>
	</div>
</div>
</body>
</html>