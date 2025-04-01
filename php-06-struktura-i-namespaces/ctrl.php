<?php
require_once 'init.php';

switch ($action) {
  case 'calcCreditCompute':
    $ctrl = new app\controllers\CalcCreditCtrl();
    $ctrl->process();
    break;

  default:
    $ctrl = new app\controllers\CalcCreditCtrl();
    $ctrl->generateView();
    break;
}
