<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-01-06 21:12:48
         compiled from "E:\xampp\htdocs\azs-app\views\clients\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:311895468c4a9941715-83763618%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '89a0b95aab2bab39bd758013b977ac1ded7e53af' => 
    array (
      0 => 'E:\\xampp\\htdocs\\azs-app\\views\\clients\\index.tpl',
      1 => 1420575163,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '311895468c4a9941715-83763618',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5468c4a9a05799_74180955',
  'variables' => 
  array (
    'data' => 0,
    'clients' => 0,
    '_layoutParams' => 0,
    'cl' => 0,
    'pagination' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5468c4a9a05799_74180955')) {function content_5468c4a9a05799_74180955($_smarty_tpl) {?><h1> Клиенты АЗС </h1>
<hr>
<p class="access">При добавлении нового клиента ему начисляются 100 баллов. </p>
<form name="form" id="form" method="post" action="">
    <input type="hidden" name="add_client" value="1">
    <p>
        <label for="client_fio"> ФИО </label>
        <input type="text" id="client_fio" class="validate[required]" name="client_fio" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['client_fio'])===null||$tmp==='' ? '' : $tmp);?>
" />
    </p>
    <p>
        <label for="client_address"> Адресс </label>
        <input type="text" id="client_address" class="validate[required]" name="client_address" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['client_address'])===null||$tmp==='' ? '' : $tmp);?>
" />
    </p>
    <p>
        <label for="client_mail"> Почта </label>
        <input type="email" id="client_mail" class="validate[required]" name="client_mail" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['client_mail'])===null||$tmp==='' ? '' : $tmp);?>
" />
    </p>
    <p>
        <label for="client_number"> Телефон </label>
        <input type="tel" id="client_number" class="validate[required]" name="client_number" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['client_number'])===null||$tmp==='' ? '' : $tmp);?>
" />
    </p>
    <p>
        <input type="submit" value="Добавить клиента">
    </p>
</form>
<hr>

<?php if (isset($_smarty_tpl->tpl_vars['clients']->value)&&count($_smarty_tpl->tpl_vars['clients']->value)) {?>
    <table>
        <tr>
            <th>Ид. клиента.</th>
            <th>ФИО</th>
            <th>Адресс</th>
            <th>Почта</th>
            <th>Номер</th>
            <th>Баллы</th>
            <th>
                <img src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root_img'];?>
icons/edit-property.png" title="Редактирование" class="icon">
            </th>
            <th>
                <img src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root_img'];?>
icons/delete-property.png" title="Удаление" class="icon">
            </th>
        </tr>
        <?php  $_smarty_tpl->tpl_vars['cl'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cl']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['clients']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cl']->key => $_smarty_tpl->tpl_vars['cl']->value) {
$_smarty_tpl->tpl_vars['cl']->_loop = true;
?>
            <tr>
                <td><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
clients/view/<?php echo $_smarty_tpl->tpl_vars['cl']->value['client_id'];?>
" title="Посмотреть профиль клиента"><?php echo $_smarty_tpl->tpl_vars['cl']->value['client_id'];?>
</a></td>
                <td><?php echo $_smarty_tpl->tpl_vars['cl']->value['client_fio'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['cl']->value['client_address'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['cl']->value['client_mail'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['cl']->value['client_number'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['cl']->value['client_scores'];?>
</td>
                <td>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
clients/edit/<?php echo $_smarty_tpl->tpl_vars['cl']->value['client_id'];?>
">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root_img'];?>
icons/edit.png" title="Редактировать" class="icon">
                    </a>
                </td>
                <td>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
clients/delete/<?php echo $_smarty_tpl->tpl_vars['cl']->value['client_id'];?>
">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root_img'];?>
icons/delete.png" title="Удалить" class="icon">
                    </a>
                </td>
            </tr>
        <?php } ?>
    </table>
    <p><?php echo $_smarty_tpl->tpl_vars['pagination']->value;?>
</p>
<?php } else { ?>
    <p class="error"> Не найдено ни одного клиента. </p>
<?php }?><?php }} ?>
