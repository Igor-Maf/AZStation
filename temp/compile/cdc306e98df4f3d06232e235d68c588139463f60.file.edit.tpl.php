<?php /* Smarty version Smarty-3.1.21-dev, created on 2014-11-17 20:43:41
         compiled from "E:\xampp\htdocs\azs-app\views\clients\edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5043546a487eb36323-55584379%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cdc306e98df4f3d06232e235d68c588139463f60' => 
    array (
      0 => 'E:\\xampp\\htdocs\\azs-app\\views\\clients\\edit.tpl',
      1 => 1416253351,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5043546a487eb36323-55584379',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_546a487eb9c252_43833486',
  'variables' => 
  array (
    'data' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_546a487eb9c252_43833486')) {function content_546a487eb9c252_43833486($_smarty_tpl) {?><h1> Редактировать профиль #<?php echo $_smarty_tpl->tpl_vars['data']->value['client_id'];?>
</h1>
<hr>
<form name="form" id="form" method="post" action="">
    <input type="hidden" name="edit_client" value="1">
    <p>
        <label for="client_fio"> ФИО </label>
        <input type="text" id="client_fio" class="validate[required]" name="client_fio" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['client_fio'];?>
" />
    </p>
    <p>
        <label for="client_address"> Адресс </label>
        <input type="text" id="client_address" class="validate[required]" name="client_address" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['client_address'];?>
" />
    </p>
    <p>
        <label for="client_mail"> Почта </label>
        <input type="email" id="client_mail" class="validate[required]" name="client_mail" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['client_mail'];?>
" />
    </p>
    <p>
        <label for="client_number"> Телефон </label>
        <input type="tel" id="client_number" class="validate[required]" name="client_number" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['client_number'];?>
" />
    </p>
    <p>
        <label for="client_scores"> Баллы </label>
        <input type="number" min="0" max="999" step="0.01" id="client_scores" class="validate[required]" name="client_scores" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['client_scores'];?>
" />
    </p>
    <p>
        <input type="submit" value="Редактировать">
    </p>
</form><?php }} ?>
