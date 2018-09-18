<!DOCTYPE <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="stylesheet" type="text/css" media="screen" href="style.css" />     -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="main.js"></script>

<style>


.head{
    background-color: rgb(55, 56, 58);
    text-align: center;
    color: white;
    font-family: 'Franklin Gothic Medium';
    font-size: 30px;
    margin-bottom: 50px;
}

/* .button{
    width: 30%;
    height: auto;
} */

.device{
    width: 30;
}

.button{
width: 40%;
height: auto;
}

/* -------------------------------------------------------------------------------------------------------- */

@media (max-width: 600px) {
    .button{
    width: 20%;
    height: auto;
    }

}


</style>
</head>


<!-- ------------------------------ -->
<body>


<h2 class="head">DEVICE CONTROL</h2>                
           
    <!-- <input type="text" id="data_pin_7" value=""> -->

    <input type="image" id="send_pin_7_high" src="img/on.png" class="button">ON 7</button>                 
    <input type="image" id="send_pin_7_low" src="img/OFF.png" class="button">OFF 7</button>
    <p id="result_pin_7" ></p>
    
     
<!-- pin 7 -->
<script>
    $(document).ready(function() {
        $("#send_pin_7_high").click(function(event){
            // var pin_7 =  $("#data_pin_7").val();            
            $("#result_pin_7").load('pin_7.php', {"data_pin_7":'1'} );
                $("#data_pin_7").val('');                
        });
    });
</script>
<script>
    $(document).ready(function() {
        $("#send_pin_7_low").click(function(event){
            // var pin_7 =  $("#data_pin_7").val();            
            $("#result_pin_7").load('pin_7.php', {"data_pin_7":'0'} );
                $("#data_pin_7").val('');                
        });
    });
</script>


<!-- 
<script>    
    $(function () {
        $("#send_pin_7_high").on("click", function () {
            $("#data_pin_7").val(set_pin_7());
        });
    });
        function set_pin_7() {
            return "1";
        }
</script>
<script>
    
    $(function () {
        $("#send_pin_7_low").on("click", function () {
            $("#data_pin_7").val(set_pin_7());
        });
    });
        function set_pin_7() {
            return "0";
        }
</script>  -->







<!-- pin 13 -->
<script>
    $(document).ready(function() {
        $("#send_pin_13").click(function(event){
            var pin_13 =  $("#data_pin_13").val();            
            $("#result_pin_13").load('pin_13.php', {"data_pin_13":pin_13} );
                $("#data_pin_13").val('');                
        });
    });
</script>
<script>
    $(function () {
        $("#send_pin_13").on("click", function () {
            $("#data_pin_13").val(set_pin_13());
        });
    });
        function set_pin_13() {
            return "1";
        }
</script>

    
</body>
</html>