<?php
/* Smarty version 5.4.3, created on 2025-03-25 21:25:37
  from 'file:C:\Users\marek\Pulpit\php1\aplikacje-internetowe-php\php-04-05-kontroler/templates/main.html' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_67e31f514ce8e9_07917358',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b48c8be28c345289d56c25cbad28cb81a4637b5f' => 
    array (
      0 => 'C:\\Users\\marek\\Pulpit\\php1\\aplikacje-internetowe-php\\php-04-05-kontroler/templates/main.html',
      1 => 1742937845,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_67e31f514ce8e9_07917358 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\Users\\marek\\Pulpit\\php1\\aplikacje-internetowe-php\\php-04-05-kontroler\\templates';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, false);
?>
<!DOCTYPE HTML>
<html>

<head>
  <title><?php echo (($tmp = $_smarty_tpl->getValue('page_title') ?? null)===null||$tmp==='' ? "Tytuł domyślny" ?? null : $tmp);?>
</title>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
  <link rel="stylesheet" href="<?php echo $_smarty_tpl->getValue('conf')->app_url;?>
/assets/css/main.css" />
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
          <?php echo (($tmp = $_smarty_tpl->getValue('page_description') ?? null)===null||$tmp==='' ? "Opis domyślny" ?? null : $tmp);?>

        </p>
      </div>
    </section>

    <!-- Main -->
    <section id="main" class="wrapper style2">
      <div class="title"><?php echo (($tmp = $_smarty_tpl->getValue('page_title') ?? null)===null||$tmp==='' ? "Tytuł domyślny" ?? null : $tmp);?>
</div>
      <div class="container">
        <?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_17607899567e31f514c7b06_93763256', 'content');
?>

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
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->getValue('conf')->app_url;?>
/assets/js/jquery.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->getValue('conf')->app_url;?>
/assets/js/browser.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->getValue('conf')->app_url;?>
assets/js/breakpoints.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->getValue('conf')->app_url;?>
/assets/js/util.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->getValue('conf')->app_url;?>
/assets/js/main.js"><?php echo '</script'; ?>
>

</body>

</html><?php }
/* {block 'content'} */
class Block_17607899567e31f514c7b06_93763256 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\Users\\marek\\Pulpit\\php1\\aplikacje-internetowe-php\\php-04-05-kontroler\\templates';
?>
 Domyślna treść zawartości .... <?php
}
}
/* {/block 'content'} */
}
