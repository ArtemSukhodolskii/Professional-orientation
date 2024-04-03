<?php

/**
 * @var \App\Kernel\View\View $view
 */

?>

<?php $view->component('header'); ?>
    <!-- navbar -->
    <?php $view->component('navbar'); ?>

    <!-- main content -->
    <section class="title my-2">
        <div class="container">
            <div class="row justify-content-lg-between">
                <div class="pt-5 col-12 col-lg-6 text-center text-lg-start">
                    <h1 class="d-none d-xl-block display-1">Профессиональная ориентация</h1>
                    <h1 class="d-xl-none display-3">Профессиональная ориентация</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente, soluta.</p>
                </div>
                <div class="col-lg-6 d-none d-lg-block d-flex justify-content-end">
                    <div class="pointer-none position-relative d-flex justify-content-end">
                        <img class="title__wave" src="/public/assets/img/wave/wave.svg" alt="">
                        <img class="position-absolute title__pole" src="assets/img/title/indicator/pole.svg" alt="">
                        <img class="position-absolute title__sign title__sign_aqua" src="assets/img/pointer/sign1.svg" alt="">
                        <img class="position-absolute title__sign title__sign_purple" src="assets/img/pointer/sign2.svg" alt="">
                        <img class="position-absolute title__sign title__sign_blue" src="assets/img/pointer/sign3.svg" alt="">
                        <img class="position-absolute title__person" src="assets/img/person/person.svg" alt="">
                   </div>
                </div>
            </div>
        </div>
    </section>

    <!-- vendor -->
    <?php $view->component('footer'); ?>