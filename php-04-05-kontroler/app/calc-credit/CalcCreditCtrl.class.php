<?php
require_once $conf->root_path . '/lib/smarty/libs/Smarty.class.php';
require_once $conf->root_path . '/app/calc-credit/CalcCreditForm.class.php';
require_once $conf->root_path . '/app/calc-credit/CalcCreditResult.class.php';
require_once $conf->root_path . '/lib/my/Messages.class.php';

class CalcCreditCtrl
{
  private $form;
  private $messages;
  private $result;

  public function __construct()
  {
    $this->form = new CalcCreditForm();
    $this->messages = new Messages();
    $this->result = new CalcCreditResult();
  }

  private function getParams()
  {
    $this->form->sum = $_REQUEST['sum'] ?? null;
    $this->form->years = $_REQUEST['years'] ?? null;
    $this->form->interestRate = $_REQUEST['interest-rate'] ?? null;
  }

  private function validate()
  {
    if ($this->form->sum == null || $this->form->years == null || $this->form->interestRate == null) {
      $this->messages->addError('Wypełnij wszystkie pola');
      return false;
    }

    if (!is_numeric($this->form->sum) || !is_numeric($this->form->years) || !is_numeric($this->form->interestRate)) {
      $this->messages->addError('Wszystkie wartości muszą być liczbami');
      return false;
    }

    $this->form->sum = floatval($this->form->sum);
    $this->form->years = floatval($this->form->years);
    $this->form->interestRate = floatval($this->form->interestRate);

    if ($this->form->sum <= 0 || $this->form->years <= 0 || $this->form->interestRate <= 0) {
      $this->messages->addError('Wszystkie wartości muszą być większe od zera');
      return false;
    }

    return true;
  }

  public function process()
  {
    $this->getParams();

    if ($this->validate()) {
      $this->result->result = round(($this->form->sum + ($this->form->sum * $this->form->interestRate / 100)) / ($this->form->years * 12), 2);

      $this->messages->addInfo('Obliczenia wykonano poprawnie');
    }

    $this->generateView();
  }

  public function generateView()
  {
    global $conf;

    $smarty = new Smarty\Smarty();

    $smarty->assign('conf', $conf);

    $smarty->assign('page_title', 'Kalkulator kredytowy');
    $smarty->assign('page_description', 'Tu możesz obliczyć swoją miesięczną ratę kredytu');
    $smarty->assign('page_header', 'Kalkulator kredytowy');

    $smarty->assign('form', $this->form);
    $smarty->assign('messages', $this->messages);
    $smarty->assign('result', $this->result->result);

    $smarty->display($conf->root_path . '/app/calc-credit/calc-credit.html');
  }
}