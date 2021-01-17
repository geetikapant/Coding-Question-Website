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
Write a program to implement Best fit algorithm.The best fit memory allocation algorithm allocates the smallest free partition available in the memory that is sufficient enough to hold the process within the system.
TEST CASE 1<br>
INPUT <br>
 5 4<br>
  10 2 5 12 7<br> 
  4 1 11 6 <br>
  OUTPUT<br>
  process1 is allocated to Block3<br>
  after p1:10 2 1 12 7<br>
  process2 is allocated to block3<br>
  after p1:10 2 0 12 7<br>
  Process3 is allocated to Block4<br>
  after p1:10 2 0 1 7<br>
  Process4 is allocated to Block5<br>
  after p1:10 2 0 1 1<br>
      </div> 
    <div class="answer" style="height:100%;">
    <u>Solution</u><br>
        #include &lt;iostream><br>
#include&lt;climits><br>
using namespace std;<br>
int main() {<br>
        int n,m,i,j,min,ind;<br>
        cin>>n>>m;<br>
        int a[n],b[m];<br>
    for(i=0;i&lt;n;i++)<br>
        cin>>a[i];<br>
        for(i=0;i&lt;m;i++)<br>
        cin>>b[i];<br>
        for(i=0;i&lt;m;i++){<br>
        min=INT_MAX;<br>
        ind=n;<br>
        for(j=0;j&lt;n;j++){<br>
        if(a[j]>=b[i] && a[j]&lt;min){<br>
        min=a[j];<br>
ind=j;<br>
                        }<br>
        }<br>
        if(ind&lt;n){<br>
                a[ind]-=b[i];<br>
cout<<"Process"&lt;&lt;i+1<<" is allocated to Block"&lt;&lt;ind+1&lt;&lt;endl;<br>
cout<<"after p1:";<br>
            for(j=0;j&lt;n;j++)<br>
cout<<" "&lt;&lt;a[j];<br>
cout&lt;&lt;endl;<br>
        }<br>
        else{<br>
        a[0]-=b[i];<br>
        cout<<"Process"<&lt;&lt;i+1<<" is allocated to Block1"&lt;&lt;endl;<br>
cout<<"after p1:";<br>
            for(j=0;j&lt;n;j++)<br>
cout<<" "&lt;&lt;a[j];<br>
cout&lt;&lt;endl;<br>
        }<br>
    }<br>
        return 0;<br>
}<br>
    </div>
    <br>
</body>
</html>