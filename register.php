<?php 

//namespace App;

//use Db;

include("app/View/header.php");

require_once("connection.php");
if (isset($_POST["register"])) {


	if (!empty($_POST['first_name']) && !empty($_POST['last_name']) && !empty($_POST['email'])) {
		$first_name = $_POST['first_name'];
		$last_name = $_POST['last_name'];
		$email = $_POST['email'];
		$company_name = $_POST['company_name'];
		$position = $_POST['position'];
		$phone_1 = $_POST['phone_1'];
		$phone_2 = $_POST['phone_2'];
		$phone_3 = $_POST['phone_3'];
			
		//$pdo = new Db::instance();
		$query = $pdo->query("SELECT * FROM users WHERE first_name = ".$first_name."");
		$query = $pdo->fetchAll();
		$numrows = \PDOStatement::rowCount;
		
		if ($numrows == 0) {
			$result = $pdo->exec("INSERT INTO users
					(first_name, last_name, email, company_name, position, phone_1, phone_2, phone_3) 
					VALUES('$first_name','$last_name', '$email', '$company_name', '$position','$phone_1', '$phone_2', '$phone_3')"	
					);

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
	
<?php include("app/View/RegistView.php"); ?>
	
<?php include("app/View/footer.php"); ?>