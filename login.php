<?php
session_start();
?>

<?php require_once("connection.php"); ?>
<?php include("app/View/header.php"); ?>

<?php
if (isset($_SESSION["session_username"])) {
    header("Location: intropage.php");
}

if (isset($_POST["login"])) {

    if (!empty($_POST['first_name']) && !empty($_POST['last_name']) && !empty($_POST['email'])) {
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $email = $_POST['email'];

        $query = $pdo->query("SELECT * FROM usertbl WHERE first_name='".$first_name."' AND last_name='".$last_name."' AND email='".$email."'");
        $query = $pdo->fetchAll();
        $numrows = \PDOStatement::rowCount;
        
        if ($numrows != 0) {
            while($row = PDO::FETCH_ASSOC($query)->fetchAll()) {
                $dbfirstname = $row['first_name'];
                $dblastname = $row['last_name'];
                $dbemail = $row['email'];
            }

            if ($first_name == $dbfirstname && $last_name == $dblastname && $email == $dbemail) {
                $_SESSION['session_username'] = $first_name;
                header("Location: intropage.php");
            }
        } else {
            $message =  "Неверное имя пользователя или пароль!";
        }

    } else {
        $message = "Не все обязательные поля заполнены!";
    }
}
?>

<?php include("app/View/LoginView.php"); ?>
	
<?php include("app/View/footer.php"); ?>
	
<?php if (!empty($message)) {echo "<p class=\"error\">" . "Сообщение: ". $message . "</p>";} ?>
	