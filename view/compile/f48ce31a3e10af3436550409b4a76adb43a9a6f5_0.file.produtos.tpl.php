<?php
/* Smarty version 3.1.31, created on 2017-10-08 17:22:23
  from "C:\xampp\htdocs\starlook\view\produtos.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_59da42af776d77_03353776',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f48ce31a3e10af3436550409b4a76adb43a9a6f5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\starlook\\view\\produtos.tpl',
      1 => 1507476138,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59da42af776d77_03353776 (Smarty_Internal_Template $_smarty_tpl) {
?>
<center><h2>Lista de Produtos</h2></center>
<hr>
<section id="produtos" class="row">
    <ul style="list-style: none">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PRO']->value, 'P');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['P']->value) {
?>
            <li class="col-md-4">
                <div class="thumbnail">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['PRO_INFO']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_slug'];?>
">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_img'];?>
" alt="">
                        <div class="caption">
                            <h4 class="text-center"><?php echo $_smarty_tpl->tpl_vars['P']->value['pro_nome'];?>
</h4>
                            <h4 class="text-center text-danger">R$<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_valor'];?>
</h4>
                        </div>
                    </a>
                </div>
            </li>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

    </ul>
</section>
<section id="paginacao" class="row">
    <center>
        <?php echo $_smarty_tpl->tpl_vars['PAGINAS']->value;?>

    </center>
</section><?php }
}
