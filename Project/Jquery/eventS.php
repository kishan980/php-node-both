<html>
<head>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
</head>
    <body>
    <form action="#" id="formSubmit">
        <label for="fname">First name:</label><br>
        <input type="text" id="fname" name="fname"  id="fname" value="John"><br>
        <label for="lname">Last name:</label><br>
        <input type="text" id="lname" name="lname" id="lname"  value="Doe"><br><br>


        <select id="cars">
            <option value="volvo">Volvo</option>
            <option value="saab">Saab</option>
            <option value="mercedes">Mercedes</option>
            <option value="audi">Audi</option>
        </select>

        <input type="submit" value="Submit">

    </form>
    </body>
<div id="valData">

</div>
</html>
<script>
    $(document).ready(function(){
        $("#fname,#lname,#cars").focus(function(){
            $(this).css('background-color',"aqua");
        });

        $("#fname,#lname,#cars").blur(function(){
            $(this).css("background-color","red");
        });

        $("#cars").change(function(){
           $(this).css("background-color","pink");
          var Data= $(this).val();
          $("#valData").html(Data);
        });
        $("#formSubmit").submit(function(){
            //alert("yes");
        })
    });
</script>
<script>
    $(document).ready(function(){
        $("#formSubmit").submit(function(){
          var fbname = $("#fname").val();
          var lname = $("#lname").val();
          alert(fbname +""+ lname);
        });
    })
</script>