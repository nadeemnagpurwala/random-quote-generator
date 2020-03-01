<?php
  
  /**
   *  Random Quote Generator API : 
      Api Reference - https://github.com/lukePeavey/quotable
  */

  include_once('src/Api.php');
  $response = new Response('https://api.quotable.io/random');
  $data = $response->showData();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Random Quote Generator</title>
  <link rel="stylesheet" href="assets/style.css">
</head>
<body>

<div class="topnav">
  <a class="title">Random Quote Generator</a>
  <a href="https://github.com/nadeemnagpurwala" target="_blank">Github</a>
  <a href="https://www.linkedin.com/in/nadeem-nagpurwala" target="_blank">LinkedIn</a>
</div>

<div id="product-details" class="card">
  <div class="container">
    <div class="column">
        <p><center><?= $data['content']?></center></p>
        <small><center>- <?= $data['author']?></center></small>
        <br>
        <center><button class="btn" onclick="location.reload(); ">Load New Quote</button></center>
        <br>
      </div>
  </div>
</div>
</body>
</html>