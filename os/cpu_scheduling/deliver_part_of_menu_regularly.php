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
Raina  a student of SRM UNIVERSITY .On his birthday took his n friends(F1,F2,F3,Fn) to SRM Resturent for a treat.the waiter noted the order of F1,F2,F3,Fn as O1,O2,O3 adn so on respectively.<br>
Consider F1,F2,F3. Fn as different customers.Raina a smart person observed that all the people of the resturent were happy unlike other resturents where some of the people were always unhappy with the service.<br>
So,Raina asked the waiter about this and the waiter told they follow the Round Robin algorithm in their resturents so a fairness is seen in every order unlike priority algorithm therefore every customers feel special and are happy as they can see that their order has been given to chef and he/she has started the preparation of his/her order.Although the waiting time is more but the customre feel that their order is in process so they are happy.
    </div> 
    <div class="answer" style="height:100%;">
    <u>Solution</u><br>
        #include &lt;stdio.h&gt;<br>
        int main() {<br>
     int i, limit, total = 0, x, counter = 0, time_quantum;
      int wait_time = 0, turnaround_time = 0, arrival_time[10], burst_time[10], temp[10];
      float average_wait_time, average_turnaround_time;<br>

scanf("%d", &limit);<br>
      x = limit;<br>
for(i = 0; i< limit; i++)<br>
      {<br>

scanf("%d", &arrival_time[i]);<br>


scanf("%d", &burst_time[i]);<br>

            temp[i] = burst_time[i];<br>
      }<br>


scanf("%d", &time_quantum);<br>

for(total = 0, i = 0; x != 0;)<br>
      {<br>
            if(temp[i] <= time_quantum&& temp[i] > 0)<br>
            {<br>
                  total = total + temp[i];<br>
                  temp[i] = 0;<br>
                  counter = 1;<br>
            }<br>
            else if(temp[i] > 0)<br>
            {<br>
                  temp[i] = temp[i] - time_quantum;<br>
                  total = total + time_quantum;<br>
            }<br>
            if(temp[i] == 0 && counter == 1)<br>
            {<br>
                  x--;<br>
printf("\nF%d %d %d %d", i + 1, burst_time[i], total - arrival_time[i], total - arrival_time[i] - burst_time[i]);<br>
wait_time = wait_time + total - arrival_time[i] - burst_time[i];<br>
turnaround_time = turnaround_time + total - arrival_time[i];<br>
                  counter = 0;<br>
            }<br>
if(i == limit - 1)<br>
            {<br>
i = 0;<br>
            }<br>
            else if(arrival_time[i + 1] <= total)<br>
            {<br>
i++;<br>
            }<br>
            else<br>
            {<br>
i = 0;<br>
            }<br>
      }<br>

average_wait_time = wait_time * 1.0 / limit;<br>
average_turnaround_time = turnaround_time * 1.0 / limit;<br>
printf("\nAverage Waiting Time:%f", average_wait_time);<br>
printf("\nAverage Turnaround Time:%f", average_turnaround_time);<br>
      return 0;<br>
}<br>

       }<br>
    </div>
    <br>
</body>
</html>