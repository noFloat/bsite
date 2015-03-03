<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>哔哩哔哩弹幕视频网 - ( ゜- ゜)つロ  乾杯~  - bilibili</title>
	<link rel = "stylesheet" type = "text/css" href = "css/home.css">
</head>
<body>
</body>
<?php
  include"final.php";
  $movie_name = $_POST["movie_name"];
  $classes =$_POST["classes"];
  $upload_pic =$_POST["upload_file"];
  $sql = "SELECT *FROM movie ORDER BY id DESC";
  $rs = $dbh->query("SELECT COUNT(*) FROM movie");
  $col = $rs->fetchColumn();
  $col = $col+1;
  if ($_FILES['upload']['error'] > 0)
  {
    echo 'Problem: ';
    switch ($_FILES['upload']['error'])
    {
      case 1:	echo"<script type='text/javascript'>alert('文件大小超出规定值');history.back(-1);</script>"; 
	  			break;
      case 2:	echo"<script type='text/javascript'>alert('文件大小超出规定值');history.back(-1);</script>"; 
	  			break;
      case 3:	echo"<script type='text/javascript'>alert('文件部分上传');history.back(-1);</script>"; 
	  			break;
      case 4:	echo"<script type='text/javascript'>alert('上传失败');history.back(-1);</script>"; 
	  			break;
	  case 6:   echo"<script type='text/javascript'>alert('服务器目录暂停接受');history.back(-1);</script>"; 
	  			break;
	  case 7:   echo"<script type='text/javascript'>alert('文件上传本地失败');history.back(-1);</script>"; 
	  			break;
    }
    exit;
  }

  $movie_id =$col.$_FILES['upload']['name'];
  $upfile = '../movie/'.$movie_id;

  if (is_uploaded_file($_FILES['upload']['tmp_name'])) 
  {
     if (!move_uploaded_file($_FILES['upload']['tmp_name'], $upfile))
     {
        echo"<script type='text/javascript'>alert('文件上传失败');history.back(-1);</script>"; 
        exit;
     }
  } 
  else 
  {
    echo"<script type='text/javascript'>alert('文件可能遭受攻击');history.back(-1);</script>"; 
    echo $_FILES['upload']['name'];
    exit;
  }

  $sql_movie = "INSERT INTO movie(title,site,classes)VALUES('$movie_name','$upfile','$classes')";
  $res=$dbh->prepare($sql_movie);
  if($res->execute()){
  echo"<script type='text/javascript'>alert('文件上传成功');location='../index.php';</script>"; 
  }else{
    echo"<script type='text/javascript'>alert('文件上传失败');history.back(-1);</script>"; 
  }
  $fp = fopen($upfile, 'r');
  $contents = fread ($fp, filesize ($upfile));
  fclose ($fp);
 
  $contents = strip_tags($contents);
  $fp = fopen($upfile, 'w');
  fwrite($fp, $contents);
  fclose($fp);

  echo"<script type='text/javascript'>alert('');history.back(-1);</script>"; 
  echo $contents;
  echo '<br><hr>';
?>
</html>