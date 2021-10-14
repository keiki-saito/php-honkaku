<body>
  <?php 
    $temperature = 39;
    
    // 適温の範囲「内」であるかを調べる
    $isSuitable = $temperature >= 40 && $temperature <= 41;
    var_dump($isSuitable);

    // 適温の範囲「外」であるかを調べる(1)
    $isNotSuitable = $temperature < 40 || $temperature > 41;
    var_dump($isNotSuitable);

    // 適温の範囲「外」であるかを調べる(2)
    $isNotSuitable = !($temperature >= 40 && $temperature <= 41);
    var_dump($isNotSuitable);
  ?>
</body>