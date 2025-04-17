<?php
/* Smarty version 5.4.3, created on 2025-04-17 12:16:32
  from 'file:list.html' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_6800d500c54db4_32880839',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '508a550d587fc0ddd4f4b5ae43b35bdc7422ba48' => 
    array (
      0 => 'list.html',
      1 => 1744884992,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6800d500c54db4_32880839 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\php-08-baza-danych\\app\\views\\templates';
if ($_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('history')) > 0) {?>
<h3 style="text-align: center; text-transform: uppercase; margin-top: 20px;">Historia obliczeń</h3>
<table style="width:100%; border-collapse:collapse; margin-top:20px;">
  <tr>
    <th style="border:1px solid #ccc; padding:8px;">Kwota</th>
    <th style="border:1px solid #ccc; padding:8px;">Lata</th>
    <th style="border:1px solid #ccc; padding:8px;">Oprocentowanie</th>
    <th style="border:1px solid #ccc; padding:8px;">Rata</th>
    <th style="border:1px solid #ccc; padding:8px;">Usuń</th>
  </tr>
  <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('history'), 'item');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('item')->value) {
$foreach0DoElse = false;
?>
  <tr>
    <td style="border:1px solid #ccc; padding:8px; text-align:center;"><?php echo $_smarty_tpl->getValue('item')->sum;?>
</td>
    <td style="border:1px solid #ccc; padding:8px; text-align:center;"><?php echo $_smarty_tpl->getValue('item')->years;?>
</td>
    <td style="border:1px solid #ccc; padding:8px; text-align:center;"><?php echo $_smarty_tpl->getValue('item')->interest_rate;?>
%</td>
    <td style="border:1px solid #ccc; padding:8px; text-align:center;"><?php echo $_smarty_tpl->getValue('item')->result;?>
 zł</td>
    <td style="border:1px solid #ccc; text-align:center;">
      <form method="post" action="<?php echo $_smarty_tpl->getValue('conf')->action_root;?>
deleteCalculation#main" style="margin:0; padding: 0;">
        <input type="hidden" name="id" value="<?php echo $_smarty_tpl->getValue('item')->id;?>
">
        <button type="submit" style="background-color: transparent; color: red;">Usuń</button>
      </form>
    </td>
  </tr>
  <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
</table>
<?php }?>

<?php if ($_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('history')) == 0) {?>
<p style="text-align:center; margin-top:20px;">Brak historii obliczeń.</p>
<?php }
}
}
