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
                "Application Settings - Introduction",
                "Application Settings allows you to store and manage settings and variables between your Application and the user without having to setup an additional database"
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
                            <h3 class="text-themecolor m-b-0 m-t-0 pt-2">Accounts Introduction</h3>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="javascript:void(0)">Intellivoid</a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="javascript:void(0)">Application Settings</a>
                                </li>
                                <li class="breadcrumb-item active">Introduction</li>
                            </ol>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-7 col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    <h3 class="card-title">Introduction to Application Settings</h3>
                                    Application Settings allows you to store and manage settings and variables between
                                    your Application and the user without having to setup an additional database, for
                                    example; if you would like to remember user preferences such as their theme, language
                                    and or other minor settings then you can use this feature to store this information
                                    and it would only be between the Application and the User.
                                    <hr/>

                                    <h3>Limitations</h3>
                                    While this can be proven to be a useful feature, it comes with it's limitations, these
                                    limitations will be explained more as you learn about the variable types that you
                                    can store with this API; in general you cannot store Arrays within an Array or List
                                    and you can only store variable types that are accepted by the server.
                                    <br/><br/>
                                    You have a generous 16MB storage limit which means you can store up to 16MB of data
                                    in total. This limitation only applies between the Application and User. So you
                                    can store up to 16MB of storage with "<i>Alice</i>" and another 16MB with "<i>Bob</i>"
                                    without running into any issues, but you cannot store more than 16MB of data with
                                    one user only.
                                    <hr/>

                                    <h3>Can the user edit and access this data?</h3>
                                    The user <b>cannot edit this data</b> but they can export it or clear it. In the
                                    future we may add additional features allowing the Application to lock and protect
                                    specific variables so that the user cannot export or delete those variables.
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-5 col-md-12">
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
