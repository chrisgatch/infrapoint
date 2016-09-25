<?php /* Smarty version Smarty-3.1.21, created on 2016-09-21 09:17:05
         compiled from "/Users/mnorris/Sites/whmcs/templates/orderforms/premium_comparison/products.tpl" */ ?>
<?php /*%%SmartyHeaderCode:159425123157e2885147b1a3-54584998%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'be7aa223c2865dc4eed5d08bf5f940467b70bba2' => 
    array (
      0 => '/Users/mnorris/Sites/whmcs/templates/orderforms/premium_comparison/products.tpl',
      1 => 1460410448,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '159425123157e2885147b1a3-54584998',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'WEB_ROOT' => 0,
    'carttpl' => 0,
    'LANG' => 0,
    'showSidebarToggle' => 0,
    'productGroup' => 0,
    'errormessage' => 0,
    'products' => 0,
    'product' => 0,
    'value' => 0,
    'feature' => 0,
    'features' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_57e2885278b291_45622034',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57e2885278b291_45622034')) {function content_57e2885278b291_45622034($_smarty_tpl) {?><link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/templates/orderforms/<?php echo $_smarty_tpl->tpl_vars['carttpl']->value;?>
/css/style.css" property="stylesheet" />
<?php echo '<script'; ?>
>
jQuery(document).ready(function () {
    jQuery('#btnShowSidebar').click(function () {
        if (jQuery(".product-selection-sidebar").is(":visible")) {
            jQuery('.row-product-selection').css('left','0');
            jQuery('.product-selection-sidebar').fadeOut();
            jQuery('#btnShowSidebar').html('<i class="fa fa-arrow-circle-right"></i> <?php echo $_smarty_tpl->tpl_vars['LANG']->value['showMenu'];?>
');
        } else {
            jQuery('.product-selection-sidebar').fadeIn();
            jQuery('.row-product-selection').css('left','300px');
            jQuery('#btnShowSidebar').html('<i class="fa fa-arrow-circle-left"></i> <?php echo $_smarty_tpl->tpl_vars['LANG']->value['hideMenu'];?>
');
        }
    });
});
<?php echo '</script'; ?>
>

<?php if ($_smarty_tpl->tpl_vars['showSidebarToggle']->value) {?>
    <button type="button" class="btn btn-default btn-sm" id="btnShowSidebar">
        <i class="fa fa-arrow-circle-right"></i>
        <?php echo $_smarty_tpl->tpl_vars['LANG']->value['showMenu'];?>

    </button>
<?php }?>

<div class="row row-product-selection">
    <div class="col-xs-3 product-selection-sidebar" id="premiumComparisonSidebar">
        <?php echo $_smarty_tpl->getSubTemplate ("orderforms/standard_cart/sidebar-categories.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    </div>
    <div class="col-xs-12">

        <div id="order-premium_comparison">
            <div class="main-container price-01">
                <div class="txt-center">
                    <h3 id="headline">
                        <?php if ($_smarty_tpl->tpl_vars['productGroup']->value['headline']) {?>
                            <?php echo $_smarty_tpl->tpl_vars['productGroup']->value['headline'];?>

                        <?php } else { ?>
                            <?php echo $_smarty_tpl->tpl_vars['productGroup']->value['name'];?>

                        <?php }?>
                    </h3>
                    <?php if ($_smarty_tpl->tpl_vars['productGroup']->value['tagline']) {?>
                        <h5 id="tagline">
                            <?php echo $_smarty_tpl->tpl_vars['productGroup']->value['tagline'];?>

                        </h5>
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['errormessage']->value) {?>
                        <div class="alert alert-danger">
                            <?php echo $_smarty_tpl->tpl_vars['errormessage']->value;?>

                        </div>
                    <?php }?>
                </div>
                <div id="products" class="price-table-container">
                    <ul>
                        <?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['product']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->_loop = true;
 $_smarty_tpl->tpl_vars['product']->iteration++;
?>
                            <li id="product<?php echo $_smarty_tpl->tpl_vars['product']->iteration;?>
">
                                <div class="price-table">
                                    <div class="top-head">
                                        <div class="top-area">
                                            <h4 id="product<?php echo $_smarty_tpl->tpl_vars['product']->iteration;?>
-name"><?php echo $_smarty_tpl->tpl_vars['product']->value['name'];?>
</h4>
                                        </div>
                                        <?php if ($_smarty_tpl->tpl_vars['product']->value['tagLine']) {?>
                                            <p id="product<?php echo $_smarty_tpl->tpl_vars['product']->iteration;?>
-tag-line"><?php echo $_smarty_tpl->tpl_vars['product']->value['tagLine'];?>
</p>
                                        <?php }?>
                                        <?php if ($_smarty_tpl->tpl_vars['product']->value['isFeatured']) {?>
                                            <div class="popular-plan">
                                                <?php echo mb_strtoupper($_smarty_tpl->tpl_vars['LANG']->value['featuredProduct'], 'UTF-8');?>

                                            </div>
                                        <?php }?>

                                        <div class="price-area">
                                            <div class="price" id="product<?php echo $_smarty_tpl->tpl_vars['product']->iteration;?>
-price">
                                                <?php if ($_smarty_tpl->tpl_vars['product']->value['bid']) {?>
                                                    <?php echo $_smarty_tpl->tpl_vars['LANG']->value['bundledeal'];?>

                                                    <?php if ($_smarty_tpl->tpl_vars['product']->value['displayprice']) {?>
                                                        <br /><br /><span><?php echo $_smarty_tpl->tpl_vars['product']->value['displayPriceSimple'];?>
</span>
                                                    <?php }?>
                                                <?php } elseif ($_smarty_tpl->tpl_vars['product']->value['paytype']=="free") {?>
                                                    <?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderfree'];?>

                                                <?php } elseif ($_smarty_tpl->tpl_vars['product']->value['paytype']=="onetime") {?>
                                                    <?php echo $_smarty_tpl->tpl_vars['product']->value['pricing']['onetime'];?>
 <?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderpaymenttermonetime'];?>

                                                <?php } else { ?>
                                                    <?php if ($_smarty_tpl->tpl_vars['product']->value['pricing']['hasconfigoptions']) {?>
                                                        <?php echo $_smarty_tpl->tpl_vars['LANG']->value['from'];?>

                                                    <?php }?>
                                                    <?php echo $_smarty_tpl->tpl_vars['product']->value['pricing']['minprice']['cycleText'];?>

                                                <?php }?>
                                            </div>
                                            <?php if ($_smarty_tpl->tpl_vars['product']->value['qty']=="0") {?>
                                                <span id="product<?php echo $_smarty_tpl->tpl_vars['product']->iteration;?>
-unavailable" class="order-button unavailable"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['outofstock'];?>
</span>
                                            <?php } else { ?>
                                                <a href="<?php echo $_SERVER['PHP_SELF'];?>
?a=add&amp;<?php if ($_smarty_tpl->tpl_vars['product']->value['bid']) {?>bid=<?php echo $_smarty_tpl->tpl_vars['product']->value['bid'];
} else { ?>pid=<?php echo $_smarty_tpl->tpl_vars['product']->value['pid'];
}?>" class="order-button" id="product<?php echo $_smarty_tpl->tpl_vars['product']->iteration;?>
-order-button">
                                                    <?php echo $_smarty_tpl->tpl_vars['LANG']->value['ordernowbutton'];?>

                                                </a>
                                            <?php }?>

                                        </div>
                                    </div>
                                    <ul>
                                        <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['feature'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['product']->value['features']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['value']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['feature']->value = $_smarty_tpl->tpl_vars['value']->key;
 $_smarty_tpl->tpl_vars['value']->iteration++;
?>
                                            <li id="product<?php echo $_smarty_tpl->tpl_vars['product']->iteration;?>
-feature<?php echo $_smarty_tpl->tpl_vars['value']->iteration;?>
">
                                                <?php echo $_smarty_tpl->tpl_vars['value']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['feature']->value;?>

                                            </li>
                                        <?php }
if (!$_smarty_tpl->tpl_vars['value']->_loop) {
?>
                                            <li id="product<?php echo $_smarty_tpl->tpl_vars['product']->iteration;?>
-description">
                                                <?php echo $_smarty_tpl->tpl_vars['product']->value['description'];?>

                                            </li>
                                        <?php } ?>
                                    </ul>
                                </div>
                            </li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
            <?php if (count($_smarty_tpl->tpl_vars['productGroup']->value['features'])>0) {?>
                <div class="includes-features">
                    <div class="row clearfix">
                        <div class="col-md-12">
                            <div class="head-area">
                                <span>
                                    <?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderForm']['includedWithPlans'];?>

                                </span>
                            </div>
                            <ul class="list-features">
                                <?php  $_smarty_tpl->tpl_vars['features'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['features']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['productGroup']->value['features']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['features']->key => $_smarty_tpl->tpl_vars['features']->value) {
$_smarty_tpl->tpl_vars['features']->_loop = true;
?>
                                    <li><?php echo $_smarty_tpl->tpl_vars['features']->value['feature'];?>
</li>
                                <?php } ?>
                            </ul>
                        </div>
                    </div>
                </div>
            <?php }?>
        </div>

    </div>
</div>
<?php }} ?>
