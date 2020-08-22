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
                "Lookup Query",
                "This method allows you to lookup a user, chat or channel in the SpamProtection database"
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
                            <h3 class="text-themecolor m-b-0 m-t-0 pt-2">Lookup</h3>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="javascript:void(0)">SpamProtection</a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="javascript:void(0)">API</a>
                                </li>
                                <li class="breadcrumb-item active">Lookup</li>
                            </ol>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <h3 class="card-title">Lookup Query</h3>
                                    This method allows you to lookup a user, chat or channel in the SpamProtection database,
                                    this method does not require authentication and there are no rate limits.
                                    <?PHP
                                        $lookup_parameters_path = __DIR__ . DIRECTORY_SEPARATOR . 'lookup_parameters.json';
                                        $lookup_parameters = json_decode(file_get_contents($lookup_parameters_path), true);
                                    ?>
                                    <hr/>
                                    <label for="api_endpoint" class="mt-2">Endpoint</label>
                                    <input class="form-control <?PHP theme_TextColor(); ?> mb-3" id="api_endpoint" value="<?PHP HTML::print($lookup_parameters['ENDPOINT']); ?>" readonly>
                                    <label>Parameters</label>
                                    <?PHP
                                        generate_parameters_table($lookup_parameters);
                                    ?>
                                    <hr/>
                                    <div id="success_response">
                                        <h4>Example Success Response</h4>
                                        <pre><code class="language-json"><?PHP HTML::print(file_get_contents(__DIR__ . DIRECTORY_SEPARATOR  . 'example_response.json'), true); ?></code></pre>
                                    </div>
                                    <br/>
                                    <div>
                                        <h4>Results Object Structure</h4>
                                        <?PHP
                                        $results_object_structure_path = __DIR__ . DIRECTORY_SEPARATOR . 'results_object_structure.json';
                                        generate_object_structure(json_decode(file_get_contents($results_object_structure_path), true));
                                        ?>
                                    </div>
                                    <div class="mt-3">
                                        <h4>Attributes Object Structure</h4>
                                        <?PHP
                                        $attributes_object_structure_path = __DIR__ . DIRECTORY_SEPARATOR . 'attributes_object_structure.json';
                                        generate_object_structure(json_decode(file_get_contents($attributes_object_structure_path), true));
                                        ?>
                                    </div>
                                    <div class="mt-3">
                                        <h4>Language Prediction Object Structure</h4>
                                        <?PHP
                                        $language_prediction_object_structure_path = __DIR__ . DIRECTORY_SEPARATOR . 'language_prediction_object_structure.json';
                                        generate_object_structure(json_decode(file_get_contents($language_prediction_object_structure_path), true));
                                        ?>
                                    </div>
                                    <div class="mt-3">
                                        <h4>Spam Prediction Object Structure</h4>
                                        <?PHP
                                        $spam_prediction_object_structure_path = __DIR__ . DIRECTORY_SEPARATOR . 'spam_prediction_object_structure.json';
                                        generate_object_structure(json_decode(file_get_contents($spam_prediction_object_structure_path), true));
                                        ?>
                                    </div>
                                    <hr/>
                                    <div id="no_results_response">
                                        <h4>No Results Found Response</h4>
                                        This response is given when the requested query does not exist in the SpamProtection Database
                                        <pre><code class="language-json"><?PHP HTML::print(file_get_contents(__DIR__ . DIRECTORY_SEPARATOR  . 'results_not_found_response.json'), true); ?></code></pre>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <h3 class="card-title">In conclusion</h3>
                                    This method is publicly available for everyone to access and use for whatever purpose
                                    for as long as it is not for malicious intents. This part of the documentation will
                                    quickly explain what the important attributes mean and how you should deal with it.
                                    <br/><hr/>

                                    <h4>Blacklisted Entities</h4>
                                    Blacklisted entities applies to both a user and channel, if the entity is blacklisted
                                    then the attributes <code>blacklist_flag</code>, <code>blacklist_reason</code> and
                                    optionally <code>original_private_id</code> will become available to provide further
                                    information about the blacklist reason, blacklisted users were blacklisted manually
                                    by an operator or agent due to abusive behaviors and in such cases they can appeal
                                    for their blacklist to be removed via our support chat <a href="https://t.me/SpamProtectionSupport">@SpamProtectionSupport</a>
                                    except for <code>0xCACP</code><br/><br/>
                                    These users should be banned or restricted from public chats upon joining/sending a message<br/><hr/>

                                    <h4>Potential Spammers</h4>
                                    These users are potentially a smaller threat than blacklisted users, a potential spammer
                                    only happens when their spam prediction is higher than their ham prediction. (Aka
                                    sending nothing but spam). This flag is not permanent and can be reverted simply by
                                    not sending spam as often. This flag is usually raised by spam bots and not normally
                                    by normal users.<br/><br/>
                                    These users should be temporarily restricted upon joining groups or require to pass
                                    a captcha validation before being able to send anything.
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
