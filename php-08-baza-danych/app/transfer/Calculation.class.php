<?php

namespace app\transfer;

class Calculation
{
  public $id;
  public $sum;
  public $years;
  public $interest_rate;
  public $result;

  public function __construct($id, $sum, $years, $interest_rate, $result)
  {
    $this->id = $id;
    $this->sum = $sum;
    $this->years = $years;
    $this->interest_rate = $interest_rate;
    $this->result = $result;
  }
}
