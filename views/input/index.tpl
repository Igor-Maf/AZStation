<h1> Ввести бензин/сумму</h1>
<hr>
<form name="form" id="form" class="form-input" method="post" action="">
    <input type="hidden" name="buy_form" value="1">
    <p>
        <label for="client_id">Идентификатор клиента</label>
        <input type="text" id="client_id" name="client_id" value="">
         <small>&#40;<i>Только числовое значение</i>&#41;</small>
    </p>
    <p>
        <a href="{$_layoutParams.root}clients/view/" target="_blank">Посмотреть профиль этого клиента</a>
    </p>
    
    <div class="clearfix"></div>
    <hr>
    
    <p class="radio-group">
        <b>Подсчет по:</b>
        <br>
        <input type="radio" name="payment_method" value="money" id="money" checked="checked">
        <label for="money">Деньги</label>
        <br>
        <input type="radio" name="payment_method" value="liters" id="liters">
        <label for="liters">Литры</label>
    </p>
    {if isset($gas) && count($gas)}
        <p class="radio-group">
            <b>Тип топлива:</b>
            <br>
             {foreach from = $gas item = g}
                <label for="{$g.gas_type}"> {$g.gas_type} </label>
                <input type="radio" name="gas_type" value="{$g.gas_type}" id="{$g.gas_type}">
                
                <a href="{$_layoutParams.root}index/edit/{$g.gas_id}">Изменить цену</a>
                
                <small>&#40;<i>{$g.gas_price}</i>&#41;</small>
                <br>
            {/foreach}
        </p>
    {/if}
    <p>
        <label for="input_pay"> Ввод </label>
        <input type="number" min="0" max="10000" step="0.01" id="input_pay" class="validate[required]" name="input_pay" value="">
    </p>
    <p>
        <input type="submit" value="Купить">
    </p>
</form>