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
Semester break has started and Bogar is going home from College(Tamil siddha College).He is taking flight from Chennai to Delhi.After entering the Airport,he was asked to get into queue of the Boarding pass adn his turn came very quickly.bogar a smart person observed that all the passengers of this airline were happy unlike other airlines where some of the people were always unhappy with service.<br>
So,Bogar asked the staff about this and the staff told that they follow the Round Robin algorithm so a  fairness is seen in every ordre unlike priority algorithm therefore every customer feel speciall and are happy as they can see that their boarding pass is in process.<br>
You can assume Time quantum as a timer after which the Staff checks if some other passenger has arrived.Bogar is a programmer and wanted to gift a program to the airline which shows the service time (time at which that person will reach the counter),waiting time (service time-arrival time) for each person in the queue and turnaround time(total time from arrival till person gets boarding pass).Bogar is smart so he does not need you help in this but still you are dumb so solve this problem.Also,CAlculate average waiting adn average turnaround time.
    </div> 
    <div class="answer" style="height:100%;">
    <u>Solution</u><br>
        #include&lt;iostream&gt;<br>
#include&lt;iomanip&gt;<br>
using namespace std;<br>
 void roundRobin(int len,string p[], int a[],int b[], int n)<br>
    {<br>
         int res = 0;<br>
        int resc = 0;<br>
     string seq;<br>
    int res_b[len]; <br>
        int res_a[len];<br>

        for (int i = 0; i&lt;len; i++)<br>
        {<br>
res_b[i] = b[i];<br>
res_a[i] = a[i];<br>
        }<br>
        int t = 0;<br>
        int w[len];<br>
        int comp[len]; <br>
        while (true) {<br>
            bool flag = true;<br>
            for (int i = 0; i&lt;len; i++)<br>
            {<br>
                if (res_a[i] <= t)<br>
                {<br>
                    if (res_a[i] <= n)<br>
                    {<br>
                        if (res_b[i] > 0)<br>
                        {<br>
                            flag = false;<br>
                            if (res_b[i] > n)<br>
                            {<br>
                                t = t + n;<br>
res_b[i] = res_b[i] - n;<br>
res_a[i] = res_a[i] + n;<br>
seq += "->" + p[i];<br>
                            }<br>
                            else<br>
                            {<br>
                              t = t + res_b[i];<br>
                              comp[i] = t - a[i];<br>
                              w[i] = t - b[i] - a[i];<br>
res_b[i] = 0;<br>
seq += "->" + p[i];<br>
                            }<br>
                        }<br>
                    }<br>
                    else if (res_a[i] > n)<br>
                    {<br>

                        for (int j = 0; j&lt;len; j++)<br>
                        {<br>
                          if (res_a[j] &lt;res_a[i])<br>
                          {<br>
                                if (res_b[j] > 0)<br>
                                {<br>
                                    flag = false;<br>
                                    if (res_b[j] > n)<br>
                                    {<br>
                                        t = t + n;<br>
res_b[j] = res_b[j] - n;<br>
res_a[j] = res_a[j] + n;<br>
seq += "->" + p[j];<br>
                                    }<br>
                                    else {<br>
                                        t = t + res_b[j];<br>
                                        comp[j] = t - a[j];<br>
                                        w[j] = t - b[j] - a[j];<br>
res_b[j] = 0;<br>
seq += "->" + p[j];<br>
                                    }<br>
                                }<br>
                            }<br>
                        }<br>
                        if (res_b[i] > 0)<br>
                        {<br>
                            flag = false;   <br>
                            if (res_b[i] > n)<br>
                            {<br>
                                t = t + n;<br>
res_b[i] = res_b[i] - n;<br>
res_a[i] = res_a[i] + n;<br>
seq += "->" + p[i];<br>
                            }<br>
                            else<br>
                            {<br>
                                t = t + res_b[i];<br>
                                comp[i] = t - a[i];<br>
                                w[i] = t - b[i] - a[i];<br>
res_b[i] = 0;<br>
seq += "->" + p[i];<br>
                            }<br>
                        }<br>
                    }<br>
                }<br>
     else if (res_a[i] > t)<br>
     {<br>
                    t++;<br>
i--;<br>
                }<br>
            }<br>
            if (flag) {<br>
                break;<br>
            }<br>
        }<br>
cout<<"Waiting Time";<br>
        for (int i = 0; i&lt;len; i++) {<br>
cout<<"\nTime Taken for "&lt;&lt;p[i]<<"="&lt;&lt;w[i];<br>
          res = res + w[i];<br>
resc = resc + comp[i];<br>
        }<br>
cout&lt;&lt;fixed;<br>
cout<<"\nAverage Waiting Time="<< (float)res / len;<br>
cout<<"\nTurnAround Time";<br>
    for (int i = 0; i&lt;len; i++) {<br>
cout<<"\nTime Taken for "&lt;&lt;p[i]<<"="&lt;&lt;comp[i];<br>
    }<br>


cout<<"\nAverageTurnAround Time="<< (float)resc / len;<br>

    }<br>
  int main()<br>
{   int n ;<br>
cin>>n;<br>
  int processes[n],arrivaltime[n];<br>
  string name[n];<br>
    int bursttime[n];<br>
    int q ;<br>
for(int i=0;i&lt;n;i++)<br>
  {<br>
cin>>name[i];<br>
  }<br>
for(int i=0;i&lt;n;i++)<br>
  {<br>
cin>>bursttime[i];<br>
     processes[i]=i;<br>
  }<br>
for(int i=0;i&lt;n;i++)<br>
  {<br>
cin>>arrivaltime[i];<br>
  }<br>
cin>>q;<br>
roundRobin(n,name, arrivaltime, bursttime, q);<br>
    return 0;<br>
}<br>

    </div>
    <br>
</body>
</html>