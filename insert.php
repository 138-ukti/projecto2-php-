<?php
    include '_dbconnect.php';
    session_start();
        $name = $_POST['name'];
        $image = $_FILES['fileToUpload'];
        $type = $_POST['type'];
        $description = $_POST['description'];
        $price = $_POST['price'];

        $filename =  $_FILES['fileToUpload']['name'];
        $tempname = $_FILES['fileToUpload']['tmp_name'];
        $folder = 'uploads/'.$filename;

        move_uploaded_file($tempname,$folder);
       
        
        $q =  "INSERT INTO `product`(`id`, `name`, `img`, `price`, `type`, `details`) 
        VALUES ('','$name','$folder','$price','$type','$description')";
        $run = mysqli_query($con, $q);
        //$num = mysqli_num_rows($run);
        // if ($num1 != 0) {
        //     echo "yes";
        //     $_SESSION['add_product'] = "Succesfully added in database";
        // } else {
        //     echo "Error creating database: " . mysqli_error($conn);
        // }
          
        $_SESSION['add_product'] = "Successfully Added in the Database";
        // closing connection
        header('location:addproduct.php');
        $con->close();
        echo $num1;
        
        
    
?>  
