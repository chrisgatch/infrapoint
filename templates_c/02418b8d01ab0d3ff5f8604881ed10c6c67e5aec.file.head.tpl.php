<?php /* Smarty version Smarty-3.1.21, created on 2016-09-21 08:13:24
         compiled from "/Users/mnorris/Sites/whmcs/templates/cloudocean/includes/head.tpl" */ ?>
<?php /*%%SmartyHeaderCode:153632052457e279644fa1f8-83538411%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '02418b8d01ab0d3ff5f8604881ed10c6c67e5aec' => 
    array (
      0 => '/Users/mnorris/Sites/whmcs/templates/cloudocean/includes/head.tpl',
      1 => 1467493968,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '153632052457e279644fa1f8-83538411',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'BASE_PATH_CSS' => 0,
    'WEB_ROOT' => 0,
    'template' => 0,
    'BASE_PATH_JS' => 0,
    'loadMarkdownEditor' => 0,
    'mdeLocale' => 0,
    'templatefile' => 0,
    'loggedin' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_57e27964551063_25430201',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57e27964551063_25430201')) {function content_57e27964551063_25430201($_smarty_tpl) {?><!-- Bootstrap -->
<link href="<?php echo $_smarty_tpl->tpl_vars['BASE_PATH_CSS']->value;?>
/bootstrap.min.css" rel="stylesheet">
<!-- Font Awesome -->
<link href="<?php echo $_smarty_tpl->tpl_vars['BASE_PATH_CSS']->value;?>
/font-awesome.min.css" rel="stylesheet">
<!-- Styling -->
<link href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/css/overrides.css" rel="stylesheet">
<link href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/css/styles.css" rel="stylesheet">
<!-- Carousel -->
<link href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/css/owl.carousel.css" rel="stylesheet">
<link href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/css/owl.theme.css" rel="stylesheet">
<!-- jQuery -->
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['BASE_PATH_JS']->value;?>
/jquery.min.js"><?php echo '</script'; ?>
>
<!-- Custome Style -->
<link href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/css/style.css" rel="stylesheet">
<!-- Responsive -->
<link href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/css/responsive.css" rel="stylesheet">

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
  <?php echo '<script'; ?>
 src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"><?php echo '</script'; ?>
>
<![endif]-->

<?php if (!empty($_smarty_tpl->tpl_vars['loadMarkdownEditor']->value)) {?>
<!-- Markdown Editor -->
<link href="<?php echo $_smarty_tpl->tpl_vars['BASE_PATH_CSS']->value;?>
/bootstrap-markdown.min.css" rel="stylesheet" />
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['BASE_PATH_JS']->value;?>
/bootstrap-markdown.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['BASE_PATH_JS']->value;?>
/markdown.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['BASE_PATH_JS']->value;?>
/to-markdown.js"><?php echo '</script'; ?>
>
<?php if (!empty($_smarty_tpl->tpl_vars['mdeLocale']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['mdeLocale']->value;?>
 <?php }?> <?php }?> <?php if ($_smarty_tpl->tpl_vars['templatefile']->value=="viewticket"&&!$_smarty_tpl->tpl_vars['loggedin']->value) {?>
<meta name="robots" content="noindex" /> <?php }?>

<?php }} ?>
