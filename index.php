<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="index.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="controller.php" method="POST">

<input type="hidden" name="login" value="login-property">
<label for="email">Email:</label><br>
<input type="text" id="email" name="email"><br>
<label for="password">Password:</label><br>
<input type="password" id="password" name="password"><br>
<input type="submit" value="Login">

    </form>
</body>
</html>