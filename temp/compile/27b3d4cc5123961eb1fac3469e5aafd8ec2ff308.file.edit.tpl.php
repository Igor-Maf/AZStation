<?php /* Smarty version Smarty-3.1.21-dev, created on 2014-11-01 16:01:56
         compiled from "E:\xampp\htdocs\traffic-crs\views\type\edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:205454500491b95ed7-36334091%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '27b3d4cc5123961eb1fac3469e5aafd8ec2ff308' => 
    array (
      0 => 'E:\\xampp\\htdocs\\traffic-crs\\views\\type\\edit.tpl',
      1 => 1414853820,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '205454500491b95ed7-36334091',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54500491bf4540_23928767',
  'variables' => 
  array (
    'data' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54500491bf4540_23928767')) {function content_54500491bf4540_23928767($_smarty_tpl) {?><h1> Редактирование типа контейнеров </h1>
<hr>
<form name="form" id="form" method="post" action="">
    <input type="hidden" name="edit_type" value="1">
    <p>
        <label> Название типа: </label>
        <input type="text" class="validate[required]" name="type_cont_name" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['type_cont_name'];?>
" />
    </p>
    <p>
        <input type="submit" value="Редактировать тип контейнера">
    </p>
</form><?php }} ?>
