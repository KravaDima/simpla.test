<?php /* Smarty version Smarty-3.1.18, created on 2017-09-22 23:54:56
         compiled from "D:\OpenServer\domains\simpla.test\design\okay_shop\html\page_404.tpl" */ ?>
<?php /*%%SmartyHeaderCode:170759c578a0777cf5-20015929%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '267feeb1c9364dde3e2ee8797d555d329cd4ebf2' => 
    array (
      0 => 'D:\\OpenServer\\domains\\simpla.test\\design\\okay_shop\\html\\page_404.tpl',
      1 => 1504471427,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '170759c578a0777cf5-20015929',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'page' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_59c578a07a2c82_19801726',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59c578a07a2c82_19801726')) {function content_59c578a07a2c82_19801726($_smarty_tpl) {?>


<h1 class="h1"><span data-page="<?php echo $_smarty_tpl->tpl_vars['page']->value->id;?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</span></h1>


<div class="block padding">
    <?php echo $_smarty_tpl->tpl_vars['page']->value->description;?>

</div><?php }} ?>
