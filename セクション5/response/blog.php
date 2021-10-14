<?php 
  declare(strict_types=1);

  $articles = [
    1001 => 'シンガポール料理を食べてきました',
    1002 => 'PHPとJavaScriptの連携について',
    1003 => '演劇を見てきました',
    1005 => 'Japan IT Weekの見学'
  ];

  if(!isset($_GET['articleId']) || !isset($articles[$_GET['articleId']])){
    header('HTTP/1.1 404 Not Found');
    echo 'エラー:お探しのブログは記事は見つかりませんでした。';
    return;
  }
?>
<body>
  ブログ記事 「<?=$articles[$_GET['articleId']];?>」
</body>