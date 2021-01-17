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
 You have got three friends (chandler,Ross,and Joey) who need loan to tide them over for a bit. You have $24 with you. Chandler needs $8,Ross needs $13, and joey needs 410.<br>
 You alrady lent $6 to chandler,$8 to Ross, and $7 to joey.So you are left with $24-$21(6+8+7)=$3. Even after giving $6 to chandler,he still needs $2.<br>
 Similarly,Ross needs $5 more and joey $3. Until they get the amount they need,they can neither do whatever tasks they have to nor return the amount they borrowed.(Linke a true friend!) You can pay $2 to cahndler, and wait for him to get his work done and then get back the entire $8.Or ,you can pay $3 to joey and wait for him to pay you back after his task is done.<br>
 You cant pay Ross bechause he needs $5 and you don't have enough. You can pay him once Chandler or joey returns the borrowed amount after their work is done.

      </div> 
    <div class="answer" style="height:100%;">
    <u>Solution</u><br>
        #include &lt;stdio.h&gt;<br>
        int current[5][5], maximum_claim[5][5], available[5];<br>
int allocation[5] = {0, 0, 0, 0, 0};<br>
int maxres[5], running[5], safe = 0;<br>
int counter = 0, i, j, exec, resources, processes, k = 1;<br>
        int main() {<br>
    //printf("\nEnter number of processes: ");
        scanf("%d", &processes);<br>
 
        for (i = 0; i < processes; i++) 
    {<br>
            running[i] = 1;<br>
            counter++;<br>
        }<br>
 
        //printf("\nEnter number of resources: ");
        scanf("%d", &resources);<br>
 
        //printf("\nEnter Claim Vector:");
        for (i = 0; i < resources; i++) <br>
    { <br>
            scanf("%d", &maxres[i]);<br>
        }<br>
 
    //printf("\nEnter Allocated Resource Table:\n");
        for (i = 0; i < processes; i++) <br>
    {<br>
            for(j = 0; j < resources; j++) <br>
        {<br>
            scanf("%d", &current[i][j]);
<br>            }<br>
        }<br>
 
        //printf("\nEnter Maximum Claim Table:\n");
        for (i = 0; i < processes; i++)<br> 
    {<br>
            for(j = 0; j < resources; j++) <br>
        {<br>
                    scanf("%d", &maximum_claim[i][j]);<br>
            }<br>
        }<br>
 
    printf("The Claim Vector is:");<br>
        for (i = 0; i < resources; i++)<br> 
    {<br>
            printf(" %d", maxres[i]);
<br>    }<br>
 
        printf("\nThe Allocated Resource Table:");<br>
        for (i = 0; i < processes; i++) <br>
    {<br>
            for (j = 0; j < resources; j++) <br>
        {<br>
                    printf(" %d", current[i][j]);<br>
            }<br>
        printf("\n");<br>
        }<br>
 
        printf("The Maximum Claim Table:");<br>
        for (i = 0; i < processes; i++) <br>
    {<br>
            for (j = 0; j < resources; j++) <br>
        {<br>
                printf(" %d", maximum_claim[i][j]);<br>
            }<br>
            printf("\n");<br>
        }<br>
 
        for (i = 0; i < processes; i++) 
    {<br>
            for (j = 0; j < resources; j++) <br>
        {<br>
                    allocation[j] += current[i][j];<br>
            }<br>
        }<br>
 
        printf("Allocated resources:");<br>
        for (i = 0; i < resources; i++) <br>
    {<br>
            printf(" %d", allocation[i]);<br>
        }<br>
 
        for (i = 0; i < resources; i++) <br>
    {<br>
            available[i] = maxres[i] - allocation[i];<br>
    }<br>
 
        printf("\nAvailable resources:");<br>
        for (i = 0; i < resources; i++) <br>
    {<br>
            printf(" %d", available[i]);<br>
        }<br>
        printf("\n");<br>
 
        while (counter != 0)<br> 
    {<br>
            safe = 0;<br>
            for (i = 0; i < processes; i++) <br>
        {<br>
                    if (running[i]) <br>
            {<br>
                        exec = 1;<br>
                        for (j = 0; j < resources; j++)<br> 
                {<br>
                                if (maximum_claim[i][j] - current[i][j] > available[j]) <br>
                    {<br>
                                    exec = 0;<br>
                                    break;<br>
                                }<br>
                        }<br>
                        if (exec)<br> 
                {<br>
           printf("Process%d is executing\n", i + 1);<br>
                                running[i] = 0;<br>
                                counter--;<br>
                                safe = 1;<br>
 
                                for (j = 0; j < resources; j++)<br> 
                    {<br>
                                    available[j] += current[i][j];<br>
                                }<br>
                            break;<br>
                        }<br>
                    }<br>
            }<br>
            if (!safe) <br>
        {<br>
                    printf("The processes are in unsafe state\n");<br>
                    break;<br>
            } <br>
        else <br>
        {<br>
                    printf("The process is in safe state");<br>
                    printf("\nAvailable vector:");<br>
 
                    for (i = 0; i < resources; i++) <br>
            {<br>
                        printf(" %d", available[i]);<br>
                    }<br>
 
                printf("\n");<br>
            }<br>
        }<br>
        return 0;<br>
       }<br>
    </div>
    <br>
</body>
</html>