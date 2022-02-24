<?php
require_once 'bd.php';
require_once 'logic/login_logic.php';

include "header.php";
?>
    <!--Блок авторизации-->
    <div>
    <?php if (isset($errors)): ?>
        <?php echo '<div style="color: red;">' . $errors . '</div>'; ?>
    <?php endif; ?>
        <form class="authorizedform"  action="logic/login_logic.php"  method="post">

        <label>Логин</label>
        <input class="authorizedstyle" name="login"value="<?php if (isset($_POST['login']))echo (htmlspecialchars($_POST['login'])) ?>" type="text">
        <label>Пароль</label>
        <input class="authorizedstyle" type="password" name="password" value="<?php if (isset($_POST['password']))echo (htmlspecialchars($_POST['password'])) ?>">
        <button name="do_login" type="submit">Войти</button>
            <p>
                У Вас нет аккаунта? - <a href="register.php">Зарегистрируйтесь</a>!
            </p>
        </form>



    </div>


    <!--Футер-->
<?php
//include "footer.php";
?>