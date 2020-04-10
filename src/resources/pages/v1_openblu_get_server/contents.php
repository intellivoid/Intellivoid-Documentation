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
                "Get Server",
                "This method allows you to get an existing server from OpenBlu. This includes the certificate, connection parameters, IP address and more."
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
                            <h3 class="text-themecolor m-b-0 m-t-0 pt-2">Get Server</h3>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="javascript:void(0)">OpenBlu</a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="javascript:void(0)">API</a>
                                </li>
                                <li class="breadcrumb-item active">Get Server</li>
                            </ol>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <h3 class="card-title">Get OpenBlu Server</h3>
                                    This method allows you to get an existing server from OpenBlu. This includes the
                                    certificate, connection parameters, IP address and more.
                                    <?PHP
                                        $get_server_parameters_path = __DIR__ . DIRECTORY_SEPARATOR . 'get_server_parameters.json';
                                        $get_server_parameters = json_decode(file_get_contents($get_server_parameters_path), true);
                                    ?>
                                    <hr/>
                                    <label for="api_endpoint" class="mt-2">Endpoint</label>
                                    <input class="form-control <?PHP theme_TextColor(); ?> mb-3" id="api_endpoint" value="<?PHP HTML::print($get_server_parameters['ENDPOINT']); ?>" readonly>
                                    <label>Parameters</label>
                                    <?PHP
                                        generate_parameters_table($get_server_parameters);
                                    ?>
                                    <hr/>
                                    <div id="success_response">
                                        <h4>Example Success Response</h4>
                                        Some of the data is replaced with <code><></code> to simplify the contents
                                        <pre><code class="language-json"><?PHP HTML::print(file_get_contents(__DIR__ . DIRECTORY_SEPARATOR  . 'example_response.json'), true); ?></code></pre>
                                    </div>
                                    <br/>
                                    <div class="server_object_structure">
                                        <h4>Server Object Structure</h4>
                                        <?PHP
                                        $server_object_structure_path = __DIR__ . DIRECTORY_SEPARATOR . 'server_object_structure.json';
                                        generate_object_structure(json_decode(file_get_contents($server_object_structure_path), true));
                                        ?>
                                    </div>
                                    <div class="openvpn_object_structure mt-3">
                                        <h4>OpenVPN Object Structure</h4>
                                        <?PHP
                                        $openvpn_object_structure_path = __DIR__ . DIRECTORY_SEPARATOR . 'openpvn_object_structure.json';
                                        generate_object_structure(json_decode(file_get_contents($openvpn_object_structure_path), true));
                                        ?>
                                    </div>
                                    <hr/>
                                    <div id="no_results_response">
                                        <h4>Server Not Found Response</h4>
                                        This response is given when the given ID does not point to any existing server that is registered in OpenBlu
                                        <pre><code class="language-json"><?PHP HTML::print(file_get_contents(__DIR__ . DIRECTORY_SEPARATOR  . 'server_not_found_response.json'), true); ?></code></pre>
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
