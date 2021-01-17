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
 Raj's girlfriend's birthday is near, so he wants to surprise her by making a special cake for her. He knows that his girlfriend likes cherries on the cake, so he puts cherries on the top of the cake, but he was not satisfied. If he tries two types of cakes, for baking the cake he needs oven. He has only one oven, so he has to wait intil the first cake should get finished. After completion of first cake he should replace that cake with new cake.
   </div> 
    <div class="answer" style="height:100%;">
    <u>Solution</u><br>
        #include &lt;iostream><br>
using namespace std;<br>
int main() {<br>
int a;<br>
  cin>>a;<br>
  if (a>1)<br>
  {<br>
  for (int i=1;i<=a;i++)<br>
  {<br>
    cout<<"Processing "&lt;&lt;i<<"!"&lt;&lt;endl;<br>
  }<br>
  for (int i=1;i<=a;i++)<br>
  {<br>
    cout<<"Process "&lt;&lt;i<<" Enters Critical section"&lt;&lt;endl;<br>
    cout<<"Process "&lt;&lt;i<<" Leaves Critical section"&lt;&lt;endl;<br>
  }<br>
  }<br>
  else<br>
  {<br>
    cout<<"Processing 1!"&lt;&lt;endl;<br>
cout<<"\n";<br>
    cout<<"Process 1 Enters Critical section"&lt;&lt;endl;<br>
    cout<<"Process 1 Leaves Critical section"&lt;&lt;endl;<br>
   }<br>
    return 0;<br>
}<br>
    </div>
    <br>
</body>
</html>