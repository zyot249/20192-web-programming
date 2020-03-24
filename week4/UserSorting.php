<html>
  <head>
    <title> User Sorting </title>
  </head>
  <body>
    <?php
      function user_sort($a, $b) {
        // smarts is all-important, so sort it first
        if($b == 'smarts') {
          return 1;
        } else if($a == 'smarts') {
          return -1;
        }

        return ($a == $b) ? 0 : (($a < $b) ? -1 : 1);
      }

      $values = array('name' => 'Buzz Lightyear',
                      'email_address' => 'buzz@starcommand.gal',
                      'age' => 32,
                      'smarts' => 'some');
                      
      $submitted = $_POST['submitted'];
      $sort_type = $_POST['sort_type'];

      
    ?>
    <form action="UserSorting.php" method="post">
      <table style="width: 100%">
        <tr>
          <td>
            <input type="radio" name="sort_type" value="sort" checked="checked" />Standard sort<br />
            <input type="radio" name="sort_type" value="rsort" />Reverse sort<br />
          </td>
          <td>
            <input type="radio" name="sort_type" value="usort" />User-defined sort<br />
            <input type="radio" name="sort_type" value="ksort" />Key sort<br />
          </td>
          <td>
            <input type="radio" name="sort_type" value="krsort" />Reverse key sort<br />
            <input type="radio" name="sort_type" value="uksort" />User-defined key sort<br />
          </td>
          <td>
            <input type="radio" name="sort_type" value="asort" />Value sort<br />
            <input type="radio" name="sort_type" value="arsort" />Reverse value sort<br />
            <input type="radio" name="sort_type" value="uasort" />User-defined value sort<br />
          </td>
        </tr>
        
        
        
      </table>

      <p align="center">
        <input type="submit" value="Sort" name="submitted" />
      </p>
    </form>

    <table style="width: 100%">
      <tr>
        <td style="width: 25%">
          <p>
            Values unsorted(before sort):
          </p>
        </td>
        <td style="width: 25%">
          <ul>
            <?php
              foreach($values as $key=>$value) {
                echo "<li><b>$key</b>: $value</li>";
              }
            ?>
          </ul>
        </td>
        <?php
          if($submitted) {
            if($sort_type == 'usort' || $sort_type == 'uksort' || $sort_type == 'uasort') {
              $sort_type($values, 'user_sort');
            }
            else {
              $sort_type($values);
            }
            print "<td>
                    <p>
                      Values sorted by $sort_type:
                    </p>
                  </td>";
            print "<td><ul>";
            foreach($values as $key=>$value) {
              echo "<li><b>$key</b>: $value</li>";
            }
            print "</ul></td>";
          } else {
            print '<td></td><td></td>';
          }
        ?>
      </tr>
    </table>
  </body>
</html>