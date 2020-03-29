<?php
    use DynamicalWeb\HTML;
?>
<!DOCTYPE html>
<html lang="<?PHP HTML::print(APP_LANGUAGE_ISO_639); ?>">

    <head>
        <?PHP HTML::importSection('header'); ?>
        <title>Documentation</title>
    </head>

    <body class="fix-header card-no-border">
        <div id="main-wrapper">
            <?PHP HTML::importSection('page_header'); ?>
            <?PHP HTML::importSection('navigation_sidebar'); ?>
            <div class="page-wrapper">
                <div class="container-fluid">

                    <div class="row page-titles">
                        <div class="col-md-5 col-8 align-self-center">
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
                                    <hr/>
                                    <div class="row mt-3">
                                        <div class="col-lg-6">
                                            <h4 class="mt-2">CoffeeHouse</h4>
                                            CoffeeHouse is a cloud-based Machine Learning and Artificial Intelligence
                                            engine written from the ground up, implement ML & AI Tools into your Application
                                            without needing to do all the processing yourself
                                            <br/>
                                            <button class="btn btn-info waves-effect waves-light mt-3">View Documentation</button>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="d-flex justify-content-center">
                                                <img class="img-fluid card-icon" style="width: 242px; height: 242px;/** AUTO-GENERATED **/" alt="Find Content" src="/assets/images/coffeehouse_prm.svg">
                                            </div>
                                        </div>
                                    </div>

                                    <hr/>
                                    <div class="row mt-3">
                                        <div class="col-lg-6">
                                            <h4 class="mt-2">OpenBlu</h4>
                                            OpenBlu is a decentralized VPN solution offering a bunch of servers
                                            which users can connect to using OpenVPN. you can use the API to retrieve
                                            these servers and connect to them
                                            <br/>
                                            <button class="btn btn-info waves-effect waves-light mt-3">View Documentation</button>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="d-flex justify-content-center">
                                                <img class="img-fluid card-icon" style="width: 242px; height: 242px;/** AUTO-GENERATED **/" alt="Find Content" src="/assets/images/openblu_prm.svg">
                                            </div>
                                        </div>
                                    </div>

                                    <hr/>
                                    <div class="row mt-3">
                                        <div class="col-lg-6">
                                            <h4 class="mt-2">Intellivoid Accounts</h4>
                                            Intellivoid Accounts is a second generation authentication service allowing
                                            users to login to various services & websites using one account, users have
                                            the freedom to choose what permissions to allow without any obligation
                                            whatsoever.
                                            <br/>
                                            <button class="btn btn-info waves-effect waves-light mt-3">Documentation Coming Soon</button>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="d-flex justify-content-center">
                                                <img class="img-fluid card-icon" style="width: 242px; height: 242px;/** AUTO-GENERATED **/" alt="Find Content" src="/assets/images/iva_prm.svg">
                                            </div>
                                        </div>
                                    </div>

                                    <hr/>
                                    <div class="row mt-3">
                                        <div class="col-lg-6">
                                            <h4 class="mt-2">Translate Intellivoid</h4>
                                            Intellivoid can be available in more languages, we are always opened to
                                            volunteers to help translate Intellivoid's different services into other
                                            languages. Your work will forever be credited!
                                            <br/>
                                            <button class="btn btn-info waves-effect waves-light mt-3">Learn More</button>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="d-flex justify-content-center">
                                                <img class="img-fluid card-icon" style="width: 242px; height: 242px;/** AUTO-GENERATED **/" alt="Find Content" src="/assets/images/translate.svg">
                                            </div>
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex">
                                        <div class="m-r-20 align-self-center">
                                            <h1 class="text-dark">
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
                                            <button class="btn btn-info waves-effect waves-light mt-3">Contact Us</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex">
                                        <div class="m-r-20 align-self-center">
                                            <h1 class="text-dark">
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
                                            <button class="btn btn-info waves-effect waves-light mt-3">Join @IntellivoidDev</button>
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
