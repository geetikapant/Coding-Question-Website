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
		In london, every year during dasara there will be a very grand doll show. People try to invent new new dolls of different varieties. The best sold doll’s creator will be awarded with cash prize. So people broke their head to create dolls innovatively. Knowing this competition, Mr.Lokpaul tried to create a doll which sings only when a even number is pressed and the number should be greater than zero and less than 100.<br>

So write a program to help Mr.Lokpaul to win.<br>

Input Format:<br>

Input Consists of Single Integer which Corresponds to Number pressed by the user to the doll.<br>

Output Format:<br>

Display whether the doll will Sing or not. Output consists of the string “Doll will sing” or “Invalid number”.<br>
	</div>
	<div class="answer" style="height:100%;">
	<u>Solution</u><br>
		#include &lt;stdio.h&gt;<br>
		int main(){<br>
  		      int n;<br>
  scanf("%d",&n);<br>
  if(n>0 && n&lt;100)<br>
  { <br>
    if(n%2==0)<br>
  {<br>
    printf("Doll will sing");<br>
  }<br>
    else<br>
    printf("Invalid Number");<br>
  }<br>
    else<br>
    printf("Invalid Number");<br>
return 0;<br>
		}
	</div>
	<br>
</body>
</html>