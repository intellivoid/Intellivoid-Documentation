<?php

use DynamicalWeb\DynamicalWeb;
use DynamicalWeb\HTML;
?>
<!DOCTYPE html>
<html lang="<?PHP HTML::print(APP_LANGUAGE_ISO_639); ?>">

    <head>
        <?PHP HTML::importSection('header'); ?>
        <title>CoffeeHouse Introduction</title>
    </head>

    <body class="fix-header card-no-border">
        <div id="main-wrapper">
            <?PHP HTML::importSection('page_header'); ?>
            <?PHP HTML::importSection('navigation_sidebar'); ?>
            <div class="page-wrapper">
                <div class="container-fluid">
                    <div class="row page-titles">
                        <div class="align-self-center">
                            <h3 class="text-themecolor m-b-0 m-t-0 pt-2">CoffeeHouse Introduction</h3>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="javascript:void(0)">CoffeeHouse</a>
                                </li>
                                <li class="breadcrumb-item active">Introduction</li>
                            </ol>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-7 col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    <h3 class="card-title">Introduction to CoffeeHouse</h3>
                                    CoffeeHouse allows you to implement Machine Learning and Artificial Intelligence
                                    features into your software using the HTTP API, at the moment CoffeeHouse only
                                    provides the feature to interact with Lydia, in the future Intellivoid will
                                    add more to CoffeeHouse and the documentation for those new features will be added
                                    to Intellivoid Docs
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-body">
                                    <h3 class="card-title">Quick References</h3>
                                    <ul class="pt-3">
                                        <li>
                                            <a href="https://coffeehouse.intellivoid.net" target="_blank">CoffeeHouse Website</a>
                                        </li>
                                        <li>
                                            <a href="<?PHP DynamicalWeb::getRoute("v1_coffeehouse_wrappers", [], true); ?>">API Wrappers</a>
                                        </li>
                                        <li>
                                            <a href="<?PHP DynamicalWeb::getRoute("v1_coffeehouse_lydia_basics", [], true); ?>">Lydia API Documentation</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                        </div>

                        <div class="col-lg-5 col-md-12">
                            <div class="ribbon-wrapper card">
                                <div class="card-body">
                                    <div class="ribbon ribbon-danger">Obtaining a API Key</div>
                                    <div class="d-flex justify-content-center">
                                        <img class="img-responsive" style="height: 162px; width: 162px;" src="/assets/images/<?PHP theme_VectorImage(); ?>/gen_api.svg" alt="Obtain API Key">
                                    </div>
                                    You can obtain a free API key from CoffeeHouse using the free subscription plan, if
                                    you need more resources then the prices for more resources are also reasonable for
                                    small-time developers.
                                    <hr/>
                                    Free will always be free! There are no hidden trials or limitations other than
                                    how much resources you can use.
                                    <br/>
                                    <button class="btn <?PHP theme_ButtonInfo(); ?> waves-effect waves-light mt-3" onclick="window.open('https://coffeehouse.intellivoid.net/');">Visit CoffeeHouse</button>
                                </div>
                            </div>
                            <div class="ribbon-wrapper card">
                                <div class="card-body">
                                    <div class="ribbon ribbon-danger">Have a suggestion?</div>
                                    <div class="d-flex justify-content-center">
                                        <img class="img-responsive" style="height: 162px; width: 162px;" src="/assets/images/<?PHP theme_VectorImage(); ?>/gen_feedback.svg" alt="Feedback">
                                    </div>
                                    Let's hear it! Reach us out at our Telegram Discussions Group
                                    <br/>
                                    <button class="btn <?PHP theme_ButtonInfo(); ?> waves-effect waves-light mt-3" onclick="window.open('https://t.me/IntellivoidDev/');">Join @IntellivoidDev</button>
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
