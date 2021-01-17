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
 Chirag a student of SRM UNIVERSITY.On his birthday he took his friends (F1,F2,F3,Fn) to SRM restaurent for a treat.The waiter noted the order of F1,F2,F3 ,Fn as O1,O2,O3,On respectively<br>
 Dnoni asked the waiter about the type of algorith he follows  to give order to cef to prepare. Waiter told Dhoni that he follows the SJF(Shortest job  first algorithm) as it minimizes the waiting time so more number of customesr are happy from their service and so they come back.Print the waiting time ,time at which chef starts to prepare the order(Preparation start time)(service time) and time in which the order completes(turnaround time) for each one of Them.<br>
 Print the average waiting and average turnaround time.Assume F1 gets the menu first and orders first then F2 and so on Theefore the time at which the order is given to the waiter (arrival trime) Changes for each friend.`1
    </div> 
    <div class="answer" style="height:100%;">
    <u>Solution</u><br>
        #include&lt;iostream&gt;<br>
using namespace std;<br>
int mat[10][6];<br>
void swap(int *a, int *b)<br>
{<br>
    int temp = *a;<br>
    *a = *b;<br>
    *b = temp;<br>
}<br>
void arrangeArrival(int num, int mat[][6])<br>
{<br>
for(int i=0; i&lt;num; i++)<br>
    {<br>
for(int j=0; j&lt;num-i-1; j++)<br>
        {<br>
            if(mat[j][1] > mat[j+1][1])<br>
            {<br>
for(int k=0; k<5; k++)<br>
                {<br>
                    swap(mat[j][k], mat[j+1][k]);<br>
                }<br>
            }<br>
        }<br>
    }<br>
}<br>
void completionTime(int num, int mat[][6])<br>
{<br>
mat[0][2] = 0;<br>
mat[0][3] = mat[0][1] + mat[0][2];<br>
for(int i=1; i&lt;num; i++)<br>
    {<br>
        mat[i][2] = mat[i-1][2] + mat[i-1][1];<br>
        mat[i][3] = mat[i][1] + mat[i][2];<br>
    }<br>
}<br>
int main()<br>
{<br>
    int num, temp;<br>
cin>>num;<br>
for(int i=0; i&lt;num; i++)<br>
    {<br>
        mat[i][0] = i+1;<br>
cin>>mat[i][1];<br>
    }<br>
arrangeArrival(num, mat);<br>
completionTime(num, mat);<br>
for(int i=0; i&lt;num; i++)<br>
    {<br>
cout<<"F"&lt;&lt;mat[i][0]&lt;&lt;" "&lt;&lt;mat[i][1]&lt;&lt;" "&lt;&lt;mat[i][2]&lt;&lt;" "&lt;&lt;mat[i][3]&lt;&lt;"\n";<br>
    }<br>
  float avg,at, sum = 0,sum1 =0;<br>
for(int i= 0; i&lt;num;i++)<br>
  {<br>
    sum = sum + mat[i][2];<br>
    sum1 = sum1 + mat[i][3];<br>
  }<br>
avg = sum/num;<br>
  at = sum1/num;<br>
cout<<"Average Waiting Time:";<br>
printf("%.6f\n",avg);<br>
cout<<"Average Turnaround Time:";<br>
printf("%.6f",at);<br>
}<br>
    </div>
    <br>
</body>
</html>