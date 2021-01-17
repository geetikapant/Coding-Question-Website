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
		Emily is a very popular Maths Teacher in School. She retires from her serveice today.Her 7th class students like her very much and they wanted to give a grand farewell at school. The school Head Mistress  is a very strict person and she didn't give permission form them to conduct the farewell in the svhool premisses. The students decided to conduct the farewell at Emily mam's house itself.<br>
		They know the street in which Emily mam lives. The student leader asked Emily mam to tell her house number.Emily Mam's last class was on equation for a straight line.She said that a straight line can be represented by the equation y=mx+c and you know how to find the x-intercept and y-intercept of the line and my house number is the sum of the x-intercept and y-intercept of the line.<br>
		The students were puzzled. can you help the students find the house number of Emily Mam?<br>
		Given the values of m and c of the line equation y=mx+c,
		write a C program to find the sum of x-intercept and y-intercept.
	</div>
	<div class="answer" style="height:100%;">
	<u>Solution</u><br>
		#include &lt;stdio.h&gt;<br>
		int main(){<br>
  		 int m,s,c,x,y;<br>
scanf("%d",&m);<br>
scanf("%d",&c);<br>
  y=c;<br>
  x=-(c/m);<br>
printf("The line equation is y=");<br>
printf("%d",m);<br>
printf("x+");<br>
printf("%d",c);<br>
printf("\nThe x intercept is ");<br>
printf("%d",x);<br>
printf("\nThe y intercept is ");<br>
printf("%d",y);<br>
  s=x+y;<br>
printf("\nThe house number is ");<br>
printf("%d",s);<br>
        return 0;<br>
		}
	</div>
	<br>
</body>
</html>