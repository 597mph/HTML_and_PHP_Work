<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Theme Park V1</title>
  <link rel="stylesheet">
</head>

<style>
  .header {
    font-family: 'Times New Roman', Times, serif; color: black; font-size: 24px;
  }
  .paragraph {
    font-family: 'Times New Roman', Times, serif; color: black; font-size: 16px;
  }
  body {
    background-color: beige;
  }
  .centerTXT {
    text-align: center;
    border: 3px solid green;
    border-radius: 25px;
    margin: 5% 10%;
  }
  .centerIMG {
    width: 560px;
    height: 315px;
    display: block;
    margin-left: auto;
    margin-right: auto;
    width: 50%;
  }
  ol.siteLinks {
    display: inline-block;
    text-align: left;
  }
  .button {
  background-color: #4CAF50;
  border: none;
  border-radius: 25px;
  color: white;
  padding: 16px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  transition-duration: 0.4s;
  cursor: pointer;
}
.button1 {
  background-color: white; 
  color: black; 
  border: 2px solid #4CAF50;
}
.button1:hover {
  background-color: #4CAF50;
  color: white;
}
</style>

<?php
  echo ("<div class = 'centerTXT'>");
  echo ("<br><p class='header'>Date and time of last revision: 19 October, 2022. 22:49:31</p>");
      
  date_default_timezone_set("America/New_York");
  echo ("<p class ='header'>Today is " . date("m/d/Y") . ". The time is " . date("h:i:sa") . ".</p>");
      
  echo ("<br><p class ='header'>Maxwell Hauser</p>");
  echo ("<p class ='header'>Proposed theme/topic for my site: AI-generated art</p>");
  echo ("<p class ='paragraph' style='margin: 0% 25%'>
         My theme park will focus on AI-generated art and techniques to use to generate quality AI imagery. 
         This site will focus specifically on the Midjourney bot and some of the prompts/commands expert artists
         use to create their best work. Unsurprisingly, there are a lot of politics and controversy
         surrounding AI-generated art, but discussing that is outside the scope of this site. This site will showcase
         various images created by Midjourney users and will offer tips and tricks to help new users create awesome art.</p><br>");
  
  echo ("<p class='header'>Group member site links:</p><br>");
  echo ("<ol class = 'siteLinks'>");
  echo ("<li><a style='color:green' href='http://167.99.253.247/csc443/fernandezf2/CSC-443/Assignment3/'>Felix</a></li>
         <li><a style='color:green' href='http://167.99.253.247/csc443/delgadoj11/themeParkProposal/'>Joseph</a></li>
         <li><a style='color:green' href='http://167.99.253.247/csc443/harrisona9/harrison_CSC443_assignment3.php'>Aaron</a></li>
         <li><a style='color:green' href='null'>Sam</a></li>");
  echo ("</ol></div>");
?> 

<body>
  <div class ="centerTXT">
    <br>
      <button type="button" class="button button1" onclick="showImage()">AI-generated image!</button><br>
      <div id="aiImage" style="display:none;"><br><img src='img/002.png' alt='oops' class='centerIMG'></div>
    <br>
  </div>
  
  <div class ="centerTXT">
    <br>
      <button type="button" class="button button1" onclick="showVideo()">AI art video!</button><br>
      <div id="aiVideo" style="display:none;"><br><iframe class='centerIMG' width='560' height='315'
           src='https://www.youtube.com/embed/cNEiUQcc4x8' title='YouTube video player' frameborder='0'
           allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe></div>
    <br>
  </div>
  
  <script>
    function showImage() {
      if (aiImage.style.display == 'none') {
        aiImage.style.display = 'block';
      } else {
        aiImage.style.display = 'none';
      }
    }

    function showVideo() {
      if (aiVideo.style.display == 'none') {
        aiVideo.style.display = 'block';
      } else {
        aiVideo.style.display = 'none';
      }
    }
  </script>
</body>
</html>