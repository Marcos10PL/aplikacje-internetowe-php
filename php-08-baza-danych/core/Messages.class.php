<?php

namespace core;

class Messages
{
  private $errors = array();
  private $infos = array();

  public function addError($message)
  {
    $this->errors[] = $message;
  }

  public function addInfo($message)
  {
    $this->infos[] = $message;
  }

  public function isEmpty()
  {
    return count($this->errors) === 0 && count($this->infos) === 0;
  }

  public function isError()
  {
    return count($this->errors) > 0;
  }

  public function isInfo()
  {
    return count($this->infos) > 0;
  }

  public function getErrors()
  {
    return $this->errors;
  }

  public function getInfos()
  {
    return $this->infos;
  }

  public function clear()
  {
    $this->errors = array();
    $this->infos = array();
  }
}