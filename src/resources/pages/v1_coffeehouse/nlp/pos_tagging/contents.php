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
                "Part-Of-Speech tagging",
                "at the beginning of each conversation with each user or group a session must be established, this session must not change throughout the conversation unless it has expired or is no longer available due to an AI Error."
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
                            <h3 class="text-themecolor m-b-0 m-t-0 pt-2">Part-Of-Speech Tagging</h3>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="javascript:void(0)">CoffeeHouse</a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="javascript:void(0)">NLP</a>
                                </li>
                                <li class="breadcrumb-item active">POS Tagging</li>
                            </ol>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <h3 class="card-title">Part-Of-Speech Tagging</h3>
                                    Part-Of-Speech tagging is the process of identifying the <a href="https://en.wikipedia.org/wiki/Parts_of_speech">part of speech</a>
                                    in the given input based on the definition and it's context; allowing the
                                    identification of words such as nouns, verbs, adjectives, adverbs, etc.
                                    <br/>
                                    <hr/>
                                    <div id="parameters">
                                        <?PHP
                                            $pos_parameters_path = __DIR__ . DIRECTORY_SEPARATOR . "pos_parameters.json";
                                            $pos_parameters = json_decode(file_get_contents($pos_parameters_path), true);
                                        ?>
                                        <label for="api_endpoint" class="mt-2">Endpoint</label>
                                        <input class="form-control <?PHP theme_TextColor(); ?> mb-3" id="api_endpoint" value="<?PHP HTML::print($pos_parameters['ENDPOINT']); ?>" readonly>
                                        <label>Parameters</label>
                                        <?PHP
                                            generate_parameters_table($pos_parameters);
                                        ?>
                                    </div>
                                    <hr/>
                                    <div id="response">
                                        <h4>Example Success Response (Without <code>sentence_split</code>)</h4>
                                        The results has been shortened for demonstration purposes.
                                        <pre><code class="language-json"><?PHP HTML::print(file_get_contents(__DIR__ . DIRECTORY_SEPARATOR . "response_success.json"), true); ?></code></pre>
                                    </div>
                                    <br/>
                                    <div id="response_ssplit">
                                        <h4>Example Success Response (With <code>sentence_split</code>)</h4>
                                        The results has been shortened for demonstration purposes.
                                        <pre><code class="language-json"><?PHP HTML::print(file_get_contents(__DIR__ . DIRECTORY_SEPARATOR . "response_ssplit_success.json"), true); ?></code></pre>
                                    </div>
                                    <br/>
                                    <div id="response_object_structure">
                                        <h4>Response Structure</h4>
                                        <?PHP
                                            generate_object_structure(f_decode( __DIR__ . DIRECTORY_SEPARATOR . "response_object_structure.json"));
                                        ?>
                                    </div>
                                    <br/>
                                    <div id="pos_tag_object_structure">
                                        <h4>PosTag Object Structure</h4>
                                        <?PHP
                                        generate_object_structure(f_decode( __DIR__ . DIRECTORY_SEPARATOR . "pos_tag_object_structure.json"));
                                        ?>
                                    </div>
                                    <br/>
                                    <div id="pos_sentence_tag_object_structure">
                                        <h4>PosTagSentence Object Structure</h4>
                                        <?PHP
                                        generate_object_structure(f_decode( __DIR__ . DIRECTORY_SEPARATOR . "pos_sentence_object_structure.json"));
                                        ?>
                                    </div>
                                    <hr/>
                                    <h4>Part-Of-Speech Tags</h4>
                                    <div class="table-responsive pt-3">
                                        <table class="table table-hover table-bordered">
                                            <thead>
                                                <tr>
                                                    <td>Tag Value</td>
                                                    <td>Description</td>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>CC</td>
                                                    <td>Coordinating conjunction</td>
                                                </tr>
                                                <tr>
                                                    <td>CD</td>
                                                    <td>Cardinal Number</td>
                                                </tr>
                                                <tr>
                                                    <td>DT</td>
                                                    <td>Determiner</td>
                                                </tr>
                                                <tr>
                                                    <td>EX</td>
                                                    <td>Existential there</td>
                                                </tr>
                                                <tr>
                                                    <td>FW</td>
                                                    <td>Foreign word</td>
                                                </tr>
                                                <tr>
                                                    <td>IN</td>
                                                    <td>Preposition of subordinating conjunction</td>
                                                </tr>
                                                <tr>
                                                    <td>JJ</td>
                                                    <td>Adjective</td>
                                                </tr>
                                                <tr>
                                                    <td>JJR</td>
                                                    <td>Adjective, comparative</td>
                                                </tr>
                                                <tr>
                                                    <td>JJS</td>
                                                    <td>Adjective, superlative</td>
                                                </tr>
                                                <tr>
                                                    <td>LS</td>
                                                    <td>List item marker</td>
                                                </tr>
                                                <tr>
                                                    <td>MD</td>
                                                    <td>Modal</td>
                                                </tr>
                                                <tr>
                                                    <td>NN</td>
                                                    <td>Noun, singular or mass</td>
                                                </tr>
                                                <tr>
                                                    <td>NNS</td>
                                                    <td>Noun, plural</td>
                                                </tr>
                                                <tr>
                                                    <td>NNP</td>
                                                    <td>Proper noun, singular</td>
                                                </tr>
                                                <tr>
                                                    <td>NNPS</td>
                                                    <td>Proper noun, plural</td>
                                                </tr>
                                                <tr>
                                                    <td>PDT</td>
                                                    <td>Predeterminer</td>
                                                </tr>
                                                <tr>
                                                    <td>POS</td>
                                                    <td>Possessive ending</td>
                                                </tr>
                                                <tr>
                                                    <td>PRP</td>
                                                    <td>Personal pronoun</td>
                                                </tr>
                                                <tr>
                                                    <td>PRP$</td>
                                                    <td>Possessive noun</td>
                                                </tr>
                                                <tr>
                                                    <td>RB</td>
                                                    <td>Adverb</td>
                                                </tr>
                                                <tr>
                                                    <td>RBR</td>
                                                    <td>Adverb, superlative</td>
                                                </tr>
                                                <tr>
                                                    <td>RBS</td>
                                                    <td>Adverb, superlative</td>
                                                </tr>
                                                <tr>
                                                    <td>RP</td>
                                                    <td>Particle</td>
                                                </tr>
                                                <tr>
                                                    <td>SYM</td>
                                                    <td>Symbol</td>
                                                </tr>
                                                <tr>
                                                    <td>TO</td>
                                                    <td>To</td>
                                                </tr>
                                                <tr>
                                                    <td>UH</td>
                                                    <td>Interjection</td>
                                                </tr>
                                                <tr>
                                                    <td>VB</td>
                                                    <td>Verb, base form.</td>
                                                </tr>
                                                <tr>
                                                    <td>VBD</td>
                                                    <td>Verb, past tense</td>
                                                </tr>
                                                <tr>
                                                    <td>VBG</td>
                                                    <td>Verb, gerund or present participle</td>
                                                </tr>
                                                <tr>
                                                    <td>VBG</td>
                                                    <td>Verb</td>
                                                </tr>
                                                <tr>
                                                    <td>VBN</td>
                                                    <td>Verb, past particple</td>
                                                </tr>
                                                <tr>
                                                    <td>VBP</td>
                                                    <td>Verb, non3rd personal singular present</td>
                                                </tr>
                                                <tr>
                                                    <td>VBZ</td>
                                                    <td>Verb, 3rd person singular present</td>
                                                </tr>
                                                <tr>
                                                    <td>WDT</td>
                                                    <td>Whdeterminer</td>
                                                </tr>
                                                <tr>
                                                    <td>WP</td>
                                                    <td>Whpronoun</td>
                                                </tr>
                                                <tr>
                                                    <td>WP$</td>
                                                    <td>Possessive whpronoun</td>
                                                </tr>
                                                <tr>
                                                    <td>WRB</td>
                                                    <td>Whadverb</td>
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
                                <button class="right-side-toggle waves-effect waves-light <?PHP theme_ButtonInfo(); ?> btn btn-circle btn-sm pull-right" onclick="location.href='<?PHP DynamicalWeb::getRoute("v1_coffeehouse/nlp/sentence_split", [], true); ?>';">
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
