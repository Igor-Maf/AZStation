<?php /* Smarty version Smarty-3.1.21-dev, created on 2014-11-17 23:33:11
         compiled from "E:\xampp\htdocs\azs-app\views\index\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:210145468a476c77e84-28860042%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd3b2299c72ed7a9fd9b4c31f8dfe7a093450af78' => 
    array (
      0 => 'E:\\xampp\\htdocs\\azs-app\\views\\index\\index.tpl',
      1 => 1416263535,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '210145468a476c77e84-28860042',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5468a476c806b4_39906083',
  'variables' => 
  array (
    'gas' => 0,
    'g' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5468a476c806b4_39906083')) {function content_5468a476c806b4_39906083($_smarty_tpl) {?><h1> Добро пожаловать! </h1>
<hr>
<h3> Цены на бензин </h3>
<?php if (isset($_smarty_tpl->tpl_vars['gas']->value)&&count($_smarty_tpl->tpl_vars['gas']->value)) {?>
    <?php  $_smarty_tpl->tpl_vars['g'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['g']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['gas']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['g']->key => $_smarty_tpl->tpl_vars['g']->value) {
$_smarty_tpl->tpl_vars['g']->_loop = true;
?>
        <form name="form" id="form" method="post" action="" class="form-standart">
            <!--<input type="hidden" name="edit_<?php echo $_smarty_tpl->tpl_vars['g']->value['gas_id'];?>
" value="1">-->
            <p>
                <label for="<?php echo $_smarty_tpl->tpl_vars['g']->value['gas_type'];?>
"> <?php echo $_smarty_tpl->tpl_vars['g']->value['gas_type'];?>
 </label>
                <input type="number" min="0" max="999" step="0.01" id="<?php echo $_smarty_tpl->tpl_vars['g']->value['gas_type'];?>
" class="validate[required]" name="client_scores" value="<?php echo $_smarty_tpl->tpl_vars['g']->value['gas_price'];?>
" disabled/>
            </p>
           <!-- <input type="submit" value="Редактировать"> -->
        </form>
    <?php } ?>
<?php }?>
<?php }} ?>
