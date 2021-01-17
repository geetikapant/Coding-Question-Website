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
 Consider F1,F2,F3 ,Fn as diffent customers.Chirag Yadv a smart person observed that some people were given special treatment and their order was prepared before them but those people came after them(Not FCFS).<br>
 So,Chirag yadav askedd the waiter about this and the waiter told those people were their regular customers so tehy guve more priority to them.<br>
 He also told Chiragthat they maintain a database which records the number of time a customers visit their resturent as they visit more time the priorityy level increases.<br>
 Print the average waiting and avera turnaround time.Assume F1 gets the menu first and orders first then F2 and so on.Therefore the time at which the order is given to teh waiter(Arrival Time) changes for each friend.
    </div> 
    <div class="answer" style="height:100%;">
    <u>Solution</u><br>
#include&lt;bits/stdc++.h&gt;<br>
using namespace std;<br>
int main()<br>
{<br>
        int size;<br>
        cin&gt;&gt;size;<br>
        string name[size];<br>
        for(int i=0;i&lt;size;i++)<br>
        cin&gt;&gt;name[i];<br>
    int bt[size],at[size],pid[size];<br>
        for(int i=0;i&lt;size;i++)<br>
        cin&gt;&gt;bt[i];<br>
        for(int i=0;i&lt;size;i++)<br>
        cin&gt;&gt;at[i];<br>
        for(int i=0;i&lt;size;i++)<br>
        cin&gt;&gt;pid[i];<br>
        for(int i=0;i&lt;size;i++)<br>
        {<br>
                for(int j=0;j&lt;size-i-1;j++)<br>
                {<br>
                        if(pid[j]&gt;pid[j+1])<br>
                        {<br>
                                string value=name[j]; int loc=bt[j]; int tmp=pid[j];<br>
                                name[j]=name[j+1]; bt[j]=bt[j+1]; pid[j]=pid[j+1];<br>
                                name[j+1]=value;  bt[j+1]=loc; pid[j+1]=tmp;<br>
                        }<br>
                }<br>
    }<br>
        cout&lt;&lt;"Sorting Depend on Priority\n";<br>
        for(int i=0;i&lt;size;i++)<br>
        {<br>
                cout&lt;&lt;name[i]&lt;&lt;" "&lt;&lt;bt[i]&lt;&lt;" "&lt;&lt;at[i]&lt;&lt;" "&lt;&lt;pid[i]&lt;&lt;endl;<br>
        }<br>
        int wait[size],ta[size];<br>
        float avgw=0.0,avgta=0.0;<br>
        wait[0]=0;<br>
        cout&lt;&lt;"Waiting Time\n";<br>
        for(int i=1;i&lt;size;i++)<br>
        {<br>
        wait[i]=wait[i-1]+bt[i-1];<br>
                cout&lt;&lt;"Time Taken for "&lt;&lt;name[i-1]&lt;&lt;"="&lt;&lt;wait[i-1]&lt;&lt;endl;<br>
        avgw+=wait[i];<br>
        }<br>
        cout&lt;&lt;"Time Taken for "&lt;&lt;name[size-1]&lt;&lt;"="&lt;&lt;wait[size-1]&lt;&lt;endl;<br>
        cout&lt;&lt;"Average Waiting Time="&lt;&lt;fixed&lt;&lt;setprecision(6)&lt;&lt;(float)avgw/(float)size&lt;&lt;endl;<br>
        cout&lt;&lt;"TurnAround Time\n";<br>
        for(int i=0;i&lt;size;i++)<br>
    {<br>
                ta[i]=wait[i]+bt[i];<br>
                cout&lt;&lt;"Time Taken for "&lt;&lt;name[i]&lt;&lt;"="&lt;&lt;ta[i]&lt;&lt;endl;<br>
                avgta+=ta[i];<br>
    }<br>
        cout&lt;&lt;"Average TurnAround Time="&lt;&lt;fixed&lt;&lt;setprecision(6)&lt;&lt;(float)avgta/(float)size&lt;&lt;endl;<br>
        return 0;<br>
}

    </div>
    <br>
</body>
</html>