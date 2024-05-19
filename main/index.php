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
    <?php include './elements/loader.html'; ?>
    <div class="fixed top-0 left-0 w-screen h-16 max-h-16 p-2 flex items-center justify-center md:justify-between bg-black/5 dark:bg-white/5 backdrop-blur-3xl">
        <div class="flex items-center justify-center">
            <button onclick="window.location.href = './';" class="flex items-center justify-center space-x-2 outline-none focus:outline-none focus-visible:outline-offset-0 focus-visible:outline-1 focus-visible:outline-neutral-100">
                <div class="w-16 h-16 md:w-12 md:h-12 bg-cover bg-center bg-no-repeat" style="background-image: url(./assets/img/icon-transparent.png);"></div>
                <span class="font-bold text-xl">ЭW</span>
            </button>
        </div>
        <div class="hidden md:flex items-center relative">
            <button onclick="window.location.href = './';" class="flex items-center justify-center w-12 h-12 hover:bg-black/5 dark:hover:bg-white/5 rounded-full transition-all duration-200 ease-in-out outline-none focus:outline-none focus-visible:outline-offset-0 focus-visible:outline-1 focus-visible:outline-neutral-100">
                <span class="fas fa-home"></span>
            </button>
            <button onclick="window.location.href = './store.html';" class="flex items-center justify-center w-12 h-12 hover:bg-black/5 dark:hover:bg-white/5 rounded-full transition-all duration-200 ease-in-out outline-none focus:outline-none focus-visible:outline-offset-0 focus-visible:outline-1 focus-visible:outline-neutral-100">
                <span class="fas fa-store"></span>
            </button>
            <button onclick="window.location.href = './wiki/start.html';" class="flex items-center justify-center w-12 h-12 hover:bg-black/5 dark:hover:bg-white/5 rounded-full transition-all duration-200 ease-in-out outline-none focus:outline-none focus-visible:outline-offset-0 focus-visible:outline-1 focus-visible:outline-neutral-100">
                <span class="fas fa-book"></span>
            </button>
            <button onclick="window.location.href = './wiki/rules.html';" class="flex items-center justify-center w-12 h-12 hover:bg-black/5 dark:hover:bg-white/5 rounded-full transition-all duration-200 ease-in-out outline-none focus:outline-none focus-visible:outline-offset-0 focus-visible:outline-1 focus-visible:outline-neutral-100">
                <span class="fas fa-scroll"></span>
            </button>
            <button onclick="window.location.href = 'https:/\/discord.allayworld.fun/';" class="flex items-center justify-center w-12 h-12 hover:bg-black/5 dark:hover:bg-white/5 rounded-full transition-all duration-200 ease-in-out outline-none focus:outline-none focus-visible:outline-offset-0 focus-visible:outline-1 focus-visible:outline-neutral-100">
                <span class="fab fa-discord"></span>
            </button>
            <button id="md-other" class="flex items-center justify-center w-12 h-12 hover:bg-black/5 dark:hover:bg-white/5 rounded-full transition-all duration-200 ease-in-out outline-none focus:outline-none focus-visible:outline-offset-0 focus-visible:outline-1 focus-visible:outline-neutral-100">
                <span class="fas fa-ellipsis"></span>
            </button>
            <div id="md-other-dropdown" class="hidden w-48 p-2 bg-black/5 dark:bg-white/5 backdrop-blur-3xl rounded-[1.85rem] absolute top-full right-0 mt-4 space-y-2">
                <button onclick="window.location.href = './team.html';" class="relative flex items-center justify-start w-full h-12 px-6 hover:bg-black/5 dark:hover:bg-white/5 rounded-full transition-all duration-200 ease-in-out outline-none focus:outline-none focus-visible:outline-offset-0 focus-visible:outline-1 focus-visible:outline-neutral-100">
                    <span class="absolute left-6 font-bold text-sm">Команда</span>
                    <span class="absolute right-6 fas fa-users w-6"></span>
                </button>
                <button id="md-theme" class="relative flex items-center justify-start w-full h-12 bg-neutral-950 dark:bg-neutral-100 hover:bg-neutral-800 dark:hover:bg-neutral-300 rounded-full transition-all duration-200 ease-in-out outline-none focus:outline-none focus-visible:outline-offset-0 focus-visible:outline-1 focus-visible:outline-neutral-100">
                    <span class="absolute left-6 text-neutral-100 dark:text-neutral-950 font-bold text-sm">Тема</span>
                    <span class="absolute right-6 text-neutral-100 dark:text-neutral-950 fas fa-moon w-6"></span>
                </button>
            </div>
        </div>
    </div>
    <div class="fixed bottom-0 left-0 w-screen h-[4.5rem] max-h-[4.5rem] p-2 flex md:hidden items-center justify-center bg-black/5 dark:bg-white/5 backdrop-blur-3xl">
        <div class="flex items-center justify-center relative">
            <button onclick="window.location.href = './';" class="flex items-center justify-center w-14 h-14 hover:bg-black/5 dark:hover:bg-white/5 rounded-full transition-all duration-200 ease-in-out outline-none focus:outline-none focus-visible:outline-offset-0 focus-visible:outline-1 focus-visible:outline-neutral-100">
                <span class="fas fa-home"></span>
            </button>
            <button onclick="window.location.href = './store.html';" class="flex items-center justify-center w-14 h-14 hover:bg-black/5 dark:hover:bg-white/5 rounded-full transition-all duration-200 ease-in-out outline-none focus:outline-none focus-visible:outline-offset-0 focus-visible:outline-1 focus-visible:outline-neutral-100">
                <span class="fas fa-store"></span>
            </button>
            <button onclick="window.location.href = './wiki/start.html';" class="flex items-center justify-center w-14 h-14 hover:bg-black/5 dark:hover:bg-white/5 rounded-full transition-all duration-200 ease-in-out outline-none focus:outline-none focus-visible:outline-offset-0 focus-visible:outline-1 focus-visible:outline-neutral-100">
                <span class="fas fa-book"></span>
            </button>
            <button id="other" class="flex items-center justify-center w-14 h-14 hover:bg-black/5 dark:hover:bg-white/5 rounded-full transition-all duration-200 ease-in-out outline-none focus:outline-none focus-visible:outline-offset-0 focus-visible:outline-1 focus-visible:outline-neutral-100">
                <span class="fas fa-ellipsis"></span>
            </button>
            <div id="other-dropdown" class="hidden w-48 p-2 bg-black/5 dark:bg-white/5 backdrop-blur-3xl rounded-[1.85rem] absolute bottom-full right-0 mb-4 space-y-2">
                <button id="theme" class="relative flex items-center justify-start w-full h-12 bg-neutral-950 dark:bg-neutral-100 hover:bg-neutral-800 dark:hover:bg-neutral-300 rounded-full transition-all duration-200 ease-in-out outline-none focus:outline-none focus-visible:outline-offset-0 focus-visible:outline-1 focus-visible:outline-neutral-100">
                    <span class="absolute left-6 text-neutral-100 dark:text-neutral-950 font-bold text-sm">Тема</span>
                    <span class="absolute right-6 text-neutral-100 dark:text-neutral-950 fas fa-moon w-6"></span>
                </button>
                <button onclick="window.location.href = './team.html';" class="relative flex items-center justify-start w-full h-12 px-6 hover:bg-black/5 dark:hover:bg-white/5 rounded-full transition-all duration-200 ease-in-out outline-none focus:outline-none focus-visible:outline-offset-0 focus-visible:outline-1 focus-visible:outline-neutral-100">
                    <span class="absolute left-6 font-bold text-sm">Команда</span>
                    <span class="absolute right-6 fas fa-users w-6"></span>
                </button>
                <button onclick="window.location.href = 'https:/\/discord.allayworld.fun/';" class="relative flex items-center justify-start w-full h-12 px-6 hover:bg-black/5 dark:hover:bg-white/5 rounded-full transition-all duration-200 ease-in-out outline-none focus:outline-none focus-visible:outline-offset-0 focus-visible:outline-1 focus-visible:outline-neutral-100">
                    <span class="absolute left-6 font-bold text-sm">Discord</span>
                    <span class="absolute right-6 fab fa-discord w-6"></span>
                </button>
                <button onclick="window.location.href = './wiki/rules.html';" class="relative flex items-center justify-start w-full h-12 px-6 hover:bg-black/5 dark:hover:bg-white/5 rounded-full transition-all duration-200 ease-in-out outline-none focus:outline-none focus-visible:outline-offset-0 focus-visible:outline-1 focus-visible:outline-neutral-100">
                    <span class="absolute left-6 font-bold text-sm">Правила</span>
                    <span class="absolute right-6 fas fa-scroll w-6"></span>
                </button>
            </div>
        </div>
    </div>
    <div class="mt-64"></div>
    <!-- <?php include './content/index.html'; ?> -->
    <div class="mb-48"></div>
    <script src="./assets/js/loader.min.js"></script>
    <script src="./assets/js/mdDropdown.min.js"></script>
    <script src="./assets/js/dropdown.min.js"></script>
    <script src="./assets/js/mdTheme.min.js"></script>
    <script src="./assets/js/theme.min.js"></script>
    <script src="./assets/js/themeCheck.min.js"></script>
</body>
</html>