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
     Write a C program to remove from last word in given string using loop.
</div>
    <div class="answer" style="height:100%;">
    <u>Solution</u><br>
  #include &lt;stdio.h&gt;<br>
        #include &lt;string.h&gt;<br>
#define MAX_SIZE 100<br>
void removeFirst(char * str, const char * toRemove);<br>


int main()<br>
{<br>
    char str[MAX_SIZE];<br>
    char toRemove[MAX_SIZE];<br>


scanf("%[^\n]%*c",str);<br>
scanf("%s",toRemove);<br>

removeFirst(str, toRemove);<br>

printf("%s", str);<br>

    return 0;<br>
}<br>



void removeFirst(char * str, const char * toRemove)<br>
{<br>
    int i, j;<br>
    int len, removeLen;<br>
    int found = 0;<br>

len = strlen(str);<br>
removeLen = strlen(toRemove);<br>

for(i=0; i&lt;len; i++)<br>
    {<br>
        found = 1;<br>
for(j=0; j&lt;removeLen; j++)<br>
        {<br>
            if(str[i+j] != toRemove[j])<br>
            {<br>
                found = 0;<br>
                break;<br>
            }<br>
        }<br>


if(found == 1)<br>
        {<br>
for(j=i; j<=len-removeLen; j++)<br>
            {<br>
                str[j] = str[j + removeLen];<br>
            }<br>


            break;<br>
        }<br>
    }<br>
}<br>

    </div>
    <br>
</body>
</html>