<?php
  $config = include('../config.php');
?>
<html>
  <head>
    <title>Create Table</title>
  </head>
  <body>
    <?php
      $server = $config['server'];
      $user = $config['user'];
      $pass = $config['password'];
      $mydb = 'sale';
      $table_name = 'Products';
      $mysqli = new mysqli($server, $user, $pass, $mydb);
      if ($mysqli->connect_errno) {
        die ("Cannot connect to $server using $user");
        exit();
      } else {
        $SQLcmd = "CREATE TABLE $table_name(
                    ProductID INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
                    Product_desc VARCHAR(50),
                    Cost INT, 
                    Weight INT, 
                    Numb INT)";
        $mysqli->select_db($mydb);
        if ($mysqli->query($SQLcmd)){
            print '<font size="4" color="blue" >Created Table';
            print "<i>$table_name</i> in database<i>$mydb</i><br></font>"; 
            print "<br>SQLcmd=$SQLcmd";
        } else {
          die ("Table Create Creation Failed SQLcmd=$SQLcmd");
        } 
        $mysqli->close();
      }
    ?>
  </body>
</html>