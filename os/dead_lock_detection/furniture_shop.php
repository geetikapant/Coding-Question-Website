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
       A furniture shop has announced for wholesale product delivery.<br>
       To that shop three person Kavi,Angel and  kala are going for purchase.<br>
       They are provided with printer,scanner and home theatre for discount.<br>
       They must buy them based o n the availability given to them.<br>
       Need of the item should be checked from the availability and buying and finally they bought or not their satisfaction should be known to all others.<br>
       The order in which they got should also be known to others. Here the number of person and resources may vary.<br>
</div> 
    <div class="answer" style="height:100%;">
    <u>Solution</u><br>
        #include &lt;iostream><br>
using namespace std;<br>
int main() {<br>
int n,m;<br>
  cin>>m>>n;<br>
  int v[n];<br>
  for(int i=0;i&lt;n;i++)<br>
  {<br>
    cin>>v[i];<br>
  }<br>
  int a[m][n+1],b[m][n],t[n];<br>
   for(int i=0;i&lt;n;i++)<br>
    t[i]=0;<br>
  for(int i=0;i&lt;m;i++)<br>
  {<br>
    for(int j=0;j&lt;n;j++)<br>
    {<br>
      cin>>a[i][j];<br>
      t[j]+=a[i][j];<br>
    }<br>
    a[i][n]=0;<br>
  }<br>
  for(int i=0;i&lt;m;i++)<br>
  {<br>
    for(int j=0;j&lt;n;j++)<br>
    {<br>
      cin>>b[i][j];<br>
    }<br>
  }<br>
  cout<<"Allocated resources:";<br>
  for(int i=0;i&lt;n;i++)<br>
    cout&lt;&lt;t[i]<<" ";<br>
  cout<<"\nAvailable resources:";<br>
  for(int i=0;i&lt;n;i++)<br>
    cout&lt;&lt;v[i]-t[i]<<" ";<br>
  cout&lt;&lt;endl;<br>
  for(int i=0;i&lt;n;i++)<br>
  {<br>
    t[i]=v[i]-t[i];<br>
    
  }<br>
 int zt=0,cp=0;<br>
while(zt==0)<br>
  {int co=cp;<br>
   cp=0;<br>
  for(int i=0;i&lt;m;i++)<br>
  {<br>
    if(a[i][n]==0)<br>
    {<br>
    int k=0;<br>
    for(int j=0;j&lt;n;j++)<br>
    {<br>
      if(b[i][j]-a[i][j]<=t[j])<br>
        k++;<br>
    }<br>
    if(k==n)<br>
    {<br>
       for(int j=0;j&lt;n;j++)<br>
        t[j]=t[j]+a[i][j];<br>
         a[i][n]=1;<br>
      cout<<"Process"&lt;&lt;i+1<<" is executing\n"<<"The process is in safe state\n";<br>
      cout<<"Available vector:";<br>
             for(int j=0;j&lt;n;j++)<br>
               cout&lt;&lt;t[j]<<" ";<br>
      cout&lt;&lt;endl;<br>
      cp++;<br>
    }<br>
    }<br>
  }<br>
   zt=1;<br>
   for(int i=0;i&lt;m;i++)<br>
     zt*=a[i][n];<br>
   if(zt==1)<br>
   {<br>
     return 0;<br>
   }<br>
   if(co==cp)<br>
    break;<br>
  }<br>
  cout<<"The processes are in unsafe state";<br>
  return 0;<br>
}<br>
    </div>
    <br>
</body>
</html>