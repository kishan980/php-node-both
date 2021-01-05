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
</div>


<ul id="list">
    <li>Orange</li>
    <li class="test">Banana</li>
    <li>Grapes</li>
    <li class="test">Apple</li>
    <li>Guava</li>
</ul>
</body>
</html>
<script>
    $(document).ready(function(){
       // $("#list li").css("border","2px solid red");
        //$("#list li").css("border","2px solid red");
        //$("#list").css("border","2px solid red");
        //$("#list").css("color","red");
        //$(".test").css("border","2px solid red");
        //$("*").css("border","2px solid red");
        //$("li:first-child").css("border","2px solid red");
        //$("li:first").css("border","2px solid red");
        //$("li:last").css("border","2px solid red");
        //$("ul li:eq(2)").css("border","2px solid red");
        //$("ul li:lt(2)").css("border","2px solid red");
        $("ul li:gt(1)").css("border","solid red");
    });
</script>