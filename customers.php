<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>All Customers</title>
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

    <!-- main section starts -->
    <div class="container mb-5">
        <h1 class="text-center pt-4 heading">Our Customers</h1>
        <br>
            <!-- <div class="row mb-5">
                <div class="col"> -->
                    <div class="table-responsive-sm">
                    <table class="table table-hover table-striped table-condensed table-bordered">
                        <thead>
                            <tr>
                            <th scope="col" class="text-center py-2">Sno</th>
                            <th scope="col" class="text-center py-2">Account Holder Name</th>
                            <th scope="col" class="text-center py-2">E-mail</th>
                            <th scope="col" class="text-center py-2">Account Number</th>
                            <th scope="col" class="text-center py-2">Account Balance(in Rs.)</th>                            
                            <th scope="col" class="text-center py-2">Send Money From</th>                            
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                include 'config.php';
                                $selectquery = "SELECT * FROM users";
                                $query = mysqli_query($conn,$selectquery);                            
                                while($result = mysqli_fetch_array($query)){
                            ?>
                            <tr>
                                <td class="py-2"><?php echo $result['sno'] ?></td>
                                <td class="py-2"><?php echo $result['name']?></td>
                                <td class="py-2"><?php echo $result['email']?></td>
                                <td class="py-2"><?php echo $result['account_no']?></td>
                                <td class="py-2"><?php echo $result['balance']?></td>
                                <td class = "text-center"><a href="send_money.php?account_no= <?php echo $result['account_no'] ;?> "> <button type="button" class="btn sbutton ">
                                    Transfer money</button></a></td> 
                            </tr>
                        <?php
                            }
                        ?>
            
                        </tbody>
                    </table>
                    </div>
                <!-- </div>
            </div>  -->
         </div>
         

    

    <!-- footer -->
    <?php include 'footer.php'; ?>

    <!-- bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <!-- link to js -->
    <script src="js/index.js"></script>
  </body>
</html>

