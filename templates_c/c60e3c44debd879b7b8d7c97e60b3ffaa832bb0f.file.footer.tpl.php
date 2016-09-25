<?php /* Smarty version Smarty-3.1.21, created on 2016-09-21 08:13:24
         compiled from "/Users/mnorris/Sites/whmcs/templates/cloudocean/footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:96163115457e27964585ca7-23076054%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c60e3c44debd879b7b8d7c97e60b3ffaa832bb0f' => 
    array (
      0 => '/Users/mnorris/Sites/whmcs/templates/cloudocean/footer.tpl',
      1 => 1470687958,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '96163115457e27964585ca7-23076054',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'inShoppingCart' => 0,
    'secondarySidebar' => 0,
    'date_year' => 0,
    'companyname' => 0,
    'WEB_ROOT' => 0,
    'template' => 0,
    'BASE_PATH_JS' => 0,
    'footeroutput' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_57e279645cc179_77006103',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57e279645cc179_77006103')) {function content_57e279645cc179_77006103($_smarty_tpl) {?></div>
<!-- /.main-content -->
<?php if (!$_smarty_tpl->tpl_vars['inShoppingCart']->value&&$_smarty_tpl->tpl_vars['secondarySidebar']->value->hasChildren()) {?>
<div class="col-md-3 pull-md-left sidebar">
    <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('sidebar'=>$_smarty_tpl->tpl_vars['secondarySidebar']->value), 0);?>

</div>
<?php }?>
</div>
<div class="clearfix"></div>
</section>

<!-- Footer -->
<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="contact-b">
                <!-- Contact -->
                <div class="col-lg-4 col-xs-12 col-sm-6">
                    <!-- Get In Touch -->
                    <div class="getin-t">
                        <h1>Get in Touch ;&#41;</h1>
                        <div class="methods">
                            <div class="method">
                                <span class="fa fa-home"></span>
                                <span>42 Nicholson Street Buffalo New York US 19865</span>
                            </div>
                            <div class="method">
                                <span class="fa fa-phone"></span>
                                <span>+201112357755</span>
                            </div>
                            <div class="method">
                                <span class="fa fa-envelope"></span>
                                <span>info@WHMCSdes.com</span>
                            </div>
                            <div class="method">
                                <span class="fa fa-calendar"></span>
                                <span>Monday - Saturday : 8:00 Am - 18:00 Pm <br /> Friday : Closed</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Products -->
            <div class="col-lg-2 col-xs-12 col-sm-3">
                <div class="products-footer">
                    <h1>Products</h1>
                    <ul>
                        <li><a href="shared-hosting.php">Shared Hosting</a></li>
                        <li><a href="cloud-hosting.php">Cloud Hosting</a></li>
                        <li><a href="dedicated-hosting.php">Dedicated Hosting</a></li>
                        <li><a href="domains.php">Domains</a></li>
                        <li><a href="support.php">Support</a></li>
                        <li><a href="seo.php">Seo</a></li>
                        <li><a href="web-design.php">Web Design</a></li>
                        <li><a href="web-development.php">Web Development</a></li>
                    </ul>
                </div>
            </div>

            <!-- Company -->
            <div class="col-lg-2 col-xs-12 col-sm-3">
                <div class="company-footer">
                    <h1>Company</h1>
                    <ul>
                        <li><a href="about.php">About us</a></li>
                        <li><a href="#">Client Area</a></li>
                        <li><a href="contact.php">Careers</a></li>
                        <li><a href="#">Knowledge Base</a></li>
                        <li><a href="blog1.php">Blog</a></li>
                        <li><a href="portfolio.php">Portfolio</a></li>
                        <li><a href="login.php">Login</a></li>
                        <li><a href="register.php">Register</a></li>
                    </ul>
                </div>
            </div>
            <div class="contact-b">
                <div class="col-lg-4 col-xs-12 col-sm-6">
                    <!-- Follow us -->
                    <div class="followus">
                        <h1>Follow us</h1>
                        <ul>
                            <li>
                                <a class="fa fa-facebook" href="#"></a>
                            </li>
                            <li>
                                <a class="fa fa-twitter" href="#"></a>
                            </li>
                            <li>
                                <a class="fa fa-instagram" href="#"></a>
                            </li>
                            <li>
                                <a class="fa fa-linkedin" href="#"></a>
                            </li>
                            <li>
                                <a class="fa fa-google-plus" href="#"></a>
                            </li>
                            <li>
                                <a class="fa fa-pinterest" href="#"></a>
                            </li>
                        </ul>
                    </div>
                    <!-- Payment  -->
                    <div class="payment">
                        <h1>Payment</h1>
                        <span class="fa fa-cc-visa"></span>
                        <span class="fa fa-cc-mastercard"></span>
                        <span class="fa fa-cc-paypal"></span>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="row">
            <p class="copyr">Copyright &copy; <?php echo $_smarty_tpl->tpl_vars['date_year']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['companyname']->value;?>
. All Rights Reserved.</p>
            <!-- Important Links -->
            <ul class="impo-l">
                <li><a href="terms.php">Terms of Services</a></li>
                <li><a href="privacy.php">Privacy Policy</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </div>
    </div>
</footer>

<!-- Carousel -->
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/js/owl.carousel.min.js"><?php echo '</script'; ?>
>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<!-- CountDown -->
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/js/jquery.plugin.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/js/jquery.countdown.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/js/bootstrap.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['BASE_PATH_JS']->value;?>
/jquery-ui.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/js/whmcs.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['BASE_PATH_JS']->value;?>
/AjaxModal.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/js/plugins.js"><?php echo '</script'; ?>
>
<?php echo $_smarty_tpl->tpl_vars['footeroutput']->value;?>

</body>

</html><?php }} ?>
