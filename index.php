<?php
session_start();
$db = mysqli_connect('localhost:84', 'root', '', 'Code_Challenge');
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
    if(isset($_POST['login']) && isset($_POST['haslo']) && !empty($_POST['login']) && !empty($_POST['login']))
</body>
</html>