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
        A famous Berland's painter Kalevitch likes to shock the public. One of his last obsessions is chess. For more than a thousand years people have been playing this old game on uninteresting, monotonous boards. Kalevitch decided to put an end to this tradition and to introduce a new attitude to chessboards.<br>
        As before, the chessboard is a square-checkered board with the squares arranged in a 88 grid, each square is painted black or white. Kalevitch suggests that chessboards should be painted in the folllowing manner:<br>
        there should be chosen a horizontal or a vertical line of 8 squares(i.e. a row or a column), and painted black. Initially the whole chessboared is white, and it can be painted in the above described way one or more times. It is allowed to paint a square many times, but after the first time it does not change its colour any more and remains black. Kalevitch paints chessboards neatly, and it is impossible to judge by an individual square if it is painted with a vertical or a horizontal stroke. Kalevitch hopes that such chessboards will gain popularity, and he will be commissioned to paint chessboards, which will help ensure a comfortable old age. The clients will inform him what chessboard they want to have, and the painter will paint a white chessboard meeting the client's requirements.<br>
        It goes without saying in such business one should economize on everything for each commision he wants to know the minimum amount of strokes that he has to paint to fulfill the client's needs. You are asked to help Kalevitch with this task.<br>
    </div>
	<div class="answer">
		#include&lt;stdio.h&gt;<br>
        #include&lt;stdbool.h&gt;<br>
        char a[10][10];<br>
        bool black_row(int x)<br>
        {<br>
            int i;<br>
            for(i=0;i<8;i++)<br>
            {<br>
                if(a[x][i]=='W')<br>
                    return false;<br>
            }<br>
            return true;<br>
        }<br>
        bool black_col(int x)<br>
        {<br>
            int i;<br>
            for(i=0;i<8;i++)<br>
            if(a[i][x]=='W')<br>
                return false;<br>
            return true;<br>
        }<br>

        int main()<br>
        {<br>
            int i;<br>
            for(i=0;i<8;i++)<br>
            {<br>
                scanf("%s",a[i]);<br>
            }<br>
            int ans=0;<br>
            for(i=0;i<8;i++)<br>
            if(black_row(i)) ans++;<br>
            for(i=0;i<8;i++)<br>
            if(black_col(i)) ans++;<br>
            if(ans==16) ans=8;<br>
                printf("%d",ans);<br>
            return 0;<br>
        }<br>

	</div>
	<br>
</body>
</html>