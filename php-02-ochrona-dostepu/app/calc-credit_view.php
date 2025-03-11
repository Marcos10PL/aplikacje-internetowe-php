<?php
require_once dirname(__FILE__) . "/../config.php";
include_once _ROOT_PATH . "/app/security/check.php";
?>

<!DOCTYPE html>
<html lang="pl">

<head>
  <meta charset="utf-8" />
  <title>Kalkulator - wyliczanie rat</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>

<body class="bg-dark text-light">

  <header class="d-flex gap-5 justify-content-center my-3">
    <p>Kalkulator - wyliczanie rat</p>
    <a class="link link-info" href="<?php print (_APP_ROOT); ?>/app/security/logout.php">Wyloguj</a>
  </header>

  <main class="container-sm" style="max-width: 400px;">

    <div class="p-3 border rounded my-3">
      <form action="<?= _APP_URL ?>/app/calc-credit.php" method="post">
        <div class="mb-3">
          <label for="nr1" class="form-label">Kwota</label>
          <input type="number" name="sum" step="any" value="<?= $calcForm['sum'] ?? '' ?>" class="form-control"
            id="nr1">
        </div>
        <div class="mb-3">
          <label for="nr2" class="form-label">Lata</label>
          <input type="number" name="years" step="any" value="<?= $calcForm['years'] ?? '' ?>" class="form-control"
            id="nr2">
        </div>
        <div class="mb-3">
          <label for="nr3" class="form-label">Oprocentowanie</label>
          <input type="number" name="interest-rate" step="any" value="<?= $calcForm['interest-rate'] ?? '' ?>"
            class="form-control" id="nr3">
        </div>
        <button type="submit" class="btn btn-secondary">Oblicz ratę</button>
      </form>
    </div>

    <div class="d-flex flex-column align-items-center">
      <?php if (!empty($message)): ?>
        <div class="alert alert-danger" role="alert">
          <?= $message ?>
        </div>
      <?php endif ?>

      <?php if (!empty($result)): ?>
        <div class="alert alert-success" role="alert">
          <?= "Miesięczna rata: $result" ?>
        </div>
      <?php endif ?>
    </div>

  </main>

</body>

</html>