<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?= $view->render('head') ?>
        <?php $view->style('theme', 'theme:css/theme.css') ?>
        <?php $view->script('jquery') ?>
    </head>
    <body>

        <!-- Render logo with site URL -->
        <?php if($app['module']['system/site']->config('logo')): ?>
        <a href="<?= $view->url()->get() ?>">
            <img src="<?= $app['module']['system/site']->config('logo') ?>" alt="">
        </a>
        <?php endif ?>

        <!-- Render menu position -->
        <?php if ($view->menu()->exists('primary')) : ?>
            <?= $view->menu('primary') ?>
        <?php endif ?>

        <!-- Render widget position -->
        <?php if ($view->position()->exists('sidebar')) : ?>
            <?= $view->position('sidebar') ?>
        <?php endif; ?>

        <!-- Render system messages -->
        <?= $view->render('messages') ?>

        <!-- Render content -->
        <?= $view->render('content') ?>

        <!-- Insert code before the closing body tag  -->
        <?= $view->render('footer') ?>

    </body>
</html>
