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
                "Introduction to Applications",
                "An Application is what's used to identify your Application/Service to the user before they authenticate. Additionally this allows the user to know what permissions your Application requires from the user."
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
                            <h3 class="text-themecolor m-b-0 m-t-0 pt-2">Introduction to Applications</h3>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="javascript:void(0)">Intellivoid</a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="javascript:void(0)">Applications</a>
                                </li>
                                <li class="breadcrumb-item active">Introduction</li>
                            </ol>
                        </div>
                    </div>



                    <div class="row">
                        <div class="col-lg-7 col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    <h3 class="card-title">What is a Application?</h3>
                                    An Application is what's used to identify your Application/Service to the user before
                                    they authenticate. Additionally this allows the user to know what permissions
                                    your Application requires from the user.
                                    <br/><hr/>
                                    <h4>Creating an Application</h4>
                                    Before we start messing around with authentication, we need an Application to
                                    authenticate to. when you go to
                                    <a href="https://accounts.intellivoid.net/">Intellivoid Accounts</a>, and visit
                                    the <a href="https://accounts.intellivoid.net/applications">Manage Applications</a>
                                    page (found in the user-dropdown menu) you will have the ability to create an
                                    Application, choose any name you want (some names might be taken) and create your
                                    Application. from there you can manage your Application and obtain important
                                    information such as your Application ID and Secret Key. Additionally you can choose
                                    what permissions you want your Application to request to the user.
                                    <br/><br/>
                                    Best practices is to not use permissions that you don't require, when a user sees
                                    how many permissions your Application is requesting may make your Application seem
                                    sketchy. and not all users will grant full permissions to your Application.
                                    <hr/>

                                    <h4>Application ID</h4>
                                    Now that you have an Application, you will also have a unique Application ID. Instead
                                    of telling the server the name of your Application to identify it you will be using
                                    the Application's Public ID which is a long string of random numbers and letters which
                                    is unique only to your Application. This cannot be changed unless you delete your
                                    Application and re-create it.
                                    <br/><br/>
                                    This ID is public and can be used to request information about your Application such
                                    as it's logo, name and permissions.
                                    <hr/>

                                    <h4>Secret Key</h4>
                                    Your secret key isn't something you have to keep absolutely secret but you also need
                                    to understand what this key is used for. a secret key is like a "API Key" for your
                                    Application allowing you to request user authentication, information, manage
                                    Application Settings/Variables, etc. your secret key is only dangerous if the
                                    Access Token is leaked/available publicly.
                                    <ul class="pt-3">
                                        <li>Application ID</li>
                                        <li>Secret Key</li>
                                        <li>Access Token (unique between the user and the application)</li>
                                    </ul>
                                    With this combination, anyone can make requests to access information the user gave
                                    your Application access to. So in conclusion keep your Access Tokens safe.
                                    <hr/>

                                    <h4>Authenticating to an Application</h4>
                                    Users can authenticate to your Application using COA (Cross-over Authentication), to
                                    learn how it works and how to use it see <a href="#">COA API Introduction</a>

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
                                        <li>
                                            <a href="<?PHP DynamicalWeb::getRoute("v1_ivs_application_permissions", [], true); ?>" target="_blank">Application Permissions</a>
                                        </li>
                                        <li>
                                            <a href="<?PHP DynamicalWeb::getRoute("v1_ivs_application_authentication_methods", [], true); ?>" target="_blank">Application Authentication Methods</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="row">
                        <button class="right-side-toggle waves-effect waves-light <?PHP theme_ButtonInfo(); ?> btn btn-circle btn-sm pull-right" onclick="location.href='<?PHP DynamicalWeb::getRoute('v1_ivs_application_permissions', [] ,true); ?>';">
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
