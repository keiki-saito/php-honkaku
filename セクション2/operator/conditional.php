<pre>
  <?php 
    // 三項演算子を用いた例(1)
    $greeting = null;
    $message = $greeting === null ? 'Hello' : $greeting;
    echo 'あいさつは',$message,PHP_EOL;

    // 三項演算子を用いた例(2)
    $greeting = 'Good Morning';
    $message = $greeting === null ? 'Hello': $greeting;
    echo 'あいさつは',$message,PHP_EOL;

    // null合体演算子を用いた例(1)
    $greeting = null;
    $message = $greeting ?? 'Hello';
    echo 'あいさつは',$message,PHP_EOL;

    // null合体演算子を用いた例(2)
    $greeting = 'Good Morning';
    $message = $greeting ?? 'Hello';
    echo 'あいさつは',$message,PHP_EOL;
  ?>

</pre>