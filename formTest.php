<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post">
        <input type="text" name="username">
        <input type="text" name="password">
        <select name="gender" id="">
            <option value="male">male</option>
            <option value="female">female</option>
        </select>
        <input type="submit" value="submit">
    </form>
</body>

</html>
<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    echo $_POST['username'];
    echo "</br>";
    echo $_POST['password'];
    echo "</br>";
    echo $_POST['gender'];
    echo "</br>";
}
?>