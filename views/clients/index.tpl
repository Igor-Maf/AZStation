<h1> Клиенты АЗС </h1>
<hr>
<p class="access">При добавлении нового клиента ему начисляются 100 баллов. </p>
<form name="form" id="form" method="post" action="">
    <input type="hidden" name="add_client" value="1">
    <p>
        <label for="client_fio"> ФИО </label>
        <input type="text" id="client_fio" class="validate[required]" name="client_fio" value="{$data.client_fio|default:""}" />
    </p>
    <p>
        <label for="client_address"> Адресс </label>
        <input type="text" id="client_address" class="validate[required]" name="client_address" value="{$data.client_address|default:""}" />
    </p>
    <p>
        <label for="client_mail"> Почта </label>
        <input type="email" id="client_mail" class="validate[required]" name="client_mail" value="{$data.client_mail|default:""}" />
    </p>
    <p>
        <label for="client_number"> Телефон </label>
        <input type="tel" id="client_number" class="validate[required]" name="client_number" value="{$data.client_number|default:""}" />
    </p>
    <p>
        <input type="submit" value="Добавить клиента">
    </p>
</form>
<hr>

{if isset($clients) && count($clients)}
    <table>
        <tr>
            <th>Ид. клиента.</th>
            <th>ФИО</th>
            <th>Адресс</th>
            <th>Почта</th>
            <th>Номер</th>
            <th>Баллы</th>
            <th>
                <img src="{$_layoutParams.root_img}icons/edit-property.png" title="Редактирование" class="icon">
            </th>
            <th>
                <img src="{$_layoutParams.root_img}icons/delete-property.png" title="Удаление" class="icon">
            </th>
        </tr>
        {foreach from = $clients item = cl}
            <tr>
                <td>{$cl.client_id}</td>
                <td>{$cl.client_fio}</td>
                <td>{$cl.client_address}</td>
                <td>{$cl.client_mail}</td>
                <td>{$cl.client_number}</td>
                <td>{$cl.client_scores}</td>
                <td>
                    <a href="{$_layoutParams.root}clients/edit/{$cl.client_id}">
                        <img src="{$_layoutParams.root_img}icons/edit.png" title="Редактировать" class="icon">
                    </a>
                </td>
                <td>
                    <a href="{$_layoutParams.root}clients/delete/{$cl.client_id}">
                        <img src="{$_layoutParams.root_img}icons/delete.png" title="Удалить" class="icon">
                    </a>
                </td>
            </tr>
        {/foreach}
    </table>
    <p>{$pagination}</p>
{else}
    <p class="error"> Не найдено ни одного клиента. </p>
{/if}