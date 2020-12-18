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
                "Application Settings API - Get Variable",
                "Returns the value of an existing variable"
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
                            <h3 class="text-themecolor m-b-0 m-t-0 pt-2">Application Settings - Get Variable</h3>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="javascript:void(0)">Intellivoid</a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="javascript:void(0)">Application Settings</a>
                                </li>
                                <li class="breadcrumb-item active">Get Variable</li>
                            </ol>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <h3 class="card-title">Get Variable</h3>
                                    Returns the value of an existing variable
                                    <hr/>
                                    <label for="api_endpoint" class="mt-2">Endpoint</label>
                                    <input class="form-control <?PHP theme_TextColor(); ?> mb-3" id="api_endpoint" value="<?PHP HTML::print(f_decode(__DIR__ . DIRECTORY_SEPARATOR . 'get_parameters.json')['ENDPOINT']); ?>" readonly>
                                    <label>Parameters</label>
                                    <?PHP generate_parameters_table(f_decode(__DIR__ . DIRECTORY_SEPARATOR . 'get_parameters.json')); ?>
                                    <hr/>

                                    <div id="success_response">
                                        <h4>Example Success Response</h4>
                                        <pre><code class="language-json"><?PHP HTML::print(file_get_contents(__DIR__ . DIRECTORY_SEPARATOR  . 'example_response.json'), true); ?></code></pre>
                                    </div>
                                    <hr/>

                                    <div id="success_meta_response">
                                        <h4>Example Success Response with Metadata</h4>
                                        If you have <code>include_meta</code> set to true, then the return results will
                                        include more information about the variable include it's value
                                        <pre><code class="language-json"><?PHP HTML::print(file_get_contents(__DIR__ . DIRECTORY_SEPARATOR  . 'example_meta_response.json'), true); ?></code></pre>
                                    </div>

                                    <div class="mt-3" class="meta_results_structure">
                                        <h4>Metadata Results Structure</h4>
                                        <?PHP generate_object_structure(f_decode(__DIR__ . DIRECTORY_SEPARATOR . 'meta_results_structure.json')); ?>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="row">
                        <button class="right-side-toggle waves-effect waves-light <?PHP theme_ButtonInfo(); ?> btn btn-circle btn-sm pull-right" onclick="location.href='<?PHP DynamicalWeb::getRoute('v1_coffeehouse_lydia_create_session', [] ,true); ?>';">
                            <i class="fa fa-arrow-right text-white"></i>
                        </button>
                    </div>

                </div>
                <?PHP HTML::importSection('page_footer'); ?>
            </div>
        </div>
        <?PHP HTML::importSection('javascript'); ?>
    </body>

</html>
