<!DOCTYPE html>
<html lang="ru">
<?php include './elements/head.html'; ?>
<body class="bg-neutral-100 dark:bg-neutral-950 text-neutral-900 dark:text-neutral-100 overflow-x-hidden">
    <!-- <?php include './elements/loader.html'; ?> -->
    <?php include './elements/navbar.html'; ?>
    <div class="mt-64"></div>
    <?php
    function current_url() {
        $url = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http";
        $url .= "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
        return $url;
    }

    $current_url = current_url();

    $url_parts = parse_url($current_url);
    $path = $url_parts['path'];

    if (isset($_GET['page'])) {
        $page = $_GET['page'];
    } else {
        include "./content/404.html?page=fur";
        exit();
    }

    if ($page === '' || strpos($page, '/') !== false || strpos($page, '.') !== false) {
        include "./content/404.html";
        exit();
    }
    if( $page == 'fur'){
        printf("
        <div style='display:flex; text-wrap: nowrap; height: 1024px; flex-direction: column;'>
        /root/furry.txt                                                                                                 
        ⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⢸⡄⠀⠀⠀⠀⠀⢀⣠⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
        ⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⣀⣀⡀⣠⠃⠇⢀⡠⠤⠖⠒⠉⢸⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
        ⠀⠀⠀⠀⠀⣀⠠⠖⠊⠉⠀⠀⠈⠁⢀⡟⠁⠀⠀⠀⠀⠀⡆⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
        ⢀⢀⡠⠔⠊⠁⠀⠀⠀⠀⠀⠀⠀⠀⠀⣀⡴⢦⠀⠀⢀⣜⣀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
        ⠀⢣⡠⠔⢒⣆⡀⡀⠀⠀⠀⠀⢀⡀⠀⠉⠀⣸⠀⠀⠀⠀⠀⠈⠉⡆⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
        ⠀⠀⠑⢤⡀⠁⣧⠆⠀⢠⣶⣿⣿⢢⠻⢤⡻⠆⠀⠀⠀⠀⠀⢀⠜⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
        ⠀⠀⠀⠀⠈⠣⢄⡀⠀⠟⠿⣿⠟⣬⡄⣿⣿⣤⡄⠂⣠⢆⡤⠋⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
        ⠀⠀⠀⠀⠀⠀⠀⢧⠤⢤⣤⣙⣀⣈⣁⣸⡿⠥⣀⢻⠓⠉⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
        ⠀⠀⠀⠀⠀⠀⠀⢀⡠⢼⣿⣿⣿⣿⡿⠿⠿⣿⢿⠛⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⢀⣀⡀⠀⠀⣀⡀⠀⠲⣶⢄⣠⢶⠀⠀⠀
        ⠀⠀⠀⠀⢀⡴⠒⠉⠀⠀⠐⢿⣿⠇⠀⠀⠀⠀⠀⢳⠀⠀⠀⠀⠀⠀⠀⢀⡰⠊⠉⠀⠀⠀⠀⠀⠉⠐⠤⣸⠀⠛⢼⠀⠀⠀
        ⠀⠀⠀⡠⢿⣶⠔⠒⠒⠤⡀⠀⠀⠀⠀⣀⡀⠀⠀⠚⢆⠀⠀⠀⠀⠀⢠⡎⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠽⠀⠀⡟⠀⠀⠀
        ⠀⠀⢠⠃⢸⣯⠀⠀⠀⠀⢼⡆⣰⠋⠁⠉⣛⡏⠑⣄⠈⡆⠀⠀⠀⠀⠀⠈⠉⣢⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠘⢧⠀⠀⠀
        ⠀⠀⣦⠀⠀⠙⠗⠢⢄⣸⡠⠃⢳⣤⣤⣴⡾⠀⠀⠘⡄⢰⡀⠀⠀⠀⠀⡠⠊⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⢇⠀⠀
        ⠀⠀⠇⠁⠀⠀⢸⣀⣾⠿⣷⣴⠾⣿⡍⠘⣄⣀⠀⠀⠹⠀⠃⠀⠀⠀⢰⠁⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⢸⢸⡆
        ⠀⠀⢰⡀⠀⢤⣾⡾⠃⠀⠀⠀⠀⠈⢿⡄⢈⠀⠀⠀⠀⠀⡀⠀⠀⠀⢰⡠⠺⠃⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⡀⠀⠀⢸⡞⢸
        ⠀⣀⣀⣙⠒⠺⡏⠀⠀⠀⠀⠀⠀⠀⠀⢻⢄⢣⣀⠀⢀⡴⠛⠦⣀⠀⠀⠁⢀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠹⠀⠀⠘⠁⡸
        ⠀⢹⢾⡉⠉⠓⠧⡀⠀⠀⠀⠀⠀⠀⠀⠀⠙⢷⡏⠑⠊⠀⠀⠀⠈⠉⠀⠒⠚⢆⠀⣦⡀⠀⠀⠀⠀⠀⢠⢆⢀⠇⠀⠀⢰⠃
        ⠀⢸⠄⠑⣆⡀⠀⠈⢢⣀⡀⠴⠀⠀⠀⠀⠀⠀⠙⠦⡀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠑⠟⠹⡄⠀⠀⠀⢀⠎⠈⠚⠀⢠⠶⠃⠀
        ⠀⠀⠀⠘⢻⠑⠢⣀⡘⡏⢸⢤⠀⠀⠀⠀⠀⠀⢠⠝⣦⡀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⢳⠀⣠⠖⠉⠀⠀⠀⣠⠋⠀⠀⠀
        ⠀⠀⠀⠀⡀⠀⠀⠸⡯⠼⢏⡤⠃⢤⣀⣀⣀⠀⠸⠀⠀⠑⡄⢰⢄⡀⠀⠀⠀⠀⠀⠀⠀⠸⠞⠁⠀⠀⢀⣠⠾⣻⠀⠀⠀⠀
        ⠀⠀⠀⠀⢷⣿⣿⣿⡿⠋⠏⠀⠀⠀⣿⣿⣿⣿⣿⠀⠀⠀⠸⡜⠀⠈⠉⠈⠉⠉⠳⣄⠀⠀⠀⠀⠀⠀⠈⢀⡴⠁⠀⠀⠀⠀
        ⠀⠀⠀⠀⢸⣿⣿⣿⣧⣀⢀⣤⣤⡴⠿⠿⠿⢿⣿⡄⠀⠀⠀⠁⠀⠀⠀⠀⠀⠀⠀⠀⠈⠑⠒⠒⠒⠒⠋⠁⠀⠀⠀⠀⠀⠀
        ⠀⠀⠀⠀⢸⠟⣋⣡⣤⣤⣍⣯⣴⣶⣿⣿⣿⣿⣶⡇⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
        ⠀⠀⠀⠀⢸⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⠃⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
        ⠀⠀⠀⠀⠀⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
        </div>
        ");
    }
    if ($page !== '') {
        $page_path = "./content/$page.html";
    } elseif ($path === 'index.php') {
        $page_path = "./content/index.html";
    }else {
        $page_path = "./content/404.html";
    }

    if (file_exists($page_path)) {
        include $page_path;
    } else {
        include "./content/404.html";
    }
    ?>
    <div class="mb-64"></div>
</body>
</html>