<?php /* Smarty version Smarty-3.1.21-dev, created on 2014-12-02 19:40:05
         compiled from "E:\xampp\htdocs\azs-app\views\index\edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:31420547e04cd912381-33427364%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'afe15c34554718e35518f2915e70de594af84e8c' => 
    array (
      0 => 'E:\\xampp\\htdocs\\azs-app\\views\\index\\edit.tpl',
      1 => 1417545597,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '31420547e04cd912381-33427364',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_547e04cd984a26_93451102',
  'variables' => 
  array (
    'data' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_547e04cd984a26_93451102')) {function content_547e04cd984a26_93451102($_smarty_tpl) {?><h1> Редактировать цену #<?php echo $_smarty_tpl->tpl_vars['data']->value['gas_type'];?>
</h1>
<hr>
<form name="form" id="form" method="post" action="">
    <input type="hidden" name="edit_gas" value="1">
    <p>
        <label for="gas_price"> Цена <?php echo $_smarty_tpl->tpl_vars['data']->value['gas_type'];?>
 </label>
        <input type="number" min="0" max="10000" step="0.01" id="gas_price" class="validate[required]" name="gas_price" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['gas_price'];?>
" />
    </p>
    <p>
        <input type="submit" value="Редактировать">
    </p>
</form><?php }} ?>
