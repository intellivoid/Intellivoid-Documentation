<?php
    use DynamicalWeb\HTML;
?>
<!DOCTYPE html>
<html lang="<?PHP HTML::print(APP_LANGUAGE_ISO_639); ?>">

    <head>
        <?PHP HTML::importSection('header'); ?>
        <title>CoffeeHouse Introduction</title>
    </head>

    <body class="fix-header card-no-border">
        <div id="main-wrapper">
            <?PHP HTML::importSection('page_header'); ?>
            <?PHP HTML::importSection('navigation_sidebar'); ?>
            <div class="page-wrapper">
                <div class="container-fluid">
                    <div class="row page-titles">
                        <div class="col-md-5 col-8 align-self-center">
                            <h3 class="text-themecolor m-b-0 m-t-0 pt-2">CoffeeHouse Introduction</h3>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="javascript:void(0)">CoffeeHouse</a>
                                </li>
                                <li class="breadcrumb-item active">Introduction</li>
                            </ol>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-7 col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    <h3 class="card-title">Introduction to CoffeeHouse</h3>
                                    CoffeeHouse allows you to implement Machine Learning and Artificial Intelligence
                                    features into your software using the HTTP API, at the moment CoffeeHouse only
                                    provides the feature to interact with Lydia, in the future Intellivoid will
                                    add more to CoffeeHouse and the documentation for those new features will be added
                                    to Intellivoid Docs
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    <h3 class="card-title">API Authentication</h3>
                                    <div class="mb-3">
                                        CoffeeHouse's API is powered by Intellivoid API. This uses the standard "API Key"
                                        authentication method which is the same across all other Intellivoid APIs.
                                    </div>
                                    <i class="px-2">Hint: Your Access Key is your API Key</i>
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
                                        You can authenticate by providing your access key via the password field,
                                        the username can be left blank and you should not provide your access key
                                        via a username.
                                    </div>
                                    <div>
                                        <h4>GET/POST Parameter</h4>
                                        You can provide your access key via a GET Parameter or within a POST
                                        (multipart/form-data), the parameter name that is applicable to both
                                        methods is <code>access_key</code>, for example.
                                        <br/>
                                        <label for="auth_example" class="mt-3">Example GET request</label>
                                        <input class="form-control <?PHP theme_TextColor(); ?> mb-3" id="auth_example" value="https://api.intellivoid.net/example/v1/echo?access_key=<access key>&input=Hello" readonly>
                                    </div>
                                    <hr/>
                                    <div>
                                        <h4>Security Notice</h4>
                                        All official APIs by Intellivoid are done through <code>api.intellivoid.net</code>,
                                        followed by the service name and version of API Handler. For example
                                        <br/>
                                        <div class="mb-3">
                                            <label for="request_example" class="mt-3">Example GET request</label>
                                            <input class="form-control <?PHP theme_TextColor(); ?> mb-3" id="request_example" value="https://api.intellivoid.net/<service name>/<version>/<method>" readonly>
                                            Any unauthorized requests will result in a 401 Unauthorized response such as this
                                            <pre><code class="language-json"><?PHP HTML::print(file_get_contents(__DIR__ . DIRECTORY_SEPARATOR  . '401_unauthorized_response.json'), true); ?></code></pre>
                                        </div>
                                        <div class="mt-2">
                                            Additionally <code>WWW-Authenticate: Basic realm="API Authentication"</code> will
                                            be provided in the response headers, if you are using a web browser you will be
                                            prompted to authenticate, you can authenticate by providing your Access Key in
                                            the password field as explained above.
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-5 col-md-12">
                            <div class="ribbon-wrapper card">
                                <div class="card-body">
                                    <div class="ribbon ribbon-danger">Obtaining a API Key</div>
                                    <div class="d-flex justify-content-center">
                                        <img class="img-responsive" style="height: 162px; width: 162px;" src="/assets/images/<?PHP theme_VectorImage(); ?>/gen_api.svg" alt="Obtain API Key">
                                    </div>
                                    You can obtain a free API key from CoffeeHouse using the free subscription plan, if
                                    you need more resources then the prices for a more resources are also reasonable for
                                    small-time developers.
                                    <hr/>
                                    Free will always be free! There are no hidden trials or limitations other than
                                    how much resources you can use.
                                    <br/>
                                    <button class="btn <?PHP theme_ButtonInfo(); ?> waves-effect waves-light mt-3" onclick="window.open('https://coffeehouse.intellivoid.net/');">Visit CoffeeHouse</button>
                                </div>
                            </div>
                            <div class="ribbon-wrapper card">
                                <div class="card-body">
                                    <div class="ribbon ribbon-danger">Have a suggestion?</div>
                                    <div class="d-flex justify-content-center">
                                        <img class="img-responsive" style="height: 162px; width: 162px;" src="/assets/images/<?PHP theme_VectorImage(); ?>/gen_feedback.svg" alt="Feedback">
                                    </div>
                                    Let's hear it! Reach us out at our Telegram Discussions Group
                                    <br/>
                                    <button class="btn <?PHP theme_ButtonInfo(); ?> waves-effect waves-light mt-3" onclick="window.open('https://t.me/IntellivoidDev/');">Join @IntellivoidDev</button>
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
