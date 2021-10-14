<body>
  <?php 
    $greeting1 = 'Hello';
    $greeting2 = &$greeting1;
    $greeting1 = 'World'; 
  ?>
  <p>greeting1: <?=$greeting1?></p>
  <p>greeting2: <?=$greeting2?></p>
</body>