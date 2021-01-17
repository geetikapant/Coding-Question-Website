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
    Not everyone probably knows that Chef has younger brother Jeff.Currently Jeff learns to read.<br>
    He knos some subsets of the letter of Latin alphabet.In ordre to help Jeff to study.Cheff gave him a book with the consists only of the letters he knows.<br>
    Now Chef is curious about which words his brother will be able to read,and whick arw not.Please help him.
    </div> 
    <div class="answer" style="height:100%;">
    <u>Solution</u><br>
        #include &lt;stdio.h&gt;<br>
#include  &lt;string.h&gt;<br>
int main(void) {<br>
    char str[1000];<br>
scanf("%s",str);<br>
    int n;<br>
    n = strlen(str);<br>
    int t;<br>
scanf("%d",&t);<br>
    while(t--){<br>
        char str1[1000];<br>
        int count=0,i,j;<br>
scanf("%s",str1);<br>
        for(i=0;i &lt;strlen(str);i++){<br>
            for(j=0;j &lt;strlen(str1);j++){<br>
                if(str[i]==str1[j]){<br>
                    count++;<br>
                }<br>
            }<br>
        }<br>
        if(count==strlen(str1)){<br>
printf("Yes\n");<br>
}else{<br>
printf("No\n");<br>
        }<br>
    }<br>
    return 0;<br>
}
    </div>
    <br>
</body>
</html>