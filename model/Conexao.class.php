<?php

class Conexao extends Config {

    private $host, $usuario, $senha, $banco;
    protected $obj, $itens = array(), $prefix;
    public $paginacaolinks, $totalpags ;

    function __construct() {
        $this->host = self::BANCO_HOST;
        $this->usuario = self::BANCO_USER;
        $this->senha = self::BANCO_SENHA;
        $this->banco = self::BANCO_BD;
        $this->prefix = self::BANCO_PREFIX;

        try {
            if ($this->Conectar() == null):
                $this->Conectar();

            endif;
        } catch (Exception $ex) {
            exit('<h2>Erro ao conectar ao Banco de Dados!</h2>' . $ex->getMessage());
        }
    }

    private function Conectar() {
        $options = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8");
        $link = new PDO("mysql:host={$this->host};dbname={$this->banco}", $this->usuario, $this->senha, $options);
        return $link;
    }

    function ExecuteSQL($query, array $params = NULL) {
        $this->obj = $this->Conectar()->prepare($query);

        if (count($params) > 0):
            foreach ($params as $key => $value):
                $this->obj->bindValue($key, $value);
            endforeach;
        endif;

        return $this->obj->execute();
    }

    function ListarDados() {
        return $this->obj->fetch(PDO::FETCH_ASSOC);
    }

    function TotalDados() {
        return $this->obj->rowCount();
    }

    function GetItens() {
        return $this->itens;
    }

    function PaginacaoLinks($campo, $tabela) {
        //instancia o objeto da paginação
        $pag = new Paginacao();
        //executa a base de paginação
        $pag->GetPaginacao($campo, $tabela);
        //recebo os links das paginas pelo numero de paginas
        $this->paginacaolinks = $pag->link;
        //recebo o total de paginas
        $this->totalpags = $pag->totalpags;
        //defino o inicio e o fim para limitar a sequencia
        $inicio = $pag->inicio;
        $limite = $pag->limite;

        return " limit {$inicio},{$limite}";
    }

    /*
     * retorna com as listas com as paginas para escolher
     */
    protected function Paginacao($pagina=array()) {
        $pag = '<ul class="pagination">';
        
        $pag .= '<li><a href="?p=1"> << Inicio </a></li>';
            foreach ($pagina as $p):
             $pag .= '<li><a href="?p='.$p.'"> ' . $p. '</a></li>';
        
            endforeach;
        $pag .= '<li><a href="?p='.$this->totalpags.'">Final >></a></li>';
        $pag .= '</ul>';
        
        if($this->totalpags > 1):
          return $pag;  
        endif;
        
    }

    /*
     * retorna um array com a paginação em links
     */

    function ShowPaginacao() {
        return $this->Paginacao($this->paginacaolinks);
    }

}
