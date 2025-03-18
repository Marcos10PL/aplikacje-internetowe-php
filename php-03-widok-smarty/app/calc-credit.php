<?php
require_once dirname(__FILE__) . '/../config.php';

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


$calcForm = array();
$requiredFields = ['sum', 'years', 'interest-rate'];

$message = null;
$result = null;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  getParams($calcForm, $requiredFields);
  if (validate($calcForm, $requiredFields, $message)) {
    $result = process($calcForm);
  }
} 

$page_title = 'Kalkulator kredytowy';
$page_description = 'Tu możesz obliczyć swoją miesięczną ratę kredytu';
$page_header = 'Kalkulator kredytowy';

include _ROOT_PATH . '/app/calc-credit_view.php';