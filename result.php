<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="./css/result.css">

  
</head>
<body>

<!-- ここからif文 -->
<?php
$q1 = $_POST["q1"];
$q2 = $_POST["q2"];
$q3 = $_POST["q3"];
$q4 = $_POST["q4"];
$q5 = $_POST["q5"];

$total = $q1 + $q2 + $q3 + $q4 + $q5;

if ( $total === 5 ) { ?>
  <div>
  <?php $result = "『青と夏』"; ?>
  <iframe allow="autoplay *; encrypted-media *;" frameborder="0" height="150" style="width:100%;max-width:660px;overflow:hidden;background:transparent;" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-storage-access-by-user-activation allow-top-navigation-by-user-activation" src="https://embed.music.apple.com/jp/album/%E9%9D%92%E3%81%A8%E5%A4%8F/1408505088?i=1408505264&app=music"></iframe>
  </div>
  
<?php 
} else if ( $total === 6 ) { ?>
  <div>
  <?php $result = "『CHEERS』"; ?>
  <iframe allow="autoplay *; encrypted-media *;" frameborder="0" height="150" style="width:100%;max-width:660px;overflow:hidden;background:transparent;" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-storage-access-by-user-activation allow-top-navigation-by-user-activation" src="https://embed.music.apple.com/jp/album/cheers/1475232910?i=1475233530&app=music"></iframe>
  </div>

<?php 
} else if ( $total === 7 ) { ?>
  <div>
  <?php $result = "『SimPle』"; ?>
  <iframe allow="autoplay *; encrypted-media *;" frameborder="0" height="150" style="width:100%;max-width:660px;overflow:hidden;background:transparent;" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-storage-access-by-user-activation allow-top-navigation-by-user-activation" src="https://embed.music.apple.com/jp/album/simple/1440787736?i=1440788444&app=music"></iframe>
  </div>

<?php 
} else if ( $total === 8 ) { ?>
  <div>
  <?php $result = "『パブリック』"; ?>
  <iframe allow="autoplay *; encrypted-media *;" frameborder="0" height="150" style="width:100%;max-width:660px;overflow:hidden;background:transparent;" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-storage-access-by-user-activation allow-top-navigation-by-user-activation" src="https://embed.music.apple.com/jp/album/%E3%83%91%E3%83%96%E3%83%AA%E3%83%83%E3%82%AF/1440787736?i=1440788114&app=music"></iframe>
  </div>

<?php 
} else if ( $total === 9 ) { ?>
  <div>
  <?php $result = "『Attitude』"; ?>
  <iframe allow="autoplay *; encrypted-media *;" frameborder="0" height="150" style="width:100%;max-width:660px;overflow:hidden;background:transparent;" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-storage-access-by-user-activation allow-top-navigation-by-user-activation" src="https://embed.music.apple.com/jp/album/attitude/1475232910?i=1475232925&app=music"></iframe>
  </div>

<?php 
} else if ( $total === 10 ) { ?>
  <div>
  <?php $result = "『愛情と矛先』"; ?>
  <iframe allow="autoplay *; encrypted-media *;" frameborder="0" height="150" style="width:100%;max-width:660px;overflow:hidden;background:transparent;" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-storage-access-by-user-activation allow-top-navigation-by-user-activation" src="https://embed.music.apple.com/jp/album/%E6%84%9B%E6%83%85%E3%81%A8%E7%9F%9B%E5%85%88/1440787736?i=1440787907&app=music"></iframe>
  </div>

<?php 
} else if ( $total === 11 ) { ?>
  <div>
  <?php $result = "『インフェルノ』"; ?>
  <iframe allow="autoplay *; encrypted-media *;" frameborder="0" height="150" style="width:100%;max-width:660px;overflow:hidden;background:transparent;" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-storage-access-by-user-activation allow-top-navigation-by-user-activation" src="https://embed.music.apple.com/jp/album/%E3%82%A4%E3%83%B3%E3%83%95%E3%82%A7%E3%83%AB%E3%83%8E/1471459431?i=1471459432&app=music"></iframe>
  </div>

<?php 
} else if ( $total === 12 ) { ?>
  <div>
  <?php $result = "『我逢人』"; ?>
  <iframe allow="autoplay *; encrypted-media *;" frameborder="0" height="150" style="width:100%;max-width:660px;overflow:hidden;background:transparent;" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-storage-access-by-user-activation allow-top-navigation-by-user-activation" src="https://embed.music.apple.com/jp/album/%E6%88%91%E9%80%A2%E4%BA%BA/1440794725?i=1440794901&app=music"></iframe>
  </div>

<?php 
} else if ( $total === 13 ) { ?>
  <div>
  <?php $result = "『春愁』"; ?>
  <iframe allow="autoplay *; encrypted-media *;" frameborder="0" height="150" style="width:100%;max-width:660px;overflow:hidden;background:transparent;" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-storage-access-by-user-activation allow-top-navigation-by-user-activation" src="https://embed.music.apple.com/jp/album/%E6%98%A5%E6%84%81/1441018133?i=1441018143&app=music"></iframe>
  </div>

<?php 
} else if ( $total === 14 ) { ?>
  <div>
  <?php $result = "『僕のこと』"; ?>
  <iframe allow="autoplay *; encrypted-media *;" frameborder="0" height="150" style="width:100%;max-width:660px;overflow:hidden;background:transparent;" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-storage-access-by-user-activation allow-top-navigation-by-user-activation" src="https://embed.music.apple.com/jp/album/%E5%83%95%E3%81%AE%E3%81%93%E3%81%A8/1445145788?i=1445145789&app=music"></iframe>
  </div>

<?php 
} else { ?>
  <div>
  <?php $result = "『HeLLo』"; ?>
  <iframe allow="autoplay *; encrypted-media *;" frameborder="0" height="150" style="width:100%;max-width:660px;overflow:hidden;background:transparent;" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-storage-access-by-user-activation allow-top-navigation-by-user-activation" src="https://embed.music.apple.com/jp/album/hello/1440787736?i=1440788506&app=music"></iframe>
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