<?php
  $currentTime = date("H");

  if ($currentTime < 4) {
    echo "Доброй ночи!";
  } elseif ($currentTime < 10) {
    echo "Доброе утро!";
  } elseif ($currentTime < 16) {
    echo "Добрый день!";
  } elseif ($currentTime < 20) {
    echo "Добрый вечер!";
  } else {
    echo "Доброй ночи!";
  }
  
?>