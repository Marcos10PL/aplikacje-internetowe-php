<?php

namespace app\controllers;

use app\transfer\User;
use app\forms\LoginForm;

class LoginCtrl
{
  private $form;

  public function __construct()
  {
    $this->form = new LoginForm();
  }

  public function getParams()
  {
    $this->form->login = getFromRequest('login');
    $this->form->pass = getFromRequest('pass');
  }

  public function validate()
  {
    if (!isset($this->form->login) || !isset($this->form->pass))
      return false;

    if (!getMessages()->isError()) {
      if ($this->form->login == "")
        getMessages()->addError('Nie podano loginu');

      if ($this->form->pass == "")
        getMessages()->addError('Nie podano hasła');
    }

    if (!getMessages()->isError()) {

      try {
        $user = getDB()->get("users", ["id", "name", "role"], [
          "name" => $this->form->login,
          "pass" => $this->form->pass
        ]);

        if ($user) {
          $user = new User($user['id'], $user['name'], $user['role']);
          $_SESSION['user'] = serialize($user);
          addRole($user->role);
        } else {
          getMessages()->addError('Niepoprawny login lub hasło');
        }

      } catch (\PDOException $e) {
        getMessages()->addError('Wystąpił błąd podczas logowania');
        if (getConf()->debug)
          getMessages()->addError($e->getMessage());
      }
    }

    return !getMessages()->isError();
  }

  public function action_login()
  {
    $this->getParams();

    if ($this->validate()) {
      header("Location: " . getConf()->app_url . "/");
    } else {
      $this->generateView();
    }
  }

  public function action_logout()
  {
    session_destroy();
    getMessages()->addInfo('Poprawnie wylogowano z systemu');
    $this->generateView();
  }

  public function generateView()
  {
    getSmarty()->assign('page_title', 'Logowanie');
    getSmarty()->assign('page_description', 'Logowanie do systemu - kalkulator kredytowy');
    getSmarty()->assign('page_header', 'Kalkulator kredytowy');

    getSmarty()->assign('messages', getMessages());
    getSmarty()->assign('form', $this->form);
    getSmarty()->assign('displayLogout', false);

    getSmarty()->display('Login.tpl');
  }
}