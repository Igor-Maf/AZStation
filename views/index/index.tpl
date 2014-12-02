<h1> Добро пожаловать! </h1>
<hr>
<h3> Цены на бензин </h3>

{if isset($gas) && count($gas)}
    <form name="form" id="form" method="post" action="" class="form-gasoline">
        {foreach from = $gas item = g}
            <p>
               <label for="{$g.gas_type}"> {$g.gas_type} </label>
               
               <input type="text" name="{$g.gas_type}" value="{$g.gas_price}&nbsp;(грн.)" disabled> 
               <a href="{$_layoutParams.root}index/edit/{$g.gas_id}">Изменить цену</a>
            </p>
        {/foreach}
    </form>
{else}
    <p class="error">Нет тарифного плана</p>
{/if}
   