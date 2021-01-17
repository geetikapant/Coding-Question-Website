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
A special agent is usually the title for a detective or investigator for a state ,country,municipal,fedral or tribal govwernment who conducts criminal investigations and has arrest authority.<br>
An agent is a fedral law enforcement officer with rrest authority but who doest not conduct major criminal investigations or who may conduct investigations but does not have arrest authority.Special agents are distinctly able to do both.<br>
Special agents are often involved in breaking secret ciphers.In the problem we'll consider one of the challenges that agents usually face while decrypting secret messages>Now find the element in sequence allocation scheme.
    </div> 
    <div class="answer" style="height:100%;">
    <u>Solution</u><br>
        #include &lt;iostream><br>
using namespace std;<br>
int main()<br>
{<br>
    int a;<br>
cin>>a;<br>
    int b[a];<br>
    for(int i=0;i&lt;a;i++)<br>
        cin>>b[i];<br>
    int c;<br>
cin>>c;<br>
    int j=0;<br>
    for( j=0;j&lt;a;j++)<br>
    {<br>
        if(b[j]==c)<br>
        {<br>
        cout&lt;&lt;c<<" is present at location "&lt;&lt;j+1;<br>
        break;<br>
        }<br>
    }<br>
    if(j==a)<br>
    {<br>
        cout&lt;&lt;c&lt;&lt;" is not present in array";<br>
    }<br>
    return 0;<br>
}<br>


    </div>
    <br>
</body>
</html>