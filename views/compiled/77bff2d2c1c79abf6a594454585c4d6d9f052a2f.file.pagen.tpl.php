<?php /* Smarty version Smarty-3.1.18, created on 2015-10-07 13:24:44
         compiled from "views\pagen.tpl" */ ?>
<?php /*%%SmartyHeaderCode:27861561245c91dc9e6-53797245%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '77bff2d2c1c79abf6a594454585c4d6d9f052a2f' => 
    array (
      0 => 'views\\pagen.tpl',
      1 => 1444217082,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '27861561245c91dc9e6-53797245',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_561245c91e9334_93562397',
  'variables' => 
  array (
    'currentPage' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_561245c91e9334_93562397')) {function content_561245c91e9334_93562397($_smarty_tpl) {?><ul class="pagination">
    <li <?php if ($_smarty_tpl->tpl_vars['currentPage']->value=="1") {?>class="active"<?php }?>><a href="?page=news&pnumber=1">1</a></li>
    <li <?php if ($_smarty_tpl->tpl_vars['currentPage']->value=="2") {?>class="active"<?php }?>><a href="?page=news&pnumber=2">2</a></li>
    <li <?php if ($_smarty_tpl->tpl_vars['currentPage']->value=="3") {?>class="active"<?php }?>><a href="?page=news&pnumber=3">3</a></li>
</ul><?php }} ?>
