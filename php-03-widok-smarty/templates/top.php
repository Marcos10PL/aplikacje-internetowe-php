<?php
require_once dirname(__FILE__) . '/../config.php';
?>

<!DOCTYPE HTML>
<html>

<head>
  <title><?= $page_title ?? "Domyślny tytuł" ?></title>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
  <link rel="stylesheet" href="<?= _APP_URL ?>/assets/css/main.css" />
</head>

<body class="homepage is-preload">
  <div id="page-wrapper">

    <!-- Header -->
    <section id="header" class="wrapper">

      <!-- Logo -->
      <div id="logo">
        <h1>PHP</h1>
      </div>

      <!-- Nav -->
      <nav id="nav">
        <ul>
          <li><a href="#main">Przewiń w dół</a></li>
        </ul>
      </nav>

    </section>

    <!-- Intro -->
    <section id="intro" class="wrapper style1">
      <div class="title">Co to za strona?</div>
      <div class="container">
        <p class="style1">
          <?= $page_description ?? "Domyślny opis" ?>
        </p>
      </div>
    </section>

    <!-- Main -->
    <section id="main" class="wrapper style2">
      <div class="title"><?= $page_header ?? "Domyślny tytuł" ?></div>
      <div class="container">