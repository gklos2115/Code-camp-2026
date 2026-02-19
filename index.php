<?php
session_start();
$db = mysqli_connect('localhost', 'root', '', 'Code_Challenge');
if(isset($_SESSION['zalogowany'])){
    Header("Location: dashboard.php");
    exit(); //opuszczenie strony
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel logowania</title>
</head>
<body>
    <h1>Zaloguj się</h1><br>
    <form action="" method="post">
        <label for="">Login:</label><br>
        <input type="text" name="login" id=""><br>
        <label for="">Hasło:</label><br>
        <input type="password" name="haslo" id=""><br>
        <button type="submit">Zaloguj się</button><br>
        <a href="register.php">Nie masz konta? Zarejestruj się!</a>
    </form>
    <?php
    if(isset($_POST['login']) && isset($_POST['haslo']) && !empty($_POST['login']) && !empty($_POST['login'])){
        $login = $_POST['login'];
        $haslo = $_POST['haslo'];
        $sql = "SELECT * FROM users where users.login = '$login' AND users.password = '$haslo'";
        $wynik = mysqli_query($db, $sql);
        while($wiersz = mysqli_fetch_array($wynik)){
            if(mysqli_num_rows($wynik) > 0){
                $id = $wiersz['id'];
                $_SESSION['zalogowany'] = $id;
            }
        }
    }
    ?>
</body>
</html>