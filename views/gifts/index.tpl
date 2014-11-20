<h1> Подарки </h1>
<hr>
<form name="form" id="form" method="post" action="" enctype="multipart/form-data">
    <input type="hidden" name="add_gift" value="1">
    <p>
        <label for="gift_name"> Название </label>
        <input type="text" id="gift_name" class="validate[required]" name="gift_name" value="{$data.gift_name|default:""}" />
    </p>
    <p>
        <label for="gift_thumb"> Изображение </label>
        <input type="file" id="gift_thumb" class="validate[required]" name="gift_thumb" value="{$data.gift_thumb|default:""}"/>
    </p>  
    <p>
        <label for="gift_scores"> Баллы </label>
        <input type="number" min="10" max="10000" step="10" id="gift_scores" class="validate[required]" name="gift_scores" value="{$data.gift_scores|default:""}}" />
    </p>
    <p>
        <input type="submit" value="Добавить подарок">
    </p>
</form>
<hr>
 
{if isset($gifts) && count($gifts)}
    <table>
        <tr>
            <th><img src="{$_layoutParams.root_img}icons/thumb.png" title="Изображение" class="icon"></th>
            <th>Подарок</th>
            <th>Баллы</th>
            <th>
                <img src="{$_layoutParams.root_img}icons/delete-property.png" title="Удаление" class="icon">
            </th>
        </tr>
        {foreach from = $gifts item = g}
            <tr>
                <td><img src="{$g.gift_thumb_url}" title="{$g.gift_name}" class="thumbnail"></td>
                <td>{$g.gift_name|stripslashes}</td>
                <td>{$g.gift_scores}</td>
                <td>
                    <a href="{$_layoutParams.root}gifts/delete/{$g.gift_id}">
                        <img src="{$_layoutParams.root_img}icons/delete.png" title="Удалить" class="icon">
                    </a>
                </td>
            </tr>
        {/foreach}
    </table>
    <p>{$pagination}</p>
{else}
    <p> Не найдено ни одного подарка. </p>
{/if}