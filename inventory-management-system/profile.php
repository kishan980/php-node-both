<?php
include('database-connection.php');
if(!$_SESSION['type']){
	header('location:login.php');
}
$query = "select * from tbl_users where user_id ='".$_SESSION['user_id']."'";
$stetsment = $connect->prepare($query);
$stetsment->execute();
$resultProfile = $stetsment->fetchAll();

$name    ="";
$email 	 ="";
$user_id ="";

foreach($resultProfile as $rowProfile){
	$name  = $rowProfile["user_name"];
	$email = $rowProfile["user_email"];
}
include('header.php');
?>

	<div class="panel panel-default">
     <div class="panel-heading">Edit Profile</div>
     <div class="panel-body">
       <form method="post" id="edit_profile_form">
         <span id="message"></span>
           <div class="form-group">
            <label>Name</label>
            <input type="text" name="user_name" id="user_name" class="form-control" value="<?php echo $name; ?>" required />
             </div>
     			
     			<div class="form-group">
      			<label>Email</label>
      			<input type="email" name="user_email" id="user_email" class="form-control" required value="<?php echo $email; ?>" />
     			</div>
     			<hr />
     				<label>Leave Password blank if you do not want to change</label>
     				<div class="form-group">
      				<label>New Password</label>
      				<input type="password" name="user_new_password" id="user_new_password" class="form-control" />
     				</div>
     			<div class="form-group">
      			<label>Re-enter Password</label>
      			<input type="password" name="user_re_enter_password" id="user_re_enter_password" class="			form-control" />
      			<span id="error_password"></span> 
     			</div>
     			<div class="form-group">
      			<input type="submit" name="edit_prfile" id="edit_prfile" value="Edit" class="btn btn-info" />
     </div>
    </form>
   </div>
  </div>

<script>
	$(document).ready(function(){
		$('#edit_profile_form').on('submit',function(){
				event.preventDefault();
				if($("#user_new_password").val() !=''){
					if($('#user_new_password').val() != $('#user_re_enter_password').val()){
							$('#error_password').html('<lable class="text-danger">Password Not Match.....!</lable>');
							return false;
					}else{
							$('#error_password').html('');
					}
				}
				$('#edit_prfile').attr('disabled','disbaled');
				var form_data = $(this).serialize();
				$.ajax({
					url:"edit_profile.php",
					method:"POST",
					data:form_data,
					success:function(data){
						$('#edit_prfile').attr('disabled',false);
						$('#user_new_password').val('');
						$('#user_re_enter_password').val('');
						$('#message').html(data);
					}
				})
		});
	});
</script>