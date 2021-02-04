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
                "Named Entity Recognition",
                "This method can be used to extract named entities from the given text such as country, name, nationality, date, time, number, email, username, URL, etc. This can be used to quickly identify and extract important information from a given text"
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
                            <h3 class="text-themecolor m-b-0 m-t-0 pt-2">Named Entity Recognition</h3>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="javascript:void(0)">CoffeeHouse</a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="javascript:void(0)">NLP</a>
                                </li>
                                <li class="breadcrumb-item active">Named Entity Recognition</li>
                            </ol>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <h3 class="card-title">Named Entity Recognition</h3>
                                    <div class="row mt-4">
                                        <div class="col-lg-6">
                                            This method can be used to extract named entities from the given text such as
                                            country, name, nationality, date, time, number, email, username, URL, etc. This can
                                            be used to quickly identify and extract important information from a given text
                                            <br/><br/>
                                            The input of your data is limited by your subscription and a larger input can take
                                            longer to process
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="d-flex justify-content-center">
                                                <img class="img-fluid card-icon" style="width: 662px; height: 182px;/** AUTO-GENERATED **/" alt="Sentiment Example" src="/assets/images/example_ner.png">
                                            </div>
                                        </div>
                                    </div>
                                    <br/>
                                    <hr/>
                                    <div id="parameters">
                                        <?PHP
                                            $ner_parameters_path = __DIR__ . DIRECTORY_SEPARATOR . "ner_parameters.json";
                                            $ner_parameters = json_decode(file_get_contents($ner_parameters_path), true);
                                        ?>
                                        <label for="api_endpoint" class="mt-2">Endpoint</label>
                                        <input class="form-control <?PHP theme_TextColor(); ?> mb-3" id="api_endpoint" value="<?PHP HTML::print($ner_parameters['ENDPOINT']); ?>" readonly>
                                        <label>Parameters</label>
                                        <?PHP
                                            generate_parameters_table($ner_parameters);
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
                                    <div id="ner_tag_object_structure">
                                        <h4>NerTag Object Structure</h4>
                                        <?PHP
                                        generate_object_structure(f_decode( __DIR__ . DIRECTORY_SEPARATOR . "ner_tag_object_structure.json"));
                                        ?>
                                    </div>
                                    <br/>
                                    <div id="ner_sentence_object_structure">
                                        <h4>NerTagSentence Object Structure</h4>
                                        <?PHP
                                        generate_object_structure(f_decode( __DIR__ . DIRECTORY_SEPARATOR . "ner_sentence_object_structure.json"));
                                        ?>
                                    </div>
                                    <br/>
                                    <div id="alt_value_object_structure">
                                        <h4>AltValue Object Structure</h4>
                                        <?PHP
                                        generate_object_structure(f_decode( __DIR__ . DIRECTORY_SEPARATOR . "alt_value_object_structure.json"));
                                        ?>
                                    </div>
                                    <br/>
                                    <div id="alt_value_date_object_structure">
                                        <h4>Date Object Structure</h4>
                                        <?PHP
                                        generate_object_structure(f_decode( __DIR__ . DIRECTORY_SEPARATOR . "alt_value_date_object_structure.json"));
                                        ?>
                                    </div>
                                    <br/>
                                    <div id="alt_value_time_object_structure">
                                        <h4>Time Object Structure</h4>
                                        <?PHP
                                        generate_object_structure(f_decode( __DIR__ . DIRECTORY_SEPARATOR . "alt_value_time_object_structure.json"));
                                        ?>
                                    </div>
                                    <br/>
                                    <div id="alt_value_duration_object_structure">
                                        <h4>Duration Object Structure</h4>
                                        <?PHP
                                        generate_object_structure(f_decode( __DIR__ . DIRECTORY_SEPARATOR . "alt_value_duration_object_structure.json"));
                                        ?>
                                    </div>
                                    <br/>
                                    <div id="alt_value_date_time_object_structure">
                                        <h4>DateTime Object Structure</h4>
                                        <?PHP
                                        generate_object_structure(f_decode( __DIR__ . DIRECTORY_SEPARATOR . "alt_value_date_time_object_structure.json"));
                                        ?>
                                    </div>
                                    <hr/>
                                    <h4>Named Entity Tags</h4>
                                    These are the tags that CoffeeHouse is able to detect, if you are using a free
                                    subscription then not all of these tags will be returned.
                                    <div class="table-responsive pt-3">
                                        <table class="table table-hover table-bordered">
                                            <thead>
                                                <tr>
                                                    <td>Tag Value</td>
                                                    <td>Available for Free Subscriptions</td>
                                                    <td>Description</td>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>PERSON</td>
                                                    <td>
                                                        <code>False</code>
                                                    </td>
                                                    <td>The name of a individual, eg; John Doe</td>
                                                </tr>
                                                <tr>
                                                    <td>LOCATION</td>
                                                    <td>
                                                        <code>False</code>
                                                    </td>
                                                    <td>The location specified</td>
                                                </tr>
                                                <tr>
                                                    <td>ORGANIZATION</td>
                                                    <td>
                                                        <code>False</code>
                                                    </td>
                                                    <td>An Organization name</td>
                                                </tr>
                                                <tr>
                                                    <td>MISC</td>
                                                    <td>
                                                        <code>False</code>
                                                    </td>
                                                    <td>Miscellaneous entity that cannot be categorized</td>
                                                </tr>
                                                <tr>
                                                    <td>MONEY</td>
                                                    <td>
                                                        <code>False</code>
                                                    </td>
                                                    <td>Value representation involving money</td>
                                                </tr>
                                                <tr>
                                                    <td>NUMBER</td>
                                                    <td>
                                                        <code>False</code>
                                                    </td>
                                                    <td>Number value, eg; 1, three, four hundred, etc.</td>
                                                </tr>
                                                <tr>
                                                    <td>PERCENT</td>
                                                    <td>
                                                        <code>False</code>
                                                    </td>
                                                    <td>Percentage value</td>
                                                </tr>
                                                <tr>
                                                    <td>DATE</td>
                                                    <td>
                                                        <code>False</code>
                                                    </td>
                                                    <td>Date value, eg; September 4th 1996</td>
                                                </tr>
                                                <tr>
                                                    <td>TIME</td>
                                                    <td>
                                                        <code>False</code>
                                                    </td>
                                                    <td>Time value, eg; 4:20 PM</td>
                                                </tr>
                                                <tr>
                                                    <td>CURRENT_TIME</td>
                                                    <td>
                                                        <code>False</code>
                                                    </td>
                                                    <td>Text indicating the current time</td>
                                                </tr>
                                                <tr>
                                                    <td>DURATION</td>
                                                    <td>
                                                        <code>False</code>
                                                    </td>
                                                    <td>The duration of a time or date unit, eg; Several days, 7 days, 20 hours, 1 decade, etc.</td>
                                                </tr>
                                                <tr>
                                                    <td>EMAIL</td>
                                                    <td>
                                                        <code>True</code>
                                                    </td>
                                                    <td>An Email Address such as john@example.com</td>
                                                </tr>
                                                <tr>
                                                    <td>URL</td>
                                                    <td>
                                                        <code>True</code>
                                                    </td>
                                                    <td>URL Address</td>
                                                </tr>
                                                <tr>
                                                    <td>CITY</td>
                                                    <td>
                                                        <code>True</code>
                                                    </td>
                                                    <td>City Name</td>
                                                </tr>
                                                <tr>
                                                    <td>STATE_OR_PROVINCE</td>
                                                    <td>
                                                        <code>True</code>
                                                    </td>
                                                    <td>State of Province value</td>
                                                </tr>
                                                <tr>
                                                    <td>COUNTRY</td>
                                                    <td>
                                                        <code>True</code>
                                                    </td>
                                                    <td>Country Value</td>
                                                </tr>
                                                <tr>
                                                    <td>NATIONALITY</td>
                                                    <td>
                                                        <code>True</code>
                                                    </td>
                                                    <td>Nationality Value</td>
                                                </tr>
                                                <tr>
                                                    <td>RELIGION</td>
                                                    <td>
                                                        <code>True</code>
                                                    </td>
                                                    <td>Religion Value</td>
                                                </tr>
                                                <tr>
                                                    <td>USERNAME_HANDLE</td>
                                                    <td>
                                                        <code>True</code>
                                                    </td>
                                                    <td>The username handle, eg; @Intellivoid</td>
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
                            
                        </div>
                    </div>
                </div>
                <?PHP HTML::importSection('page_footer'); ?>
            </div>
        </div>
        <?PHP HTML::importSection('javascript'); ?>
    </body>

</html>
