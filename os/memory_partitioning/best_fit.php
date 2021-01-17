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
Write a program to implement Best fit algorithm.The best fit memory allocation algorithm allocates the smallest free partition available in the memory that is sufficient enough to hold the process within the system.It searches the complete memory for avilable free partitions and allocates the preocess to the memory partition which is the smallest enough to hold the process.<br>
TEST CASE 1<br>
INPUT <br>
 5 8<br>
 20 10 15 25 15<br>
 11 20 22 10 5 21 27 15<br>
 OUTPUT<br>
 File Number file size block number size fragment<br>
 0 11 4 15 4<br>
    </div> 
    <div class="answer" style="height:100%;">
    <u>Solution</u><br>
        #include &lt;iostream><br>
using namespace std;<br>
int main() {<br>
        int n,m , *arr_bt , *arr_file , temp , sub , *alloc , *copy;<br>
cin>>n>>m;<br>
arr_bt = new int[n];<br>
arr_file = new int[m];<br>
alloc = new int[m];<br>
    copy = new int[n];<br>
    for(int i = 0;i&lt;n;i++){<br>
cin>>arr_bt[i];<br>
        copy[i] = arr_bt[i];<br>
    }<br>
    for(int i = 0;i&lt;m;i++){<br>
cin>>arr_file[i];<br>
    }<br>
cout<<"File Number File Size Block Number Block Size Fragment\n";<br>
    for(int i = 0;i&lt;m;i++){<br>
        sub = 100;<br>
      temp=-1;<br>
        for(int j =  0; j&lt;n; j++){<br>
               if(arr_bt[j] >= arr_file[i]){<br>
                    if(arr_bt[j] - arr_file[i] <= sub){<br>
                    sub = arr_bt[j] - arr_file[i];<br>
                    temp = j;<br>
                   }<br>
           }<br>
        }<br>
       if(sub != 100)<br>
arr_bt[temp] = sub;<br>
alloc[i] = temp+1;<br>
      if(i==0)<br>
cout&lt;&lt;i<<' '&lt;&lt;arr_file[i]<<' '&lt;&lt;temp<<' '&lt;&lt;copy[temp]<<' '&lt;&lt;copy[temp] - arr_file[i];<br>

    }<br>

        return 0;<br>
}<br>    </div>
    <br>
</body>
</html>