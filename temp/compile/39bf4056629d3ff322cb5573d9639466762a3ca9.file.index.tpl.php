<?php /* Smarty version Smarty-3.1.21-dev, created on 2014-11-11 21:00:58
         compiled from "E:\xampp\htdocs\traffic-crs\views\client\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1840544d7cfe3aacd7-32351852%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '39bf4056629d3ff322cb5573d9639466762a3ca9' => 
    array (
      0 => 'E:\\xampp\\htdocs\\traffic-crs\\views\\client\\index.tpl',
      1 => 1415736005,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1840544d7cfe3aacd7-32351852',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_544d7cfe42fb23_88586091',
  'variables' => 
  array (
    'data' => 0,
    'clients' => 0,
    'client' => 0,
    '_layoutParams' => 0,
    'pagination' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_544d7cfe42fb23_88586091')) {function content_544d7cfe42fb23_88586091($_smarty_tpl) {?><h1> Города-клиенты </h1>
<hr>
<form name="form" id="form" method="post" action="">
    <input type="hidden" name="add_client" value="1">
    <p>
        <label> Новый город: </label>
        <input type="text" class="validate[required]" name="client_city_name" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['client_city_name'])===null||$tmp==='' ? '' : $tmp);?>
" />
    </p>
    <p>
        <input type="submit" value="Добавить новый город">
    </p>
</form>
<hr>
<?php if (isset($_smarty_tpl->tpl_vars['clients']->value)&&count($_smarty_tpl->tpl_vars['clients']->value)) {?>
<table>
        <tr>
            <th>Ид. города</th>
            <th>Город</th>
            <th>Редактировать</th>
            <th>Удалить</th>
        </tr>
    <?php  $_smarty_tpl->tpl_vars['client'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['client']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['clients']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['client']->key => $_smarty_tpl->tpl_vars['client']->value) {
$_smarty_tpl->tpl_vars['client']->_loop = true;
?>
        <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['client']->value['client_city_id'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['client']->value['client_city_name'];?>
</td>
            <td><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
client/edit/<?php echo $_smarty_tpl->tpl_vars['client']->value['client_city_id'];?>
">Редактировать</a></td>
            <td><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
client/delete/<?php echo $_smarty_tpl->tpl_vars['client']->value['client_city_id'];?>
">Удалить</a></td>
        </tr>
    <?php } ?>
</table>
<p><?php echo $_smarty_tpl->tpl_vars['pagination']->value;?>
</p>
<?php } else { ?>
    <p> Не найдено ни одного города-клиент. </p>
<?php }?><?php }} ?>
