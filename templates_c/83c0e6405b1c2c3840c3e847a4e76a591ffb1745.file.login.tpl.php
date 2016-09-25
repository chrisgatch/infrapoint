<?php /* Smarty version Smarty-3.1.21, created on 2016-09-21 12:50:09
         compiled from "/Users/mnorris/Sites/whmcs/templates/cloudocean/login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:51101088157e2ba4198bbe8-61046842%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '83c0e6405b1c2c3840c3e847a4e76a591ffb1745' => 
    array (
      0 => '/Users/mnorris/Sites/whmcs/templates/cloudocean/login.tpl',
      1 => 1467520440,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '51101088157e2ba4198bbe8-61046842',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'incorrect' => 0,
    'LANG' => 0,
    'verificationId' => 0,
    'transientDataName' => 0,
    'ssoredirect' => 0,
    'systemsslurl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_57e2ba41a1b1a7_99447335',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57e2ba41a1b1a7_99447335')) {function content_57e2ba41a1b1a7_99447335($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['incorrect']->value) {?>
    <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/alert.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('type'=>"error",'msg'=>$_smarty_tpl->tpl_vars['LANG']->value['loginincorrect'],'textcenter'=>true), 0);?>

<?php } elseif ($_smarty_tpl->tpl_vars['verificationId']->value&&empty($_smarty_tpl->tpl_vars['transientDataName']->value)) {?>
    <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/alert.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('type'=>"error",'msg'=>$_smarty_tpl->tpl_vars['LANG']->value['verificationKeyExpired'],'textcenter'=>true), 0);?>

<?php } elseif ($_smarty_tpl->tpl_vars['ssoredirect']->value) {?>
    <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/alert.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('type'=>"info",'msg'=>$_smarty_tpl->tpl_vars['LANG']->value['sso']['redirectafterlogin'],'textcenter'=>true), 0);?>

<?php }?>
<!-- Login -->
<div class="row">
    <section class="portfolio-page">
        <div class="col-lg-push-1 col-lg-10">
            <h2>Login</h2>
            <p>Login to your account now ;&#41;</p>
            <!-- Login Form -->
            <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['systemsslurl']->value;?>
dologin.php" role="form" class="login-custom">
                <div class="row">
                    <!-- Mail -->
                    <div class="col-lg-6">
                        <input class="userlogin" type="email" name="username" id="inputEmail" placeholder="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['enteremail'];?>
" autofocus>
                    </div>
                    <!-- Password -->
                    <div class="col-lg-6">
                        <input class="userlogin" type="password" name="password" id="inputPassword" placeholder="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareapassword'];?>
" autocomplete="off">
                    </div>
                </div>
                <!-- Login -->
                <div class="row">
                    <div class="col-lg-12">
                        <input id="login" value="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['loginbutton'];?>
" type="submit" class="login-but">
                    </div>
                </div>
                <!-- Check -->
                <div class="check-box-c">
                    <input type="checkbox"><span><?php echo $_smarty_tpl->tpl_vars['LANG']->value['loginrememberme'];?>
</span>
                </div>
                <!-- Forget -->
                <div class="forget-cus">
                    <span class="fa fa-question custom-c"></span>
                    <a href="pwreset.php"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['forgotpw'];?>
</a>
                </div>
                <!-- New Client -->
                <div class="newclient-cus">
                    <span class="fa fa-user-plus custom-c"></span>
                    <a href="register.php">New Account ?</a>
                </div>
            </form>
        </div>
    </section>
</div><?php }} ?>
