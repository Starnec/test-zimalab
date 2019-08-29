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