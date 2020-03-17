<html>
  <head>
    <title>Lab01</title>
  </head>
  <body>
    <h1>Lab Exercise 01</h1>
    <hr>
    <div>
      <a href='index.php?ex1=true'>Exercise 1</a>
      <br>
      <a href='index.php?ex2=true'>Exercise 2</a>
      <br>
      <a href='index.php?ex3=true'>Exercise 3</a>
      <br>
      <a href='profile.php'>
        Profile
      </a>
    </div>
    <?php
      function runExercise1() {
          echo file_get_contents("example1.html");
      }
      function runExercise2() {
          echo file_get_contents("identifiers.html");
      }
      function runExercise3() {
          echo file_get_contents("uris.html");
      }

      if (isset($_GET['ex1'])) {
          runExercise1();
      } else if(isset($_GET['ex2'])) {
          runExercise2();
      } else if(isset($_GET['ex3'])) {
          runExercise3();
      }
    ?>
  </body>
</html>