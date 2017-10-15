<?php
      if (!isset($_SESSION)):
          session_start();
      endif;
      if(!isset($_SESSION['pedido'])):
          $_SESSION['pedido'] = '123456789';
      endif;
      require './lib/autoload.php';
      
      
      $smarty = new Template();
      $categorias = new Categorias();
      $categorias->GetCategorias();
      
      $smarty->assign('H2','StarLook - vanessa@starlook.com.br');
      $smarty->assign('GET_TEMA',Rotas::get_SiteTEMA());
      $smarty->assign('SITE_NOME', Config::SITE_NOME);      
      $smarty->assign('GET_SITE_HOME',Rotas::get_SiteHOME());
      $smarty->assign('PAG_CLIENTE_CONTA',Rotas::pag_ClienteConta());
      $smarty->assign('PAG_CARRINHO',Rotas::pag_Carrinho());
      $smarty->assign('PAG_CONTATO',Rotas::pag_Contatos());
      $smarty->assign('PAG_PRODUTOS',Rotas::pag_Produtos());
      $smarty->assign('CATEGORIAS',$categorias->GetItens());
      $smarty->assign('DATA', Sistema::DataAtualBR());
      
     

      $smarty->display('index.tpl');
      