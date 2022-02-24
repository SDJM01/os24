<?php
include('../bd.php');

function checkPassword($pwd)
{
    $errors = array();
    if (strlen($pwd) < 6) {
        $errors[] = "Password too short!";
    }
    if (!preg_match("#[0-9]+#", $pwd)) {
        $errors[] = "Password must include at least one number!";
    }
    if (!preg_match("#[a-zA-Z]+#", $pwd)) {
        $errors[] = "Password must include at least one letter!";
    }
    if (empty($errors)) {
        return true;
    }
}

$pdo = DB_Connect();

$data = $_POST;
    $userdata = [];
    if (isset($data['do_login'])) {

        $errors = array();
        if (!isset($_POST['login'])) {
            $errors[] = 'Введите логин!';
        } else {
            $userdata['login'] = $_POST['login'];
        }

        if (!isset($_POST['password'])) {
            $errors[] = 'Введите пароль!';
        } else {
            $userdata['password'] = $_POST['password'];
        }

        if (empty($errors)) {
            $sql_count = "SELECT * FROM `USERS` WHERE `login` = ?";
            $query = $pdo->prepare($sql_count);
            $query->execute([$userdata['login']]);
            $query_array = $query->fetch(PDO::FETCH_ASSOC);
            if (!empty($query_array)) {
                if (password_verify($userdata['password'], $query_array['password'])) {
                    $_SESSION['loggedUser'] = $userdata['login'];
                    header('Location: ../holidays.php');
                    
                }
                else{
                    $errors[] = 'Неверный пароль!';
                    
                }
                header('Location: ../holidays.php');
            }
            else{
                $errors[] = 'Такого логина не существует!';
                exit ("Извините, введённый вами login или пароль неверный.");
            }
            
        }
      
        
    }