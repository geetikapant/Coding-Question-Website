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
Johnny has a pool in his garden.There are several islands in the pool.Some islands are connected by bridges> Any bridge can be removed.<br>
Every day Johnny removes some bridges so that there is only one way from any islands to any other.In the evening he returns removed bridges to their places.lso he has some favourite bridges which he never removes.Jonny will be happy if he is able to make a configuration of bridges on the given day which he has never made before.<br>
You have to count the amount of days he will be happpy.Of course, if the favourite bridges themselves don't satisfy the happiness condition Johnny will not be happy for even single day.Now display all the locations at which required element is found and also the number of times it occur in the file.
    </div> 
    <div class="answer" style="height:100%;">
    <u>Solution</u><br>
        #include &lt;iostream&gt;<br>
using namespace std;<br>
int main()<br>
{<br>
        int size,count=0;<br>
        cin>>size;<br>
        int arr[size];<br>
        for(int i=0;i&lt;size;i++)<br>
        cin>>arr[i];<br>
        int find,flag=0;<br>
        cin>>find;<br>
        for(int i=0;i&lt;size;i++)<br>
    {<br>
        if(find==arr[i])<br>
        {<br>
        cout&lt;&lt;find&lt;&lt;" is present at location "&lt;&lt;i+1&lt;&lt;endl;<br>
        flag=1;<br>
        count++;<br>
        }<br>
    }<br>
        if(flag==1)<br>
                cout&lt;&lt;find<<" is present "&lt;&lt;count<<" times in array";<br>
        else<br>
        cout&lt;&lt;find&lt;&lt;" is not present in array";<br>
        return 0;<br>
}<br>


    </div>
    <br>
</body>
</html>