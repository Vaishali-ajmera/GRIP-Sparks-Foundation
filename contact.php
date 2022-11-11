<?php
include 'config.php';
if($_SERVER['REQUEST_METHOD']== 'POST'){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $msg = $_POST['message'];
    
    $sql = "INSERT INTO `userinfodata` (`name`, `email`, `message`) VALUES ('$name', '$email', '$msg')";
    $result = mysqli_query($conn, $sql);
    
    if($result){
      echo "<script> alert('Thanks for contacting us!');
                      window.location='index.php';
            </script>";
     
 }
}

?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact Us</title>
    <!-- bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- link to css -->
    <link rel="stylesheet" href="css/style.css" />
    <!-- favicon links -->
    <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png" />
    <link rel="manifest" href="favicon/site.webmanifest" />
  </head>
  <body class = "bk-color">
    <!-- navbar -->
    <?php include 'nav.php'; ?>
    <!-- contact section starts -->
    <div class="container mb-5">
      <h1 class="text-center pt-4 heading">Contact Us</h1>
      <form action = "contact.php" method = "post">
    <div class="mb-3">
      <label for="InputName" class="form-label">Name</label>
      <input type="text" name = "name" class="form-control" >
    </div>
    <div class="mb-3">
      <label for="InputEmail1" class="form-label">Email address</label>
      <input type="email" name = "email" class="form-control">
    </div>
    <div class="mb-3">
      <label for="InputComments" class="form-label">Comments</label>
      <textarea name="message" class = "form-control"></textarea>
    </div>
    
    <button type="submit" value = "submit" class="btn btn-success">Submit</button>
  </form>

    </div>
        
    
    
    <!-- contact section ends -->
    <!-- footer -->
    <?php include 'footer.php'; ?>

    <!-- bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <!-- link to js -->
    <script src="js/index.js"></script>
  </body>
</html>

