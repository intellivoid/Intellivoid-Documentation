<?php

use DynamicalWeb\DynamicalWeb;
use DynamicalWeb\HTML;
?>
<!DOCTYPE html>
<html lang="<?PHP HTML::print(APP_LANGUAGE_ISO_639); ?>">

    <head>
        <?PHP HTML::importSection('header'); ?>
        <?PHP
            renderMetaTags(
                "Coming Soon",
                "The requested resource is not publicly available yet"
            );
        ?>
    </head>

    <body class="fix-header card-no-border">
        <div id="main-wrapper">
            <?PHP HTML::importSection('page_header'); ?>
            <?PHP HTML::importSection('navigation_sidebar'); ?>
            <div class="page-wrapper">
                <div class="container-fluid">
                    <div class="row page-titles">
                        <div class="align-self-center">
                            <h3 class="text-themecolor m-b-0 m-t-0 pt-2">Coming Soon</h3>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <h3 class="card-title">Something is missing here!</h3>
                                    Documentation not available yet
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-body">
                                    <h3 class="card-title">Looking for something else?</h3>
                                    <ul>
                                        <li>
                                            <a href="<?PHP DynamicalWeb::getRoute('index', [], true) ?>">
                                                Home
                                            </a>
                                        </li>
                                        <li>
                                            <a href="<?PHP DynamicalWeb::getRoute('v1_coffeehouse/introduction', [], true) ?>">
                                                CoffeeHouse Documentation
                                            </a>
                                        </li>
                                        <li>
                                            <a href="<?PHP DynamicalWeb::getRoute('v1_openblu/introduction', [], true) ?>">
                                                OpenBlu Documentation
                                            </a>
                                        </li>
                                        <li>
                                            <a href="<?PHP DynamicalWeb::getRoute('v1_intellivoid/translations/introduction', [], true) ?>">
                                                Translations Documentation
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://github.com/Intellivoid">
                                                Intellivoid GitHub
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://intellivoid.net/">
                                                Intellivoid.net
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://t.me/IntellivoidDiscussions">
                                                Telegram Support Group
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://t.me/IntellivoidSupport">
                                                Contact Support
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <?PHP HTML::importSection('page_footer'); ?>
            </div>
        </div>
        <?PHP HTML::importSection('javascript'); ?>
    </body>

</html>
