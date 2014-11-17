<?php /* Smarty version Smarty-3.1.21-dev, created on 2014-11-05 21:03:09
         compiled from "E:\xampp\htdocs\traffic-crs\views\cont\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:25726544d04eca36dd8-00702810%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '78a0bedb3b9435060141b44d24cc4a7161f10fcb' => 
    array (
      0 => 'E:\\xampp\\htdocs\\traffic-crs\\views\\cont\\index.tpl',
      1 => 1415217699,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '25726544d04eca36dd8-00702810',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_544d04eca70180_27598704',
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
    'conts' => 0,
    'cont' => 0,
    '_layoutParams' => 0,
    'pagination' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_544d04eca70180_27598704')) {function content_544d04eca70180_27598704($_smarty_tpl) {?><h1> Контейнера </h1>
<hr>
<form name="form" id="form" method="post" action="">
    <input type="hidden" name="add_cont" value="1">
    <p>
        <label> Код </label>
        <input type="text" class="validate[required]" name="cont_code" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['cont_code'])===null||$tmp==='' ? '' : $tmp);?>
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
"><?php echo $_smarty_tpl->tpl_vars['t']->value['type_cont_name'];?>
</option>
            <?php } ?>
        </select>
    </p>
    <p>
        <label> Груз </label>
        <input type="text" class="validate[required]" name="cont_weight" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['cont_weight'])===null||$tmp==='' ? '' : $tmp);?>
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
"><?php echo $_smarty_tpl->tpl_vars['s']->value['store_name'];?>
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
"><?php echo $_smarty_tpl->tpl_vars['m']->value['manufact_city_name'];?>
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
"><?php echo $_smarty_tpl->tpl_vars['c']->value['client_city_name'];?>
</option>
            <?php } ?>
        </select>
    </p>
    <p>
        <label> Дата прибытия: </label>
        <input id="sdatepicker" class="validate[required] datepicker" type="text" name="date_start" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['date_start'])===null||$tmp==='' ? '' : $tmp);?>
" />
    </p>
    <p>
        <label> Дата отправления: </label>
        <input id="edatepicker" class="validate[required] datepicker" type="text" name="date_end" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['date_end'])===null||$tmp==='' ? '' : $tmp);?>
" />
    </p>
    <p>
        <input type="submit" value="Добавить новый контейнер">
    </p>
</form>
<hr>
<?php if (isset($_smarty_tpl->tpl_vars['conts']->value)&&count($_smarty_tpl->tpl_vars['conts']->value)) {?>
    <table>
        <tr>
            <th>Ид. конт.</th>
            <th>Код</th>
            <th>Тип</th>
            <th>Груз</th>
            <th>Склад</th>
            <th>Прибыл из</th>
            <th>Отправить в</th>
            <th>Дата прибытия</th>
            <th>Дата отправления</th>
            <th>Редактировать</th>
            <th>Удалить</th>
        </tr>
        <?php  $_smarty_tpl->tpl_vars['cont'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cont']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['conts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cont']->key => $_smarty_tpl->tpl_vars['cont']->value) {
$_smarty_tpl->tpl_vars['cont']->_loop = true;
?>
            <tr>
                <td><?php echo $_smarty_tpl->tpl_vars['cont']->value['cont_id'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['cont']->value['cont_code'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['cont']->value['type_cont_name'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['cont']->value['cont_weight'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['cont']->value['store_name'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['cont']->value['manufact_city_name'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['cont']->value['client_city_name'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['cont']->value['date_start'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['cont']->value['date_end'];?>
</td>
                <td><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
cont/edit/<?php echo $_smarty_tpl->tpl_vars['cont']->value['cont_id'];?>
">Редактировать</a></td>
                <td><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
cont/delete/<?php echo $_smarty_tpl->tpl_vars['cont']->value['cont_id'];?>
">Удалить</a></td>
            </tr>
        <?php } ?>
    </table>
    <p><?php echo $_smarty_tpl->tpl_vars['pagination']->value;?>
</p>
<?php } else { ?>
    <p> Не найдено ни одного контейнера. </p>
<?php }?><?php }} ?>
