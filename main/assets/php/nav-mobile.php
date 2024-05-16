<div id="topnav-mobile" class="z-10 fixed top-0 left-0 w-screen md:hidden bg-neutral-100 dark:bg-neutral-900 p-2 flex items-center justify-center rounded-none xs:rounded-b-[1.8rem] transition-all duration-150 ease-in-out">
    <button title="На главную страницу" onclick="window.location.href = './';" type="button" class="w-24 h-12 flex items-center justify-center rounded-2xl hover:bg-black/5 dark:hover:bg-white/5 outline-none focus:outline-none focus-visible:outline-offset-0 focus-visible:outline-[#3D7DE0] focus-visible:bg-black/5 dark:focus-visible:bg-white/5 transition-all duration-150 ease-in-out">
        <div class="w-12 h-12 bg-cover bg-center bg-no-repeat" style="background-image: url(./assets/img/favicon-transparent.png);"></div>
        <span class="w-12 font-bold text-lg">ЭW</span>
    </button>
</div>
<div id="navbar-mobile" class="z-10 fixed bottom-0 w-screen md:hidden flex items-center justify-center bg-neutral-100 dark:bg-neutral-900 p-2 transition-all duration-150 ease-in-out">
    <div class="flex md:hidden items-center">
        <button title="На главную страницу" onclick="window.location.href = './';" type="button" class="w-16 h-16 hover:bg-black/5 dark:hover:bg-white/5 rounded-full outline-none focus:outline-none focus-visible:outline-offset-0 focus-visible:outline-[#3D7DE0] focus-visible:bg-black/5 dark:focus-visible:bg-white/5 transition-all duration-150 ease-in-out">
            <span class="fas fa-home mt-1 text-lg"></span>
        </button>
        <button title="На страницу магазина" onclick="window.location.href = './store.html';" type="button" class="w-16 h-16 hover:bg-black/5 dark:hover:bg-white/5 rounded-full outline-none focus:outline-none focus-visible:outline-offset-0 focus-visible:outline-[#3D7DE0] focus-visible:bg-black/5 dark:focus-visible:bg-white/5 transition-all duration-150 ease-in-out">
            <span class="fas fa-store mt-1 text-lg"></span>
        </button>
        <button title="На страницу википедии" onclick="window.location.href = './wiki/start.html';" type="button" class="w-16 h-16 hover:bg-black/5 dark:hover:bg-white/5 rounded-full outline-none focus:outline-none focus-visible:outline-offset-0 focus-visible:outline-[#3D7DE0] focus-visible:bg-black/5 dark:focus-visible:bg-white/5 transition-all duration-150 ease-in-out">
            <span class="fas fa-book mt-1 text-lg"></span>
        </button>
        <button id="button-other-mobile" title="Другие кнопки" type="button" class="w-16 h-16 hover:bg-black/5 dark:hover:bg-white/5 rounded-full outline-none focus:outline-none focus-visible:outline-offset-0 focus-visible:outline-[#3D7DE0] focus-visible:bg-black/5 dark:focus-visible:bg-white/5 transition-all duration-150 ease-in-out">
            <span class="fas fa-ellipsis-vertical mt-1 text-lg"></span>
        </button>
    </div>
    <div id="otherDropdown-mobile" class="hidden absolute bottom-full right-0 mb-2 w-48 bg-neutral-100 dark:bg-neutral-900 rounded-[1.8rem] p-2 z-10 space-y-1">
        <button id="button-theme-mobile" title="Переключить тему сайта" type="button" class="w-full h-12 flex items-center justify-center space-x-2 bg-neutral-800 dark:bg-neutral-100 rounded-full outline-none focus:outline-none focus-visible:outline-offset-0 focus-visible:outline-[#3D7DE0] focus-visible:bg-neutral-800 dark:focus-visible:bg-neutral-100 transition-all duration-150 ease-in-out">
            <div class="w-3/4 flex items-center justify-start space-x-2">
                <span class="fas fa-moon w-6 text-neutral-100 dark:text-neutral-800"></span>
                <span class="font-bold text-sm text-neutral-100 dark:text-neutral-800">Тема</span>
            </div>
        </button>
        <button title="На страницу обновлений" onclick="window.location.href = './wiki/updates.html';" type="button" class="w-full h-12 flex items-center justify-center space-x-2 hover:bg-black/5 dark:hover:bg-white/5 rounded-full outline-none focus:outline-none focus-visible:outline-offset-0 focus-visible:outline-[#3D7DE0] focus-visible:bg-black/5 dark:focus-visible:bg-white/5 transition-all duration-150 ease-in-out">
            <div class="w-3/4 flex items-center justify-start space-x-2">
                <span class="fas fa-rotate-left w-6"></span>
                <span class="font-bold text-sm">Обновления</span>
            </div>
        </button>
        <button title="На страницу правил" onclick="window.location.href = './wiki/rules.html';" type="button" class="w-full h-12 flex items-center justify-center space-x-2 hover:bg-black/5 dark:hover:bg-white/5 rounded-full outline-none focus:outline-none focus-visible:outline-offset-0 focus-visible:outline-[#3D7DE0] focus-visible:bg-black/5 dark:focus-visible:bg-white/5 transition-all duration-150 ease-in-out">
            <div class="w-3/4 flex items-center justify-start space-x-2">
                <span class="fas fa-scroll w-6"></span>
                <span class="font-bold text-sm">Правила</span>
            </div>
        </button>
        <button title="На наш Discord сервер" onclick="window.location.href = './discord.html';" type="button" class="w-full h-12 flex items-center justify-center space-x-2 hover:bg-black/5 dark:hover:bg-white/5 rounded-full outline-none focus:outline-none focus-visible:outline-offset-0 focus-visible:outline-[#3D7DE0] focus-visible:bg-black/5 dark:focus-visible:bg-white/5 transition-all duration-150 ease-in-out">
            <div class="w-3/4 flex items-center justify-start space-x-2">
                <span class="fab fa-discord w-6"></span>
                <span class="font-bold text-sm">Discord</span>
            </div>
        </button>
        <button title="На сайт хостинга" onclick="window.open('https://senterium.xyz/', '_blank');" type="button" class="w-full h-12 flex items-center justify-center hover:bg-black/5 dark:hover:bg-white/5 rounded-full outline-none focus:outline-none focus-visible:outline-offset-0 focus-visible:outline-[#3D7DE0] focus-visible:bg-black/5 dark:focus-visible:bg-white/5 transition-all duration-150 ease-in-out">
            <div class="w-3/4 flex items-center justify-start space-x-2">
                <span class="fas fa-star text-yellow-500 w-6"></span>
                <span class="font-bold text-sm text-yellow-500">Хостинг</span>
            </div>
        </button>
    </div>
</div>