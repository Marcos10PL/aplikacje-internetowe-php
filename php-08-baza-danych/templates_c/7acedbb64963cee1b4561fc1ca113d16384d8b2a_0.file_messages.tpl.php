<?php
/* Smarty version 5.4.3, created on 2025-04-17 10:01:29
  from 'file:messages.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_6800b55978ce30_56810009',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7acedbb64963cee1b4561fc1ca113d16384d8b2a' => 
    array (
      0 => 'messages.tpl',
      1 => 1744041452,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6800b55978ce30_56810009 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\php-08-baza-danych\\app\\views\\templates';
?><div style="text-align: center;">
  <?php if ($_smarty_tpl->getValue('messages')->isError()) {?>
  <div style="color: firebrick; font-size: 1.2rem; text-transform: uppercase;">
    <ol style="list-style-type: none; padding: 0; margin: 0;">
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
    <ol style="list-style-type: none; padding: 0; margin: 0;">
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
</div>
<?php }
}
