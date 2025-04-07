<?php
/* Smarty version 5.4.3, created on 2025-04-07 16:04:30
  from 'file:Login.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_67f3f78e6f2712_81876797',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'baed22c4db3138d83b793d4a3739a2fedd400d81' => 
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
function content_67f3f78e6f2712_81876797 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\Users\\marek\\Pulpit\\php1\\aplikacje-internetowe-php\\php-07-routing\\app\\views';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_209618107467f3f78e6eb4f7_42617492', 'content');
$_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "main.tpl", $_smarty_current_dir);
}
/* {block 'content'} */
class Block_209618107467f3f78e6eb4f7_42617492 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\Users\\marek\\Pulpit\\php1\\aplikacje-internetowe-php\\php-07-routing\\app\\views';
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
