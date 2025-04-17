<?php
namespace app\controllers;

use app\forms\CalcCreditForm;
use app\transfer\CalcCreditResult;
use app\transfer\Calculation;

class CalcCreditCtrl
{
  private $form;
  private $result;
  private $creditList;

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

  public function action_deleteCalculation()
  {
    $id = getFromRequest('id');
    $user = unserialize($_SESSION['user']);

    if (!$id || !is_numeric($id)) {
      getMessages()->addError("Nieprawidłowe ID rekordu.");
      $this->generateView();
      return;
    }

    try {
      $deleted = getDB()->delete("results", [
        "AND" => [
          "id" => $id,
          "user_id" => $user->id
        ]
      ]);

      if ($deleted->rowCount() > 0) {
        getMessages()->addInfo("Rekord został usunięty.");
      } else {
        getMessages()->addError("Nie znaleziono rekordu lub brak uprawnień.");
      }
    } catch (\PDOException $e) {
      getMessages()->addError("Błąd podczas usuwania rekordu.");
      if (getConf()->debug)
        getMessages()->addError($e->getMessage());
    }

    $this->generateView();
  }


  public function action_calcCreditCompute()
  {
    $this->getParams();

    if ($this->validate()) {
      $this->result->result = round(($this->form->sum + $this->form->sum * $this->form->interestRate / 100) / ($this->form->years * 12), 2);

      getMessages()->addInfo('Obliczenia wykonano poprawnie');

      try {
        $user = unserialize($_SESSION['user']);
        getDB()->insert("results", [
          "user_id" => $user->id,
          "sum" => $this->form->sum,
          "years" => $this->form->years,
          "interest-rate" => $this->form->interestRate,
          "result" => $this->result->result
        ]);

      } catch (\PDOException $e) {
        getMessages()->addError("Błąd zapisu do bazy danych");
        if (getConf()->debug)
          getMessages()->addError($e->getMessage());
      }
    }

    $this->generateView();
  }

  public function action_calcCreditShow()
  {
    $this->generateView();
  }

  private function getList()
  {
    $user = unserialize($_SESSION['user']);
    $historyRaw = getDB()->select("results", ["id", "sum", "years", "interest-rate", "result"], [
      "user_id" => $user->id,
    ]);

    $history = [];
    foreach ($historyRaw as $row) {
      $history[] = new Calculation(
        $row['id'],
        $row['sum'],
        $row['years'],
        $row['interest-rate'],
        $row['result'],
      );
    }
    return $history;
  }

  private function generateView()
  {
    getSmarty()->assign('page_title', 'Kalkulator kredytowy');
    getSmarty()->assign('page_description', 'Tu możesz obliczyć swoją miesięczną ratę kredytu');
    getSmarty()->assign('page_header', 'Kalkulator kredytowy');

    getSmarty()->assign('form', $this->form);
    getSmarty()->assign('result', $this->result->result);
    getSmarty()->assign('messages', getMessages());

    getSmarty()->assign('history', $this->getList());
    getSmarty()->display('CalcCredit.tpl');
  }
}