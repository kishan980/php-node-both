<html>
<head>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
</head>

<body>
        <h1>Jquery Data....</h1>
    <div id="test" class="test abc">
        <h2>Test Box</h2>
        <p>Lorem Ipsum <span>Dolor sit amet</span></p>
    </div>
</body>
</html>
<script>
    $(document).ready(function(){
        var data = $("#test").attr('class');
        console.log(data);
    })
</script>