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
                "COA API - Process Authentication",
                "Allows you to process a Authentication Request in order to obtain a Access Token"
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
                            <h3 class="text-themecolor m-b-0 m-t-0 pt-2">Process Authentication</h3>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="javascript:void(0)">Intellivoid</a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="javascript:void(0)">COA</a>
                                </li>
                                <li class="breadcrumb-item active">Process Authentication</li>
                            </ol>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <h3 class="card-title">Process Authentication</h3>
                                    This method allows you to process the authentication request to the user, you will
                                    require a Request Token to perform this request, see <a href="#">Request Authentication</a>
                                    for more information on how to obtain a Request Token.
                                    <hr/>
                                    <label for="api_endpoint" class="mt-2">Endpoint</label>
                                    <input class="form-control <?PHP theme_TextColor(); ?> mb-3" id="api_endpoint" value="<?PHP HTML::print(f_decode(__DIR__ . DIRECTORY_SEPARATOR . 'process_authentication_parameters.json')['ENDPOINT']); ?>" readonly>
                                    <label>Parameters</label>
                                    <?PHP generate_parameters_table(f_decode(__DIR__ . DIRECTORY_SEPARATOR . 'process_authentication_parameters.json')); ?>

                                    <hr/>
                                    <div id="success_response">
                                        <h4>Example Success Response</h4>
                                        This response is returned when the user has successfully authenticated to your
                                        Application.
                                        <pre><code class="language-json"><?PHP HTML::print(file_get_contents(__DIR__ . DIRECTORY_SEPARATOR  . 'example_response.json'), true); ?></code></pre>
                                    </div>
                                    <hr/>
                                    <div id="awaiting_response">
                                        <h4>Example Awaiting Response</h4>
                                        This is a normal and expected response telling you that the server is waiting
                                        for the user to authenticate to your Application, at this stage you should
                                        poll the request until the results has changed to another error or success
                                        response.
                                        <pre><code class="language-json"><?PHP HTML::print(file_get_contents(__DIR__ . DIRECTORY_SEPARATOR  . 'example_awaiting_response.json'), true); ?></code></pre>
                                    </div>
                                    <hr/>
                                    <div class="mt-3">
                                        <h4>Process Authentication Response Structure</h4>
                                        <?PHP generate_object_structure(f_decode(__DIR__ . DIRECTORY_SEPARATOR . 'authentication_process_structure.json')); ?>
                                    </div>

                                    <div class="mt-3">
                                        <h4>Application Permissions</h4>
                                        <p>
                                            To get more information about what permissions a Application can use and
                                            what do they mean, see <a href="<?PHP DynamicalWeb::getRoute("v1_ivs_application_permissions", [], true); ?>">Application Permissions</a>.
                                            Note that the user can deny certain permissions that your Application requests,
                                            so for example if you request the ability to view the users Email Address then
                                            the user can deny that request but still authenticate to your Application.
                                        </p>
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
