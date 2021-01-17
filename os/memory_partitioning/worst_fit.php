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
Write a program to implement Worst Fit algorithm implement this algorithm to allocating the file size and block size in memory.<br>
TEST CASE 1<br>
INPUT <br>
5 4 6 5 7 4 8 2 7 4 6<br>
OUTPUT<br>
Fileno: 1 2 3 4<br>
Filesize:2 7 4 6<br>
Blockno:1 3 2 5<br>
blocksize:6 7 5 8<br>
Fragment:4 0 1 2<br>
      </div> 
    <div class="answer" style="height:100%;">
    <u>Solution</u><br>
        #include &lt;iostream><br>
using namespace std;<br>
int main() {<br>
        int n,m,*arr_bt,*arr_file,*en,*rec,frag;<br>
cin>>n>>m;<br>
arr_bt  = new int[n];<br>
arr_file = new int[m];<br>
en  = new int[n];<br>
    rec = new int[m];<br>
    for(int i = 0;i&lt;n;i++){<br>
cin>>arr_bt[i];<br>
    }<br>
    for(int i = 0;i&lt;m;i++){<br>
cin>>arr_file[i];<br>
    }<br>

    for(int i = 0;i&lt;m;i++){
<br>       rec[i]=-1;
<br>
       for(int j = 0;j&lt;n;j++){<br>
             if(arr_bt[j]>=arr_file[i]&&en[j]!=1){<br>
en[j] = 1;<br>
                 rec[i] = j;<br>
                 frag = arr_bt[j] - arr_file[i];<br>

                 break;<br>
             }<br>
       }<br>

    }<br>
cout<<"Fileno:";<br>
  for(int j = 0 ;j&lt;m;j++){<br>
cout<<' '&lt;&lt;j+1;<br>
  }<br>
cout&lt;&lt;endl<<"Filesize:";<br>
  for(int j = 0;j&lt;m;j++){<br>
cout<<' '&lt;&lt;arr_file[j];<br>
  }<br>
cout&lt;&lt;endl<<"Blockno:";<br>
   for(int j = 0;j&lt;m;j++){<br>
cout<<' '&lt;&lt;rec[j]+1;<br>
   }<br>
cout&lt;&lt;endl<<"Blocksize:";<br>
   for(int j = 0;j&lt;m;j++){<br>
     if(rec[j]==-1){<br>
cout<<' '<<1;<br>
        continue;<br>
     }<br>
cout<<' '&lt;&lt;arr_bt[rec[j]];<br>
   }<br>
cout&lt;&lt;endl<<"Fragment:";<br>
  for(int j = 0;j&lt;m;j++){<br>
    if(rec[j]==-1){<br>
cout<<' '&lt;&lt;arr_bt[n-1] - arr_file[j];<br>
      continue;<br>
    }<br>
cout<<' '&lt;&lt;arr_bt[rec[j]] - arr_file[j];<br>
  }<br>
        return 0;<br>
}<br>


    </div>
    <br>
</body>
</html>