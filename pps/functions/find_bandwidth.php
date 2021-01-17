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
	Bandwidth of a matrix A is defined as the smallest non-negative integer K such that A(i,j)=0 for |i-j|>k.<br>
    For example , a matrix with all zeros will have its bandwidth equal to zero,Similarly bandwidth of a diagonal matrix will also be zero.<br>
    For example, fort the below given matrex,the bandwidth of this matrix is 2.<br>
    1 0 0<br>
    0 1 1<br>
    1 1 0<br>
    Bandwidth of the above matrix is 1<br>
    You will be a given a binay matrix A of dimensions NN.You are allowed to make following operations as many times as you wish (possible zero or more).In a single operations,you can swap any two entries of the matrix. Your aim is to minimize the bandwidth of the matrix.Find the minimum bandwidth ofthe matrix A you can get after making as many operations of above type as you want to.
	</div> 
	<div class="answer" style="height:100%;">
	<u>Solution</u><br>
		#include &lt;stdio.h&gt;<br>
		int main(){<br>
  		     int t, i, j, n, m[500][500], x, a, b;<br>

scanf("%d", &t);<br>

for (x = 0; x < t; ++x) {<br>

scanf("%d", &n);<br>

        a = 0;<br>

        b = 0;<br>

for (i = 0; i< n; ++i) {<br>

for (j = 0; j < n; ++j) {<br>

scanf("%d", &m[i][j]);<br>

if (m[i][j])<br>

                    a++;<br>

            }<br>

        }<br>

        a -= n;<br>

        n = n-1;<br>

while (a >0) {<br>

            b += 1;<br>

            a -= (2*n);<br>

            n = n-1;<br>

        }<br>

printf("%d\n", b);<br>

    }<br>

return0;<br>
		}
	</div>
	<br>
</body>
</html>