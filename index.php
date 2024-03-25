<?php
    require_once('configuration.php');
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/CSS/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link rel="icon" type="image/png" href="./assets/IMG/favicon-clean-slate-200.png">
    <meta property="og:title" content="ЭW4">
    <meta property="og:description" content="Полностью перезагруженный 4-й сезон сервера ЭллейWorld!">
    <meta property="og:image" content="./assets/IMG/banner.png">
    <meta property="og:url" content="https://allayworld.org/">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="ЭW4">
    <meta property="og:locale" content="ru_RU">
    <title>ЭллейWorld4</title>
</head>

<body class="select-none cursor-default scroll-smooth bg-slate-200 text-neutral-800 overflow-x-hidden">
    

    <!-- TOP NAVBAR -->
    <?php 
        require('./assets/ELEMENTS/nav.php');
    ?>
    

    <!-- HERO WRAPPER -->
    <div class="z-0 w-screen h-[65rem] md:h-[45rem] bg-forest bg-cover bg-top">

        <!-- BLUR LAYER -->
        <div class="z-0 w-screen h-[65rem] md:h-[45rem] backdrop-blur-sm">

            <!-- HERO CONTENT -->
            <div class="pt-[4.5rem] px-4 md:px-0 md:w-1/2 md:mx-auto">

                <!-- GREETING -->
                <?php 
                    require('./assets/ELEMENTS/INDEX/greeting.php');
                ?>

                <!-- WRAPPER 2 COLS -->
                <div class="block md:flex md:space-x-4 mt-4">

                    <!-- ACCOUNT -->
                    <?php 
                        require('./assets/ELEMENTS/INDEX/account.php');
                    ?>
                    
                    <!-- SOON -->
                    <?php 
                        require('./assets/ELEMENTS/INDEX/soon.php');
                    ?>
                </div> 
            </div>
        </div>
    </div>

    <!-- OTHER SITE CONTENT -->
    <div class="z-50 rounded-t-3xl mx-auto p-4">

        <div class="w-full md:w-1/2 mx-auto p-4">
            
            <div class="bg-banner1 w-full h-48 bg-cover bg-center rounded-3xl mb-4"></div>
            <div class="flex justify-between items-center space-x-8">
                <h1 class="text-2xl text-center font-bold text-neutral-800 w-1/3">Перезагрузка сервера</h1>
                <p class="mt-1 w-2/3">Мы стали лучше! И будем стремиться к лучшему. В прошлом наша команда действительно халатно отнеслись к выбору администрации сервера, и из-за этого мы потеряли хватку и лишились наших дорогих игроков. По-этому мы решили одуматься, осмотреться по сторонам, и заняться сервером по полной.</p>
            </div>
            
        </div>

    </div>

    <div class="bg-white w-full p-4">

        <div class="w-full md:w-1/2 mx-auto p-4">
            
            <div class="bg-banner2 w-full h-48 bg-cover bg-center rounded-3xl mb-4"></div>
            <div class="flex justify-between items-center space-x-8">
                <h1 class="text-2xl text-center font-bold text-neutral-800 w-1/3">Новый сервер</h1>
                <p class="mt-1 w-2/3">Долго же пришлось ждать анархию... Ну у нас есть ещё одна хорошая новость по поводу серверов! Мы готовим для вас сервер, на котором будет играть намного веселее чем на вместевзятых серверах Ваниллы и Анархии! Стройте свои догадки, что это за сервер, и ждите новостей по поводу его открытия!</p>
            </div>
            
        </div>

    </div>

    <script src="./assets/JS/ToggleNavMenu.min.js"></script>
    <script src="./assets/JS/CloseStatusBar.min.js"></script>

</body>
</html>