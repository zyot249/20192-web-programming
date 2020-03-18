<html>
  <head>
    <title>Conditional Test</title>
  </head>
  <body>
    <?php
      $first = $_GET["firstName"]; 
      $middle = $_GET["middleName"];
      $last = $_GET["lastName"];
      print("Hi $first! Your full name is $last $middle $first, <br></br>");
      if($first == $last) {
        print("$first and $last are equal");
      }
      if($first < $last) {
        print("$first is less than $last");
      }
      if($first > $last) {
        print("$first is greater than $last");
      }
      print("<br></br>");

      $grade1 = $_GET["grade1"];
      $grade2 = $_GET["grade2"];
      $final = (2 * $grade1 + 3 * $grade2)/5;
      $rate;

      if($final > 89) {
        $rate = "A";
        print("Your final grade is $final. You got a A. Congratulation!");
      } elseif ($final > 79) {
        $rate = "B";
        print("Your final grade is $final. You got a B.");
      } elseif ($final > 69) {
        $rate = "C";
        print("Your final grade is $final. You got a C.");
      } elseif ($final > 59) {
        $rate = "D";
        print("Your final grade is $final. You got a D.");
      } elseif ($final >= 0) {
        $rate = "F";
        print("Your final grade is $final. You got a F.");
      } else {
        $rate = "Illegal";
        print("Illegal grade less than 0. Final grade = $final");
      }

      print("<br></br>");
      switch($rate) {
        case "A": print("Excellent!"); break;
        case "B": print("Good!"); break;
        case "C": print("Not bad!"); break;
        case "D":
        case "F": print("You have to try again!"); break;
        default: print("Illegal grade!");
      }
    ?>
  </body>
</html>