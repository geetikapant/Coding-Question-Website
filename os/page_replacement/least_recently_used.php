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
  Write a program to implement Least recently used page replacement technique.the lRU Page Replacement method is a marking algorithm. It keeps a track of the page usage in a given period of time.<br>
    </div> 
    <div class="answer" style="height:100%;">
    <u>Solution</u><br>
        #include &lt;stdio.h&gt;<br>
        int main() {<br>
    int frames[10], temp[10], pages[10];<br>
      int total_pages, m, n, position, k, l, total_frames;<br>
      int a = 0, b = 0, page_fault = 0;<br>
     
      scanf("%d", &total_frames);<br>
      for(m = 0; m < total_frames; m++)
      {<br>
            frames[m] = -1;<br>
      }<br>
    
      scanf("%d", &total_pages);<br>
    
      for(m = 0; m < total_pages; m++)
      {<br>
            
            scanf("%d", &pages[m]);<br>
      }<br>
      for(n = 0; n < total_pages; n++)
      {<br>
            a = 0, b = 0;<br>
            for(m = 0; m < total_frames; m++)
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
                  for(m = 0; m < total_frames; m++)
                  {<br>
                        if(frames[m] == -1)
                        {<br>
                              frames[m] = pages[n];<br>
                              b = 1;<br>
                              break;<br>
                        }<br>
                  }<br>
            }<br>
            if(b == 0)<br>
            {<br>
                  for(m = 0; m < total_frames; m++)<br>
                  {<br>
                        temp[m] = 0;<br>
                  }<br>
                  for(k = n - 1, l = 1; l <= total_frames - 1; l++, k--)<br>
                  {<br>
                        for(m = 0; m < total_frames; m++)<br>
                        {<br>
                              if(frames[m] == pages[k])<br>
                              {<br>
                                    temp[m] = 1;<br>
                              }<br>
                        }<br>
                  }<br>
                  for(m = 0; m < total_frames; m++)<br>
                  {<br>
                        if(temp[m] == 0)<br>
                        position = m;<br>
                  }<br>
                  frames[position] = pages[n];<br>
                  page_fault++;<br>
            }<br>
            printf("\n");<br>
            for(m = 0; m < total_frames; m++)<br>
            {<br>
                  printf("%d ", frames[m]);<br>
            }<br>
      }<br>
      printf("\nTotal Number of Page Faults:%d\n", page_fault);<br>
      return 0;<br>
       }<br>
    </div>
    <br>
</body>
</html>