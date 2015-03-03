		<div class="title_head">
			<div class = "titleSecond">
				<div class = "title_left">
					<img src = "img/robet.png">
				</div>
				<div class = "title_right">
					<div class= "log">
						<a href="addmovie.php">
							上传
						</a>
					</div>
				</div>
			<?php 
			if(isset($_SESSION['user'])){
				echo $_SESSION['user'];
			}else{
						echo '<div class = "title_right">
								<div class= "log">
									<a href="login.php">
										登陆
									</a>
								</div>
							</div>
						</div>
					</div>'; 
				}
			?>