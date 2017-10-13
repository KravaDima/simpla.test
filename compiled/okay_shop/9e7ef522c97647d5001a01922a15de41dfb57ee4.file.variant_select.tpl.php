<?php /* Smarty version Smarty-3.1.18, created on 2017-09-25 00:56:37
         compiled from "D:\OpenServer\domains\simpla.test\design\okay_shop\html\variant_select.tpl" */ ?>
<?php /*%%SmartyHeaderCode:243359c81ea9ea1c98-26933257%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9e7ef522c97647d5001a01922a15de41dfb57ee4' => 
    array (
      0 => 'D:\\OpenServer\\domains\\simpla.test\\design\\okay_shop\\html\\variant_select.tpl',
      1 => 1506288589,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '243359c81ea9ea1c98-26933257',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_59c81ea9f1ecb8_23752992',
  'variables' => 
  array (
    'product' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59c81ea9f1ecb8_23752992')) {function content_59c81ea9f1ecb8_23752992($_smarty_tpl) {?><!-- Отображение вариантов товара в виде "выпадающий список" -->
<select name="variant" class="fn_variant variant_select">
	<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product']->value->variants; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
		<option value="<?php echo $_smarty_tpl->tpl_vars['v']->value->id;?>
" data-price="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['convert'][0][0]->convert($_smarty_tpl->tpl_vars['v']->value->price);?>
" data-stock="<?php echo $_smarty_tpl->tpl_vars['v']->value->stock;?>
"<?php if ($_smarty_tpl->tpl_vars['v']->value->compare_price>0) {?> data-cprice="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['convert'][0][0]->convert($_smarty_tpl->tpl_vars['v']->value->compare_price);?>
"<?php }?><?php if ($_smarty_tpl->tpl_vars['v']->value->sku) {?> data-sku="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['v']->value->sku, ENT_QUOTES, 'UTF-8', true);?>
"<?php }?> <?php if ($_smarty_tpl->tpl_vars['v']->value->units) {?>data-units="<?php echo $_smarty_tpl->tpl_vars['v']->value->units;?>
"<?php }?>><?php if ($_smarty_tpl->tpl_vars['v']->value->name) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['v']->value->name, ENT_QUOTES, 'UTF-8', true);?>
<?php } else { ?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->name, ENT_QUOTES, 'UTF-8', true);?>
<?php }?>
		</option>
	<?php } ?>
</select><?php }} ?>
