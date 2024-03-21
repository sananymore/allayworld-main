<?php
/* Подключение к базе данных */
$database = new mysqli('127.0.0.1', 'root', '', 'website');
$database->set_charset('utf8mb4');
/* Получение айпи адреса пользователя */
$ip = null;
if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
    $ip = $_SERVER['HTTP_CLIENT_IP'];
} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
} elseif (!empty($_SERVER['REMOTE_ADDR'])) {
    $ip = $_SERVER['REMOTE_ADDR'];
}

/* Работа с сессиями */
$cookie_lifetime = (60 * 60 * 24) * 7; // Жизнь сессии секундах, последняя цифра - кол-во в днях
ini_set('session.gc_maxlifetime', $cookie_lifetime);
ini_set('session.cookie_secure', 1); // Я ВАС ТРАХАТЬ БУДУ ЕСЛИ НЕ УСТАНОВИТЕ ЕБУЧИЙ SSL/TLS НА САЙТ
ini_set('session.name', "SESSID");
session_start();
?>
