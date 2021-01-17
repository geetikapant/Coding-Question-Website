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
 Semester break has started and bogar is going to home from college(Tamil Siddha).He is taking flight from Chennai to Delhi.After entering the airport,he was asked to get into queue of boarding Pass.the airline staff follows the FCFS algorithm and first process the request of the person who came first that is who is at first position in the queue.<br>
 Bogor is a programmer and wanted to gift a program to the airline which shows the service time (time at which that person will reach the counter),waiting time(service time-arrival time)for each person in the queue and turnaround time(total time from arrival till person gets boarding pass)>Also ,Calculate averages waiting and average turnaround time.<br>
    </div> 
    <div class="answer" style="height:100%;">
    <u>Solution</u><br>
#include&lt;iostream&gt;<br>
#include&lt;iomanip&gt;<br>
using namespace std;<br>
void findWaitingTime(int processes[], int n, int bt[],int wt[], int at[])<br>
{<br>
    int service_time[n];<br>
service_time[0] = 0;<br>
wt[0] = 0;<br>
  for (int i = 1; i&lt;n ;i++)<br>
    {<br>
service_time[i] = service_time[i-1] + bt[i-1];<br>
wt[i] = service_time[i] - at[i];<br>
   if (wt[i] &lt;0)<br>
wt[i] = 0;<br>
    }<br>
}<br>
void findTurnAroundTime(int processes[], int n, int bt[],int wt[], int tat[])<br>
{   for (int i = 0; i&lt; n ; i++)<br>
tat[i] = bt[i] + wt[i];<br>
}<br>
void findavgTime(int processes[], int n, int bt[], int at[])<br>
{<br>
    int wt[n], tat[n];<br>
findWaitingTime(processes, n, bt, wt, at);<br>
findTurnAroundTime(processes, n, bt, wt, tat);   <br>
    int total_wt = 0, total_tat = 0;<br>
    for (int i = 0 ;i&lt; n ; i++)<br>
    {<br>
total_wt = total_wt + wt[i];<br>
total_tat = total_tat + tat[i];<br>
        int compl_time = tat[i] + at[i];<br>
cout&lt;&lt;"Passenger" &lt;&lt;i&lt;&lt; " " &lt;&lt;wt[i] &lt;&lt; " "&lt;&lt;tat[i] &lt;&lt;endl ;<br>
    }<br>
cout&lt;&lt;fixed;<br>
cout&lt;&lt; "Average waiting time="&lt;&lt; (float)total_wt / (float)n;<br>
cout&lt;&lt; "\nAverageturn around time="&lt;&lt; (float)total_tat / (float)n;<br>
  }<br>
int main()<br>
{<br>
    int n ;<br>
cin&gt;&gt;n;<br>
  int processes[n];<br>
  char ch='A';<br>
    int burst_time[n];<br>
    int arrival_time[n];<br>
for(int i=0;i&lt;n;i++)<br>
  {<br>
cin&gt;&gt;burst_time[i];<br>
    processes[i]=ch;<br>
ch++;   <br>
  }<br>
for(int i=0;i&lt;n;i++)<br>
  {<br>
cin&gt;&gt;arrival_time[i];   <br>
   }<br>
findavgTime(processes, n, burst_time, arrival_time);   <br>
    return 0;<br>
}
    </div>
    <br>
</body>
</html>