<html>
<head>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container-fluid">
    <h1>Hello World!</h1>
    <p>Resize the browser window to see the effect.</p>
    <p>The columns will automatically stack on top of each other when the screen is less than 768px wide.</p>
    <div class="row">
        <div class="col-sm-4" style="background-color:lavender;">.col-sm-4</div>
        <div class="col-sm-4" style="background-color:lavenderblush;">.col-sm-4</div>
        <div class="col-sm-4" style="background-color:lavender;">.col-sm-4</div>
    </div>
</div>
<h1>Kishan yadav</h1>
<div class="container">
    <div id="test_one" class="md4">
        <h2>Test Box One</h2>
        <p>Data kishan add jquery lerning selft </p>
    </div>

    <div id="test_tow">
        <h2>Test Box One</h2>
        <p>Data kishan add jquery lerning selft </p>
    </div>
    <ul id="list">
        <li>Orange</li>
        <li class="test">Banana</li>
        <li>Grapes</li>
        <li class="test">Apple</li>
        <li>Guava</li>
    </ul>
</div>



</body>
</html>
<script>
$(document).ready(function(){
    $("#test_one").click(function(){
        $("#test_one").css("background-color","red");
    });

    $("#test_tow").click(function(){
        $("#test_tow").css("background-color","blue");
    });

    $("#list").dblclick(function(){
        $("#list").css("background-color","yellow")
    });
    $(".test").contextmenu(function(){
    var  adata=  $(".test").html();
    console.log(adata);
    });

    $(".container").mouseenter(function(){
        $(".container").css("color","aqua");
    })
    $(".container").mouseleave(function(){
        $(".container").css("color","yellow");
    });
    $(".container").mousedown(function(){
        $(".container").css("color","green");
    });

    $(".container").mouseup(function(){
        $(".container").css("color","#800080");
    });
});
</script>