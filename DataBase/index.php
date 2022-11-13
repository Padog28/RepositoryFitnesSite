<?php
    //  вся процедура работает на сессиях. Именно в ней хранятся данные пользователя, пока он находится на сайте.
    session_start();
?>
<html>
    <head>
    	<title>Главная страница</title>
    </head>
    <body>
    	<h2>Главная страница</h2>
    	<form action="testreg.php" method="post"> 
			<!--  testreg.php - это адрес обработчика. То есть, после нажатия на кнопку "Войти", данные из полей отправятся на страничку testreg.php методом "post" -->
 			<p>
    			<label>Ваш логин:<br></label>
    			<input name="login" type="text" size="15" maxlength="15">
    			<!-- В текстовое поле (name="login" type="text") пользователь вводит свой логин -->
    		</p>
    		<p>
    			<label>Ваш пароль:<br></label>
    			<input name="password" type="password" size="15" maxlength="15">
    			<!-- В поле для паролей (name="password" type="password") пользователь вводит свой пароль -->
    		</p>
    		<p>
    			<input type="submit" name="submit" value="Войти">
    			<!-- Кнопочка (type="submit") отправляет данные на страничку testreg.php  --> 
    			<br>
    			<!-- ссылка на регистрацию, ведь как-то же должны гости туда попадать -->
    			<a href="reg.php">Зарегистрироваться</a> 
    		</p>
    	</form>
    </body>
</html>