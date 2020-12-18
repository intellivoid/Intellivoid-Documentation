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
                            <a href="<?PHP DynamicalWeb::getRoute("v1_coffeehouse_introduction", [], true); ?>" class="py-1">Introduction</a>
                        </li>
                        <li>
                            <a href="<?PHP DynamicalWeb::getRoute("v1_coffeehouse_wrappers", [], true); ?>" class="py-1">API Wrappers</a>
                        </li>
                        <li>
                            <a href="<?PHP DynamicalWeb::getRoute("v1_coffeehouse_error_codes", [], true); ?>" class="py-1">Error Codes</a>
                        </li>
                        <li>
                            <a href="javascript:void(0)" class="has-arrow py-1">Lydia</a>
                            <ul aria-expanded="false" class="collapse">
                                <li>
                                    <a href="<?PHP DynamicalWeb::getRoute("v1_coffeehouse_lydia_basics", [], true); ?>" class="py-1">Basics</a>
                                </li>
                                <li>
                                    <a href="<?PHP DynamicalWeb::getRoute('v1_coffeehouse_lydia_create_session', [] ,true); ?>" class="py-1">Create Session</a>
                                </li>
                                <li>
                                    <a href="<?PHP DynamicalWeb::getRoute("v1_coffeehouse_lydia_get_session", [], true); ?>" class="py-1">Get Session</a>
                                </li>
                                <li>
                                    <a href="<?PHP DynamicalWeb::getRoute("v1_coffeehouse_lydia_think_thought", [], true); ?>" class="py-1">Think Thought</a>
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
                            <a href="<?PHP DynamicalWeb::getRoute("public_openblu_introduction", [], true); ?>" class="py-1">Introduction</a>
                        </li>
                        <li>
                            <a href="<?PHP DynamicalWeb::getRoute("v1_openblu_error_codes", [], true); ?>" class="py-1">Error Codes</a>
                        </li>
                        <li>
                            <a href="javascript:void(0)" class="has-arrow py-1">API</a>
                            <ul aria-expanded="false" class="collapse">
                                <li>
                                    <a href="<?PHP DynamicalWeb::getRoute("v1_openblu_basics", [], true); ?>" class="py-1">Basics</a>
                                </li>
                                <li>
                                    <a href="<?PHP DynamicalWeb::getRoute("v1_openblu_list_servers", [], true); ?>" class="py-1">List Servers</a>
                                </li>
                                <li>
                                    <a href="<?PHP DynamicalWeb::getRoute("v1_openblu_get_server", [], true); ?>" class="py-1">Get Server</a>
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
                            <a href="<?PHP DynamicalWeb::getRoute("public_tg_antispam_introduction", [], true); ?>" class="py-1">Introduction</a>
                        </li>
                        <li>
                            <a href="javascript:void(0)" class="has-arrow py-1">API</a>
                            <ul aria-expanded="false" class="collapse">
                                <li>
                                    <a href="<?PHP DynamicalWeb::getRoute("v1_spamprotection_lookup", [], true); ?>" class="py-1">Lookup</a>
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
                            <a href="<?PHP DynamicalWeb::getRoute("public_intellivoid_introduction", [], true); ?>" class="py-1">Introduction</a>
                        </li>
                        <li>
                            <a href="<?PHP DynamicalWeb::getRoute("v1_ivs_error_codes", [], true); ?>" class="py-1">Error Codes</a>
                        </li>
                        <li>
                            <a href="javascript:void(0)" class="has-arrow py-1">Applications</a>
                            <ul aria-expanded="false" class="collapse">
                                <li>
                                    <a href="<?PHP DynamicalWeb::getRoute("v1_ivs_application_introduction", [], true); ?>" class="py-1">Introduction</a>
                                </li>
                                <li>
                                    <a href="<?PHP DynamicalWeb::getRoute("v1_ivs_application_permissions", [], true); ?>" class="py-1">Permissions</a>
                                </li>
                                <li>
                                    <a href="<?PHP DynamicalWeb::getRoute("v1_ivs_application_authentication_methods", [], true); ?>" class="py-1">Authentication Methods</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:void(0)" class="has-arrow py-1">COA API</a>
                            <ul aria-expanded="false" class="collapse">
                                <li>
                                    <a href="<?PHP DynamicalWeb::getRoute("v1_ivs_coa_introduction", [], true); ?>" class="py-1">Introduction</a>
                                </li>
                                <li>
                                    <a href="<?PHP DynamicalWeb::getRoute("v1_ivs_coa_basics", [], true); ?>" class="py-1">API Basics</a>
                                </li>
                                <li>
                                    <a href="<?PHP DynamicalWeb::getRoute("v1_ivs_coa_get_application", [], true); ?>" class="py-1">Get Application</a>
                                </li>
                                <li>
                                    <a href="<?PHP DynamicalWeb::getRoute("v1_ivs_coa_request_authentication", [], true); ?>" class="py-1">Request Authentication</a>
                                </li>
                                <li>
                                    <a href="<?PHP DynamicalWeb::getRoute("v1_ivs_coa_process_authentication", [], true); ?>" class="py-1">Process Authentication</a>
                                </li>
                                <li>
                                    <a href="<?PHP DynamicalWeb::getRoute("v1_ivs_coa_get_access_token", [], true); ?>" class="py-1">Get Access Token</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:void(0)" class="has-arrow py-1">Accounts</a>
                            <ul aria-expanded="false" class="collapse">
                                <li>
                                    <a href="<?PHP DynamicalWeb::getRoute("v1_ivs_accounts_introduction", [], true); ?>" class="py-1">Introduction</a>
                                </li>
                                <li>
                                    <a href="<?PHP DynamicalWeb::getRoute("v1_ivs_accounts_basics", [], true); ?>" class="py-1">API Basics</a>
                                </li>
                                <li>
                                    <a href="<?PHP DynamicalWeb::getRoute("v1_ivs_accounts_get_user", [], true); ?>" class="py-1">Get User</a>
                                </li>
                                <li>
                                    <a href="<?PHP DynamicalWeb::getRoute("v1_ivs_accounts_get_personal_information", [], true); ?>" class="py-1">Get Personal Information</a>
                                </li>
                                <li>
                                    <a href="<?PHP DynamicalWeb::getRoute("v1_ivs_accounts_get_email_address", [], true); ?>" class="py-1">Get Email Address</a>
                                </li>
                                <li>
                                    <a href="<?PHP DynamicalWeb::getRoute("v1_ivs_accounts_push_notifications", [], true); ?>" class="py-1">Push Notifications</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:void(0)" class="has-arrow py-1">Application Settings</a>
                            <ul aria-expanded="false" class="collapse">
                                <li>
                                    <a href="<?PHP DynamicalWeb::getRoute("v1_ivs_settings_introduction", [], true); ?>" class="py-1">Introduction</a>
                                </li>
                                <li>
                                    <a href="<?PHP DynamicalWeb::getRoute("v1_ivs_settings_basics", [], true); ?>" class="py-1">API Basics</a>
                                </li>
                                <li>
                                    <a href="<?PHP DynamicalWeb::getRoute("v1_ivs_settings_data_types", [], true); ?>" class="py-1">Data Types</a>
                                </li>
                                <li>
                                    <a href="<?PHP DynamicalWeb::getRoute("v1_ivs_settings_add", [], true); ?>" class="py-1">Add Variable</a>
                                </li>
                                <li>
                                    <a href="<?PHP DynamicalWeb::getRoute("v1_ivs_settings_get", [], true); ?>" class="py-1">Get Variable</a>
                                </li>
                                <li>
                                    <a href="<?PHP DynamicalWeb::getRoute("v1_ivs_settings_delete", [], true); ?>" class="py-1">Delete Variable</a>
                                </li>
                                <li>
                                    <a href="<?PHP DynamicalWeb::getRoute("v1_ivs_settings_append", [], true); ?>" class="py-1">Append to Variable</a>
                                </li>
                                <li>
                                    <a href="<?PHP DynamicalWeb::getRoute("v1_ivs_settings_summary", [], true); ?>" class="py-1">Get Summary</a>
                                </li>
                                <li>
                                    <a href="<?PHP DynamicalWeb::getRoute("v1_ivs_settings_dump", [], true); ?>" class="py-1">Dump Data</a>
                                </li>
                                <li>
                                    <a href="<?PHP DynamicalWeb::getRoute("v1_ivs_settings_clear", [], true); ?>" class="py-1">Clear Data</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" class="py-1">Todo Manager</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="<?PHP DynamicalWeb::getRoute("public_translations_introduction", [], true); ?>" aria-expanded="false">
                        <i class="mdi mdi-translate"></i>
                        <span class="hide-menu">Translations</span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</aside>