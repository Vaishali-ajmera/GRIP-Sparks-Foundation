<?php
include 'config.php';

if(isset($_POST['submit']))
{
    $from = $_GET['account_no'];
    $to = $_POST['to'];
    $amount = $_POST['amount'];

    $sql = "SELECT * from users where account_no=$from";
    $query = mysqli_query($conn,$sql);
    $sql1 = mysqli_fetch_array($query); // returns array or output of user from which the amount is to be transferred.

    $sql = "SELECT * from users where account_no=$to";
    $query = mysqli_query($conn,$sql);
    $sql2 = mysqli_fetch_array($query);



    // constraint to check input of negative value by user
    if (($amount)<0)
   {
        echo '<script type="text/javascript">';
        echo ' alert("Oops! Negative values cannot be transferred")';  // showing an alert box.
        echo '</script>';
    }


  
    // constraint to check insufficient balance.
    else if($amount > $sql1['balance']) 
    {
        
        echo '<script type="text/javascript">';
        echo ' alert("Bad Luck! Insufficient Balance")';  // showing an alert box.
        echo '</script>';
    }
    


    // constraint to check zero values
    else if($amount == 0){

         echo "<script type='text/javascript'>";
         echo "alert('Oops! Zero value cannot be transferred')";
         echo "</script>";
     }


    else {
        
                // deducting amount from sender's account
                $newbalance = $sql1['balance'] - $amount;
                $sql = "UPDATE users set balance=$newbalance where account_no=$from";
                mysqli_query($conn,$sql);
             

                // adding amount to reciever's account
                $newbalance = $sql2['balance'] + $amount;
                $sql = "UPDATE users set balance=$newbalance where account_no=$to";
                mysqli_query($conn,$sql);
                
                $sender = $sql1['name'];
                $receiver = $sql2['name'];
                $sql = "INSERT INTO transaction(`sender`, `receiver`, `balance`) VALUES ('$sender','$receiver','$amount')";
                $query=mysqli_query($conn,$sql);

                if($query){
                     echo "<script> alert('Hurray! Transaction is Successful');
                                     window.location='transactions.php';
                           </script>";
                    
                }

                $newbalance= 0;
                $amount =0;
        }
    
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Easy Money Transfer</title>
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
  <body>
    <!-- navbar -->
    <?php include 'nav.php'; ?>

    <body style = "background-color: #31525b;">
 
  <!-- main section starts -->
    <div class="container mb-5">
       <h2 class="text-center pt-4 heading1">Easy Money Transfer</h2>
           <?php
               include 'config.php';
               $sid=$_GET['account_no'];
               $sql = "SELECT * FROM  users where account_no=$sid";
               $result=mysqli_query($conn,$sql);
               if(!$result)
               {
                   echo "Error : ".$sql."<br>".mysqli_error($conn);
               }
               $rows=mysqli_fetch_assoc($result);
           ?>
           <form method="post" name="tcredit" class="tabletext" ><br>
       <div>
           <table class="table table-striped table-condensed table-bordered">
              <thead>
               <tr>
                   <th class="text-center">Account No.</th>
                   <th class="text-center">Account Name</th>
                   <th class="text-center">E-mail</th>
                   <th class="text-center">Account Balane(in Rs.)</th>
               </tr>
               </thead>
               <tbody>
               <tr>
                   <td class="py-2"><?php echo $rows['account_no'] ?></td>
                   <td class="py-2"><?php echo $rows['name'] ?></td>
                   <td class="py-2"><?php echo $rows['email'] ?></td>
                   <td class="py-2"><?php echo $rows['balance'] ?></td>
               </tr>
               </tbody>
           </table>
       </div>
       <br><br><br>
       <label style="color : white;"><b>Transfer To:</b></label>
       <select name="to" class="form-control" required  style = "color: #ed0b70;">
           <option class = "pink-text" value="" disabled selected >Choose account</option>
           <?php
               include 'config.php';
               $sid=$_GET['account_no'];
               $sql = "SELECT * FROM users where account_no!=$sid";
               $result=mysqli_query($conn,$sql);
               if(!$result)
               {
                   echo "Error ".$sql."<br>".mysqli_error($conn);
               }
               while($rows = mysqli_fetch_assoc($result)) {
           ?>
               <option class="table pink-text" value="<?php echo $rows['account_no'];?>" >
               
                   <?php echo $rows['name'] ;?> (Balance: 
                   <?php echo $rows['balance'] ;?> ) 
              
               </option>
           <?php 
               } 
           ?>
           <div>
       </select>
       <br>
       <br>
           <label style="color : white;"><b>Amount:</b></label>
           <input type="number" class="form-control pink-text" name="amount" required >   
           <br><br>
               <div class="text-center" >
           <button class="btn mt-2 mb-5 btn-lg sbutton" name="submit" type="submit"  >Transfer Money</button>
           </div>
       </form>
   </div>



    

    <!-- footer -->
    <?php include 'footer.php'; ?>

    <!-- bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <!-- link to js -->
    <script src="js/index.js"></script>
  </body>
</html>

