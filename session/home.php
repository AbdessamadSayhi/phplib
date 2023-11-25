<?php
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>

<body>
    <h1>Hello, <?php echo isset($_COOKIE["username"]) ? $_COOKIE["username"] : "unkowen" ?></h1>

    <a href="login.php">login</a>
</body>

</html>