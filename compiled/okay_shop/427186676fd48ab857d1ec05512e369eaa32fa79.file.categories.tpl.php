<?php /* Smarty version Smarty-3.1.18, created on 2017-09-03 23:45:35
         compiled from "D:\OpenServer\domains\simpla.test\design\okay_shop\html\categories.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2337059ac69ef2c3572-05699786%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '427186676fd48ab857d1ec05512e369eaa32fa79' => 
    array (
      0 => 'D:\\OpenServer\\domains\\simpla.test\\design\\okay_shop\\html\\categories.tpl',
      1 => 1504471427,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2337059ac69ef2c3572-05699786',
  'function' => 
  array (
    'categories_tree' => 
    array (
      'parameter' => 
      array (
      ),
      'compiled' => '',
    ),
  ),
  'variables' => 
  array (
    'categories' => 0,
    'level' => 0,
    'c' => 0,
    'category' => 0,
    'lang_link' => 0,
  ),
  'has_nocache_code' => 0,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_59ac69ef3a9d31_86030906',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59ac69ef3a9d31_86030906')) {function content_59ac69ef3a9d31_86030906($_smarty_tpl) {?><nav class="categories_nav">
    <?php if (!function_exists('smarty_template_function_categories_tree')) {
    function smarty_template_function_categories_tree($_smarty_tpl,$params) {
    $saved_tpl_vars = $_smarty_tpl->tpl_vars;
    foreach ($_smarty_tpl->smarty->template_functions['categories_tree']['parameter'] as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);};
    foreach ($params as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);}?>
        <?php if ($_smarty_tpl->tpl_vars['categories']->value) {?>
            <ul class="<?php if ($_smarty_tpl->tpl_vars['level']->value==1) {?>categories_menu level_<?php echo $_smarty_tpl->tpl_vars['level']->value;?>
<?php } else { ?>subcategory level_<?php echo $_smarty_tpl->tpl_vars['level']->value;?>
 <?php }?>">
                <?php  $_smarty_tpl->tpl_vars['c'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['c']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['categories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['c']->key => $_smarty_tpl->tpl_vars['c']->value) {
$_smarty_tpl->tpl_vars['c']->_loop = true;
?>
                    <?php if ($_smarty_tpl->tpl_vars['c']->value->visible) {?>
                        <?php if ($_smarty_tpl->tpl_vars['c']->value->subcategories&&$_smarty_tpl->tpl_vars['c']->value->has_children_visible) {?>
                            <li class="category_item">
                                <a class="category_link<?php if ($_smarty_tpl->tpl_vars['category']->value->id==$_smarty_tpl->tpl_vars['c']->value->id) {?> selected<?php }?>" href="<?php echo $_smarty_tpl->tpl_vars['lang_link']->value;?>
catalog/<?php echo $_smarty_tpl->tpl_vars['c']->value->url;?>
" data-category="<?php echo $_smarty_tpl->tpl_vars['c']->value->id;?>
">
                                    <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['c']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</span>
                                    <i class="arrow_right tablet-hidden"><?php echo $_smarty_tpl->getSubTemplate ('svg.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('svgId'=>'arrow_right'), 0);?>
</i>
                                </a>
                                <i class="fn_switch cat_switch lg-hidden"></i>
                                <?php smarty_template_function_categories_tree($_smarty_tpl,array('categories'=>$_smarty_tpl->tpl_vars['c']->value->subcategories,'level'=>$_smarty_tpl->tpl_vars['level']->value+1));?>

                            </li>
                        <?php } else { ?>
                            <li class="category_item">
                                <a class="category_link<?php if ($_smarty_tpl->tpl_vars['category']->value->id==$_smarty_tpl->tpl_vars['c']->value->id) {?> selected<?php }?>" href="<?php echo $_smarty_tpl->tpl_vars['lang_link']->value;?>
catalog/<?php echo $_smarty_tpl->tpl_vars['c']->value->url;?>
" data-category="<?php echo $_smarty_tpl->tpl_vars['c']->value->id;?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['c']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</a>
                            </li>
                        <?php }?>
                    <?php }?>
                <?php } ?>
            </ul>
        <?php }?>
    <?php $_smarty_tpl->tpl_vars = $saved_tpl_vars;
foreach (Smarty::$global_tpl_vars as $key => $value) if(!isset($_smarty_tpl->tpl_vars[$key])) $_smarty_tpl->tpl_vars[$key] = $value;}}?>

    <?php smarty_template_function_categories_tree($_smarty_tpl,array('categories'=>$_smarty_tpl->tpl_vars['categories']->value,'level'=>1));?>

</nav><?php }} ?>
