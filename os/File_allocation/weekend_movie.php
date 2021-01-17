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
Raina a huge movie fan.He likes watching different kinds of movies:from drama movies to comedy movies , from teen movies to hoorror movies.He is planneing to visit cinema this weekend,but he's not sure which movie he should watch.<br>
There are n movies to watch during this weekend.Each movie can be characterried by two integers Li an Ri,denoting the length and the rating of the corresponding movie.<br>
Raina wants to watch exactly one movie with the maximal value of LiRi.If ther eare several such movies,he wouls pick a one with the maximal Ri among them.If there is still a tie,he would pick the one with the minimal index among them.<br>
Your task is to help Raina to pick a movie to watch dusring this weekend.<br>
    </div> 
    <div class="answer" style="height:100%;">
    <u>Solution</u><br>
        #include&lt;stdio.h><br>
int main(){<br>
        int tc,T;<br>
        scanf("%d",&T);<br>
        for(tc=0;tc&lt;T;tc++){<br>
                int n,i;<br>
                scanf("%d",&n);<br>
                int L[n],R[n];<br>
                for(i=0;i&lt;n;i++){<br>
                        scanf("%d",&L[i]);<br>
                }<br>
                for(i=0;i&lt;n;i++){<br>
                        scanf("%d",&R[i]);<br>
                }<br>

                int maxSum=0;<br>
                int index,temp;<br>
                for(i=0;i&lt;n;i++){<br>
                        temp=L[i]*R[i];<br>
                        if(temp>maxSum){<br>
                                maxSum=temp;<br>
                                index=i;<br>
                        }<br>
                        else if(temp==maxSum){<br>
                                if(R[index]&lt;R[i]){<br>
                                        index=i;<br>
                                }<br>
                        }<br>
                }<br>
                printf("%d\n",index+1);<br>
        }<br>
        return 0;<br>
}<br>
    </div>
    <br>
</body>
</html>