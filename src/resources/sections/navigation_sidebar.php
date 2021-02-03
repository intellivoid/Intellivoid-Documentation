<?php
    use DynamicalWeb\DynamicalWeb;
?>
<aside class="left-sidebar">
    <div class="scroll-sidebar">
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <li class="nav-small-cap">Intellivoid Docs</li>
                <li>
                    <a href="<?PHP DynamicalWeb::getRoute("index", [], true); ?>" aria-expanded="false">
                        <i class="fa fa-circle"></i>
                        <span class="hide-menu">Home</span>
                    </a>
                </li>
                <li class="nav-small-cap">Services</li>
                <li>
                    <a class="has-arrow" href="javascript:void(0)" aria-expanded="false">
                        <i class="mdi mdi-coffee"></i>
                        <span class="hide-menu">CoffeeHouse</span>
                    </a>
                    <ul aria-expanded="false" class="collapse">
                        <li>
                            <a href="<?PHP DynamicalWeb::getRoute("v1_coffeehouse/introduction", [], true); ?>" class="py-1">Introduction</a>
                        </li>
                        <li>
                            <a href="<?PHP DynamicalWeb::getRoute("v1_coffeehouse/wrappers", [], true); ?>" class="py-1">API Wrappers</a>
                        </li>
                        <li>
                            <a href="<?PHP DynamicalWeb::getRoute("v1_coffeehouse/error_codes", [], true); ?>" class="py-1">Error Codes</a>
                        </li>
                        <li>
                            <a href="javascript:void(0)" class="has-arrow py-1">Lydia</a>
                            <ul aria-expanded="false" class="collapse">
                                <li>
                                    <a href="<?PHP DynamicalWeb::getRoute("v1_coffeehouse/lydia/basics", [], true); ?>" class="py-1">Basics</a>
                                </li>
                                <li>
                                    <a href="<?PHP DynamicalWeb::getRoute('v1_coffeehouse/lydia/create_session', [] ,true); ?>" class="py-1">Create Session</a>
                                </li>
                                <li>
                                    <a href="<?PHP DynamicalWeb::getRoute("v1_coffeehouse/lydia/get_session", [], true); ?>" class="py-1">Get Session</a>
                                </li>
                                <li>
                                    <a href="<?PHP DynamicalWeb::getRoute("v1_coffeehouse/lydia/get_session_attributes", [], true); ?>" class="py-1">Get Session Attributes</a>
                                </li>
                                <li>
                                    <a href="<?PHP DynamicalWeb::getRoute("v1_coffeehouse/lydia/think_thought", [], true); ?>" class="py-1">Think Thought</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:void(0)" class="has-arrow py-1">Generalization</a>
                            <ul aria-expanded="false" class="collapse">
                                <li>
                                    <a href="<?PHP DynamicalWeb::getRoute("v1_coffeehouse/generalization/introduction", [], true); ?>" class="py-1">Introduction</a>
                                </li>
                                <li>
                                    <a href="<?PHP DynamicalWeb::getRoute("v1_coffeehouse/generalization/create_generalization", [], true); ?>" class="py-1">Create Generalization</a>
                                </li>
                                <li>
                                    <a href="<?PHP DynamicalWeb::getRoute("v1_coffeehouse/generalization/update_generalization", [], true); ?>" class="py-1">Update Generalization</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:void(0)" class="has-arrow py-1">NLP</a>
                            <ul aria-expanded="false" class="collapse">
                                <li>
                                    <a href="<?PHP DynamicalWeb::getRoute("v1_coffeehouse/nlp/basics", [], true); ?>" class="py-1">Basics</a>
                                </li>
                                <li>
                                    <a href="<?PHP DynamicalWeb::getRoute("v1_coffeehouse/nlp/pos_tagging", [], true); ?>" class="py-1">POS Tagging</a>
                                </li>
                                <li>
                                    <a href="<?PHP DynamicalWeb::getRoute("v1_coffeehouse/nlp/sentence_split", [], true); ?>" class="py-1">Sentence Split</a>
                                </li>
                                <li>
                                    <a href="<?PHP DynamicalWeb::getRoute("v1_coffeehouse/nlp/sentiment_analysis", [], true); ?>" class="py-1">Sentiment Analysis</a>
                                </li>
                                <li>
                                    <a href="<?PHP DynamicalWeb::getRoute("v1_coffeehouse/nlp/emotion_analysis", [], true); ?>" class="py-1">Emotion Analysis</a>
                                </li>
                                <li>
                                    <a href="<?PHP DynamicalWeb::getRoute("v1_coffeehouse/nlp/chatroom_spam_prediction", [], true); ?>" class="py-1">Chatroom Spam</a>
                                </li>
                                <li>
                                    <a href="<?PHP DynamicalWeb::getRoute("v1_coffeehouse/nlp/language_detection", [], true); ?>" class="py-1">Language Detection</a>
                                </li>
                                <li>
                                    <a href="<?PHP DynamicalWeb::getRoute("v1_coffeehouse/nlp/ner_tagging", [], true); ?>" class="py-1">NER Tagging</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:void(0)" class="has-arrow py-1">Image Processing</a>
                            <ul aria-expanded="false" class="collapse">
                                <li>
                                    <a href="<?PHP DynamicalWeb::getRoute("v1_coffeehouse/nsfw_classification/basics", [], true); ?>" class="py-1">NSFW Classification</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li>
                    <a class="has-arrow" href="javascript:void(0)" aria-expanded="false">
                        <i class="mdi mdi-server-security"></i>
                        <span class="hide-menu">OpenBlu</span>
                    </a>
                    <ul aria-expanded="false" class="collapse">
                        <li>
                            <a href="<?PHP DynamicalWeb::getRoute("v1_openblu/introduction", [], true); ?>" class="py-1">Introduction</a>
                        </li>
                        <li>
                            <a href="javascript:void(0)" class="has-arrow py-1">API</a>
                            <ul aria-expanded="false" class="collapse">
                                <li>
                                    <a href="<?PHP DynamicalWeb::getRoute("v1_openblu/api/basics", [], true); ?>" class="py-1">Basics</a>
                                </li>
                                <li>
                                    <a href="<?PHP DynamicalWeb::getRoute("v1_openblu/api/error_codes", [], true); ?>" class="py-1">Error Codes</a>
                                </li>
                                <li>
                                    <a href="<?PHP DynamicalWeb::getRoute("v1_openblu/api/list_servers", [], true); ?>" class="py-1">List Servers</a>
                                </li>
                                <li>
                                    <a href="<?PHP DynamicalWeb::getRoute("v1_openblu/api/get_server", [], true); ?>" class="py-1">Get Server</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li>
                    <a class="has-arrow" href="javascript:void(0)" aria-expanded="false">
                        <i class="mdi mdi-email-secure"></i>
                        <span class="hide-menu">SpamProtection</span>
                    </a>
                    <ul aria-expanded="false" class="collapse">
                        <li>
                            <a href="<?PHP DynamicalWeb::getRoute("v1_tg_antispam/introduction", [], true); ?>" class="py-1">Introduction</a>
                        </li>
                        <li>
                            <a href="javascript:void(0)" class="has-arrow py-1">API</a>
                            <ul aria-expanded="false" class="collapse">
                                <li>
                                    <a href="<?PHP DynamicalWeb::getRoute("v1_tg_antispam/api/lookup", [], true); ?>" class="py-1">Lookup</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li>
                    <a class="has-arrow" href="javascript:void(0)" aria-expanded="false">
                        <i class="fa fa-cloud"></i>
                        <span class="hide-menu">Intellivoid</span>
                    </a>
                    <ul aria-expanded="false" class="collapse">
                        <li>
                            <a href="<?PHP DynamicalWeb::getRoute("v1_intellivoid/introduction", [], true); ?>" class="py-1">Introduction</a>
                        </li>
                        <li>
                            <a href="<?PHP DynamicalWeb::getRoute("v1_intellivoid/error_codes", [], true); ?>" class="py-1">Error Codes</a>
                        </li>
                        <li>
                            <a href="javascript:void(0)" class="has-arrow py-1">Applications</a>
                            <ul aria-expanded="false" class="collapse">
                                <li>
                                    <a href="<?PHP DynamicalWeb::getRoute("v1_intellivoid/application/introduction", [], true); ?>" class="py-1">Introduction</a>
                                </li>
                                <li>
                                    <a href="<?PHP DynamicalWeb::getRoute("v1_intellivoid/application/permissions", [], true); ?>" class="py-1">Permissions</a>
                                </li>
                                <li>
                                    <a href="<?PHP DynamicalWeb::getRoute("v1_intellivoid/application/authentication_methods", [], true); ?>" class="py-1">Authentication Methods</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:void(0)" class="has-arrow py-1">COA API</a>
                            <ul aria-expanded="false" class="collapse">
                                <li>
                                    <a href="<?PHP DynamicalWeb::getRoute("v1_intellivoid/coa/introduction", [], true); ?>" class="py-1">Introduction</a>
                                </li>
                                <li>
                                    <a href="<?PHP DynamicalWeb::getRoute("v1_intellivoid/coa/basics", [], true); ?>" class="py-1">API Basics</a>
                                </li>
                                <li>
                                    <a href="<?PHP DynamicalWeb::getRoute("v1_intellivoid/coa/get_application", [], true); ?>" class="py-1">Get Application</a>
                                </li>
                                <li>
                                    <a href="<?PHP DynamicalWeb::getRoute("v1_intellivoid/coa/request_authentication", [], true); ?>" class="py-1">Request Authentication</a>
                                </li>
                                <li>
                                    <a href="<?PHP DynamicalWeb::getRoute("v1_intellivoid/coa/process_authentication", [], true); ?>" class="py-1">Process Authentication</a>
                                </li>
                                <li>
                                    <a href="<?PHP DynamicalWeb::getRoute("v1_intellivoid/coa/get_access_token", [], true); ?>" class="py-1">Get Access Token</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:void(0)" class="has-arrow py-1">Accounts</a>
                            <ul aria-expanded="false" class="collapse">
                                <li>
                                    <a href="<?PHP DynamicalWeb::getRoute("v1_intellivoid/accounts/introduction", [], true); ?>" class="py-1">Introduction</a>
                                </li>
                                <li>
                                    <a href="<?PHP DynamicalWeb::getRoute("v1_intellivoid/accounts/basics", [], true); ?>" class="py-1">API Basics</a>
                                </li>
                                <li>
                                    <a href="<?PHP DynamicalWeb::getRoute("v1_intellivoid/accounts/get_user", [], true); ?>" class="py-1">Get User</a>
                                </li>
                                <li>
                                    <a href="<?PHP DynamicalWeb::getRoute("v1_intellivoid/accounts/get_personal_information", [], true); ?>" class="py-1">Get Personal Information</a>
                                </li>
                                <li>
                                    <a href="<?PHP DynamicalWeb::getRoute("v1_intellivoid/accounts/get_email_address", [], true); ?>" class="py-1">Get Email Address</a>
                                </li>
                                <li>
                                    <a href="<?PHP DynamicalWeb::getRoute("v1_intellivoid/accounts/push_notifications", [], true); ?>" class="py-1">Push Notifications</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:void(0)" class="has-arrow py-1">Application Settings</a>
                            <ul aria-expanded="false" class="collapse">
                                <li>
                                    <a href="<?PHP DynamicalWeb::getRoute("v1_intellivoid/settings/introduction", [], true); ?>" class="py-1">Introduction</a>
                                </li>
                                <li>
                                    <a href="<?PHP DynamicalWeb::getRoute("v1_intellivoid/settings/basics", [], true); ?>" class="py-1">API Basics</a>
                                </li>
                                <li>
                                    <a href="<?PHP DynamicalWeb::getRoute("v1_intellivoid/settings/data_types", [], true); ?>" class="py-1">Data Types</a>
                                </li>
                                <li>
                                    <a href="<?PHP DynamicalWeb::getRoute("v1_intellivoid/settings/add", [], true); ?>" class="py-1">Add Variable</a>
                                </li>
                                <li>
                                    <a href="<?PHP DynamicalWeb::getRoute("v1_intellivoid/settings/get", [], true); ?>" class="py-1">Get Variable</a>
                                </li>
                                <li>
                                    <a href="<?PHP DynamicalWeb::getRoute("v1_intellivoid/settings/delete", [], true); ?>" class="py-1">Delete Variable</a>
                                </li>
                                <li>
                                    <a href="<?PHP DynamicalWeb::getRoute("v1_intellivoid/settings/append", [], true); ?>" class="py-1">Append to Variable</a>
                                </li>
                                <li>
                                    <a href="<?PHP DynamicalWeb::getRoute("v1_intellivoid/settings/summary", [], true); ?>" class="py-1">Get Summary</a>
                                </li>
                                <li>
                                    <a href="<?PHP DynamicalWeb::getRoute("v1_intellivoid/settings/dump", [], true); ?>" class="py-1">Dump Data</a>
                                </li>
                                <li>
                                    <a href="<?PHP DynamicalWeb::getRoute("v1_intellivoid/settings/clear", [], true); ?>" class="py-1">Clear Data</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="<?PHP DynamicalWeb::getRoute("v1_intellivoid/translations/introduction", [], true); ?>" aria-expanded="false">
                        <i class="mdi mdi-translate"></i>
                        <span class="hide-menu">Translations</span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</aside>