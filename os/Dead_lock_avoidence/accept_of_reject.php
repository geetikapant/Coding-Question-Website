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
Raju is newly joined employee in the company.His boss has assigned the set of jobs to him.As he is new,he get confused to decide whether to accept or not.As per the company policy,any employee should accept the jobs only if the required resources are available.<br>
Help Raju to take decision wheather to accept or not and the order how the jobs can be completed.


      </div> 
    <div class="answer" style="height:100%;">
    <u>Solution</u><br>
        #include &lt;stdio.h><br>
#include &lt;stdlib.h><br>
int main()
{<br>
    int Max[10][10], need[10][10], alloc[10][10], avail[10], completed[10], safeSequence[10];<br>
    int p, r, i, j, process, count;<br>
    count = 0;<br>
    scanf("%d", &p);<br>
    for(i = 0; i< p; i++)<br>
        completed[i] = 0;<br>
    scanf("%d", &r);<br>
    for(i = 0; i < p; i++)
    {        <br>
        for(j = 0; j < r; j++)<br>
            scanf("%d", &Max[i][j]);<br>
    }<br>
    for(i = 0; i < p; i++)
    {<br>
      
        for(j = 0; j < r; j++)<br>
            scanf("%d", &alloc[i][j]);<br>
    }<br>
    for(i = 0; i < r; i++)<br>
        scanf("%d", &avail[i]);<br>

    for(i = 0; i < p; i++)<br>
        for(j = 0; j < r; j++)<br>
            need[i][j] = Max[i][j] - alloc[i][j];<br>
  
        do
        {<br>
          

            for(i = 0; i < p; i++)
            {<br>
                for( j = 0; j < r; j++)
                 <br>   printf("%d ", Max[i][j]);
               <br>
                for( j = 0; j < r; j++)
                   <br> printf("%d ", alloc[i][j]);
                <br>printf("\n");<br>
            }<br>

            process = -1;<br>

            for(i = 0; i < p; i++)
            {<br>
                if(completed[i] == 0)//if not completed
                {<br>
                    process = i ;<br>
                    for(j = 0; j < r; j++)
                    {<br>
                        if(avail[j] < need[i][j])
                        {<br>
                            process = -1;<br>
                            break;<br>
                        }<br>
                    }<br>
                }<br>
                if(process != -1)<br>
                    break;<br>
            }<br>

            if(process != -1)
            {<br>
                
                safeSequence[count] = process + 1;<br>
                count++;<br>
                for(j = 0; j < r; j++)
                {<br>
                    avail[j] += alloc[process][j];<br>
                    alloc[process][j] = 0;<br>
                    Max[process][j] = 0;<br>
                    completed[process] = 1;<br>
                }<br>
            }<br>
        }<br>
        while(count != p && process != -1);<br>

        if(count == p)<br>
        {<br>
          
            printf("Accept It\n");<br>
            for( i = 0; i < p; i++)<br>
                printf("%d ", safeSequence[i]);<br>
         
        }<br>
        else<br>
            printf("Dont Accept");<br>
  return 0;<br>

}<br>
    </div>
    <br>
</body>
</html>