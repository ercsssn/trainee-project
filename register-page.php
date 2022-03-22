<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign Up Form</title>
  <link rel="stylesheet" href="style.css">
  <script src="script.js"></script>
</head>

<body>
    <table class="signup" border="0" cellpadding="2" cellspacing="5" bgcolor="#eeeeee">
        <th colspan="2" align="center">Signup Form</th>
            <form method="post" action="adduser.php" onsubmit="return validate(this)">
                <tr><td>First name</td>
                    <td><input type="text" maxlength="32" name="forename"></td></tr>
                <tr><td>Surname</td>
                    <td><input type="text" maxlength="32" name="surname"></td></tr>
                <tr><td>Username</td>
                    <td><input type="text" maxlength="16" name="username"></td></tr>
                <tr><td>Password</td>
                    <td><input type="text" maxlength="12" name="password"></td></tr>
                <tr><td>Age</td>
                    <td><input type="text" maxlength="3" name="age"></td></tr>
                <tr><td>Email</td>
                    <td><input type="text" maxlength="64" name="email"></td></tr>
                <tr><td colspan="2" align="center"><input type="submit" value="Signup"></td></tr>
            </form>
    </table>
</body>

</html>