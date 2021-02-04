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
                            <h3 class="text-themecolor m-b-0 m-t-0 pt-2">Language Detection</h3>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="javascript:void(0)">CoffeeHouse</a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="javascript:void(0)">NLP</a>
                                </li>
                                <li class="breadcrumb-item active">Language Detection</li>
                            </ol>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <h3 class="card-title">Language Detection</h3>
                                    CoffeeHouse uses multiple methods of language detection to accurately predict the
                                    language of the given input, while this method is considered accurate it suffers
                                    from false predictions when it comes to very short input (1-2 words), if you are working
                                    with one or more sets of input from the same source we recommend that you use
                                    generalization
                                    <br/><br/>
                                    The input of your data is limited by your subscription and a larger input can take
                                    longer to process
                                    <br/>
                                    <hr/>
                                    <div id="parameters">
                                        <?PHP
                                            $language_detection_parameters_path = __DIR__ . DIRECTORY_SEPARATOR . "language_parameters.json";
                                            $language_detection_parameters = json_decode(file_get_contents($language_detection_parameters_path), true);
                                        ?>
                                        <label for="api_endpoint" class="mt-2">Endpoint</label>
                                        <input class="form-control <?PHP theme_TextColor(); ?> mb-3" id="api_endpoint" value="<?PHP HTML::print($language_detection_parameters['ENDPOINT']); ?>" readonly>
                                        <label>Parameters</label>
                                        <?PHP
                                            generate_parameters_table($language_detection_parameters);
                                        ?>
                                    </div>
                                    <hr/>
                                    <div id="response">
                                        <h4>Example Success Response (Without <code>sentence_split</code>)</h4>
                                        The results has been shortened for demonstration purposes
                                        <pre><code class="language-json"><?PHP HTML::print(file_get_contents(__DIR__ . DIRECTORY_SEPARATOR . "response_success.json"), true); ?></code></pre>
                                    </div>
                                    <br/>
                                    <div id="response_ssplit">
                                        <h4>Example Success Response (With <code>sentence_split</code>)</h4>
                                        The results has been shortened for demonstration purposes
                                        <pre><code class="language-json"><?PHP HTML::print(file_get_contents(__DIR__ . DIRECTORY_SEPARATOR . "response_ssplit_success.json"), true); ?></code></pre>
                                    </div>
                                    <br/>
                                    <div id="response_generalized">
                                        <h4>Example Success Response (With <code>generalization</code>)</h4>
                                        The results has been shortened for demonstration purposes
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
                                    <div id="language_object_structure">
                                        <h4>LanguageDetection Object Structure</h4>
                                        <?PHP
                                        generate_object_structure(f_decode( __DIR__ . DIRECTORY_SEPARATOR . "language_object_structure.json"));
                                        ?>
                                    </div>
                                    <br/>
                                    <div id="language_sentence_object_structure">
                                        <h4>LanguageDetectionSentence Object Structure</h4>
                                        <?PHP
                                        generate_object_structure(f_decode( __DIR__ . DIRECTORY_SEPARATOR . "language_sentence_object_structure.json"));
                                        ?>
                                    </div>
                                    <hr/>
                                    <h4>Supported Languages</h4>
                                    These are the supported languages that the Language Detection can detect.
                                    <div class="table-responsive pt-3">
                                        <table class="table table-hover table-bordered">
                                            <thead>
                                                <tr>
                                                    <td>Label</td>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>en</td>
                                                </tr>
                                                <tr>
                                                    <td>my</td>
                                                </tr>
                                                <tr>
                                                    <td>th</td>
                                                </tr>
                                                <tr>
                                                    <td>sn</td>
                                                </tr>
                                                <tr>
                                                    <td>lo</td>
                                                </tr>
                                                <tr>
                                                    <td>km</td>
                                                </tr>
                                                <tr>
                                                    <td>te</td>
                                                </tr>
                                                <tr>
                                                    <td>si</td>
                                                </tr>
                                                <tr>
                                                    <td>or</td>
                                                </tr>
                                                <tr>
                                                    <td>la</td>
                                                </tr>
                                                <tr>
                                                    <td>gu</td>
                                                </tr>
                                                <tr>
                                                    <td>lv</td>
                                                </tr>
                                                <tr>
                                                    <td>yi</td>
                                                </tr>
                                                <tr>
                                                    <td>sk</td>
                                                </tr>
                                                <tr>
                                                    <td>mn</td>
                                                </tr>
                                                <tr>
                                                    <td>av</td>
                                                </tr>
                                                <tr>
                                                    <td>zu</td>
                                                </tr>
                                                <tr>
                                                    <td>ceb</td>
                                                </tr>
                                                <tr>
                                                    <td>xh</td>
                                                </tr>
                                                <tr>
                                                    <td>ja</td>
                                                </tr>
                                                <tr>
                                                    <td>cs</td>
                                                </tr>
                                                <tr>
                                                    <td>as</td>
                                                </tr>
                                                <tr>
                                                    <td>ka</td>
                                                </tr>
                                                <tr>
                                                    <td>ps</td>
                                                </tr>
                                                <tr>
                                                    <td>ml</td>
                                                </tr>
                                                <tr>
                                                    <td>ms</td>
                                                </tr>
                                                <tr>
                                                    <td>ne</td>
                                                </tr>
                                                <tr>
                                                    <td>mi</td>
                                                </tr>
                                                <tr>
                                                    <td>yo</td>
                                                </tr>
                                                <tr>
                                                    <td>nl</td>
                                                </tr>
                                                <tr>
                                                    <td>da</td>
                                                </tr>
                                                <tr>
                                                    <td>bn</td>
                                                </tr>
                                                <tr>
                                                    <td>ko</td>
                                                </tr>
                                                <tr>
                                                    <td>rw</td>
                                                </tr>
                                                <tr>
                                                    <td>id</td>
                                                </tr>
                                                <tr>
                                                    <td>de</td>
                                                </tr>
                                                <tr>
                                                    <td>ur</td>
                                                </tr>
                                                <tr>
                                                    <td>is</td>
                                                </tr>
                                                <tr>
                                                    <td>fa</td>
                                                </tr>
                                                <tr>
                                                    <td>vi</td>
                                                </tr>
                                                <tr>
                                                    <td>ig</td>
                                                </tr>
                                                <tr>
                                                    <td>gd</td>
                                                </tr>
                                                <tr>
                                                    <td>zh-cn</td>
                                                </tr>
                                                <tr>
                                                    <td>tl</td>
                                                </tr>
                                                <tr>
                                                    <td>zh-tw</td>
                                                </tr>
                                                <tr>
                                                    <td>su</td>
                                                </tr>
                                                <tr>
                                                    <td>af</td>
                                                </tr>
                                                <tr>
                                                    <td>ga</td>
                                                </tr>
                                                <tr>
                                                    <td>haw</td>
                                                </tr>
                                                <tr>
                                                    <td>tr</td>
                                                </tr>
                                                <tr>
                                                    <td>hi</td>
                                                </tr>
                                                <tr>
                                                    <td>tg</td>
                                                </tr>
                                                <tr>
                                                    <td>hmn</td>
                                                </tr>
                                                <tr>
                                                    <td>am</td>
                                                </tr>
                                                <tr>
                                                    <td>el</td>
                                                </tr>
                                                <tr>
                                                    <td>ku</td>
                                                </tr>
                                                <tr>
                                                    <td>no</td>
                                                </tr>
                                                <tr>
                                                    <td>sv</td>
                                                </tr>
                                                <tr>
                                                    <td>pt</td>
                                                </tr>
                                                <tr>
                                                    <td>hu</td>
                                                </tr>
                                                <tr>
                                                    <td>pl</td>
                                                </tr>
                                                <tr>
                                                    <td>mg</td>
                                                </tr>
                                                <tr>
                                                    <td>lb</td>
                                                </tr>
                                                <tr>
                                                    <td>so</td>
                                                </tr>
                                                <tr>
                                                    <td>fy</td>
                                                </tr>
                                                <tr>
                                                    <td>ru</td>
                                                </tr>
                                                <tr>
                                                    <td>kk</td>
                                                </tr>
                                                <tr>
                                                    <td>et</td>
                                                </tr>
                                                <tr>
                                                    <td>ny</td>
                                                </tr>
                                                <tr>
                                                    <td>hy</td>
                                                </tr>
                                                <tr>
                                                    <td>nb</td>
                                                </tr>
                                                <tr>
                                                    <td>uk</td>
                                                </tr>
                                                <tr>
                                                    <td>be</td>
                                                </tr>
                                                <tr>
                                                    <td>bg</td>
                                                </tr>
                                                <tr>
                                                    <td>om</td>
                                                </tr>
                                                <tr>
                                                    <td>ro</td>
                                                </tr>
                                                <tr>
                                                    <td>sw</td>
                                                </tr>
                                                <tr>
                                                    <td>st</td>
                                                </tr>
                                                <tr>
                                                    <td>sl</td>
                                                </tr>
                                                <tr>
                                                    <td>gl</td>
                                                </tr>
                                                <tr>
                                                    <td>ca</td>
                                                </tr>
                                                <tr>
                                                    <td>sa</td>
                                                </tr>
                                                <tr>
                                                    <td>ar</td>
                                                </tr>
                                                <tr>
                                                    <td>cy</td>
                                                </tr>
                                                <tr>
                                                    <td>mr</td>
                                                </tr>
                                                <tr>
                                                    <td>pa</td>
                                                </tr>
                                                <tr>
                                                    <td>ta</td>
                                                </tr>
                                                <tr>
                                                    <td>tn</td>
                                                </tr>
                                                <tr>
                                                    <td>bs</td>
                                                </tr>
                                                <tr>
                                                    <td>kn</td>
                                                </tr>
                                                <tr>
                                                    <td>mt</td>
                                                </tr>
                                                <tr>
                                                    <td>ky</td>
                                                </tr>
                                                <tr>
                                                    <td>az</td>
                                                </tr>
                                                <tr>
                                                    <td>he</td>
                                                </tr>
                                                <tr>
                                                    <td>fi</td>
                                                </tr>
                                                <tr>
                                                    <td>mk</td>
                                                </tr>
                                                <tr>
                                                    <td>ug</td>
                                                </tr>
                                                <tr>
                                                    <td>sd</td>
                                                </tr>
                                                <tr>
                                                    <td>ba</td>
                                                </tr>
                                                <tr>
                                                    <td>fo</td>
                                                </tr>
                                                <tr>
                                                    <td>uz</td>
                                                </tr>
                                                <tr>
                                                    <td>lt</td>
                                                </tr>
                                                <tr>
                                                    <td>kv</td>
                                                </tr>
                                                <tr>
                                                    <td>sm</td>
                                                </tr>
                                                <tr>
                                                    <td>hr</td>
                                                </tr>
                                                <tr>
                                                    <td>es</td>
                                                </tr>
                                                <tr>
                                                    <td>ht</td>
                                                </tr>
                                                <tr>
                                                    <td>cv</td>
                                                </tr>
                                                <tr>
                                                    <td>sq</td>
                                                </tr>
                                                <tr>
                                                    <td>ha</td>
                                                </tr>
                                                <tr>
                                                    <td>ia</td>
                                                </tr>
                                                <tr>
                                                    <td>tk</td>
                                                </tr>
                                                <tr>
                                                    <td>eu</td>
                                                </tr>
                                                <tr>
                                                    <td>nn</td>
                                                </tr>
                                                <tr>
                                                    <td>it</td>
                                                </tr>
                                                <tr>
                                                    <td>jv</td>
                                                </tr>
                                                <tr>
                                                    <td>co</td>
                                                </tr>
                                                <tr>
                                                    <td>fr</td>
                                                </tr>
                                                <tr>
                                                    <td>sr</td>
                                                </tr>
                                                <tr>
                                                    <td>ce</td>
                                                </tr>
                                                <tr>
                                                    <td>to</td>
                                                </tr>
                                                <tr>
                                                    <td>br</td>
                                                </tr>
                                                <tr>
                                                    <td>rm</td>
                                                </tr>
                                                <tr>
                                                    <td>gv</td>
                                                </tr>
                                                <tr>
                                                    <td>li</td>
                                                </tr>
                                                <tr>
                                                    <td>eo</td>
                                                </tr>
                                                <tr>
                                                    <td>kw</td>
                                                </tr>
                                                <tr>
                                                    <td>se</td>
                                                </tr>
                                                <tr>
                                                    <td>dv</td>
                                                </tr>
                                                <tr>
                                                    <td>ln</td>
                                                </tr>
                                                <tr>
                                                    <td>lg</td>
                                                </tr>
                                                <tr>
                                                    <td>kl</td>
                                                </tr>
                                                <tr>
                                                    <td>an</td>
                                                </tr>
                                                <tr>
                                                    <td>ay</td>
                                                </tr>
                                                <tr>
                                                    <td>tt</td>
                                                </tr>
                                                <tr>
                                                    <td>vo</td>
                                                </tr>
                                                <tr>
                                                    <td>gn</td>
                                                </tr>
                                                <tr>
                                                    <td>ie</td>
                                                </tr>
                                                <tr>
                                                    <td>bo</td>
                                                </tr>
                                                <tr>
                                                    <td>os</td>
                                                </tr>
                                                <tr>
                                                    <td>nv</td>
                                                </tr>
                                                <tr>
                                                    <td>io</td>
                                                </tr>
                                                <tr>
                                                    <td>wa</td>
                                                </tr>
                                                <tr>
                                                    <td>rn</td>
                                                </tr>
                                                <tr>
                                                    <td>wo</td>
                                                </tr>
                                                <tr>
                                                    <td>qu</td>
                                                </tr>
                                                <tr>
                                                    <td>oc</td>
                                                </tr>
                                                <tr>
                                                    <td>sc</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <hr/>
                                    <h4>Generalization Labels</h4>
                                    This method supports generalization and will use the supported languages as labels
                                    for generalization, for more information on how generalization works see <a href="<?PHP DynamicalWeb::getRoute("v1_coffeehouse/generalization/introduction", [], true); ?>">Generalization - Introduction</a>
                                </div>
                            </div>

                            <div class="row">
                                <button class="right-side-toggle waves-effect waves-light <?PHP theme_ButtonInfo(); ?> btn btn-circle btn-sm pull-right" onclick="location.href='<?PHP DynamicalWeb::getRoute("v1_coffeehouse/nlp/ner_tagging", [], true); ?>';">
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
