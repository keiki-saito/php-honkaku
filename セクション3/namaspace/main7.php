<?php declare(strict_types=1); ?>
<body>
  <?php 
    require_once dirname(__FILE__) . '/office/word/Writer.php';
    require_once dirname(__FILE__) . '/office/excel/Writer.php';
    use Office\Word\Writer as WordWriter;
    use Office\Excel\Writer as ExcelWriter;

    $writer = new WordWriter();
    $writer->write();

    $writer = new ExcelWriter();
    $writer->write();
  ?>
</body>