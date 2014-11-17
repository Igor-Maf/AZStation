<?php /* Smarty version Smarty-3.1.21-dev, created on 2014-11-01 14:59:43
         compiled from "E:\xampp\htdocs\traffic-crs\views\store\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:24031544d061f5b2759-38184424%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fd9c82e81bfeee4ffc4e33bdf41b36c91f8205e1' => 
    array (
      0 => 'E:\\xampp\\htdocs\\traffic-crs\\views\\store\\index.tpl',
      1 => 1414850168,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '24031544d061f5b2759-38184424',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_544d061f5dfcf3_00310725',
  'variables' => 
  array (
    'data' => 0,
    'stores' => 0,
    'store' => 0,
    '_layoutParams' => 0,
    'pagination' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_544d061f5dfcf3_00310725')) {function content_544d061f5dfcf3_00310725($_smarty_tpl) {?><h1> Склады </h1>
<hr>
<form name="form" id="form" method="post" action="">
    <input type="hidden" name="add_store" value="1">
    <p>
        <label> Имя нового склада: </label>
        <input type="text" class="validate[required]" name="store_name" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['store_name'])===null||$tmp==='' ? '' : $tmp);?>
" />
    </p>
    <p>
        <input type="submit" value="Добавить новый склад">
    </p>
</form>
<hr>
<?php if (isset($_smarty_tpl->tpl_vars['stores']->value)&&count($_smarty_tpl->tpl_vars['stores']->value)) {?>
<table>
        <tr>
            <th>Ид. склада</th>
            <th>Имя склада</th>
            <th>Редактировать</th>
            <th>Удалить</th>
        </tr>
    <?php  $_smarty_tpl->tpl_vars['store'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['store']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['stores']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['store']->key => $_smarty_tpl->tpl_vars['store']->value) {
$_smarty_tpl->tpl_vars['store']->_loop = true;
?>
        <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['store']->value['store_id'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['store']->value['store_name'];?>
</td>
            <td><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
store/edit/<?php echo $_smarty_tpl->tpl_vars['store']->value['store_id'];?>
">Редактировать склад</a></td>
            <td><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
store/delete/<?php echo $_smarty_tpl->tpl_vars['store']->value['store_id'];?>
">Delete</a></td>
        </tr>
    <?php } ?>
</table>
<p><?php echo $_smarty_tpl->tpl_vars['pagination']->value;?>
</p>
<?php } else { ?>
    <p> Не найдено ни одного склада. </p>
<?php }?><?php }} ?>
