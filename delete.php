//Форма отправки данных об удалении пользователя//
<?php include("includes/header.php"); \header\addHeader(); ?>
<h4>Укажите ваш email и пароль</h4>
<form action="delete.php" method="POST" name="form3">
<input type="text" name="email" placeholder=" exemple@exemple.ru " />
<input type="password" name="password" placeholder=" password " />
<input type="submit" name="submit" value="        delete       " />
</form>
 
//Скрипт обработчик формы выше//
<?php
if (isset($_POST['email']) && isset($_POST['password'])) {
$email=$_POST['email'];
$password=$_POST['password'];
 mysql_connect ("хост", "логин", "пароль");
   mysql_select_db ("имя БД") or die('not connect base date');
   mysql_query("SET NAMES utf8");
   mysql_set_charset('utf8');
  //Непосредственное добавление данных в таблицу//
   $result = mysql_query("DELETE FROM `users` WHERE email='$email' password='$password' ") or mysql_error();
    if ($result = 'true'){ //Проверка на добавление данных//
        echo "<br/><br/><font color='green'>Аккаунт удален!<meta http-equiv='Refresh' content='4; URL=index.php'></font>";
}  
else {
  echo "<font color='red'>Error!!!</font>"; //В случае каких-либо ошибок выведет сообщение - Error!!!!//
}
}
?>
<?php include("includes/footer.php"); \footer\addFooter(); ?>