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
                "Translations",
                "Intellivoid allows everyone to help translate Intellivoid to make it available to other users."
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
                            <h3 class="text-themecolor m-b-0 m-t-0 pt-2">Translations Introduction</h3>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item active">Translations</li>
                            </ol>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <h3 class="card-title">Introduction to Translations</h3>
                                    <div class="row">
                                        <div class="col-lg-8">
                                            Intellivoid allows everyone to help translate Intellivoid to make it available to
                                            other users. Translations are simple and well documented. This will briefly explain
                                            how translations work.
                                            <br/>
                                            <br/>
                                            If you want to translate a web application then you can check out our public
                                            translations repo on GitHub and make a pull request with your translation files.

                                        </div>
                                        <div class="col-lg-4">
                                            <div class="d-flex justify-content-center">
                                                <img class="img-responsive" style="height: 162px; width: 162px;" src="/assets/images/<?PHP theme_VectorImage(); ?>/gen_translate.svg" alt="Feedback">
                                            </div>
                                        </div>
                                    </div>
                                    <button class="btn btn-dark waves-effect waves-light mt-3" onclick="window.open('https://github.com/Intellivoid/Translations/');" type="button">
                                        <span class="btn-label">
                                            <i class="fa fa-github"></i>
                                        </span>View on GitHub
                                    </button>
                                    <hr/>
                                    <h3>Translating JSON files</h3>
                                    Most translations are done with a JSON file all following the same standard.
                                    <pre><code class="language-json"><?PHP HTML::print(file_get_contents(__DIR__ . DIRECTORY_SEPARATOR . 'example_document.json'), true); ?></code></pre>
                                    <br/>
                                    The document above is an example of what a translation file (Language File / JSON File)
                                    typically looks like. During translating the structure should remain the same.
                                    There cannot be removed or added values unless the primary language file (EN) has been updated.
                                    <br/>
                                    <br/>
                                    In the case if another translation is missing a value, the fallback language (EN)
                                    will be used to display the missing text
                                    <h3 class="pt-3">Language Structure</h3>
                                    <code>language</code> Contains basic information about the language that's presented
                                    in this document, including the language code aka a <code>iso_639-1</code> code.
                                    <pre><code class="language-json"><?PHP HTML::print(file_get_contents(__DIR__ . DIRECTORY_SEPARATOR . 'language_Structure.json'), true); ?></code></pre>
                                    <h3 class="pt-3">Pages Structure</h3>
                                    <code>pages</code> Is a list of existing pages that the Web Application can present,
                                    within each page it contains a <code>NAME</code>: <code>VALUE</code> structure,
                                    <code>NAME</code> to represent the element that's being displayed and <code>VALUE</code>
                                    which is the text that's displayed within the element.
                                    <br/>
                                    <br/>
                                    When translating this, the <b>NAME part DOES NOT</b> change, only the <code>VALUE</code>
                                    should be translated.
                                    <br/>
                                    <br/>
                                    In some cases you may see a value containing one or more <code>%s</code>'s. these
                                    are placeholder values which are replaced during runtime. If the value contains this,
                                    it should not be removed. Because <code>"You are %s years old!"</code> will become
                                    <code>"You are 24 years old!"</code> during runtime. You can change it's position or
                                    even put it between two characters, for example; <code>"Hello, you are number #%s"</code>
                                    <pre><code class="language-json"><?PHP HTML::print(file_get_contents(__DIR__ . DIRECTORY_SEPARATOR . 'page_structure.json'), true); ?></code></pre>
                                    <h3 class="pt-3">Sections Structure</h3>
                                    <code>sections</code> Works the same way as pages, but rather translating individual
                                    pages it translates sections of the web application, which is typically a navigation bar,
                                    footer, banners, etc.
                                    <pre><code class="language-json"><?PHP HTML::print(file_get_contents(__DIR__ . DIRECTORY_SEPARATOR . 'section_structure.json'), true); ?></code></pre>
                                    <hr/>
                                    <h3>Translating Markdown Files</h3>
                                    Each markdown "file" is a directory which consists of .md files named after a <code>iso_639-1</code>
                                    language code. To add support for another language simply create a new .md file in
                                    the directory named after the proper <code>iso_639-1</code> code.

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
