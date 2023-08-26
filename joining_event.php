<?php
include '_dbconnect.php'; 
    $queries = array();
    $name = "";
    $ename = "";
    $date = "";
    parse_str($_SERVER['QUERY_STRING'], $queries);
    $id = $queries['id'];
    
echo $id;
    $sql = "select * FROM event WHERE id=$id";
$result1 = mysqli_query($con, $sql);

$num1 = mysqli_num_rows($result1);
$html = "";


if ($num1 > 0) {
    if ($row = $result1->fetch_assoc()) {
        $ename = $row["name"];
        $date = $row["e_time"];   
        
    }
}
session_start();
$email = $_SESSION['email'];
echo $email;
$sql1 = "select * FROM user WHERE email = '$email'";
$result2 = mysqli_query($con, $sql1);

$num2 = mysqli_num_rows($result2);
$html = "";
echo $num2;
if ($num2 > 0) {
    if ($row = $result2->fetch_assoc()) {
        $name = $row["name"];
        $email = $row["email"];
        
        
    }
  
}

echo $name; 
echo $ename;

$sql3 = "INSERT INTO `event_m` (`user_name`, `user_email`, `event_name`, `event_date`)
 VALUES ('$name', '$email', '$ename', '$date');";
$result3 = mysqli_query($con, $sql3);


// session_start();
$_SESSION['going'] = 'Successfully Join this event';
header("Location: userhome.php #event");
?>