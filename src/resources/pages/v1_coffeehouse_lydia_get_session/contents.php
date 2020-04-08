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
                "Get Session",
                "This method simply allows you to get the session information given if you provide the correct session id"
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
                            <h3 class="text-themecolor m-b-0 m-t-0 pt-2">Get Session</h3>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="javascript:void(0)">CoffeeHouse</a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="javascript:void(0)">Lydia</a>
                                </li>
                                <li class="breadcrumb-item active">Get Session</li>
                            </ol>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <h3 class="card-title">Getting an existing session</h3>
                                    This method simply allows you to get the session information given if you provide the correct session id
                                    <?PHP
                                        $get_session_parameters_path = __DIR__ . DIRECTORY_SEPARATOR . 'get_session_parameters.json';
                                        $get_session_parameters = json_decode(file_get_contents($get_session_parameters_path), true);
                                    ?>
                                    <hr/>
                                    <label for="api_endpoint" class="mt-2">Endpoint</label>
                                    <input class="form-control <?PHP theme_TextColor(); ?> mb-3" id="api_endpoint" value="<?PHP HTML::print($get_session_parameters['ENDPOINT']); ?>" readonly>
                                    <label>Parameters</label>
                                    <?PHP
                                        generate_parameters_table($get_session_parameters);
                                    ?>
                                    <hr/>
                                    <div id="success_response">
                                        <h4>Example Success Response</h4>
                                        This response is given when a session was successfully found
                                        <pre><code class="language-json"><?PHP HTML::print(file_get_contents(__DIR__ . DIRECTORY_SEPARATOR  . 'get_session_success.json'), true); ?></code></pre>
                                    </div>
                                    <br/>
                                    <div class="session_object_structure">
                                        <h4>Session Object Structure</h4>
                                        <?PHP
                                        $api_methods_path = __DIR__ . DIRECTORY_SEPARATOR . 'session_object_structure.json';
                                        generate_object_structure(json_decode(file_get_contents($api_methods_path), true));
                                        ?>
                                    </div>
                                    <hr/>
                                    <div id="session_not_found_response">
                                        <h4>Example Session Not Found Response</h4>
                                        This response is given when the given session id was not found
                                        <pre><code class="language-json"><?PHP HTML::print(file_get_contents(__DIR__ . DIRECTORY_SEPARATOR  . 'session_not_found.json'), true); ?></code></pre>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <button class="right-side-toggle waves-effect waves-light <?PHP theme_ButtonInfo(); ?> btn btn-circle btn-sm pull-right" onclick="location.href='<?PHP DynamicalWeb::getRoute("v1_coffeehouse_lydia_think_thought", [], true); ?>';">
                                    <i class="fa fa-arrow-right text-white"></i>
                                </button>
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
