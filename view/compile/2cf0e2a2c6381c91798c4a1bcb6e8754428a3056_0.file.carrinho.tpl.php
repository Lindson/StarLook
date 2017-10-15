<?php
/* Smarty version 3.1.31, created on 2017-10-15 04:37:27
  from "C:\xampp\htdocs\starlook\view\carrinho.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_59e2c9e7e958c4_67015048',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2cf0e2a2c6381c91798c4a1bcb6e8754428a3056' => 
    array (
      0 => 'C:\\xampp\\htdocs\\starlook\\view\\carrinho.tpl',
      1 => 1508035043,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59e2c9e7e958c4_67015048 (Smarty_Internal_Template $_smarty_tpl) {
?>
<h2>Pagina do carrinho!</h2>
<hr>
<section class="row">
    <center>
        <table class="table table-bordered" style="width: 95%">

            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PRO']->value, 'P');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['P']->value) {
?>
                <tr>
                    <td><img src="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_img'];?>
" alt="">  </td>
                    <td><h4> <?php echo $_smarty_tpl->tpl_vars['P']->value['pro_nome'];?>
</h4> </td>
                    <td> <?php echo $_smarty_tpl->tpl_vars['P']->value['pro_valor'];?>
 </td>
                    <td> <?php echo $_smarty_tpl->tpl_vars['P']->value['pro_peso'];?>
 </td>
                    <td> <?php echo $_smarty_tpl->tpl_vars['P']->value['pro_qtd'];?>
 </td>
                    <td> <?php echo $_smarty_tpl->tpl_vars['P']->value['pro_subTotal'];?>
 </td>
                    <td>  
                        <form>
                            <button class="btn btn-danger"><i class="glyphicon glyphicon-trash"></i></button>                       
                        </form>
                    </td>

                </tr>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

        </table>
    </center>
</section>
        <section class="row">
            <div class="col-md-4 text-right">
               
            </div>
            <div class="col-md-4 text-right">
               
            </div>
            <div class="col-md-4 text-right text-danger">
                <h3>R$ <?php echo $_smarty_tpl->tpl_vars['TOTAL']->value;?>
</h3>
            </div>
        </section><?php }
}
