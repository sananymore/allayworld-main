<?php
require_once('configuration.php');

if(isset($_POST['login'])) {
    if(isset($_POST['loginName']) && isset($_POST['loginPassword'])) {
        $name = $database->real_escape_string(htmlspecialchars($_POST['loginName']));
        $password = $database->real_escape_string(md5($_POST['loginPassword']));
        
        if((strlen($name)<535 && strlen($password)<535) && (strlen($name) > 5 && strlen($password) >= 6)){
            $result = $database->query("SELECT * FROM `allay_players` WHERE `name` = '$name' AND `password` = '$password'");
            
            if($result->num_rows > 0) {
                session_set_cookie_params($cookie_lifetime);
                $_SESSION['allay_player_name'] = $name;
                $_SESSION['allay_player_last_auth'] = date("d-m-Y");
                $_SESSION['allay_player_id'] = $result->fetch_array()['id'];
                $_SESSION['ip_adress'] = $ip;
                header('Location: index.php?status=success_login');
                exit();
            } else {
                header('Location: auth.php?status=failed_login');
                exit();
            }
        }
        header('Location: auth.php?status=failed_register');
    } else {
        header('Location: auth.php');
        exit();
    }
} elseif(isset($_POST['register'])) {
    if(isset($_POST['registerName']) && isset($_POST['registerPassword'])) {
        $name = $database->real_escape_string(htmlspecialchars($_POST['registerName']));
        $password = $database->real_escape_string(md5($_POST['registerPassword']));
        $name_lower = strtolower($name);
        if((strlen($name)<535 && strlen($password)<535) && (strlen($name) > 5 && strlen($password) >= 6)){

            $result = $database->query("SELECT * FROM `allay_players` WHERE LOWER(`name`) = '$name_lower'");
            if($result->num_rows > 0) {
                header('Location: auth.php?status=failed_register');
                exit();
            }

            $id = $database->query("SELECT * FROM `allay_players`")->num_rows;
            $result = $database->query("INSERT INTO `allay_players` (`id`, `name`, `password`, `ip`, `date`) VALUES ('$id', '$name', '$password', '$ip', current_timestamp())");

            if($result) {
                session_set_cookie_params($cookie_lifetime);
                $_SESSION['allay_player_name'] = $name;
                $_SESSION['allay_player_last_auth'] = date("d-m-Y");
                $_SESSION['allay_player_id'] = $id;
                $_SESSION['ip_adress'] = $ip;
                header('Location: index.php?status=success_register');
                exit();
            } else {
                header('Location: auth.php?status=failed_register');
                exit();
            }
        }
        header('Location: auth.php?status=failed_register');
    } else {
        header('Location: auth.php');
        exit();
    }
} else {
    header('Location: index.php');
    exit();
}
?>
