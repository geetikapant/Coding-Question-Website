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
        In a company an employee is paid as under: If his basic salary is less thaan Rs. 1500, then HRA = 10% of the base salary and DA = 90% of basic salary.<br>
        If his salary is either equal to or above Rs. 1500, then HRA = Rs. 500 and DA = 98% of basic salary<br>
        If the Employee's salary is input, write a program to find his gross salary.<br>
        NOTE: Gross Salary= Basic Salary + HRA + DA<br>
    </div>
	<div class="answer">
		#include&lt;stdio.h&gt;<br>
        int main(){<br>
            float n,i,bs,hra,da;<br>
            float gs;<br>
            scanf("%f",&n);<br>
            for(i=0;i&lt;n;i++)<br>
            {<br>
                scanf("%f",&bs);<br>
                if(bs<1500)<br>
                {<br>
                    hra=0.1*bs;<br>
                    da=0.9*bs;<br>
                    gs=hra+da+bs;<br>
                }<br>
                else if(bs>=1500)<br>
                {<br>
                    da=0.98*bs;<br>
                    gs=bs+500+da;<br>
                }<br>
            printf("\n%.0f",gs);<br>
            }<br>
            return 0;<br>
        }<br>


	</div>
	<br>
</body>
</html>