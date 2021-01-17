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
    Kattapa, as you all know was one of the greatest warriors of his time. The kingdom of Maahishmati had never lost a battle under him(as army-chief), and the reason for that was their really powerful army, also called as mahasena.<br>
    Kattapa was known to be a very superstitious person. He believed that a soldier is ""lucky"" if the soldier is holding an even number of weapons, and ""unlucky"" otherwise. He considered the army as ""READY FOR BATTLE"" if the count of ""lucky"" soldiers is strictly greater than the count of""unlucky"" soldiers, and ""NOT READY"" otherwise.<br>
    Given the number of weapons each soldier is holding,your task is to determine whether the army formed by all these soldiers is ""READY FOR BATTLE"" or ""NOT READY"".
</div>
    <div class="answer" style="height:100%;">
    <u>Solution</u><br>
 #include &lt;stdio.h&gt;<br>
        #include &lt;string.h&gt;<br>
        #include &lt;stdlib.h&gt;<br>
inline int scan()<br>
{<br>
int t=0;<br>
char c;<br>
c=getchar_unlocked();<br>
while(c<'0' || c>'9')<br>
c=getchar_unlocked();<br>
while(c>='0' && c<='9')<br>
{<br>
t=(t<<3)+(t<<1)+c-'0';<br>
c=getchar_unlocked();<br>
}<br>
return(t);<br>
}<br>
int main(void) {<br>
        int t,i,o,e,n;<br>
        t=scan();o=e=0;<br>
        for(i=0;i&lt;t;i++)<br>
        {<br>
                n=scan();<br>
                if(n%2)<br>
                o++;<br>
                else e++;<br>
        }<br>
        if(e>o)<br>
        printf("READY FOR BATTLE");<br>
        else printf("NOT READY");<br>
        return 0;<br>
}<br>

    </div>
    <br>
</body>
</html>