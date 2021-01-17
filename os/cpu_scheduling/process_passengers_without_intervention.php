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
 Semester break has started and Ashvin is going home from college (SRM UNIVERSITY).He is taking flight from Chennai to delhi.After entering the Airport,he was asked to get into queue of the boarding pass.<br>
 The Airline staff(Jet Airways)follows the Non pre-emptive Priority algorithm(Even in cases if a passenger with heigher priority comes when processing of a passenger with lower priority is taking place in this case the processing of the boarding pass of the passenger with lower priority shoiuld not be able altered and the passenger with the highest priority has to weight until his turn comes according to the priority).<br>
 Ashwin is a programmer and wanted to gift a program to the airline shows the service time (time at which that person will reach the counter),Waiting time(service time-arrival time)for each person in the queue and turnaround time(total time from arrival till person gets boarding pass).<br>
 Assume passenger with the lowest priority number has the highest priority.
    </div> 
    <div class="answer" style="height:100%;">
    <u>Solution</u><br>
       #include &lt;stdio.h&gt;<br>
int main()<br>
{<br>
    int bt[20],p[20],wt[20],tat[20],pr[20],i,j,n,total=0,pos,temp;<br>
  float avg_wt,avg_tat;<br>
scanf("%d",&n);<br>
    for(i=0;i&lt;n;i++)<br>
    {<br>
scanf("%d",&bt[i]);<br>
scanf("%d",&pr[i]);<br>
        p[i]=i+1;     <br>    
    }<br>
    for(i=0;i&lt;n;i++)<br>
    {<br>
pos=i;<br>
        for(j=i+1;j&lt;n;j++)<br>
        {<br>
            if(pr[j]&lt;pr[pos])<br>
pos=j;<br>
        }<br>

        temp=pr[i];<br>
pr[i]=pr[pos];<br>
pr[pos]=temp;<br>

        temp=bt[i];<br>
bt[i]=bt[pos];<br>
bt[pos]=temp;<br>

        temp=p[i];<br>
        p[i]=p[pos];<br>
        p[pos]=temp;<br>
    }<br>
wt[0]=0; <br>      
    for(i=1;i&lt;n;i++)<br>
    {<br>
wt[i]=0;<br>
        for(j=0;j&lt;i;j++)<br>
wt[i]+=bt[j];<br>

        total+=wt[i];<br>
    }<br>

avg_wt=total/n;    <br> 
    total=0;<br>
    for(i=0;i&lt;n;i++)<br>
    {<br>
tat[i]=bt[i]+wt[i];   <br>  
        total+=tat[i];<br>
printf("\nP%d %d %d %d",p[i],bt[i],wt[i],tat[i]);<br>
    }<br>

avg_tat=total/n;     <br>
printf("\nAverage Waiting Time:");<br>
printf("%.6f\n",avg_wt);<br>
printf("Average Turnaround Time:");<br>
printf("%.6f\n",avg_tat);<br>
        return 0;<br>
}

    </div>
    <br>
</body>
</html>