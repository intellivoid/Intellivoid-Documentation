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
                "Lydia Basics",
                "Lydia is a active learning chat bot that learns from conversations and can speak in many languages"
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
                            <h3 class="text-themecolor m-b-0 m-t-0 pt-2">Lydia Basics</h3>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="javascript:void(0)">CoffeeHouse</a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="javascript:void(0)">Lydia</a>
                                </li>
                                <li class="breadcrumb-item active">Basics</li>
                            </ol>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">

                            <div class="card">
                                <div class="card-body">
                                    <h3 class="card-title">How Lydia works</h3>
                                    Lydia is a active learning chat bot that learns from conversations and can speak in
                                    many languages <i>"natively"</i>. This section will briefly explain how Lydia works
                                    and how it's intended to be used in environments.
                                    <hr/>
                                    <div>
                                        <h4>Sessions</h4>
                                        <div class="row">
                                            <div class="col-lg-7 col-md-12">
                                                Using the general mindset for how a conversation works, for every response in
                                                a conversation the response must be related to the current conversation.
                                                This is accomplished in Lydia using sessions, these sessions allows the
                                                bot to hold a memory of the current conversation including sentimental
                                                values that the bot predicts during the conversation.
                                                <br/><br/>
                                                Before you start a conversation with Lydia, you must initialize a session
                                                and then give your input using that session. See <a href="<?PHP DynamicalWeb::getRoute("v1_coffeehouse/lydia/create_session", [], true); ?>">Create Session</a>
                                                for more details on how to create one.
                                            </div>
                                            <div class="col-lg-5 col-md-12 mt-3">
                                                <ul class="chat-list">
                                                    <li class="mt-0 odd">
                                                        <div class="chat-content">
                                                            <div class="box bg-danger text-white">Hello John!</div>
                                                        </div>
                                                    </li>
                                                    <li class="mt-1">
                                                        <div class="chat-content">
                                                            <div class="box bg-success text-white">Hello! How are you?</div>
                                                        </div>
                                                    </li>
                                                    <li class="mt-0 odd">
                                                        <div class="chat-content">
                                                            <div class="box bg-danger text-white">Great!</div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <hr/>
                                    <div>
                                        <h4>Languages</h4>
                                        Though Lydia can speak in many languages; every output is the result of active
                                        learning. This means the more you speak to it the more it learns. Nothing in
                                        active learning is hard-coded and occasionally you will notice spelling mistakes
                                        or responses that do not make sense. The same goes when the conversation is based
                                        in another language.

                                        <div class="row mt-4">

                                            <div class="col-lg-6">
                                                There is no way to enforce a specific language to be used throughout
                                                the whole conversation, however. There is a way to enforce the conversation
                                                to start in a specific language, doing this will have a higher probability
                                                for Lydia to respond correctly in the assigned language. You can
                                                only accomplish this upon creating a session. See <a href="<?PHP DynamicalWeb::getRoute("v1_coffeehouse/lydia/create_session", [], true); ?>">Create Session</a>
                                                for more details on how to accomplish this.
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="d-flex justify-content-center">
                                                    <img class="img-fluid card-icon" style="width: 232px; height: 232px;/** AUTO-GENERATED **/" alt="Find Content" src="/assets/images/<?PHP theme_VectorImage(); ?>/gen_chatbot.svg">
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card" id="methods">
                                <div class="card-body">
                                    <h3>API Methods</h3>
                                    <?PHP
                                        $api_methods_path = __DIR__ . DIRECTORY_SEPARATOR . "api_methods.json";
                                        generate_methods_table(json_decode(file_get_contents($api_methods_path), true));
                                    ?>
                                </div>
                            </div>

                            <div class="card" id="authentication">
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
                                        followed by the service name and version of the API Handler. For example
                                        <br/>
                                        <div class="mb-3">
                                            <label for="request_example" class="mt-3">Example GET request</label>
                                            <input class="form-control <?PHP theme_TextColor(); ?> mb-3" id="request_example" value="https://api.intellivoid.net/<service name>/<version>/<method>" readonly>
                                        </div>
                                        Any unauthorized requests will result in a 401 Unauthorized response such as this
                                        <pre><code class="language-json"><?PHP HTML::print(file_get_contents(__DIR__ . DIRECTORY_SEPARATOR . "401_unauthorized_response.json"), true); ?></code></pre>
                                        <div class="mt-2">
                                            Additionally <code>WWW-Authenticate: Basic realm="API Authentication"</code> will
                                            be provided in the response headers, if you are using a web browser you will be
                                            prompted to authenticate, you can authenticate by providing your Access Key in
                                            the password field as explained above.
                                        </div>
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

                            <div class="row">
                                <button class="right-side-toggle waves-effect waves-light <?PHP theme_ButtonInfo(); ?> btn btn-circle btn-sm pull-right" onclick="location.href='<?PHP DynamicalWeb::getRoute('v1_coffeehouse/lydia/create_session', [] ,true); ?>';">
                                    <i class="fa fa-arrow-right text-white"></i>
                                </button>
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
