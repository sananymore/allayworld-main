<div class="z-50 w-full md:w-1/2 fixed md:left-1/4 top-0">
    <div id="navbar" class="py-2 px-4 md:rounded-b-3xl bg-slate-200 flex justify-center md:justify-between items-center smooth">
        <!-- Логотип -->
        <button onclick="window.location.href='./'" title="На главную" class="w-10 h-10 hidden md:flex justify-center items-center rounded-full hover:bg-black/5 smooth">
            <div class="w-10 h-10 bg-favicon-clean-blue-500 bg-cover rounded-full"></div>
        </button>
        <!-- Кнопки -->
        <div class="flex">
            <!-- Главная -->
            <button onclick="window.location.href='./'" title="Главная" class="button1 smooth">
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
            <?php
                if(!empty($_SESSION)) print_r(
                    "<button onclick=\"window.location.href='./handler?action=delete&content=session'\" title='Выйти' class='w-12 md:w-10 h-16 md:h-10 flex justify-center items-center rounded-full text-blue-500 hover:text-neutral-900 hover:bg-black/5 smooth'>
                        <div class='fas fa-xmark'></div>
                    </button>"
                );
                else print_r(
                    "<button onclick=\"window.location.href='./auth'\" title='Авторизация' class='w-12 md:w-10 h-16 md:h-10 flex justify-center items-center rounded-full text-blue-500 hover:text-neutral-900 hover:bg-black/5 smooth'>
                        <div class='fas fa-right-to-bracket'></div>
                    </button>"
                );
            ?>

            <!-- Включение меню -->
            <button onclick="toggleMenu(event)" title="Остальное" class="w-12 md:w-10 h-16 md:h-10 flex justify-center items-center rounded-full text-blue-500 hover:text-neutral-900 hover:bg-black/5 smooth">
                <div class="fas fa-ellipsis-vertical"></div>
            </button>
        </div>
    </div>

    <?php
        if(isset($_GET['status']))
        {
            echo "<div id='loginStatus' class='z-0 mt-1 p-2 bg-slate-200 text-center items-center justify-between px-8 flex font-mono fixed rounded-3xl w-1/2 mx-auto'><span>";
            if($_GET['status'] == "success_login") echo "Вы успешно авторизовались";
            elseif($_GET['status'] == "failed_login") echo "Вы неправильно ввели логин или пароль";
            elseif($_GET['status'] == "success_register") echo "Вы успешно зарегестрировали свой аккаунт";
            elseif($_GET['status'] == "failed_register") echo "Не удалось зарегистрировать аккаунт";
            else echo $_GET['status'];
            echo "</span><button onclick='closeDivAndRemoveParameters()' title='Закрыть окно' class='w-12 md:w-10 h-16 md:h-10 flex justify-center items-center rounded-full text-blue-500 hover:text-neutral-900 hover:bg-black/5 smooth'><div class='fas fa-xmark'></div></button></div>";
        }
    ?>
    
    <!-- Меню -->
    <div id="menu" class="z-50 mt-1 w-full hidden justify-end items-center" style="opacity: 0; transition: opacity 0.3s ease-in-out;">

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
</div>