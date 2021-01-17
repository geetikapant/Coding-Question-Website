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
    A lower triangular matrix is a square matrix in which all the elements above the diagonal are zero.<br>

That is, all the non-zero elements are in the lower triangle:<br>

Write a C program to find whether a given matrix is a lower triangular matrix or not.<br>

Input Format:<br>

The input consists of (n*n+1) integers. The first integer corresponds to the number of rows/columns in the matrix. The remaining integers correspond to the elements in the matrix. The elements are read in rowwise order, first row first, then second row and so on. Assume that the maximum value of m and n is 5.<br>

Output Format:<br>

Print yes if it is a lower triangular matrix . Print no if it is not a lower triangular matrix.<br>
    </div> 
    <div class="answer" style="height:100%;">
    <u>Solution</u><br>
        #include &lt;stdio.h&gt;<br>
        #include&lt;math.h&gt;
        int main(){<br>
           int i,j,x,y,flag=0;<br>
  scanf("%d%d",&x,&y);<br>
  int a[x][y];<br>
  for(i=0;i&lt;x;i++)<br>
  {<br>
    for(j=0;j&lt;y;j++)<br>
    {<br>
      scanf("%d",&a[i][j]);<br>
    }<br>
  }<br>
  for(i=0;i&lt;x;i++)<br>
  {<br>
    for(j=i+1;j&lt;y;j++)<br>
    {<br>
      if(a[i][j]!=0)<br>
      {<br>
        flag=1;<br>
      }<br>
    }<br>
  }<br>
  if(flag==0)<br>
    printf("yes");<br>
  else<br>
    printf("no");<br>
  return 0;  <br>
        }
    </div>
    <br>
</body>
</html>