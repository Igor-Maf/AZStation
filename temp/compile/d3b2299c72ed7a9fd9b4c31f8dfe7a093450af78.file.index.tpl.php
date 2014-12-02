<?php /* Smarty version Smarty-3.1.21-dev, created on 2014-12-02 19:28:27
         compiled from "E:\xampp\htdocs\azs-app\views\index\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:210145468a476c77e84-28860042%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd3b2299c72ed7a9fd9b4c31f8dfe7a093450af78' => 
    array (
      0 => 'E:\\xampp\\htdocs\\azs-app\\views\\index\\index.tpl',
      1 => 1417544898,
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
    '_layoutParams' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5468a476c806b4_39906083')) {function content_5468a476c806b4_39906083($_smarty_tpl) {?><h1> Добро пожаловать! </h1>
<hr>
<h3> Цены на бензин </h3>

<?php if (isset($_smarty_tpl->tpl_vars['gas']->value)&&count($_smarty_tpl->tpl_vars['gas']->value)) {?>
    <form name="form" id="form" method="post" action="" class="form-gasoline">
        <?php  $_smarty_tpl->tpl_vars['g'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['g']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['gas']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['g']->key => $_smarty_tpl->tpl_vars['g']->value) {
$_smarty_tpl->tpl_vars['g']->_loop = true;
?>
            <p>
               <label for="<?php echo $_smarty_tpl->tpl_vars['g']->value['gas_type'];?>
"> <?php echo $_smarty_tpl->tpl_vars['g']->value['gas_type'];?>
 </label>
               
               <input type="text" name="<?php echo $_smarty_tpl->tpl_vars['g']->value['gas_type'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['g']->value['gas_price'];?>
&nbsp;(грн.)" disabled> 
               <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
index/edit/<?php echo $_smarty_tpl->tpl_vars['g']->value['gas_id'];?>
">Изменить цену</a>
            </p>
        <?php } ?>
    </form>
<?php } else { ?>
    <p class="error">Нет тарифного плана</p>
<?php }?>
   <?php }} ?>
