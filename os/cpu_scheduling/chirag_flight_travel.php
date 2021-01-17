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
 Semester break has started and Chirag is going home from college (SRM UNIVERSITY).He is taking flight from Chennai to delhi.After entering the Airport,he was asked to directly go to the counter of boarding pass and without following the queue.<br>
 He was Told that the Airline staff follows the SJF(shortest job first) algorithm and firsr process the request of the person who came with the lowest baggage weight as it is easy to preocess and the waiting time reduces.Chirag is a programmer and wanted to gift a program to the airline which shows the service time(time at which that person will reach the counter ),waiting time (service time-arrival time) for each person in the queue and turnaround time(total time from arrival till person gets boarding pass).Also,Calculate average waiting and average turnaround time.
    </div> 
    <div class="answer" style="height:100%;">
    <u>Solution</u><br>
       #include&lt;bits/stdc++.h&gt;<br>
using namespace std;<br>
int main() {<br>
                int a;<br>
cin>>a;<br>
    int bt[a],arr1[a];<br>
for(int i=0;i&lt;a;i++)<br>
    {<br>
cin>>bt[i];<br>
      arr1[i]=i+1;<br>
    }<br>
    pair&lt;int,int&gt;pairt[a];<br>
    for (int i = 0; i< a; i++) <br>
     {<br>
pairt[i].first = bt[i];<br>
pairt[i].second = arr1[i];<br>
     }<br>
sort(pairt, pairt + a);<br>
    for (int i = 0; i< a; i++) <br>
     {<br>
bt[i] = pairt[i].first;<br>
        arr1[i] = pairt[i].second;<br>
     }<br>
  int wt[a],tt[a];<br>
wt[0]=0;<br>
tt[0]=bt[0];<br>
  float awt=0,att;<br>
att=bt[0];<br>
for(int i=1;i&lt;a;i++)<br>
  {<br>
wt[i]=bt[i-1]+wt[i-1];<br>
tt[i]=bt[i]+wt[i];<br>
awt=awt+wt[i];<br>
att=att+tt[i];<br>
  }<br>
cout<<"Gnatt Chart for Waiting time=";<br>
for(int i=1;i&lt;a;i++)<br>
  {<br>
cout&lt;&lt;wt[i]&lt;&lt;" ";<br>
  }<br>
cout&lt;&lt;endl;<br>
cout<<"Average WT="&lt;&lt;int(awt/a)&lt;&lt;endl;<br>
cout<<"Gnatt Chart for Turn Around Time=";<br>
for(int i=0;i&lt;a;i++)<br>
  {<br>
cout&lt;&lt;tt[i]&lt;&lt;" ";<br>
  }<br>
cout&lt;&lt;endl;<br>
cout<<"Average TAT="&lt;&lt;att&lt;&lt;endl;<br>
for(int i=0;i&lt;a;i++)<br>
     {<br>
cout<<"P"&lt;&lt;arr1[i]<<" "&lt;&lt;bt[i]<<" "&lt;&lt;wt[i]<<" "&lt;&lt;tt[i]&lt;&lt;endl;<br>
     }<br>
  return 0;<br>
}<br>



    </div>
    <br>
</body>
</html>