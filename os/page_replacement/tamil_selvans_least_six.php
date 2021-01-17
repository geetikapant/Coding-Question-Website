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
  Professor Tamil Selven told his students about page algorithm that:- A page Replacement Algorithm is used to Replace the page on the Main memory to the one present in the Secondary Memory.<br>
  In LRU(Least Recently Used) Algorithm the one page that is least recently used is Replaced by other page when no hit. Hit is a situation in which The same page out are entering is already present in main memory.<br>
  When a page is replaced it creates a FAULT otherwise if it is already presentis the main memory it is referred as hit. After this Professor Tamil Selvan asked his students to solve this problem.<br>
    </div> 
    <div class="answer" style="height:100%;">
    <u>Solution</u><br>
        #include &lt;stdio.h&gt;<br>
        int findLRU(int time[], int n){<br>
    int i, minimum = time[0], pos = 0;<br>
    for(i = 1; i < n; ++i){<br>
        if(time[i] < minimum){<br>
            minimum = time[i];<br>
            pos = i;<br>
        }<br>
    }<br>
    return pos;<br>
}<br>
int main()<br>
{<br>
    int no_of_frames, no_of_pages, frames[10], pages[30], counter = 0, time[10], flag1, flag2, i, j, pos, faults = 0;<br>
    scanf("%d", &no_of_frames);<br>
    scanf("%d", &no_of_pages);<br>
    for(i = 0; i < no_of_pages; ++i)<br>
        scanf("%d", &pages[i]);<br>
    for(i = 0; i < no_of_frames; ++i)<br>
        frames[i] = -1;    <br>
    for(i = 0; i < no_of_pages; ++i)<br>
    {<br>
        flag1 = flag2 = 0;<br>
        for(j = 0; j < no_of_frames; ++j)
        {<br>
            if(frames[j] == pages[i])
            {<br>
                counter++;<br>
                time[j] = counter;<br>
                flag1 = flag2 = 1;<br>
                break;<br>
            }<br>
        }<br>
        if(flag1 == 0)
        {<br>
            for(j = 0; j < no_of_frames; ++j)<br>
            {<br>
                if(frames[j] == -1)
                {<br>
                    counter++;<br>
                    frames[j] = pages[i];<br>
                    time[j] = counter;<br>
                    flag2 = 1;<br>
                    break;<br>
                }<br>
            }   <br>
        }<br>
        
        if(flag2 == 0)<br>
        {<br>
            pos = findLRU(time, no_of_frames);<br>
            counter++;<br>
            faults++;<br>
            frames[pos] = pages[i];<br>
            time[pos] = counter;<br>
        }<br>
        printf("\n");<br>
        for(j = 0; j < no_of_frames; ++j)<br>
            printf("%d", frames[j]);<br>
    }<br>
    printf("\nTotal Number of Page Faults:%d", faults);<br>
    return 0;<br>
}<br>
    </div>
    <br>
</body>
</html>