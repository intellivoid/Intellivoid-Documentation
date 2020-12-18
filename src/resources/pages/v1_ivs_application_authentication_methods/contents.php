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
                "Authentication Methods",
                "Authentication Methods are different ways for a client to obtain an Access Token when authenticating a user."
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
                            <h3 class="text-themecolor m-b-0 m-t-0 pt-2">Authentication Methods</h3>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="javascript:void(0)">Intellivoid</a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="javascript:void(0)">Applications</a>
                                </li>
                                <li class="breadcrumb-item active">>Authentication Methods</li>
                            </ol>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <h3 class="card-title">Authentication Methods</h3>
                                    Authentication Methods are different ways for a client to obtain an Access Token
                                    when authenticating a user. This page will explain all the available authentication
                                    methods and how they are intended to be used in details.
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <div class="card" id="redirect">
                                <div class="card-body">
                                    <h3 class="card-title">Redirect</h3>
                                    The redirect authentication method is a simple authentication flow designed for
                                    websites/web applications where polling the authentication request wouldn't be
                                    efficient. Instead this method doesn't require you to request authentication, all
                                    you need is a authentication permalink and the Authentication Prompt will
                                    handle the rest.
                                    <div class="container my-2">
                                        <img src="/assets/images/redirect_example.png" height="280" width="841" class="center-block" alt="example">
                                    </div>
                                    Just create a link with this URL format, add your own Application ID to the
                                    <code>application_id</code> parameter and the location where you handle COA authentication
                                    to <code>redirect</code>, for example <a href="https://example.com/auth">https://example.com/auth</a>
                                    should attempt to verify the <code>access_token</code> parameter if the user is not
                                    authenticated, once you verify the access token you can retrieve information about
                                    the user.
                                    <input class="form-control <?PHP theme_TextColor(); ?> my-3" id="api_endpoint" value="https://accounts.intellivoid.net/auth/coa?action=request_authentication&application_id=<APPLICATION ID>&redirect=<REDIRECT LOCATION>" readonly>
                                    The authentication prompt will only redirect the user to the provided authentication
                                    URL if the user has authenticated.
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <div class="card" id="placeholder">
                                <div class="card-body">
                                    <h3 class="card-title">Application Placeholder</h3>
                                    Application Placeholder is an ideal authentication method for clients/applications
                                    where the client is constantly checking the status of the Request Authentication Token.
                                    Your client first <a href="<?PHP DynamicalWeb::getRoute("v1_ivs_coa_request_authentication", [] ,true); ?>">requests authentication</a>,
                                    in the response the sever should return a Request Token and the authentication URL
                                    that the user must visit in their web browser in order to authenticate.
                                    <div class="row mt-3">
                                        <div class="col-lg-4 mb-3">
                                            <div class="d-flex justify-content-center">
                                                <img class="img-fluid card-icon"  src="/assets/images/placeholder_example.png">
                                            </div>
                                        </div>
                                        <div class="col-lg-8">
                                            During this time the client will constantly check the Request Token's status with the
                                            <a href="<?PHP DynamicalWeb::getRoute("v1_ivs_coa_process_authentication", [] ,true); ?>">Process Authentication</a>
                                            method and wait till the user authenticates using the URL that the server
                                            provided. As soon as the user authenticates the <a href="<?PHP DynamicalWeb::getRoute("v1_ivs_coa_process_authentication", [] ,true); ?>">Process Authentication</a>
                                            method will return an Access Token allowing the client to retrieve information about
                                            the user.
                                            <br/><br/>
                                            <button class="btn btn-dark waves-effect waves-light" onclick="window.open('https://github.com/intellivoid/Intellivoid-Python/blob/master/examples/authentication/placeholder_authenticate.py');" type="button">
                                                <span class="btn-label">
                                                    <i class="fa fa-github"></i>
                                                </span>View example on GitHub
                                            </button>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <div class="card" id="code">
                                <div class="card-body">
                                    <h3 class="card-title">Code</h3>
                                    This authentication method is a more limited version of Application Placeholder, this
                                    method works the same way as Application Placeholder where the client must
                                    <a href="<?PHP DynamicalWeb::getRoute("v1_ivs_coa_request_authentication", [] ,true); ?>">request authentication</a>
                                    in order to obtain a Request Token and the URL where the user must open to authenticate.
                                    <br/><br/>

                                    <div class="row mt-3">
                                        <div class="col-lg-4 mb-3">
                                            <div class="d-flex justify-content-center">
                                                <img class="img-fluid card-icon"  src="/assets/images/code_example.png">
                                            </div>
                                        </div>
                                        <div class="col-lg-8">
                                            However, in cases where the client cannot constantly check the authentication status
                                            with <a href="<?PHP DynamicalWeb::getRoute("v1_ivs_coa_process_authentication", [] ,true); ?>">Process Authentication</a>
                                            then the client can have a way for the user to input the Access Token into the client's interface.
                                            Once the user authenticates they will be shown a Access Token with instructions
                                            prompting the user to copy and paste this Access Token to the client.
                                            <br/><br/>
                                            <button class="btn btn-dark waves-effect waves-light" onclick="window.open('https://github.com/intellivoid/Intellivoid-Python/blob/master/examples/authentication/code_authenticate.py');" type="button">
                                                <span class="btn-label">
                                                    <i class="fa fa-github"></i>
                                                </span>View example on GitHub
                                            </button>
                                        </div>
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
