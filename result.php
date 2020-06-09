<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="./css/result.css">

  
</head>
<body>

<?php

$q1 = $_POST["q1"];
$q2 = $_POST["q2"];
$q3 = $_POST["q3"];

$total = $q1 + $q2 + $q3;

if ( $total <= 3 ) { ?>
  <div>
  <?php $result = "『青と夏』"; ?>
  <iframe allow="autoplay *; encrypted-media *;" frameborder="0" height="150" style="width:100%;max-width:660px;overflow:hidden;background:transparent;" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-storage-access-by-user-activation allow-top-navigation-by-user-activation" src="https://embed.music.apple.com/jp/album/%E9%9D%92%E3%81%A8%E5%A4%8F/1408505088?i=1408505264&app=music"></iframe>
  </div>

  <?php 
} else { ?>
  <div>
  <?php $result = "『点描の唄』"; ?>
  <iframe allow="autoplay *; encrypted-media *;" frameborder="0" height="150" style="width:100%;max-width:660px;overflow:hidden;background:transparent;" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-storage-access-by-user-activation allow-top-navigation-by-user-activation" src="https://embed.music.apple.com/jp/album/%E7%82%B9%E6%8F%8F%E3%81%AE%E5%94%84-feat-%E4%BA%95%E4%B8%8A%E8%8B%91%E5%AD%90/1408505088?i=1408505419&app=music"></iframe>
</div>

<?php
} ?>






<div class="container">
  <h1>診断結果...</h1>
  <p>今のあなたにぴったりな曲は、
    <br>
    <span><?= $result ?></span>
    です♪
  </p>
  <br>
  
  <form action="main.html" method="POST">
    <button type="button" onclick="history.back()" >戻る</button>
  </form>
</div>
  
</body>
</html>