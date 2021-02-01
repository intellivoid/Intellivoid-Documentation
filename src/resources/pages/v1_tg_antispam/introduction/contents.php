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
                "Telegram SpamProtection Introduction",
                "SpamProtection is a community powered project with the goal to combat spam effectively on Telegram using machine learning and manual reporting"
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
                            <h3 class="text-themecolor m-b-0 m-t-0 pt-2">SpamProtection Introduction</h3>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="javascript:void(0)">SpamProtection</a>
                                </li>
                                <li class="breadcrumb-item active">Introduction</li>
                            </ol>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-7 col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    <h3 class="card-title">Introduction to SpamProtection</h3>
                                    SpamProtection is a community powered solution with the goal to effectively combat
                                    spam on Telegram using machine learning and manual spam reporting.<br/><br/>
                                    <hr/>
                                    <h3>How does it work?</h3>
                                    There are several factors to this project that allows this project to combat spam
                                    <ul class="pt-3">
                                        <li>Machine Learning Spam Prediction</li>
                                        <li>Machine Learning Language Prediction</li>
                                        <li>User/Channel Blacklisting</li>
                                        <li>Potential Spammer Detection</li>
                                        <li>Manual Reporting</li>
                                    </ul>

                                    <h4>Machine Learning Spam Prediction</h4>
                                    When you add <a href="https://t.me/SpamProtectionBot">@SpamProtectionBot</a> to your group,
                                    the bot works instantly. it begins to predict if the message contains spam or not and
                                    if you give the bot the correct permissions, it will automatically delete any messages
                                    it thinks may be spam and report it publicly so that others can verify if it's actually
                                    spam or the bot made a false prediction. This will also allow operators to determine if
                                    the user should be blacklisted or not to prevent further spam from being posted on other
                                    groups.<br/><br/>

                                    <h4>Machine Learning Language Prediction</h4>
                                    Not only that the bot attempts to predict if the message is spam it will also attempt
                                    to predict the generalized language spoken both by the user and the group to have a
                                    greater chance in predicting correctly if the message is spam or not.<br/><br/>

                                    <h4>User/Channel Blacklisting</h4>
                                    Trusted users are appointed special permissions to resolve any issues that may occur
                                    with this project, including the ability to blacklist users (mostly spam bots) so that
                                    these users cannot continue to spread unwanted spam and abuse towards other groups.<br/><br/>

                                    <h4>Potential Spammer Detection</h4>
                                    The bot can accurately determine if a user is a potential spammer depending on their
                                    spamming activities which can add another layer of security for groups to prevent
                                    potential spammers from posting spam.<br/><br/>

                                    <h4>Manual Reporting</h4>
                                    Thanks to our large community of spam watchers, they manually report users who spams
                                    and they report false spam predictions allowing our database of spammers to grow and
                                    become more accurate towards our goal in stopping spam on Telegram.<br/><br/>
                                </div>
                            </div>

                        </div>

                        <div class="col-lg-5 col-md-12">
                            <div class="ribbon-wrapper card">
                                <div class="card-body">
                                    <div class="ribbon ribbon-danger">Want to use this bot?</div>
                                    <div class="d-flex justify-content-center">
                                        <img class="img-responsive" style="height: 162px; width: 162px;" src="/assets/images/<?PHP theme_VectorImage(); ?>/gen_group.svg" alt="Add to group">
                                    </div>
                                    You can add this bot to your group now and actively protect your group from spammers
                                    and with almost no effort, it's like having a bot for a moderator.
                                    <button class="btn <?PHP theme_ButtonInfo(); ?> waves-effect waves-light mt-3" onclick="window.open('https://t.me/SpamProtectionBot?startgroup=add');" type="button">
                                        <span class="btn-label">
                                            <i class="mdi mdi-telegram"></i>
                                        </span>@SpamProtectionBot
                                    </button>
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
                                            <a href="https://t.me/SpamProtectionSupport" target="_blank">Support Group</a>
                                        </li>
                                        <li>
                                            <a href="https://t.me/SpamProtectionLogs" target="_blank">Public Logs Channel</a>
                                        </li>
                                        <li>
                                            <a href="<?PHP DynamicalWeb::getRoute("v1_tg_antispam/api/lookup", [], true); ?>">Lookup user API</a>
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
