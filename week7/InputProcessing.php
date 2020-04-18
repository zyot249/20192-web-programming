<html>
  <head>
    <title>Input Processing</title>
  </head>
  <body>
    <?php
      $email = $_POST['email'];
      $url = $_POST['url'];
      $phone = $_POST['phone'];

      if (!preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $email)) {
        print "Invalid email address : $email<br>";
      } else {
        print "Valid email address : $email<br>";
      }

      if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i", $url)) {
        print "Invalid URL address : $url<br>";
      } else {
        print "Valid URL address : $url<br>";
      }

      if (!preg_match('/^[0-9]{10}+$/', $phone)) {
        print "Invalid phone number : $phone<br>";
      } else {
        print "Valid phone number : $phone<br>";
      }
    ?>
  </body>
</html>