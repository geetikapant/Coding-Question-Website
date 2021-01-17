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
Write a program to implement Worst Fit algorithm.The Worst fit memory aloocation algorithm allocates the largest free partition available in the memory that is sufficient enough to hold the process within the system.It searches the complete memory for available free partitions and allocates the process to the memory partition which is the largest out of all.<br>
TEST CASE 1<br>
INPUT<br>
6 8<br>
 18 33 12 36 19 23<br> 
 17 11 20 28 25 10 6 9<br>
 OUTPUT<br>
 File number file size block number block size fragment<br> 
 0 17 5 23 6<br>
 1 11 2 12 0<br>
 2 20 0 18 0<br>
 3 28 0 18 0<br>
 4 25 0 18 0<br>
 5 10 0 18 0<br>
 6 6 0 18 0<br>
 7 9 0 18 0<br>
      </div> 
    <div class="answer" style="height:100%;">
    <u>Solution</u><br>
        #include &lt;iostream><br>
using namespace std;<br>
int main() {<br>
        int n,m,*arr_batch , *arr_file, *assignment , *en ,sub ;<br>
cin>>n>>m;<br>
arr_batch = new int[n];<br>
arr_file = new int[m];<br>
    assignment = new int[m];<br>
en = new int[n];<br>
    for(int i = 0;i&lt;n;i++){<br>
cin>>arr_batch[i];<br>
    }<br>
    for(int i = 0;i&lt;m;i++){<br>
cin>>arr_file[i];<br>
    }<br>
cout<<"File Number File Size Block Number Block Size Fragment\n";<br>
    for(int i = 0;i&lt;m;i++){<br>
         for(int j = 0; j&lt;n ;j++){<br>
             sub =0;<br>
              if(arr_batch[j]>arr_file[i] &&en[j] != 1){
                   sub = arr_batch[j] - arr_file[i];<br>
en[j] = 1;<br>
                   assignment[i]=j;<br>
              }<br>
         }<br>
cout&lt;&lt;i<<' '&lt;&lt;arr_file[i]<<' '&lt;&lt;assignment[i]<<' '&lt;&lt;arr_batch[assignment[i]]<<' '&lt;&lt;sub&lt;&lt;endl;<br>
    }<br>
        return 0;<br>
}<br>



    </div>
    <br>
</body>
</html>