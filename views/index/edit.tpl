<h1> Редактировать цену #{$data.gas_type}</h1>
<hr>
<form name="form" id="form" method="post" action="">
    <input type="hidden" name="edit_gas" value="1">
    <p>
        <label for="gas_price"> Цена {$data.gas_type} </label>
        <input type="number" min="0" max="10000" step="0.01" id="gas_price" class="validate[required]" name="gas_price" value="{$data.gas_price}" />
    </p>
    <p>
        <input type="submit" value="Редактировать">
    </p>
</form>