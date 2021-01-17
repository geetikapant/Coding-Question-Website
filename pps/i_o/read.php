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
		Input is accepted by variable n. Odd and even numbers are extracted from this variable n using pointers n1 and n2. The variable n is divided by 10 and the remainder is stored in variable r. The quotient obtained after this division is considered as variable n. Then variable r is then divided by 2 and if it returns 0 as remainder ,then the variable r is considered as even number and stored in pointer n2 .<br>

If 0 is not obtained, then the variable r is considered as odd number and stored in pointer n1.<br>

This process continuous until the variable n is decremented to 0<br>
	</div>
	<div class="answer" style="height:100%;">
	<u>Solution</u><br>
		#include &lt;stdio.h&gt;<br>
		int main(){<br>
  		   long *n,*n1,*n2,*m1,*m2,r,a,a2=0,a1=0,a3=1,a4=1;<br>
  scanf("%ld",&a);<br>
  n=&a;<br>
  n1=&a1;<br>
  n2=&a2;<br>
  m1=&a3;<br>
  m2=&a4;<br>
  while(*n!=0)<br>
  {<br>
   r=*n%10;<br>
   *n=*n/10;<br>
   if(r%2==0)<br>
   {<br>
    r=*m2*r;<br>
    *n2=*n2+r;<br>
    *m2=*m2*10;<br>
   }<br>
    else<br>
    {<br>
     r=*m1*r;<br>
     *n1=*n1+r;<br>
     *m1=*m1*10;<br>
    }<br>
  }<br>
  printf("%ld %ld",*n1,*n2);<br>
    return 0;  <br>
		}
	</div>
	<br>
</body>
</html>