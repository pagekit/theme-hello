<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?= $view->render('head') ?>
        <?php $view->style('theme', 'theme:css/theme.css') ?>
        <?php $view->script('theme', 'theme:js/theme.js') ?>
    </head>
    <body>

        <!-- Render logo or title with site URL -->
        <a href="<?= $view->url()->get() ?>">
            <?php if ($logo = $params['logo']) : ?>
                <img src="<?= $this->escape($logo) ?>" alt="">
            <?php else : ?>
                <?= $params['title'] ?>
            <?php endif ?>
        </a>

        <!-- Render menu position -->
        <?php if ($view->menu()->exists('main')) : ?>
            <?= $view->menu('main', ['class' => '']) ?>
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
