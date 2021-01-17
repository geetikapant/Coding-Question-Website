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
Bogar a student of Tamil Siddhi College.On his birthday he took his friends (F1,F2,F3,Fn) to SRM Resturent for a treat.The waiter noted the order of F1,F2,F3 ,Fn as O1,O2,O3,On respectively.Aassuming the waiter services the groups that comes on first to his table. <br>
print the time,time at which chef starts to prepare  the order (preparation start time)(service time) and time in which the order completes(turnaround time) for each one of them.Print the average waiting and average turnaround time.<br>
Assume F1 gets the menu first and orders first then F2 and so on Therefore the tiume at which the order is given to the waiter (Arrival time) changes for each friend. 
    </div> 
    <div class="answer" style="height:100%;">
    <u>Solution</u><br>
                #include&lt;iostream&gt;<br>
#include&lt;iomanip&gt;<br>
using namespace std;<br>
int main()<br>
{<br>
    int size,sum=0,sum1=0;<br>
  float res,res1;<br>
cin>>size;<br>
  string ar[size];<br>
for(int i=0;i&lt;size;i++)<br>
    {<br>
cin>>ar[i];<br>
    }<br>
    int burst[size],wait[size],burst1[size];<br>   
for(int i=0;i&lt;size;i++)<br>
    {<br>
cin>>burst[i];<br>
      burst1[i]=burst[i];<br>
    }<br>
for(int i=0;i&lt;size;i++)<br>
    {<br>
cin>>wait[i];<br>
    }<br>
cout<<"Waiting Time\n";<br>
for(int i=0;i&lt;size;i++)<br>
    {<br>
      if(i==0)<br>
      {<br>
cout<<"Time Taken for "&lt;&lt;ar[i]<<"=0";<br>
      }<br>
      else<br>
      {<br>
cout<<"\nTime Taken for "&lt;&lt;ar[i]<<"="&lt;&lt;burst[i-1];<br>
        burst[i]+=burst[i-1];<br>
        sum=sum+burst[i-1];<br>
      }<br>

    }<br>
  res=(float)sum/size;<br>
cout&lt;&lt;fixed;<br>
cout<<"\nAverage Waiting Time="&lt;&lt;res;<br>
cout<<"\nTurnAround Time";<br>
for(int i=0;i&lt;size;i++)<br>
    {<br>
cout<<"\nTime Taken for "&lt;&lt;ar[i]<<"="&lt;&lt;burst1[i];<br>
        burst1[i+1]=burst[i]+burst1[i+1];<br>
        sum1=sum1+burst1[i];       <br>
    }<br>
  res1=(float)sum1/size;<br>
cout&lt;&lt;fixed;<br>
cout<<"\nAverageTurnAround Time="&lt;&lt;res1;<br>   
    return 0;<br>
}<br>

    </div>
    <br>
</body>
</html>