<body>
  <?php 
    $score = -100;
    if($score < 0){
      echo 'スコアは正の数でなければなりません。';
      exit(1);
    }

    echo 'スコアは：',$score,'点です';
  ?>
</body>