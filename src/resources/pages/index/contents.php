<?php

use DynamicalWeb\DynamicalWeb;
use DynamicalWeb\HTML;
?>
<!DOCTYPE html>
<html lang="<?PHP HTML::print(APP_LANGUAGE_ISO_639); ?>">

    <head>
        <?PHP HTML::importSection('header'); ?>
        <title>Intellivoid Docs</title>
    </head>

    <body class="fix-header card-no-border">
        <div id="main-wrapper">
            <?PHP HTML::importSection('page_header'); ?>
            <?PHP HTML::importSection('navigation_sidebar'); ?>
            <div class="page-wrapper">
                <div class="container-fluid">

                    <div class="row page-titles">
                        <div class="align-self-center">
                            <h3 class="text-themecolor m-b-0 m-t-0 pt-2">Intellivoid Docs</h3>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-8 col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Intellivoid Docs</h4>
                                    This is the official website for getting up to date documentation for any Intellivoid
                                    service or API
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex">
                                        <div class="m-r-20 align-self-center">
                                            <h1 class="<?PHP theme_TextColor(); ?>">
                                                <i class="fa fa-life-bouy"></i>
                                            </h1>
                                        </div>
                                        <div>
                                            <h3 class="card-title">Contact Support</h3>
                                            <h6 class="card-subtitle">Need technical support? </h6>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-4 align-self-center">
                                            <button class="btn <?PHP theme_ButtonInfo(); ?> waves-effect waves-light mt-3">Contact Us</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex">
                                        <div class="m-r-20 align-self-center">
                                            <h1 class="<?PHP theme_TextColor(); ?>">
                                                <i class="fa fa-paper-plane"></i>
                                            </h1>
                                        </div>
                                        <div>
                                            <h3 class="card-title">Telegram Discussions</h3>
                                            <h6 class="card-subtitle">Discuss with the community!</h6>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-4 align-self-center">
                                            <button class="btn <?PHP theme_ButtonInfo(); ?> waves-effect waves-light mt-3">Join @IntellivoidDev</button>
                                        </div>
                                    </div>
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
