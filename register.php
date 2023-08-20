<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="controller.php" method="POST">
<input type="hidden" name="post-action" value="register-property">
<label for="name">Name:</label><br>
<input type="text" id="name" name="name"><br>
<label for="email">Email:</label><br>
<input type="text" id="email" name="email"><br>
<label for="password">Password:</label><br>
<input type="password" id="password" name="password"><br>
<label for="confirmation-password">Confirm-password:</label><br>
<input type="text" id="confirmation-password" name="confirmation-password"><br>
<input type="submit" value="Register">

    </form>
</body>
</html>