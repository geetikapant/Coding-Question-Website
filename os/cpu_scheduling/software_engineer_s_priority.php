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
  Software Engineer saran is assigned with several projects from various companies by Team lead.<br>
  He is also insisted to complete the projects based on their Priority.But if any new project with higher priority is given in between he has to complete the new and then continue.<br>
  Order date and their duration is specified.<br>
  You are asked to calculate the individual and the average waiting time of the project.Also find their individual and the average turnaround time of each Project.
    </div> 
    <div class="answer" style="height:100%;">
    <u>Solution</u><br>
       #include &lt;iostream&gt;<br>
#include&lt;bits/stdc++.h&gt;<br>
using namespace std;<br>
int main()<br>
{<br>
 int size;<br>
cin&gt;&gt;size;<br>
 int bt[size][2],pid[size],wt[size],tat[size],avgta=0,avgw=0;<br>
for(int i=0;i&lt;size;i++)<br>
  {<br>
cin&gt;&gt;bt[i][1];<br>
bt[i][0]=i+1;<br>
  }<br>
for(int i=0;i&lt;size;i++)<br>
cin&gt;&gt;pid[i];<br>
for(int i=0;i&lt;size;i++)<br>
    {<br>
        for(int j=0;j&lt;size-i-1;j++)<br>
          {<br>
           if(pid[j]&gt;pid[j+1])<br>
            {<br>
                 int index=pid[j], value=bt[j][1], loc=bt[j][0];<br>
                pid[j]=pid[j+1]; bt[j][1]=bt[j+1][1]; bt[j][0]=bt[j+1][0];<br>
                pid[j+1]=index; bt[j+1][1]=value; bt[j+1][0]=loc;<br>
                }<br>
           }<br>
    }<br>
        wt[0]=0;<br>
        for(int i=1;i&lt;size;i++)<br>
    {<br>
wt[i]=wt[i-1]+bt[i-1][1];<br>
avgw+=wt[i];<br>
    }<br>
        for(int i=0;i&lt;size;i++)<br>
    {<br>
        tat[i]=wt[i]+bt[i][1];<br>
        avgta+=tat[i];<br>
        }<br>
        cout&lt;&lt;"PID BT WT TAT\n";<br>
        for(int i=0;i&lt;size;i++)<br>
cout&lt;&lt;bt[i][0]&lt;&lt;" "&lt;&lt;bt[i][1]&lt;&lt;" "&lt;&lt;wt[i]&lt;&lt;" "&lt;&lt;tat[i]&lt;&lt;endl;<br>
        cout&lt;&lt;"Average Waiting Time:"&lt;&lt;avgw/size&lt;&lt;".000000";<br>
        cout&lt;&lt;"\nAverage Turnaround Time:"&lt;&lt;avgta/size&lt;&lt;".000000";     <br>
        return 0;<br>
}
    </div>
    <br>
</body>
</html>