
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Timetable</title>
    
    
   
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" /> 
 
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
    
    <link href="css/fontawesome-all.css" rel="stylesheet">
    
    <link href="//fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <script src="css/jquery-1.11.1.min.js" type="text/javascript"></script>
    <script src="css/jquery.validate.js"></script>

    <style type="text/css">
        .error{
            color: red !important;
        }
            .img {
  background-image: url('https://images.unsplash.com/photo-1506784365847-bbad939e9335?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60');
 background-repeat: no-repeat;
  background-size: cover;
}
.form-body-w3-agile.text-center {
    background: #1b1212b8;
    padding: 3em 5em;
    -webkit-box-shadow: 0px 0px 20px 0px rgba(0, 0, 0, 0.34);
    -moz-box-shadow: 0px 0px 20px 0px rgba(0, 0, 0, 0.34);
    box-shadow: 0px 0px 20px 0px rgba(0, 0, 0, 0.34);
}
    </style>

     <script>
        
    
    $("document").ready(function(){
        $('form[id="formval"]').validate({
          rules: {
            username: 'required',           
            password: {
              required: true,
              
              
          },
          messages: {
            username: 'This field is required',         
            password: {
              required:'This field is required',
              
            }
          },
          submitHandler: function(form) {
            form.submit();
          }
        }
        });
    });
    </script>

     <!-- <script>
        $(document).ready(function(){
                $("#login").click(function(){
                    <?php
                    //session_destroy();
                    ?>
                });
            });
    </script> -->


  
    
</head>

<body >
    <div class="bg-page py-5 img" style="background-color: #3c8dbc ">
        <div class="container">
            <!-- main-heading -->
            <h2 class="main-title-w3layouts mb-2 text-center text-black">Admin Login</h2>
           
            <!--// main-heading -->
            <div class="form-body-w3-agile text-center w-lg-50 w-sm-75 w-100 mx-auto mt-5">
                <form  method="post" action="" id="formval" >
                    <div>
                        <label>Username</label>
                        <input type="text" name="username" class="form-control" placeholder="Username">
                    </div>
                    <div>
                        <label>Password</label>
                        <input type="password"  name="password" class="form-control" placeholder="Password">
                    </div>
                    
                    <button type="submit" name="btn_login" class="btn btn-primary error-w3l-btn mt-sm-5 mt-3 px-4" id="login">Login</button>
                </form>
            </div>
        </div>
    </div>


   

</body>

</html>
<?php 


    include "database.php";

    if (isset($_POST['btn_login'])) {
        
        if (isset($_POST['username']) and isset($_POST['password']))
{
    $username = $_POST['username'];
    $password = $_POST['password'];
    $query ="SELECT * from admin where username= '$username' and password= '$password'";

    $result = mysqli_query($connection, $query);
    $count = mysqli_num_rows($result);

    if ($count == 1)
    {
        //$_SESSION['username'] = $username;
        header("location:dashboard.php");      
        
    }
    else
    {
       
    echo "<script type='text/javascript'>alert('Invalid Login Credentials')</script>";
    //echo "invalid credentials";
    header("location.href= 'index.php';");
    
    }
}
}
?>