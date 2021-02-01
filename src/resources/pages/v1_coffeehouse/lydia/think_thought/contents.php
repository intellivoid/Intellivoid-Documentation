<?php
    use DynamicalWeb\HTML;
?>
<!DOCTYPE html>
<html lang="<?PHP HTML::print(APP_LANGUAGE_ISO_639); ?>">

    <head>
        <?PHP HTML::importSection('header'); ?>
        <?PHP
            renderMetaTags(
                "Think Thought",
                "This method invokes \"Think Thought\" using a session ID, this will return Lydia's response to a given input and session ID."
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
                            <h3 class="text-themecolor m-b-0 m-t-0 pt-2">Think Thought</h3>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="javascript:void(0)">CoffeeHouse</a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="javascript:void(0)">Lydia</a>
                                </li>
                                <li class="breadcrumb-item active">Think Thought</li>
                            </ol>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <h3 class="card-title">Think Thought</h3>
                                    This method invokes "Think Thought" using a session ID, this will return Lydia's
                                    response to a given input and session ID followed by the session object and
                                    session attributes object.
                                    <?PHP
                                        $think_thought_parameters_path = __DIR__ . DIRECTORY_SEPARATOR . "think_thought_parameters.json";
                                        $think_thought_parameters = json_decode(file_get_contents($think_thought_parameters_path), true);
                                    ?>
                                    <hr/>
                                    <label for="api_endpoint" class="mt-2">Endpoint</label>
                                    <input class="form-control <?PHP theme_TextColor(); ?> mb-3" id="api_endpoint" value="<?PHP HTML::print($think_thought_parameters['ENDPOINT']); ?>" readonly>
                                    <label>Parameters</label>
                                    <?PHP
                                    generate_parameters_table($think_thought_parameters);
                                    ?>
                                    <hr/>

                                    <div id="example_success_response">
                                        <h4>Example Success Response</h4>
                                        This response is given when the invoke action was a success
                                        <pre><code class="language-json"><?PHP HTML::print(file_get_contents(__DIR__ . DIRECTORY_SEPARATOR . "success_response.json"), true); ?></code></pre>
                                    </div>
                                    <br/>
                                    <div class="response_structure">
                                        <h4>Response Structure</h4>
                                        <?PHP
                                            $response_structure_path = __DIR__ . DIRECTORY_SEPARATOR . "response_structure.json";
                                            generate_object_structure(json_decode(file_get_contents($response_structure_path), true));
                                        ?>
                                    </div>
                                    <div id="session_object_structure">
                                        <h4>Session Object Structure</h4>
                                        <?PHP
                                        $api_methods_path = __DIR__ . DIRECTORY_SEPARATOR . "session_object_structure.json";
                                        generate_object_structure(json_decode(file_get_contents($api_methods_path), true));
                                        ?>
                                    </div>
                                    <div id="session_attributes_object_structure">
                                        <h4>SessionAttributes Object Structure</h4>
                                        <?PHP
                                        $api_methods_path = __DIR__ . DIRECTORY_SEPARATOR . "session_attributes_object_structure.json";
                                        generate_object_structure(json_decode(file_get_contents($api_methods_path), true));
                                        ?>
                                    </div>
                                    <hr/>
                                    <div id="service_unavailable_response">
                                        <h4>Service No Longer Unavailable Error</h4>
                                        This error is returned when the session fails due to an error or has expired
                                        <pre><code class="language-json"><?PHP HTML::print(file_get_contents(__DIR__ . DIRECTORY_SEPARATOR . "service_unavailable.json"), true); ?></code></pre>
                                    </div>
                                    <hr/>
                                    <div id="session_not_found_response">
                                        <h4>Session not found response</h4>
                                        This response is given when the given session id was not found
                                        <pre><code class="language-json"><?PHP HTML::print(file_get_contents(__DIR__ . DIRECTORY_SEPARATOR . "session_not_found.json"), true); ?></code></pre>
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
