<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <script src="jQuery-2.1.4.min.js"></script>
  </head>
  <body>

    <!-- Untuk Ajax -->
    <script type="text/javascript">
      $(document).ready(function(){
        $.ajax({
          url: 'query_ajax.php',
            dataType: 'json',
            type: 'post',
            success: function(hasil){
            alert(hasil.satu); // untuk tag html
            $(".satu").html(hasil.satu); // untuk tag html
            $(".dua").val(hasil.dua); // untuk form input
          }
        });
      });
    </script>

     <!-- Untuk menampilkan hasil dari ajax -->
    <div class="satu"></div>
    <br>
    <input type="text" class="dua" name="" value="">
  </body>
</html>