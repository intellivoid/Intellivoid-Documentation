<?php

    if(isset($_GET['action']))
    {
        if($_GET['action'] == 'enable_dark_mode')
        {
            setCookie('dark_mode', "true");
            $_COOKIE['dark_mode'] = "true";
        }

        if($_GET['action'] == 'disable_dark_mode')
        {
            setCookie('dark_mode', "false");
            $_COOKIE['dark_mode'] = "false";
        }
    }

    if(isset($_COOKIE['dark_mode']) == false)
    {
        setcookie('dark_mode', "false");
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