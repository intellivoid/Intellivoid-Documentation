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
                "CoffeeHouse - Create Generalization",
                "Create a new Generalization Table"
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
                            <h3 class="text-themecolor m-b-0 m-t-0 pt-2">Create Generalization</h3>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="javascript:void(0)">CoffeeHouse</a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="javascript:void(0)">Generalization</a>
                                </li>
                                <li class="breadcrumb-item active">Create Generalization</li>
                            </ol>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <h3 class="card-title">How to create a generalization</h3>
                                    There are no direct API methods to send a request to in order to create a generalization
                                    table, this feature is only available if the method supports it. For this example
                                    we will be use <a href="<?PHP DynamicalWeb::getRoute("v1_coffeehouse/nsfw_classification/basics", [], true); ?>">NSFW Classification</a> as it supports generalization
                                    and it's easy to understand. This procedure is the same for any other method that
                                    supports generalization with the exception that the labels are different which are
                                    specified in the documentation for the method.

                                    <hr/>
                                    <div id="parameters">
                                        <?PHP
                                        $create_generalization_parameters_path = __DIR__ . DIRECTORY_SEPARATOR . "create_generalization_parameters.json";
                                        $create_generalization_parameters = json_decode(file_get_contents($create_generalization_parameters_path), true);
                                        ?>
                                        <label>Parameters</label>
                                        <?PHP
                                        generate_parameters_table($create_generalization_parameters);
                                        ?>
                                    </div>

                                    When you want to generalize the results for a method that supports generalization,
                                    you would generally pass on those two parameters to generalize the results
                                    and you will retrieve a Generalization ID which will allow you to continue the generalization
                                    in the next request by providing the Generalization ID as a <code>generalization_id</code>
                                    parameter instead, below is a few examples of what the request should look like in cURL
                                    <br/><br/>
                                    <div id="request">
                                        <h4>Example cURL request</h4>
                                        <pre><code class="language-curl"><?PHP HTML::print(file_get_contents(__DIR__ . DIRECTORY_SEPARATOR . "curl_example.sh"), true); ?></code></pre>
                                    </div>
                                    <br/>
                                    <div id="response">
                                        <h4>Example Response</h4>
                                        <pre><code class="language-json"><?PHP HTML::print(file_get_contents(__DIR__ . DIRECTORY_SEPARATOR . "example_response.json"), true); ?></code></pre>
                                    </div>
                                    <hr/>
                                    <div id="generalization_object_structure">
                                        <h4>Generalization Object Structure</h4>
                                        <?PHP
                                        $generalization_object_structure_path = __DIR__ . DIRECTORY_SEPARATOR . "generalization_object_structure.json";
                                        generate_object_structure(json_decode(file_get_contents($generalization_object_structure_path), true));
                                        ?>
                                    </div>
                                    <br/>
                                    <div id="probability_object_structure">
                                        <h4>Probability Object Structure</h4>
                                        <?PHP
                                        $probability_object_structure_path = __DIR__ . DIRECTORY_SEPARATOR . "probability_object_structure.json";
                                        generate_object_structure(json_decode(file_get_contents($probability_object_structure_path), true));
                                        ?>
                                    </div>
                                    <hr/>
                                    <div id="error_16">
                                        <h4>Generalization Size Exceeded response</h4>
                                        This response is returned when the parameter <code>generalization_size</code> is
                                        greater than what the subscription allows.
                                        <pre><code class="language-json"><?PHP HTML::print(file_get_contents(__DIR__ . DIRECTORY_SEPARATOR . "error_16_response.json"), true); ?></code></pre>
                                    </div>
                                    <br/>
                                    <div id="error_15">
                                        <h4>Generalization Size Invalid response</h4>
                                        This response is returned when the parameter <code>generalization_size</code>
                                        contains an invalid value
                                        <pre><code class="language-json"><?PHP HTML::print(file_get_contents(__DIR__ . DIRECTORY_SEPARATOR . "error_15_response.json"), true); ?></code></pre>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <button class="right-side-toggle waves-effect waves-light <?PHP theme_ButtonInfo(); ?> btn btn-circle btn-sm pull-right" onclick="location.href='<?PHP DynamicalWeb::getRoute("v1_coffeehouse/generalization/update_generalization", [], true); ?>';">
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
