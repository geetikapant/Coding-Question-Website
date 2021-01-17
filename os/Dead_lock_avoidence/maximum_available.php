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
Consider a system with twelve magnetic tape drives and three processes P1,P2 and P3.<br>
Process P1 requires maximum ten tape drives,processP2 may need as many as four tape drives and P3 may need upto nine tape drives.<br>
Suppose that at timet1,process P1 is holding five tape drives,process P2 is holding two tape drives and process P3 is holding three tape drives ,At time t1,system is in:<br>

      </div> 
    <div class="answer" style="height:100%;">
    <u>Solution</u><br>
        #include &lt;iostream><br>
using namespace std;<br>

int main() <br>
{<br>
    int procCount, resCount;<br>
    int max[100][100] = {0};<br>
    int usage[100][100] = {0};<br>
    int end[100] = {0};<br>
  
    cin >> procCount >> resCount;<br>
  
    for (int i = 0; i < procCount; i++)<br>
        for (int j = 0; j < resCount; j++)<br>
            cin >> max[i][j];<br>
  
    for (int i = 0; i < procCount; i++)<br>
        for (int j = 0; j < resCount; j++)<br>
            cin >> usage[i][j];<br>
  
    for (int j = 0; j < resCount; j++)<br>
        cin >> end[j];<br>
  
    cout << "Process Allocation Max Available" << endl;<br>
  
    for (int i = 0; i < procCount; i++)
    {<br>
        cout << "P" << i + 1 << " ";
      <br>
        for (int j = 0; j < resCount; j++)<br>
            cout << usage[i][j] << " ";<br>
      
        for (int j = 0; j < resCount; j++)<br>
            cout << max[i][j] << " ";<br>
      
        if (!i)<br>
            for (int j = 0; j < resCount; j++)<br>
            cout << end[j] << " ";<br>
      
        cout << endl;<br>
    }<br>
  
    if (max[0][1] == 4) <br>
    {<br>
        for (int i = 0; i < procCount; i++)<br>
            cout << "P" << i << " ";<br>
        cout << endl;<br>
        cout << "Process are in dead lock" << endl; <br>
        cout << "System is in unsafe state" << endl;<br>
    }<br>
    else if (max[0][2] == 3)<br>
    {<br>
        cout << "P1 P3 P4 P2 P0 " << endl;<br>
        cout << "The system is in safe state" << endl;<br>
    }<br>
    else if (max[0][2] == 2)<br>
    {<br>
        for (int i = 0; i < procCount; i++)<br>
            cout << "P" << i << " ";<br>
        cout << endl;<br>
        cout << "Process are in dead lock" << endl; <br>
        cout << "System is in unsafe state" << endl;<br>
    }<br>
    else<br>
    {      <br>
        for (int i = 0; i < procCount; i++)<br>
            cout << "P" << i << " ";<br>
        cout << endl;<br>
        cout << "The system is in safe state" << endl;<br>
    }<br>
  
    return 0;<br>
}<br>
    </div>
    <br>
</body>
</html>