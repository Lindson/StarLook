<?php
//chamo o objeto template
$smarty = new Template();
//chamo o objeto produtos
$produtos = new Produtos();
// metodo que pega o produto pelo ID
$produtos->GetProdutosID(Rotas::$pag[1]);
// OBJ imagens extras do produtos
$image = new ProdutosImages();
$image->GetImagesPRO(Rotas::$pag[1]);
// passo variavel para o template
$smarty->assign('PRO',$produtos->GetItens());
$smarty->assign('TEMA', Rotas::get_SiteTEMA());
$smarty->assign('IMAGENS',$image->GetItens());

$ID = Rotas::$pag[1];
foreach ($produtos->GetItens() as $pro):
    
    $_SESSION['PRO'][$ID]['ID'] = $pro['pro_id'];
    $_SESSION['PRO'][$ID]['NOME'] = $pro['pro_nome'];
    $_SESSION['PRO'][$ID]['VALOR'] = $pro['pro_valor'];
    $_SESSION['PRO'][$ID]['VALOR_US'] = $pro['pro_valor_us'];
    $_SESSION['PRO'][$ID]['PESO'] = $pro['pro_peso'];
    $_SESSION['PRO'][$ID]['QTD'] = 1;
    $_SESSION['PRO'][$ID]['IMG'] = $pro['pro_img_p'];
    $_SESSION['PRO'][$ID]['LINK'] = 'sessaolink';
    
endforeach;




//chamo o template
$smarty->display('produtos_info.tpl');


