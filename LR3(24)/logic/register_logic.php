<?php
require_once 'bd.php';
require_once 'register.php';


$pdo = DB_Connect();

	//Если нажата кнопка
if (isset($_POST['do_register'])) {
    //объявление переменных как пост-запросов
    $full_name = $_POST['full_name'];
    $birthday_date = $_POST['birthday_date'];
    $gender = $_POST['gender'];
    $login = $_POST['login'];
    $password = md5(md5($_POST['password']));//md5 для шифровки
    $password_repeat = md5(md5($_POST['password_repeat']));

//Массив, для внесения записей в таблицу
    $data = array('full_name' => $full_name,
        'birthday_date' => $birthday_date,
        'gender' => $gender,
        'login' => $login,
        'password' => $password
    );
//Регулярное выражение для пароля
$regex_password = "/(?=^.{8}$)(?=.*[0-9])(?=.*[A-Z])(?=.*[a-z])/";
//Если пароли совпадают, то присваиваем переменным значения, если поле непустое, иначе, выводим сообщение об ошибках
    if ($password === $password_repeat) {
        if (empty($_POST['full_name'])) {
            $errors = 'Данное поле не может быть пустым';

        } else {
            $full_name = $_POST['full_name'];
        }

        if (empty($_POST['login'])) {
            $errors = 'Данное поле не может быть пустым';

        } else {
            if (!preg_match("/[0-9a-z_]+@[0-9a-z_^\.]+\.[a-z]{2,3}/i", $_POST['login'])) {

                $errors = 'Неверно введен е-mail';

            } else {
                $query = $pdo->prepare("SELECT COUNT(`login`) FROM `users` WHERE login = ? ");
                $query->execute([$_POST['login']]);
                $result = $query->fetchColumn();

                if($result == 0) {
                    $login = $_POST['login'];
                } else {

                    $errors = "Пользователь с таким Email существует!";
                }
            }
        }
        if (empty($_POST['birthday_date'])) {
            $errors = 'Данное поле не может быть пустым';

        } else {
            $date = $_POST['birthday_date'];
        }
		
        if (empty($_POST['gender'])) {
            $errors = 'Данное поле не может быть пустым';

        } else {
            $sex = $_POST['gender'];
        }

        if (empty($_POST['password'])) {
            $errors = 'Данное поле не может быть пустым';
        } else {
            $password = $_POST['password'];
        }
        if (!preg_match($regex_password, $password)) {
            $errors = 'Неверный формат пароля. 
            Требования к паролю: длиннее 6 символов, обязательно содержит большие латинские буквы,
            маленькие латинские буквы, спецсимволы (знаки препинания, арифметические действия и тп),
            пробел, дефис, подчеркивание и цифры.';
        } else{
            if (mb_strlen($_POST['password']) > 6 || mb_strlen($_POST['password']) < 25){
                $password = $_POST['password'];
            }
        }

        if (empty($_POST['password_repeat'])) {
            $errors = 'Данное поле не может быть пустым';

        } else {
            $password_repeat = $_POST['password_repeat'];
        }
//Если ошибок нет
        if (empty($errors)) {
            //$pdo = DB_Connect();
//Внесение записей в БД
            $query = $pdo->prepare("INSERT INTO `users`(`full_name`, `birthday_date`, `gender`,  `login`, `password`) VALUES ( :full_name, :birthday_date, :gender, :login,:password)");
            $query->bindValue(':password', $password, PDO::PARAM_INT);
            //Защита от Sql-инъекций
            $res = $query->execute($data);
            //Если данные передались, то выводим сообщение об удачной регистрации
            if ($res) {
                $_POST['message'] = "Регистрация успешно завершена";
                header('Location: ..\login.php');
            } else {
                $_POST['message'] = "Регистрация временно недоступна, приносим извенения";
            }
        }

    } else {
       $_POST['message'] = 'Пароли не совпадают';
        echo '<div style="color: red;">' . $errors . '</div> <hr>';
    }
}


?>