<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">

<head>
  <meta charset="utf-8" />
  <title>Logowanie</title>
  <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>

<body class="bg-dark text-light">

  <header class="d-flex gap-5 justify-content-center my-3">
    <p>Logowanie</p>
  </header>

  <main class="container-sm" style="max-width: 400px;">
    <div class="p-3 border rounded my-3">
      <form action="<?php print (_APP_URL); ?>/app/security/login.php" method="post">
        <div class="mb-3">
          <label for="login1" class="form-label">Login</label>
          <input type="text" class="form-control" id="login1" name="login">
        </div>
        <div class="mb-3">
          <label for="password1" class="form-label">Hasło</label>
          <input type="password" class="form-control" id="password1" name="pass">
        </div>
        <button type="submit" class="btn btn-secondary">Zaloguj</button>
      </form>
    </div>

    <?php if (!empty($message)): ?>
      <div class="alert alert-danger" role="alert">
        <?= $message ?>
      </div>
    <?php endif ?>

  </main>

</body>

</html>