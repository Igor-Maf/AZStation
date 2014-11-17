<h1> Редактировать профиль #{$data.client_id}</h1>
<hr>
<form name="form" id="form" method="post" action="">
    <input type="hidden" name="edit_client" value="1">
    <p>
        <label for="client_fio"> ФИО </label>
        <input type="text" id="client_fio" class="validate[required]" name="client_fio" value="{$data.client_fio}" />
    </p>
    <p>
        <label for="client_address"> Адресс </label>
        <input type="text" id="client_address" class="validate[required]" name="client_address" value="{$data.client_address}" />
    </p>
    <p>
        <label for="client_mail"> Почта </label>
        <input type="email" id="client_mail" class="validate[required]" name="client_mail" value="{$data.client_mail}" />
    </p>
    <p>
        <label for="client_number"> Телефон </label>
        <input type="tel" id="client_number" class="validate[required]" name="client_number" value="{$data.client_number}" />
    </p>
    <p>
        <label for="client_scores"> Баллы </label>
        <input type="number" min="0" max="999" step="0.01" id="client_scores" class="validate[required]" name="client_scores" value="{$data.client_scores}" />
    </p>
    <p>
        <input type="submit" value="Редактировать">
    </p>
</form>