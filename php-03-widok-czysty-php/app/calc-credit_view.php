<?php
require_once dirname(__FILE__) . "/../config.php";

include_once _ROOT_PATH . '/templates/top.php';
?>

<form method="post" action="<?= _APP_URL ?>/app/calc-credit.php#main">
  <div class="row gtr-50 aln-center">
    <div class="col-7 col-12-small">
      <input type="number" name="sum" step="any" value="<?= $calcForm['sum'] ?? '' ?>" placeholder="Kwota" />
    </div>
    <div class="col-7 col-12-small">
      <input type="number" name="years" step="any" value="<?= $calcForm['years'] ?? '' ?>" placeholder="Lata" />
    </div>
    <div class="col-7 col-12-small">
      <input type="number" name="interest-rate" step="any" value="<?= $calcForm['interest-rate'] ?? '' ?>"
        placeholder="Oprocentowanie" />
    </div>
    <div class="col-7 col-12-small">
      <input type="submit" class="style1" value="Oblicz" />
    </div>
  </div>
</form>

<div style="text-align: center;">
  <?php if (!empty($message)): ?>
    <div style="color: firebrick; font-size: 1.4rem; text-transform: uppercase;">
      <?= $message ?>
    </div>
  <?php endif ?>

  <?php if (!empty($result)): ?>
    <div style="color: forestgreen; font-size: 1.4rem; text-transform: uppercase;">
      <?= "Miesięczna rata: $result" ?>
    </div>
  <?php endif ?>
</div>
</div>


<?php
include_once _ROOT_PATH . '/templates/bottom.php';
?>