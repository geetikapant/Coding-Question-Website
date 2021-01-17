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
  In department stores provision items , cosmetics and medicine are available. The owner needs to replace the most salable cosmetic products inorder to attain profit. Write a program to replace the products using least Frequently Used (LFU) algorithm.<br>
    </div> 
    <div class="answer" style="height:100%;">
    <u>Solution</u><br>
        #include &lt;stdio.h&gt;<br>
        int main() {<br>
    int total_frames, total_pages, hit = 0;<br>
      int pages[25], frame[10], arr[25], time[25];<br>
      int m, n, page, flag, k, minimum_time, temp;<br>

      scanf("%d", &total_pages); <br>

      scanf("%d", &total_frames);<br>
      for(m = 0; m < total_frames; m++)
      {<br>
            frame[m] = -1;<br>
      }<br>
      for(m = 0; m < 25; m++)
      {<br>
            arr[m] = 0;<br>
      }<br>
  
      for(m = 0; m < total_pages; m++)
      {<br>
          
            scanf("%d", &pages[m]);<br>
      }<br>
      printf("\n");<br>
      for(m = 0; m < total_pages; m++)<br>
      {<br>
            arr[pages[m]]++;<br>
            time[pages[m]] = m;<br>
            flag = 1;<br>
            k = frame[0];<br>
            for(n = 0; n < total_frames; n++)<br>
            {<br>
                  if(frame[n] == -1 || frame[n] == pages[m])<br>
                  {<br>
                        if(frame[n] != -1)<br>
                        {<br>
                              hit++;<br>
                        }<br>
                        flag = 0;<br>
                        frame[n] = pages[m];<br>
                        break;<br>
                  }<br>
                  if(arr[k] > arr[frame[n]])<br>
                  {<br>
                        k = frame[n];<br>
                  }<br>
            }<br>
            if(flag)<br>
            {<br>
                  minimum_time = 25;<br>
                  for(n = 0; n < total_frames; n++)<br>
                  {<br>
                        if(arr[frame[n]] == arr[k] && time[frame[n]] < minimum_time)<br>
                        {<br>
                              temp = n;<br>
                              minimum_time = time[frame[n]];<br>
                        }<br>
                  }<br>
                  arr[frame[temp]] = 0;<br>
                  frame[temp] = pages[m];<br>
            }<br>
            for(n = 0; n < total_frames; n++)<br>
            {<br>
                  printf("%d ", frame[n]);<br>
            }<br>
            printf("\n");<br>
      }<br>
      printf("Page fault:%d\n", hit);<br>
      return 0;<br>
       }<br>
    </div>
    <br>
</body>
</html>