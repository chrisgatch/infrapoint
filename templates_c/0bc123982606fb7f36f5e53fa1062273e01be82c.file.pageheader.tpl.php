<?php /* Smarty version Smarty-3.1.21, created on 2016-09-21 13:15:06
         compiled from "/Users/mnorris/Sites/whmcs/templates/cloudocean/includes/pageheader.tpl" */ ?>
<?php /*%%SmartyHeaderCode:154130880357e2c01ae92049-14610037%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0bc123982606fb7f36f5e53fa1062273e01be82c' => 
    array (
      0 => '/Users/mnorris/Sites/whmcs/templates/cloudocean/includes/pageheader.tpl',
      1 => 1460547330,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '154130880357e2c01ae92049-14610037',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'desc' => 0,
    'showbreadcrumb' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_57e2c01aea8414_48558805',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57e2c01aea8414_48558805')) {function content_57e2c01aea8414_48558805($_smarty_tpl) {?><div class="header-lined">
    <h1><?php echo $_smarty_tpl->tpl_vars['title']->value;
if ($_smarty_tpl->tpl_vars['desc']->value) {?> <small><?php echo $_smarty_tpl->tpl_vars['desc']->value;?>
</small><?php }?></h1>
    <?php if ($_smarty_tpl->tpl_vars['showbreadcrumb']->value) {
echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/breadcrumb.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);
}?>
</div>
<?php }} ?>
