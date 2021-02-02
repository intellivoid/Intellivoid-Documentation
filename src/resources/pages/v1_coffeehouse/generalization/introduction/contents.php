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
                "CoffeeHouse - Generalization Introduction",
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
                            <h3 class="text-themecolor m-b-0 m-t-0 pt-2">Generalization Introduction</h3>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="javascript:void(0)">CoffeeHouse</a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="javascript:void(0)">Generalization</a>
                                </li>
                                <li class="breadcrumb-item active">Introduction</li>
                            </ol>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-7 col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    <h3 class="card-title">Introduction to Generalization</h3>
                                    Generalization is the act of calculating the generalization of the overall predictions
                                    which allows you to accurately predict the correct results over the span of multiple
                                    samples rather than just one individual sample. While you can preform generalization
                                    calculations on your own program natively, CoffeeHouse provides the developers
                                    with the ability make this process easier by storing the generalization data on
                                    our servers and having CoffeeHouse use a pointer-like mechanism to calculate the
                                    generalization without any additional performance loss or overhead.
                                    <div class="row mt-4">
                                        <div class="col-lg-6">
                                            This works by storing all the predictions on a table then by adding up all
                                            the predictions and dividing the final results by the total size of the
                                            prediction table. So while there may be one or two false predictions, the
                                            overall prediction is accounted for by the dominate label which in most
                                            cases is the true and correct prediction. This is great for determining
                                            the final prediction of a set of a samples or to accurately determine the
                                            detected language of a chat conversation. While not all CoffeeHouse features
                                            supports generalization, the documentation will indicate when generalization
                                            is supported and what labels to expect. This part of the documentation will
                                            explain how to initialize generalizations and understand the results.
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="d-flex justify-content-center">
                                                <img class="img-fluid card-icon" style="width: 262px; height: 242px;/** AUTO-GENERATED **/" alt="Find Content" src="/assets/images/generalization_1_example.png">
                                                <img class="img-fluid card-icon my-auto mx-2" style="width: 162px; height: 142px;/** AUTO-GENERATED **/" alt="Find Content" src="/assets/images/generalization_2_example.png">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-4">
                                        <div class="col-lg-6">
                                            <h3>Pointers</h3>
                                            But now as you may realize, if your generalization table can only store 5
                                            predictions, what if there's more predictions that you would like to apply?
                                            While you can't increase the generalization table size; you can overwrite
                                            older prediction values, CoffeeHouse keeps track of a position pointer which
                                            indicates what sector of the table is going to be written/overwritten to
                                            upon adding a new prediction, in the example shown the current pointer is
                                            "5", which is the last item on the table, when you add another prediction
                                            value to the generalization table then CoffeeHouse will overwrite the current
                                            pointer position and go to the next or back to the initial position which is
                                            1.
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="d-flex justify-content-center">
                                                <img class="img-fluid card-icon" style="width: 372px; height: 242px;/** AUTO-GENERATED **/" alt="Find Content" src="/assets/images/generalization_3_example.png">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-lg-5 col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    <h3 class="card-title">Quick References</h3>
                                    <ul class="pt-3">
                                        <li>
                                            <a href="https://coffeehouse.intellivoid.net" target="_blank">CoffeeHouse Website</a>
                                        </li>
                                        <li>
                                            <a href="<?PHP DynamicalWeb::getRoute("v1_coffeehouse/generalization/create_generalization", [], true); ?>">Create Generalization</a>
                                        </li>
                                        <li>
                                            <a href="<?PHP DynamicalWeb::getRoute("v1_coffeehouse/generalization/update_generalization", [], true); ?>">Update Generalization</a>
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
