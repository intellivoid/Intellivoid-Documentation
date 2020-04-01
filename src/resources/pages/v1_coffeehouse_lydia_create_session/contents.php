<?php

use DynamicalWeb\DynamicalWeb;
use DynamicalWeb\HTML;
?>
<!DOCTYPE html>
<html lang="<?PHP HTML::print(APP_LANGUAGE_ISO_639); ?>">

    <head>
        <?PHP HTML::importSection('header'); ?>
        <title>Create Session</title>
    </head>

    <body class="fix-header card-no-border">
        <div id="main-wrapper">
            <?PHP HTML::importSection('page_header'); ?>
            <?PHP HTML::importSection('navigation_sidebar'); ?>
            <div class="page-wrapper">
                <div class="container-fluid">
                    <div class="row page-titles">
                        <div class="align-self-center">
                            <h3 class="text-themecolor m-b-0 m-t-0 pt-2">Create Session</h3>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="javascript:void(0)">CoffeeHouse</a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="javascript:void(0)">Lydia</a>
                                </li>
                                <li class="breadcrumb-item active">Create Session</li>
                            </ol>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <h3 class="card-title">Creating a session</h3>
                                    at the beginning of each conversation with each user or group a session must be
                                    established, this session must not change throughout the conversation unless it has
                                    expired or is no longer available due to an AI Error.
                                    <br/>
                                    <br/>
                                    If a new session ID gets established for each incoming message, this will result in
                                    weird conversations that will not make sense since the AI will not be able to recall
                                    the last few messages of the conversation with the user or group
                                    <br/>
                                    <br/>
                                    This method will return a Session Object upon a successful request
                                    <hr/>
                                    <div id="parameters">
                                        <div class="alert alert-danger">
                                            <h3 class="text-danger">
                                                <i class="fa fa-exclamation-circle"></i> Session Creation Limit
                                            </h3>
                                            Depending on your subscription, there are a limited amount of sessions that
                                            you can create. Each session lasts around for 3 hours but the usage for
                                            each session contains no limit.
                                            <br/>
                                            <br/>
                                            For example, your subscription may only support "100 Monthly Lydia Sessions"
                                            which means that you can only create 100 sessions per month and that limitation
                                            only resets after a billing cycle (Both paid and free)
                                        </div>
                                        <?PHP
                                            $create_session_parameters_path = __DIR__ . DIRECTORY_SEPARATOR . 'create_session_parameters.json';
                                            $create_session_parameters = json_decode(file_get_contents($create_session_parameters_path), true);
                                        ?>
                                        <label for="auth_example" class="mt-2">Endpoint</label>
                                        <input class="form-control <?PHP theme_TextColor(); ?> mb-3" id="auth_example" value="<?PHP HTML::print($create_session_parameters['ENDPOINT']); ?>" readonly>
                                        <label>Parameters</label>
                                        <?PHP
                                            generate_parameters_table($create_session_parameters);
                                        ?>
                                    </div>
                                    <hr/>
                                    <div id="response">
                                        <h4>Example Success Response</h4>
                                        <pre><code class="language-json"><?PHP HTML::print(file_get_contents(__DIR__ . DIRECTORY_SEPARATOR  . 'create_session_success.json'), true); ?></code></pre>
                                    </div>
                                    <br/>
                                    <div class="session_structure">
                                        <h4>Session Object Structure</h4>
                                        <?PHP
                                            $api_methods_path = __DIR__ . DIRECTORY_SEPARATOR . 'session_object_structure.json';
                                            generate_object_structure(json_decode(file_get_contents($api_methods_path), true));
                                        ?>
                                    </div>
                                    <hr/>
                                    <div id="invalid_language_code">
                                        <h4>Invalid Language Code Response</h4>
                                        <br/>
                                        This response is given when the parameter <code>target_language</code> contains
                                        an invalid value.
                                        <pre><code class="language-json"><?PHP HTML::print(file_get_contents(__DIR__ . DIRECTORY_SEPARATOR  . 'invalid_language_code.json'), true); ?></code></pre>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <button class="right-side-toggle waves-effect waves-light <?PHP theme_ButtonInfo(); ?> btn btn-circle btn-sm pull-right" onclick="location.href='<?PHP DynamicalWeb::getRoute("v1_coffeehouse_lydia_get_session", [], true); ?>';">
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
