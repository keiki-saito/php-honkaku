<body>
  <?php $point = 85; ?>
  <?php 
    var_dump($point <=> 85); // 結果：0 
    var_dump($point <=> 70); // 結果：1 
    var_dump($point <=> 99); // 結果：-1 
  ?>
</body>