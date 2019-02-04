<html>
    <head>
    <title>Регистрация</title>
    </head>
    <body>
    <h2>Регистрация</h2>
    <form action="save_user.php" method="post" enctype="multipart/form-data">
    <!--**** save_user.php - это адрес обработчика.  То есть, после нажатия на кнопку "Зарегистрироваться", данные из полей  отправятся на страничку save_user.php методом "post" ***** -->
<p>
    <label>Ваш логин:<br></label>
    <input name="login" type="text" size="15" maxlength="15">
    </p>
<!--**** В текстовое поле (name="login" type="text") пользователь вводит свой логин ***** -->
<p>
    <label>Ваш пароль:<br></label>
    <input name="password" type="password" size="15" maxlength="15">
    </p>
<!--**** В поле для паролей (name="password" type="password") пользователь вводит свой пароль ***** --> 
			<p>
              <label>Выберите аватар. Изображение должно быть формата jpg, gif или png:<br></label>
              <input type="FILE" name="fupload">
            </p>
            <!-- В переменную fupload отправится изображение, которое выбрал пользователь --> 
<p>
    <input type="submit" name="submit" value="Зарегистрироваться">
<!--**** Кнопочка (type="submit") отправляет данные на страничку save_user.php ***** --> 
</p></form>
    </body>
    </html>