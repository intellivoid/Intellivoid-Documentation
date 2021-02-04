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
                "CoffeeHouse Introduction",
                "CoffeeHouse allows you to implement Machine Learning and Artificial Intelligence features into your software using the HTTP API."
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
                                    CoffeeHouse allows you to implement complicated Machine Learning methods into
                                    your software without having to deal with the hassle of setting it up on your own
                                    and spending extra for the resources that you require to run those features.
                                    Currently, CoffeeHouse provides these current features, we are constantly working
                                    and researching to add more as CoffeeHouse becomes more powerful.

                                    <div class="table-responsive pt-3">
                                        <table class="table table-hover table-bordered">
                                            <thead>
                                                <tr>
                                                    <td>Name</td>
                                                    <td>Description</td>
                                                    <td>Usage</td>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Lydia AI</td>
                                                    <td>
                                                        An advanced multi-language chat bot novelty that can have human-like
                                                        conversations with users and remember conversations, it out-smarts
                                                        bots like Mitsuku (Kuki) when it comes to the turing test.
                                                    </td>
                                                    <td>
                                                        <a href="<?PHP DynamicalWeb::getRoute("v1_coffeehouse/lydia/basics", [], true); ?>">
                                                            Documentation
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Image NSFW Classification</td>
                                                    <td>
                                                        Allows the ability to safely verify if an image contains
                                                        pornographic content which is usually unsafe for work and or
                                                        public environments, this allows you to safely filter safe
                                                        and unsafe images
                                                    </td>
                                                    <td>
                                                        <a href="<?PHP DynamicalWeb::getRoute("v1_coffeehouse/nsfw_classification/basics", [], true); ?>">
                                                            Documentation
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Named Entity Recognition</td>
                                                    <td>
                                                        Extract important named entities from a given text input such as
                                                        a persons name, country, organization, location and even parse
                                                        entities like date and time from a human language to a format
                                                        that a computer can understand easily
                                                    </td>
                                                    <td>
                                                        <a href="<?PHP DynamicalWeb::getRoute("v1_coffeehouse/nlp/ner_tagging", [], true); ?>">
                                                            Documentation
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Part-Of-Speech Tagging</td>
                                                    <td>
                                                        Understand the structure of a sentence by extracting grammatical
                                                        tags from the input
                                                    </td>
                                                    <td>
                                                        <a href="<?PHP DynamicalWeb::getRoute("v1_coffeehouse/nlp/pos_tagging", [], true); ?>">
                                                            Documentation
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Sentiment Analysis</td>
                                                    <td>
                                                        Predict the sentimental values from a given input to determine
                                                        if the given input is positive, neutral or negative. This is
                                                        great for determining if user feedback is positive or not.
                                                    </td>
                                                    <td>
                                                        <a href="<?PHP DynamicalWeb::getRoute("v1_coffeehouse/nlp/sentiment_analysis", [], true); ?>">
                                                            Documentation
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Emotion Analysis</td>
                                                    <td>
                                                        Much like Sentimental Analysis, emotion analysis allows you
                                                        to predict the emotional feelings of the given input
                                                    </td>
                                                    <td>
                                                        <a href="<?PHP DynamicalWeb::getRoute("v1_coffeehouse/nlp/emotion_analysis", [], true); ?>">
                                                            Documentation
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Chatroom Spam Prediction</td>
                                                    <td>
                                                        Determine if a message from a chatroom like environment contains
                                                        unwanted spam/promotion, works well with a lot of languages by
                                                        default without needing to specify the language source.
                                                    </td>
                                                    <td>
                                                        <a href="<?PHP DynamicalWeb::getRoute("v1_coffeehouse/nlp/chatroom_spam_prediction", [], true); ?>">
                                                            Documentation
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Sentence Split</td>
                                                    <td>
                                                        Using easy CoffeeHouse's builtin tokenization & stop words, you
                                                        can accurately split sentences from the given input to make
                                                        text more easier to work with
                                                    </td>
                                                    <td>
                                                        <a href="<?PHP DynamicalWeb::getRoute("v1_coffeehouse/nlp/sentence_split", [], true); ?>">
                                                            Documentation
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Language Detection</td>
                                                    <td>
                                                        Using multiple language detection methods, CoffeeHouse can
                                                        accurately predict the language from the given text input and
                                                        return a ISO-639-1 standard language code
                                                    </td>
                                                    <td>
                                                        <a href="<?PHP DynamicalWeb::getRoute("v1_coffeehouse/nlp/language_detection", [], true); ?>">
                                                            Documentation
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Prediction Generalization</td>
                                                    <td>
                                                        You can create a generalization of the last x predictions from
                                                        any one of the services listed above to create an accurate
                                                        generalized prediction of the overall score
                                                    </td>
                                                    <td>
                                                        <a href="<?PHP DynamicalWeb::getRoute("v1_coffeehouse/generalization/introduction", [], true); ?>">
                                                            Documentation
                                                        </a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>

                                </div>
                            </div>

                            <div class="card">
                                <div class="card-body">
                                    <h3 class="card-title">Quick References</h3>
                                    <ul class="pt-3">
                                        <li>
                                            <a href="https://coffeehouse.intellivoid.net" target="_blank">CoffeeHouse Website</a>
                                        </li>
                                        <li>
                                            <a href="<?PHP DynamicalWeb::getRoute("v1_coffeehouse/wrappers", [], true); ?>">API Wrappers</a>
                                        </li>
                                        <li>
                                            <a href="<?PHP DynamicalWeb::getRoute("v1_coffeehouse/lydia/basics", [], true); ?>">Lydia API Documentation</a>
                                        </li>
                                    </ul>
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
                                    you need more resources then the prices for more resources are also reasonable for
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
                                    <button class="btn <?PHP theme_ButtonInfo(); ?> waves-effect waves-light mt-3" onclick="window.open('https://t.me/IntellivoidDiscussions/');">Join @IntellivoidDiscussions</button>
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
