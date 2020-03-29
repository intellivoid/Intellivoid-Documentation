<?php
    use DynamicalWeb\HTML;
?>
<!DOCTYPE html>
<html lang="<?PHP HTML::print(APP_LANGUAGE_ISO_639); ?>">

    <head>
        <?PHP HTML::importSection('header'); ?>
        <title>CoffeeHouse API Wrappers</title>
    </head>

    <body class="fix-header card-no-border">
        <div id="main-wrapper">
            <?PHP HTML::importSection('page_header'); ?>
            <?PHP HTML::importSection('navigation_sidebar'); ?>
            <div class="page-wrapper">
                <div class="container-fluid">
                    <div class="row page-titles">
                        <div class="col-md-5 col-8 align-self-center">
                            <h3 class="text-themecolor m-b-0 m-t-0 pt-2">CoffeeHouse API Wrappers</h3>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="javascript:void(0)">CoffeeHouse</a>
                                </li>
                                <li class="breadcrumb-item active">API Wrappers</li>
                            </ol>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <h3 class="card-title">CoffeeHouse API Wrappers</h3>
                                    <div class="row mt-3">
                                        <div class="col-lg-6">
                                            <div class="d-flex justify-content-center">
                                                <img class="img-fluid card-icon" style="width: 242px; height: 242px;/** AUTO-GENERATED **/" alt="Find Content" src="/assets/images/<?PHP theme_VectorImage(); ?>/gen_vcs.svg">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            CoffeeHouse API Wrappers are designed to communicate with the CoffeeHouse
                                            API service while you focus on programming. Intellivoid when possible, will
                                            make official and open source API Wrappers allowing anyone to contribute to
                                            them and improve it.
                                            <br/>
                                            <br/>
                                            This page will display both official and unofficial API
                                            wrappers. If you created one then let us know! we will showcase it here.
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <h3 class="card-title">
                                        <i class="mdi mdi-verified text-info"></i>
                                        CoffeeHouse Python API Wrapper
                                    </h3>
                                    <div class="p-20">
                                        <pre><code class="language-python"><?PHP HTML::print(file_get_contents(__DIR__ . DIRECTORY_SEPARATOR . 'lydia_example.py'), true); ?></code></pre>
                                    </div>
                                </div>
                                <div class="card-footer text-muted">
                                    <button class="btn btn-dark waves-effect waves-light" onclick="window.open('https://github.com/intellivoid/CoffeeHouse-Python-API-Wrapper');" type="button">
                                        <span class="btn-label">
                                            <i class="fa fa-github"></i>
                                        </span>GitHub
                                    </button>
                                    <button class="btn btn-info waves-effect waves-light" onclick="window.open('https://pypi.org/project/coffeehouse/');" type="button">
                                        <span class="btn-label">
                                            <i class="mdi mdi-language-python"></i>
                                        </span>PyPi
                                    </button>
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
