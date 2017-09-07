<?php ob_start(); ?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <title>LaravelRUS UI &mdash; Компоненты</title>
    <link rel="icon" href="./favicon.png"/>

    <!-- Load Vendor Libraries -->
    <link rel="stylesheet" href="https://unpkg.com/normalize.css@7.0.0/normalize.css"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,400,400i,700,700i&subset=cyrillic"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Mono:400,400i,700,700i" />
    <script src="https://unpkg.com/babel-polyfill@6.26.0/dist/polyfill.min.js"></script>
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
        .examples .button {
            min-width: 100px;
        }
        .examples .input,
        .examples .select,
        .examples .password {
            min-width: 250px;
        }

        .examples tbody td:last-child {
            width: 250px;
        }
    </style>
</head>
<body>
    <main id="app">
        <h1>LaravelRUS UI</h1>

        <ul>
            <li>
                <h4>HTML компоненты</h4>
                <ul>
                    <li><a href="#headings">Headings</a></li>
                </ul>
            </li>
            <li>
                <h4>Кастомные компоненты</h4>
                <ul>
                    <li><a href="#button">Button</a></li>
                    <li><a href="#input">Text</a></li>
                    <li><a href="#password">Password</a></li>
                    <li><a href="#select">Select + Option</a></li>
                    <li><a href="#tooltip">Tooltip</a></li>
                    <li><a href="#checkbox">Checkbox</a></li>
                </ul>
            </li>
        </ul>

        <h2 class="underline">HTML Elements</h2>

        <!-- HEADINGS -->
        <?php require __DIR__ . '/partials/headings.php'; ?>

        <h2 class="underline">Custom Elements</h2>

        <!-- BUTTON -->
        <?php require __DIR__ . '/partials/button.php'; ?>

        <!-- TEXT -->
        <?php require __DIR__ . '/partials/text.php'; ?>

        <!-- PASSWORD -->
        <?php require __DIR__ . '/partials/password.php'; ?>

        <!-- PASSWORD -->
        <?php require __DIR__ . '/partials/select.php'; ?>

        <!-- TOOLTIP -->
        <?php require __DIR__ . '/partials/tooltip.php'; ?>

        <!-- CHECKBOX -->
        <?php require __DIR__ . '/partials/checkbox.php'; ?>
    </main>

    <script>
        new Vue({ el: '#app' })
    </script>
</body>
</html><?php
$content = ob_get_contents();

// Minimise
// $content = preg_replace('/>\s+</iu', '><', $content);

ob_end_clean();
file_put_contents(__DIR__ . '/index.html', $content);
echo $content;
?>
