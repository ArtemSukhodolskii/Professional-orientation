<?php

/**
 * @var \App\Kernel\View\View $view;
 */

?>

<?php $view->component('head'); ?>
    <!-- navbar -->
<?php $view->component('navbar'); ?>

<!-- main content -->
    <section class="title my-2">
        <div class="container position-relative pointer-none">
            <img class="wave-5 position-absolute" src="assets/img/wave/wave-5.svg" alt="">
            <ul class="advice-ul position-absolute">
                <li class="advice-li">Составить список профессий, которые тебе нравятся</li>
                <li class="advice-li">Составить перечень требований выбираемой профессии</li>
                <li class="advice-li">Определить значимость каждого требования</li>
                <li class="advice-li">Оценить свое соответствие требованиям каждой из подходящих профессий</li>
                <li class="advice-li">Подсчитать и проанализировать свои результаты</li>
                <li class="advice-li">Обсудить решение с друзьями, родителями, учителями</li>
                <li class="advice-li">
                    Определить основные практические пути к успеху</li>
            </ul>
        </div>
    </section>

<?php $view->component('footer'); ?>