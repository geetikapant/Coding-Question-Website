n<?php
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
    <div class="question" style="height:15%;">
        <u>Question</u><br>
        Write a program to simulate Indexed file allocation.Indexed file allocation strategy brings all the pointers together into one location:an index block.Each file has its qwn index block,which is an array of disk-block addresses.<br>
        The ith entry in the index block points to the ith block of teh file.The directory contains the address of the index block.To find and read the ith block,the pointer in the ith index-block entry is used.
    </div> 
    <div class="answer" style="height:146%;">
    <u>Solution</u><br>
        #include &lt;iostream><br>
#include &lt;cstring><br>
#include &lt;vector><br>
#include &lt;string><br>
using namespace std;<br>
int main() {<br>

  int n;<br>
cin>>n;<br>

  string file[n];<br>
  int filenum[n];<br>
  int c=0;<br>
  int a;<br>
  string s="";<br>
  int str;<br>
  string srch;<br>

  vector int>mlist;<br>

  for(int i=0;i&lt;n;i++)
  {<br>

cin>>file[i];<br>
cin>>filenum[i];<br>

    for(int j=0;j&lt;filenum[i];j++)<br>
    {<br>
cin>>str;<br>   
mlist.push_back(str);<br>
    }<br>

  }<br>

cin>>srch;<br>


  for(int i=0;i&lt;n;i++)
  {<br>
   if(srch == file[i])
   {<br>
cout<<"Filename No.of blocks"&lt;&lt;endl;<br>
cout&lt;&lt;file[i]<<" "&lt;&lt;filenum[i]&lt;&lt;endl;<br>

     for(int j=c;j<(c+filenum[i]);j++)
     {<br>
       a=mlist.at(j);<br>
       s=s+to_string(a)+" ";<br>
     }<br>

     break;<br>
   }<br>
    else<br>
     c=c+filenum[i];<br>
  }<br>
  if(s=="")<br>
cout<<"File Not Found";<br>
  else{<br>
cout<<"Blocks Occupied"&lt;&lt;endl;<br>
s.pop_back();<br>
cout&lt;&lt;s;<br>
  }<br>
  return 0;<br>
}<br>


    </div>
    <br>
</body>
</html>