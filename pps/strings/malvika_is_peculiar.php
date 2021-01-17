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
 "Little  Malvika is very pecular about colours. On her birthday, her mom wanted to baloons for decorating the house. So she asked her about her colour preferences. The sophisticated little person that Malvika is, she likes only two colours amber and brass. Her mom bought n balloons, each of which was either amber or brass in colour. You are provided this information in a string s consisting of characters a and b only, where a denotes that the ballon is amber, where b denotes it being brass coloured.<br>
 When Malvika saw the balloons, she was furious with anger as she wanted all the balloons of the same colour. in her anger, She painted some of the balloons with the opposite colour(i.e., she painted some amber ones brass and vice-versa" to make all balloons appear to be the same colour. As she was very angry, it took her a lot of time to do this, but you can probably show her the right way of doing so, therebay teaching her a lesson to remain calm  in difficult situations,by finding out the minimmum number of balloons needed to be painted in order to make all of them the same colour..
   </div> 
    <div class="answer" style="height:100%;">
    <u>Solution</u><br>
        #include &lt;stdio.h&gt;<br>
        #include &lt;string.h&gt;<br>
        int main() {<br>
    int t,min,i,amber,brass;<br>
    char n[110];<br>
    scanf("%d",&t);<br>
    while(t--)<br>
    {<br>
    amber=0;<br>
    brass=0;<br>
    scanf("%s",n);<br>
    for(i=0;n[i]!='\0';i++)<br>
    {<br>
    if(n[i]=='a')<br>
    amber++;<br>
    else if(n[i]=='b')<br>
    brass++;<br>
       }<br>
       if(amber>=brass)<br>
       printf("%d\n",brass);<br>
       else<br>
       printf("%d\n",amber);<br>
    }<br>
    return 0;<br>
    }
    </div>
    <br>
</body>
</html>