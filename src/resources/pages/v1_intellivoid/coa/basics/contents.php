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
                "COA API Basics",
                "An introduction on how the COA API Works"
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
                            <h3 class="text-themecolor m-b-0 m-t-0 pt-2">COA API Basics</h3>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="javascript:void(0)">Intellivoid</a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="javascript:void(0)">COA</a>
                                </li>
                                <li class="breadcrumb-item active">Basics</li>
                            </ol>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">

                            <div class="card" id="methods">
                                <div class="card-body">
                                    <h3>API Methods</h3>
                                    <?PHP generate_methods_table(f_decode(__DIR__ . DIRECTORY_SEPARATOR . 'api_methods.json')); ?>
                                </div>
                            </div>

                            <div class="card" id="authentication">
                                <div class="card-body">
                                    <h3 class="card-title">API Authentication</h3>
                                    <div class="mb-3">
                                        All these API methods except for <code>get_application</code> requires
                                        authentication using your Application ID and Secret Key
                                    </div>
                                    <hr/>
                                    <div class="mb-4">
                                        The following authentication methods are available
                                        <ul class="list-icons">
                                            <li><i class="ti-angle-right"></i> Basic HTTP Authentication</li>
                                            <li><i class="ti-angle-right"></i> GET/POST Parameter</li>
                                        </ul>
                                    </div>
                                    <div class="mb-3">
                                        <h4>Basic HTTP Authentication</h4>
                                        You can authenticate by providing your Application ID via the username field
                                        and your Secret Key via the password field
                                    </div>
                                    <div>
                                        <h4>GET/POST Parameter</h4>
                                        You can provide your authentication details via a GET Parameter or within a POST
                                        (multipart/form-data), the parameter names that is applicable to both
                                        methods is <code>application_id</code> for your Application ID and <code>secret_key</code>
                                        for your secret key
                                        <br/>
                                        <label for="auth_example" class="mt-3">Example GET request</label>
                                        <input class="form-control <?PHP theme_TextColor(); ?> mb-3" id="auth_example" value="https://api.intellivoid.net/intellivoid/v1/coa/auth/request_authentication?application_id=<APPLICATION ID>&secret_key=<SECRET KEY>" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="card" id="troubleshooting">
                                <div class="card-body">
                                    <h3 class="card-title">Troubleshooting</h3>
                                    <div class="mb-3">
                                        All API responses returns a <code>X-Request-ID</code> header with a unique
                                        value set with every response you get. It is important to log this request ID
                                        if you encounter unexpected issues and server-side errors. Intellivoid can use
                                        this ID to get more details about the request and troubleshoot the error.
                                    </div>
                                    <div class="alert alert-warning">
                                        <h3 class="text-warning">
                                            <i class="fa fa-eye"></i> Data protection
                                        </h3>
                                        To protect your data, we do not store the information our server returns to
                                        your client, the only data we keep track of is the request data you sent and
                                        server-side details that are not visible in the request such as exception
                                        dumps, cache information and so on. This information is automatically deleted
                                        from our server after two weeks. This data is used to troubleshoot any
                                        problems with our services and to address them accordingly.
                                    </div>
                                </div>
                            </div>

                            <div class="card" id="error_codes">
                                <div class="card-body">
                                    <h3 class="card-title">COA Error Codes</h3>
                                    <div class="mb-3">
                                        Many things can go wrong when making a request to Intellivoid's services API.
                                        Each service has it's own set of error codes. Whenever <code>success</code> is
                                        false a <code>error</code> object is returned within the results which contains
                                        a <code>type</code> property followed by a <code>error_code</code> and
                                        <code>message</code> property. the <code>type</code> property shows you what
                                        service is reporting the error. You can learn more about this in
                                        <a href="<?PHP DynamicalWeb::getRoute("v1_intellivoid/error_codes", [], true); ?>">Intellivoid - Error Codes</a>
                                        to be able to identify the error correctly.
                                        <br/><br/>
                                        The table below will show all the possible error codes and explain what
                                        do they mean. Additionally not all error codes will be returned on the API
                                        and some are specific to the front-end for the user, the two sets are separated.
                                        <br/><br/>
                                        All errors related to COA will have the type <code>COA</code> as shown below
                                        <pre><code class="language-json"><?PHP HTML::print(file_get_contents(__DIR__ . DIRECTORY_SEPARATOR  . 'example_error.json'), true); ?></code></pre>
                                    </div>
                                    <hr/>

                                    <div id="clientside">
                                        <h4>COA Error codes (Client-side)</h4>
                                        These are errors that you would receive on COA's API, your client should expect
                                        these errors.
                                        <br/><br/>
                                        <?PHP generate_error_codes(f_decode(__DIR__ . DIRECTORY_SEPARATOR . 'client_error_codes.json')); ?>
                                    </div>
                                    <hr/>

                                    <div id="frontend">
                                        <h4 id="frontend">COA Error codes (Frontend)</h4>
                                        These are errors that a user would receive on the front-end when using the
                                        authentication prompt. These are errors your client doesn't need to expect or handle.
                                        <br/><br/>
                                        <?PHP generate_error_codes(f_decode(__DIR__ . DIRECTORY_SEPARATOR . 'frontend_error_codes.json')); ?>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="row">
                        <button class="right-side-toggle waves-effect waves-light <?PHP theme_ButtonInfo(); ?> btn btn-circle btn-sm pull-right" onclick="location.href='<?PHP DynamicalWeb::getRoute('v1_intellivoid/coa/get_application', [] ,true); ?>';">
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
