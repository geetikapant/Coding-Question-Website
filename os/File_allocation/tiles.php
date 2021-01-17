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
There are K tiles.Each of the tiles either contains a single uppercase Latin letter or is a blank tile meaning that it can represent any uppercase Latin letter.<br>
Given is also a graph with N nodes and M edges.Initialy,some of the nodes contain tiles.The rest of the nodes are unoccupied.<br>
Find the sequential letters in order.
    </div> 
    <div class="answer" style="height:100%;">
    <u>Solution</u><br>
        #include &lt;stdio.h><br>
int main() {<br>
  int size,i,arr[100],find;<br>
scanf("%d",&size);<br>
  for(i=0;i&lt;size;i++)<br>
scanf("%d",&arr[i]);<br>
scanf("%d",&find);<br>
printf("Sequential file\n");<br>
  for(i=0;i&lt;size;i++) {<br>
    if(find==arr[i]) {<br>
printf("%d found at location %d",find,i+1);<br>
      break;<br>
    }<br>
  }<br>
  return 0;<br>
}<br>
    </div>
    <br>
</body>
</html>