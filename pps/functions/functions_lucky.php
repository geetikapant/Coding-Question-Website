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
	Write a program to find whether the given string is lucky or not.<br>
    A string is said to be lucky if the sum of the ascii values of the characters in the string is even<br>
    Refer function specifications for the function detail.<br>
    The function accepts a pointer to a string and returns an int.<br>
    The return value is 1 if the string is lucky and 0 otherwise.<br>
	</div> 
	<div class="answer" style="height:100%;">
	<u>Solution</u><br>
       #include &lt;stdio.h&gt;<br>
#include&lt;string.h&gt;<br>
int checkLucky(char *a);<br>
int main(){<br>
  char s[100],c;<br>

scanf("%s",s);<br>
  c=checkLucky(s);<br>
  if(c==1)<br>
printf("%s is lucky",s);<br>
  else if(c==0)<br>
printf("%s is not lucky",s);<br>
  return 0;<br>
}<br>
int checkLucky(char *a)<br>
{<br>
  char *name;<br>
  int i,sum=0,j;<br>
  name=a;<br>
i=strlen(a);<br>
  for(j=0;j&lt;i;j++)<br>
  {<br>
    sum=sum+name[j];<br>
  }<br>
  if((sum%2)==0)<br>
    return 1;<br>
  else<br>
    return 0;<br>
}

	</div>
	<br>
</body>
</html>