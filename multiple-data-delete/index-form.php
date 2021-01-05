<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Delete Multiple Data</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div id="main">
    <div id="header">
        <h1>Delete Multiple Data with <br>PHP & Ajax CRUD</h1>
    </div>
    <div id="sub-header">
        <button id="delete-btn">Delete</button>
    </div>
    <div id="table-data"></div>
</div>

<div id="error-message"></div>
<div id="success-message"></div>

<script type="text/javascript" src="js/jquery.js"></script>
<script>
    $(document).ready(function(){

        function loadData(){
            $.ajax({
                url: "loadDataForm.php",
                type: "POST",
                success: function(data) {
                    $("#table-data").html(data);
                }
            });
        }
        loadData();

        $("#delete-btn").on('click',function(){
            var id=[];
            $(':checkbox:checked').each(function(key){
                id[key]=$(this).val();
            });
            if(id.length === 0){
                alert("please select at lest one select box.....");
            }else{
                $.ajax({
                    url:"delete-from.php",
                    type:"POST",
                    data:{id:id},
                    success:function(data){
                        if(data==1){
                            $("#success-message").html("Delete Data Successfully..").slideDown();
                            $("#error-message").slideUp();
                            loadData();
                            setTimeout(function(){
                                $("#success-message").slideUp()
                            },5000);
                        }else{
                            $("#error-message").html("Delete Data Successfully..").slideDown();
                            $("#success-message").slideUp();
                            setTimeout(function(){
                                $("#error-message").slideUp();
                            },5000);
                        }
                    }
                })
            }
        });

    });
</script>