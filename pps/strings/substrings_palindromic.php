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
    Chef likes string a lot but he likes palindromic strings more. Today, Chef has two string A and B , each consisting of lower case alphabets.<br>
    Chef is eager to know whether it is  possible to choose some non empty strings s1 and s2 where s1 is a substring of A, s2 is a substring of B such that s1+s2 is a palindromic string. here + denotes the concatenation between the strings.
</div>
    <div class="answer" style="height:100%;">
    <u>Solution</u><br>
        #include &lt;stdio.h&gt;<br>
        #include &lt;string.h&gt;<br>
        #include &lt;stdlib.h&gt;<br>
        int main() {<br>
            char ar[1001],ar2[1001],gh[100];<br>

int t,i,j,k,l,y=0;<br>

scanf("%d",&t);<br>

while(t--)<br>

{ k=0;l=0;<br>

scanf("%s",ar);<br>

scanf("%s",ar2);<br>

for(i=0;i&lt;strlen(ar);i++)<br>

    {<br>

for(j=0;j&lt;strlen(ar2);j++)<br>

       {<br>

if(ar[i]==ar2[j])<br>

{  k=1;<br>

printf("No\n");<br>

      l=1;<br>

break;<br>

          }<br>

       }<br>

if(l==1)<br>

   {break;}<br>

    }<br>


if(k==0)<br>

   {printf("No\n");}<br>

  }<br>

return0;<br>
 }
    </div>
    <br>
</body>
</html>