<?php
   session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device,initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<style type="text/css">
	.q
	{
		color: white;
	}

</style>
</head>
<body>
<header style="height:90px; width:1395px;">
	<div class="logo">
<a href="index.php"><img src="images/coding.jpg" style="height:70px; width:100px; "></a>
<!--<h1 style="color:white; font-size:20px; padding-top:30px;"><a href="index.php">CODING QUESTIONS</a></h1>-->
</div>
	<nav>
		<ul>
			<li>
				<a style="color: white;font-size:25px;" href="index.php">HOME</a></li>
				<a  style="color: white;font-size:25px;" href="subjects.php">SUBJECTS</a></li>
				
				<?php
				if(isset($_SESSION['login_user']))
            {?>
                  <li><a href="">
                    <div style="color: white; font-size:25px; word-spacing:2px;">
                      <?php
                        echo " " .$_SESSION['login_user']; 
                      ?>
                    </div>
                  </a></li>
					<li><a style="color: white;font-size:25px;" href="logout.php" ><span class="glyphicon glyphicon-log-out">LOGOUT</span></a></li>
					<?php

				}
				else
				{?>
					<li><a style="color: white;font-size:25px;" href="student_login.php" ><span class="glyphicon glyphicon-log-out">LOGIN</span></a></li>
				<?php

				}


				?>
				
		</ul>
	</nav>
</header>
</body>
</html>