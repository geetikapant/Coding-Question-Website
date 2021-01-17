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
	Alice's school is planning to take some students from her class on a field trip.Alice is really excited about it.there are a total od S students in her class.but due to budget contraints,the school is planning to take onle n students for the trip.These students eill be picked randomly.And each student has equal chance of being picked.<br>
    Alice's friend circle has m students including her.Though she is excited about the fiels trip,she will ebjoy it only is there are atleast K of her friends with her on a trip.She is wondaring what are the chances of the happening.She needs your help.Tell her the probability that she will enjoy given that she goes on the trip.
	</div> 
	<div class="answer" style="height:100%;">
	<u>Solution</u><br>
       #include &lt;stdio.h&gt;<br>
long double func(long double n,long double r)<br>
{<br>
  int i;<br>
  long double res=1.0000000;<br>
  for(i=1;i<=r;++i)<br>
  {<br>
    res=(res*(n-r+i))/i;<br>
  }<br>
  return res;<br>
}<br>
int main()<br>
{<br>
  long double s,n,m,k;<br>
  int t;<br>
  int i;<br>
scanf("%d",&t);<br>
  while(t--)<br>
  {<br>
scanf("%Lf %Lf %Lf %Lf",&s,&n,&m,&k);<br>
    long double res=0.0000000;<br>
i=k;<br>
    while((i<=m-1))<br>
    {
      if((n-i-1)<=(s-m)&&(n-i-1)>=0)<br>
      {<br>
        res=res+func(m-1,i)*func(s-m,n-i-1);<br>
      }<br>
      ++i;<br>
    }<br>
    res=res/func(s-1,n-1);<br>
printf("%.7Lf\n",res);<br>
  }<br>
  return 0;<br>
}
	</div>
	<br>
</body>
</html>