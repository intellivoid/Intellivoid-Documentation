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
                "CoffeeHouse - Update Generalization",
                "Add data to an existing generalization table"
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
                            <h3 class="text-themecolor m-b-0 m-t-0 pt-2">Update Generalization</h3>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="javascript:void(0)">CoffeeHouse</a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="javascript:void(0)">Generalization</a>
                                </li>
                                <li class="breadcrumb-item active">Update Generalization</li>
                            </ol>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <h3 class="card-title">Updating an existing Generalization Table</h3>
                                    Once you created a generalization table, you should have the ID for the created
                                    generalization table, you can just provide the generalization ID and the rest
                                    should be taken care of. This example is using <a href="<?PHP DynamicalWeb::getRoute("v1_coffeehouse/nsfw_classification/basics", [], true); ?>">NSFW Classification</a>
                                    as a way to demonstrate how generalization works, but any method that supports
                                    generalization should work the same way with the exception that the labels are
                                    different.
                                    <hr/>
                                    <div id="parameters">
                                        <?PHP
                                        $update_generalization_parameters_path = __DIR__ . DIRECTORY_SEPARATOR . "update_generalization_parameters.json";
                                        $update_generalization_parameters = json_decode(file_get_contents($update_generalization_parameters_path), true);
                                        ?>
                                        <label>Parameters</label>
                                        <?PHP
                                        generate_parameters_table($update_generalization_parameters);
                                        ?>
                                    </div>

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
