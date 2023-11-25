<?php
/* if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_SESSION) && isset($_POST['unsetForm'])) {
    // Start the session
    //session_start();
    // Unset all session variables
    session_unset();
    // Destroy the session
    session_destroy();
    // Regenerate the session ID
    //session_regenerate_id(true);
    // Write and close the session to ensure changes are saved
    session_write_close();
    //header("Location: login.php");
} */
if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['setForm'])) {

    $id = session_id();
    session_start();

    setcookie("username", $_POST["username"], strtotime("+ 1 month"));
    setcookie("password", $_POST["password"], strtotime("+ 1 month"));

    //$loc = $_SERVER["REQUEST_URI"];
    header("Location: login.php");
    //exit();
}
if ($_SERVER['REQUEST_METHOD'] == "GET" && isset($_POST['setForm']) && isset($_POST["username"])) {

    $handle = fopen("log.txt", "a+");

    fwrite($handle, "--- " . $_COOKIE["username"] . " logged in at " . date("d/m/Y h:i:s A") . " ---\r\n");
    fwrite($handle, "username = " . $_COOKIE["username"] . "\r\n");
    fwrite($handle, "password = " . $_COOKIE["password"] . "\r\n");
    fwrite($handle, "session_id = " . session_id() . "\r\n");
    fwrite($handle, "------\r\n");

    fclose($handle);
    header("Location: home.php");
    //exit();
}
echo $_SERVER["REQUEST_METHOD"];
echo "<br>";
echo isset($_SESSION) ? "SESSION IS SET" : "SESSION IS NOT SET";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>

<body>
    <form method="POST">
        <input type="hidden" name="setForm" value="setForm">

        <input type="hidden" name="formType" value="insertText">
        <label for="username">Username</label>
        <input type="text" name="username" id="username"></br>
        <label for="password">Password</label>
        <input type="password" name="password" id="password"></br>

        <input type="checkbox" id="log" name="log" value="yes">
        <label for="log">I want to track my login</label><br>

        <input type="submit" value="login">
    </form>
    <form method="post">
        <input type="hidden" name="unsetForm" value="unsetForm">

        <input type="submit" value="logout">
    </form>
    <a href="home.php">home</a>

</body>

</html>