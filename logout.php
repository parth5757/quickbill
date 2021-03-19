    <?php
Session_start();
  echo '<script type="text/javascript">';
                        echo ' alert("Are you want to log-out")';  //not showing an alert box.
                        echo '</script>';

Session_destroy();
header('Location: login.php');
?>