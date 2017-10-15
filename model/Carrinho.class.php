<?php

class Carrinho {

    private $total_Valor, $total_Peso, $itens = array();

    function GetCarrinho($sessao = null) {
        $i = 1;
        $sub = 0;
        $peso = 0;
       
        foreach ($_SESSION['PRO'] as $lista):
         $sub = ($lista['VALOR_US'] * $lista['QTD']);
         $this->total_Valor += $sub;
            $this->itens[$i] = array(
                'pro_id' => $lista['ID'],
                'pro_nome' => $lista['NOME'],
                'pro_valor' => $lista['VALOR'],
                'pro_valor_us' => $lista['VALOR_US'],
                'pro_peso' => $lista['PESO'],
                'pro_qtd' => $lista['QTD'],
                'pro_img' => $lista['IMG'],
                'pro_link' => $lista['LINK'],
                'pro_subTotal' => Sistema::MoedaBR($sub),
                'pro_subTotal_us' => $sub
            );
            $i++;
        endforeach;
        if (count($this->itens) > 0):
            return $this->itens;
        else:
            echo 'Sem produtos no carrinho';
        endif;
    }
    
    function GetTotal(){
        return $this->total_Valor;
    }

}
