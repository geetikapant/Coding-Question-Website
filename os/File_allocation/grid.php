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
        <u>Question</u>c
Manisa is not having a good times these days.Just Yesterday he made terrible food and hence got beaten up.He has hence decided that he wont prepare food from hotels in the city. However ,he suffered injury on his head(people can get really angry when served with bad food) and is suffering from short term memory loss.<br>
He is standing ina city in the form of a grid where cell(i,j) of the grid contains a hotel which has Gij amount of food to offer to the chef.<br>
Every second,monisha goes to one of the neighbours in the grid.(Note:Plese note that any cell(i,j) can have at most $ neighbours).Now the task is locate the files in index method to display.
    </div> 
    <div class="answer" style="height:100%;">
    <u>Solution</u><br>
        #include &lt;iostream><br>
using namespace std;<br>
class emp{<br>
public:<br>
  int k;<br>
  int n;<br>
  int a[100];<br>
};<br>
int main() {<br>
  int t;<br>
cin>>t;<br>
  emp o[t];<br>
for(int i=0;i&lt;t;i++)<br>
  {<br>
cin>>o[i].k>>o[i].n;<br>
for(int j=0;j&lt;o[i].n;j++)<br>
cin>>o[i].a[j];<br>
  }<br>
for(int i=0;i&lt;t;i++)<br>
  {cout&lt;&lt;i+1<<" "&lt;&lt;o[i].k<<" "&lt;&lt;o[i].n&lt;endl;<br>
  }<br>
cout<<"blocks occupied are:\n";<br>
for(int i=0;i&lt;t;i++)<br>
  {<br>
cout<<"fileno"&lt;&lt;i+1<<":";<br>
for(int j=0;j&lt;o[i].n;j++)<br>
    {cout<<" "&lt;&lt;o[i].k<<" "&lt;&lt;o[i].a[j];<br>
    }<br>
cout&lt;&lt;endl;<br>
  }<br>

  return 0;<br>
}<br>

    </div>
    <br>
</body>
</html>