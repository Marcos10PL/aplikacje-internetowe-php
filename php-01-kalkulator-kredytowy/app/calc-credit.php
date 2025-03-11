<?php
require_once dirname(__FILE__) . '/../config.php';

$sum = $_REQUEST['sum'] ?? '';
$years = $_REQUEST['years'] ?? '';
$interestRate = $_REQUEST['interest-rate'] ?? '';

if ($sum === '')
  $messages[] = 'Nie podano kwoty';

if ($years === '')
  $messages[] = 'Nie podano lat';

if ($interestRate === '')
  $messages[] = 'Nie podano oprocentowania';

if (empty($messages)) {
  if (!is_numeric($sum))
    $messages[] = 'Kwota nie jest liczbą';

  if (!is_numeric($years))
    $messages[] = 'Lata nie są liczbą';

  if (!is_numeric($interestRate))
    $messages[] = 'Oprocentowanie nie jest liczbą';
}

if (empty($messages)) {
  $sum = floatval($sum);
  $years = floatval($years);
  $interestRate = floatval($interestRate);
}

if (empty($messages)) {
  if ($sum <= 0)
    $messages[] = 'Kwota musi być dodatnia';

  if ($years <= 0)
    $messages[] = 'Lata muszą być dodatnie';

  if ($interestRate <= 0)
    $messages[] = 'Oprocentowanie musi być dodatnie';
}

if (empty($messages))
  $result = round(($sum + ($sum * $interestRate / 100)) / ($years * 12), 2);

include _ROOT_PATH . '/app/calc-credit_view.php';