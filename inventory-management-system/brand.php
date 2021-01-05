<?php
include('database-connection.php');
include('function.php');
if(!isset($_SESSION["type"])){

	header("loaction:login.php");
}

if($_SESSION['type']!="admin"){
	header('location:index.php');
}
include("header.php");
?>
	<span id="alert_action"></span>
 		<div class="row">
  		<div class="col-lg-12">
   		<div class="panel panel-default">
                <div class="panel-heading">
                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-6">
                        <div class="row">
                            <h3 class="panel-title">Brand List</h3>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">
                        <div class="row" align="right">
                             <button type="button" name="add" id="add_button" data-toggle="modal" data-target="#brandModal" class="btn btn-success btn-xs">Add</button>     
                        </div>
                    </div>
                    <div style="clear:both"></div>
                </div>
                <div class="panel-body">
                    <div class="row">
                     <div class="col-sm-12 table-responsive">
                      <table id="brand_data" class="table table-bordered table-striped">
                       <thead><tr>
				         <th>ID</th>
				         <th>Category Name</th>
				         <th>Brand Name</th>
				         <th>Status</th>
				         <th>Edit</th>
				         <th>Delete</th>
				        </tr></thead>
                      </table>
                     </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

 <div id="brandModal" class="modal fade">
     <div class="modal-dialog">
      <form method="post" id="brand_form">
       <div class="modal-content">
        <div class="modal-header">
         <button type="button" class="close" data-dismiss="modal">&times;</button>
     	 <h4 class="modal-title"><i class="fa fa-plus"></i> Add Brand</h4>
        </div>
        <div class="modal-body">
         <div class="form-group">
          <label>Select Category</label>
          <select name="category_id" id="category_id" class="form-control" required>
          <option value="">Select Category</option>
          <?php echo fill_category_list($connect); ?>
       </select>
         </div>
         <div class="form-group">
       <label>Enter Brand Name</label>
       <input type="text" name="brand_name" id="brand_name" class="form-control" required />
      </div>
        </div>
        <div class="modal-footer">
         <input type="hidden" name="brand_id" id="brand_id" />
         <input type="hidden" name="btn_action" id="btn_action" />
         <input type="submit" name="action" id="action" class="btn btn-info" value="Add" />
         <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
       </div>
      </form>
     </div>
    </div>
<script>
	$(document).ready(function(){
  
  	$("#add_button").click(function(){
			$("#barndModal").modal('show');
			$('#brand_form')[0].reset();
			$('.modal-title').html('<i class="fa fa-plus">Add Brand</i>');
			$('#action').val('Add');
			$('#btn_action').val('Add');	
		});


    $(document).on('submit','#brand_form', function(event)
    {
      event.preventDefault();
      $('#action').attr('disabled','disabled');
      var form_data = $(this).serialize();
       $.ajax({
           url:"brand_action.php",
           method:"POST",
           data:form_data,
           success:function(data)
           {
            $('#brand_form')[0].reset();
            $('#brandModal').modal('hide');
            $('#alert_action').fadeIn().html('<div class="alert alert-success">'+data+'</div>');
            $('#action').attr('disabled', false);
            brandDataTable.ajax.reload();
           }
          })
     });

		var brandDataTable = $('#brand_data').DataTable({
			"processing":true,
			"serverSide":true,
			"order":[],
			"ajax":{
				url:"brand_fetch.php",
				type:"POST"
			},
			"columnDefs":[
					{
						"targets":[4,5],
						"orderable":false,
					},
			],
			"pageLength":10
		});

      $(document).on('click','.update',function(){
          var brand_id = $(this).attr('id');
          var btn_action = 'fetch_single';

          $.ajax({
              url:"brand_action.php",
              method:"POST",
              data:{brand_id:brand_id,btn_action:btn_action},
              dataType:'json',
              success:function(data)
              {
                  $('#brandModal').modal('show');
                  $('#category_id').val(data.category_id);
                  $('#brand_name').val(data.brand_name);
                  $('.modal-title').html('<i class="fa fa-pencil-square-o"></i>Edit Brand');
                  $('#brand_id').val(brand_id);
                  $('#action').val('Edit');
                  $('#btn_action').val('Edit');
              }
          });

      })


   $(document).on('click','.delete',function(){
    var brand_id = $(this).attr('id');
    var status = $(this).data('status');
    var btn_action ='delete';

    if(confirm('Are you soure you want to change status?'))
    {
      $.ajax({
        url:'brand_action.php',
        method:'POST',
        data:{brand_id:brand_id,status:status,btn_action:btn_action},
        success:function(data){
            $("#alert_action").fadeIn().html('<div class="alert alert-info">'+data+'</div>');
            brandDataTable.ajax.reload();
          }
        
          });
        }
      else
        {
        return false;
        }
    });

	 });
</script>
<?php
include('footer.php');
?>