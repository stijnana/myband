<?php /* Smarty version Smarty-3.1.18, created on 2015-10-08 15:00:00
         compiled from "views\newsarticles.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1362256027c7fccb1c1-57297208%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd2104d91d134b1ddf013f0f614b9454791a8acef' => 
    array (
      0 => 'views\\newsarticles.tpl',
      1 => 1444309142,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1362256027c7fccb1c1-57297208',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_56027c7fd61d39_78900253',
  'variables' => 
  array (
    'data' => 0,
    'newsItem' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56027c7fd61d39_78900253')) {function content_56027c7fd61d39_78900253($_smarty_tpl) {?>
<div id="inhoud" >

    <div class="col-sm-6">

        <?php echo $_smarty_tpl->getSubTemplate ('zoek.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        <section>
            <?php  $_smarty_tpl->tpl_vars['newsItem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['newsItem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['newsItem']->key => $_smarty_tpl->tpl_vars['newsItem']->value) {
$_smarty_tpl->tpl_vars['newsItem']->_loop = true;
?>

                <article>
                    <h1><?php echo $_smarty_tpl->tpl_vars['newsItem']->value['id'];?>
 <?php echo $_smarty_tpl->tpl_vars['newsItem']->value['title'];?>
</h1>
                    <content><?php echo $_smarty_tpl->tpl_vars['newsItem']->value['content'];?>
</content>
                </article>

            <?php } ?>
            <?php echo $_smarty_tpl->getSubTemplate ('pagen.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


        </section>
    </div>
    <div class="col-sm-6">
        <img src="img/bn.png" width="60%"  id="banner" alt="">
    </div><?php }} ?>
