<?php
require_once dirname(__FILE__) . '/../config.php';

$action = isset($_REQUEST['action']) ? $_REQUEST['action'] : '';

switch ($action) {
  case 'calcCreditCompute':
    require_once $conf->root_path . '/app/calc-credit/CalcCreditCtrl.class.php';
    $ctrl = new CalcCreditCtrl();
    $ctrl->process();
    break;

  default:
    require_once $conf->root_path . '/app/calc-credit/CalcCreditCtrl.class.php';
    $ctrl = new CalcCreditCtrl();
    $ctrl->generateView();
    break;
}
