<body>
  <?php 
    $arr1 = ['a', 'b'];
    $arr2 = ['d', 'e', 'f'];
    $mergedA = $arr1 + $arr2;
    $mergedB = $arr2 + $arr1;
    $mergedC = array_merge($arr1, $arr2);
    $mergedD = array_merge($arr2, $arr1);
  ?>
  <p>配列の合成結果:</p>
  mergeA: <pre><?php print_r($mergedA) ?></pre>
  mergeB: <pre><?php print_r($mergedB) ?></pre>
  mergeC: <pre><?php print_r($mergedC) ?></pre>
  mergeD: <pre><?php print_r($mergedD) ?></pre>
  <?php 
    $arr3 = [
      'a' => 'value A',
      'b' => 'value B'
    ];
    $arr4 = [
      'a' => 'value C',
      'b' => 'value D',
      'c' => 'value E',
    ];
    $mergedE = $arr3 + $arr4;
    $mergedF = $arr4 + $arr3;
    $mergedG = array_merge($arr3, $arr4);
    $mergedH = array_merge($arr4, $arr3);
  ?>
  <p>連想配列の合成結果:</p>
  merged E <pre><?php print_r($mergedE)?></pre>
  merged F <pre><?php print_r($mergedF)?></pre>
  merged G <pre><?php print_r($mergedG)?></pre>
  merged H <pre><?php print_r($mergedH)?></pre>
</body>