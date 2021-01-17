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
 Geeths runs a bread producing company with limited storage capacity. Daily She manufactures  some cheese and stores it in her shop. If she manufactures over than the storage capacity then she will not able to store the product. Once she store on the storage are the consumer can buy the cheese. The product count will reduce whenever the consumer consumes the cheese. If there is no cheese in storage then the consumer cannot buy any product.
   </div> 
    <div class="answer" style="height:100%;">
    <u>Solution</u><br>
        #include&lt;stdio.h><br>
#include&lt;stdlib.h><br>
 
int mutex=1,full=0,empty=3,x=0;<br>
 
int main()<br>
{<br>
    int n;<br>
    void producer();<br>
    void consumer();<br>
    int wait(int);<br>
    int signal(int);<br>
    //printf("\n1.Producer\n2.Consumer\n3.Exit");<br>
    while(1)<br>
    {<br>
        //printf("\nEnter your choice:");<br>
        scanf("%d",&n);<br>
        switch(n)<br>
        {<br>
            case 1: if((mutex==1)&&(empty!=0))<br>
                        producer();<br>
                    else<br>
                        printf("\nBuffer is full!!");<br>
                    break;<br>
            case 2: if((mutex==1)&&(full!=0))<br>
                        consumer();<br>
                    else<br>
                        printf("\nBuffer is empty!!");<br>
                    break;<br>
            case 3:<br>
                    exit(0);<br>
                    break;<br>
        }<br>
    }<br>
    
    return 0;<br>
}<br>
 
int wait(int s)<br>
{<br>
    return (--s);<br>
}<br>
 
int signal(int s)<br>
{<br>
    return(++s);<br>
}<br>
 
void producer()<br>
{<br>
    mutex=wait(mutex);<br>
    full=signal(full);<br>
    empty=wait(empty);<br>
    x++;<br>
    printf("\nProducer produces the item %d",x);<br>
    mutex=signal(mutex);<br>
}<br>
 
void consumer()<br>
{<br>
    mutex=wait(mutex);<br>
    full=wait(full);<br>
    empty=signal(empty);<br>
    printf("\nConsumer consumes item %d",x);<br>
    x--;<br>
    mutex=signal(mutex);<br>
}<br>
    </div>
    <br>
</body>
</html>