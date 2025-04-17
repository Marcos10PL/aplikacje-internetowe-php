<?php
/* Smarty version 5.4.3, created on 2025-04-07 16:01:52
  from 'file:CalcCredit.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_67f3f6f02bd756_17775041',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6a8b0e2cfc76745101af589bac567ad4820431de' => 
    array (
      0 => 'CalcCredit.tpl',
      1 => 1744041711,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:messages.tpl' => 1,
  ),
))) {
function content_67f3f6f02bd756_17775041 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\Users\\marek\\Pulpit\\php1\\aplikacje-internetowe-php\\php-07-routing\\app\\views';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_121249622067f3f6f02af229_84142875', 'content');
$_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "main.tpl", $_smarty_current_dir);
}
/* {block 'content'} */
class Block_121249622067f3f6f02af229_84142875 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\Users\\marek\\Pulpit\\php1\\aplikacje-internetowe-php\\php-07-routing\\app\\views';
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

<?php $_smarty_tpl->renderSubTemplate('file:messages.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>

<?php if (!( !$_smarty_tpl->hasVariable('result') || empty($_smarty_tpl->getValue('result')))) {?>
  <div style="color: forestgreen; font-size: 1.2rem; text-transform: uppercase; text-align: center; margin-top: 10px;">
    Miesięczna rata: <?php echo $_smarty_tpl->getValue('result');?>

  </div>
<?php }?>

<?php
}
}
/* {/block 'content'} */
}
