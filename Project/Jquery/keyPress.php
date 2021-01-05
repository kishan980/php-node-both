<html>
<head>

    <script
        src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
        crossorigin="anonymous"></script>
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
       $("body").on("keypress",function(){
            $(this).css("background-color","red");
       });
   })
</script>