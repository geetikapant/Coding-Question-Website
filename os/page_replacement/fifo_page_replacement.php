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
  Write a program to implement First in First out. FIFO Page Replacement technique is one of the simplest one to implement amongst other page replacement algorithms.It is a conservation algorithm.<br>
  It is a low-overhead algorithm that maintains a queue to keep a track of all the pages in a memory.<br>
  When a page needs to be replaced, the page at the FRONT of the Queue will be replaced.
    </div> 
    <div class="answer" style="height:100%;">
    <u>Solution</u><br>
        #include &lt;stdio.h&gt;<br>
        int main() {<br>
     int reference_string[10], page_faults = 0, m, n, s, pages, frames;<br>

scanf("%d", &pages);<br>

for(m = 0; m < pages; m++)
      {<br>

scanf("%d", &reference_string[m]);<br>
      }<br>

      {<br>
scanf("%d", &frames);<br>
      }<br>
      int temp[frames];<br>
for(m = 0; m < frames; m++)
      {<br>
            temp[m] = -1;<br>
      }<br>
for(m = 0; m < pages; m++)<br>
      {<br>
            s = 0;<br>
for(n = 0; n < frames; n++)
            {<br>
                  if(reference_string[m] == temp[n])
                  {<br>
                        s++;<br>
page_faults--;<br>
                  }<br>
            }     <br>
page_faults++;<br>
if((page_faults<= frames) && (s == 0)) 
            {<br>
                  temp[m] = reference_string[m];<br>
            }   <br>
            else if(s == 0)
            {<br>
temp[(page_faults - 1) % frames] = reference_string[m];<br>
            }<br>
printf("\n");<br>
for(n = 0; n < frames; n++)
            {     <br>
printf("%d ", temp[n]);<br>
            }<br>
      }<br>
printf("\nTotal Page Faults:%d\n", page_faults);<br>
      return 0;<br>
       }<br>
    </div>
    <br>
</body>
</html>