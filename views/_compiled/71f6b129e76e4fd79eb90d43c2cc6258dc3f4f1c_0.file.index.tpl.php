<?php
/* Smarty version 3.1.36, created on 2020-05-24 22:03:02
  from 'C:\OpenServer\domains\lessons\lesson9\views\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5ecac4e673da63_60890785',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '71f6b129e76e4fd79eb90d43c2cc6258dc3f4f1c' => 
    array (
      0 => 'C:\\OpenServer\\domains\\lessons\\lesson9\\views\\index.tpl',
      1 => 1590346975,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ecac4e673da63_60890785 (Smarty_Internal_Template $_smarty_tpl) {
echo $_smarty_tpl->tpl_vars['css']->value;?>



<div class="container">
    <form action="/books" method="post" >
        <div class="d-flex flex-column">
            <input type="text" name="name" placeholder="Name" class="mt-1 p-2 form-control" autocomplete="off">
            <input type="text" name="author" placeholder="Author" class="mt-1 p-2 form-control" autocomplete="off">
            <button class="btn btn-dark mt-1 p-2">Create</button>
        </div>

    </form>
    <ul class="list-group">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['books']->value, 'book');
$_smarty_tpl->tpl_vars['book']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['book']->value) {
$_smarty_tpl->tpl_vars['book']->do_else = false;
?>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1"><?php echo $_smarty_tpl->tpl_vars['book']->value->author;?>
</span>
                </div>
                <input type="text" class="form-control"  aria-describedby="basic-addon1" readonly value="<?php echo $_smarty_tpl->tpl_vars['book']->value->name;?>
">
            </div>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul>
</div>
<?php }
}
