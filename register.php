<?php //require_once("includes/connection.php"); ?>
<?php include("includes/header.php"); \header\addHeader(); ?>


	<?php

if (isset($_POST["register"])) {


if (!empty($_POST['first_name']) && !empty($_POST['last_name']) && !empty($_POST['email']) 
//&& !empty($_POST['company_name'])
	//&& !empty($_POST['position']) && !empty($_POST['phone_1']) && !empty($_POST['phone_2']) && !empty($_POST['phone_3'])
	) {
	$first_name = $_POST['first_name'];
	$last_name = $_POST['last_name'];
	$email = $_POST['email'];
	$company_name = $_POST['company_name'];
	$position = $_POST['position'];
	$phone_1 = $_POST['phone_1'];
	$phone_2 = $_POST['phone_2'];
	$phone_3 = $_POST['phone_3'];
		
	
	$query = mysql_query("SELECT * FROM usertbl WHERE username='".$first_name."'");
	$numrows = mysql_num_rows($query);
	
	if ($numrows == 0)
	{
	$sql = "INSERT INTO usertbl
			(first_name, last_name, email, company_name, position, phone_1, phone_2, phone_3) 
			VALUES('$first_name','$last_name', '$email', '$company_name', '$position','$phone_1', '$phone_2', '$phone_3')";

	$result = mysql_query($sql);


	if ($result) {
	 $message = "Аккаунт успешно создан!";
	} else {
	 $message = "Не удалось добавить данные!";
	}

	} else {
	 $message = "Имя уже занято! Попробуйте ещё раз!";
	}

} else {
	 $message = "Не все обязательные поля заполнены!";
}
}
?>


<?php if (!empty($message)) {echo "<p class=\"error\">" . "Сообщение: ". $message . "</p>";} ?>
	
<div class = "container mregister">
			<div id = "login">
	<h1>РЕГИСТРАЦИЯ</h1>
<form name="registerform" id="registerform" action="register.php" method="post">
	<p>
		<label for="user_login">Имя*<br />
		<input type="text" name="first_name" id="first_name" class="input" size="32" value=""  /></label>
	</p>

	<p>
		<label for="user_login">Фамилия*<br />
		<input type="text" name="last_name" id="last_name" class="input" size="32" value=""  /></label>
	</p>

	<p>
		<label for="user_pass">Email*<br />
		<input type="email" name="email" id="email" class="input" value="" size="32" /></label>
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
		
		<p class="submit">
		<input type="submit" name="register" id="register" class="button" value="Регистрация" />
	</p>

	<p class="regtext">* - Поля, обязательные для заполнения</p>
	
	<p class="regtext">Уже зарегистрированы? <a href="login.php" >Авторизация</a>!</p>
</form>
	
<p><a href="accountlist.php">Список аккаунтов</a></p>

	</div>
	</div>
	
	
	
	<?php include("includes/footer.php"); \footer\addFooter(); ?>