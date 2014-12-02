<?php /* Smarty version Smarty-3.1.21-dev, created on 2014-12-02 19:34:00
         compiled from "E:\xampp\htdocs\azs-app\views\layout\default\template.tpl" */ ?>
<?php /*%%SmartyHeaderCode:151535468a4762b97d4-00283436%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '51dd3fafc78795ed7923048e8ee96ae2d69492d3' => 
    array (
      0 => 'E:\\xampp\\htdocs\\azs-app\\views\\layout\\default\\template.tpl',
      1 => 1417545235,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '151535468a4762b97d4-00283436',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5468a476715408_63992948',
  'variables' => 
  array (
    'title' => 0,
    '_layoutParams' => 0,
    'js' => 0,
    'menu' => 0,
    '_access' => 0,
    '_error' => 0,
    '_content' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5468a476715408_63992948')) {function content_5468a476715408_63992948($_smarty_tpl) {?><!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title><?php echo (($tmp = @$_smarty_tpl->tpl_vars['title']->value)===null||$tmp==='' ? "Traffic-CRS" : $tmp);?>
</title>
        <link href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
favicon.ico" rel="icon" type="image/x-icon" />
        <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/js/jquery.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/js/jquery.validationEngine-ru.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/js/jquery.validationEngine.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/js/jquery.jclock.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/js/main.js"><?php echo '</script'; ?>
>
        
        <?php if (isset($_smarty_tpl->tpl_vars['_layoutParams']->value['js'])&&count($_smarty_tpl->tpl_vars['_layoutParams']->value['js'])) {?>
            <?php  $_smarty_tpl->tpl_vars['js'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['js']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['_layoutParams']->value['js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['js']->key => $_smarty_tpl->tpl_vars['js']->value) {
$_smarty_tpl->tpl_vars['js']->_loop = true;
?>
                <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['js']->value;?>
"><?php echo '</script'; ?>
>
            <?php } ?>
        <?php }?>
        
        <link href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/css/validationEngine.jquery.css" type="text/css" rel="stylesheet"/>
        <link href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root_css'];?>
style.css" type="text/css" rel="stylesheet"/>
        <link href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root_css'];?>
page.css" type="text/css" rel="stylesheet"/>
    </head>
    <body>
        <div class="wrapper">
            <header>
                <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
" class="app-title">
                    <h1><?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['app_name'];?>
</h1>
                </a>
                <ul class="menu">
                    <?php if (isset($_smarty_tpl->tpl_vars['_layoutParams']->value['menu'])) {?>
                        <?php  $_smarty_tpl->tpl_vars['menu'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['menu']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['_layoutParams']->value['menu']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['menu']->key => $_smarty_tpl->tpl_vars['menu']->value) {
$_smarty_tpl->tpl_vars['menu']->_loop = true;
?>
                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['menu']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['menu']->value['title'];?>
</a></li>
                        <?php } ?>
                    <?php }?>
                </ul>
            </header>
            <section>
                <?php if (isset($_smarty_tpl->tpl_vars['_access']->value)) {?>
                    <div class="access"><?php echo $_smarty_tpl->tpl_vars['_access']->value;?>
</div>
                <?php }?>
                <?php if (isset($_smarty_tpl->tpl_vars['_error']->value)) {?>
                    <div class="error"><?php echo $_smarty_tpl->tpl_vars['_error']->value;?>
</div>
                <?php }?>
                <?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['_content']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

            </section>
            <footer>
                <p class="jclock"></p>
                <p>&copy <?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['app_create'];?>
</p>
            </footer>
        </div>
    </body>
</html><?php }} ?>
