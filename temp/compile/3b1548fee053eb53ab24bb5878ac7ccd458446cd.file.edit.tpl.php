<?php /* Smarty version Smarty-3.1.21-dev, created on 2014-11-01 14:52:31
         compiled from "E:\xampp\htdocs\traffic-crs\views\store\edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14359544ff967252340-51568341%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3b1548fee053eb53ab24bb5878ac7ccd458446cd' => 
    array (
      0 => 'E:\\xampp\\htdocs\\traffic-crs\\views\\store\\edit.tpl',
      1 => 1414849763,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14359544ff967252340-51568341',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_544ff9672aec32_49122284',
  'variables' => 
  array (
    'data' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_544ff9672aec32_49122284')) {function content_544ff9672aec32_49122284($_smarty_tpl) {?><h1> Редактировать склад </h1>
<form name="form" id="form" method="post" action="">
    <input type="hidden" name="edit_store" value="1">
    <p>
        <label> Имя нового склада: </label>
        <input type="text" class="validate[required]" name="store_name" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['store_name'];?>
" />
    </p>
    <p>
        <input type="submit" value="Редактировать склад">
    </p>
</form><?php }} ?>
