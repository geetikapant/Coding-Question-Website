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
In silver jewel making factory, silver jewels are made with given size for the given count with the given starting point, determine the start,middle and end point of each jewel.<br>
    </div> 
    <div class="answer" style="height:100%;">
    <u>Solution</u><br>
        #include &lt;iostream><br>
using namespace std;<br>
int main() {<br>
int n;<br>
  cin>>n;<br>
  int b[n];<br>
  int k;<br>
  cin>>k;<br>
  int a[k];<br>
  for(int i=0;i&lt;k;i++)<br>
    cin>>a[i];<br>
 for(int i=0;i&lt;n;i++)<br>
   b[i]=-1;<br>
  int v=0;<br>
  for(int i=0;i&lt;k;i++)<br>
  {int y=0;<br>
    for(int j=0;j&lt;n;j++)<br>
    {<br>
      if(b[j]==a[i])<br>
        y++;<br>
    }<br>
   if(y>0){<br>
     v++;<br>
   }<br>
   else if(y==0 && i&lt;n)<br>
     b[i]=a[i];<br>
   else if(y==0)<br>
   {int ck[n],t=0;<br>
     for(int l=0;l&lt;n;l++)<br>
     { t=0;<br>
       for(int z=i+1;z&lt;k;z++)<br>
       {<br>
         if(b[l]==a[z])<br>
         {t++;<br>
          ck[l]=z;<br>
          break;<br>
         }<br>
       }<br>
      if(t==0)<br>
      {<br>
        ck[l]=k;<br>
        b[l]=a[i];<br>
        break;<br>
      }<br>
     }<br>
    if(t!=0)<br>
    {<br>
    int mx=ck[0],pt=0;<br>
    for(int z=1;z&lt;n;z++)<br>
    {<br>
      if(ck[z]>mx)<br>
      {<br>
        mx=ck[z];<br>
        pt=z;<br>
      }<br>
    }<br>
    
     b[pt]=a[i];<br>
    }<br>
     
   }<br>
  for(int z=0;z&lt;n;z++)<br>
    cout&lt;&lt;b[z]<<"\t";<br>
  cout&lt;&lt;endl;<br>
    
  }<br>
  cout<<"Total Page Faults = "&lt;&lt;k-v;<br>
  
  return 0;<br>
}<br>

    </div>
    <br>
</body>
</html>