<?php
/*
 * Template name: Шаблон профиля пользователя
 */
global $user_ID;
 
// если пользователь не авторизован, отправляем его на страницу входа
/*if( !$user_ID ) {
	header('location:' . site_url() . '/wp-login.php');
	exit;
} else {
	$userdata = get_user_by( 'id', $user_ID );
}*/
?><html>
<?php include("includes/header.php"); \header\addHeader(); ?>
<body>
<?php
// после сохранения профиля и смены пароля понадобятся уведомления
// если уведомлений больше двух, то оптимальнее их будет вывести через switch
if( isset($_GET['status']) ) :
	switch( $_GET['status'] ) :
		case 'ok':{
			echo '<div class="success">Сохранено.</div>';
			break;
		}
		case 'exist':{
			echo '<div class="error">Пользователь с указанным email уже существует.</div>';
			break;
		}
		case 'short':{
			echo '<div class="error">Пароль слишком короткий.</div>';
			break;
		}
		case 'mismatch':{
			echo '<div class="error">Пароли не совпадают.</div>';
			break;
		}
		case 'wrong':{
			echo '<div class="error">Старый пароль неверен.</div>';
			break;
		}
		case 'required':{
			echo '<div class="error">Пожалуйста, заполните все обязательные поля.</div>';
			break;
		}
	endswitch;
endif;
 
// profile-update.php - это файл, который находится в папке с темой и обрабатывает сохранение, его содержимое будет в следующем шаге
?>
<div class = "container mregister">
			<div id = "login">
	<h1>РЕДАКТИРОВАНИЕ ДАННЫХ АККАУНТА</h1>
<form name="registerform" id="registerform" action="profile-update.php" method="POST">
    
    <p>
        <label for="user_login">Имя<br />
        <input type="text" name="first_name" placeholder="Имя" value="<?php echo $userdata->first_name ?>" /></label>
	</p>

    <p>
        <label for="user_login">Фамилия<br />
        <input type="text" name="last_name" placeholder="Фамилия" value="<?php echo $userdata->last_name ?>" /></label>
	</p>

    <p>
        <label for="user_login">Email<br />
        <input type="text" name="email" placeholder="Email" value="<?php echo $userdata->email ?>" /></label>
    </p>

    <p>
		<label for="user_pass">Компания<br />
		<input type="text" name="company_name" id="company_name" class="input" value="" size="20" /></label>
	</p>
	
	<p>
		<label for="user_pass">Должность<br />
		<input type="text" name="position" id="position" class="input" value="" size="32" /></label>
	</p>	

	<p>
		<label for="user_pass">Телефон 1<br />
		<input type="text" name="phone_1" id="phone_1" class="input" value="" size="32" /></label>
	</p>	

	<p>
		<label for="user_pass">Телефон 2<br />
		<input type="text" name="phone_2" id="phone_2" class="input" value="" size="32" /></label>
	</p>	

	<p>
		<label for="user_pass">Телефон 3<br />
		<input type="text" name="phone_3" id="phone_3" class="input" value="" size="32" /></label>
	</p>	
 
	<button>Сохранить</button>
</form>

</div>
</div>

<div class = "container mregister">
	<div id = "login">
<h1>УДАЛИТЬ АККАУНТ</h1>
<h4>Укажите ваш email и пароль</h4>
<form action="delete.php" method="POST" name="form3">
<input type="text" name="email" placeholder=" exemple@exemple.ru " />
<input type="password" name="password" placeholder=" password " />
<input type="submit" name="submit" value="        delete       " />
</form>
</div>
</div>
 
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
</body>
</html>