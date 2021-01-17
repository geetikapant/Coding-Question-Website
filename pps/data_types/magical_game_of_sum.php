<?php
  include "header.php";
  include "sidenav.php";
?>
<!DOCTYPE html>
<html>
<head><!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Comic+Neue:wght@300;700&display=swap" rel="stylesheet">
    
    <title></title>

    <link rel="stylesheet" type="text/css" href="style.css">
	
</head>
<body>
	<div class="question">
		<u>Question</u><br>
        Yesterday, puppy Tuzik learned a magically efficient method to find the sum of the integers from 1 to N. He denotes it as sum(N). But today, as a true explorer, he defined his own function: sum(D,N), which means the operation sum applied D times: the first time to N, and each subsequent time to the result of the previous operation.<br>
        For example, if D=2 and N=3, then sum(2,3) equals to sum(sum(3))=sum(1+2+3)=sum(6)=21.<br>
        Tuzik wants to calculate some values of the sum(D,N) function. Will you help him with that><br> 
    </div>
	<div class="answer">
		#include&lt;stdio.h&gt;<br>
        int main(){<br>
            int i,j,r;<br>
              for(i=0;i&lt;d;i++)<br>
            { r=0;<br>
                for(j=1;j<=n;j++)<br>
                {<br>
                  r=r+j;<br>
                }<br>
                n=r;<br>
              }<br>
              return r;<br>
            }<br>
            int main() {<br>
              int d[10],n[10],i,j;<br>
            scanf("%d",&j);<br>
              for(i=0;i&lt;j;i++)<br>
              {<br>
            scanf("%d %d",&d[i],&n[i]);<br>
              }<br>
              for(i=0;i&lt;j;i++)<br>
              {<br>
                    printf("%d\n",sum(d[i],n[i]));<br>
              }<br>
                    return 0;<br>
            }<br>

	</div>
	<br>
</body>
</html>