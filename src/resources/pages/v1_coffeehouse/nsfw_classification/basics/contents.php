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
                "NSFW Classification",
                "Predicts if the given image input (PNG/JPEG) is NSFW or SFW."
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
                            <h3 class="text-themecolor m-b-0 m-t-0 pt-2">NSFW Classification Basics</h3>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="javascript:void(0)">CoffeeHouse</a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="javascript:void(0)">NSFW Classification</a>
                                </li>
                                <li class="breadcrumb-item active">Basics</li>
                            </ol>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">

                            <div class="card">
                                <div class="card-body">
                                    <h3 class="card-title">How NSFW Classification works</h3>
                                    <div class="row mt-4">
                                        <div class="col-lg-6">
                                            Based off a large dataset (owo), CoffeeHouse can classify an image to determine if
                                            it contains pornographic content or not, this can be used in your software
                                            & services to filter out content that may potentially be inappropriate.
                                            the prediction values of the NSFW Image classification model is pretty accurate
                                            for general purposes. Currently the API only accepts <code>JPEG</code>
                                            and <code>PNG</code> as acceptable image formats and in the future more
                                            formats may be accepted.
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="d-flex justify-content-center">
                                                <img class="img-fluid card-icon" style="width: 362px; height: 242px;/** AUTO-GENERATED **/" alt="Find Content" src="/assets/images/example_nsfw.png">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card" id="methods">
                                <div class="card-body">
                                    <h3>API Method</h3>
                                    <?PHP
                                        $resulsts_object_structure_path = __DIR__ . DIRECTORY_SEPARATOR . "api_methods.json";
                                        generate_methods_table(json_decode(file_get_contents($resulsts_object_structure_path), true));
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

                            <div class="card">
                                <div class="card-body">
                                    <h3 class="card-title">Classifying an image</h3>
                                    There are two ways to upload an image to classify, either by the traditional method
                                    of uploading a file via the <code>image</code> parameter or base64 encoding the
                                    image contents yourself and passing the content via a <code>image</code> parameter.
                                    <br/>
                                    <br/>
                                    This method will return a response with the NsfwClassification object and a optional
                                    generalization object upon success
                                    <hr/>
                                    <div id="parameters">
                                        <?PHP
                                        $nsfw_classification_parameters_path = __DIR__ . DIRECTORY_SEPARATOR . "nsfw_classification_parameters.json";
                                        $nsfw_classification_parameters = json_decode(file_get_contents($nsfw_classification_parameters_path), true);
                                        ?>
                                        <label for="api_endpoint" class="mt-2">Endpoint</label>
                                        <input class="form-control <?PHP theme_TextColor(); ?> mb-3" id="api_endpoint" value="<?PHP HTML::print($nsfw_classification_parameters['ENDPOINT']); ?>" readonly>
                                        <label>Parameters</label>
                                        <?PHP
                                        generate_parameters_table($nsfw_classification_parameters);
                                        ?>
                                    </div>
                                    <hr/>
                                    <div id="response">
                                        <h4>Example Success Response</h4>
                                        <pre><code class="language-json"><?PHP HTML::print(file_get_contents(__DIR__ . DIRECTORY_SEPARATOR . "response_success.json"), true); ?></code></pre>
                                    </div>
                                    <br/>
                                    <div id="response_object_structure">
                                        <h4>Response Object Structure</h4>
                                        <?PHP
                                        $results_object_structure_path = __DIR__ . DIRECTORY_SEPARATOR . "results_object_structure.json";
                                        generate_object_structure(json_decode(file_get_contents($results_object_structure_path), true));
                                        ?>
                                    </div>
                                    <div id="nsfw_classification_object_structure">
                                        <h4>NsfwClassification Object Structure</h4>
                                        <?PHP
                                        $nsfw_classification_object_structure_path = __DIR__ . DIRECTORY_SEPARATOR . "nsfw_classification_object_structure.json";
                                        generate_object_structure(json_decode(file_get_contents($nsfw_classification_object_structure_path), true));
                                        ?>
                                    </div>
                                    <hr/>
                                    <div id="invalid_language_code_response">
                                        <h4>Invalid File Type Response</h4>
                                        <br/>
                                        This response is given when the uploaded file is not supported by the API
                                        <pre><code class="language-json"><?PHP HTML::print(file_get_contents(__DIR__ . DIRECTORY_SEPARATOR . "invalid_image_format.json"), true); ?></code></pre>
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
