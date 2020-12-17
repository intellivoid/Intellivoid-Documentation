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
                "Accounts API - Get Personal Information",
                "This method will return personal information about the user if they are available"
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
                            <h3 class="text-themecolor m-b-0 m-t-0 pt-2">Get Personal Information</h3>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="javascript:void(0)">Intellivoid</a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="javascript:void(0)">Accounts</a>
                                </li>
                                <li class="breadcrumb-item active">Get Personal Information</li>
                            </ol>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <h3 class="card-title">Get Personal Information</h3>
                                    This method will return the users personal information such as their name and
                                    birthday, this method requires the <code>READ_PERSONAL_INFORMATION</code> permission.
                                    <hr/>
                                    <label for="api_endpoint" class="mt-2">Endpoint</label>
                                    <input class="form-control <?PHP theme_TextColor(); ?> mb-3" id="api_endpoint" value="<?PHP HTML::print(f_decode(__DIR__ . DIRECTORY_SEPARATOR . 'get_personal_information_parameters.json')['ENDPOINT']); ?>" readonly>
                                    <label>Parameters</label>
                                    <?PHP generate_parameters_table(f_decode(__DIR__ . DIRECTORY_SEPARATOR . 'get_personal_information_parameters.json')); ?>

                                    <hr/>
                                    <div id="success_response">
                                        <h4>Example Success Response</h4>
                                        <pre><code class="language-json"><?PHP HTML::print(file_get_contents(__DIR__ . DIRECTORY_SEPARATOR  . 'example_response.json'), true); ?></code></pre>
                                    </div>
                                    <hr/>
                                    The user isn't required to enter personal information to their Intellivoid Account,
                                    so in cases that the information is unavailable it will simply be returned as <code>null</code>
                                    <div class="mt-3">
                                        <h4>Personal Information Structure</h4>
                                        <?PHP generate_object_structure(f_decode(__DIR__ . DIRECTORY_SEPARATOR . 'personal_information_structure.json')); ?>
                                    </div>

                                    <div class="mt-3">
                                        <h4>Birthday Object Structure</h4>
                                        <?PHP generate_object_structure(f_decode(__DIR__ . DIRECTORY_SEPARATOR . 'birthday_structure.json')); ?>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="row">
                        <button class="right-side-toggle waves-effect waves-light <?PHP theme_ButtonInfo(); ?> btn btn-circle btn-sm pull-right" onclick="location.href='<?PHP DynamicalWeb::getRoute('v1_coffeehouse_lydia_create_session', [] ,true); ?>';">
                            <i class="fa fa-arrow-right text-white"></i>
                        </button>
                    </div>

                </div>
                <?PHP HTML::importSection('page_footer'); ?>
            </div>
        </div>
        <?PHP HTML::importSection('javascript'); ?>
    </body>

</html>
