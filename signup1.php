<?php

error_reporting(E_ALL);
ini_set('display_errors','1');
include_once('phpvalidation.php');

$nameValid = new ValidationResult("", "", "", true);
$lastnameValid = new ValidationResult("", "", "", true);
$emailValid = new ValidationResult("", "", "", true);
$passValid = new ValidationResult("", "", "", true);
$pass2Valid = new ValidationResult("", "", "", true);


   if ($_SERVER["REQUEST_METHOD"] == "POST") {

   $emailValid = ValidationResult::checkParameter("email",'/(.+)@([^\.].*)\.([a-z]{2,})/','Enter a valid email');
   $passValid = ValidationResult::checkParameter("password1",'/^[a-zA-Z]\w{8,16}$/', 'Enter a password between 8-16 characters ');
   $pass2Valid = ValidationResult::checkPassword2("password1","password2",'/^[a-zA-Z]\w{8,16}$/', 'Enter a password between 8-16 characters ');
   $nameValid = ValidationResult::checkParameter("first",'/^\S[a-zA-Z]+$/', 'Enter only characters');
   $lastnameValid = ValidationResult::checkParameter("last",'/^\S[a-zA-Z]+$/', 'Enter only characters');


   $v1 = $nameValid->isValid();
    echo "     name       $v1 </br>";
   $v1 = $lastnameValid->isValid();
    echo "     lasname       $v1  </br>";
   $v1 = $emailValid->isValid();
    echo "      email    $v1 </br>";
   $v1 = $passValid->isValid();
    echo "      pass1     $v1 </br>";
   $v1 = $pass2Valid->isValid();
    echo "      pass2    $v1 </br>";
   $v1 = $nameValid->getCssClassNameForm();
    echo "name form class :  $v1";

     if ($nameValid->isValid() && $lastnameValid->isValid() && $emailValid->isValid() && $passValid->isValid() &&
      $pass2Valid->isValid() )
     {
        header( 'Location: art-form-process.php' );
     }

   }
?>
<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Chapter 9</title>

 <!-- Bootstrap core CSS -->
 <link href="bootstrap3_defaultTheme/dist/css/bootstrap.css" rel="stylesheet">

 <!-- Custom styles for this template -->
 <link href="chapter09-project01.css" rel="stylesheet">
 <link href="special.css" rel="stylesheet">

 <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
 <!--[if lt IE 9]>
   <script src="bootstrap3_defaultTheme/assets/js/html5shiv.js"></script>
   <script src="bootstrap3_defaultTheme/assets/js/respond.min.js"></script>
 <![endif]-->


</head>

<body>



<?php include 'includes/php/header.php';?>

<div class="container">



   <div class="row">
      <div class="col-md-3">

        <div class="panel panel-default">
          <div class="panel-heading">Account</div>
          <div class="panel-body">

          <ul class="nav nav-pills nav-stacked">
          <li><a href="#">Login</a></li>
          <li class="active"><a href="#">Register</a></li>

          </ul>


          </div>
        </div>

      </div>
      <div class="col-md-9">



<form id="myform" name="myform" role="form" class="form-horizontal" method="POST" action="http://localhost/cs3500/chapter09/chapter09-project01.php" >
   <div class="page-header">

      <h2>Register Account</h2>
      <p>If you already have an account with us, please login at the login page.</p>
      </div>

     <div class="form-group " >
       <label for="first" class="col-md-3 control-label">First Name</label>
       <div class="col-md-9">
       <input type="text" class="form-control <?php echo $nameValid->getCssClassNameForm(); ?>" name="first" id="firstname" >
       <p class='<?php echo $nameValid->getCssClassNameP(); ?>' id="errorfirstname"></p>

       </div>
     </div>
     <div class="form-group">
       <label for="last" class="col-md-3 control-label">Last Name</label>
       <div class="col-md-9">
       <input type="text" class="form-control <?php echo $lastnameValid->getCssClassNameForm(); ?>" name="last" id="lastname" >
        <p class='<?php echo $lastnameValid->getCssClassNameP; ?>' id="errorlastname"> </p>
       </div>
     </div>
     <div class="form-group">
       <label for="email" class="col-md-3 control-label">Email</label>
       <div class="col-md-9">
       <input type="email" class="form-control <?php echo $emailValid->getCssClassNameForm(); ?>" name="email" id="correo" >
        <p class='<?php echo $emailValid->getCssClassNameP(); ?>' id="errorcorreo"> </p>
       </div>
     </div>


     <div class="form-group ">
       <label for="password1" class="col-md-3 control-label">Password</label>

       <div class="col-md-9">
       <input type="password" class="form-control <?php echo $passValid->getCssClassNameForm(); ?>" name="password1" id="pass1" >
       <p class='<?php echo $passValid->getCssClassNameP(); ?>' id="errorpass1" > </p>
       </div>
     </div>
     <div class="form-group">
       <label for="password2" class="col-md-3 control-label">Password Confirm</label>
       <div class="col-md-9">
       <input type="password" class="form-control <?php echo $pass2Valid->getCssClassNameForm(); ?>" name="password2" id="pass2" >
        <p class='<?php echo $pass2Valid->getCssClassNameP(); ?>' id="errorpass2"> </p>
       </div>
     </div>
  <div class="form-group">
    <div class="col-md-offset-3 col-md-9">
      <div class="checkbox">
        <label>
          <input type="checkbox" name="privacy" id="privacy"> I agree to the <a href="#">privacy policy</a>
        </label>
      </div>
    </div>
  </div>


  <div class="form-group">
    <div class="col-md-offset-3 col-md-9">
      <button  id="submitButton" type="submit" class="btn btn-primary" name="submitButton" >Register</button>
    </div>
  </div>


   </form>



<script type="text/JavaScript" src="jsvalidation.js"></script>



</div>
</div>





</div>  <!-- end container -->

<?php include "includes/php/footer.php" ?>

 <!-- Bootstrap core JavaScript
 ================================================== -->
 <!-- Placed at the end of the document so the pages load faster -->
 <script src="bootstrap3_defaultTheme/assets/js/jquery.js"></script>
 <script src="bootstrap3_defaultTheme/dist/js/bootstrap.min.js"></script>
</body>
</html>
