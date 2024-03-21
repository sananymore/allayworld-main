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

<body class="cursor-default scroll-smooth bg-slate-200 text-neutral-900 overflow-x-hidden">
    <!-- WRAPPER навигации -->
    <div class="z-50 w-full md:w-1/2 fixed md:left-1/4 top-0">
        <!-- Кнопки навигации -->
        <div id="navbar" class="py-2 px-4 md:rounded-b-3xl bg-slate-200 flex justify-center md:justify-between items-center smooth">
            <!-- Логотип -->
            <button onclick="window.location.href='./'" title="На главную" class="w-10 h-10 hidden md:flex justify-center items-center rounded-full hover:bg-black/5 smooth">
                <div class="w-10 h-10 bg-favicon-clean-blue-500 bg-cover rounded-full"></div>
            </button>
            <!-- Кнопки -->
            <div class="flex">
                <!-- Главная -->
                <button onclick="window.location.href='./'" title="Главная" class="w-12 md:w-10 h-16 md:h-10 flex justify-center items-center rounded-full text-blue-500 hover:text-neutral-900 hover:bg-black/5 smooth">
                    <div class="fas fa-home"></div>
                </button>
                <!-- Магазин -->
                <button onclick="window.location.href='./shop'" title="Магазин" class="w-12 md:w-10 h-16 md:h-10 flex justify-center items-center rounded-full text-blue-500 hover:text-neutral-900 hover:bg-black/5 smooth">
                    <div class="fas fa-credit-card"></div>
                </button>
                <!-- Википедия -->
                <button onclick="window.location.href='./wiki/start'" title="Википедия" class="w-12 md:w-10 h-16 md:h-10 flex justify-center items-center rounded-full text-blue-500 hover:text-neutral-900 hover:bg-black/5 smooth">
                    <div class="fas fa-note-sticky"></div>
                </button>
                <!-- Авторизация -->
                <button onclick="window.location.href='./auth'" title="Авторизация" class="w-12 md:w-10 h-16 md:h-10 flex justify-center items-center rounded-full text-blue-500 hover:text-neutral-900 hover:bg-black/5 smooth">
                    <div class="fas fa-right-to-bracket"></div>
                </button>
                <!-- Включение меню -->
                <button onclick="toggleMenu()" title="Остальное" class="w-12 md:w-10 h-16 md:h-10 flex justify-center items-center rounded-full text-blue-500 hover:text-neutral-900 hover:bg-black/5 smooth">
                    <div class="fas fa-ellipsis-vertical"></div>
                </button>
            </div>
        </div>
        
        <!-- Меню -->
        <div id="menu" class="mt-1 w-full flex justify-end items-center" style="opacity: 0; transition: opacity 0.3s ease-in-out;">
            <div class="block w-full md:w-16 bg-slate-200 rounded-b-3xl rounded-t-lg p-2">
                <button onclick="window.location.href='./discord'" title="Discord" class="w-full h-16 md:h-10 block md:flex justify-center items-center rounded-lg text-blue-500 hover:text-neutral-900 hover:bg-black/5 smooth">
                    <div class="fab fa-discord mr-2 md:mr-0"></div>
                    <span class="flex md:hidden text-neutral-900 font-bold text-center">Discord</span>
                </button>
                <button onclick="window.location.href='./vkontakte'" title="VKontakte" class="w-full h-16 md:h-10 flex justify-center items-center rounded-lg text-blue-500 hover:text-neutral-900 hover:bg-black/5 smooth">
                    <div class="fab fa-vk mr-2 md:mr-0"></div>
                    <span class="flex md:hidden text-neutral-900 font-bold">VKontakte</span>
                </button>
                <button onclick="window.location.href='./telegram'" title="Войти" class="w-full h-16 md:h-10 flex justify-center items-center rounded-lg text-blue-500 hover:text-neutral-900 hover:bg-black/5 smooth">
                    <div class="fab fa-telegram mr-2 md:mr-0"></div>
                    <span class="flex md:hidden text-neutral-900 font-bold">Telegram</span>
                </button>
                <button onclick="window.location.href='./replenishment'" title="Пополнить баланс" class="w-full h-16 md:h-10 flex justify-center items-center rounded-t-lg rounded-b-3xl text-blue-500 hover:text-neutral-900 hover:bg-black/5 smooth">
                    <div class="fas fa-coins mr-2 md:mr-0"></div>
                    <span class="flex md:hidden text-neutral-900 font-bold">Пополнить баланс</span>
                </button>
            </div>
        </div>
        <?php
            if(isset($_GET['status']))
            {
                echo "<div class='mt-1 p-4 bg-slate-200 text-center font-bold'>";
                if($_GET['status'] == "success_login") echo "Вы успешно авторизовались";
                elseif($_GET['status'] == "failed_login") echo "Вы неправильно ввели логин или пароль";
                elseif($_GET['status'] == "success_register") echo "Вы успешно зарегестрировали свой аккаунт";
                elseif($_GET['status'] == "failed_register") echo "Не удалось зарегистрировать аккаунт";
                else echo $_GET['status'];
                echo "</div>";
            }
        ?>
    </div>

    <!-- HERO PAGE CONTENT WRAPPER BG AND BG BLUR -->
    <div class="w-screen h-[65rem] md:h-[45rem] bg-forest bg-cover bg-top">
        <div class="w-screen h-[65rem] md:h-[45rem] backdrop-blur-sm">
            <!-- HERO PAGE CONTENT -->
            <div class="pt-[4.5rem] px-4 md:px-0 md:w-1/2 md:mx-auto">
                <div class="mt-12 bg-slate-200/10 backdrop-blur-xl py-4 px-2 md:py-2 rounded-3xl flex justify-between items-center space-x-8">
                    <div class="w-full md:w-2/3">
                        <h1 class="text-slate-200 font-black text-4xl md:text-3xl text-center">Мы ваша полярная звезда¹<br>в мире серверов Minecraft!</h1>
                        <p class="text-sm md:text-xs font-mono text-slate-200 text-center mt-2">¹| в нашем слогане не только путеводитель, но и символ качества</p>
                    </div>
                    <div class="w-1/3 mx-auto hidden md:flex">
                        <div class="w-48 h-48 bg-favicon-clean-slate-200 bg-cover bg-center rounded-3xl"></div>
                    </div>
                </div>
                <div class="block md:flex md:space-x-4 mt-4">
                    <div class="w-full md:w-1/3 bg-slate-200/10 backdrop-blur-xl py-4 px-6 rounded-3xl flex items-center justify-center h-52">
                        <div class="block w-full">
                            <h1 class="text-slate-200 font-bold text-xl text-center mb-2">Ваш аккаунт</h1>
                            <div class="mx-auto flex items-center justify-between">
                                <div class="text-slate-200 flex justify-center items-center w-10">
                                    <span class="fas fa-user"></span>
                                </div>
                                <span class="font-bold font-mono text-sm mt-0.5 text-slate-200 max-h-5 h-5 max-w-32 w-32 inline-block text-ellipsis overflow-hidden whitespace-nowrap">
                                
                                <!-- ИМЯ АККАУНТА -->
                                <?php
                                    if(isset($_SESSION['allay_player_name'])) echo $_SESSION['allay_player_name'];
                                    else echo "Войдите";
                                ?>

                                </span>
                                <button onclick="window.location.href='./profile/settings'" title="Редактировать" class="w-10 h-10 flex justify-center items-center rounded-full text-slate-200 hover:bg-black/5 smooth">
                                    <div class="fas fa-pen-to-square"></div>
                                </button>
                            </div>
                            <div class="mx-auto flex items-center justify-between mt-0.5">
                                <div class="text-slate-200 flex justify-center items-center w-10">
                                    <span class="fas fa-coins"></span>
                                </div>
                                <span class="font-bold font-mono text-sm mt-0.5 text-slate-200 max-h-5 h-5 max-w-32 w-32 inline-block text-ellipsis overflow-hidden whitespace-nowrap">
                                    Войдите
                                </span>
                                <button onclick="window.location.href='./replenishment'" title="Пополнить баланс" class="w-10 h-10 flex justify-center items-center rounded-full text-slate-200 hover:bg-black/5 smooth">
                                    <div class="fas fa-plus"></div>
                                </button>
                            </div>
                            <div class="flex w-full mt-0.5">
                                <button onclick="window.location.href='./shop'" title="Магазин" class="font-bold w-1/3 h-10 flex justify-center items-center rounded-full text-slate-200 hover:bg-black/5 smooth">
                                    Магазин
                                </button>
                                <button onclick="window.location.href='./profiles'" title="Профили игроков" class="font-bold w-2/3 h-10 flex justify-center items-center rounded-full text-slate-200 hover:bg-black/5 smooth">
                                    Профили игроков
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="w-full mt-4 md:mt-0 md:w-2/3 bg-slate-200/10 backdrop-blur-xl p-4 rounded-3xl flex items-center justify-center h-72 md:h-52">
                        
                    </div>
                </div>
            </div>
        </div>
    </div>

    <p class="mt-24">
        
    </p>

    <script src="./assets/JS/menuToggler.js"></script>

</body>
</html>