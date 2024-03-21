function toggleMenu(event) {
    var menu = document.getElementById("menu");
    var navbar = document.getElementById("navbar");

    if (menu.style.display === "" || menu.style.display === "none") {
        menu.style.display = "flex";
        setTimeout(() => {
            menu.style.opacity = "1";
        }, 0); // Нулевая задержка для запуска анимации
        navbar.classList.add("md:rounded-br-lg");

        // Добавим обработчик события для закрытия меню при клике вне него
        document.addEventListener('click', closeMenuOnClick);
    } else {
        menu.style.opacity = "0";
        setTimeout(() => {
            menu.style.display = "none";
        }, 300); // Подождем завершения анимации (300мс)
        navbar.classList.remove("md:rounded-br-lg");

        // Удалим обработчик события при закрытии меню
        document.removeEventListener('click', closeMenuOnClick);
    }

    // Предотвратим всплытие события клика, чтобы оно не срабатывало на document
    event.stopPropagation();
}

function closeMenuOnClick() {
    var menu = document.getElementById("menu");
    if (menu.style.opacity === "1") {
        toggleMenu();
    }
}

// Добавим обработчик события для закрытия меню при клике вне него
document.addEventListener('click', closeMenuOnClick);