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
        SRM Students decides to create a software to extend our help to Petty shops and Shops. In this regard the "STUDENT" team has selected a few students to complete the task. The task was monitored by a group of experts and the software was tested by a expert team from corporate.<br>
        The task is as follows when there are two items and if the shop keeper says 1 then it needs to add the two items. If the shop keeper says 2 then the two items should be subtracted. And when the shop keeper tells 3 then the product of the items needs to be outputted. When shop keeper tells as 4 then the items should fight with one another.<br>
        Only Integer number as input<br>
        Input 1 = addition<br>
        Input 2 = Subtraction<br>
        Input 3 = Multiplication<br>
        Input 4 = Division<br>
    </div>
	<div class="answer">
		#include&lt;stdio.h&gt;<br>
        int main(){<br>
            int a,b,c;<br>
            scanf("%d %d %d",&a,&b,&c);<br>
            switch(a)<br>
            {<br>
                case 1:printf("%d",b+c);break;<br>
                case 2:printf("%d",b-c);break;<br>
                case 3:printf("%d",b*c);break;<br>
                case 4:printf("%d",b/c);break;<br>
                default:printf("Invalid Input");break;<br>
            }<br>
            return 0;<br>
        }<br>

	</div>
	<br>
</body>
</html>