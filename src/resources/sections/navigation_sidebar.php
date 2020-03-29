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
                            <a href="javascript:void(0)" class="has-arrow py-1">Lydia</a>
                            <ul aria-expanded="false" class="collapse">
                                <li>
                                    <a href="#" class="py-1">Basics</a>
                                </li>
                                <li>
                                    <a href="#" class="py-1">Create Session</a>
                                </li>
                                <li>
                                    <a href="#" class="py-1">Get Session</a>
                                </li>
                                <li>
                                    <a href="#" class="py-1">Think Thought</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
</aside>