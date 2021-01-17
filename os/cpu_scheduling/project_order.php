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
 Software Engineer sarah  is assigned with several projects from various companies by his Team lead.<br>
 He is also insisted to complete the projects based on their ordering sequence(ie.,first come basis).<br>
 Project order date and their duration is specified.<br>
 You are asked to calculate the individual and the average waiting time of the project.<br>
 Also find their individual and the average turnaround time of each project.<br>
    </div> 
    <div class="answer" style="height:100%;">
    <u>Solution</u><br>
#include &lt;iostream&gt;<br>
using namespace std;<br>
int main() {<br>
        int a,i,tat,awt=0,atat=0;<br>
  int wt=0;<br>
  int arr[20];<br>
cin>>a;<br>
  for(i=0;i&lt;a;i++)<br>
  {<br>
cin>>arr[i];<br>
  }<br>
  tat=arr[0];<br>
cout&lt;&lt;"Pid BT WT TAT"&lt;&lt;endl;<br>
  for(i=0;i &lt;a;i++)<br>
  {<br>
cout &lt;&lt;"P["&lt;&lt;i+1&lt;&lt;"] "&lt;&lt;arr[i]&lt;&lt;" "&lt;&lt;wt&lt;&lt;" "&lt;&lt;tat&lt;&lt;endl;<br>
awt=awt+wt;<br>
wt=tat;<br>
atat=atat+tat;<br>
    tat=wt+arr[i+1];<br>
  }<br>
cout&lt;&lt;"Average Waiting Time:"&lt;&lt;awt/a&lt;&lt;endl;<br>
cout&lt;&lt;"Average Turnaround Time:"&lt;&lt;atat/a;<br>
        return 0;<br>
}
    </div>
    <br>
</body>
</html>