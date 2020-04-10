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
                "OpenBlu Introduction",
                "r"
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
                            <h3 class="text-themecolor m-b-0 m-t-0 pt-2">OpenBlu Introduction</h3>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="javascript:void(0)">OpenBlu</a>
                                </li>
                                <li class="breadcrumb-item active">Introduction</li>
                            </ol>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-7 col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    <h3 class="card-title">Introduction to OpenBlu</h3>
                                    OpenBlu is a public repository of OpenVPN servers that are publicly accessible
                                    and updated regularly. You can use the official Web Application found at
                                    <a href="https://openblu.intellivoid.net">https://openblu.intellivoid.net</a> or
                                    via the API.
                                    <br/>
                                    <br/>
                                    All the VPN servers found in OpenBlu are hosted by volunteers world-wide thus making
                                    OpenBlu a decentralized solution because the servers are not hosted by Intellivoid.
                                    These servers do not require you to authenticate to connect to any of them.
                                    <hr/>
                                    <h3>How do I connect to these servers?</h3>
                                    You can connect to these servers using a standard OpenVPN client, by obtaining
                                     a .ovpn file from OpenBlu you can connect to the server by providing the .ovpn
                                    file to the OpenVPN Client
                                    <br/>
                                    <br/>
                                    <button class="btn btn-warning waves-effect waves-light" onclick="window.open('https://openvpn.net/community-downloads/');" type="button">
                                        <span class="btn-label">
                                            <i class="mdi mdi-open-in-new"></i>
                                        </span>OpenVPN Community Downloads
                                    </button>
                                    <hr/>
                                    <h3>Can these servers see what i do?</h3>
                                    Yes and no. It is possible that the admins of these servers can see what hosts
                                    you connect to but if your connection is encrypted (such as using standard SSL
                                    encryption) they cannot see what you send and receive.
                                    <br/>
                                    <br/>
                                    Yes it is possible that the admins keep logs but at the end of the day the
                                    only information you are sending to these servers is what IP address you are
                                    using to connect to these VPN servers. While most known VPN providers claims that
                                    they do not keep logs, often most of them requires you to
                                    <ul class="pt-3">
                                        <li>Create an account while providing your personal details such as your Email</li>
                                        <li>Authenticate with your personal account to connect to these servers</li>
                                        <li>Download and install proprietary software or "open source" software with blobs to connect to these servers</li>
                                    </ul>
                                    And often they would keep logs for authentication access and see who's connected
                                    to their servers using this information. And since most of these services are
                                    centralized solutions you will be connecting to servers hosted in data-centers that
                                    you have no information about while other organizations are hosted under the same
                                    hardware.
                                    <br/>
                                    <br/>
                                    OpenBlu being decentralized means that most of the servers found in OpenBlu is
                                    self-hosted in residential locations making it a more effective solution to stay
                                    anonymous.
                                    <hr/>
                                    <h3>Some servers won't work, why's that?</h3>
                                    One of the downsides of decentralization is the inconsistency of server availability
                                    and network infrastructures. OpenBlu does not guarantee that all servers will
                                    continue to work after a week or two, but here's some ways to make sure that the
                                    the probability of you connecting to a available server is high.
                                    <ul class="pt-3">
                                        <li>Connect to servers that has been updated recently</li>
                                        <li>Connect to servers with a high active session count</li>
                                        <li>Avoid servers that hasn't been updated in more than a week</li>
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
                                    You can obtain a free API key from OpenBlu and retrieve the servers that are available
                                    on OpenBlu, you can use the API to narrow down your results and filter them.
                                    <button class="btn <?PHP theme_ButtonInfo(); ?> waves-effect waves-light mt-3" onclick="window.open('https://openblu.intellivoid.net/');">Visit OpenBlu</button>
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
                                    <button class="btn <?PHP theme_ButtonInfo(); ?> waves-effect waves-light mt-3" onclick="window.open('https://t.me/IntellivoidDev/');">Join @IntellivoidDev</button>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    <h3 class="card-title">Quick References</h3>
                                    <ul class="pt-3">
                                        <li>
                                            <a href="https://openblu.intellivoid.net" target="_blank">OpenBlu Web Application</a>
                                        </li>
                                        <li>
                                            <a href="<?PHP DynamicalWeb::getRoute("v1_coffeehouse_lydia_basics", [], true); ?>">OpenBlu API Documentation</a>
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
