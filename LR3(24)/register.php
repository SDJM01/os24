<?php
require_once 'bd.php';
require_once 'logic/register_logic.php';


?>
<?php include "header.php"; ?>
    <!--Блок регистрации-->
    <div>
    <?php if (isset($errors)): ?>
    <?php echo '<div style="color: red;">' . $errors . '</div>'; ?>
    <?php endif; ?>
        <form name="do_register" action="register.php" class="authorizedform" method="post">
            <h2>Регистрация</h2>
            <p>
                <label>ФИО</label>
                <input class="authorizedstyle" name="full_name" value="<?php echo @$_POST['full_name']; ?>" type="text" placeholder="Ведите свое полное имя" >
            </p>
            <p>
                <label>Логин</label>
                <input class="authorizedstyle" name="login" value="<?php echo @$_POST['login']; ?>" type="text" placeholder="Ведите свой логин" >
            </p>
            <p>
                <label>Дата рождения</label>
                <input class="authorizedstyle" name="birthday_date" value="<?php echo @$_POST['birthday_date'];?>" type="date" placeholder="Ведите дату рождения">
            </p>
            
            <p>
                <label>Пол</label>
                <input class="authorizedstyle" name="gender" value="<?php echo @$_POST['gender'];?>" type="text" placeholder="Введите пол">
            </p>
            <p>
                <label>Пароль</label>
                <input class="authorizedstyle" type="password" name="password" value="<?php echo @$_POST['password'];?>" type="password" placeholder="Введите пароль">
            </p>
            <p>
                <label>Подтверждение пароля</label>
                <input class="authorizedstyle" type="password" name="password_repeat" value="<?php echo @$_POST['password_repeat'];?>" placeholder="Подтвердите введенный пароль">
            </p>
            <button name="do_register" type="submit">Зарегистрироваться</button>
            <p>
                Уже зарегистрированы? <a href="login.php">Войдите в аккаунт</a>
            </p>
        </form>

    </div>
<?php
//include "footer.php";
?>