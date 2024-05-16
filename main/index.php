<!DOCTYPE html>
<html lang="ru">
<?php include './assets/php/head.php'; ?>
<body class="bg-neutral-50 text-neutral-800 dark:bg-neutral-950 dark:text-neutral-100 select-none scroll-smooth overflow-x-hidden transition-all duration-150 ease-in-out">
<?php include './assets/php/nav.php'; ?>
<?php include './assets/php/nav-mobile.php'; ?>

    <div class="w-screen xs:w-4/5 xs:mx-auto md:w-3/4 md:flex md:items-end md:justify-between lg:w-2/3 mt-64 px-4 sm:px-0">
        <div class="w-full xl:w-2/5">
            <div class="-z-10 hidden xl:flex absolute left-1/4 mt-20 -ml-48 w-48 h-48 bg-[#3D7DE0] blur-3xl opacity-30"></div>
            <div class="-z-10 hidden xl:flex absolute right-1/4 -mr-6 w-64 h-64 bg-[#3D7DE0] blur-3xl opacity-60"></div>
            <span class="text-sm px-3 py-1 border border-neutral-200 dark:border-neutral-800 rounded-full transition-all duration-150 ease-in-out">#re:0</span>
            <h1 class="text-4xl md:text-5xl font-bold mt-6">Мы начинаем,</h1>
            <h1 class="text-4xl md:text-5xl font-black text-[#3D7DE0]">ЭЛЛЕЙWORLD</h1>
            <p class="text-sm font-medium text-neutral-400 dark:text-neutral-500 mt-2">Дождались! Сервер запущен,<br>и функционирует! Ждём Вас!</p>
            <div class="md:flex items-center md:space-x-1 space-y-1 md:space-y-0 mt-4">
                <button id="button-copy-ip" title="Скопировать IP сервера" type="button" class="w-full h-10 xs:w-2/3 md:w-40 md:h-12 flex items-center justify-center space-x-2 bg-neutral-900 dark:bg-white/5 hover:bg-[#3D7DE0] dark:hover:bg-[#3D7DE0] rounded-full outline-none focus:outline-none focus-visible:outline-offset-0 focus-visible:outline-[#3D7DE0] focus-visible:bg-black/5 dark:focus-visible:bg-white/5 transition-all duration-150 ease-in-out">
                    <span  class="text-sm text-zinc-100 font-medium">Скопировать IP</span>
                </button>
                <button title="На страницу с обзором сервера" onclick="window.location.href = './wiki/about.html';" type="button" class="w-full h-10 xs:w-2/3 md:w-40 md:h-12 flex items-center justify-center space-x-2 bg-neutral-900 dark:bg-white/5 hover:bg-[#3D7DE0] dark:hover:bg-[#3D7DE0] rounded-full outline-none focus:outline-none focus-visible:outline-offset-0 focus-visible:outline-[#3D7DE0] focus-visible:bg-black/5 dark:focus-visible:bg-white/5 transition-all duration-150 ease-in-out">
                    <span class="text-sm text-zinc-100 font-medium">Подробнее</span>
                </button>
            </div>
        </div>
        <div class="hidden lg:flex w-3/5 h-80 bg-contain bg-no-repeat bg-right-bottom" style="background-image: url(./assets/img/banner1.png);"></div>
    </div>

    <div class="w-screen xs:w-4/5 xs:mx-auto md:w-3/4 md:flex md:items-stretch md:justify-between space-y-4 md:space-y-0 md:space-x-4 lg:w-2/3 mt-48 px-4 xs:px-0">
        <div class="md:w-1/2 py-20 border border-neutral-300 dark:border-neutral-800 rounded-3xl transition-all duration-150 ease-in-out">
            <div class="w-3/4 mx-auto">
                <h1 class="text-lg md:text-xl font-bold">Ежедневные рулетки</h1>
                <p class="text-xs lg:text-sm font-medium mt-2 text-neutral-400 dark:text-neutral-500 transition-all duration-150 ease-in-out">Мы добавили на сервер рулетки, получаемые за ежедневный вход на сервер.</p>
                <p class="text-xs lg:text-sm font-medium mt-1 text-neutral-400 dark:text-neutral-500 transition-all duration-150 ease-in-out">С рулеток вы можете выбить случайные декоративные головы, товары из нашего магазина, и даже донат-валюту на сайте!</p>
            </div>
        </div>
        <div class="md:w-1/2 py-20 bg-[#3D7DE0] rounded-3xl">
            <div class="w-3/4 mx-auto">
                <h1 class="text-lg md:text-xl font-bold text-white">Новый дизайн</h1>
                <p class="text-xs lg:text-sm font-medium mt-2 text-neutral-300">Мы наняли дизайнеров, составили полную картину дизайнов сервера и сайта, и сделали всё по красоте!</p>
                <p class="text-xs lg:text-sm font-medium mt-2 text-neutral-300">Глаза не режет, и соответственно - играть на сервере будет намного приятнее.</p>
            </div>
        </div>
    </div>

    <div class="w-screen xs:w-4/5 xs:mx-auto md:w-3/4 md:flex md:items-stretch md:justify-between space-y-4 md:space-y-0 md:space-x-4 lg:w-2/3 mt-4 mb-48 px-4 xs:px-0">
        <div class="md:w-1/2 py-20 bg-[#B28CE1] rounded-3xl">
            <div class="w-3/4 mx-auto">
                <h1 class="text-lg md:text-xl font-bold text-white">Стабильность</h1>
                <p class="text-xs lg:text-sm font-medium mt-2 text-neutral-200">Наконец-то у хостинга нет проблем! Они подключили новую защиту от DDOS, у них новый провайдер нод!</p>
                <p class="text-xs lg:text-sm font-medium mt-2 text-neutral-200">Благодаря этому на сервер теперь можно зайти в любое время суток. Больше не будет резких выключений по тех. причинам!</p>
            </div>
        </div>
        <div class="md:w-1/2 py-20 border border-neutral-300 dark:border-neutral-800 rounded-3xl transition-all duration-150 ease-in-out">
            <div class="w-3/4 mx-auto">
                <h1 class="text-lg md:text-xl font-bold">Администрация</h1>
                <p class="text-xs lg:text-sm font-medium mt-2 text-neutral-400 dark:text-neutral-500 transition-all duration-150 ease-in-out">Скажем Нет! Администрации по блату. Теперь мы лично отбираем администрацию по заявкам, и не допускаем к ней некомпетентных людей.</p>
                <p class="text-xs lg:text-sm font-medium mt-1 text-neutral-400 dark:text-neutral-500 transition-all duration-150 ease-in-out">Переписали правила сервера, чтобы Вам было комфортно играть, и они вас никак не стесняли, и не пугали размерами!</p>
            </div>
        </div>
    </div>

    <div class="w-screen md:w-3/4 md:mx-auto md:flex md:items-start md:justify-between lg:w-2/3 px-4 mb-48 sm:px-0">
        <div class="hidden lg:flex w-3/5 h-80 bg-contain bg-no-repeat bg-left-top" style="background-image: url(./assets/img/banner2.png);"></div>
        <div class="-z-10 hidden xl:flex absolute left-1/4 -ml-24 mt-16 w-64 h-64 bg-[#B28CE1] blur-3xl opacity-60"></div>
        <div class="-z-10 hidden xl:flex absolute right-1/4 -mr-48 w-64 h-64 bg-[#B28CE1] blur-3xl opacity-30"></div>
        <div class="w-full xl:w-2/5 text-end">
            <span class="text-sm px-3 py-1 border border-neutral-200 dark:border-neutral-800 rounded-full transition-all duration-150 ease-in-out">#обновления</span>
            <h1 class="text-4xl md:text-5xl font-bold mt-6">Узнай больше</h1>
            <p class="text-sm font-medium text-neutral-400 dark:text-neutral-500 mt-2">Если мы будем помещать всю информацию<br>об обновлениях сюда, придётся долго листать!</p>
            <div class="flex items-center justify-end space-x-1 mt-4">
                <button title="На страницу обновлений" onclick="window.location.href = './wiki/updates.html';" type="button" class="w-full h-10 xs:w-2/3 md:w-40 md:h-12 flex items-center justify-center space-x-2 bg-neutral-900 dark:bg-white/5 hover:bg-[#B28CE1] dark:hover:bg-[#B28CE1] rounded-full outline-none focus:outline-none focus-visible:outline-offset-0 focus-visible:outline-[#3D7DE0] focus-visible:bg-black/5 dark:focus-visible:bg-white/5 transition-all duration-150 ease-in-out">
                    <span class="text-sm text-neutral-100 font-medium">Перейти</span>
                </button>
            </div>
        </div>
    </div>
<?php include './assets/php/footer.php'; ?>
<?php include './assets/php/scripts.php'; ?>
</body>
</html>