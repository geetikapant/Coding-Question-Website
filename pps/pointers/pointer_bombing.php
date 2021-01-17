<!DOCTYPE html>
<html>
<head><!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Comic+Neue:wght@300;700&display=swap" rel="stylesheet">
    
    <title></title>

    <link rel="stylesheet" type="text/css" href="style.css">
	
</head>
<body>
	<div class="question">
		<u>Question</u><br>
        The chef is having a dinner party. He has N chairs and has invited N guests. The chef knows that if the guests are left to their own devices, they tend to sit in the same chairs and socialize with the same people all night. To prevent this, the chef has developed a plan to help people socialize. He will assign each chair a follow-up chair. At predetermined intervals during the party, the chef will ring a bell, instructing all guests to move from their current chair to its follow-up chair.<br>
        The chef will assign follow-up chairs randomly, with the restriction that no chair will be its own follow-up chair, and no chairs will have the same follow-up chair. That is, the chef randomly chooses one arrangement out of of all assignments satisfying the two conditions. The chef wonders, after a certain number of ringings of the bell, what the expected number of guests who will be back in their original chairs will be.<br> 
    </div>
	<div class="answer">
		#include&lt;stdio.h&gt;<br>
        int main(){<br>
            int num1, num2;<br>
            float avg;<br>
            scanf("%d",&num1);<br>
            scanf("%d",&num2);<br>
            avg= (float)(num1+num2)/2;<br>
            printf("I am:%d\n",num1);<br>
            printf("You are:%d\n",num2);<br>
            printf("We are around:%.2f",avg);<br>
            return 0;<br>
        }<br>

	</div>
	<br>
</body>
</html>