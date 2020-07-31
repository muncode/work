<?php
session_start();
require_once 'db.php';

if(isset($_GET['exit']))
{
    session_destroy();
    header("Location: index.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="css/style.css" />
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script type="text/javascript" src="js/js.js"></script>
    <title>Work</title>
</head>
<body>
<div class="container">
    <?php
    if (isset($_SESSION['login'])&&isset($_SESSION['password'])){
        // Личный кабинет
        ?>
        <h3>Добрый день <?php echo $_SESSION['name'];?> <a href="?exit">Выход</a></h3>
        <div class='change'>
            <h3>Ваши данные</h3>
            <form id='change' action='' method='post'>
                <label>E-mail: <input type='email' readonly value='<?php echo $_SESSION['email'];?>' />
                </label><br>
                <label>ФИО*: <input type='text' name='name' value='<?php echo $_SESSION['name'];?>' />
                </label> (Можно сменить)<br>
                <label>Логин: <input type='text' readonly value='<?php echo $_SESSION['login'];?>' />
                </label><br>
                <label>Пароль*: <input type='password' name='password' value='<?php echo $_SESSION['password'];?>' />
                </label>(Можно сменить)<br>
                <button type="submit">Изменить</button>
            </form>
        </div>
        <?
    } else {
        // Авторизация / Регистрация
        ?>
        <input type="radio" id="tab-1" name="tabs" checked>
        <label for="tab-1">Авторизация</label>

        <input type="radio" id="tab-2" name="tabs">
        <label for="tab-2">Регистрация</label>

        <div id='auth' class="tab-form">
            <h3>Авторизация</h3>
            <form id='login' action='' method='post'>
                <label>Логин: <input type='text' placeholder='Логин' name='login' required />
                </label><br>
                <label>Пароль: <input type='password' placeholder='Пароль' name='password' required />
                </label><br>
                <button type="submit">Войти</button>
            </form>
        </div>

        <div id='reg' class="tab-form">
            <h3>Регистрация</h3>
            <form id='registration' action='' method='post'>
                <label>E-mail: <input type='email' placeholder='E-mail' name='email' required />
                </label><br>
                <label>ФИО: <input type='text' placeholder='ФИО' name='name' required />
                </label><br>
                <label>Логин: <input type='text' placeholder='Логин' name='login' required />
                </label><br>
                <label>Пароль: <input type='password' placeholder='Пароль' name='password' required />
                </label><br>
                <button type="submit">Войти</button>
            </form>
        </div>
        <?php
    }
    ?>
</div>
</body>
</html>
