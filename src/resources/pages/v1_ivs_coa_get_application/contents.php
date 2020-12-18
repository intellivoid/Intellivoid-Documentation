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
                "COA API - Get Application",
                "Returns Public Information about an Application using it's Application ID"
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
                            <h3 class="text-themecolor m-b-0 m-t-0 pt-2">Get Application</h3>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="javascript:void(0)">Intellivoid</a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="javascript:void(0)">COA</a>
                                </li>
                                <li class="breadcrumb-item active">Get Application</li>
                            </ol>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <h3 class="card-title">Get Application</h3>
                                    This method allows you to get public information about a Application using it's ID.
                                    <hr/>
                                    <label for="api_endpoint" class="mt-2">Endpoint</label>
                                    <input class="form-control <?PHP theme_TextColor(); ?> mb-3" id="api_endpoint" value="<?PHP HTML::print(f_decode(__DIR__ . DIRECTORY_SEPARATOR . 'get_application_parameters.json')['ENDPOINT']); ?>" readonly>
                                    <label>Parameters</label>
                                    <?PHP generate_parameters_table(f_decode(__DIR__ . DIRECTORY_SEPARATOR . 'get_application_parameters.json')); ?>

                                    <hr/>
                                    <div id="success_response">
                                        <h4>Example Success Response</h4>
                                        <pre><code class="language-json"><?PHP HTML::print(file_get_contents(__DIR__ . DIRECTORY_SEPARATOR  . 'example_response.json'), true); ?></code></pre>
                                    </div>
                                    <hr/>
                                    <div class="mt-3">
                                        <h4>Application Object Structure</h4>
                                        <?PHP generate_object_structure(f_decode(__DIR__ . DIRECTORY_SEPARATOR . 'application_object_structure.json')); ?>
                                    </div>
                                    <div class="mt-3">
                                        <h4>Application Authentication Types</h4>
                                        <p>These are the types of Authentication methods that a Application may have enabled.</p>
                                        <?PHP generate_types_structure(f_decode(__DIR__ . DIRECTORY_SEPARATOR . 'authentication_types_structure.json')); ?>
                                    </div>

                                    <div class="mt-3">
                                        <h4>Application Permissions</h4>
                                        <p>
                                            To get more information about what permissions a Application can use and
                                            what do they mean, see <a href="<?PHP DynamicalWeb::getRoute("v1_ivs_application_permissions", [], true); ?>">Application Permissions</a>
                                        </p>
                                    </div>

                                    <hr/>
                                    <div>
                                        <h4>Application not found response</h4>
                                        This response is given when the given Application ID is invalid or the server can't
                                        locate information about this Application with the given ID.
                                        <br/><br/>
                                        For more information about all the possible error codes and their meanings
                                        view the errors section in <a href="<?PHP DynamicalWeb::getRoute("v1_ivs_coa_introduction") ?>">COA API Basics</a>
                                        <pre><code class="language-json"><?PHP HTML::print(file_get_contents(__DIR__ . DIRECTORY_SEPARATOR  . 'application_not_found_response.json'), true); ?></code></pre>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="row">
                        <button class="right-side-toggle waves-effect waves-light <?PHP theme_ButtonInfo(); ?> btn btn-circle btn-sm pull-right" onclick="location.href='<?PHP DynamicalWeb::getRoute('v1_ivs_coa_request_authentication', [] ,true); ?>';">
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
