<?php
// вся процедура работает на сессиях. Именно в ней хранятся    данные пользователя, пока он находится на сайте. Очень важно запустить их в    самом начале странички!!!
session_start();
include ("sqlconnect.php");
if    (!empty($_SESSION['login']) and !empty($_SESSION['password']))
{
    //если существует логин и пароль в сессиях, то проверяем их и    извлекаем аватар

    $login    = $_SESSION['login'];
    $password    = $_SESSION['password'];
    $result    = mysql_query("SELECT id,avatar FROM users WHERE login='$login' AND    password='$password'",$db);
    $myrow    = mysql_fetch_array($result);

    //извлекаем нужные данные о пользователе
}
?>
<html>
<head>
    <title>Главная    страница</title>
</head>
<body>
<h2>Главная    страница</h2>

<?php
if    (!isset($myrow['avatar']) or $myrow['avatar']=='') {
    print    <<<HERE
            <form    action="testreg.php" method="post">
              <p>
                <label>Ваш логин:<br></label>
                <input    name="login" type="text" size="15"    maxlength="15"
            HERE;
    print <<<HERE
              </p>
              <p>
                <label>Ваш пароль:<br></label>
                <input    name="password" type="password" size="15"    maxlength="15"
            HERE;
    print    <<<HERE
              </p>
            <!-- В поле для паролей (name="password"    type="password") пользователь вводит свой пароль -->  
              <p>
                <input name="save" type="checkbox"    value='1'> Запомнить меня.
              </p>          
<p>
            <input    type="submit" name="submit" value="Войти">
            <br>
            <a    href="reg.php">Зарегистрироваться</a> 
            </p></form>
            <br>
            Вы    вошли на сайт, как гость<br><a href='#'>Эта ссылка доступна только зарегистрированным пользователям</a>
            HERE;
}
else {
    print <<<HERE
            Вы    вошли на сайт, как $_SESSION[login] (<a href='exit.php'>Выход</a>)<br>
            Ваш    аватар:<br>
            <img    alt='$_SESSION[login]' src='$myrow[avatar]'> 
HERE;
}
?>