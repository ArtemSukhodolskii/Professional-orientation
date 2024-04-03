<?php

/**
 * @var \App\Kernel\View\View $view;
 */

?>

<?php $view->component('header'); ?>
    <!-- navbar -->
    <?php $view->component('navbar'); ?>

    <!-- main content -->
    <section class="selection my-2">
        <div class="container">
            <div class="row justify-content-center position-relative">
                <div class="col-lg-6 d-none d-lg-flex">
                    <div class="pointer-none selection__person-div d-flex justify-content-end align-items-center">
                        <img class="selection__wave" src="assets/img/wave/wave-2.svg" alt="">
                        <img class="selection__person position-absolute" src="assets/img/person/person-2.svg" alt="">
                        <img class="selection__cloud position-absolute" src="assets/img/other/cloud.svg" alt="">
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="d-flex d-lg-block flex-column align-items-center">
                        <a class="table link-underline link-underline-opacity-0 h6" href="#">
                            <div style="background-image: url(/assets/img/pointer/table_aqua.svg);"
                                class="mb-lg-3 mb-xl-5 imageContainer">
                               Что включает в себя профессиональная ориентация
                            </div>
                        </a>
                        <a class="table link-underline link-underline-opacity-0 h6" href="#">
                            <div style="background-image: url(/assets/img/pointer/table_blue.svg);"
                            class="mb-lg-3 mb-xl-5 imageContainer">
                                Плюсы и минусы IT профессии
                            </div>
                        </a>
                        <a class="table link-underline link-underline-opacity-0 h6" href="#">
                            <div style="background-image: url(/assets/img/pointer/table_lilac.svg);"
                            class="mb-lg-3 mb-xl-5 imageContainer">
                                Варианты получения профессии
                            </div>
                        </a>
                        <a class="table link-underline link-underline-opacity-0 h6" href="/advice">
                            <div style="background-image: url(/assets/img/pointer/table_purple.svg);"
                            class="mb-lg-3 mb-xl-5 imageContainer">
                                Советы по выбору рабочей специальности
                            </div>
                        </a>
                        <a class="table link-underline link-underline-opacity-0 h6" href="#">
                            <div style="background-image: url(/assets/img/pointer/table_purple-light.svg);"
                            class="mb-lg-3 mb-xl-5 imageContainer">
                                Ошибки при выборе будущей профессии
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- vendor -->
    <?php $view->component('footer'); ?>