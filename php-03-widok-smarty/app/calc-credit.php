<?php
require_once dirname(__FILE__) . '/../config.php';

require_once _ROOT_PATH . '/lib/smarty/libs/Smarty.class.php';

function getParams(&$calcForm, &$requiredFields)
{
  foreach ($requiredFields as $field) {
    $calcForm[$field] = $_REQUEST[$field] ?? '';
  }
}

function validate(&$calcForm, &$requiredFields, &$message)
{
  foreach ($requiredFields as $requiredField) {
    if (empty($calcForm[$requiredField])) {
      $message = 'Wypełnij wszystkie pola';
      return false;
    }

    if (!is_numeric($calcForm[$requiredField])) {
      $message = "Wszystkie wartości muszą być liczbą";
      return false;
    }

    $calcForm[$requiredField] = floatval($calcForm[$requiredField]);

    if ($calcForm[$requiredField] <= 0) {
      $message = "Wszystkie wartości muszą być większe od zera";
      return false;
    }
  }

  return true;
}

function process(&$calcForm)
{
  return round(($calcForm['sum'] + ($calcForm['sum'] * $calcForm['interest-rate'] / 100)) / ($calcForm['years'] * 12), 2);
}

$requiredFields = ['sum', 'years', 'interest-rate'];
$calcForm = array_fill_keys($requiredFields, ''); 

$message = null;
$result = null;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  getParams($calcForm, $requiredFields);
  if (validate($calcForm, $requiredFields, $message)) {
    $result = process($calcForm);
  }
}

$smarty = new Smarty\Smarty();

$smarty->assign('root_path', _ROOT_PATH);
$smarty->assign('app_url', _APP_URL);
$smarty->assign('page_title', 'Kalkulator kredytowy');
$smarty->assign('page_description', 'Tu możesz obliczyć swoją miesięczną ratę kredytu');
$smarty->assign('page_header', 'Kalkulator kredytowy');

$smarty->assign('calcForm', $calcForm);
$smarty->assign('result', $result);
$smarty->assign('message', $message);

$smarty->display(_ROOT_PATH . '/app/calc.html');