<?php
require_once 'conn.php';

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = $conn->query("SELECT COUNT(*) as count, id FROM `user` WHERE `username`='$username' AND `password`='$password'");
    $row = $query->fetchArray();
    $count = $row['count'];

    if ($count > 0) {
        setcookie("user_id", $row['id'], time() + 3600);
    }
}
?>
    <form method="POST">
        <label for="username">Username:</label>
        <input type="text" name="username" id="username" required>
        <br>
        <label for="password">Password:</label>
        <input type="password" name="password" id="password" required>
        <br>
        <button type="submit" name="login">Login</button>
    </form>
