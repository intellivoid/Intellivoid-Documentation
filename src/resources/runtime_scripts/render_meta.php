<?php


    use DynamicalWeb\HTML;

    function renderMetaTags(string $title, string $description, string $url="https://docs.intellivoid.net/")
    {
        $title = htmlspecialchars($title, ENT_QUOTES, 'UTF-8');
        $description = htmlspecialchars($description, ENT_QUOTES, 'UTF-8');
        $url = htmlspecialchars($url, ENT_QUOTES, 'UTF-8');

        HTML::print("<meta name=\"renderer\" content=\"DynamicalWeb\">", false);
        HTML::print("<meta name=\"title\" content=\"$title\">", false);
        HTML::print("<meta name=\"description\" content=\"$description\">", false);

        HTML::print("<meta property=\"og:type\" content=\"website\">", false);
        HTML::print("<meta property=\"og:url\" content=\"$url\">", false);
        HTML::print("<meta property=\"og:title\" content=\"$title\">", false);
        HTML::print("<meta property=\"og:description\" content=\"$description\">", false);
        HTML::print("<meta property=\"og:image\" content=\"/assets/images/banner.jpg\">", false);

        HTML::print("<meta property=\"twitter:card\" content=\"summary_large_image\">", false);
        HTML::print("<meta property=\"twitter:url\" content=\"$url\">", false);
        HTML::print("<meta property=\"twitter:title\" content=\"$title\">", false);
        HTML::print("<meta property=\"twitter:description\" content=\"$description\">", false);
        HTML::print("<meta property=\"twitter:image\" content=\"/assets/images/banner.jpg\">", false);

        HTML::print("<title>$title</title>", false);
    }