<form action="admin_action.php" method="post">

  <div class="container">
    <label><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="adminUsername" required>

    <label><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="adminPassword" required>

    <button type="submit" name="submit">Login</button>
  </div>


</form>

<?php
if (isset($_GET['Message'])) {
    print '<script type="text/javascript">alert("' . $_GET['Message'] . '");</script>';
}

?>