<center><h2>Lista de Produtos</h2></center>
<hr>
<section id="produtos" class="row">
    <ul style="list-style: none">
        {foreach from=$PRO item=P}
            <li class="col-md-4">
                <div class="thumbnail">
                    <a href="{$PRO_INFO}/{$P.pro_id}/{$P.pro_slug}">
                        <img src="{$P.pro_img}" alt="">
                        <div class="caption">
                            <h4 class="text-center">{$P.pro_nome}</h4>
                            <h4 class="text-center text-danger">R${$P.pro_valor}</h4>
                        </div>
                    </a>
                </div>
            </li>
        {/foreach}
    </ul>
</section>
<section id="paginacao" class="row">
    <center>
        {$PAGINAS}
    </center>
</section>