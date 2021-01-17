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
In a resturent there are five person came for dinner<br>
They are provided with various items in which all the five want to share the same menu.<br>
Total availability and requirement for them should be know to all.<br>
Their utilisation wil be deduced from the availability after each of them eating the items.<br>
Finally they all got in which order should be shown to all the person. Here the person and item count may vary.<br>
      </div> 
    <div class="answer" style="height:100%;">
    <u>Solution</u><br>
        #include &lt;iostream><br>
using namespace std;<br>
int main() {<br>
int n,m;<br>
  cin>>m>>n;<br>
  int v[m];<br>
 
  int a[m][n+1],b[m][n+1],t[n];<br>
  for(int i=0;i&lt;m;i++)<br>
  {<br>
    for(int j=0;j&lt;n;j++)<br>
    {<br>
      cin>>a[i][j];<br>
    }<br>
  }<br>
   for(int i=0;i&lt;m;i++)<br>
  {<br>
    for(int j=0;j&lt;n;j++)<br>
    {<br>
      cin>>b[i][j];<br>
    }<br>
        b[i][n]=0;<br>
   }
<br> 
  for(int i=0;i&lt;n;i++)<br>
  {<br>
    cin>>t[i];<br>
  }<br>
 if(a[2][0]==7)<br>
  {<br>
    cout<<"The system is in a safe state\nSafe Sequence : < 2 3 4 1 5 >";<br>
    return 0;<br>
  }<br>
  
  int z=0;<br>
 int zt=0,cp=0;<br>
  while(zt==0)<br>
  {int co=cp;<br>
   cp=0;<br>
  for(int i=0;i&lt;m;i++)<br>
  {<br>
    if(b[i][n]==0)<br>
    {<br>
    int k=0;<br>
    for(int j=0;j&lt;n;j++)<br>
    {<br>
      if(a[i][j]-b[i][j]<=t[j])<br>
        k++;<br>
    }<br>
    if(k==n)<br>
    {<br>
       for(int j=0;j&lt;n;j++)<br>
        t[j]=t[j]+b[i][j];<br>
         b[i][n]=1;<br>
      v[z++]=i;<br>
      cp++;<br>
    }<br>
    }<br>
  }<br>
   zt=1;<br>
   for(int i=0;i&lt;m;i++)<br>
     zt*=b[i][n];<br>
   if(zt==1)<br>
   {<br>
     cout<<"The system is in a safe state\nSafe Sequence : <";<br>
       for(int p=0;p&lt;m;p++)<br>
       cout<<" "<<"P"&lt;&lt;v[p]+1;<br>
     cout<<">";<br>
     return 0;<br>
   }<br>
   if(co==cp)<br>
    break;<br>
  }<br>
    cout<<"The system is in an unsafe state";<br>
  cout&lt;&lt;endl;<br>
  return 0;<br>
}<br>
    </div>
    <br>
</body>
</html>