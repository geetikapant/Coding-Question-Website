<?php
	include "header.php";
	include "sidenav.php";
?>
<!DOCTYPE html>
<html>
<head>
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
    <link rel="stylesheet" type="text/css" href="coding/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Comic+Neue:wght@300;700&display=swap" rel="stylesheet">
    
    <title></title>

    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="question" style="height:100%;">
		<u>Question</u><br>
		A team from Rotract club had planned to conduct a rally to create awareness among the coimbatore people to donate blood. They conducted the rally successfully.many of the coimbatore people realized it come forword to donate their blood to nearby blood bank.The eligibility criteria for donating blood is people should be above 18 and his/her weight should be above 40. There was a huge crowd and styaff in blood bank found it difficult to manage the crowd,So they decided to keep a system and ask the people to enter their age and weight in system.If a person is eligible he/she will be allowed inside.<br>
		Write a program and feed it to the system to find whether a person is eligible or not.
	</div>
	<div class="answer" style="height:100%;">
	<u>Solution</u><br>
		#include &lt;stdio.h&gt;<br>
		int main(){<br>
  		     int a,w;<br>
scanf("%d",&a);<br>
scanf("%d",&w);<br>
  if(a&gt;18 && w&gt;40)<br>
printf("Eligible to donate");<br>
  else<br>
printf("Not Eligible to donate");<br>
        return 0;<br>
		}
	</div>
	<br>
</body>
</html>