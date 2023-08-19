<?php 

    include '_dbconnect.php';
    $todo_id = $_GET['todo_id'];
    $id = $_GET['id'];
    $sql = "select * FROM donation";
    $result1 = mysqli_query($con, $sql);
    
    $num1 = mysqli_num_rows($result1);
    $html = "";
    
    if ($num1 > 0) {
        if ($row = $result1->fetch_assoc()) {
            $total = $row["total"];
            $givin = $row["given"];
            $due = $row["deu"];
           
           
       
        }
    }
    
    $g = $givin + $todo_id;
    $d = $due - $todo_id;
    $sql = "UPDATE `donation` SET  `given` = '$g', `deu` = '$d' WHERE `donation`.`id` = 1;";
    mysqli_query($con,$sql);
    header("Location: manage_donation.php");
    echo $t;
?>