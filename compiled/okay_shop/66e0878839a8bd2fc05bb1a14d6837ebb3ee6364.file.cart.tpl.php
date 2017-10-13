<?php /* Smarty version Smarty-3.1.18, created on 2017-09-25 22:58:02
         compiled from "D:\OpenServer\domains\simpla.test\design\okay_shop\html\cart.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1701859ac6a11c353b2-81897589%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '66e0878839a8bd2fc05bb1a14d6837ebb3ee6364' => 
    array (
      0 => 'D:\\OpenServer\\domains\\simpla.test\\design\\okay_shop\\html\\cart.tpl',
      1 => 1506369064,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1701859ac6a11c353b2-81897589',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_59ac6a11da4717_89600412',
  'variables' => 
  array (
    'lang' => 0,
    'cart' => 0,
    'error' => 0,
    'name' => 0,
    'sername' => 0,
    'phone' => 0,
    'email' => 0,
    'address' => 0,
    'comment' => 0,
    'settings' => 0,
    'captcha_cart' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59ac6a11da4717_89600412')) {function content_59ac6a11da4717_89600412($_smarty_tpl) {?>


<?php $_smarty_tpl->tpl_vars['meta_title'] = new Smarty_variable($_smarty_tpl->tpl_vars['lang']->value->cart_title, null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['meta_title'] = clone $_smarty_tpl->tpl_vars['meta_title'];?>

<?php if ($_smarty_tpl->tpl_vars['cart']->value->purchases) {?>
    
    <form method="post" name="cart" class="fn_validate_cart">
        
        <h1 class="h2"><span data-language="cart_header"><?php echo $_smarty_tpl->tpl_vars['lang']->value->cart_header;?>
</span></h1>

        
        <div id="fn_purchases">
            <?php echo $_smarty_tpl->getSubTemplate ('cart_purchases.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        </div>

        
        <div id="fn_ajax_deliveries">
            <?php echo $_smarty_tpl->getSubTemplate ('cart_deliveries.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        </div>
        
        
        <div class="h2" data-language="cart_form_header"><?php echo $_smarty_tpl->tpl_vars['lang']->value->cart_form_header;?>
</div>

        <div class="block padding"> 
            
            <?php if ($_smarty_tpl->tpl_vars['error']->value) {?>
                <div class="message_error">
                    <?php if ($_smarty_tpl->tpl_vars['error']->value=='empty_name') {?>
                        <span data-language="form_enter_name"><?php echo $_smarty_tpl->tpl_vars['lang']->value->form_enter_name;?>
</span>
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['error']->value=='empty_sername') {?>
                        <span data-language="form_enter_sername"><?php echo $_smarty_tpl->tpl_vars['lang']->value->form_enter_sername;?>
</span>
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['error']->value=='empty_email') {?>
                        <span data-language="form_enter_email"><?php echo $_smarty_tpl->tpl_vars['lang']->value->form_enter_email;?>
</span>
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['error']->value=='captcha') {?>
                        <span data-language="form_error_captcha"><?php echo $_smarty_tpl->tpl_vars['lang']->value->form_error_captcha;?>
</span>
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['error']->value=='empty_phone') {?>
                        <span data-language="form_error_phone"><?php echo $_smarty_tpl->tpl_vars['lang']->value->form_error_phone;?>
</span>
                    <?php }?>
                </div>
            <?php }?>

            <div class="row">
                
                <div class="form_group col-sm-4">
                    <input class="form_input" name="name" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8', true);?>
" data-language="form_name" placeholder="<?php echo $_smarty_tpl->tpl_vars['lang']->value->form_name;?>
*">
                </div>
                
                <div class="form_group col-sm-4">
                    <input class="form_input" name="sername" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['sername']->value, ENT_QUOTES, 'UTF-8', true);?>
" data-language="form_sername" placeholder="<?php echo $_smarty_tpl->tpl_vars['lang']->value->form_sername;?>
*">
                </div>

                
                <div class="form_group col-sm-4">
                    <input class="form_input" name="phone" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['phone']->value, ENT_QUOTES, 'UTF-8', true);?>
" data-language="form_phone" placeholder="<?php echo $_smarty_tpl->tpl_vars['lang']->value->form_phone;?>
">
                </div>
            </div>

            <div class="row">
                
                <div class="form_group col-sm-6">
                    <input class="form_input" name="email" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['email']->value, ENT_QUOTES, 'UTF-8', true);?>
" data-language="form_email" placeholder="<?php echo $_smarty_tpl->tpl_vars['lang']->value->form_email;?>
*">
                </div>

                
                <div class="form_group col-sm-6">
                    <input class="form_input" name="address" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['address']->value, ENT_QUOTES, 'UTF-8', true);?>
" data-language="form_address" placeholder="<?php echo $_smarty_tpl->tpl_vars['lang']->value->form_address;?>
">
                </div>
            </div>

            
            <div class="form_group">
                <textarea class="form_textarea" rows="5" name="comment" data-language="cart_order_comment" placeholder="<?php echo $_smarty_tpl->tpl_vars['lang']->value->cart_order_comment;?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['comment']->value, ENT_QUOTES, 'UTF-8', true);?>
</textarea>
            </div>

            
            <?php if ($_smarty_tpl->tpl_vars['settings']->value->captcha_cart) {?>
                <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_captcha'][0][0]->get_captcha_plugin(array('var'=>"captcha_cart"),$_smarty_tpl);?>

                <div class="captcha">
                    <div class="secret_number"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['captcha_cart']->value[0], ENT_QUOTES, 'UTF-8', true);?>
 + ? =  <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['captcha_cart']->value[1], ENT_QUOTES, 'UTF-8', true);?>
</div>
                    <input class="form_input input_captcha" type="text" name="captcha_code" value="" data-language="form_enter_captcha" placeholder="<?php echo $_smarty_tpl->tpl_vars['lang']->value->form_enter_captcha;?>
*">
                </div>
            <?php }?>

            
            <input class="button" type="submit" name="checkout" data-language="cart_checkout" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value->cart_checkout;?>
">
        </div>    
    </form>

<?php } else { ?>
    <div class="block"> 
        
        <h1 class="h1"><span data-language="cart_header"><?php echo $_smarty_tpl->tpl_vars['lang']->value->cart_header;?>
</span></h1>

        <p class="block padding" data-language="cart_empty"><?php echo $_smarty_tpl->tpl_vars['lang']->value->cart_empty;?>
</p>
    </div>
<?php }?>

<?php }} ?>
