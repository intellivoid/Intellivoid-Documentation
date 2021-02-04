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
                "Language Detection",
                "CoffeeHouse uses multiple methods of language detection to accurately predict the language of the given input"
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
                            <h3 class="text-themecolor m-b-0 m-t-0 pt-2">Sentence Split</h3>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="javascript:void(0)">CoffeeHouse</a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="javascript:void(0)">NLP</a>
                                </li>
                                <li class="breadcrumb-item active">Sentence Split</li>
                            </ol>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <h3 class="card-title">Sentence Split</h3>
                                    This method allows you to split text input into multiple sentences to make text
                                    processing more easier, this is done by using tokenization and stop-words.
                                    <br/><br/>
                                    The input of your data is limited by your subscription and a larger input can take
                                    longer to process
                                    <br/>
                                    <hr/>
                                    <div id="parameters">
                                        <?PHP
                                            $sentence_split_parameters_path = __DIR__ . DIRECTORY_SEPARATOR . "sentence_split_parameters.json";
                                            $sentence_split_parameters = json_decode(file_get_contents($sentence_split_parameters_path), true);
                                        ?>
                                        <label for="api_endpoint" class="mt-2">Endpoint</label>
                                        <input class="form-control <?PHP theme_TextColor(); ?> mb-3" id="api_endpoint" value="<?PHP HTML::print($sentence_split_parameters['ENDPOINT']); ?>" readonly>
                                        <label>Parameters</label>
                                        <?PHP
                                            generate_parameters_table($sentence_split_parameters);
                                        ?>
                                    </div>
                                    <hr/>
                                    <div id="response">
                                        <h4>Example Success Response</h4>
                                        <pre><code class="language-json"><?PHP HTML::print(file_get_contents(__DIR__ . DIRECTORY_SEPARATOR . "response_success.json"), true); ?></code></pre>
                                    </div>
                                    <br/>
                                    <br/>
                                    <div id="response_object_structure">
                                        <h4>Response Structure</h4>
                                        <?PHP
                                            generate_object_structure(f_decode( __DIR__ . DIRECTORY_SEPARATOR . "response_object_structure.json"));
                                        ?>
                                    </div>
                                    <br/>
                                    <div id="sentence_object_structure">
                                        <h4>Sentence Object Structure</h4>
                                        <?PHP
                                        generate_object_structure(f_decode( __DIR__ . DIRECTORY_SEPARATOR . "sentence_object_structure.json"));
                                        ?>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <button class="right-side-toggle waves-effect waves-light <?PHP theme_ButtonInfo(); ?> btn btn-circle btn-sm pull-right" onclick="location.href='<?PHP DynamicalWeb::getRoute("v1_coffeehouse/nlp/sentiment_analysis", [], true); ?>';">
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
