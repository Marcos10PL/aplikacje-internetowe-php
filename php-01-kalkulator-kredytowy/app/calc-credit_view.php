<?php require_once dirname(__FILE__) . "/../config.php"; ?>

<!DOCTYPE html>
<html lang="pl">

<head>
  <meta charset="utf-8" />
  <title>Kalkulator - wyliczanie rat</title>
</head>

<body>

  <form action="<?= _APP_URL ?>/app/calc-credit.php" method="post">
    <input type="number" name="sum" step="any" value="<?= $sum ?? '' ?>" placeholder="podaj kwotę..." /><br />
    <input type="number" name="years" step="any" value="<?= $years ?? '' ?>" placeholder="podaj lata..." /><br />
    <input type="number" name="interest-rate" step="any" value="<?= $interestRate ?? '' ?>"
      placeholder="podaj oprocentowanie..." /><br />
    <button>Oblicz ratę</button>
  </form>

  <?php if (isset($messages)): ?>
    <ol style="margin: 1rem 0; padding: 1rem 2rem; border-radius: 5px; background-color: #f88; width:300px;">
      <?php foreach ($messages as $msg): ?>
        <li><?= $msg ?></li>
      <?php endforeach; ?>
    </ol>
  <?php endif; ?>

  <?php if (isset($result)): ?>
    <div style="margin: 1rem 0; padding: 1rem 2rem; border-radius: 5px; background-color: #ff0; width:300px;">
      <?= "Miesięczna rata: $result" ?>
    </div>
  <?php endif ?>

</body>

</html>