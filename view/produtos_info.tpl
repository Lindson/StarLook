{foreach from=$PRO item=P}

    <h1 class="text-center">{$P.pro_nome} : REF = {$P.pro_ref}</h1>
    <hr>
    <section class="row">
        <div class="col-md-6">
            <img class="thumbnail" src="{$P.pro_img}" alt="">
        </div>
        <div class="col-md-6 thumbnail">
            <img src="{$TEMA}/imagens/logo-pagseguro.png">
            <hr>
            <div class="col-md-6">
                <h3 class="text-center preco">R$ {$P.pro_valor}</h3>
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
                    {foreach from=$IMAGENS item=I}
                        <li class="col-md-3">
                        <img class="thumbnail" src="{$I.img_nome}" alt="">   
                    </li>
                    {/foreach}
                </ul>
            </div>
    <div class="row">
        <h3 class="text-center">Discriminação do Produto</h3>
        <h4 class="text-center">  {$P.pro_desc}  </h4>
        <hr>
{/foreach}