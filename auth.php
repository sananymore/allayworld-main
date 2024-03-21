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

    <style>
        #menu {
            transition: opacity 0.3s ease-in-out;
        }

        #menu.hidden {
            opacity: 0;
        }

        .loading-animation {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 50px;
            height: 50px;
            border: 3px solid rgba(0, 0, 0, 0.3);
            border-radius: 50%;
            border-top-color: #000;
            animation: spin 1s infinite ease-in-out;
            z-index: 9999;
            display: none;
        }

        @keyframes spin {
            0% {
                transform: translate(-50%, -50%) rotate(0deg);
            }
            100% {
                transform: translate(-50%, -50%) rotate(360deg);
            }
        }

        .loading {
            display: block;
        }

        .loading.hidden {
            display: none;
        }

    </style>
</head>
<body class="select-none cursor-default scroll-smooth bg-white text-neutral-900 overflow-x-hidden">
    <div class="z-50 w-full md:w-1/2 fixed md:left-1/4 top-0">
        <!-- NAVBAR -->
        <div id="navbar" class="py-2 md:py-4 px-4 md:rounded-b-3xl bg-slate-200 flex justify-center md:justify-between items-center smooth">
            <!-- LOGO -->
            <button onclick="window.location.href='./'" title="На главную" class="w-10 h-10 hidden md:flex justify-center items-center rounded-full hover:bg-black/5 smooth">
                <div class="w-10 h-10 bg-favicon-clean-blue-500 bg-cover rounded-full"></div>
            </button>

            <!-- BUTTONS -->
            <div class="flex">
                <button onclick="window.location.href='./'" title="Главная" class="w-12 md:w-10 h-16 md:h-10 flex justify-center items-center rounded-full text-blue-500 hover:text-neutral-900 hover:bg-black/5 smooth">
                    <div class="fas fa-home"></div>
                </button>
                <button onclick="window.location.href='./shop'" title="Магазин" class="w-12 md:w-10 h-16 md:h-10 flex justify-center items-center rounded-full text-blue-500 hover:text-neutral-900 hover:bg-black/5 smooth">
                    <div class="fas fa-credit-card"></div>
                </button>
                <button onclick="window.location.href='./wiki/start'" title="Википедия" class="w-12 md:w-10 h-16 md:h-10 flex justify-center items-center rounded-full text-blue-500 hover:text-neutral-900 hover:bg-black/5 smooth">
                    <div class="fas fa-note-sticky"></div>
                </button>
                <button onclick="window.location.href='./auth'" title="Авторизация" class="w-12 md:w-10 h-16 md:h-10 flex justify-center items-center rounded-full text-blue-500 hover:text-neutral-900 hover:bg-black/5 smooth">
                    <div class="fas fa-right-to-bracket"></div>
                </button>
                <!-- MENU TOGGLE -->
                <button onclick="toggleMenu()" title="Остальное" class="w-12 md:w-10 h-16 md:h-10 flex justify-center items-center rounded-full text-blue-500 hover:text-neutral-900 hover:bg-black/5 smooth">
                    <div class="fas fa-ellipsis-vertical"></div>
                </button>
            </div>
        </div>
        <!-- MENU -->
        <div id="menu" class="mt-1 w-full flex justify-end items-center hidden" style="opacity: 0; transition: opacity 0.3s ease-in-out;">
            <div class="block w-full md:w-16 bg-slate-200 rounded-b-3xl rounded-t-lg p-2">
                <button onclick="window.location.href='./discord'" title="Discord" class="w-full h-16 md:h-10 flex justify-center items-center rounded-lg text-blue-500 hover:text-neutral-900 hover:bg-black/5 smooth">
                    <div class="fab fa-discord mr-2 md:mr-0"></div>
                    <span class="flex md:hidden text-neutral-900 font-bold">Discord</span>
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
    </div>

    <div class="w-screen h-[65rem] md:h-[45rem] bg-forest bg-cover bg-top">
        <div class="w-screen h-[65rem] md:h-[45rem] backdrop-blur-sm">
            <div id="heroContent" class="flex justify-center items-center h-screen">
                <div class="w-1/3 block bg-slate-200 backdrop-blur-xl rounded-3xl py-4 px-2 md:py-8">
                <?php
                    if(isset($_GET['status']))
                    {
                        echo "<div style='margin:5px;padding:5px;background-color:#e5e7eb;'><center><strong>";
                        if($_GET['status'] == "success_login") echo "Вы успешно авторизовались";
                        elseif($_GET['status'] == "failed_login") echo "Вы неправильно ввели логин или пароль";
                        elseif($_GET['status'] == "success_register") echo "Вы успешно зарегестрировали свой аккаунт";
                        elseif($_GET['status'] == "failed_register") echo "Не удалось зарегистрировать аккаунт";
                        else echo $_GET['status'];
                        echo "</div></strong></center>";
                    }
                    ?>
                    
                    <form id="loginForm" class="w-1/2 mx-auto"  action="auth_handler.php" method="post">
                        <h2 class="text-2xl font-semibold mb-4">Вход</h2>
                        <div class="mb-4">
                          <label for="loginName" class="block text-sm font-bold mb-2">Логин</label>
                          <input type="text" id="loginName" name="loginName" class="w-full px-3 py-2 border rounded-md" required>
                        </div>
                        <div class="mb-4">
                          <label for="loginPassword" class="block text-sm font-bold mb-2">Пароль</label>
                          <input type="password" id="loginPassword" name="loginPassword" class="w-full px-3 py-2 border rounded-md" required>
                        </div>
                        <div class="flex space-x-4">
                            <button name="login" type="submit" class="bg-blue-500 text-slate-200 px-4 py-2 rounded-md hover:bg-blue-400 focus:outline-none focus:shadow-outline-blue">Войти</button>
                            <button type="button" onclick="toggleForm()" class="underline px-4 py-2 rounded-md hover:bg-black/5 focus:outline-none focus:shadow-outline-blue">Нет аккаунта?</button>
                        </div>
                    </form>

                    <form id="registerForm" class="w-1/2 mx-auto" style="display: none;" action="auth_handler.php" method="post">
                        <h2 class="text-2xl font-semibold mb-4">Регистрация</h2>
                        <div class="mb-4">
                            <label for="registerName" class="block text-sm font-bold mb-2">Логин</label>
                            <input type="text" id="registerName" name="registerName" class="w-full px-3 py-2 border rounded-md" required>
                        </div>
                        <div class="mb-4">
                            <label for="registerPassword" class="block text-sm font-bold mb-2">Пароль</label>
                            <input type="password" id="registerPassword" name="registerPassword" class="w-full px-3 py-2 border rounded-md" required>
                        </div>
                        <div class="flex space-x-4">
                            <button name="register" type="submit" class="bg-emerald-500 text-slate-200 px-4 py-2 rounded-md hover:bg-emerald-400 focus:outline-none focus:shadow-outline-blue">Далее</button>
                            <button type="button" onclick="toggleForm()" class="underline px-4 py-2 rounded-md hover:bg-black/5 focus:outline-none focus:shadow-outline-blue">Есть аккаунт?</button>
                        </div>
                    </form>
                </div>
            </div>
            
            <div class="custom-shape-divider-bottom-1710037880">
                <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                    <path d="M0,0V46.29c47.79,22.2,103.59,32.17,158,28,70.36-5.37,136.33-33.31,206.8-37.5C438.64,32.43,512.34,53.67,583,72.05c69.27,18,138.3,24.88,209.4,13.08,36.15-6,69.85-17.84,104.45-29.34C989.49,25,1113-14.29,1200,52.47V0Z" opacity=".25" class="shape-fill"></path>
                    <path d="M0,0V15.81C13,36.92,27.64,56.86,47.69,72.05,99.41,111.27,165,111,224.58,91.58c31.15-10.15,60.09-26.07,89.67-39.8,40.92-19,84.73-46,130.83-49.67,36.26-2.85,70.9,9.42,98.6,31.56,31.77,25.39,62.32,62,103.63,73,40.44,10.79,81.35-6.69,119.13-24.28s75.16-39,116.92-43.05c59.73-5.85,113.28,22.88,168.9,38.84,30.2,8.66,59,6.17,87.09-7.5,22.43-10.89,48-26.93,60.65-49.24V0Z" opacity=".5" class="shape-fill"></path>
                    <path d="M0,0V5.63C149.93,59,314.09,71.32,475.83,42.57c43-7.64,84.23-20.12,127.61-26.46,59-8.63,112.48,12.24,165.56,35.4C827.93,77.22,886,95.24,951.2,90c86.53-7,172.46-45.71,248.8-84.81V0Z" class="shape-fill"></path>
                </svg>
            </div>
        </div>
    </div>

    <script зsrc="./assets/JS/menuToggler.js"></script>
    <script src="./assets/JS/registerForm.js"></script>

</body>
</html>