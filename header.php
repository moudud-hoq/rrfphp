<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=h1, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/main.css">
    <title>Document</title>
</head>

<body>

    <!-- <?php echo var_dump(value: $_SERVER['REQUEST_URI']); ?>
    <?php
    $uri = $_SERVER['REQUEST_URI'];
    $path = parse_url($uri, PHP_URL_PATH);
    echo $path;
    ?> -->

    <?php
    function is_active($check)
    {
        $requested_uri = $_SERVER['REQUEST_URI'];

        $search = strpos($requested_uri, $check);
        if ($search !== false) {
            echo 'active';
        }
    }

    ?>

    <header>
        <h1>Welcome to My Website</h1>
        <p>This is a simple website structure with some CSS and HTML.</p>
    </header>
    <nav>
        <a class="<?php echo is_active('index'); ?>" href="index.php">Home</a>
        <a class="<?php echo is_active('about'); ?>"  href="about.php">About</a>
        <a class="<?php echo is_active('contact'); ?>"  href="contact">Contact</a>
        <a class="<?php echo is_active('services'); ?>"  href="services">Services</a>
        <a class="<?php echo is_active('portfolio'); ?>"  href="portfolio">Portfolio</a>
    </nav>

    <div class="content">