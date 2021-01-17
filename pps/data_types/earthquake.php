<?php
	include "header.php";
	include "sidenav.php";
?>
<!DOCTYPE html>
<html>
<head> <!-- Required meta tags -->
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
    
    <title></title>

    <link rel="stylesheet" type="text/css" href="style.css">
	
</head>
<body>
<div class="question">
		<u>Question</u><br>
		The following table contains earthquake magnitude ranges on the Richer scale and their descriptors:
		<br>
		Less then 2.0 Micro
		<br>
		2.0 to less than 3.0 Very Minor
		<br>
		3.0 to less than 4.0 Minor 
		<br>
		4.0 to less than 5.0 Light 
		<br>
		5.0 to less than 6.0 Moderate 
		<br>
		6.0 to less than 7.0 Strong
		<br>
		7.0 to less than 8.0 Major
		<br>
		8.0 to less than 10.0 Great 
		<br>
		10.0 or more Meteoric 
		<br>
	</div>
	<div class="answer">
		#include &lt;stdio.h&gt;<br>
		int main(){<br>
  		float mag;<br>
		scanf("%f",&mag);<br>
		if(mag<2.0)<br>
			printf("Micro");<br>
		else if(mag>=2.0 && mag<3.0)<br>
			printf("Very minor");<br>
		else if(mag>=3.0 && mag<4.0)<br>
			printf("Minor");<br>
		else if(mag>=4.0 && mag<5.0)<br>
			printf("Light");<br>
		else if(mag>=5.0 && mag<6.0)<br>
			printf("Moderate");<br>
		else if(mag>=6.0 && mag<7.0)<br>
			printf("Strong");<br>
		else if(mag>=7.0 && mag<8.0)<br>
			printf("Major");<br>
		else if(mag>=8.0 && mag<10.0)<br>
			printf("Great");<br>
		else if(mag>10.0)<br>
			printf("Meteoric");<br>
		return 0;<br>
		}
	</div>
	<br>
</body>
</html>