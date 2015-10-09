<?php /* Smarty version Smarty-3.1.18, created on 2015-09-30 13:32:33
         compiled from "views\zoek.tpl" */ ?>
<?php /*%%SmartyHeaderCode:24539560bb24e34a937-55581877%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '218b37a833028a181a8a8c6d35d4517f86272b3c' => 
    array (
      0 => 'views\\zoek.tpl',
      1 => 1443612750,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '24539560bb24e34a937-55581877',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_560bb24e34d705_75512465',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_560bb24e34d705_75512465')) {function content_560bb24e34d705_75512465($_smarty_tpl) {?><form method="post" action="?page=search">
    <input type="text" name="search_string" onkeyup="showResult(this.value)">
    <input type="submit" value="Search">
</form>
<div id="livesearch">

</div><?php }} ?>
