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
		Sneha got a single integer as an input , and her task to perform all assignment operations in with the given input . Let us help her to solve with the following conditions met,<br>

To Perform ,<br>

Assign an input the new the variable and display<br>
Using addition assignment operation(c+=3;c=c+3)<br>
Using Subtraction assignment operation<br>
Using division assignment operation<br>
Using modulus assignment operation<br>
Input and Output Format:<br>

Refer sample input and output for formatting specification.<br>

All float values are displayed correct to 2 decimal places.<br>

All text in bold corresponds to input and the rest corresponds to output.<br>
	</div>
	<div class="answer" style="height:100%;">
	<u>Solution</u><br>
		#include &lt;stdio.h&gt;<br>
		int main(){<br>
  		     int a,c,c1,c2,c3,c4;<br>
  scanf("%d",&a);<br>
  printf("c=%d\n",a);<br>
  c=a+a;<br>
  printf("c+=%d\n",c);<br>
  c1=c-a;<br>
  printf("c-=%d\n",c1);<br>
  c2=a*a;<br>
  printf("c*=%d\n",c2);<br>
  c3=c2/a;<br>
  printf("c/=%d\n",c3);<br>
  c4=(a%a);<br>
  printf("c%%=%d",c4);<br>
  return 0;<br>
		}
	</div>
	<br>
</body>
</html>