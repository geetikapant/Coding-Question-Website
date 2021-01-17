<?php
    include "header.php";
    include "sidenav.php";
?>
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
        In chemistry, pH(potential of hydrogen) is a numeric scale used to specify the acidity or basicity of an aqueous solution. It is approximately the negative of the base 10 logarithm of the molar concentration, measured in units of moles per litre, of hydrogen ions. More precisely it is the negative of the base 10 logarithm of the activity of the hydrogen ion. Solutions with a pH less than 7 are acidic and solutions with pH greater than 7 are basic. Pure water is neutral, at pH 7(25 C), being neither an acid nor a base. Contrary to popular beleif, the pH value can be less than 0 or greater than 14 for very strong acids and bases respectively.<br>
        Measurements of pH are important in agronomy, medicine, biology, chemistry, agriculture, forestry, food science, environmental science, oceanography, civil engineering, chemical engineering, nutrition, water treatment and water purification, and many other applications.<br>
    </div>
	<div class="answer">
		#include&lt;stdio.h&gt;<br>
        int main(){<br>
            float f;<br>
            scanf("%f",&f);<br>
            if(f<0)<br>
                printf("neutral");<br>
            if(f>=0&& f<7)<br>
                printf("acidic");<br>
            if(f>=7)<br>
                printf("basic");<br>
            return0;<br>
        }<br>

	</div>
	<br>
</body>
</html>