<?php
/* Smarty version 5.4.3, created on 2025-04-17 10:01:29
  from 'file:main.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_6800b55974d317_31927818',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '05f9457ce0d8ad2650c8e4bb4d09d6f1869c3a7b' => 
    array (
      0 => 'main.tpl',
      1 => 1744041792,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6800b55974d317_31927818 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\php-08-baza-danych\\app\\views\\templates';
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
          <?php if (((true && ($_smarty_tpl->hasVariable('displayLogout') && null !== ($_smarty_tpl->getValue('displayLogout') ?? null))))) {?>
            <li><a href="#main">Przewiń w dół</a></li>
          <?php } else { ?>
            <li><a href="<?php echo $_smarty_tpl->getValue('conf')->action_url;?>
logout#main">wyloguj</a></li>
          <?php }?>
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
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_16592082276800b55974aaf4_46048524', 'content');
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
class Block_16592082276800b55974aaf4_46048524 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\php-08-baza-danych\\app\\views\\templates';
?>
 Domyślna treść zawartości .... <?php
}
}
/* {/block 'content'} */
}
