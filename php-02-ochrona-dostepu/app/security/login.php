<?php
require_once dirname(__FILE__) . '/../../config.php';

function getParamsLogin(&$form, &$requiredFields)
{
  foreach ($requiredFields as $field) {
    $form[$field] = $_REQUEST[$field] ?? '';
  }
}

function validateLogin(&$form, &$message)
{
  $login = $form['login'];
  $pass = $form['pass'];

  if (empty($login) || empty($pass)) {
    $message = 'Wypełnij wszystkie pola';
    return false;
  }

  if ($login == "admin" && $pass == "admin") {
    session_start();
    $_SESSION['role'] = 'admin';
    return true;
  }
  if ($login == "user" && $pass == "user") {
    session_start();
    $_SESSION['role'] = 'user';
    return true;
  }

  $message = 'Niepoprawny login lub hasło';
  return false;
}

$form = array();
$requiredFields = ['login', 'pass'];
$message = null;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  getParamsLogin($form, $requiredFields);

  if (!validateLogin($form, $message)) {
    include _ROOT_PATH . '/app/security/login_view.php';
  } else {
    header("Location: " . _APP_URL);
  }
} else {
  include _ROOT_PATH . '/app/security/login_view.php';
}