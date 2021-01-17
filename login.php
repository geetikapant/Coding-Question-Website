<?php
  include "connection.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css2?family=Comic+Neue:wght@300;700&display=swap" rel="stylesheet">
</head>
<body class="login">
<div class="container">
  <div class="row">
  <div class="col-md-2"></div>
  <div class="col-md-8">
  	<div class="row" style="margin-top:190px;box-shadow:-1px 1px 50px 10px black ">
  		<div class="col-md-6">
  			<ul>
  				<a href="" style="border-bottom:2px solid #841151; padding:10px;">LOGIN</a>
  			</ul>
  			<form name="login" action="" method="post">
  			<label class="label control-label">User Name</label>
  			<input type="text" class="form-control" name="username" placeholder="User nmae" required="">
  			<label class="label control-label">Password</label>
  			<input type="password" class="form-control" name="password" placeholder="Password" required="">
  			<input type="checkbox" name=""><small>Remember me</small>
  			<input class="btn btn-info" type="submit" name="submit" value="Login">
  			</form>
  			<p></p>
  		</div>
  		<div class="col-md-6"></div>
  	</div>
  </div>
  <div class="col-md-2"></div>
  	
  </div>
</div>
<?php
    if(isset($_POST['submit']))
    {
    	$count=0;
    	$res=mysqli_query($db,"SELECT * FROM `student` WHERE username='$_POST[username]' && password='$_POST[password]';");
    	$row=mysqli_fetch_assoc($res);
    	$count=mysqli_num_rows($res);

    	if($count==0)
    	{
    		?>
    		<script type="text/javascript">
    			alert("The username and password doesn't match.");
    		</script>
    		<?php
    	}
    	else
    	{
    		$_SESSION['login_user']=$_POST['username'];
    		?>
    		<script type="text/javascript">
    			window.location="subjects.php";
    		</script>
    		<?php
    	}
    }

?>
</body>
</html>