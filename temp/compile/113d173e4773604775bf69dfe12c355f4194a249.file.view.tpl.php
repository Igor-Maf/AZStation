<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-01-06 22:37:04
         compiled from "E:\xampp\htdocs\azs-app\views\clients\view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:740954ac2ab137e7d8-56559256%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '113d173e4773604775bf69dfe12c355f4194a249' => 
    array (
      0 => 'E:\\xampp\\htdocs\\azs-app\\views\\clients\\view.tpl',
      1 => 1420580192,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '740954ac2ab137e7d8-56559256',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54ac2ab13dff65_73221564',
  'variables' => 
  array (
    'cl' => 0,
    '_layoutParams' => 0,
    'gifts' => 0,
    'g' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54ac2ab13dff65_73221564')) {function content_54ac2ab13dff65_73221564($_smarty_tpl) {?><h1>Страница клиента</h1>
<div class="third">
    <p class="access">Код клиента - <?php echo $_smarty_tpl->tpl_vars['cl']->value['client_id'];?>
</p>
    <p>
        Ф.И.О. - <b><?php echo $_smarty_tpl->tpl_vars['cl']->value['client_fio'];?>
</b>
    </p>
    <p>
        Адресс - <b><?php echo $_smarty_tpl->tpl_vars['cl']->value['client_address'];?>
</b>
    </p>
    <p>
        Email - <b><?php echo $_smarty_tpl->tpl_vars['cl']->value['client_mail'];?>
</b>
    </p>
    <p>
        Телефон - <b><?php echo $_smarty_tpl->tpl_vars['cl']->value['client_number'];?>
</b>
    </p>
    <p>
        У вас есть <b><?php echo $_smarty_tpl->tpl_vars['cl']->value['client_scores'];?>
</b> б.
    </p>
    <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
clients/edit/<?php echo $_smarty_tpl->tpl_vars['cl']->value['client_id'];?>
">Редактировать профиль</a>
</div>

<div class="two-third">    
    <?php if (isset($_smarty_tpl->tpl_vars['gifts']->value)&&count($_smarty_tpl->tpl_vars['gifts']->value)) {?>
        <p class="access">Вам доступно <?php echo count($_smarty_tpl->tpl_vars['gifts']->value);?>
 подарков.</p>
        <table>
            <?php  $_smarty_tpl->tpl_vars['g'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['g']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['gifts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['g']->key => $_smarty_tpl->tpl_vars['g']->value) {
$_smarty_tpl->tpl_vars['g']->_loop = true;
?>
                <tr>
                    <td><img src="<?php echo $_smarty_tpl->tpl_vars['g']->value['gift_thumb_url'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['g']->value['gift_name'];?>
" class="thumbnail"></td>
                    <td><?php echo stripslashes($_smarty_tpl->tpl_vars['g']->value['gift_name']);?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['g']->value['gift_scores'];?>
</td>
                    <td><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
clients/get/<?php echo $_smarty_tpl->tpl_vars['cl']->value['client_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['g']->value['gift_scores'];?>
">Забрать подарок</a></td>
                </tr>
            <?php } ?>
        </table>
    <?php } else { ?>
        <p> У пользователя недостаточно баллов, чтобы получить подарок. </p>
    <?php }?>
</div><?php }} ?>
