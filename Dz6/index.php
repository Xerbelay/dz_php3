<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="get">
        <input type="text" name="login">
        <input type="password" name="pass">
        <input type="text" name="email">
        <input type="submit">
    </form>
    <?php
        if (!empty($_GET['login']) && !empty($_GET['pass']) && !empty($_GET['email'])) {
            setcookie("key", "1");
            echo "<a href='/'><input name='exit' type='submit' value='Exit'></a>";
        }
        if (empty($_GET['login']) && empty($_GET['pass']) && empty($_GET['email'])) {
            setcookie("key", "1", time());
        }
    ?>
</body>
</html>