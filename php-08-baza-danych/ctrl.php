<?php
require_once 'init.php';

getRouter()->setDefaultRoute('calcCreditShow');
getRouter()->setLoginRoute('login');

getRouter()->addRoute('calcCreditShow', 'CalcCreditCtrl', ['user', 'admin']);
getRouter()->addRoute('calcCreditCompute', 'CalcCreditCtrl', ['user', 'admin']);
getRouter()->addRoute('deleteCalculation', 'CalcCreditCtrl', ['user', 'admin']);
getRouter()->addRoute('login', 'LoginCtrl');
getRouter()->addRoute('logout', 'LoginCtrl', ['user', 'admin']);


getRouter()->go();