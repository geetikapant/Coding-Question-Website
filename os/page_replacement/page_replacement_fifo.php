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
  The Institution is organised a musical concert in an auditorium. Audience booked their tickets in online bye selecting their suitable seats. Even though some of the seats were left unselected in some  of the rows. Institution decied to fill the seats on spot by audience wiling to attend the concert. Write a program to fill the seats using First In First out(FIFO) algorithm.<br>
    </div> 
    <div class="answer" style="height:100%;">
    <u>Solution</u><br>
        #include &lt;stdio.h&gt;<br>
        int main() {<br>
    int i,j,n,a[50],frame[10],no,k,avail,count=0;<br>
    scanf("%d",&n);<br>
    for(i=1;i<=n;i++)<br>
        scanf("%d",&a[i]);<br>
    scanf("%d",&no);<br>
    for(i=0;i&lt;no;i++)<br>
        frame[i]= -1;<br>
    j=0;<br>
    for(i=1;i<=n;i++)<br>
    {<br>
        avail=0;<br>
        for(k=0;k&lt;no;k++)<br>
            if(frame[k]==a[i])<br>
                avail=1;<br>
        if (avail==0)<br>
        {<br>
            frame[j]=a[i];<br>
            j=(j+1)%no;<br>
            count++;<br>
            for(k=0;k&lt;no;k++)<br>
                printf("%d ",frame[k]);<br>
        }<br>
        printf("\n");<br>
    }<br>
    printf("Total Page Faults:%d",count);<br>
    return 0;<br>
       }<br>
    </div>
    <br>
</body>
</html>