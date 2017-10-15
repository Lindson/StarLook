<h2>Pagina do carrinho!</h2>
<hr>
<section class="row">
    <center>
        <table class="table table-bordered" style="width: 95%">

            {foreach from=$PRO item=P}
                <tr>
                    <td><img src="{$P.pro_img}" alt="">  </td>
                    <td><h4> {$P.pro_nome}</h4> </td>
                    <td> {$P.pro_valor} </td>
                    <td> {$P.pro_peso} </td>
                    <td> {$P.pro_qtd} </td>
                    <td> {$P.pro_subTotal} </td>
                    <td>  
                        <form>
                            <button class="btn btn-danger"><i class="glyphicon glyphicon-trash"></i></button>                       
                        </form>
                    </td>

                </tr>
            {/foreach}
        </table>
    </center>
</section>
        <section class="row">
            <div class="col-md-4 text-right">
               
            </div>
            <div class="col-md-4 text-right">
               
            </div>
            <div class="col-md-4 text-right text-danger">
                <h3>R$ {$TOTAL}</h3>
            </div>
        </section>