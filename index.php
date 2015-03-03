<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>哔哩哔哩弹幕视频网 - ( ゜- ゜)つロ  乾杯~  - bilibili</title>
	<link rel = "stylesheet" type = "text/css" href = "css/home.css">
	<script type="text/javascript" src="jquery.js"></script>
	<?php include"user/search_movie.php"; ?>
	   <link href="http://libs.baidu.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet">
   <script src="http://libs.baidu.com/jquery/2.0.0/jquery.min.js"></script>
   <script src="http://libs.baidu.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
</head>
<script>
$(document).ready(function(){
  $(".").click(function(){
    $(".").hide();
  });
});
</script>
<body>
<div class="log_hidden">
<form>
</form>
</div>
<div class = "title">
<?php
	require('header.php');
?>
</div>
<div class = "cartoon"><img src = "img/head.jpg"></div>
<div class = "menu">
	<div class = "menu_adju">
		<div class = "menu_title">
				<li class = "head_menu">
					<a class="word_menu" href="index.php">
					首页
					</a>
				</li>

				<li class = "head_menu">
					<a class="word_menu" href="">
					动画
					</a>
				</li>
				</li>
				<li class = "head_menu">
					<a class="word_menu" href="">
					电影
					</a>
				</li>	
				</li>
				<li class = "head_menu">
					<a class="word_menu" href="">
					电竞
					</a>
				</li>
		</div>
		<div class ="search">
			<form method="post" action="user/search.php" name="search_user" >
				<div class = "search_box">
					<input name="search_box" type="text"  placeholder="搜索" size="">  		
					<button class = "search_butt" type="submit" value="">
					<i class = "iconfont" >&#xe600;</i>
				</div>		
			</form>
		</div>
	</div>
</div>
<div id="myCarousel" class="carousel slide">
   <!-- 轮播（Carousel）指标 -->
   <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
   </ol>   
   <!-- 轮播（Carousel）项目 -->
   <div class="carousel-inner">
      <div class="item active">
         <img src="img/1.png" alt="First slide">
         <div class="carousel-caption">暴风突击队</div>
      </div>
<?php
	foreach ($allWebsite as $key => $value) { ?>
      <div class="item">
         <img src="<?php echo $value['pic_site']; ?>" alt="">
         <div class="carousel-caption"><?php echo $value["title"]; ?></div>
      </div>
<?php } ?>
   </div>
   <!-- 轮播（Carousel）导航 -->
   <a class="carousel-control left" href="#myCarousel" 
      data-slide="prev">&lsaquo;</a>
   <a class="carousel-control right" href="#myCarousel" 
      data-slide="next">&rsaquo;</a>
</div> 
<?php
	foreach ($allWebsite as $key => $value) { ?>
			<form method="post" action="play/player.php" >
				<button type="submit"   background-image:url=(<?php echo $value['pic_site']; ?>)><?php echo $value["title"]; ?></button>
				<input type = "hidden" value=" <?php echo $value["site"]; ?>" name = site>
			</form>
<?php } ?>
</body>
</html> 