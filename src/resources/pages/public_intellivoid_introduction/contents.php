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
                "Intellivoid Services",
                "An introduction to the Intellivoid Services API and how you can incorporate this into your own software"
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
                            <h3 class="text-themecolor m-b-0 m-t-0 pt-2">Intellivoid Services Introduction</h3>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="javascript:void(0)">Intellivoid</a>
                                </li>
                                <li class="breadcrumb-item active">Introduction</li>
                            </ol>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-7 col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    <h3 class="card-title">Intellivoid Services</h3>

                                    <div class="row mt-3">
                                        <div class="col-lg-12">
                                            While our services such as CoffeeHouse and OpenBlu has it's own API,
                                            Intellivoid has it's own eco-system called "Intellivoid Services". The
                                            Intellivoid Services API allows developers to integrate their Application
                                            or services into the Intellivoid eco-system to improve the user experience.
                                            <br/><br/>
                                            For example, if you have a blog and you want to allow users to leave comments
                                            but you would like to know who left those comments instead of just allowing
                                            Anonymous users (unauthorized users), you can integrate Intellivoid Accounts
                                            into your blog using the Intellivoid Services API which will allow users to
                                            login to your blog using their own Intellivoid Account and make comments
                                            which will display their username and display picture without you needing
                                            to create your own Account Management system.
                                            <br/><br/>
                                            Additionally you can use the Intellivoid Services API to store and manage
                                            user preferences (eg; Dark mode, language, show sensitive content, etc.)
                                            without needing to setup your own database to store these preferences on your
                                            server.
                                            <br/><br/>
                                            Another example is with the Intellivoid Services API you can manipulate
                                            services such as Intellivoid Suite, for instance; you can have an Application
                                            create todo-tasks for a user.
                                            <hr/>
                                            There are plenty of use cases and the documentation for Intellivoid Services
                                            will cover everything from how to authenticate users, how to use other
                                            features and or services through the same API, so on.
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="card">
                                <div class="card-body">
                                    <h3 class="card-title">Getting Started</h3>

                                    <div class="row mt-3">
                                        <div class="col-lg-4 mb-3">
                                            <div class="d-flex justify-content-center">
                                                <img class="img-fluid card-icon" style="width: 262px; height: 162px;/** AUTO-GENERATED **/" alt="Find Content" src="/assets/images/<?PHP theme_VectorImage(); ?>/iva_intro.svg">
                                            </div>
                                        </div>
                                        <div class="col-lg-8">
                                            Intellivoid Services offers a lot of features and tools, but to break it
                                            down into easy to follow steps, follow this list.

                                            <ul class="list-icons pt-3">
                                                <li>
                                                    <i class="ti-angle-right"></i>
                                                    <a href="<?PHP DynamicalWeb::getRoute("v1_ivs_application_introduction", [], true); ?>" class="<?PHP theme_TextColor(); ?>">Introduction to Applications</a>
                                                </li>
                                                <li>
                                                    <i class="ti-angle-right"></i>
                                                    <a href="<?PHP DynamicalWeb::getRoute("v1_ivs_coa_introduction", [], true); ?>" class="<?PHP theme_TextColor(); ?>">COA Introduction</a>
                                                </li>
                                                <li>
                                                    <i class="ti-angle-right"></i>
                                                    <a href="<?PHP DynamicalWeb::getRoute("v1_ivs_accounts_introduction", [], true); ?>" class="<?PHP theme_TextColor(); ?>">Accounts Introduction</a>
                                                </li>
                                                <li>
                                                    <i class="ti-angle-right"></i>
                                                    <a href="<?PHP DynamicalWeb::getRoute("v1_ivs_settings_introduction", [], true); ?>" class="<?PHP theme_TextColor(); ?>">Application Settings Introduction</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-lg-12 pt-2">
                                            <hr/>
                                            Additionally, Intellivoid Accounts will not show ads and or collect your personal
                                            information and use it to track you. our privacy policy protects users from privacy
                                            abuse and additionally provides users security due to how our software & services
                                            operate. View our <a href="https://accounts.intellivoid.net/privacy">privacy policy</a> for Intellivoid Accounts
                                        </div>
                                    </div>
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
                                            <a href="<?PHP DynamicalWeb::getRoute("v1_ivs_application_introduction", [], true); ?>" target="_blank">Introduction to Applications</a>
                                        </li>
                                        <li>
                                            <a href="<?PHP DynamicalWeb::getRoute("v1_ivs_application_authentication_methods", [], true); ?>" target="_blank">Application Authentication Methods</a>
                                        </li>
                                        <li>
                                            <a href="<?PHP DynamicalWeb::getRoute("v1_ivs_coa_introduction", [], true); ?>" target="_blank">Cross-over Authentication Introduction</a>
                                        </li>
                                        <li>
                                            <a href="<?PHP DynamicalWeb::getRoute("v1_ivs_accounts_introduction", [], true); ?>" target="_blank">Accounts Introduction</a>
                                        </li>
                                        <li>
                                            <a href="<?PHP DynamicalWeb::getRoute("v1_ivs_settings_introduction", [], true); ?>" target="_blank">Appliication Settings/Variables Introduction</a>
                                        </li>
                                    </ul>
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
