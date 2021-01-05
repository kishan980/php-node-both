<?php include "header.php"; 
      include "session-manage.php";
?>

<?php
 include "config.php";

      if(isset($_POST["submit"])){
        $userId = mysqli_real_escape_string($conn,$_POST["user_id"]);
        $fname  = mysqli_real_escape_string($conn,$_POST["f_name"]);
        $lname  = mysqli_real_escape_string($conn,$_POST["l_name"]);
        $userName = mysqli_real_escape_string($conn,$_POST["username"]);
        $role = mysqli_real_escape_string($conn,$_POST["role"]);

        $sqlUpdate = "update user set first_name='$fname',last_name='$lname',username='$userName',role='$role' where user_id='$userId'";
        if(mysqli_query($conn,$sqlUpdate)){
          header("location: $adminUrl/admin/users.php");
      }
    }
?>
  <div id="admin-content">
      <div class="container">
          <div class="row">
              <div class="col-md-12">
                  <h1 class="admin-heading">Modify User Details</h1>
              </div>
              <div class="col-md-offset-4 col-md-4">
                <?php
              
                $user_id = $_GET["edit"];
                $sqlEdit = "select * from  user where user_id='$user_id'";
                $result  = mysqli_query($conn,$sqlEdit) or die("query Error");
                if(mysqli_num_rows($result)>0){
                    while($rowSingle = mysqli_fetch_assoc($result)){

                ?>

                  <!-- Form Start -->
                  <form  action="" method ="POST">
                      <div class="form-group">
                          <input type="hidden" name="user_id"  class="form-control" value="<?php echo $rowSingle["user_id"]; ?>" placeholder="" >
                      </div>
                          <div class="form-group">
                          <label>First Name</label>
                          <input type="text" name="f_name" class="form-control" value="<?php echo $rowSingle["first_name"]; ?>" placeholder="" required>
                      </div>
                      <div class="form-group">
                          <label>Last Name</label>
                          <input type="text" name="l_name" class="form-control" value="<?php echo $rowSingle["last_name"]; ?>" placeholder="" required>
                      </div>
                      <div class="form-group">
                          <label>User Name</label>
                          <input type="text" name="username" class="form-control" value="<?php echo $rowSingle["username"]; ?>" placeholder="" required>
                      </div>
                      <div class="form-group">
                          <label>User Role</label>
                          <select class="form-control" name="role" value="<?php echo $row['role']; ?>">
                            <?php
                            if($rowSingle["role"]==1)
                            {
                              echo '<option value="0">normal User</option>
                                    <option value="1" selected>Admin</option>';
                            }else{
                              echo '
                                    <option value="0" selected>normal User</option> 
                                    <option value="1">Admin</option>';
                            }

                            ?>
                             
                          </select>
                      </div>
                      <input type="submit" name="submit" class="btn btn-primary" value="Update" required />
                  </form>
             <?php } } ?>
                  <!-- /Form -->
              </div>
          </div>
      </div>
  </div>
<?php include "footer.php"; ?>
