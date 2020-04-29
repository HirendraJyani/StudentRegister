<?php
require_once('config.php');
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Register Page</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/0fc1300939.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body class="text-center">



    <form class="form-signin" action="register.php" method="post data-netlify="true"">

      <div>
        <?php
        if(isset($_POST['create'])){

          $input_name   = $_POST['input_name'];
          $input_rollno = $_POST['input_rollno'];

          $sql = "INSERT INTO users (input_name,input_rollno) VALUES(?,?)";
          $stmtinsert = $db->prepare($sql);
          $result = $stmtinsert->execute([$input_name,$input_rollno]);
          if($result){
            echo 'Connection successfully MR. Hirendra Roll No 18cs29.';
          }else{
            echo 'There were errors while saving the data.';
          }

        }
         ?>
      </div>

      <img class="mt-5 mb-3" src="img/logo.png" alt="logo" width="72" height="72">
      <h1 class="h3 mt-3 mb-3 font-weight-normal">Registeration</h1>
      <label for="input_name" class="sr-only">Name</label>
      <input type="text" id="input_name" class="form-control" placeholder="Enter Name" name="input_name" value="">
      <label for="input_rollno" class="sr-only">Roll No</label>
      <input type="text"  id="input_rollno" class="form-control btn-register" placeholder="Enter Roll No" name="input_rollno" value="">

      <input class="mt-4 mb-3 btn btn-lg btn-primary btn-block" type="submit" name="create" value="Sign Up">
      <p class="mt-4 mb-3 text-muted">&copy; 2020</p>
    </form>

    <script src="https://code.jquery.com/jquery-3.5.0.min.js" integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
