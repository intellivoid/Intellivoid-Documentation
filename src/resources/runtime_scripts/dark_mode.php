<?php

    use DynamicalWeb\Actions;
    use DynamicalWeb\DynamicalWeb;
    use DynamicalWeb\HTML;

    if(isset($_GET['action']))
    {
        if($_GET['action'] == 'enable_dark_mode')
        {
            setCookie('dark_mode', "true", time() + (86400 * 64), "/");
            Actions::redirect(DynamicalWeb::getRoute(APP_CURRENT_PAGE));
        }

        if($_GET['action'] == 'disable_dark_mode')
        {
            setCookie('dark_mode', "false", time() + (86400 * 64), "/");
            Actions::redirect(DynamicalWeb::getRoute(APP_CURRENT_PAGE));
        }
    }


    if(isset($_COOKIE['dark_mode']) == false)
    {
        setCookie('dark_mode', "true", time() + (86400 * 64), "/");
        define('DARK_MODE_ENABLED', false, false);
    }
    else
    {
        $DarkModeCookie = strtolower(stripslashes($_COOKIE['dark_mode']));
        if($DarkModeCookie == "true")
        {
            define('DARK_MODE_ENABLED', true, false);
        }
        else
        {
            define('DARK_MODE_ENABLED', false, false);
        }
    }

    function theme_ButtonInfo()
    {
        if(DARK_MODE_ENABLED)
        {
            HTML::print("btn-primary");
            return;
        }

        HTML::print("btn-info");
    }

    function theme_VectorImage()
    {
        if(DARK_MODE_ENABLED)
        {
            HTML::print("dark_mode");
            return;
        }

        HTML::print("light_mode");
    }

    function theme_TextColor()
    {
        if(DARK_MODE_ENABLED)
        {
            HTML::print("text-light");
            return;
        }

        HTML::print("text-dark");
    }
