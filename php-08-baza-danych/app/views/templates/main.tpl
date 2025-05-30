<!DOCTYPE HTML>
<html>

<head>
  <title>{$page_title|default:"Tytuł domyślny"}</title>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
  <link rel="stylesheet" href="{$conf->app_url}/assets/css/main.css" />
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
          {if (isset($displayLogout))}
            <li><a href="#main">Przewiń w dół</a></li>
          {else}
            <li><a href="{$conf->action_url}logout#main">wyloguj</a></li>
          {/if}
        </ul>
      </nav>

    </section>

    <!-- Intro -->

    <section id="intro" class="wrapper style1">
      <div class="title">Co to za strona?</div>
      <div class="container">
        <p class="style1">
          {$page_description|default:"Opis domyślny"}
        </p>
      </div>
    </section>

    <!-- Main -->
    <section id="main" class="wrapper style2">
      <div class="title">{$page_title|default:"Tytuł domyślny"}</div>
      <div class="container">
        {block name=content} Domyślna treść zawartości .... {/block}
      </div>
    </section>

    <!-- Footer -->
    <section id="footer" class="wrapper">
      <div id="copyright">
        <ul>
          <li>2025 &copy; Marek Kramarczyk</li>
          <li>Design: <a href="https://html5up.net">HTML5 UP</a></li>
          <li>Demo Images: <a href="http://ineedchemicalx.deviantart.com/">Felicia Simion</a></li>
        </ul>
      </div>
    </section>

  </div>

  <!-- Scripts -->
  <script src="{$conf->app_url}/assets/js/jquery.min.js"></script>
  <script src="{$conf->app_url}/assets/js/browser.min.js"></script>
  <script src="{$conf->app_url}assets/js/breakpoints.min.js"></script>
  <script src="{$conf->app_url}/assets/js/util.js"></script>
  <script src="{$conf->app_url}/assets/js/main.js"></script>

</body>

</html>