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
		Tom has a homework.His maths teacher gave homework in solving a area problem in mathematics.Help Tom in finding area of triangle of sides a,b,c by writing a code.<br>

A method for calculating the area of a triangle when you know the lengths of all three sides.<br>

Let a,b,c be the lengths of the sides of a triangle. The area is given by: Heron’s formula<br>


Heron was one of the great mathematicians of antiquity and came up with this formula sometime in the first century BC, although it may have been known earlier. He also extended it to the area of quadrilaterals and higher-order polygons<br>

Input:<br>
Input should contain three sides a,b,c<br>
Output:<br>
Should display the area of triangle in sq.units<br>
	</div>
	<div class="answer" style="height:100%;">
	<u>Solution</u><br>
		#include &lt;stdio.h&gt;<br>
        #include&lt;math.h&gt;<br>
		int main(){<br>
  		     float a,b,c,area,s;<br>
scanf("%f %f %f",&a,&b,&c);<br>
s=(a+b+c)/2;<br><br>
area=sqrt(s*(s-a)*(s-b)*(s-c));<br>
printf("Area=%.4f",area);<br>
return 0;<br>
		}
	</div>
	<br>
</body>
</html>