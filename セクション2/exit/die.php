<body>
  <?php 
    $score = -100;
    if($score < 0){
      die('スコアは正の数でなければなりません');
    }
    echo 'スコアは：',$score,'点です。';
  ?>
</body>