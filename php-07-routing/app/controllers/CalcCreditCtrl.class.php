<?php
namespace app\controllers;

use app\forms\CalcCreditForm;
use app\transfer\CalcCreditResult;

class CalcCreditCtrl
{
  private $form;
  private $result;

  public function __construct()
  {
    $this->form = new CalcCreditForm();
    $this->result = new CalcCreditResult();
  }

  private function getParams()
  {
    $this->form->sum = getFromRequest('sum');
    $this->form->years = getFromRequest('years');
    $this->form->interestRate = getFromRequest('interest-rate');
  }

  private function validate()
  {
    if ($this->form->sum == null || $this->form->years == null || $this->form->interestRate == null) {
      getMessages()->addError('Wypełnij wszystkie pola');
      return false;
    }

    if (!is_numeric($this->form->sum) || !is_numeric($this->form->years) || !is_numeric($this->form->interestRate)) {
      getMessages()->addError('Wszystkie wartości muszą być liczbami');
      return false;
    }

    $this->form->sum = floatval($this->form->sum);
    $this->form->years = floatval($this->form->years);
    $this->form->interestRate = floatval($this->form->interestRate);

    if ($this->form->sum <= 0 || $this->form->years <= 0 || $this->form->interestRate <= 0) {
      getMessages()->addError('Wszystkie wartości muszą być większe od zera');
      return false;
    }

    return true;
  }

  public function action_calcCreditCompute()
  {
    $this->getParams();

    if ($this->validate()) {
      $this->result->result = round(($this->form->sum + $this->form->sum * $this->form->interestRate / 100) / ($this->form->years * 12), 2);

      getMessages()->addInfo('Obliczenia wykonano poprawnie');
    }

    $this->generateView();
  }

  public function action_calcCreditShow()
  {
    $this->generateView();
  }

  private function generateView()
  {
    getSmarty()->assign('page_title', 'Kalkulator kredytowy');
    getSmarty()->assign('page_description', 'Tu możesz obliczyć swoją miesięczną ratę kredytu');
    getSmarty()->assign('page_header', 'Kalkulator kredytowy');

    getSmarty()->assign('form', $this->form);
    getSmarty()->assign('result', $this->result->result);
    getSmarty()->assign('messages', getMessages());

    getSmarty()->display('CalcCredit.tpl');
  }
}