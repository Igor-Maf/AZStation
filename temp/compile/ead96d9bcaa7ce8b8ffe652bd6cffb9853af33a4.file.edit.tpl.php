<?php /* Smarty version Smarty-3.1.21-dev, created on 2014-11-05 22:04:40
         compiled from "E:\xampp\htdocs\traffic-crs\views\cont\edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17210544ed57a8203c5-06024900%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ead96d9bcaa7ce8b8ffe652bd6cffb9853af33a4' => 
    array (
      0 => 'E:\\xampp\\htdocs\\traffic-crs\\views\\cont\\edit.tpl',
      1 => 1415221422,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17210544ed57a8203c5-06024900',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_544ed57a891fd5_80345653',
  'variables' => 
  array (
    'data' => 0,
    'types_cont' => 0,
    't' => 0,
    'stores' => 0,
    's' => 0,
    'manufact_cityes' => 0,
    'm' => 0,
    'client_cityes' => 0,
    'c' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_544ed57a891fd5_80345653')) {function content_544ed57a891fd5_80345653($_smarty_tpl) {?><h1> Редактировать контейнер </h1>
<form name="form" id="form" method="post" action="">
    <input type="hidden" name="edit_cont" value="1">
    <p>
        <label> Код </label>
        <input type="text" class="validate[required]" name="cont_code" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['cont_code'];?>
" />
    </p>
    <p>
        <label> Тип </label>
        <select name="type_cont" class="validate[required]" >
            <option value="">-Выберите тип-</option>
            <?php  $_smarty_tpl->tpl_vars['t'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['t']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['types_cont']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['t']->key => $_smarty_tpl->tpl_vars['t']->value) {
$_smarty_tpl->tpl_vars['t']->_loop = true;
?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['t']->value['type_cont_id'];?>
" <?php if ($_smarty_tpl->tpl_vars['t']->value['type_cont_id']==$_smarty_tpl->tpl_vars['data']->value['type_cont_id']) {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['t']->value['type_cont_name'];?>
</option>
            <?php } ?>
        </select>
    </p>
    <p>
        <label> Груз </label>
        <input type="text" class="validate[required]" name="cont_weight" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['cont_weight'];?>
" />
    </p>
    <p>
        <label> Склад: </label>
        <select name="store" class="validate[required]" >
            <option value="">-Выберите склад-</option>
            <?php  $_smarty_tpl->tpl_vars['s'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['s']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['stores']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['s']->key => $_smarty_tpl->tpl_vars['s']->value) {
$_smarty_tpl->tpl_vars['s']->_loop = true;
?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['s']->value['store_id'];?>
" <?php if ($_smarty_tpl->tpl_vars['s']->value['store_id']==$_smarty_tpl->tpl_vars['data']->value['store_id']) {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['s']->value['store_name'];?>
</option>
            <?php } ?>
        </select>
    </p>
    <p>
        <label> Прибыл из: </label>
        <select name="manufact_city" class="validate[required]" >
            <option value="">-Выберите город-</option>
            <?php  $_smarty_tpl->tpl_vars['m'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['m']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['manufact_cityes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['m']->key => $_smarty_tpl->tpl_vars['m']->value) {
$_smarty_tpl->tpl_vars['m']->_loop = true;
?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['m']->value['manufact_city_id'];?>
" <?php if ($_smarty_tpl->tpl_vars['m']->value['manufact_city_id']==$_smarty_tpl->tpl_vars['data']->value['manufact_city_id']) {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['m']->value['manufact_city_name'];?>
</option>
            <?php } ?>
        </select>
    </p>
    <p>
        <label> Отправлен в: </label>
        <select name="client_city" class="validate[required]" >
            <option value="">-Выберите город-</option>
            <?php  $_smarty_tpl->tpl_vars['c'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['c']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['client_cityes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['c']->key => $_smarty_tpl->tpl_vars['c']->value) {
$_smarty_tpl->tpl_vars['c']->_loop = true;
?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['c']->value['client_city_id'];?>
" <?php if ($_smarty_tpl->tpl_vars['c']->value['client_city_id']==$_smarty_tpl->tpl_vars['data']->value['client_city_id']) {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['c']->value['client_city_name'];?>
</option>
            <?php } ?>
        </select>
    </p>
    <p>
        <label> Дата прибытия: </label>
        <input id="sdatepicker" class="validate[required] datepicker" type="text" name="date_start" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['date_start'];?>
" />
    </p>
    <p>
        <label> Дата отправления: </label>
        <input id="edatepicker" class="validate[required] datepicker" type="text" name="date_end" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['date_end'];?>
" />
    </p>
    <p>
        <input type="submit" value="Редактировать контейнер">
    </p>
</form><?php }} ?>
