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
 Bogar a student of Tamil Siddhi College.On his birthday he took his friends (F1,F2,F3,Fn) to Naturopathy hotel for a treat.The waiter noted the order of F1,F2,F3 ,Fn as O1,O2,O3,On respectively<br>
Bogar asked the waiter about the type of algorithm he follows to give order to chef to prepare.Waiter told Bogar  That he follows the SJF(non preemptive shortes job first algorithm)as it minimizes the waiting time so more number of customesrs are happy from their services and so they come back.<br>
Print the waiting time,time at whick chef startsto prepare the order(prepartion strt time)(serive time) and time in which the order completes(turnaround time) for each one of them.<br>
Print the average waiting and averages turnaround time.Assume F1 gets the menu first and orders first then F2 and so on.Therefore the time at which the order is given to the waiter(Arrival time) changes  for each friend.
    </div> 
    <div class="answer" style="height:100%;">
    <u>Solution</u><br>
        #include&lt;bits/stdc++.h&gt;<br>
using namespace std;<br>
int main()<br>
{<br>
        int size;<br>
        cin>>size;<br>
        string name[size];<br>
        for(int i=0;i&lt;size;i++)<br>
        cin>>name[i];<br>
    int bt[size];<br>
        for(int i=0;i&lt;size;i++)<br>
        cin>>bt[i];<br>
        for(int i=0;i&lt;size;i++)<br>
        {<br>
                for(int j=0;j&lt;size-i-1;j++)<br>
                {<br>
                        if(bt[j]>bt[j+1])<br>
                        {<br>
                                string value=name[j]; int loc=bt[j];<br>
                                name[j]=name[j+1]; bt[j]=bt[j+1];<br>
                                name[j+1]=value;  bt[j+1]=loc;<br>
                        }<br>
                }<br>
    }<br>
        cout<<"Sorting Depend on Burst Time\n";<br>
        for(int i=0;i&lt;size;i++)<br>
        {<br>
                cout&lt;&lt;name[i]<<" "&lt;&lt;bt[i]<<" 0\n";<br>
        }<br>
        int wait[size],ta[size];<br>
        float avgw=0.0,avgta=0.0;<br>
        wait[0]=0;<br>
        cout<<"Waiting Time\n";<br>
        for(int i=1;i&lt;size;i++)<br>
        {<br>
        wait[i]=wait[i-1]+bt[i-1];<br>
                cout<<"Time Taken for "&lt;&lt;name[i-1]<<"="&lt;&lt;wait[i-1]&lt;&lt;endl;<br>
        avgw+=wait[i];<br>
        }<br>
        cout<<"Time Taken for "&lt;&lt;name[size-1]<<"="&lt;&lt;wait[size-1]&lt;&lt;endl;<br>
        cout<<"Average Waiting Time="&lt;&lt;fixed&lt;&lt;setprecision(6)<<(float)avgw/(float)size&lt;&lt;endl;<br>
        cout<<"TurnAround Time\n";<br>
        for(int i=0;i&lt;size;i++)<br>
    {<br>
                ta[i]=wait[i]+bt[i];<br>
                cout<<"Time Taken for "&lt;&lt;name[i]<<"="&lt;&lt;ta[i]&lt;&lt;endl;<br>
                avgta+=ta[i];<br>
    }<br>
        cout<<"Average TurnAround Time="&lt;&lt;fixed&lt;&lt;setprecision(6)<<(float)avgta/(float)size&lt;&lt;endl;<br>
        return 0;<br>
}
<br>

    </div>
    <br>
</body>
</html>