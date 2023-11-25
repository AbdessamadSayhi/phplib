<?php
// Handling the login form
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['formType']) && $_POST['formType'] == "insertText") {
    echo "<br>" . $currentScriptName . "<br>";

    // Process the login form
    // Set cookies
    setcookie("username", $_POST["username"], strtotime("+ 1 month"));
    setcookie("password", $_POST["password"], strtotime("+ 1 month"));

    // Update the log file
    $handle = fopen("log.txt", "a+");

    fwrite($handle, "--- " . $_COOKIE["username"] . " logged in at " . date("d/m/Y h:i:s A") . " ---\r\n");
    fwrite($handle, "username = " . $_COOKIE["username"] . "\r\n");
    fwrite($handle, "password = " . $_COOKIE["password"] . "\r\n");
    fwrite($handle, "------\r\n");
    fclose($handle);

    // Redirect
    $loc = $_SERVER["REQUEST_URI"];
    header("Location: $loc");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INSERT</title>
</head>

<body>
    <form action="" method="POST">
        <input type="hidden" name="formType" value="insertText">
        <label for="username">Username</label>
        <input type="text" name="username" id="username"></br>
        <label for="password">Password</label>
        <input type="password" name="password" id="password"></br>
        <button type="submit">login</button>
    </form>
    <a href="read.php">read</a>
</body>

</html>