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
Write a program for implementing Optimal page replacement technique. When a page of memory needs to be allocated to the CPU, these page replacement algorithms decide which pages should be written to the disk and which algorithms should be swapped out of memory.<br>
This algorithm is also known as Clairvoyent Replacement Algorithm. As per the optimal page replacement technique, the page with the highest label shoul be removed first.<br>
When a page needs to be swapped into the memory, the OS will swap out the page which is not required to be used in the near future.
    </div> 
    <div class="answer" style="height:100%;">
    <u>Solution</u><br>
        #include &lt;stdio.h&gt;<br>
        int main() {<br>
        int no_of_frames, no_of_pages, frames[10], pages[30], temp[10], flag1, flag2, flag3, i, j, k, pos, max, faults = 0;<br>
    scanf("%d", &no_of_pages);<br>
    for(i = 0; i < no_of_pages; ++i)<br>
        scanf("%d", &pages[i]);<br>
    scanf("%d", &no_of_frames);<br>
    for(i = 0; i < no_of_frames; ++i)<br>
        frames[i] = -1;<br>
    for(i = 0; i < no_of_pages; ++i)<br>
    {<br>
        flag1 = flag2 = 0;    <br>
        for(j = 0; j < no_of_frames; ++j)<br>
        {<br>
            if(frames[j] == pages[i])<br>
            {<br>
                   flag1 = flag2 = 1;<br>
                   break;<br>
            }<br>
        }<br>
        if(flag1 == 0)<br>
        {<br>
            for(j = 0; j < no_of_frames; ++j)
            {<br>
                if(frames[j] == -1)
                {<br>
                    faults++;<br>
                    frames[j] = pages[i];<br>
                    flag2 = 1;<br>
                    break;<br>
                }<br>
            }    <br>
        } <br>
        if(flag2 == 0)<br>
        {<br>
            flag3 =0;   <br>
            for(j = 0; j < no_of_frames; ++j)<br>
            {<br>
                temp[j] = -1;<br>
                for(k = i + 1; k < no_of_pages; ++k)<br>
                {<br>
                    if(frames[j] == pages[k])<br>
                    {<br>
                        temp[j] = k;<br>
                        break;<br>
                    }<br>
                }<br>
            }<br>
            for(j = 0; j < no_of_frames; ++j)<br>
            {<br>
                if(temp[j] == -1)
                {<br>
                    pos = j;<br>
                    flag3 = 1;<br>
                    break;<br>
                }<br>
            }<br>
            if(flag3 ==0)<br>
            {<br>
                max = temp[0];<br>
                pos = 0;<br>
                for(j = 1; j < no_of_frames; ++j)
                {<br>
                    if(temp[j] > max){<br>
                        max = temp[j];<br>
                        pos = j;<br>
                    }<br>
                }               <br>
            }<br>
            frames[pos] = pages[i];<br>
            faults++;<br>
        }<br>
        printf("\nFAULT ");<br>
        for(j = 0; j < no_of_frames && frames[j]>0; ++j)<br>
            printf("%d ", frames[j]);<br>
    }<br>
    printf("\nTotal Number of Page Faults:%d", faults);<br>
    return 0;<br>
       }<br>
    </div>
    <br>
</body>
</html>