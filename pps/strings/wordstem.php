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
     Given n words w[1..n], which originate from the same stem(e.g. grace ,graceful , disgraceful,gracefully), we are interested in the original stem. To simplify the problem, we define the stem as the longest consecutive substring that occurs in all the n words. If there are ties, we will choose the smallest one in the alphabetical(lexicographic) order.
</div>
    <div class="answer" style="height:100%;">
    <u>Solution</u><br>
        #include &lt;stdio.h&gt;<br>
        #include &lt;string.h&gt;<br>
        #include &lt;stdlib.h&gt;<br>
        int main() {<br>
            nt i,j,k,l,m,n,o,p,t,len[15],flag,s,z,key,min;<br>
  char a[15][25],ans[25],aa[25];<br>
scanf("%d",&t);<br>
  for(z=1;z<=t;z++)<br>
  {<br>
    flag=s=0;<br>
    min=1000;<br>
    for(i=0;i<=24;i++)<br>
    {<br>
ans[i]='\0';<br>
    }<br>
scanf("%d",&n);<br>
    for(i=0;i<=n-1;i++)<br>
    {<br>
scanf("%s",a[i]);<br>
      m=strlen(a[i]);<br>
len[i]=m;<br>
      if(m<min)<br>
      {<br>
        min=m;<br>
        key=i;<br>
      }<br>
    }<br>
    for(i=min;i>=1;i--)<br>
    {<br>
      for(j=0;j<=min-i;j++)<br>
      {<br>
        l=j;<br>
        k=0;<br>
        while(k<=i-1)<br>
        {<br>
          aa[k]=a[key][l];<br>
          k++;<br>
          l++;<br>
        }<br>
        aa[k]='\0';<br>
        for(o=0;o&lt;<br>=n-1;o++)<br>
        {<br>
          flag=0;<br>
          for(p=0;p<=len[o]-i;p++)<br>
          {<br>
            if(strcmp(&a[o][p],aa)==a[o][p+i])<br>
            {<br>
              flag=1;<br>
              break;<br>
            }<br>
          }<br>
          if(flag==0)<br>
            break;<br>
        }<br>
        if(flag==1)<br>
        {<br>
          s=1;<br>
          if(strlen(ans)==0)<br>
          {<br>
strcpy(ans,aa);<br>
          }<br>
          else<br>
          {<br>
            if(strcmp(ans,aa)>0)<br>
strcpy(ans,aa);<br>
          }<br>
        }<br>
      }<br>
      }<br>
      if(s==1)<br>
        break;<br>
    }<br>
printf("%s\n",ans);<br>
  }<br>
  return 0;<br>
 }
    </div>
    <br>
</body>
</html>