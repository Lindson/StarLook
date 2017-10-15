<!DOCTYPE html>

<html>
    <head>
        <title>{$SITE_NOME}</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link href="{$GET_TEMA}/tema/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="{$GET_TEMA}/tema/js/jquery-2.2.1.min.js" type="text/javascript"></script>
        <script src="{$GET_TEMA}/tema/js/bootstrap.min.js" type="text/javascript"></script>
        <link href="{$GET_TEMA}/tema/css/tema.css" rel="stylesheet" type="text/css"/>
        <!-- HTML5 shim e Respond.js para suporte no IE8 de elementos HTML5 e media queries -->
        <!-- ALERTA: Respond.js não funciona se você visualizar uma página file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>
    <body>

        <!-- começa  o container geral -->
        <div class="container-fluid">

            <!-- começa a div topo -->
            <div class="row" id="topo">


                <div class="container">
                    <img class="img img-responsive"src="{$GET_TEMA}/imagens/logo.png" alt=""> 

                </div>    

            </div><!-- fim da div topo -->

            <!-- começa a barra MENU-->
            <div class="row" id="barra-menu">

                <!--começa navBAR-->
                <nav class="navbar navbar-inverse">

                    <!-- container navBAr-->
                    <div class="container">
                        <!-- header da navbar-->
                        <div class="navbar-header">
                            <!-- botao que mostra e esconde a navbar--> 
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>

                        </div><!--fim header navbar-->  

                        <div class="collapse navbar-collapse" id="navbar">
                            <ul class="nav navbar-nav">
                                <li><a href="{$GET_SITE_HOME}"><i class="glyphicon glyphicon-home"></i> Home </a> </li>
                                <li><a href="{$PAG_PRODUTOS}"><i class="glyphicon glyphicon-tag"></i> Produtos </a> </li>
                                <li><a href="{$PAG_CLIENTE_CONTA}"><i class="glyphicon glyphicon-user"></i> Minha Conta </a> </li>
                                <li><a href="{$PAG_CARRINHO}"><i class="glyphicon glyphicon-shopping-cart"></i> Carrinho </a> </li>
                                <li><a href="{$PAG_CONTATO}" ><i class="glyphicon glyphicon-envelope"></i> Contato </a> </li>


                            </ul>


                            <form class="navbar-form navbar-right" role="search">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Digite para buscar" required>
                                </div>
                                <button type="submit" class="btn btn-rosa">Buscar</button>
                            </form>

                        </div><!-- fim navbar collapse-->   


                    </div> <!--fim container navBar-->

                </nav><!-- fim da navBar-->  
            </div> <!-- fim barra menu--> 

            <!-- começa DIV conteudo-->
            <div class="row" id="conteudo">

                <div class="container"> 

                    <!-- coluna da esquerda -->
                    <div class="col-md-2" id="lateral">

                        <div class="list-group">
                            <span class="list-group-item active"> Categorias</span>
                            <a href="{$PAG_PRODUTOS}" class="list-group-item"><span class="glyphicon glyphicon-star"></span> Geral</a>
                            {foreach from=$CATEGORIAS item=C}
                            <a href="{$C.cate_link}" class="list-group-item"><span class="glyphicon glyphicon-star"></span> {$C.cate_nome}</a>
                            {/foreach}
                           

                        </div><!--fim da list group-->              

                    </div> <!-- finm coluna esquerda -->  

                    <!-- coluna direita CONTEUDO CENTRAL -->
                    <div class="col-md-10">


                        <ul class="breadcrumb">
                            <li><a href="{$GET_SITE_HOME}"><i class="glyphicon glyphicon-home"></i> Home </a></li>
                            <li><a href="{$PAG_PRODUTOS}"> Produtos </a></li>
                            <li><a href="#"> Info </a></li>
                        </ul>   
                        <!-- fim do menu breadcrumb-->             
                        {php}
                    Rotas::get_Pagina();
                        {/php}


                    </div>  <!--fim coluna direita-->  
                </div>   
            </div><!-- fim DIV conteudo-->

            <!-- começa div rodape -->
            <div class="row" id="rodape">
                <br>
                <p class="text-center">© 2017 starlook.com.br - vanessa@starlook.com.br</p>

            </div><!-- fim div rodape-->
        </div> <!-- fim do container geral -->
    </body>
</html>
