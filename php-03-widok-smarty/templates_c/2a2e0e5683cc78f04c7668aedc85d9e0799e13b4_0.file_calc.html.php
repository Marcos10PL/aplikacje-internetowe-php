<?php
/* Smarty version 5.4.3, created on 2025-03-25 07:05:39
  from 'file:C:\Users\marek\Pulpit\php1\aplikacje-internetowe-php\php-03-widok-smarty/app/calc.html' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_67e255c36a7bd5_42839848',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2a2e0e5683cc78f04c7668aedc85d9e0799e13b4' => 
    array (
      0 => 'C:\\Users\\marek\\Pulpit\\php1\\aplikacje-internetowe-php\\php-03-widok-smarty/app/calc.html',
      1 => 1742720982,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_67e255c36a7bd5_42839848 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\Users\\marek\\Pulpit\\php1\\aplikacje-internetowe-php\\php-03-widok-smarty\\app';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_145687931167e255c3578309_90239647', 'content');
$_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "../templates/main.html", $_smarty_current_dir);
}
/* {block 'content'} */
class Block_145687931167e255c3578309_90239647 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\Users\\marek\\Pulpit\\php1\\aplikacje-internetowe-php\\php-03-widok-smarty\\app';
?>


<form method="post" action="<?php echo $_smarty_tpl->getValue('app_url');?>
/app/calc-credit.php#main">
  <div class="row gtr-50 aln-center">
    <div class="col-7 col-12-small">
      <input type="number" name="sum" step="any" value="<?php echo $_smarty_tpl->getValue('calcForm')['sum'];?>
" placeholder="Kwota" />
    </div>
    <div class="col-7 col-12-small">
      <input type="number" name="years" step="any" value="<?php echo $_smarty_tpl->getValue('calcForm')['years'];?>
" placeholder="Lata" />
    </div>
    <div class="col-7 col-12-small">
      <input type="number" name="interest-rate" step="any" value="<?php echo $_smarty_tpl->getValue('calcForm')['interest-rate'];?>
"
        placeholder="Oprocentowanie" />
    </div>
    <div class="col-7 col-12-small">
      <input type="submit" class="style1" value="Oblicz" />
    </div>
  </div>
</form>

<div style="text-align: center;">
  <?php if (!( !$_smarty_tpl->hasVariable('message') || empty($_smarty_tpl->getValue('message')))) {?>
    <div style="color: firebrick; font-size: 1.2rem; text-transform: uppercase;">
      <?php echo $_smarty_tpl->getValue('message');?>

    </div>
  <?php }?>

  <?php if (!( !$_smarty_tpl->hasVariable('result') || empty($_smarty_tpl->getValue('result')))) {?>
    <div style="color: forestgreen; font-size: 1.2rem; text-transform: uppercase;">
      Miesięczna rata: <?php echo $_smarty_tpl->getValue('result');?>

    </div>
  <?php }?>
</div>
</div>

<?php
}
}
/* {/block 'content'} */
}
