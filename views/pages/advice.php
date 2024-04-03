<?php

/**
 * @var \App\Kernel\View\View $view;
 */

?>

<?php $view->component('header'); ?>
<!-- navbar -->
    <?php $view->component('navbar'); ?>
    <section class="title">
        <div class="container d-flex justify-content-center">
            <div class="pointer-none d-none d-lg-block test position-relative">
                <img class="title__pc" src="assets/img/other/pc.svg" alt="">
                <img class="title__person-sit position-absolute" src="assets/img/person/personSit.svg" alt="">
                <img class="title__text position-absolute" src="assets/img/other/text.svg" alt="">
            </div>
            <div class="d-lg-none">
                <h1 class="mb-1 display-1 text-center">
                    Как освоиться в новой профессии?
                </h1>
                <p>Какой то тут текст должен быть ну типо да</p>
            </div>
        </div>
    </section>

    <?php $view->component('footer'); ?>