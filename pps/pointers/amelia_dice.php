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
        Amelia designed a game of triangle with 2 players. She names the points of her triangle as p1, p2 and p3. She moved over her coin in these points. She used a special dice which could bring out numbers from 1 to 100. In every move if the number of the dice takes moves in multiple of 3, the player scores additional 10 points. Amelia wants to write a C program to pick out numbers that are multiple of 3 using the concept of arrays and pointers. Your task is to help her write the code using pointers and arrays and print the number divisible by 3. The array contains the sequence of numbers occuring in the dice.<br>
    </div>
	<div class="answer">
		#include&lt;stdio.h&gt;<br>
        int main(){<br>
            int num1, num2;<br>
            float avg;<br>
            scanf("%d",&num1);<br>
            scanf("%d",&num2);<br>
            avg= (float)(num1+num2)/2;<br>
            printf("I am:%d\n",num1);<br>
            printf("You are:%d\n",num2);<br>
            printf("We are around:%.2f",avg);<br>
            return 0;<br>
        }<br>

	</div>
	<br>
</body>
</html>