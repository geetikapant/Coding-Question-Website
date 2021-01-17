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
Write a program to simulate linked file allocation.With linked allocation.each file is a linked list of disk blocks;the disk blocks may be scattered anywhere on the disk.The directory contains a pointer to the first and last blocks pf the file.Each block contains a pointer to the next block.
    </div> 
    <div class="answer" style="height:100%;">
    <u>Solution</u><br>
 #include&lt;iostream><br>
#include&lt;string.h><br>
using namespace std;<br>
struct file{<br>
        string c;<br>
        int     arr[100],len;<br>
};<br>
int main()
{<br>
        int size;<br>
        cin>>size;<br>
        file myfile[size];<br>
        for(int i=0;i&lt;size;i++)
    {<br>
        cin>>myfile[i].c;<br>
        cin>>myfile[i].len;<br>
        for(int j=0;j&lt;myfile[i].len;j++)<br>
        cin>>myfile[i].arr[j];<br>
    }<br>
        string find;<br>
        cin>>find;<br>
        int flag=0;<br>
        for(int i=0;i&lt;size;i++)
    {<br>
        if(find.compare(myfile[i].c)==0)
        {<br>
        cout<<"Filename No.of blocks\n";<br>
        cout&lt;&lt;myfile[i].c<<" "&lt;&lt;myfile[i].len<<" \n";<br>
        cout<<"Blocks Occupied\n";<br>
        for(int j=0;j&lt;myfile[i].len-1;j++)<br>
        cout&lt;&lt;myfile[i].arr[j]&lt;&lt;" ";<br>
        cout&lt;&lt;myfile[i].arr[myfile[i].len-1];<br>
        flag=1;<br>
            break;<br>
        }<br>
    }<br>
        if(flag==0)<br>
cout<<"File Not Found";<br>
}<br>


    </div>
    <br>
</body>
</html>