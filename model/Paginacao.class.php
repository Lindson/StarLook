<?php

class Paginacao extends Conexao{
    public $limite, $inicio, $link = array(), $totalpags;
        function GetPaginacao($campo,$tabela){
        //faço uma consulta em um campo da tabela        
        $query = "select {$campo} from {$tabela}";
        $this->ExecuteSQL($query);
        //conto o resultado e pego o total
        $this->totalpags = $this->TotalDados();
        //defino limite de itens por pagina
        $this->limite = Config::BANCO_LIM_PAG;
        //pego o numero total de pagina que eu vou obter
        $paginas = ceil($this->totalpags / $this->limite);
        $this->totalpags = $paginas;
        //pego o numero da pagina para a navegação da URL
        $p = (int)isset($_GET['p']) ? $_GET['p'] : 1;
        $p = filter_var($p,FILTER_VALIDATE_INT);   
        if($p > $paginas):
            $p = $paginas;
        endif;
        //defino onde começa a paginação
        $this->inicio = ($p * $this->limite) - $this->limite;
        $mostrar = $p + 4;
        if($mostrar > $paginas):
            $mostrar = $paginas;
        endif;
           
        
        //faço um laço passando as paginas
        for ($i = ($p - 4);$i <= $mostrar; $i++):
            if($i < 1):
                $i = 1;
            endif;
            array_push($this->link,$i);
        endfor;
        
    }
}
