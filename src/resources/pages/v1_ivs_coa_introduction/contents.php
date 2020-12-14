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
                "COA Introduction",
                "Cross-Over Authentication allows you to securely authenticate users via Intellivoid Accounts"
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
                            <h3 class="text-themecolor m-b-0 m-t-0 pt-2">COA Introduction</h3>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="javascript:void(0)">Intellivoid</a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="javascript:void(0)">COA</a>
                                </li>
                                <li class="breadcrumb-item active">Introduction</li>
                            </ol>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-7 col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    <h3 class="card-title">Introduction to COA</h3>
                                    Cross-Over Authentication (COA) is a method of authentication used in Intellivoid
                                    Accounts that works much like oAuth. There will be different terms that will be used
                                    in explaining how the authentication flow works in COA, below the terms will be explained.
                                    <hr/>

                                    <h4>Before using COA</h4>
                                    To use COA you need an Application to authenticate with, COA doesn't use a
                                    API Key/Access Key to authenticate to it's API, instead it uses a Application ID
                                    and Secret Key combination, for more information about what a Application is see
                                    <a href="#">Introduction to Applications</a>, if you want to know how you can
                                    authenticate see <a href="#">COA API Basics</a>
                                    <hr/>

                                    <h4>Access Token</h4>
                                    An Access Token is a unique token between your Application and User, as the name
                                    implies it's a token that allows your Application to access the User's account.
                                    You can only get an Access Token after requesting authentication (see below). And
                                    even requesting access; the user has the choice to deny permissions to your Application
                                    but still authenticate. This Access Token grants you the permissions the user allowed
                                    to your Application such as the ability to view their username or birthday. an
                                    Access Token can last for 48 hours, each time you use it that timer resets. If the
                                    Access Token expires then you must request authentication again.
                                    <hr/>

                                    <h4>Request Token</h4>
                                    A Request Token is a temporary token for requesting access to the user. this request
                                    token is not tied to any information about the user; just your Application. using a
                                    request token you can request the user to login and authenticate to your Application.
                                    <br/><br/>
                                    You can request the status of the request token and wait for results, once the user
                                    authenticates then an Access Token will be returned. and with that you can access
                                    the user's account and disregard the Request Token.

                                </div>
                            </div>
                        </div>

                        <div class="col-lg-5 col-md-12">
                            <div class="ribbon-wrapper card">
                                <div class="card-body">
                                    <div class="ribbon ribbon-danger">Creating an Application</div>
                                    <div class="d-flex justify-content-center mb-2">
                                        <img class="img-responsive" style="height: 162px; width: 162px;" src="/assets/images/<?PHP theme_VectorImage(); ?>/register_application.svg" alt="Obtain API Key">
                                    </div>
                                    You can register an Application for free using your Intellivoid Account! visit
                                    Intellivoid Accounts to register your Application right away
                                    <br/>
                                    <button class="btn <?PHP theme_ButtonInfo(); ?> waves-effect waves-light mt-3" onclick="window.open('https://accounts.intellivoid.net/applications');">Manage Applications</button>
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
                                    <button class="btn <?PHP theme_ButtonInfo(); ?> waves-effect waves-light mt-3" onclick="window.open('https://t.me/IntellivoidDiscussions/');">Join @IntellivoidDiscussions</button>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    <h3 class="card-title">Quick References</h3>
                                    <ul class="pt-3">
                                        <li>
                                            <a href="https://accounts.intellivoid.net" target="_blank">Intellivoid Accounts</a>
                                        </li>
                                        <li>
                                            <a href="https://accounts.intellivoid.net/applications" target="_blank">Manage Applications</a>
                                        </li>
                                    </ul>
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
