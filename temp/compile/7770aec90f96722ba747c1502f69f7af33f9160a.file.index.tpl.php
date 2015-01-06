<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-01-06 22:35:01
         compiled from "E:\xampp\htdocs\azs-app\views\input\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:844547e0b5a8482f9-59880570%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7770aec90f96722ba747c1502f69f7af33f9160a' => 
    array (
      0 => 'E:\\xampp\\htdocs\\azs-app\\views\\input\\index.tpl',
      1 => 1420580097,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '844547e0b5a8482f9-59880570',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_547e0b5a89b6d3_78451475',
  'variables' => 
  array (
    '_layoutParams' => 0,
    'gas' => 0,
    'g' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_547e0b5a89b6d3_78451475')) {function content_547e0b5a89b6d3_78451475($_smarty_tpl) {?><h1> Ввести бензин/сумму</h1>
<hr>
<form name="form" id="form" class="form-input" method="post" action="">
    <input type="hidden" name="buy_form" value="1">
    <p>
        <label for="client_id">Идентификатор клиента</label>
        <input type="number" id="client_id" name="client_id" value="">
        <small class="full-width">&#40;<i>Только числовое значение</i>&#41;</small>
    </p>
    <p>
        <a id="profile" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
clients/view/">Посмотреть профиль этого клиента</a>
    </p>
    
    <div class="clearfix"></div>
    <hr>
    
    <p class="radio-group">
        <b>Подсчет по:</b>
        <br>
        <input type="radio" name="payment_method" value="money" id="money" checked="checked">
        <label for="money">Деньги</label>
        <br>
        <input type="radio" name="payment_method" value="liters" id="liters">
        <label for="liters">Литры</label>
    </p>
    <?php if (isset($_smarty_tpl->tpl_vars['gas']->value)&&count($_smarty_tpl->tpl_vars['gas']->value)) {?>
        <p class="radio-group">
            <b>Тип топлива:</b>
            <br>
             <?php  $_smarty_tpl->tpl_vars['g'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['g']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['gas']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['g']->key => $_smarty_tpl->tpl_vars['g']->value) {
$_smarty_tpl->tpl_vars['g']->_loop = true;
?>
                <label for="<?php echo $_smarty_tpl->tpl_vars['g']->value['gas_type'];?>
"> <?php echo $_smarty_tpl->tpl_vars['g']->value['gas_type'];?>
 </label>
                <input type="radio" name="gas_type" value="<?php echo $_smarty_tpl->tpl_vars['g']->value['gas_type'];?>
" id="<?php echo $_smarty_tpl->tpl_vars['g']->value['gas_type'];?>
">
                
                <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
index/edit/<?php echo $_smarty_tpl->tpl_vars['g']->value['gas_id'];?>
">Изменить цену</a>
                
                <small>&#40;<i><?php echo $_smarty_tpl->tpl_vars['g']->value['gas_price'];?>
</i>&#41;</small>
                <br>
            <?php } ?>
        </p>
    <?php }?>
    <p>
        <label for="input_pay"> Ввод </label>
        <input type="number" min="0" max="10000" step="0.01" id="input_pay" class="validate[required]" name="input_pay" value="">
    </p>
    <p>
        <input type="submit" value="Купить">
    </p>
</form><?php }} ?>
