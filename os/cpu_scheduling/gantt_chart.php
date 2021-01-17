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
   Software Engineer Sarah is assigned with several projects from various companies by his team lead.He is also insisted to complete the projects based on their ordering sequence (ie.,first come basis).He is asked to submit a chart presentation for the above project. Help him to draw the chat alone.
    </div> 
    <div class="answer" style="height:100%;">
    <u>Solution</u><br>
       #include &lt;iostream&gt;<br>
#include&lt;bits/stdc++.h&gt;<br>
using namespace std;<br>
int main() {<br>
    int n;<br>
cin&gt;&gt;n;<br>
  int arrn[n];<br>
  int arrb[n];<br>
  int arra[n];<br>
  int temp=0;<br>
  int temp1=0;<br>
for(int i=0;i&lt;n;i++)<br>
  {<br>
cin>>arrn[i]; <br>    
  }<br>
for(int i=0;i&lt;n;i++)<br>
  {<br>
cin&gt;&gt;arrb[i];<br>

  }<br>
for(int i=0;i&lt;n;i++)<br>
  {<br>
cin>>arra[i];<br>

  }<br>
for(int i=0;i&lt;n;i++)<br>
  {<br>
for(int j=1;j<n;j++)<br>
    {<br>
      if(arra[j-1]>arra[j])<br>
      {<br>
        temp=arrb[j];<br>
        temp1=arrn[j-1];<br>
arrb[j]=arrb[j-1];<br>
arrb[j-1]=temp;<br>
arrn[j-1]=arrn[j];<br>
arrn[j]=temp1;<br>
        temp1=0;<br>
        temp1=arra[j-1];<br>
arra[j-1]=arra[j];<br>
arra[j]=temp1;<br>
        temp1=0;<br>
      }<br>
    }<br>
 }<br>
  float wait[n+1];<br>
wait[0]=0;<br>
for(int i=1;i<=n+1;i++)<br>
  {<br>
       wait[i]=wait[i-1]+arrb[i-1];<br>
  }<br>
   float awt=0;<br>
for(int i=0;i&lt;n+1;i++)<br>
  {<br>
awt=awt+wait[i];<br>
  }<br>
cout&lt;&lt;"GANTT CHART"&lt;&lt;endl;<br>
for(int i=0;i&lt;n;i++)<br>
  {<br>
cout<<"P"&lt;&lt;arrn[i]&lt;&lt;" "; <br>
  }<br>
cout&lt;&lt;endl;<br>
for(int i=0;i<&lt;n+1;i++)<br>
  {<br>
cout&lt;&lt;wait[i];<br>
   if(i==n)<br>
   {<br>
     break;<br>
   }<br>
cout&lt;&lt;" ";<br>

 }<br>
}
    </div>
    <br>
</body>
</html>