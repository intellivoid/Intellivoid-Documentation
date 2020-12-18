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
                "Intellivoid Services API Error Codes",
                "Error codes are pre-defined errors that can be returned when something goes wrong"
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
                            <h3 class="text-themecolor m-b-0 m-t-0 pt-2">Error Codes</h3>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="javascript:void(0)">Intellivoid</a>
                                </li>
                                <li class="breadcrumb-item active">Error Codes</li>
                            </ol>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-12">

                            <div class="card">
                                <div class="card-body">
                                    <h3 class="card-title">Error Codes</h3>
                                    <div class="mb-3">
                                        And error arises whenever <code>success</code> is false and a <code>error</code>
                                        object is returned within the results which contains a <code>type</code> property
                                        followed by a <code>error_code</code> and <code>message</code> property.
                                        <pre><code class="language-json"><?PHP HTML::print(file_get_contents(__DIR__ . DIRECTORY_SEPARATOR  . 'example_error.json'), true); ?></code></pre>
                                        <br/><br/>
                                        Intellivoid Services API introduces sub-sections of it's API, there's a section
                                        for COA, Settings, Suite Apps, etc. each sub-section has it's own set of error
                                        codes. You can figure out where the error code is coming from by the <code>type</code>
                                        property. The above example contains "<i>COA</i>" for it's <code>type</code>,
                                        in <a href="<?PHP DynamicalWeb::getRoute("v1_ivs_coa_basics", [], true); ?>#error_codes">COA API Basics - Error Codes</a>
                                        you will find a table of all the possible error codes and their meanings.
                                    </div>
                                    <hr/>
                                    <div class="mb-4">
                                        Here are the following error types and their meanings
                                        <ul class="list-icons">
                                            <li>
                                                <i class="ti-angle-right"></i>
                                                <a href="#error_codes" class="<?PHP theme_TextColor(); ?>">SERVER</a>
                                            </li>
                                            <li>
                                                <i class="ti-angle-right"></i>
                                                <a href="<?PHP DynamicalWeb::getRoute("v1_ivs_coa_basics", [], true); ?>#error_codes" class="<?PHP theme_TextColor(); ?>">COA</a>
                                            </li>
                                            <li>
                                                <i class="ti-angle-right"></i>
                                                <a href="<?PHP DynamicalWeb::getRoute("v1_ivs_settings_basics", [], true); ?>#error_codes" class="<?PHP theme_TextColor(); ?>">SETTINGS</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <hr/>
                                    <div id="error_codes">
                                        <h4>Server Error codes</h4>
                                        These are generic error codes that can be returned when it's an error related
                                        with the server
                                        <?PHP generate_error_codes(f_decode(__DIR__ . DIRECTORY_SEPARATOR . 'server_error_codes.json')); ?>
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
