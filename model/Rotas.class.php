<?php

class Rotas {

    
    private static $pasta_controller = 'controller';
    private static $pasta_view = 'view';
    
    public static $pag;

    /**
     * Trata paginas e parametros da URL
     * @author Lindson Amaro(lindson@inforservice-ce.com.br)
     */
    static function get_Pagina() {

        if (isset($_GET['pag'])):

            $pagina = $_GET['pag'];

            self::$pag = explode('/', $pagina);

            $barra = DIRECTORY_SEPARATOR;

            $pagina = self::$pasta_controller. $barra . self::$pag[0] . '.php';

            if (file_exists($pagina)):
                include $pagina;
            else:
                echo 'Arquivo não encontrado:' . $pagina;
                include 'erro.php';
            endif;
        else:
             include 'home.php';
        endif;

    }
    
    
     static function ImageLink($img,$largura,$altura){
        $imagem = self::get_ImagemURL() ."thumb.php?src={$img}&w={$largura}&h={$altura}&zc=1";
        return $imagem;
    }
    static function get_SiteHOME(){
        return Config::SITE_URL; 
    }
    static function get_SiteRAIZ(){
        return $_SERVER['DOCUMENT_ROOT'].'/';
    }
    static function get_SiteTEMA(){
        return self::get_SiteHOME().'/'.self::$pasta_view;  
    }
    static function pag_Carrinho(){
        return self::get_SiteHOME().'/carrinho';  
    }
    static function pag_CarrinhoAlterar(){
        return self::get_SiteHOME().'/carrinho_alterar';  
    }
    static function pag_Produtos(){
        return self::get_SiteHOME().'/produtos';
    }
    static function pag_ProdutosInfo(){
        return self::get_SiteHOME().'/produtos_info';
    }
    static function pag_Login(){
        return self::get_SiteHOME().'/login';   
    }
    static function pag_ClienteRecuperasenha(){
        return self::get_SiteHOME().'/clientes_recuperasenha';
    }
    static function pag_ClienteConta(){
        return self::get_SiteHOME().'/clientes_minhaconta';    
    }
    static function pag_PedidoConfirmar(){
        return self::get_SiteHOME().'/pedido_confirmar';
    }
    static function pag_PedidoFinalizar(){
        return self::get_SiteHOME().'/pedido_finaizar';
    }
    static function pag_Contatos(){
        return self::get_SiteHOME().'/contato';
    }
    static function get_ImagemURL(){
        return self::get_SiteHOME().'/media/imagens/';
    }
    static function get_Pasta_Controller(){
        return self::$pasta_controller;        
    }
    
}
