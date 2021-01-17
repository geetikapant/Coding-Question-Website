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
        Lancy has a sequence of N numbers. He like a sequence better if the sequence contains his favourite sequence as a substring.<br>
        Given the sequence of the favourite sequence(F) checkwhether the favourite sequence is contained in the sequence.<br> 
    </div>
	<div class="answer">
		#include&lt;stdio.h&gt;<br>
        int main(){<br>
            int j,i,n,a[100][100],f[10][10],l[15],fl[15],flag=1,k;<br>
            scanf("%d",&n);<br>
            for(i=0;i&lt;n;i++)<br>
            {<br>
                scanf("%d",&l[i]);<br>
                for(j=0;j&lt;l[i];j++)<br>
                {<br>
                    scanf("%d",&a[i][j]);<br>
                }<br>
                scanf("%d",&fl[i]);<br>
                for(j=0;j&lt;fl[i];j++)<br>
                {<br>
                    scanf("%d",&f[i][j]);<br>
                }<br>
            }<br>
            for(i=0;i&lt;n;i++)<br>
            {<br>
                flag=1;<br>
                if(l[i]&lt;fl[i])<br>
                {<br>
                    flag=0;<br>
                }<br>
                else<br>
                {<br>
                    for(j=0;j<(l[i]-fl[i]);j++)<br>
                    {<br>
                        flag=1;<br>
                        for(k=0;k&lt;fl[i];k++)<br>
                        {<br>
                            if(a[i][j+k]!=f[i][k])<br>
                            {<br>
                                flag=0;<br>
                                break;<br>
                            }<br>
                        }<br>
                        if(flag==1)<br>
                        {<br>
                            printf("Yes\n");<br>
                            break;<br>
                        }<br>
                    }<br>
                }<br>
                if(flag==0)<br>
                {<br>
                    printf("No\n");<br>
                }<br>
            }<br>
            return 0;<br>
        }<br>


	</div>
	<br>
</body>
</html>