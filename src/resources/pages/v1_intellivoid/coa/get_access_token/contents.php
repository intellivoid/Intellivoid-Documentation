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
                "COA API - Get Access Token",
                "Allows you request information about a Access Token your Application has access to"
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
                            <h3 class="text-themecolor m-b-0 m-t-0 pt-2">Get Access Token</h3>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="javascript:void(0)">Intellivoid</a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="javascript:void(0)">COA</a>
                                </li>
                                <li class="breadcrumb-item active">Get Access Token</li>
                            </ol>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <h3 class="card-title">Get Access Token</h3>
                                    <div class="alert alert-warning">
                                        <h3 class="text-warning">
                                            <i class="fa fa-exclamation-circle"></i> Notice
                                        </h3>
                                        This is not the method used to generate an Access Token, this method is only
                                        for getting information about an existing Access Token you already have access
                                        to. To obtain an Access Token see <a href="<?PHP DynamicalWeb::getRoute("v1_intellivoid/coa/process_authentication", [], true); ?>">Process Authentication</a>
                                    </div>
                                    This method returns information about an existing Access Token you already have
                                    access to.
                                    <hr/>
                                    <label for="api_endpoint" class="mt-2">Endpoint</label>
                                    <input class="form-control <?PHP theme_TextColor(); ?> mb-3" id="api_endpoint" value="<?PHP HTML::print(f_decode(__DIR__ . DIRECTORY_SEPARATOR . 'get_access_token_parameters.json')['ENDPOINT']); ?>" readonly>
                                    <label>Parameters</label>
                                    <?PHP generate_parameters_table(f_decode(__DIR__ . DIRECTORY_SEPARATOR . 'get_access_token_parameters.json')); ?>

                                    <hr/>
                                    <div id="success_response">
                                        <h4>Example Success Response</h4>
                                        This response is returned when the request was successful
                                        <pre><code class="language-json"><?PHP HTML::print(file_get_contents(__DIR__ . DIRECTORY_SEPARATOR  . 'example_response.json'), true); ?></code></pre>
                                    </div>
                                    <hr/>
                                    <div id="awaiting_response">
                                        <h4>Example Not Found Response</h4>
                                        This response is returned when you provide a Access Token which doesn't exist or
                                        you don't have access to.
                                        <pre><code class="language-json"><?PHP HTML::print(file_get_contents(__DIR__ . DIRECTORY_SEPARATOR  . 'not_found_example_response.json'), true); ?></code></pre>
                                    </div>
                                    <hr/>
                                    <div class="mt-3">
                                        <h4>Access Token Response Structure</h4>
                                        <?PHP generate_object_structure(f_decode(__DIR__ . DIRECTORY_SEPARATOR . 'access_token_structure.json')); ?>
                                    </div>

                                    <div class="mt-3">
                                        <h4>Application Permissions</h4>
                                        <p>
                                            To get more information about what permissions a Application can use and
                                            what do they mean, see <a href="<?PHP DynamicalWeb::getRoute("v1_intellivoid/application/permissions", [], true); ?>">Application Permissions</a>.
                                            Note that the user can deny certain permissions that your Application requests,
                                            so for example if you request the ability to view the users Email Address then
                                            the user can deny that request but still authenticate to your Application.
                                        </p>
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
