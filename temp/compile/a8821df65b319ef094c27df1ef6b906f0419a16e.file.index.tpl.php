<?php /* Smarty version Smarty-3.1.21-dev, created on 2014-11-06 22:42:32
         compiled from "E:\xampp\htdocs\traffic-crs\views\manufact\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8418544d79783e4732-91991350%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a8821df65b319ef094c27df1ef6b906f0419a16e' => 
    array (
      0 => 'E:\\xampp\\htdocs\\traffic-crs\\views\\manufact\\index.tpl',
      1 => 1415310045,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8418544d79783e4732-91991350',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_544d797846a657_35560854',
  'variables' => 
  array (
    'data' => 0,
    'manufacts' => 0,
    'man' => 0,
    '_layoutParams' => 0,
    'pagination' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_544d797846a657_35560854')) {function content_544d797846a657_35560854($_smarty_tpl) {?><h1> Города-отправители </h1>
<hr>
<form name="form" id="form" method="post" action="">
    <input type="hidden" name="add_manufact" value="1">
    <p>
        <label> Новый город: </label>
        <input type="text" class="validate[required]" name="manufact_city_name" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['manufact_city_name'])===null||$tmp==='' ? '' : $tmp);?>
" />
    </p>
    <p>
        <input type="submit" value="Добавить новый город">
    </p>
</form>
<hr>
<?php if (isset($_smarty_tpl->tpl_vars['manufacts']->value)&&count($_smarty_tpl->tpl_vars['manufacts']->value)) {?>
<table>
        <tr>
            <th>Ид. города</th>
            <th>Город</th>
            <th>Редактировать</th>
            <th>Удалить</th>
        </tr>
    <?php  $_smarty_tpl->tpl_vars['man'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['man']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['manufacts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['man']->key => $_smarty_tpl->tpl_vars['man']->value) {
$_smarty_tpl->tpl_vars['man']->_loop = true;
?>
        <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['man']->value['manufact_city_id'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['man']->value['manufact_city_name'];?>
</td>
            <td><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
manufact/edit/<?php echo $_smarty_tpl->tpl_vars['man']->value['manufact_city_id'];?>
">Редактировать</a></td>
            <td><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
manufact/delete/<?php echo $_smarty_tpl->tpl_vars['man']->value['manufact_city_id'];?>
">Удалить</a></td>
        </tr>
    <?php } ?>
</table>
<p><?php echo $_smarty_tpl->tpl_vars['pagination']->value;?>
</p>
<?php } else { ?>
    <p> Не найдено ни одного города-производителя. </p>
<?php }?><?php }} ?>
