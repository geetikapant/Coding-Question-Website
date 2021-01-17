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
Write a program to implement first fit algorithm.The first fit memory allocation algorithm allocates the first free partition available in the memory that is sufficient enough to hold the process within the system.<br>
TEST CASE 1<br>
INPUT<br>
3 9 20 30 20<br>
 11 10 7 3 4 2 5 6 4<br>
 OUTPUT <br>
 File Number Block Number File Size Block Size Fragment<br>
  0 0 11 20 9<br>
  1 1 10 20 30<br>
  2 2 7 20 13<br>
  3 0 3 20 13<br>
  4 0 4 20 13<br>
  5 0 2 20 13<br>
  6 0 5 20 13<br>
  7 0 6 20 13<br>
  8 0 4 0 13<br>

      </div> 
    <div class="answer" style="height:100%;">
    <u>Solution</u><br>
        #include &lt;stdio.h&gt;<br>
        int main() {<br>
    static int block_arr[10], file_arr[10];<br>
      int fragments[10], blocks[10], files[10];<br>
      int m, n, number_of_blocks, number_of_files, temp;<br>
printf("File Number Block Number File Size Block Size Fragment");<br>
scanf("%d", &number_of_blocks);<br>
scanf("%d", &number_of_files);<br>
      for(m = 0; m &lt;number_of_blocks; m++)<br>
      {<br>
scanf("%d", &blocks[m]);<br>
      }<br>

      for(m = 0; m &lt;number_of_files; m++)<br>
      {<br>

scanf("%d", &files[m]);<br>
      }<br>
      for(m = 0; m &lt;number_of_files; m++)<br>
      {<br>
            for(n = 0; n &lt;number_of_blocks; n++)<br>
            {<br>
                  if(block_arr[n] != 1)<br>
                  {<br>
                        temp = blocks[n] - files[m];<br>
                        if(temp >= 0)<br>
                        {<br>
file_arr[m] = n;<br>
                              break;<br>
                        }<br>
                  }<br>
            }<br>
            fragments[m] = temp;<br>
block_arr[file_arr[m]] = 1;<br>
      }<br>
      for(m = 0; m &lt;number_of_files; m++)<br>
      {<br>
printf("\n%d %d %d %d %d",m,file_arr[m],files[m],blocks[file_arr[m]],fragments[m]);<br>
      }<br>
printf("\n");<br>
      return 0;<br>
       }<br>
    </div>
    <br>
</body>
</html>