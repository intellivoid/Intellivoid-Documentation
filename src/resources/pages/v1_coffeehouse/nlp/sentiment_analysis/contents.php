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
                "Sentiment Analysis",
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
                            <h3 class="text-themecolor m-b-0 m-t-0 pt-2">Sentiment Analysis</h3>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="javascript:void(0)">CoffeeHouse</a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="javascript:void(0)">NLP</a>
                                </li>
                                <li class="breadcrumb-item active">Sentiment Analysis</li>
                            </ol>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <h3 class="card-title">Sentiment Analysis</h3>

                                    <div class="row mt-4">
                                        <div class="col-lg-6">
                                            Sentiment Analysis allows to predict the sentimental values of the given input, this
                                            is great for determining the sentiment of user feedback, comments and or posts. This
                                            method will allow you perform sentiment analysis by sentences and generalize the
                                            results to get an overall prediction over a set of data to accurately predict the
                                            overall prediction.
                                            <br/><br/>
                                            The input of your data is limited by your subscription and a larger input can take
                                            longer to process
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="d-flex justify-content-center">
                                                <img class="img-fluid card-icon" style="width: 662px; height: 302px;/** AUTO-GENERATED **/" alt="Sentiment Example" src="/assets/images/example_sentiment.png">
                                            </div>
                                        </div>
                                    </div>

                                    <br/>
                                    <hr/>
                                    <div id="parameters">
                                        <?PHP
                                            $sentiment_parameters_path = __DIR__ . DIRECTORY_SEPARATOR . "sentiment_parameters.json";
                                            $sentiment_parameters = json_decode(file_get_contents($sentiment_parameters_path), true);
                                        ?>
                                        <label for="api_endpoint" class="mt-2">Endpoint</label>
                                        <input class="form-control <?PHP theme_TextColor(); ?> mb-3" id="api_endpoint" value="<?PHP HTML::print($sentiment_parameters['ENDPOINT']); ?>" readonly>
                                        <label>Parameters</label>
                                        <?PHP
                                            generate_parameters_table($sentiment_parameters);
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
                                    <div id="sentiment_object_structure">
                                        <h4>SentimentPrediction Object Structure</h4>
                                        <?PHP
                                        generate_object_structure(f_decode( __DIR__ . DIRECTORY_SEPARATOR . "sentiment_object_structure.json"));
                                        ?>
                                    </div>
                                    <br/>
                                    <div id="sentiment_sentence_object_structure">
                                        <h4>SentimentPredictionSentence Object Structure</h4>
                                        <?PHP
                                        generate_object_structure(f_decode( __DIR__ . DIRECTORY_SEPARATOR . "sentiment_sentence_object_structure.json"));
                                        ?>
                                    </div>
                                    <hr/>
                                    <h4>Generalization Labels</h4>
                                    This method supports generalization and will use the following labels for generalization,
                                    for more information on how generalization works see <a href="#">Generalization - Basics</a>
                                    <div class="table-responsive pt-3">
                                        <table class="table table-hover table-bordered">
                                            <thead>
                                                <tr>
                                                    <td>Label</td>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>VERY_NEGATIVE</td>
                                                </tr>
                                                <tr>
                                                    <td>NEGATIVE</td>
                                                </tr>
                                                <tr>
                                                    <td>NEUTRAL</td>
                                                </tr>
                                                <tr>
                                                    <td>POSITIVE</td>
                                                </tr>
                                                <tr>
                                                    <td>VERY_POSITIVE</td>
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
                                <button class="right-side-toggle waves-effect waves-light <?PHP theme_ButtonInfo(); ?> btn btn-circle btn-sm pull-right" onclick="location.href='<?PHP DynamicalWeb::getRoute("v1_coffeehouse/nlp/emotion_analysis", [], true); ?>';">
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
