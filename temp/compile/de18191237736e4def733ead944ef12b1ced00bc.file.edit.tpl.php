<?php /* Smarty version Smarty-3.1.21-dev, created on 2014-11-06 22:38:37
         compiled from "E:\xampp\htdocs\traffic-crs\views\manufact\edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8776545be945748d35-15424006%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'de18191237736e4def733ead944ef12b1ced00bc' => 
    array (
      0 => 'E:\\xampp\\htdocs\\traffic-crs\\views\\manufact\\edit.tpl',
      1 => 1415309915,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8776545be945748d35-15424006',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_545be9457a7612_47499122',
  'variables' => 
  array (
    'data' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_545be9457a7612_47499122')) {function content_545be9457a7612_47499122($_smarty_tpl) {?><h1> Редактировать город-производитель </h1>
<form name="form" id="form" method="post" action="">
    <input type="hidden" name="edit_manufact" value="1">
    <p>
        <label> Редактировать город: </label>
        <input type="text" class="validate[required]" name="manufact_city_name" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['manufact_city_name'];?>
" />
    </p>
    <p>
        <input type="submit" value="Редактировать город">
    </p>
</form><?php }} ?>
