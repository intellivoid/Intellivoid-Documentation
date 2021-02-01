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
            "Application Settings - Data Types",
            "The data types that you can store with your Application"
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
                            <h3 class="text-themecolor m-b-0 m-t-0 pt-2">Data Types</h3>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="javascript:void(0)">Intellivoid</a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="javascript:void(0)">Application Settings</a>
                                </li>
                                <li class="breadcrumb-item active">Data Types</li>
                            </ol>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <h3 class="card-title">Data Types</h3>
                                    The types of data you can store in your Application Settings is straight-forward.
                                    You cannot store arrays/lists within an array or list.
                                    <br/><br/>


                                    <div class="table-responsive">
                                        <table class="table table-hover table-bordered">
                                            <thead>
                                                <tr>
                                                    <td>Type</td>
                                                    <td>Description</td>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>string</td>
                                                    <td>Text based variable</td>
                                                </tr>
                                                <tr>
                                                    <td>boolean</td>
                                                    <td>True or False variable, accepts "true", "false", "1" and  "0"</td>
                                                </tr>
                                                <tr>
                                                    <td>integer</td>
                                                    <td>Integer based variable, only stores variables</td>
                                                </tr>
                                                <tr>
                                                    <td>list</td>
                                                    <td>List based variable, like an array but cannot store key & value pairs. ["foo, "bar", ...]</td>
                                                </tr>
                                                <tr>
                                                    <td>array</td>
                                                    <td>Array based variable, stores data in a key value pair. {"foo": true, "bar": "foo!"}</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="row">
                        <button class="right-side-toggle waves-effect waves-light <?PHP theme_ButtonInfo(); ?> btn btn-circle btn-sm pull-right" onclick="location.href='<?PHP DynamicalWeb::getRoute('v1_intellivoid/settings/add', [] ,true); ?>';">
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
