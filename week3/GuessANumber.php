<?php
	session_start();
?>
<html>
  <head>
    <title>Guess A Number</title>
  </head>
  <body>
    <?php
      if (isset($_SESSION['x'])) {
        $x = $_SESSION['x'];
        $time = $_SESSION['time'];
      } else {
        srand ((double) microtime() * 10000000);
        $x = rand(0, 100);
        $_SESSION['x'] = $x;
        $guess = 0;
        $time = 0;
        $_SESSION['time'] = $time;
      }
    ?>
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="GET">
      <h3>Guess a number</h3>
      <br>
      <select name="guess">
        <?php
          for($i = 0; $i <= 100; $i++) {
            if ($guess == $i) {
              print("<option selected>$i</option>");
            } else 
              print("<option>$i</option>");
          }
        ?>
      </select>
      <br>
      <input type="submit" value="Submit">
      <?php
        if (array_key_exists("guess", $_GET)) {
          $guess = $_GET["guess"];
          if (is_numeric($guess)) {
            if ($guess == $x) {
              print "Right! It is $x. You have guessed $time times";
              session_unset('x');
              session_unset('time');
            } elseif ($guess < $x) {
              $time = $time + 1;
              $_SESSION['time'] = $time;
              print ("Wrong! Please try a higher number. You have guessed $time time!");
            } else {
              $time++;
              $_SESSION['time'] = $time;
              print ("Wrong! Please try a smaller number. You have guessed $time time!");
            }
          } else {
            print "You must enter a number!";
          }
        }
      ?>
    </form>
  </body>
</html>