<?php /* Smarty version Smarty-3.1.21-dev, created on 2014-11-11 21:01:01
         compiled from "E:\xampp\htdocs\traffic-crs\views\client\edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1592454626afd00e739-06598380%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a281f6ce151fe128c05950743e51292abfcdf7a1' => 
    array (
      0 => 'E:\\xampp\\htdocs\\traffic-crs\\views\\client\\edit.tpl',
      1 => 1415735703,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1592454626afd00e739-06598380',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54626afd06e017_33461306',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54626afd06e017_33461306')) {function content_54626afd06e017_33461306($_smarty_tpl) {?><h1> Редактировать города-клиенты </h1>
<hr>
<form name="form" id="form" method="post" action="">
    <input type="hidden" name="edit_client" value="1">
    <p>
        <label> Редактировать город: </label>
        <input type="text" class="validate[required]" name="client_city_name" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['client_city_name'];?>
" />
    </p>
    <p>
        <input type="submit" value="Редактировать город">
    </p>
</form><?php }} ?>
