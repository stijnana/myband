<?php /* Smarty version Smarty-3.1.18, created on 2015-10-08 11:33:27
         compiled from "views\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2558055f940c8bc9f99-73166267%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '765d62663ff840c30179c2633d916fc5606f6d1d' => 
    array (
      0 => 'views\\header.tpl',
      1 => 1444296806,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2558055f940c8bc9f99-73166267',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55f940c8bf08f4_52954441',
  'variables' => 
  array (
    'currentPage' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55f940c8bf08f4_52954441')) {function content_55f940c8bf08f4_52954441($_smarty_tpl) {?>
<div id="wrapper" >

    <div id="custom-bootstrap-menu" class="navbar navbar-default " role="navigation">
        <div class="container-fluid">
            <div class="navbar-header"><a class="navbar-brand" href="?page=home">Home</a>
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-menubuilder"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse navbar-menubuilder">
                <ul class="nav navbar-nav navbar-left">
                    <li <?php if ($_smarty_tpl->tpl_vars['currentPage']->value=="news") {?>class="active"<?php }?>><a href="?page=news">News</a></li>
                    <li <?php if ($_smarty_tpl->tpl_vars['currentPage']->value=="reviews") {?>class="active"<?php }?>><a href="?page=reviews">E-sports roster</a></li>
                    <li <?php if ($_smarty_tpl->tpl_vars['currentPage']->value=="esports") {?>class="active"<?php }?>><a href="?page=esports">Live-E-sports</a></li>
                    <li <?php if ($_smarty_tpl->tpl_vars['currentPage']->value=="about") {?>class="active"<?php }?> ><a href="?page=about">About</a></li>
                </ul>
            </div>
        </div>
        </div>
<?php }} ?>
