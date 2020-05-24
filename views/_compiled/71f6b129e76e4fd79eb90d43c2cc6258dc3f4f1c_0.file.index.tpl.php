<?php
/* Smarty version 3.1.36, created on 2020-05-20 18:02:42
  from 'C:\OpenServer\domains\lessons\lesson9\views\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5ec54692e233b6_52784468',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '71f6b129e76e4fd79eb90d43c2cc6258dc3f4f1c' => 
    array (
      0 => 'C:\\OpenServer\\domains\\lessons\\lesson9\\views\\index.tpl',
      1 => 1589986961,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ec54692e233b6_52784468 (Smarty_Internal_Template $_smarty_tpl) {
?><form action="/books" method="post">
    <input type="text" name="name" placeholder="Name">
    <input type="text" name="author" placeholder="Author">
    <button>Create</button>
</form>

<ul>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['books']->value, 'book');
$_smarty_tpl->tpl_vars['book']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['book']->value) {
$_smarty_tpl->tpl_vars['book']->do_else = false;
?>
        <li><?php echo $_smarty_tpl->tpl_vars['book']->value->author;?>
, "<?php echo $_smarty_tpl->tpl_vars['book']->value->name;?>
"</li>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</ul><?php }
}
