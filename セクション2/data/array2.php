<body>
  <?php 
    $user = [
      'name' => '山下次郎',
      'age' => 30,
      'place' => '有田'
    ];
    $user['job'] = '伝統工芸士';
    $user['hobby'] = 'パン作り';
  ?>

  <p><?=$user['name'];?></p>
  <p><?=$user['age'];?></p>
  <p><?=$user['place'];?></p>
  <p><?=$user['job'];?></p>
  <p><?=$user['hobby'];?></p>
  <p><pre><?php print_r($user)?></pre></p>
</body>