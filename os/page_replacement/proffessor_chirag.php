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
        Professor CHIRAG told his students about page algorithm that :- A page Replacement Algorithm is used to Replace the page on the Main memory with the one present in the Secondary Memory.<br>

In FIFO (First In First Out) Algorithm the one page that entered first has to leave first when all the frames in the memory are filled and entering page does not create a hit. Hit is a situation in which The same page out are entering is already present in main memory.

<br>When a page is replaced it creates a FAULT otherwise if it is already present is the main memory it is referred as hit. After this Professor CHIRAG asked his students to solve this problem to find the number of page Faults and hits.
<br><br>
Input: –
First line contains the Number of Frames followed by the Number of pages (n).
The next line will contain the n page values.
<br>
Output: –
Print the Number of Faults.<br>
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

  }<br>
  cout<<"Faults="&lt;&lt;pf;<br>
  return 0;<br>
}<br>

    </div>
    <br>
</body>
</html>