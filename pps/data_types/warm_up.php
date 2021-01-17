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
        You are given a string. Your task is to determine whether number of occurrences of some character in the string is equal to the sum of numbers of occurrences of other characters in the string.<br>
    </div>
	<div class="answer">
		#include&lt;stdio.h&gt;<br>
        #include&lt;string.h&gt;<br>
        int main(){<br>
            char s[200];<br>
            int t,len,arr[26],i,f;<br>
            scanf("%d",&t);<br>
            while(t--)<br>
            {<br>
                for(i=0;i<26;i++) arr[i] = 0;<br>
                scanf("%s",s);<br>
                len = strlen(s);<br>
                for(i=0;i&lt;len;i++)<br>
                {<br>
                    arr[s[i] - 'a']++;<br>
                }<br>
                f = 0;<br>
                for(i=0;i<26;i++)<br>
                {<br>
                    if(arr[i] == len - arr[i]) { f = 1;break; }<br>
                }<br>
                if(f == 1) printf("YES\n");<br>
                else printf("NO\n");<br>
            }<br>
            return(0);<br>
        }<br>
	</div>
	<br>
</body>
</html>