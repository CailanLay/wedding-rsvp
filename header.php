<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Ovo&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;700&display=swap" rel="stylesheet">

    <title>RSVP</title>

    <?php wp_head(); ?>
</head>
<body>

    <?php $nav_links = build_nav_tree(wp_get_nav_menu_items('primary')); ?>

    <header class='alt-top'>
        <div class="frame">
            <nav>
                <ul class='links'>
                    <?php foreach($nav_links as $link) {  ?>
                        <li>
                            <a href="<?= $link->url ?>" class='<?= implode(' ', $link->classes) ?>'><?= $link->title ?></a>
                        </li>
                    <?php } ?>
                </ul>
            </nav>
        </div>
    </header>


    
<main>