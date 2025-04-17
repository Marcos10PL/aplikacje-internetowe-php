<?php
/* Smarty version 5.4.3, created on 2025-04-17 10:01:29
  from 'file:Login.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_6800b5596d12b5_61448010',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ef97c3bd247309c0da792aafaac0685a2b3de6aa' => 
    array (
      0 => 'Login.tpl',
      1 => 1744041869,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:messages.tpl' => 1,
  ),
))) {
function content_6800b5596d12b5_61448010 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\php-08-baza-danych\\app\\views';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_13577358606800b5596a4510_76326896', 'content');
$_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "main.tpl", $_smarty_current_dir);
}
/* {block 'content'} */
class Block_13577358606800b5596a4510_76326896 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\php-08-baza-danych\\app\\views';
?>


<form action="<?php echo $_smarty_tpl->getValue('conf')->action_url;?>
login#main" method="post" class="pure-form pure-form-aligned bottom-margin">
  <div class="row gtr-50 aln-center">
    <div class="col-7 col-12-small">
      <input type="text" name="login" placeholder="Login" />
    </div>
    <div class="col-7 col-12-small">
      <input type="password" name="pass" placeholder="Hasło"  />
    </div>
    <div class="col-7 col-12-small">
      <input type="submit" class="style1" value="Zaloguj" />
    </div>
  </div>
</form>

<?php $_smarty_tpl->renderSubTemplate('file:messages.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>

<?php
}
}
/* {/block 'content'} */
}
