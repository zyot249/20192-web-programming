<html>
    <head> 
        <title>HTML With PHP Embedded</title> </head>
    <body> 
        <font size=5 color=”blue”>Welcome To My Page</font>
        <div>
            <a href='index.php?ex1=true'>Exercise 1</a>
            <br>
            <a href='index.php?ex2=true'>Exercise 2</a>
            <br>
            <a href='index.php?ex3=true'>Exercise 3</a>
            <br>
            <a href='week2/infoform.html'>Information Form</a>
            <br>
            <a href='week2/registrationform.php'>Registration</a>
            <br>
            <a href='week2/form4radio.html'>Form For Radio</a>
            <br>
            <a href='week1/profile.php'>
                Profile
            </a>
        </div>
        <?php
        print ("<br> Using PHP is not hard<br>");
        ?>
        and you can learn to use it quickly!;
        <?php
            function runExercise1() {
                echo file_get_contents("week1/example1.html");
            }
            function runExercise2() {
                echo file_get_contents("week1/identifiers.html");
            }
            function runExercise3() {
                echo file_get_contents("week1/uris.html");
            }
            function runInfoForm() {
                echo file_get_contents("week2/basicform.html");
            }

            if (isset($_GET['ex1'])) {
                runExercise1();
            } else if(isset($_GET['ex2'])) {
                runExercise2();
            } else if(isset($_GET['ex3'])) {
                runExercise3();
            } else if(isset($_GET['form'])) {
                runInfoForm();
            }
        ?>
        
    </body>
</html>
