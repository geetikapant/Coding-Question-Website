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
	Petr,Nikita G.and Nikita are the mosr influential music critics in saint-petersburg.They have recently downloaded their favourite band's new alboum and going to listen it.Petr,being choatic,does not think so,hence he loves listning to songs in a random order.petr is pretty good in convincing other people,so after a two-hours discussion Nikita accepted listening in random order.In this context random ordre means following:There are N songs in the alboum.in the very beginning random song is choosen(here and further "random song" means that every song has equal probability to be choosen). After some somgs is over the next one is choosen randomly and independently of university,wonders,whta is the expected number of songs guys have to listen to until every song is played at least once.
	</div> 
	<div class="answer" style="height:100%;">
	<u>Solution</u><br>
        #include &lt;stdio.h&gt;<br>

longlongintinlineinp()<br>

{<br>

longlongint n=0,a=1;<br>

char c=getchar_unlocked();<br>

while(c &lt;'0' || c &gt;'9') {if(c=='-'){a=-1;}c=getchar_unlocked();}<br>

while(c&gt;='0'&& c&lt;='9')<br>

    {<br>

    n=(n&lt;&lt;3)+(n&lt;&lt;1)+c-'0';<br>

    c=getchar_unlocked();<br>

    }<br>

return a*n;<br>

}<br>

intmain()<br>

{<br>

longlongintt,n;<br>

    t=inp();<br>

while(t--)<br>

    {<br>

        n=inp();<br>

double sum=0;<br>

longlonginti;<br>

for(i=1;i<=n;i++)<br>

            sum+=(double)n/i;<br>

printf("%lf\n",sum);<br>

    }<br>

return0;<br>

}

	</div>
	<br>
</body>
</html>