<?php /* Smarty version Smarty-3.1.21, created on 2016-09-24 20:29:53
         compiled from "/Users/mnorris/Sites/whmcs/templates/cloudocean/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:162947484557e2796438e1e5-79119665%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e4eae4d9ae9b47cb1d5d8a5d7cbff818ad3a1a65' => 
    array (
      0 => '/Users/mnorris/Sites/whmcs/templates/cloudocean/header.tpl',
      1 => 1474763036,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '162947484557e2796438e1e5-79119665',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_57e279644f08a3_32991454',
  'variables' => 
  array (
    'charset' => 0,
    'kbarticle' => 0,
    'pagetitle' => 0,
    'companyname' => 0,
    'headoutput' => 0,
    'headeroutput' => 0,
    'WEB_ROOT' => 0,
    'template' => 0,
    'languagechangeenabled' => 0,
    'locales' => 0,
    'currentpagelinkback' => 0,
    'locale' => 0,
    'cartitemcount' => 0,
    'loggedin' => 0,
    'clientAlerts' => 0,
    'alert' => 0,
    'LANG' => 0,
    'systemsslurl' => 0,
    'templatefile' => 0,
    'inShoppingCart' => 0,
    'primarySidebar' => 0,
    'secondarySidebar' => 0,
    'showingLoginPage' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57e279644f08a3_32991454')) {function content_57e279644f08a3_32991454($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="<?php echo $_smarty_tpl->tpl_vars['charset']->value;?>
" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php if ($_smarty_tpl->tpl_vars['kbarticle']->value['title']) {
echo $_smarty_tpl->tpl_vars['kbarticle']->value['title'];?>
 - <?php }
echo $_smarty_tpl->tpl_vars['pagetitle']->value;?>
 - <?php echo $_smarty_tpl->tpl_vars['companyname']->value;?>
</title>

    <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 <?php echo $_smarty_tpl->tpl_vars['headoutput']->value;?>


</head>

<body>

    <?php echo $_smarty_tpl->tpl_vars['headeroutput']->value;?>

    <!-- Header -->
    <header>
        <div class="container">
            <div class="row">
                <div class="col-lg-2">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <!-- Logo -->
                        <a href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/index.php"><img class="logo" src="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/img/logo.png" alt="<?php echo $_smarty_tpl->tpl_vars['companyname']->value;?>
" width="134" height="49"></a>
                    </div>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="col-lg-9 col-lg-push-1">
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <!-- Menu -->
                        <ul class="menu-header">
                            <!-- Products -->
                            <li>
                                    <a id="dLabel-c" data-target="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" href="#">Product</a>
                            </li>
                            <!-- Technology -->
                            <li>
                                    <a id="dLabel-cu" data-target="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" href="#">About</a>
                            </li>
                            <!-- Partners -->
                            <li>
                                    <a href="partners.php">Partners</a>
                            </li>
                            <!-- Contact Us -->
                            <li>
                                    <a href="contact.php">Contact</a>
                            </li>
                            <li>
                                <!-- Language -->
                                <?php if ($_smarty_tpl->tpl_vars['languagechangeenabled']->value&&count($_smarty_tpl->tpl_vars['locales']->value)>1) {?>
                                <a class="quick-nav" data-toggle="popover" id="languageChooser"><i class="fa fa-language"></i></a>
                                <div id="languageChooserContent" class="hidden">
                                    <ul>
                                        <?php  $_smarty_tpl->tpl_vars['locale'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['locale']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['locales']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['locale']->key => $_smarty_tpl->tpl_vars['locale']->value) {
$_smarty_tpl->tpl_vars['locale']->_loop = true;
?>
                                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['currentpagelinkback']->value;?>
language=<?php echo $_smarty_tpl->tpl_vars['locale']->value['language'];?>
"><?php echo $_smarty_tpl->tpl_vars['locale']->value['localisedName'];?>
</a></li>
                                        <?php } ?>
                                    </ul>
                                </div>
                                <?php }?>
                                <!-- Shopping Cart -->
                                <?php if ($_smarty_tpl->tpl_vars['cartitemcount']->value||$_smarty_tpl->tpl_vars['loggedin']->value) {?>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/cart.php?a=view" class="quick-nav"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs"> </span><span class="cart-item" id="cartItemCount"><?php echo $_smarty_tpl->tpl_vars['cartitemcount']->value;?>
</span><span class="hidden-xs"> </span></a>
                                <?php }?>
                                <!-- Notifications -->
                                <?php if ($_smarty_tpl->tpl_vars['loggedin']->value) {?>
                                <a class="quick-nav" data-toggle="popover" id="accountNotifications" data-placement="bottom" title="<?php echo WHMCS\Smarty::langFunction(array('key'=>" notifications "),$_smarty_tpl);?>
"><i class="fa fa-bell"></i> <span class="count-alert"><?php echo count($_smarty_tpl->tpl_vars['clientAlerts']->value);?>
</span></a>
                                <div id="accountNotificationsContent" class="hidden">
                                    <?php  $_smarty_tpl->tpl_vars['alert'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['alert']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['clientAlerts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['alert']->key => $_smarty_tpl->tpl_vars['alert']->value) {
$_smarty_tpl->tpl_vars['alert']->_loop = true;
?>
                                    <div class="clientalert text-<?php echo $_smarty_tpl->tpl_vars['alert']->value->getSeverity();?>
"><?php echo $_smarty_tpl->tpl_vars['alert']->value->getMessage();
if ($_smarty_tpl->tpl_vars['alert']->value->getLinkText()) {?> <a href="<?php echo $_smarty_tpl->tpl_vars['alert']->value->getLink();?>
" class="btn btn-xs btn-<?php echo $_smarty_tpl->tpl_vars['alert']->value->getSeverity();?>
"><?php echo $_smarty_tpl->tpl_vars['alert']->value->getLinkText();?>
</a><?php }?></div>
                                    <?php }
if (!$_smarty_tpl->tpl_vars['alert']->_loop) {
?>
                                    <div class="clientalert text-success"><i class="fa fa-check-square-o"></i> <?php echo $_smarty_tpl->tpl_vars['LANG']->value['notificationsnone'];?>
</div>
                                    <?php } ?>
                                </div>
                                <?php }?>
                            </li>
                            <!-- Client Area -->
                            <li>
                                <div class="dropdown">
                                    <a id="dLabel" data-target="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" class="clientarea" href="#"><span class="glyphicon glyphicon-user"></span></a>
                                    <div class="custom dropdown-menu" aria-labelledby="dLabel">
                                        <?php if ($_smarty_tpl->tpl_vars['loggedin']->value) {?>
                                        <div class="client-links">
                                            <a href="clientarea.php">Account</a>
                                            <a href="submitticket.php">New Ticket</a>
                                            <a href="cart.php">Cart</a>
                                            <a href="knowledgebase.php">Knowledgebase</a>
                                            <a href="logout.php">Logout</a>
                                        </div>
                                        <?php } else { ?>
                                        <form class="login-area-custom" method="post" action="<?php echo $_smarty_tpl->tpl_vars['systemsslurl']->value;?>
dologin.php">
                                            <!-- Email -->
                                            <input type="email" name="username" class="c-inp" id="inputEmail" placeholder="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['enteremail'];?>
" autofocus>
                                            <!-- Password -->
                                            <input type="password" name="password" class="c-inp" id="inputPassword" placeholder="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareapassword'];?>
" autocomplete="off">
                                            <!-- Login -->
                                            <input id="login" type="submit" class="c-sub" value="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['loginbutton'];?>
" />
                                            <!-- Remember -->
                                            <div class="c-cont">
                                                <input name="rememberme" class="c-check" type="checkbox"><span><?php echo $_smarty_tpl->tpl_vars['LANG']->value['loginrememberme'];?>
</span>
                                            </div>
                                            <!-- Forget password -->
                                            <div class="c-cont">
                                                <span class="fa fa-question"></span><a href="pwreset.php"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['forgotpw'];?>
</a>
                                            </div>
                                            <!-- NewClient -->
                                            <div class="c-cont-c">
                                                <span class="fa fa-user-plus"></span><a href="register.php">New Client</a>
                                            </div>
                                        </form>
                                        <?php }?>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <?php if ($_smarty_tpl->tpl_vars['templatefile']->value=='homepage') {?>
        <!-- Carousel -->
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-lg-push-1">
                    <div class="carousel-p-old">
                        <!-- Dedicated Item -->
                        <div class="item">
                            <h1>Headline Goes Here</h1>
                            <p>Subtext Goes Here</p>
                            <img class="server-d" src="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/img/server.png" height="189" width="613" alt="Deicated Servers">
                            <!-- Features -->
                            <!--
							<div class="features">
                                <div class="c-feature">
                                    <span class="fa fa-check-circle"></span>
                                    <span>4 x 3.3 GHz CPU</span>
                                </div>
                                <div class="c-feature">
                                    <span class="fa fa-check-circle"></span>
                                    <span>1TB (Mirrored) Storage</span>
                                </div>
                                <div class="c-feature">
                                    <span class="fa fa-check-circle"></span>
                                    <span>16GB Available RAM</span>
                                </div>
                                <div class="c-feature">
                                    <span class="fa fa-check-circle"></span>
                                    <span>15TB Bandwidth</span>
                                </div>
								-->
								
                                <!-- Price & Order -->
								<!--
                                <div class="buttons-item hidden-xs">
                                    <div class="price carousel">60.95 $</div>
                                    <a class="order" href="cart.php">Order</a>
                                </div>
								-->
                        </div>
                    </div>
                    <!-- Spport -->
					<!--
                    <div class="item">
                        <h1>Support Resources</h1>
                        <p>We maintain a vast knowledge base full with articles, guides, how-tos, instructions</p>
                        <!-- Resourses -->
						<!--
                        <div class="row">
                            <div class="resources">
                                <div class="col-lg-3 col-sm-3">
                                    <!-- Faq ->
                                    <i class="fa fa-question custom"></i>
                                    <a href="#">Faq</a>
                                </div>
                                <div class="col-lg-3 col-sm-3">
                                    <!-- Tickets ->
                                    <i class="fa fa-comments custom"></i>
                                    <a href="submitticket.php">Tickets</a>
                                </div>
                                <div class="col-lg-3 col-sm-3">
                                    <!-- LiveChat ->
                                    <i class="fa fa-headphones custom"></i>
                                    <a href="#">Live Chat</a>
                                </div>
                                <div class="col-lg-3 col-sm-3">
                                    <!-- Knowledge Base ->
                                    <i class="fa fa-file-text custom"></i>
                                    <a href="knowledgebase.php">Knowledge Base</a>
                                </div>
                            </div>
                        </div>
                        <!-- Search ->
                        <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/knowledgebase.php?action=search" class="search-custom">
                            <input type="text" name="search" placeholder="Have a question ?" class="item-search">
                        </form>
                        <!-- Contact us ->
                        <a class="contact" href="contact.php">Contact us</a>
                    </div>
				-->
                </div>
            </div>
        </div>
        <!-- Bg -->
        <img class="bg-h" src="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/img/h-bg.png" alt="Cloud Ocean" width="1299" height="368"> <?php } else { ?>

        <!-- BreadCrumb -->
        <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/breadcrumb.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 <?php }?>
    </header>
    <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/verifyemail.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


    <section id="main-body" class="container">
        <h2 class="validation">validation</h2>
        <div class="row">
            <?php if (!$_smarty_tpl->tpl_vars['inShoppingCart']->value&&($_smarty_tpl->tpl_vars['primarySidebar']->value->hasChildren()||$_smarty_tpl->tpl_vars['secondarySidebar']->value->hasChildren())) {?>
				<?php if ($_smarty_tpl->tpl_vars['primarySidebar']->value->hasChildren()) {?>
				<div class="col-md-9 pull-md-right">
				    <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/pageheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

				</div>
				<?php }?>
				<div class="col-md-3 pull-md-left sidebar">
				    <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('sidebar'=>$_smarty_tpl->tpl_vars['primarySidebar']->value), 0);?>

				</div>
            <?php }?>
            <!-- Container for main page display content -->
            <div class="<?php if (!$_smarty_tpl->tpl_vars['inShoppingCart']->value&&($_smarty_tpl->tpl_vars['primarySidebar']->value->hasChildren()||$_smarty_tpl->tpl_vars['secondarySidebar']->value->hasChildren())) {?>col-md-9 pull-md-right<?php } else { ?>col-xs-12<?php }?> main-content">
                <?php if (!$_smarty_tpl->tpl_vars['primarySidebar']->value->hasChildren()&&!$_smarty_tpl->tpl_vars['showingLoginPage']->value&&!$_smarty_tpl->tpl_vars['inShoppingCart']->value&&$_smarty_tpl->tpl_vars['templatefile']->value!='homepage') {?>
					<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/pageheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

				<?php }?>
<?php }} ?>
