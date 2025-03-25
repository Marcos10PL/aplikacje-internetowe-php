<?php
/* Smarty version 5.4.3, created on 2025-03-25 21:23:20
  from 'file:C:\Users\marek\Pulpit\php1\aplikacje-internetowe-php\php-04-05-kontroler/app/calc-credit/calc-credit.html' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_67e31ec88164b5_75703247',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8238112744df5e7e6899ab2c7bbbcd1fdbc0d8a4' => 
    array (
      0 => 'C:\\Users\\marek\\Pulpit\\php1\\aplikacje-internetowe-php\\php-04-05-kontroler/app/calc-credit/calc-credit.html',
      1 => 1742937796,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_67e31ec88164b5_75703247 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\Users\\marek\\Pulpit\\php1\\aplikacje-internetowe-php\\php-04-05-kontroler\\app\\calc-credit';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_172538947967e31ec88038b4_61946312', 'content');
$_smarty_tpl->getInheritance()->endChild($_smarty_tpl, ($_smarty_tpl->getValue('conf')->root_path).("/templates/main.html"), $_smarty_current_dir);
}
/* {block 'content'} */
class Block_172538947967e31ec88038b4_61946312 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\Users\\marek\\Pulpit\\php1\\aplikacje-internetowe-php\\php-04-05-kontroler\\app\\calc-credit';
?>


<form method="post" action="<?php echo $_smarty_tpl->getValue('conf')->action_root;?>
calcCreditCompute#main">
  <div class="row gtr-50 aln-center">
    <div class="col-7 col-12-small">
      <input type="number" name="sum" step="any" value="<?php echo $_smarty_tpl->getValue('form')->sum;?>
" placeholder="Kwota" />
    </div>
    <div class="col-7 col-12-small">
      <input type="number" name="years" step="any" value="<?php echo $_smarty_tpl->getValue('form')->years;?>
" placeholder="Lata" />
    </div>
    <div class="col-7 col-12-small">
      <input type="number" name="interest-rate" step="any" value="<?php echo $_smarty_tpl->getValue('form')->interestRate;?>
" placeholder="Oprocentowanie" />
    </div>
    <div class="col-7 col-12-small">
      <input type="submit" class="style1" value="Oblicz" />
    </div>
  </div>
</form>

<div style="text-align: center;">
  <?php if ($_smarty_tpl->getValue('messages')->isError()) {?>
  <div style="color: firebrick; font-size: 1.2rem; text-transform: uppercase;">
    <ol style="list-style-type: none;">
      <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('messages')->getErrors(), 'err');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('err')->value) {
$foreach0DoElse = false;
?>
      <li><?php echo $_smarty_tpl->getValue('err');?>
</li>
      <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
    </ol>
  </div>
  <?php }?>
  
  <?php if ($_smarty_tpl->getValue('messages')->isInfo()) {?>
  <div style="color: rgb(175, 219, 52); font-size: 1.2rem; text-transform: uppercase;">
    <ol style="list-style-type: none;">
      <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('messages')->getInfos(), 'inf');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('inf')->value) {
$foreach1DoElse = false;
?>
      <li><?php echo $_smarty_tpl->getValue('inf');?>
</li>
      <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
    </ol>
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
