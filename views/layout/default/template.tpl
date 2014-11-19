<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>{$title|default:"Traffic-CRS"}</title>
        <link href="{$_layoutParams.root}favicon.ico" rel="icon" type="image/x-icon" />
        <script type="text/javascript" src="{$_layoutParams.root}public/js/jquery.js"></script>
        <script type="text/javascript" src="{$_layoutParams.root}public/js/jquery.validationEngine-ru.js"></script>
        <script type="text/javascript" src="{$_layoutParams.root}public/js/jquery.validationEngine.js"></script>
        <script type="text/javascript" src="{$_layoutParams.root}public/js/jquery-ui-1.9.2.custom.min.js"></script>
        <script type="text/javascript" src="{$_layoutParams.root}public/js/jquery.jclock.js"></script>
        <script type="text/javascript" src="{$_layoutParams.root}public/js/main.js"></script>
        
        {if isset($_layoutParams.js) && count($_layoutParams.js)}
            {foreach from = $_layoutParams.js item = js}
                <script type="text/javascript" src="{$js}"></script>
            {/foreach}
        {/if}
        
        <link href="{$_layoutParams.root}public/css/validationEngine.jquery.css" type="text/css" rel="stylesheet"/>
        <link href="{$_layoutParams.root}public/css/jquery-ui-1.9.2.custom.min.css" type="text/css" rel="stylesheet"/>
        <link href="{$_layoutParams.root_css}style.css" type="text/css" rel="stylesheet"/>
        <link href="{$_layoutParams.root_css}page.css" type="text/css" rel="stylesheet"/>
    </head>
    <body>
        <div class="wrapper">
            <header>
                <a href="{$_layoutParams.root}" class="app-title">
                    <h1>{$_layoutParams.app_name}</h1>
                </a>
                <ul class="menu">
                    {if isset($_layoutParams.menu)}
                        {foreach from = $_layoutParams.menu item = menu}
                            <li><a href="{$menu.link}">{$menu.title}</a></li>
                        {/foreach}
                    {/if}
                </ul>
            </header>
            <section>
                {if isset($_access)}
                    <div id="access">{$_access}</div>
                {/if}
                {if isset($_error)}
                    <div id="error">{$_error}</div>
                {/if}
                {include file=$_content}
            </section>
            <footer>
                <p class="jclock"></p>
                {*<p>{$smarty.now|date_format:"%Y-%m-%d, %H:%M:%S"}</p>*}
                <p>&copy {$_layoutParams.app_create}</p>
            </footer>
        </div>
    </body>
</html>