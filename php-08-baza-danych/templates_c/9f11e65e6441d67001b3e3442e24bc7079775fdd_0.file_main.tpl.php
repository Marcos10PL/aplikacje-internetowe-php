<?php
/* Smarty version 5.4.3, created on 2025-04-01 07:26:30
  from 'file:main.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_67eb952698daf5_07227428',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9f11e65e6441d67001b3e3442e24bc7079775fdd' => 
    array (
      0 => 'main.tpl',
      1 => 1742937950,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_67eb952698daf5_07227428 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\Users\\marek\\Pulpit\\php1\\aplikacje-internetowe-php\\php-06-struktura-i-namespaces\\app\\views\\templates';
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
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_40176990467eb9526975fe7_53468226', 'content');
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
class Block_40176990467eb9526975fe7_53468226 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\Users\\marek\\Pulpit\\php1\\aplikacje-internetowe-php\\php-06-struktura-i-namespaces\\app\\views\\templates';
?>
 Domyślna treść zawartości .... <?php
}
}
/* {/block 'content'} */
}
