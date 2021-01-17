<?php
  include "header.php";
  include "sidenav.php";
?>
<!DOCTYPE html>
<html>
<head><!-- Required meta tags -->
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
        The year is divided into four seasons: spring, summer, fall and winter. While the exact dates that the seasons change vary a little bit from year to year because of the way that the calendar is constructed, we will use the folllowing dates for this exercise:<br>
        Season First day<br>
        Summer March 20<br>
        Spring June 21<br>
        Fall September 22<br>
        Winter December 21<br>
        Create a program that reads a month and day from the user. The user will enter the name of the month as a string, followed by the day within the month as an integer.<br>
        Then your program should display the season associated with the date that was entered.<br>
        Note: Enter the three letter for month example: Jan for January, Feb for February and so on....and first letter of the month should be capital.<br>
    </div>
	<div class="answer">
		#include&lt;stdio.h&gt;<br>
        #include&lt;string.h&gt;<br>
        int main(){<br>
            char a[3];<br>
            int n;<br>
            scanf("%s",a);<br>
            scanf("%d",&n);<br>
              if(!strcmp(a,"Mar")&&n==20)<br>
              {<br>
            printf("Summer");<br>
              }<br>
              if(!strcmp(a,"Jun")&&n==21)<br>
              {<br>
            printf("Spring");<br>
              }<br>
              if(!strcmp(a,"Sep")&&n==22)<br>
              {<br>
            printf("Fall");<br>
              }<br>
              if(!strcmp(a,"Dec")&&n==21)<br>
              {<br>
                    printf("Winter");<br>
              }<br>
                    return 0;<br>
            }<br>

	</div>
	<br>
</body>
</html>