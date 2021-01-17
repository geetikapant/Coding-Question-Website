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
    <div class="question" style="height:30%;">
        <u>Question</u><br>
        A spacecraft is all set to travel through a long intergalatic tunnel.The tunnel consists of N stationary space debris.In order to successfully complete the mission the spacecraft needs to destroy all the apace debris.The control unit of the spacecraft has M buttons which can be used to destroy the space debris.<br>
        Pressing a particular button may result in the destruction of some(possibly multiple) particular space debris.Once a space debris ids destroyed its mass is converted into energy,which is eventually absorbed by the spacecraft in order to increase its speed.the ampount of energy released from the disintigration odf a particular space debris depends upon the button which has beed used to destroy that space debris.<br>
        A matrix E contains this information is known as "Energy Vector".The spacecraft may destroy any number of space debris using a particular button,includeing nne,as long as they can be destryed by theat button and the spacecraft has alredy destroyed any required prereqisite space debris.Find the allocation of file.
    </div> 
    <div class="answer" style="height:60%;">
    <u>Solution</u><br>
        #include &lt;iostream><br>
using namespace std;<br>
int main() {<br>
        int x,y;<br>
cin>>x;<br>
cin>>y;<br>
  int z;<br>
  z=x+y;<br>
  int i;<br>
  for(i=x;i<=z-1;i++)
  {<br>
cout&lt;&lt;x&lt;" 1"lt;"\n";<br>
x++;}<br>
cout<<"the file is allocated to disk";<br>
    return 0;<br>
}<br>
    </div>
    <br>
</body>
</html>