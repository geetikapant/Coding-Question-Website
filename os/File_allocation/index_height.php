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
To make all height values equal by repeatedly applying the equalizetool.Furthermore,he also wants the final(common) height to be as larger as possible.<br>
What is the maximum final(common) height that he can obtain?
    </div> 
    <div class="answer" style="height:100%;">
    <u>Solution</u><br>
        #include &lt;stdio.h><br>

int h[1001][1001];<br>
int temp[1001][1001];<br>

int main()
{<br>
        int n,m,r,i,j,k,l,high,low,count,mid,p,q;<br>

        scanf("%d%d%d",&n,&m,&r);<br>

        for(i=1;i<=n;i++)<br>
                for(j=1;j<=m;j++)<br>
                        scanf("%d",&h[i][j]);<br>

        for(i=0;i&lt;r;i++)<br>
        {<br>
                scanf("%d%d",&k,&l);<br>
                low = 0;<br>
                high=10e7;<br>
            count = k*l/2+1;<br>
                k--;<br>
                l--;<br>

                while(low&lt;high)<br>
                {<br>
                        mid=(low+high+1)/2;<br>
                        for(p=1;p<=n;p++)<br>
                        {<br>
                                for(q=1;q<=m;q++)<br>
                                {<br>
temp[p][q]=temp[p-1][q]+temp[p][q-1]-temp[p-1][q-1]+(h[p][q]>=mid?1:0);<br>

                                }<br>

                        }<br>

                        int found = 1;<br>
                        for(p=1;(p+k)<=n;p++)
                        {<br>
                                for(q=1;(q+l)<=m;q++)<br>
                                {<br>
if((temp[p+k][q+l]-temp[p-1][q+l]-temp[p+k][q-1]+temp[p-1][q-1])>=count)<br>
                                        {<br>
                                                low=mid;<br>

                                                found=0;<br>
                                                break;<br>
                                        }<br>

                                }<br>

                                if(!found)break;<br>
                        }<br>

                        if(found)high=mid-1;<br>
                }<br>

                printf("%d\n",low);<br>
        }<br>

        return 0;<br>
}<br>
    </div>
    <br>
</body>
</html>