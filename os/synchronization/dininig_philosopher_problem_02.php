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
 There are five philosophers A,B,C,D,E. They sat at a round table for dinner. To complete dinner each must need 2 Forks. but there are only five Forks available on table. They take in such a manner that, first take left Fork and next right Fork. But problem is they try to take at same time. Since they are trying at same time, Fork 1,2,3,4,5 taken by friends A,B,C,D,E respectively. And each one tries to get right side Fork. But no one found  available Fork. And also that each one thinks that someone will release the fork and then i can eat. To avoid this situation, Last friend E first try to take right side fork and then left side fork.i.e person E tries to take 4th Fork instead of 5th one. Since 4th Fork already taken by the person D, he gets nothing. But he  left 5th Fork. Now the person A will take this 5th Fork and complete dinner. and make 1st and 5th Fork and complete dinner and make 1st and 5th  vailable for remaiming people. next the persons B takes 1st fork and complets and releases 1st and 2nd. This continuous until all finishes dinner.
   </div> 
    <div class="answer" style="height:100%;">
    <u>Solution</u><br>
        #include&lt;stdio.h><br>
 
#define n 4<br>
 
int compltedPhilo = 0,i;<br>
 
struct fork{<br>
    int taken;<br>
}ForkAvil[n];<br>
 
struct philosp{<br>
    int left;<br>
    int right;<br>
}Philostatus[n];<br>
 
void goForDinner(int philID){ <br>//same like threads concept here cases implemented
    if(Philostatus[philID].left==10 && Philostatus[philID].right==10)<br>
        printf("Philosopher %d completed his dinner\n",philID+1);<br>
    //if already completed dinner
    else if(Philostatus[philID].left==1 && Philostatus[philID].right==1){<br>
            //if just taken two forks
            printf("Philosopher %d completed his dinner\n",philID+1);
 <br>
            Philostatus[philID].left = Philostatus[philID].right = 10;<br> //remembering that he completed dinner by assigning value 10
            int otherFork = philID-1;<br>
 
            if(otherFork== -1)<br>
                otherFork=(n-1);<br>
 
            ForkAvil[philID].taken = ForkAvil[otherFork].taken = 0; <br>//releasing forks
            printf("Philosopher %d released fork %d and fork %d\n",philID+1,philID+1,otherFork+1);<br>
            compltedPhilo++;<br>
        }<br>
        else if(Philostatus[philID].left==1 && Philostatus[philID].right==0){ <br>//left already taken, trying for right fork
                if(philID==(n-1)){<br>
                    if(ForkAvil[philID].taken==0){ <br>//KEY POINT OF THIS PROBLEM, THAT LAST PHILOSOPHER TRYING IN reverse DIRECTION
                        ForkAvil[philID].taken = Philostatus[philID].right = 1;<br>
                        printf("Fork %d taken by philosopher %d\n",philID+1,philID+1);<br>
                    }else{<br>
                        printf("Philosopher %d is waiting for fork %d\n",philID+1,philID+1);<br>
                    }<br>
                }else{ <br>//except last philosopher case
                    int dupphilID = philID;<br>
                    philID-=1;<br>
 
                    if(philID== -1)<br>
                        philID=(n-1);<br>
 
                    if(ForkAvil[philID].taken == 0){<br>
                        ForkAvil[philID].taken = Philostatus[dupphilID].right = 1;<br>
                        printf("Fork %d taken by Philosopher %d\n",philID+1,dupphilID+1);<br>
                    }else{<br>
                        printf("Philosopher %d is waiting for Fork %d\n",dupphilID+1,philID+1);<br>
                    }<br>
                }<br>
            }<br>
            else if(Philostatus[philID].left==0){<br> //nothing taken yet
                    if(philID==(n-1)){<br>
                        if(ForkAvil[philID-1].taken==0){<br> //KEY POINT OF THIS PROBLEM, THAT LAST PHILOSOPHER TRYING IN reverse DIRECTION
                            ForkAvil[philID-1].taken = Philostatus[philID].left = 1;<br>
                            printf("Fork %d taken by philosopher %d\n",philID,philID+1);<br>
                        }else{<br>
                            printf("Philosopher %d is waiting for fork %d\n",philID+1,philID);<br>
                        }<br>
                    }else{ <br>//except last philosopher case
                        if(ForkAvil[philID].taken == 0){<br>
                            ForkAvil[philID].taken = Philostatus[philID].left = 1;<br>
                            printf("Fork %d taken by Philosopher %d\n",philID+1,philID+1);<br>
                        }else{<br>
                            printf("Philosopher %d is waiting for Fork %d\n",philID+1,philID+1);<br>
                        }<br>
                    }<br>
        }else{}<br>
}<br>
 
int main(){<br>
    for(i=0;i&lt;n;i++)<br>
        ForkAvil[i].taken=Philostatus[i].left=Philostatus[i].right=0;<br>
 
    while(compltedPhilo&lt;n){<br>
        /* Observe here carefully, while loop will run until all philosophers complete dinner
        Actually problem of deadlock occur only thy try to take at same time
        This for loop will say that they are trying at same time. And remaining status will print by go for dinner function
        */
        for(i=0;i&lt;n;i++)<br>
            goForDinner(i);<br>
        printf("\nTill now num of philosophers completed dinner are %d\n\n",compltedPhilo);<br>
    }<br>
 
    return 0;<br>
}<br>
    </div>
    <br>
</body>
</html>