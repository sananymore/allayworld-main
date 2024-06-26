<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#3D7DE0">
    <title>ЭЛЛЕЙWORLD</title>
    <meta name="description" content="Твоя полярная звезда среди серверов Minecraft">
    <meta property="og:url" content="http://allayworld.fun/">
    <meta property="og:type" content="website">
    <meta property="og:title" content="ЭЛЛЕЙWORLD">
    <meta property="og:description" content="Твоя полярная звезда среди серверов Minecraft">
    <meta property="og:image" content="./assets/img/opengraph.png">
    <meta property="twitter:domain" content="allayworld.fun">
    <meta property="twitter:url" content="http://allayworld.fun/">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="ЭЛЛЕЙWORLD">
    <meta name="twitter:description" content="Твоя полярная звезда среди серверов Minecraft">
    <meta name="twitter:image" content="./assets/img/opengraph.png">
    <link rel="icon" type="image/png" href="./assets/img/favicon.png">
    <link rel="preload" href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <link rel="preload" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="./assets/css/main.min.css">
</head>
<body class="bg-neutral-100 dark:bg-neutral-950 text-neutral-900 dark:text-neutral-100 overflow-x-hidden scroll-smooth">
    <?php include './elements/navbar.html'; ?>
    <div class="mt-16"></div>
    <?php
        $requested_page = isset($_GET['p']) ? $_GET['p'] : 'index';
        
        $content_file = './content/' . $requested_page . '.html';
        
        if (file_exists($content_file)) {
            include $content_file;
        } else {
            include './content/404.html';
        }
    ?>
</body>
</html>