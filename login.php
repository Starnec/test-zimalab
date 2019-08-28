<?php
session_start();
?>

<?php //require_once("includes/connection.php"); ?>
<?php include("includes/header.php"); \header\addHeader(); ?>

<?php

if (isset($_SESSION["session_username"])) {
    // echo "Session is set"; // for testing purposes
    header("Location: intropage.php");
}

if (isset($_POST["login"])) {

    if (!empty($_POST['first_name']) && !empty($_POST['last_name']) && !empty($_POST['email'])) {
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $email = $_POST['email'];

        $query = mysql_query("SELECT * FROM usertbl WHERE first_name='".$first_name."' AND last_name='".$last_name."' AND email='".$email."'");
        $numrows = mysql_num_rows($query);
        
        if ($numrows != 0) {
            while ($row = mysql_fetch_assoc($query)) {
                $dbusername = $row['username'];
                $dbpassword = $row['password'];
            }

            if ($username == $dbusername && $password == $dbpassword) {
                $_SESSION['session_username'] = $username;
                header("Location: intropage.php");
            }
        } else {
            $message =  "Неверное имя пользователя или пароль!";
        }

    } else {
        $message = "Не все обязательные поля заполнены!";
    }
} else {
?>

<div class="container mlogin">
    <div id="login">
        <h1>ВХОД</h1>
        <form name="loginform" id="loginform" action="" method="POST">
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

                <p class="submit">
                <input type="submit" name="login" class="button" value="Войти" />
            </p>
                <p class="regtext">У Вас ещё нет аккаунта? <a href="register.php" >Зарегистрируйтесь</a>!</p>
        </form>

    </div>
</div>
	
<?php include("includes/footer.php"); \footer\addFooter(); ?>
	

<?php 
if (!empty($message)) {
    echo "<p class=\"error\">" . "Сообщение: ". $message . "</p>";
} 
?>
	
<?php
}
?>