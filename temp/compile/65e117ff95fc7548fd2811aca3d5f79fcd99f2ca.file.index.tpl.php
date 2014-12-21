<?php /* Smarty version Smarty-3.1.21-dev, created on 2014-12-21 17:39:38
         compiled from "E:\xampp\htdocs\azs-app\views\gifts\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10235546b99640f70d7-15806527%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '65e117ff95fc7548fd2811aca3d5f79fcd99f2ca' => 
    array (
      0 => 'E:\\xampp\\htdocs\\azs-app\\views\\gifts\\index.tpl',
      1 => 1419179965,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10235546b99640f70d7-15806527',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_546b9964191bc8_52041240',
  'variables' => 
  array (
    'data' => 0,
    'gifts' => 0,
    '_layoutParams' => 0,
    'g' => 0,
    'pagination' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_546b9964191bc8_52041240')) {function content_546b9964191bc8_52041240($_smarty_tpl) {?><h1> Подарки </h1>
<hr>
<form name="form" id="form" method="post" action="" enctype="multipart/form-data">
    <input type="hidden" name="add_gift" value="1">
    <p>
        <label for="gift_name"> Название </label>
        <input type="text" id="gift_name" class="validate[required]" name="gift_name" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['gift_name'])===null||$tmp==='' ? '' : $tmp);?>
" />
    </p>
    <p>
        <label for="gift_thumb"> Изображение </label>
        <input type="file" id="gift_thumb" class="validate[required]" name="gift_thumb" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['gift_thumb'])===null||$tmp==='' ? '' : $tmp);?>
"/>
    </p>  
    <p>
        <label for="gift_scores"> Баллы </label>
        <input type="number" min="10" step="10" id="gift_scores" class="validate[required]" name="gift_scores" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['gift_scores'])===null||$tmp==='' ? '' : $tmp);?>
}" />
    </p>
    <p>
        <input type="submit" value="Добавить подарок">
    </p>
</form>
<hr>
 
<?php if (isset($_smarty_tpl->tpl_vars['gifts']->value)&&count($_smarty_tpl->tpl_vars['gifts']->value)) {?>
    <table>
        <tr>
            <th><img src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root_img'];?>
icons/thumb.png" title="Изображение" class="icon"></th>
            <th>Подарок</th>
            <th>Баллы</th>
            <th>
                <img src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root_img'];?>
icons/delete-property.png" title="Удаление" class="icon">
            </th>
        </tr>
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
                <td>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
gifts/delete/<?php echo $_smarty_tpl->tpl_vars['g']->value['gift_id'];?>
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
    <p> Не найдено ни одного подарка. </p>
<?php }?><?php }} ?>
