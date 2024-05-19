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
        <style>
            .fade-out {
                opacity: 0;
                transition: opacity 0.25s ease-out;
            }
        </style>
    </head>
<body class="bg-neutral-100 dark:bg-neutral-950 text-neutral-900 dark:text-neutral-100 overflow-x-hidden select-none">
    <!-- <?php include './elements/loader.html'; ?> -->
    <?php include './elements/navbar.html'; ?>
    <div class="mt-64"></div>
    <?php
    // Определение пути к файлам контента
    $content_path = "./content/";

    // Получение текущего пути
    $current_path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

    // Если текущий путь указывает на корневой URL '/'
    if ($current_path == "/") {
        $content_file = $content_path . "index.html";
    } else {
        // Разбор пути и получение имени файла
        $path_parts = pathinfo($current_path);
        $content_file = $content_path . $path_parts['filename'] . ".html";
    }

    // Если файл контента существует, включаем его
    if (file_exists($content_file)) {
        include($content_file);
    } else {
        // Если файл не найден, показываем страницу 404
        $error_file = $content_path . "404.html";
        if (file_exists($error_file)) {
            include($error_file);
        } else {
            // Если страница 404 не найдена, выводим стандартное сообщение
            echo "404 Not Found";
        }
    }
    ?>
</body>
</html>