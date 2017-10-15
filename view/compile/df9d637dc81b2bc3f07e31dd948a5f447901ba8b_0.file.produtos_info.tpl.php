<?php
/* Smarty version 3.1.31, created on 2017-10-03 04:13:33
  from "C:\xampp\htdocs\starlook\view\produtos_info.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_59d2f24d68fa32_46320590',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'df9d637dc81b2bc3f07e31dd948a5f447901ba8b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\starlook\\view\\produtos_info.tpl',
      1 => 1506996807,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59d2f24d68fa32_46320590 (Smarty_Internal_Template $_smarty_tpl) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PRO']->value, 'P');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['P']->value) {
?>

    <h1 class="text-center"><?php echo $_smarty_tpl->tpl_vars['P']->value['pro_nome'];?>
 : REF = <?php echo $_smarty_tpl->tpl_vars['P']->value['pro_ref'];?>
</h1>
    <hr>
    <section class="row">
        <div class="col-md-6">
            <img class="thumbnail" src="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_img'];?>
" alt="">
        </div>
        <div class="col-md-6 thumbnail">
            <img src="<?php echo $_smarty_tpl->tpl_vars['TEMA']->value;?>
/imagens/logo-pagseguro.png">
            <hr>
            <div class="col-md-6">
                <h3 class="text-center preco">R$ <?php echo $_smarty_tpl->tpl_vars['P']->value['pro_valor'];?>
</h3>
            </div>
            <div class="col-md-6">
                <form name="carrinho" method="post" action="">
                    <button class="btn btn-rosa btn-lg">Compra</button>
                </form>
            </div>            
        </div>

    </section>
            <div class="row">
                <hr>
                <h4 class="text-center">Mais Imagens</h4>
                <ul style="list-style:none">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['IMAGENS']->value, 'I');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['I']->value) {
?>
                        <li class="col-md-3">
                        <img class="thumbnail" src="<?php echo $_smarty_tpl->tpl_vars['I']->value['img_nome'];?>
" alt="">   
                    </li>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

                </ul>
            </div>
    <div class="row">
        <h3 class="text-center">Discriminação do Produto</h3>
        <h4 class="text-center">  <?php echo $_smarty_tpl->tpl_vars['P']->value['pro_desc'];?>
  </h4>
        <hr>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
