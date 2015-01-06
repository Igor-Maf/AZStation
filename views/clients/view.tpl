<h1>Страница клиента</h1>
<div class="third">
    <p class="access">Код клиента - {$cl.client_id}</p>
    <p>
        Ф.И.О. - <b>{$cl.client_fio}</b>
    </p>
    <p>
        Адресс - <b>{$cl.client_address}</b>
    </p>
    <p>
        Email - <b>{$cl.client_mail}</b>
    </p>
    <p>
        Телефон - <b>{$cl.client_number}</b>
    </p>
    <p>
        У вас есть <b>{$cl.client_scores}</b> б.
    </p>
    <a href="{$_layoutParams.root}clients/edit/{$cl.client_id}">Редактировать профиль</a>
</div>

<div class="two-third">    
    {if isset($gifts) && count($gifts)}
        <p class="access">Вам доступно {count($gifts)} подарков.</p>
        <table>
            {foreach from = $gifts item = g}
                <tr>
                    <td><img src="{$g.gift_thumb_url}" title="{$g.gift_name}" class="thumbnail"></td>
                    <td>{$g.gift_name|stripslashes}</td>
                    <td>{$g.gift_scores}</td>
                    <td><a href="{$_layoutParams.root}clients/get/{$cl.client_id}/{$g.gift_scores}">Забрать подарок</a></td>
                </tr>
            {/foreach}
        </table>
    {else}
        <p> У пользователя недостаточно баллов, чтобы получить подарок. </p>
    {/if}
</div>