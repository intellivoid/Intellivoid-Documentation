<?php
    use DynamicalWeb\DynamicalWeb;
?>
<header class="topbar">
    <nav class="navbar top-navbar navbar-expand-md navbar-light">
        <div class="navbar-header">
            <a class="navbar-brand" href="<?PHP DynamicalWeb::getRoute("index", [], true); ?>">
                <b>
                    <img src="/assets/images/logo.svg" alt="homepage" class="dark-logo" />
                    <img src="/assets/images/logo.svg" alt="homepage" class="light-logo" />
                </b>
                <span>
                    <img src="/assets/images/logo-text.png" alt="homepage" class="dark-logo" />
                    <img src="/assets/images/logo-light-text.png" class="light-logo" alt="homepage" />
                </span>
            </a>
        </div>
        <div class="navbar-collapse">
            <ul class="navbar-nav mr-auto mt-md-0">
                <li class="nav-item">
                    <a class="nav-link nav-toggler hidden-md-up text-muted waves-effect waves-dark" href="javascript:void(0)">
                        <i class="mdi mdi-menu"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link sidebartoggler hidden-sm-down text-muted waves-effect waves-dark" href="javascript:void(0)">
                        <i class="ti-menu"></i>
                    </a>
                </li>
            </ul>
            <ul class="navbar-nav my-lg-0">
                <li class="nav-item">
                    <?PHP
                        if(DARK_MODE_ENABLED)
                        {
                            $_GET['action'] = "disable_dark_mode";
                            ?>
                            <a class="nav-link text-muted text-muted waves-effect waves-dark" href="<?PHP DynamicalWeb::getRoute(APP_CURRENT_PAGE, $_GET, true); ?>">
                                <i class="mdi mdi-weather-sunny"></i>
                            </a>
                            <?PHP
                        }
                        else
                        {
                            $_GET['action'] = "enable_dark_mode";
                            ?>
                            <a class="nav-link text-muted text-muted waves-effect waves-dark" href="<?PHP DynamicalWeb::getRoute(APP_CURRENT_PAGE, $_GET, true); ?>">
                                <i class="mdi mdi-weather-night"></i>
                            </a>
                            <?PHP
                        }
                    ?>
                </li>
            </ul>
        </div>
    </nav>
</header>