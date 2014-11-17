<?php /* Smarty version Smarty-3.1.21-dev, created on 2014-11-01 16:05:40
         compiled from "E:\xampp\htdocs\traffic-crs\views\type\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21826544d72317e00e6-12960313%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bd10f49b2638cee6e7d6d65338ddec2b517e4265' => 
    array (
      0 => 'E:\\xampp\\htdocs\\traffic-crs\\views\\type\\index.tpl',
      1 => 1414854260,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21826544d72317e00e6-12960313',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_544d7231846557_38920094',
  'variables' => 
  array (
    'data' => 0,
    'types_cont' => 0,
    'type' => 0,
    '_layoutParams' => 0,
    'pagination' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_544d7231846557_38920094')) {function content_544d7231846557_38920094($_smarty_tpl) {?><h1> Типы контейнеров </h1>
<hr>
<form name="form" id="form" method="post" action="">
    <input type="hidden" name="add_type" value="1">
    <p>
        <label> Название типа: </label>
        <input type="text" class="validate[required]" name="type_cont_name" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['type_cont_name'])===null||$tmp==='' ? '' : $tmp);?>
" />
    </p>
    <p>
        <input type="submit" value="Добавить тип контейнера">
    </p>
</form>
<hr>
<?php if (isset($_smarty_tpl->tpl_vars['types_cont']->value)&&count($_smarty_tpl->tpl_vars['types_cont']->value)) {?>
<table>
        <tr>
            <th>Ид. типа</th>
            <th>Название типа</th>
            <th>Редактировать</th>
            <th>Удалить</th>
        </tr>
    <?php  $_smarty_tpl->tpl_vars['type'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['type']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['types_cont']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['type']->key => $_smarty_tpl->tpl_vars['type']->value) {
$_smarty_tpl->tpl_vars['type']->_loop = true;
?>
        <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['type']->value['type_cont_id'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['type']->value['type_cont_name'];?>
</td>
            <td><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
type/edit/<?php echo $_smarty_tpl->tpl_vars['type']->value['type_cont_id'];?>
">Редактировать тип</a></td>
            <td><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
type/delete/<?php echo $_smarty_tpl->tpl_vars['type']->value['type_cont_id'];?>
">Удалить тип</a></td>
        </tr>
    <?php } ?>
</table>
<p><?php echo $_smarty_tpl->tpl_vars['pagination']->value;?>
</p>
<?php } else { ?>
    <p> Не найдено ни одного типа. </p>
<?php }?><?php }} ?>
