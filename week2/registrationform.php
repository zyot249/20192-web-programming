<html>
    <head>
        <title>Registration Form</title>
    </head>
    <body>
        <form action="/week2/registrationform.php" method="POST">
            <h2>Feel free to registration!</h2>
            <div>
                <table>
                    <tr>
                        <td>
                            <span>Email :</span>
                        </td>
                        <td>
                            <input type="email" name="email">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span>Password :</span>
                        </td>
                        <td>
                            <input type="password" name="password">
                        </td>
                    </tr>
                </table>

                <input type="submit" value="Submit">
                <input type="reset" value="Reset">
            </div>
        </form>
        <?php
            $email = $_POST["email"];
            $password = $_POST["password"];

            if(strlen($password) < 8) {
                echo("<span style='color: red;'>Password must be longer than 8 characters</span>");
            } else {
                echo("<span style='color: green;'>Registration successfully! Thank you.</span>");
            }
        ?>
    </body>
</html>