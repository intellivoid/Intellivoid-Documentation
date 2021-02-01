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
                "COA API - Request Authentication",
                "Allows you to request authentication so that a user can authenticate to your Application"
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
                            <h3 class="text-themecolor m-b-0 m-t-0 pt-2">Request Authentication</h3>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="javascript:void(0)">Intellivoid</a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="javascript:void(0)">COA</a>
                                </li>
                                <li class="breadcrumb-item active">Request Authentication</li>
                            </ol>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <h3 class="card-title">Request Authentication</h3>
                                    This method allows you to request authentication to a user, you can only get the
                                    Access Token by requesting authentication first. The user must visit the URL
                                    provided in the response in order to review what permissions your Application is
                                    requesting and deny them if before authenticating.
                                    <br/><br/>
                                    Using the Request Token provided, you can check the status of the Authentication
                                    Request and see if the user has authenticated or not. see <a href="<?PHP DynamicalWeb::getRoute("v1_intellivoid/coa/process_authentication", [], true);  ?>">Process Authentication</a>
                                    to learn how to do that. After the user authenticates you will be provided a
                                    Access Token, you won't need the Request Token anymore after obtaining an Access Token.
                                    <hr/>
                                    <label for="api_endpoint" class="mt-2">Endpoint</label>
                                    <input class="form-control <?PHP theme_TextColor(); ?> mb-3" id="api_endpoint" value="<?PHP HTML::print(f_decode(__DIR__ . DIRECTORY_SEPARATOR . 'request_authentication_parameters.json')['ENDPOINT']); ?>" readonly>
                                    <label>Parameters</label>
                                    <?PHP generate_parameters_table(f_decode(__DIR__ . DIRECTORY_SEPARATOR . 'request_authentication_parameters.json')); ?>

                                    <hr/>
                                    <div id="success_response">
                                        <h4>Example Success Response</h4>
                                        <pre><code class="language-json"><?PHP HTML::print(file_get_contents(__DIR__ . DIRECTORY_SEPARATOR  . 'example_response.json'), true); ?></code></pre>
                                    </div>
                                    <hr/>
                                    <div class="mt-3">
                                        <h4>Request Authentication Response Structure</h4>
                                        <?PHP generate_object_structure(f_decode(__DIR__ . DIRECTORY_SEPARATOR . 'authentication_request_structure.json')); ?>
                                    </div>

                                    <div class="mt-3">
                                        <h4>Application Permissions</h4>
                                        <p>
                                            To get more information about what permissions a Application can request and
                                            what do they mean, see <a href="<?PHP DynamicalWeb::getRoute("v1_intellivoid/application/permissions", [], true); ?>">Application Permissions</a>
                                        </p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="row">
                        <button class="right-side-toggle waves-effect waves-light <?PHP theme_ButtonInfo(); ?> btn btn-circle btn-sm pull-right" onclick="location.href='<?PHP DynamicalWeb::getRoute('v1_intellivoid/coa/process_authentication', [] ,true); ?>';">
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
