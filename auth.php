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

<body class="select-none cursor-default scroll-smooth bg-white text-neutral-900 overflow-x-hidden">
    

    <!-- Навигация -->
    <?php 
        require('./assets/ELEMENTS/nav.php');
    ?>
    

    <div class="w-screen h-screen bg-forest bg-cover bg-top">
        <div class="w-screen h-screen backdrop-blur-sm">
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
        </div>
    </div>

    <script src="./assets/JS/ToggleNavMenu.min.js"></script>
    <script src="./assets/JS/CloseStatusBar.min.js"></script>

</body>
</html>