<?php ob_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <title>LaravelRUS UI &mdash; Компоненты</title>
    <link rel="icon" href="favicon.png"/>

    <!-- Load Vendor Libraries -->
    <link rel="stylesheet" href="https://unpkg.com/normalize.css@7.0.0/normalize.css"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,400,400i,700,700i&subset=cyrillic"/>
    <script src="https://unpkg.com/vue"></script>

    <!-- Load an Application files -->
    <style><?php
        require __DIR__ . '/../dist/laravel-ui.min.css';
        copy(__DIR__ . '/../dist/laravel-ui.min.css.map', __DIR__ . '/laravel-ui.min.css.map');
    ?></style>
    <script><?php
        require __DIR__ . '/../dist/laravel-ui.min.js';
        copy(__DIR__ . '/../dist/laravel-ui.min.js.map', __DIR__ . '/laravel-ui.min.js.map');
    ?></script>

    <!-- An Example styles -->
    <style>
        #app {
            width: 960px;
            margin: 50px auto;
        }
    </style>
</head>
<body>
    <main id="app">
        <h1>LaravelRUS UI</h1>

        <!-- HEADINGS -->
        <?php require __DIR__ . '/partials/headings.php'; ?>

        <!-- BUTTON -->
        <?php require __DIR__ . '/partials/button.php'; ?>

        <!-- TEXT -->
        <?php require __DIR__ . '/partials/text.php'; ?>

        <!-- PASSWORD -->
        <?php require __DIR__ . '/partials/password.php'; ?>

        <!-- PASSWORD -->
        <?php require __DIR__ . '/partials/select.php'; ?>

        <!-- CHECKBOX -->
        <?php require __DIR__ . '/partials/checkbox.php'; ?>
    </main>

    <script>
        new Vue({ el: '#app' })
    </script>
</body>
</html>
<?php
$content = ob_get_contents();
// Minimise
$content = preg_replace('/>\s+</iu', '><', $content);
ob_end_clean();
echo $content;

file_put_contents(__DIR__ . '/index.html', $content);
?>
