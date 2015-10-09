<?php /* Smarty version Smarty-3.1.18, created on 2015-09-30 14:53:30
         compiled from "views\search_result.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3827560bbaa2dec094-37132611%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c6682b4ad7050a20381904e571eff70636de6d10' => 
    array (
      0 => 'views\\search_result.tpl',
      1 => 1443617185,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3827560bbaa2dec094-37132611',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_560bbaa2e41539_02962563',
  'variables' => 
  array (
    'result' => 0,
    'newsItem' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_560bbaa2e41539_02962563')) {function content_560bbaa2e41539_02962563($_smarty_tpl) {?><h1>Search results:</h1>
<section>
    <?php  $_smarty_tpl->tpl_vars['newsItem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['newsItem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['result']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['newsItem']->key => $_smarty_tpl->tpl_vars['newsItem']->value) {
$_smarty_tpl->tpl_vars['newsItem']->_loop = true;
?>

    <article>
        <h1><?php echo $_smarty_tpl->tpl_vars['newsItem']->value['title'];?>
</h1>
        <content><?php echo $_smarty_tpl->tpl_vars['newsItem']->value['content'];?>
</content>
    </article>

    <?php } ?>
</section>
<?php }} ?>
