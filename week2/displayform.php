<html>
    <head>
        <title>Display Information</title>
    </head>
    <body>
        <?php
            $name = $_POST["username"];
            $major = $_POST["major"];
            $class = $_POST["class"];
            $university = $_POST["university"];
            $hobbies = array();
            $programmingLanguages = array();

            if (strlen($_POST["hbGame"]) > 0) {
                array_push($hobbies, $_POST["hbGame"]);
            }
            if (strlen($_POST["hbSport"]) > 0) {
                array_push($hobbies, $_POST["hbSport"]);
            }
            if (strlen($_POST["hbMusic"]) > 0) {
                array_push($hobbies, $_POST["hbMusic"]);
            }

            if (strlen($_POST["plJs"]) > 0) {
                array_push($programmingLanguages, $_POST["plJs"]);
            }
            if (strlen($_POST["plJava"]) > 0) {
                array_push($programmingLanguages, $_POST["plJava"]);
            }
            if (strlen($_POST["plPhp"]) > 0) {
                array_push($programmingLanguages, $_POST["plPhp"]);
            }

            if (strlen($name) > 0) {
                echo "Hello, $name;<br>";
            }
            if (strlen($major) > 0 && strlen($class) > 0 && strlen($university) > 0) {
                echo "<br>You are studying $major, in class $class, at $university.<br>";
            }
            if (count($hobbies) > 0) {
                echo "You like: <br>";
                for ($i = 0; $i < count($hobbies); $i++) {
                    print "" .($i +1) .". $hobbies[$i] <br>";
                }
            } else {
                print "You can share more about your hobbies!";
            }

            if (count($programmingLanguages) > 0) {
                echo "Your programming languages: <br>";
                for ($i = 0; $i < count($programmingLanguages); $i++) {
                    print "" .($i +1) .". $programmingLanguages[$i] <br>";
                }
            } else {
                print "You have learned a programming language, haven't you?";
            }

            print "<br>Thank you for sharing about you!"
        ?>
    </body>
</html>