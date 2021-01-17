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
Rohit a student of SRM University.On his birthday he took his friends (F1,F2,F3,Fn) to SRM Resturent for a treat.The waiter noted the order of F1,F2,F3 ,Fn as O1,O2,O3,On respectively.<br>
Assuming the waiter follows the FCFS algorithm.Print the waiting time,time at which chef starts to prepare then order(preparation start time)(service time) and time in which the order completes(turnaround time) for each one of them.Print the average waiting and average turnaround time.<br>
Assume F1 gets the menu first and others first then F2 and so on Therefore the time at which the orders is given to the waiter (arrival time) changes for each friend.
    </div> 
    <div class="answer" style="height:100%;">
    <u>Solution</u><br>
#include&lt;bits/stdc++.h&gt;<br>
#include &lt;iostream&gt;<br>
using namespace std;<br>
int main()<br>
{<br>
        int size;<br>
        cin>>size;<br>
        int given[size][2];<br>
        for(int i=0;i&lt;size;i++)<br>
        {<br>
                given[i][0]=i+1;<br>
                cin>>given[i][1];<br>
        }<br>
        int wait[size],ta[size];<br>
        float avgw=0.0,avgta=0.0;<br>
        wait[0]=0;<br>
        for(int i=1;i&lt;size;i++)<br>
        {<br>
                wait[i]=wait[i-1]+given[i-1][1];<br>
                avgw+=wait[i];<br>
        }<br>
        for(int i=0;i&lt;size;i++)<br>
    {<br>
                ta[i]=wait[i]+given[i][1];<br>
                avgta+=ta[i];<br>
    }<br>
        for(int i=0;i&lt;size;i++)<br>
    {<br>
        cout<<"F"&lt;&lt;given[i][0]<<" "&lt;&lt;fixed&lt;&lt<;setprecision(2)<<(float)given[i][1]<<" "&lt;&lt;fixed&lt;&lt;setprecision(2)<<(float)wait[i]<<" "&lt;&lt;fixed&lt;&lt;setprecision(2)<<(float)ta[i]&lt;&lt;endl;<br>
        }<br>
        cout<<"Average Waiting Time="&lt;&lt;fixed&lt;&lt;setprecision(6)<<(float)avgw/(float)size;<br>
        cout<<"\nAverage Turnaround Time="&lt;&lt;fixed&lt;&lt;setprecision(6)<<(float)avgta/(float)size;<br>
        return 0;<br>
}<br>
    </div>
    <br>
</body>
</html>