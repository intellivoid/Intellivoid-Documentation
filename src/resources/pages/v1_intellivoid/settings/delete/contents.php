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
                "Application Settings - Delete Variable",
                "Deletes an existing variable or data within a variable"
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
                            <h3 class="text-themecolor m-b-0 m-t-0 pt-2">Application Settings - Delete Variable</h3>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="javascript:void(0)">Intellivoid</a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="javascript:void(0)">Application Settings</a>
                                </li>
                                <li class="breadcrumb-item active">Delete Variable</li>
                            </ol>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <h3 class="card-title">Delete Variable</h3>
                                    Deletes an existing variable or data within a variable, this action cannot be undone!
                                    <hr/>
                                    <label for="api_endpoint" class="mt-2">Endpoint</label>
                                    <input class="form-control <?PHP theme_TextColor(); ?> mb-3" id="api_endpoint" value="<?PHP HTML::print(f_decode(__DIR__ . DIRECTORY_SEPARATOR . 'delete_parameters.json')['ENDPOINT']); ?>" readonly>
                                    <label>Parameters</label>
                                    <?PHP generate_parameters_table(f_decode(__DIR__ . DIRECTORY_SEPARATOR . 'delete_parameters.json')); ?>
                                    <hr/>

                                    <div id="delete_variable">
                                        <h4>Deleting a variable entirely</h4>
                                        You can delete a variable entirely and the results will return a summary of all
                                        the variables you currently have set if the operation was successful, all you need
                                        to do is provide the <code>name</code> parameter which points to the variable
                                        you would like to delete.
                                        <pre><code class="language-json"><?PHP HTML::print(file_get_contents(__DIR__ . DIRECTORY_SEPARATOR  . 'example_response.json'), true); ?></code></pre>
                                        For more information about what the summary means see <a href="<?PHP DynamicalWeb::getRoute("v1_intellivoid/settings/summary", [], true); ?>">Application Settings - Get Summary</a>
                                    </div>
                                    <hr/>

                                    <div id="delete_within_variable">
                                        <h4>Deleting data within a variable</h4>
                                        This is only applicable to <code>list</code> and <code>array</code> types, you
                                        can delete a value within a <code>list</code> or <code>array</code> but you need
                                        to specify what you want to delete.
                                        <br/><br/>

                                        <h5>Array example</h5>
                                        <pre><code class="language-json"><?PHP HTML::print(file_get_contents(__DIR__ . DIRECTORY_SEPARATOR  . 'example_array.json'), true); ?></code></pre>
                                        For this example, the variable name is <code>array_example</code>, and you would
                                        like delete "lorem" from this array. What you would need to do is set the
                                        <code>by</code> parameter to "key" and the <code>value</code> parameter to "lorem".
                                        You should get a response like this
                                        <pre><code class="language-json"><?PHP HTML::print(file_get_contents(__DIR__ . DIRECTORY_SEPARATOR  . 'example_array_response.json'), true); ?></code></pre>
                                        <br/>

                                        <h5>List example</h5>
                                        <pre><code class="language-json"><?PHP HTML::print(file_get_contents(__DIR__ . DIRECTORY_SEPARATOR  . 'example_list.json'), true); ?></code></pre>
                                        For this example, the variable name is <code>list_example</code>, and you would
                                        like delete "lorem" from this list. What you would need to do is set the
                                        <code>by</code> parameter to "index" and the <code>value</code> parameter to "2".
                                        You should get a response like this
                                        <pre><code class="language-json"><?PHP HTML::print(file_get_contents(__DIR__ . DIRECTORY_SEPARATOR  . 'example_list_response.json'), true); ?></code></pre>
                                        <hr/>

                                        <h4>Example response when deleting data within a variable</h4>
                                        When you delete a variable entirely then the response would be a summary of all
                                        the variables you currently have set, but when you delete data within a variable
                                        then the results will return the variable data itself.
                                        <pre><code class="language-json"><?PHP HTML::print(file_get_contents(__DIR__ . DIRECTORY_SEPARATOR  . 'example_alt_response.json'), true); ?></code></pre>
                                        <br/>
                                        But if you pass on the <code>include_meta</code> parameter with it's value set
                                        to True or 1, then the results will include it's metadata
                                        <pre><code class="language-json"><?PHP HTML::print(file_get_contents(__DIR__ . DIRECTORY_SEPARATOR  . 'example_meta_response.json'), true); ?></code></pre>
                                    </div>

                                    <div class="mt-3" class="meta_results_structure">
                                        <h4>Metadata Results Structure</h4>
                                        <?PHP generate_object_structure(f_decode(__DIR__ . DIRECTORY_SEPARATOR . 'meta_results_structure.json')); ?>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="row">
                        <button class="right-side-toggle waves-effect waves-light <?PHP theme_ButtonInfo(); ?> btn btn-circle btn-sm pull-right" onclick="location.href='<?PHP DynamicalWeb::getRoute('v1_intellivoid/settings/append', [] ,true); ?>';">
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
