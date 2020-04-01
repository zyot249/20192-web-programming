<?php
  require_once "Page.php";
  session_start();
?>
<html>
  <head>
    <title>Pages Management</title>
  </head>
  <body>
    <h1>Pages Management</h1>
    <hr>
    <?php
      if (isset($_SESSION['pages'])) {
        $pages = $_SESSION['pages'];
      } else {
        $pages = array();
      }
      echo count($pages);
      if (isset($_POST['content']) && isset($_POST['creator']) && isset($_POST['title'])) {
        $content = $_POST['content'];
        $creator = $_POST['creator'];
        $title = $_POST['title'];
        if ((count($content) != 0) && (count($creator) != 0) && (count($title) != 0)) {
          $newPage = new Page($title, $content, $creator);
          echo $newPage->get();
          $pages[] = $newPage;
        }
      }
    ?>
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
      <table>
        <tr>
          <td>
            <label>Name: </label>
          </td>
          <td>
            <input type="text" name="creator">
          </td>
        </tr>
        <tr>
          <td>
            <label>Title: </label>
          </td>
          <td>
            <input type="text" name="title">
          </td>
        </tr>
        <tr>
          <td>
            <label>Content of page: </label>
          </td>
          <td>
            <textarea rows="6" cols="60" name="content" placeholder="Enter the content...."></textarea>
          </td>
        </tr>
      </table>     
      <br>
      <input type="submit" value="Create a Page">
      <input type="reset" value="Reset">
    </form>
    <hr>
    <h2>List of created pages:</h2>
    <ul>
      <?php
        for($i = 1; $i <= count($pages); $i++) {
          echo '<li><a href="PageManagement.php?index=' . $i . '">Page ' . $i . '</a></li>';
        }
      ?>
    </ul>
    <?php
      if (isset($_GET['index'])) {
        $curPage = $pages[$_GET['index'] - 1];
        $pageContent = $curPage->get();
        echo "<div><h2>Current page:</h2><br><div>$pageContent</div></div>";
      }
      $_SESSION['pages'] = $pages;
    ?>
  </body>
</html>