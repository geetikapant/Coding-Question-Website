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
     A and B are friends. They decide to play a game which is one person is writing a group of words or numbers to form a sentence and other person has to reverse each word of that sentence.
</div>
    <div class="answer" style="height:100%;">
    <u>Solution</u><br>
        #include &lt;stdio.h&gt;<br>
        #include &lt;string.h&gt;<br>
        #include &lt;stdlib.h&gt;<br>
        int main() {<br>
            char a[50],r[50];<br>
  int i,j,b=0,e;<br>
fgets(a,50,stdin);<br>
  for(i=0;a[i]!='\0';i++)<br>
  {<br>
    if(a[i]==' ')<br>
    {<br>
      e=i-1;<br>
      for(j=b;j&lt;i;j++)<br>
      {<br>
        r[j]=a[e];<br>
        e--;<br>
      }<br>
      r[j]=' ';<br>
      b=j+1;<br>
    }<br>
    if(a[i+1]=='\0')<br>
    {<br>
      e=i;<br>
      for(j=b;j&lt;i+1;j++)<br>
      {<br>
        r[j]=a[e];<br>
        e--;<br>
      }<br>
      r[j]='\0';<br>
      break;<br>
    }<br>
  }<br>
        printf("%s",r);<br>
        return 0; <br>
 }
    </div>
    <br>
</body>
</html>