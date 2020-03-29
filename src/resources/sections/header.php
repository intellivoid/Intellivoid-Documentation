<?php
    use DynamicalWeb\HTML;
?>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="apple-mobile-web-app-title" content="Intellivoid Docs">
<meta name="application-name" content="Intellivoid Docs">
<meta name="msapplication-TileColor" content="#455a64">
<meta name="msapplication-TileImage" content="/assets/favicon/mstile-144x144.png?v=A0mKwrPzwj">
<meta name="msapplication-config" content="/assets/favicon/browserconfig.xml?v=A0mKwrPzwj">
<meta name="theme-color" content="#455a64">
<link rel="apple-touch-icon" sizes="180x180" href="/assets/favicon/apple-touch-icon.png?v=A0mKwrPzwj">
<link rel="icon" type="image/png" sizes="32x32" href="/assets/favicon/favicon-32x32.png?v=A0mKwrPzwj">
<link rel="icon" type="image/png" sizes="194x194" href="/assets/favicon/favicon-194x194.png?v=A0mKwrPzwj">
<link rel="icon" type="image/png" sizes="192x192" href="/assets/favicon/android-chrome-192x192.png?v=A0mKwrPzwj">
<link rel="icon" type="image/png" sizes="16x16" href="/assets/favicon/favicon-16x16.png?v=A0mKwrPzwj">
<link rel="manifest" href="/assets/favicon/site.webmanifest?v=A0mKwrPzwj">
<link rel="mask-icon" href="/assets/favicon/safari-pinned-tab.svg?v=A0mKwrPzwj" color="#455a64">
<link rel="shortcut icon" href="/assets/favicon/favicon.ico?v=A0mKwrPzwj">
<link rel="stylesheet" href="/assets/scss/icons/material-design-iconic-font/css/materialdesignicons.min.css">
<link rel="stylesheet" href="/assets/plugins/bootstrap/css/bootstrap.min.css">
<?php
    $SelectedTheme = "default";
    $SelectedStyle = "style";
    if(DARK_MODE_ENABLED)
    {
        $SelectedTheme = "default-dark";
        $SelectedStyle = "style-dark";
    }
?>
<link rel="stylesheet" href="/assets/css/<?PHP HTML::print($SelectedStyle); ?>.css">
<link rel="stylesheet" href="/assets/css/colors/<?PHP HTML::print($SelectedTheme); ?>.css" id="theme">
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->