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
        <div class="container pointer-none position-relative">
            <h1 class="profInc-text-title position-absolute">Что включает в себя профессиональная ориентация?</h1>
            <img class="wave-3 position-absolute" src="assets/img/wave/wave-3.svg" alt="">
            <div class="profInc-text position-absolute">
                <ul>
                    <li>Профессиональное просвещение — ознакомление студентов и выпускников университета с современными видами трудовой деятельности, требованиями предъявляемыми профессиями к человеку, возможностями карьерного роста и самосовершенствования в процессе трудовой деятельности. Профессиональное просвещение дает молодежи осознание их soft и hard скиллов.</li>
                    <li>Профессиональное консультирование — оказание психологической помощи обучающимся в самоопределении.</li>
                    <li>Психологическая поддержка — методы, направленные на снижение психологической напряженности при выборе будущей профессии.</li>
                </ul>
            </div>
        </div>
    </section>

<?php $view->component('footer'); ?>