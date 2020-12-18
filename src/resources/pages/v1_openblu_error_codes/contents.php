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
                "OpenBlu Error Codes",
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
                            <h3 class="text-themecolor m-b-0 m-t-0 pt-2">OpenBlu Error Codes</h3>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="javascript:void(0)">OpenBlu</a>
                                </li>
                                <li class="breadcrumb-item active">Error Codes</li>
                            </ol>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-12">

                            <div class="card" id="error_codes">
                                <div class="card-body">
                                    <h3 class="card-title">OpenBlu Error Codes</h3>
                                    <div class="mb-3">
                                        And error arises whenever <code>success</code> is false and a <code>error</code>
                                        object is returned within the results which contains a <code>type</code> property
                                        followed by a <code>error_code</code> and <code>message</code> property.
                                        <pre><code class="language-json"><?PHP HTML::print(file_get_contents(__DIR__ . DIRECTORY_SEPARATOR  . 'example_error.json'), true); ?></code></pre>
                                    </div>
                                    <hr/>

                                    <h4>OpenBlu Error codes</h4>
                                    <?PHP generate_error_codes(f_decode(__DIR__ . DIRECTORY_SEPARATOR . 'client_error_codes.json')); ?>

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
