<?php
if($_SESSION["user_role"] == '0'){
  header("location: $adminUrl/admin/post.php");
}
?>
