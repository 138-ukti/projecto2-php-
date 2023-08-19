<?php 
    include '_dbconnect.php';
    $c_name="";
    $c_pn="";
    $c_add="";
    $email = $_GET['email'];
    $product_name = "";
    $total_cost = $_GET['cost'];
    $d_status = "Pending";
    $p_det="";
    $q3 =  "SELECT * FROM `cart` WHERE `email`='$email';";
    $run = mysqli_query($con, $q3);

    while($row = $run->fetch_assoc()) {
        $p_det = $p_det . $row["name"] . '\n';
    }

    $q =  "SELECT * FROM `user` WHERE `email`='$email';";
    $run2 = mysqli_query($con, $q);

    while($row = $run2->fetch_assoc()) {
        $c_name = $row["name"];
        $c_pn = $row["p_number"];
        $c_add = $row["address"];
    }

    $q2 =  "INSERT INTO `order`(`cus_name`, `cus_email`, `cus_pn`, `cus_add`, `pro_name`, `total_cost`, `d_status`, `id`) VALUES ('$c_name','$email','$c_pn','$c_add','$p_det','$total_cost','Pending','')";
    $run3 = mysqli_query($con, $q2);

    $q4 =  "DELETE FROM cart WHERE  `email`='$email';";
    $run4 = mysqli_query($con, $q4);

    
    session_start();
    $_SESSION['view_cart1'] = 'Successfully Purchased';
    
   header("Location: viewcart.php");
?>