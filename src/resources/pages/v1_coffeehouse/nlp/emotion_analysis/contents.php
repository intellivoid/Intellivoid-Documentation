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
                "Emotion Analysis",
                "Sentiment Analysis allows to predict the sentimental values of the given input, this is great for determining the sentiment of user feedback, comments and or posts."
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
                            <h3 class="text-themecolor m-b-0 m-t-0 pt-2">Emotion Analysis</h3>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="javascript:void(0)">CoffeeHouse</a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="javascript:void(0)">NLP</a>
                                </li>
                                <li class="breadcrumb-item active">Emotion Analysis</li>
                            </ol>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <h3 class="card-title">Emotion Analysis</h3>
                                    Emotion Analysis is much like sentimental analysis but more to do with emotions,
                                    this method allows you to predict the emotions of a given text.
                                    <br/><br/>
                                    The input of your data is limited by your subscription and a larger input can take
                                    longer to process
                                    <br/>
                                    <hr/>
                                    <div id="parameters">
                                        <?PHP
                                            $emotion_parameters_path = __DIR__ . DIRECTORY_SEPARATOR . "emotion_parameters.json";
                                            $emotion_parameters = json_decode(file_get_contents($emotion_parameters_path), true);
                                        ?>
                                        <label for="api_endpoint" class="mt-2">Endpoint</label>
                                        <input class="form-control <?PHP theme_TextColor(); ?> mb-3" id="api_endpoint" value="<?PHP HTML::print($emotion_parameters['ENDPOINT']); ?>" readonly>
                                        <label>Parameters</label>
                                        <?PHP
                                            generate_parameters_table($emotion_parameters);
                                        ?>
                                    </div>
                                    <hr/>
                                    <div id="response">
                                        <h4>Example Success Response (Without <code>sentence_split</code>)</h4>
                                        <pre><code class="language-json"><?PHP HTML::print(file_get_contents(__DIR__ . DIRECTORY_SEPARATOR . "response_success.json"), true); ?></code></pre>
                                    </div>
                                    <br/>
                                    <div id="response_ssplit">
                                        <h4>Example Success Response (With <code>sentence_split</code>)</h4>
                                        <pre><code class="language-json"><?PHP HTML::print(file_get_contents(__DIR__ . DIRECTORY_SEPARATOR . "response_ssplit_success.json"), true); ?></code></pre>
                                    </div>
                                    <br/>
                                    <div id="response_generalized">
                                        <h4>Example Success Response (With <code>generalization</code>)</h4>
                                        <pre><code class="language-json"><?PHP HTML::print(file_get_contents(__DIR__ . DIRECTORY_SEPARATOR . "response_generalized_success.json"), true); ?></code></pre>
                                    </div>
                                    <br/>
                                    <div id="response_object_structure">
                                        <h4>Response Structure</h4>
                                        <?PHP
                                            generate_object_structure(f_decode( __DIR__ . DIRECTORY_SEPARATOR . "response_object_structure.json"));
                                        ?>
                                    </div>
                                    <br/>
                                    <div id="emotion_object_structure">
                                        <h4>EmotionPrediction Object Structure</h4>
                                        <?PHP
                                        generate_object_structure(f_decode( __DIR__ . DIRECTORY_SEPARATOR . "emotion_object_structure.json"));
                                        ?>
                                    </div>
                                    <br/>
                                    <div id="emotion_sentence_object_structure">
                                        <h4>EmotionPredictionSentence Object Structure</h4>
                                        <?PHP
                                        generate_object_structure(f_decode( __DIR__ . DIRECTORY_SEPARATOR . "emotion_sentence_object_structure.json"));
                                        ?>
                                    </div>
                                    <hr/>
                                    <h4>Generalization Labels</h4>
                                    This method supports generalization and will use the following labels for generalization,
                                    for more information on how generalization works see <a href="<?PHP DynamicalWeb::getRoute("v1_coffeehouse/generalization/introduction", [], true); ?>">Generalization - Introduction</a>
                                    <div class="table-responsive pt-3">
                                        <table class="table table-hover table-bordered">
                                            <thead>
                                                <tr>
                                                    <td>Label</td>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>NEUTRAL</td>
                                                </tr>
                                                <tr>
                                                    <td>HAPPINESS</td>
                                                </tr>
                                                <tr>
                                                    <td>AFFECTION</td>
                                                </tr>
                                                <tr>
                                                    <td>SADNESS</td>
                                                </tr>
                                                <tr>
                                                    <td>ANGER</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <hr/>
                                    <div id="invalid_language_code_response">
                                        <h4>Invalid Language Code Response</h4>
                                        This response is given when the parameter <code>language</code> contains
                                        an invalid value.
                                        <pre><code class="language-json"><?PHP HTML::print(file_get_contents(__DIR__ . DIRECTORY_SEPARATOR . "invalid_language_code.json"), true); ?></code></pre>
                                    </div>
                                    <hr/>
                                    <div id="invalid_language_code_response">
                                        <h4>Invalid Language Code Response</h4>
                                        This response is given when the parameter <code>language</code> contains
                                        an invalid value.
                                        <pre><code class="language-json"><?PHP HTML::print(file_get_contents(__DIR__ . DIRECTORY_SEPARATOR . "invalid_language_code.json"), true); ?></code></pre>
                                    </div>
                                    <hr/>
                                    <div id="invalid_language_code_response">
                                        <h4>Unsupported Language Response</h4>
                                        This response is given when the requested language is unsupported by the method
                                        <pre><code class="language-json"><?PHP HTML::print(file_get_contents(__DIR__ . DIRECTORY_SEPARATOR . "unsupported_language_response.json"), true); ?></code></pre>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <button class="right-side-toggle waves-effect waves-light <?PHP theme_ButtonInfo(); ?> btn btn-circle btn-sm pull-right" onclick="location.href='<?PHP DynamicalWeb::getRoute("v1_coffeehouse/nlp/chatroom_spam_prediction", [], true); ?>';">
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
