<html>
    <head>
        <script
                src="https://code.jquery.com/jquery-3.5.1.js"
                integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
                crossorigin="anonymous"></script>
<!---->
<!--        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"-->
<!--                integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"-->
<!--                crossorigin="anonymous"></script>-->

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

    <div class="row-fluid">
        <div class="col-md-4">
            <h2>section1 </h2>
        </div>
        <div class="col-md-4">
            <h2>section2 </h2>
        </div>
        <div class="col-md-4">
            <h2>section3 </h2>
        </div>
    </div>
    <div class="row-fluid">
        <div class="col-md-4">section4</div>
        <div class="col-md-4">section5</div>
    </div>
    </body>
<script>
        $(document).ready(function(){
                //console.log("hello");
            var htmnl = $("#test_one").html();
            console.log(htmnl);

            var htmlData = $("#test_tow").html();
            console.log(htmlData);
        })
</script>
</html>