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
     You are given a string S of length N consisting only of 0s and 1s. You are also given an integer K. You have to answere Q queries. In the ith query, two integers Li and Ri are given. Then you should print  the number of substrings of S[L,R] which contain at most K 0s and at most K 1s where S[L,R] denotes the substring from Lth to Rth characters of the string S.<br>
     In other words, you have to count number of pairs (i,j) of integers such that L i j R such that no character in substring S[i,j] occurs more than K times.
</div>
    <div class="answer" style="height:100%;">
    <u>Solution</u><br>
  #include &lt;stdio.h&gt;<br>
        #include &lt;string.h&gt;<br>
        #include &lt;stdlib.h&gt;<br>
#define gcgetchar_unlocked()<br>
char str[100005];<br>
void getstring()<br>
{int i=0;<br>
 char ch=gc;<br>
 while(ch<'0')<br>
 ch=gc;<br>
 while(ch>='0')<br>
 {str[i++]=ch;<br>
  ch=gc;<br>
 }<br>
}<br>
int getn()<br>
{ inti=0;<br>
  char ch=gc;<br>
  while(ch<'0'||ch>'9')<br>
  ch=gc;<br>
  while(ch<='9'&&ch>='0')<br>
  { i=(i&lt;&lt;1)+(i&lt;&lt;3)+ch-'0';<br>
    ch=gc;<br>
  }<br>
return i;<br>
}<br>
int main()<br>
{int t,n,k,q,i,l,r,m,x,y,zero,one;<br>
 long long int ans,a,b;<br>
 int ra[100005];<br>
 int abc[100005];<br>
 long long int sum[100005];<br>
 t=getn();<br>
 while(t--)<br>
 {   <br>
      n=getn();k=getn();q=getn();<br>
      getstring();<br>
      l=1;<br>
      r=n;<br>
      one=0;zero=0;m=l-2;<br>
           ans=0;<br>
           for(i=l-1;i&lt;r;i++)<br>
           { <br>
              if(str[m+1]=='1')<br>
              {x=1;y=0;}<br>
              else<br>
              {x=0;y=1;<br>
              }<br>
              while((m+1)&lt;r&&((zero+y&lt;=k&&(one+x)&lt;=k))<br>
              {  zero=zero+y;<br>
                 one=one+x;<br>
                 m++;<br>
                 if(str[m+1]=='1')<br>
                 {x=1;y=0;}<br>
                 else<br>
                 { x=0;y=1;<br>
                 }<br>
              }<br>
              a=m-i+1;<br>
              abc[i]=a;<br>
              if(str[i]=='1')<br>
              one--;<br>
              else<br>
              zero--;<br>
           }<br>
      sum[0]=0;<br>
      for(i=1;i<=n;i++) <br>          
      sum[i]=sum[i-1]+abc[i-1];<br>
      /*for(i=0;i<n;i++)<br>
      printf("%d ",abc[i]); <br>    
      */  <br> 
      for(i=0;i<1;i++)<br>
        { if(abc[i]>(1-i))<br>
          break;<br>
        }<br>
        ra[1]=i;<br>
      for(r=2;r<=n;r++)<br>
      { for(i=ra[r-1];i<r;i++)<br>
        { if(abc[i]>(r-i))<br>
          break;<br>
        }<br>
        ra[r]=i;<br>
      }<br>
      while(q--)<br>
      {    l=getn();r=getn();<br>
           ans=0;<br>
              /*for(i=l-1;i&lt;r;i++)<br>
             {if(abc[i]>(r-i))<br>
               break;<br>

               //printf("%lld",ans);<br>
             }<br>
              */ if(l-1<ra[r])<br>
                 {ans+=(sum[ra[r]]-sum[l-1]);<br>
                 a=(r-ra[r]);<br>
                 b=(r-ra[r]+1);<br>
                 ans+=a*b/2;<br>
                  }<br>
                  else<br>
                  { a=(r-l+1);<br>
                    b=(r-l+2);<br>
                    ans=a*b/2;<br>
                   }<br>

                     printf("%lld\n",ans);<br>
      }<br>
 }<br>
 return 0;<br>
}
    </div>
    <br>
</body>
</html>