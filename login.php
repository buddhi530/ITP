
<?php
//include 'header.php';
include 'connection.php';
?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 3 | Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  
  
   <script>
   
       
     
            function submitForm() {

                var form_data = new FormData(document.getElementById("myForm"));
                form_data.append("label", "WEBUPLOAD");
                $.ajax({
                    url: "login_proc.php",
                    type: "POST",
                    data: form_data,
                    processData: false, // tell jQuery not to process the data
                    contentType: false   // tell jQuery not to set contentType
                }).done(function (data) {
                    console.log(data);
                    $("#example2").load(window.location + " #example2");

                    $('#name').val("");
                    $('#pass').val("");
                   

                var x = data;
           
           if ($.trim(data) == 'done') {
             window.location.href = "/my_project/index.php";
         }
          else {
           MessageManager.show(x);
          }  
           
      
            });
          return false;     
        }

  var MessageManager = {
        show: function(content) {
        $('#ajaxmsg').html(content);
        setTimeout(function(){
            $('#ajaxmsg').html('');
        }, 4000);
    }
}; 

 window.setTimeout(function() {
    $(".alert").fadeTo(500, 0).slideUp(500, function(){
        $(this).remove(); 
    });
}, 8000);




        </script>

        <script>
            function myFunction() {
                document.getElementById("myForm").reset();
            }
        </script>
        <script type="text/javascript">
            function phonenumber(inputtxt)
            {
                var phoneno = /^\d{10}$/;
                if (inputtxt.value.match(phoneno))
                {
                    return true;
                } else
                {
                    alert("Not a valid Phone Number");
                    return false;
                }
            }

        </script>
  
  
</head>



<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="index2.html"><b>Shanaz</b>Plastic</a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Sign in to start your session</p>

      <form name="myForm" id="myForm" action="" method="POST" enctype="multipart/form-datam" onsubmit="return submitForm();">
        <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="UserName" id="name" name="name" autocomplete="off">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
            <input type="password" class="form-control" placeholder="Password" id="pass" name="pass">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        
     
          <!-- /.col --><center>
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
          </div>
          <!-- /.col -->
          </center>
      </form>

    
    <div id='ajaxmsg'>
                    </div>
                <?php
              if(isset($_GET['msge'])){ ?>
                    <div class="alert alert-danger" role="alert">
                    <button type="button"  data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <center><strong>FAILED : </strong> <?php echo $_GET['msge']; ?><center>
                    </div>
                    <?php }  ?>


    
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>

</body>
</html>
