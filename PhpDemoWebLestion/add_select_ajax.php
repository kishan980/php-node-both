<!DOCTYPE html>
<html>
<head>
	<title>Webslesson Tutorial</title>
	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  	 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
</head>
<body>
			<div class="container" style="width:500px; border:1px solid #ccc;">

			<br/> 

			<h2 align="center">Login</h2>

			<form id="add_tweet" method="post">
					
					<lable>User Name</lable>
					<input type="text" name="tweet" id="tweet" class="form-control"> 
					<br/>
				
					<button type="button" id="btn_tweet" name="btn_tweet" class="btn btn-default">Button</button>
					<br>
			</form>
			<br>
			</div>
			<div id="load_tweet">

			</div>
</body>
</html>

<script>
	$(document).ready(function(){
		$("#btn_tweet").click(function(){
		var tweet_txt = $("#tweet").val();
		if(
			tweet_txt =="")
		{
			alert("enter tweet plase");
		}
		if($.trim(tweet)!=''){
			$.ajax({
					url:"insert.php",
					method:"POST",
					data:{tweet:tweet_txt},
					dataType:"text",
					success:function(data){
						$("#tweet").val('');	
					}
				})
		}	
		

		});

		setInterval(function(){
			$("#load_tweet").load("fetch.php").fadeIn("slow")
		},1000);
	});
</script>