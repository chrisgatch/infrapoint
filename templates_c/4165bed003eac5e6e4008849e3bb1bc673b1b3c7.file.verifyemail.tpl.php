<?php /* Smarty version Smarty-3.1.21, created on 2016-09-21 08:10:00
         compiled from "/Users/mnorris/Sites/whmcs/templates/six/includes/verifyemail.tpl" */ ?>
<?php /*%%SmartyHeaderCode:209026349657e2789872c0b9-49012055%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4165bed003eac5e6e4008849e3bb1bc673b1b3c7' => 
    array (
      0 => '/Users/mnorris/Sites/whmcs/templates/six/includes/verifyemail.tpl',
      1 => 1460410448,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '209026349657e2789872c0b9-49012055',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'emailVerificationIdValid' => 0,
    'LANG' => 0,
    'emailVerificationPending' => 0,
    'showingLoginPage' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_57e27898751431_79093932',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57e27898751431_79093932')) {function content_57e27898751431_79093932($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['emailVerificationIdValid']->value) {?>
    <div class="email-verification alert-success">
        <div class="container">
            <i class="fa fa-check"></i>
            <?php echo $_smarty_tpl->tpl_vars['LANG']->value['emailAddressVerified'];?>

        </div>
    </div>
<?php } elseif ($_smarty_tpl->tpl_vars['emailVerificationIdValid']->value===false) {?>
    <div class="email-verification alert-danger">
        <div class="container">
            <i class="fa fa-times-circle"></i>
            <?php echo $_smarty_tpl->tpl_vars['LANG']->value['emailKeyExpired'];?>

            <div class="pull-right">
                <button id="btnResendVerificationEmail" class="btn btn-default btn-sm">
                    <?php echo $_smarty_tpl->tpl_vars['LANG']->value['resendEmail'];?>

                </button>
            </div>
        </div>
    </div>
<?php } elseif ($_smarty_tpl->tpl_vars['emailVerificationPending']->value&&!$_smarty_tpl->tpl_vars['showingLoginPage']->value) {?>
    <div class="email-verification alert-warning">
        <div class="container">
            <i class="fa fa-warning"></i>
            <?php echo $_smarty_tpl->tpl_vars['LANG']->value['verifyEmailAddress'];?>

            <div class="pull-right">
                <button id="btnResendVerificationEmail" class="btn btn-default btn-sm">
                    <?php echo $_smarty_tpl->tpl_vars['LANG']->value['resendEmail'];?>

                </button>
            </div>
        </div>
    </div>
<?php }?>
<?php }} ?>
