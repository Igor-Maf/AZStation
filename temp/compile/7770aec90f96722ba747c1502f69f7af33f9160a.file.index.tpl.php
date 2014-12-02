<?php /* Smarty version Smarty-3.1.21-dev, created on 2014-12-02 19:56:26
         compiled from "E:\xampp\htdocs\azs-app\views\input\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:844547e0b5a8482f9-59880570%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7770aec90f96722ba747c1502f69f7af33f9160a' => 
    array (
      0 => 'E:\\xampp\\htdocs\\azs-app\\views\\input\\index.tpl',
      1 => 1417546254,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '844547e0b5a8482f9-59880570',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_547e0b5a89b6d3_78451475',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_547e0b5a89b6d3_78451475')) {function content_547e0b5a89b6d3_78451475($_smarty_tpl) {?><hr>
<form name="form" id="form" method="post" action="">
    <input type="hidden" name="chose_client_id" value="1">
    <p>
        <input type="text" id="client_id" class="validate[required]" name="client_id" value="" />
    </p>
    <p>
        <input type="submit" value="Войти">
    </p>
</form><?php }} ?>
