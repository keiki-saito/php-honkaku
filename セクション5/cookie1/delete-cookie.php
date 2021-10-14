<?php 
declare(strict_types=1);
setcookie('name1', 'value1', time() + 60 * 60, '/', '', false, true);
// クッキーを削除するには,setcookie関数の第3引数に過去の日時を指定する。
setcookie('name1', '', time() + 60 * 60, '/' , '', false, true);
?>
<body>
  <p>PHPからクッキーを送出したあと、すぐに削除しました。</p>
</body>