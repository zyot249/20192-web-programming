<html>
  <head>
    <title>Unit Convertor</title>
  </head>
  <body>
    <h1>Unit Convertor</h1>
    <hr>
    <br>
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="GET">
      <table>
        <tr>
          <td>Enter the angle:</td>
          <td><input type="text" name="angle" size="10" maxlength="10"></td>
          <td><input type="radio" name="unit" value="0">Radians</td>
          <td><input type="radio" name="unit" value="1">Degrees</td>
        </tr>
        <tr>
          <td align="right"><input type="submit" value="Submit"></td>
          <td align="left"><input type="reset" value="Reset"></td>
        </tr>
      </table>
      <?php
        function convert($angle, $unit) {
          if ($unit == 1) {
            $angle = $angle * 3.14159 /180;
            print "<br>$angle radians";
          } else {
            $angle = $angle * 180 /3.14159;
            print "<br>$angle degrees";
          }
        }

        if (isset($_GET['angle'])) {
          $angle = $_GET['angle'];
          $unit = $_GET['unit'];
          convert($angle, $unit);
        }
      ?>
    </form>
  </body>
</html>