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
        Virat Kohli has won the toss against England in a 50 Over World Cup Final 2019. During the Toss time the commentator have him a funny task to test his mathematical skills.<br>
        Shashtri was the umpire to judge his mathematical skills. When the number is 23 he needs to tell "INDIA" and when the number is 50 he need to tell "ENGLAND".<br>
        When the number is less than "0" he needs to tells as "Sorry". Help our cricket captain by writing a sample program.<br>
        Refer sample Input and Output:<br>
        Input 1: 204 Output: ENGLAND<br>
        Input 2: 219 Output: INDIA<br>
        Input 3: 2228 Output: ENGLAND<br>
        Input 4: -1 Output: Sorry<br>
    </div>
	<div class="answer">
		#include &lt;stdio.h&gt;<br>
		int main(){<br>
  		int a;<br>
        scanf("%d",&a);<br>
        if(a>=0){<br>
            if(a%2==0)<br>
                printf("ENGLAND");<br>
            else<br>
                printf("INDIA");<br>
        }<br>
        else<br>
        printf("Sorry");<br>
        return 0;<br>
        }<br>
	</div>
	<br>
</body>
</html>