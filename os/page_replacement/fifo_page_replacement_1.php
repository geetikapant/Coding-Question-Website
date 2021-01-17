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
    The operating system keeps tracks of all pages in the memory in a queue, oldest page is in the front of the queue. When a page needs to be replaced page in the front of the queue is selected for removal.<br>
    Input Method:
    Line 1:Two integers values(number of frames and number of pages)<br>
    Line 2: Integers values(Page values).
    Output method:
    Print the main memory status after each page.<br>
    print the Fault rate.
    </div> 
    <div class="answer" style="height:100%;">
    <u>Solution</u><br>
        #include &lt;stdio.h&gt;<br>
        int main() {<br>
     int frames[10], temp[10], pages[10];<br>
      int total_pages, m, n, position, k, l, total_frames;<br>
      int a = 0, b = 0, page_fault = 0;<br>
    //  printf("\nEnter Total Number of Frames:\t");
scanf("%d", &total_frames);<br>
for(m = 0; m &lt;total_frames; m++)<br>
      {
            frames[m] = -1;<br>
      }
     // printf("Enter Total Number of Pages:\t");
scanf("%d", &total_pages);<br>
     // printf("Enter Values for Reference String:\n");
for(m = 0; m &lt;total_pages; m++)<br>
      {<br>
          //  printf("Value No.[%d]:\t", m + 1);
scanf("%d", &pages[m]);<br>
      }<br>
for(n = 0; n &lt;total_pages; n++<br>)
      {<br>
            a = 0, b = 0;<br>
for(m = 0; m &lt;total_frames; m++)
            {<br>
                  if(frames[m] == pages[n])
                  {<br>
                        a = 1;<br>
                        b = 1;<br>
                        break;<br>
                  }<br>
            }<br>
if(a == 0)
            {<br>
for(m = 0; m &lt;total_frames; m++)
                  {<br>
                        if(frames[m] == -1)
                        {<br>
                              frames[m] = pages[n];<br>
                              b = 1;<br>
                              break;<br>
                        }<br>
                  }<br>
            }<br>
if(b == 0)
            {<br>
for(m = 0; m &lt;total_frames; m++)
                  {<br>
                        temp[m] = 0;<br>
                  }<br>
for(k = n - 1, l = 1; l <= total_frames - 1; l++, k--)
                  {<br>
for(m = 0; m &lt;total_frames; m++)
                        {<br>
                              if(frames[m] == pages[k])
                              {<br>
                                    temp[m] = 1;<br>
                              }<br>
                        }<br>
                  }<br>
for(m = 0; m &lt;total_frames; m++)
                  {<br>
                        if(temp[m] == 0)<br>
                        position = m;<br>
                  }<br>
                  frames[position] = pages[n];<br>
page_fault++;<br>
            }<br>
printf("\n");<br>
for(m = 0; m &lt;total_frames; m++)<br>
            {<br>
printf("%d ", frames[m]);<br>
            }<br>
      }<br>
printf("\nFault rate:%d\n", page_fault);<br>
      return 0;<br>
       }<br>
    </div>
    <br>
</body>
</html>