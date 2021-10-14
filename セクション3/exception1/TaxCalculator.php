<?php 
declare(strict_types=1);

class TaxCalculator
{
  private $lastCalculated;

  public function calculate(int $price, float $tax)
  {
    echo '計算を開始します<br>';

    if($tax < 0){
      throw new Exception('税率はマイナスであってはなりません<br>');
    }

    echo '計算を終了します<br>';
    $this->lastCalculated = $calculated = $price + $price * $tax;
    return $calculated;
  }

  public function reset():void
  {
    $this->lastCalculated = null;
    echo '計算結果をリセットしました<br>';
  }
}

?>