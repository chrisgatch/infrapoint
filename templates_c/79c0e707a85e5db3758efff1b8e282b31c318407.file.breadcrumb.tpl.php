<?php /* Smarty version Smarty-3.1.21, created on 2016-09-21 08:13:44
         compiled from "/Users/mnorris/Sites/whmcs/templates/cloudocean/includes/breadcrumb.tpl" */ ?>
<?php /*%%SmartyHeaderCode:127850890857e27978237571-26261781%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '79c0e707a85e5db3758efff1b8e282b31c318407' => 
    array (
      0 => '/Users/mnorris/Sites/whmcs/templates/cloudocean/includes/breadcrumb.tpl',
      1 => 1467518940,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '127850890857e27978237571-26261781',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'breadcrumb' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_57e2797829f661_04505403',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57e2797829f661_04505403')) {function content_57e2797829f661_04505403($_smarty_tpl) {?><div class="breadcrumb">
    <div class="container">
        <span class="fa fa-home bread"></span> <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['breadcrumb']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['item']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['item']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['item']->iteration++;
 $_smarty_tpl->tpl_vars['item']->last = $_smarty_tpl->tpl_vars['item']->iteration === $_smarty_tpl->tpl_vars['item']->total;
?>
        <li<?php if ($_smarty_tpl->tpl_vars['item']->last) {?> class="active" <?php }?>>
            <?php if (!$_smarty_tpl->tpl_vars['item']->last) {?><a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['link'];?>
"><?php }?>
            <?php echo $_smarty_tpl->tpl_vars['item']->value['label'];?>

            <?php if (!$_smarty_tpl->tpl_vars['item']->last) {?></a><?php }?>
            </li>
            <?php } ?>
    </div>
</div><?php }} ?>
