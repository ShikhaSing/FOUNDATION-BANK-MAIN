<?php
include 'connect.php';

if(isset($_POST['submit']))
{
    $from = $_GET['id'];
    $to = $_POST['to'];
    $amount = $_POST['amount'];

    $sql = "SELECT * from users where id=$from";
    $query = mysqli_query($conn,$sql);
    $sql1 = mysqli_fetch_array($query);

    $sql = "SELECT * from users where id=$to";
    $query = mysqli_query($conn,$sql);
    $sql2 = mysqli_fetch_array($query);



    //Conditions
    //For negative value
    if (($amount)<0)
   {
        echo '<script type="text/javascript">';
        echo ' alert("Negative value cannot be transferred !")';
        echo '</script>';
    }
    //Insufficient balance
    else if($amount > $sql1['balance']) 
    {
        
        echo '<script type="text/javascript">';
        echo ' alert("Sorry! you have insufficient balance !")';
        echo '</script>';
    }
    //For 0 (zero) value
    else if($amount == 0){

         echo "<script type='text/javascript'>";
         echo "alert('Zero value cannot be transferred !')";
         echo "</script>";
     }


    else {
                $newbalance = $sql1['balance'] - $amount;
                $sql = "UPDATE users set balance=$newbalance where id=$from";
                mysqli_query($conn,$sql);
             
                $newbalance = $sql2['balance'] + $amount;
                $sql = "UPDATE users set balance=$newbalance where id=$to";
                mysqli_query($conn,$sql);
                
                $sender = $sql1['name'];
                $receiver = $sql2['name'];
                $sql = "INSERT INTO transaction(`sender`, `receiver`, `balance`) VALUES ('$sender','$receiver','$amount')";
                $query=mysqli_query($conn,$sql);

                if($query){
                     echo "<script> alert('Transaction Successfully !');
                                     window.location='history.php';
                           </script>";
                    
                }

                $newbalance= 0;
                $amount =0;
        }
    
}
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>FOUNDATION BANK</title>
    <link rel="stylesheet" href="css/style2.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
</head>
<body>
    <!-- Nav bar -->
    <nav class="navbar py-2 navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">FOUNDATION BANK <img src="https://previews.123rf.com/images/bestvectorstock/bestvectorstock1808/bestvectorstock180811868/107211374-bank-vector-icon-isolated-on-transparent-background-bank-logo-concept.jpg" alt="Bank" width="50" height="50"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-8 mb-lg-0">
                    <li class="nav-item py-3">
                        <a class="nav-link" aria-current="page" href="index.php"><strong>Home</strong></a>
                    </li>
                    <li class="nav-item dropdown py-3">
                        <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Actions
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item py-3" href="money.php">Money Transfer</a></li>
                            <li><a class="dropdown-item py-3" href="history.php">Transaction History</a></li>
                        </ul>
                    </li>
                    <li class="nav-item py-3">
                        <a class="nav-link" href="https://www.thesparksfoundationsingapore.org/ "
                            target="_blank">About</a>
                    </li>
                    <li class="nav-item py-3">
                        <a class="nav-link" href="contact.php">Contact Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <class class="welcome">
        <h2>
            <img src="data:image/png;base64,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" alt="Bank" width="75" height="75" style="font-weight: bold;"> <strong>Money
                Transfer</strong> <img src="data:image/png;base64,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" alt="Bank" width="75" height="75">
        </h2>
    </class>

    <!-- options -->
    <div class="d-grip gap-2 col-6 mx-auto text-center p-3 mb-2">
        <!-- <div class="mod"><button type="button" class="btn btn-primary btn-lg mb-3" data-bs-toggle="modal" data-bs-target="#mod">Send Money</button> -->
        <a href="history.php"><button type="button" class="btn btn-dark btn-lg mb-3">See all Transaction History</button></a>
    </div>
    </div>

 <!-- Table -->
 <div class="container">
        <h2 class="text-center pt-4" style="color : black;">Customer Details</h2>
            <?php
                include 'connect.php';
                $sid=$_GET['id'];
                $sql = "SELECT * FROM  users where id=$sid";
                $result=mysqli_query($conn,$sql);
                if(!$result)
                {
                    echo "Error : ".$sql."<br>".mysqli_error($conn);
                }
                $rows=mysqli_fetch_assoc($result);
            ?>
            <form method="post" name="tcredit" class="tabletext" ><br>
        <div>
            <table class="table table-striped table-hover">
                <tr style="color : black;" class="table-primary">
                    <th class="text-center">Id</th>
                    <th class="text-center">Name</th>
                    <th class="text-center">Email</th>
                    <th class="text-center">Balance</th>
                </tr>
                <tr style="color : black;">
                    <td class=" text-center py-2"><?php echo $rows['id'] ?></td>
                    <td class=" text-center py-2"><?php echo $rows['name'] ?></td>
                    <td class=" text-center py-2"><?php echo $rows['email'] ?></td>
                    <td class=" text-center py-2"><?php echo $rows['balance'] ?></td>
                </tr>
            </table>
        </div>
        <h2 class="text-center pt-4" style="color : black;">Transer Money Here !</h2>
        <label style="color : black;"><strong>Transfer To:</strong></label>
        <select name="to" class="form-control" required>
            <option value="" disabled selected>Choose</option>
            <?php
                include 'connect.php';
                $sid=$_GET['id'];
                $sql = "SELECT * FROM users where id!=$sid";
                $result=mysqli_query($conn,$sql);
                if(!$result)
                {
                    echo "Error ".$sql."<br>".mysqli_error($conn);
                }
                while($rows = mysqli_fetch_assoc($result)) {
            ?>
                <option class="table" value="<?php echo $rows['id'];?>" >
                
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
            <label style="color : black;"><strong>Amount:</strong></label>
            <input type="number" class="form-control" name="amount" required>   
            <br><br>
                <div class="text-center" >
                <button class="btn btn-outline-dark mb-3" name="submit" type="submit" id="myBtn" >Fill the Amount and Transfer</button>
            </div>
        </form>
    </div>    


    <!-- footer -->

    <div class="foot">
        <footer class="bg-light text-center text-lg-start">
            <!-- Copyright -->
            <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
                ©  Copyright - Made  by Aditya kumar :
                <a class="text-dark" href="https://www.thesparksfoundationsingapore.org/" target="_blank"> The Sparks
                    Foundation <img src="data:image/png;base64,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" alt="" width="40" height="35"></a>
            </div>
            <!-- Copyright -->
        </footer>
    </div>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW"
        crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->
</body>

</html>