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
        Date to Holdiay Name<br>
        India has three national holidays which fall on the same dates each year.<br>
        Holiday Date<br>
        New Year January 1<br>
        Independence Day August 15<br>
        Republic Day January 26<br>
        Write a program that reads a month and day from the user. If the month and day match one of the holidays listed previously then your program should display the holiday's name.<br>
        Otherwise your program should indicate that the entered month and day do not correspond to a fixed-date holiday. India has two additional national holidays, Good Friday and Labour Day, whose dates vary from year to year. There are also numerous provincial and territorial holidays, some of which have fixed dates, and some of which have variable dates.<br>
        We will not consider any of these additional holidays in this exercise.<br>
    </div>
	<div class="answer">
		#include &lt;stdio.h&gt;<br>
        #include &lt;string.h&gt;<br>
		int main(){<br>
  		char m[10];<br>
        int d;<br>
        scanf("%s", m);<br>
        scanf("%d", &d);<br>
        if ( !(strcmp(m, "January")) && d == 1)<br>
            printf("New Year");<br>
        else if (!(strcmp(m, "August")) && d == 15)<br>
            printf("Independence Day ");<br>
        else if (!(strcmp(m, "January")) && d == 26)<br>
            printf("Republic Day ");<br>
        else<br>
            printf("%s %d does not correspond to a fixed-date holiday ", m, d);<br>
        return 0;<br>
        }<br>

	</div>
	<br>
</body>
</html>