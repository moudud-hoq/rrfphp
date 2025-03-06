<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=h1, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/main.css">
    <title>Document</title>
</head>

<body>



    <?php
    // Active link চেক করার ফাংশন
    function is_active($check)
    {
        return (strpos($_SERVER['REQUEST_URI'], $check) !== false) ? 'active' : '';
    }

    // মেনু লিংকের অ্যারে
    $nav_links = [
        "index.php" => "Home",
        "about.php" => "About",
        "contact.php" => "Contact",
        "services.php" => "Services",
        "portfolio.php" => "Portfolio"
    ];
    ?>

    <header>
        <h1>Welcome to My Website</h1>
        <p>This is a simple website structure with some CSS and HTML.</p>
    </header>
    <nav>
        <?php foreach ($nav_links as $link => $title) : ?>
            <a class="<?php echo is_active($link); ?>" href="<?php echo $link; ?>"><?php echo $title; ?></a>
        <?php endforeach; ?>
    </nav>
    <div class="content">