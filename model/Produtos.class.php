<?php

class Produtos extends Conexao{
    
    function __construct() {
        parent::__construct();
    }
    
    function GetProdutos(){
        $query = "SELECT * FROM {$this->prefix}produtos p INNER JOIN {$this->prefix}categorias c ON p.pro_categoria = c.cate_id";
        $query .= $this->PaginacaoLinks("pro_id", $this->prefix."produtos");

        $this->ExecuteSQL($query);
        
        $this->GetLista();
    }
    
    function GetProdutosID($id){
        $query = "SELECT * FROM {$this->prefix}produtos p INNER JOIN {$this->prefix}categorias c ON p.pro_categoria = c.cate_id";
        $query .= " AND pro_id = :id";
        $params = array(':id'=>$id);
        $this->ExecuteSQL($query,$params);
        
        $this->GetLista();
    }
    function GetProdutosCate($id){
        $id = filter_var($id,FILTER_VALIDATE_INT);
        $query = "SELECT * FROM {$this->prefix}produtos p INNER JOIN {$this->prefix}categorias c ON p.pro_categoria = c.cate_id";
        $query .= " AND pro_categoria = :id ";
        $query .= $this->PaginacaoLinks("pro_id", $this->prefix."produtos WHERE pro_categoria=".(int)$id);
        
        $params = array(':id' =>(int)$id );
        $this->ExecuteSQL($query,$params);
        
        $this->GetLista();
    }
    
    private function GetLista(){
        $i=1;
        while ($lista = $this->ListarDados()):
        $this->itens[$i]=array(
            'pro_id' =>$lista['pro_id'],
            'pro_nome' =>$lista['pro_nome'],
            'pro_desc' =>$lista['pro_desc'],
            'pro_peso' =>$lista['pro_peso'],
            'pro_valor' => Sistema::MoedaBR($lista['pro_valor']),
            'pro_valor_us' => $lista['pro_valor'],
            'pro_altura' =>$lista['pro_altura'],
            'pro_largura' =>$lista['pro_largura'],
            'pro_comprimento' =>$lista['pro_comprimento'],
            'pro_ref' =>$lista['pro_ref'],
            'pro_slug' =>$lista['pro_slug'],
            'pro_img' => Rotas::ImageLink($lista['pro_img'],200, 200),
            'pro_img_p' => Rotas::ImageLink($lista['pro_img'],90, 90),
            'cate_nome' =>$lista['cate_nome'],
            'cate_id' =>$lista['cate_id'],
            
        );
        $i++;
        endwhile;
    }
}

