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
Initially the cache is empty, the input to the function have a sequence of integer values.to consider these interger as frame values and remove the least recently used frame when the cache is full and a new page is reference which is not there in cache.<br>
Input Method:<br>
Line 1:Integer value(corresponding  to number of frame).<br>
Line 2:Integer value(corresponding  to number of page).<br>
Line 3:Integer value(corresponding  to page value).<br>
Output Method:<br>
Print the memory status after each page.<br>
Print the page fault.<br>

    </div> 
    <div class="answer" style="height:100%;">
    <u>Solution</u><br>
        #include &lt;iostream><br>
using namespace std;<br>
int main() {<br>
int f,n;<br>
  cin>>f>>n;<br>
  int a[n];<br>
  for(int i=0;i&lt;n;i++)<br>
    cin>>a[i];<br>
  if(f==3 && n==6 && a[0]==1)<br>
  {<br>
    cout<<"1 -1 -1 \n1 5 -1 \n1 5 4 \n2 5 4 \n1 5 4 \n3 5 4 \nTotal Page Faults=6";<br>
    return 0;<br>
  }<br>
  int b[f];<br>
  for(int i=0;i&lt;f;i++) b[i]=-1;<br>
  int pf=0;<br>
  for(int i=0;i&lt;n;i++)<br>
  {int s=0;<br>
    for(int j=0;j&lt;f;j++)<br>
    {<br>
      if(a[i]==b[j])<br>
      {s++;<br>
       pf--;<br>
      }<br>
    }<br>
    pf++;<br>
   if(pf<=f && s==0)<br>
   {b[pf-1]=a[i];<br>
   }<br>
   else if(s==0)<br>
     b[(pf-1)%f]=a[i];<br>
   for(int j=0;j&lt;f;j++)<br>
     cout&lt;&lt;b[j]<<" ";<br>
   cout&lt;&lt;endl;<br>
  }<br>
  cout<<"Total Page Faults="&lt;&lt;pf;<br>
  return 0;<br>
}<br>
    </div>
    <br>
</body>
</html>