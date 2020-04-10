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
                "List Servers",
                "This method allows you to retrieve OpenVPN servers that are available on OpenBlu, this method allows you to filter and order the results in different ways."
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
                            <h3 class="text-themecolor m-b-0 m-t-0 pt-2">List Servers</h3>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="javascript:void(0)">OpenBlu</a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="javascript:void(0)">API</a>
                                </li>
                                <li class="breadcrumb-item active">List Servers</li>
                            </ol>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <h3 class="card-title">List OpenBlu Servers</h3>
                                    This method allows you to retrieve OpenVPN servers that are available on OpenBlu,
                                    this method allows you to filter and order the results in different ways. These
                                    results do not return the actual details about each server, you need to use the Get
                                    Server method to accomplish that.
                                    <?PHP
                                        $list_servers_parameters_path = __DIR__ . DIRECTORY_SEPARATOR . 'list_servers_parameters.json';
                                        $list_servers_parameters = json_decode(file_get_contents($list_servers_parameters_path), true);
                                    ?>
                                    <hr/>
                                    <label for="api_endpoint" class="mt-2">Endpoint</label>
                                    <input class="form-control <?PHP theme_TextColor(); ?> mb-3" id="api_endpoint" value="<?PHP HTML::print($list_servers_parameters['ENDPOINT']); ?>" readonly>
                                    <label>Parameters</label>
                                    <?PHP
                                        generate_parameters_table($list_servers_parameters);
                                    ?>
                                    <hr/>
                                    <div id="success_response">
                                        <h4>Example Success Response</h4>
                                        This response gives an array of servers that was found in OpenBlu
                                        <pre><code class="language-json"><?PHP HTML::print(file_get_contents(__DIR__ . DIRECTORY_SEPARATOR  . 'list_servers_success.json'), true); ?></code></pre>
                                    </div>
                                    <br/>
                                    <div class="server_listing_structure">
                                        <h4>Server Listing Structure</h4>
                                        <?PHP
                                        $api_methods_path = __DIR__ . DIRECTORY_SEPARATOR . 'server_listing_structure.json';
                                        generate_object_structure(json_decode(file_get_contents($api_methods_path), true));
                                        ?>
                                    </div>
                                    <hr/>
                                    <div id="no_results_response">
                                        <h4>No Results</h4>
                                        No errors will be shown if no results are returned
                                        <pre><code class="language-json"><?PHP HTML::print(file_get_contents(__DIR__ . DIRECTORY_SEPARATOR  . 'no_results_response.json'), true); ?></code></pre>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <button class="right-side-toggle waves-effect waves-light <?PHP theme_ButtonInfo(); ?> btn btn-circle btn-sm pull-right" onclick="location.href='<?PHP DynamicalWeb::getRoute("v1_openblu_get_server", [], true); ?>';">
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
