<h1> Добро пожаловать! </h1>
<hr>
<h3> Цены на бензин </h3>
{if isset($gas) && count($gas)}
    {foreach from = $gas item = g}
        <form name="form" id="form" method="post" action="" class="form-standart">
            <!--<input type="hidden" name="edit_{$g.gas_id}" value="1">-->
            <p>
                <label for="{$g.gas_type}"> {$g.gas_type} </label>
                <input type="number" min="0" max="999" step="0.01" id="{$g.gas_type}" class="validate[required]" name="client_scores" value="{$g.gas_price}" disabled/>
            </p>
           <!-- <input type="submit" value="Редактировать"> -->
        </form>
    {/foreach}
{/if}
