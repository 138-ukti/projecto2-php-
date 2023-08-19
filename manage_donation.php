

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Manage Donation</title>
  <link rel="stylesheet" href="css/userhome2.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

  <link rel = "icon" href="img/fav.png">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@900&family=Ubuntu&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>

<body>
<?php
include('header5.html');
$given= "";
?>

        
    
    
    


  
<section id="cta2">
<?php
        include '_dbconnect.php';
        
        $q9 =  "SELECT SUM(total_cost)*0.1 as dataper FROM `order`;";
        $run9 = mysqli_query($con, $q9);
        if(mysqli_num_rows($run9)>0){
          while($row = $run9->fetch_assoc()){
          $oneper = $row['dataper'];
          
          }
        }
              
?>
<?php
        include '_dbconnect.php';
        
        $q9 =  "SELECT * from`donation` ;";
        $run9 = mysqli_query($con, $q9);
        if(mysqli_num_rows($run9)>0){
          while($row = $run9->fetch_assoc()){
          $total = $row['total'];
          $given= $row['given'];
          $due = $row['deu'];
          
          }
        }
              
?>


<?php
  $temp = $oneper - $given;
  $sql = "UPDATE `donation` SET `total` = '$oneper', `given` = '$given', `deu` = '$temp' WHERE `donation`.`id` = 1;";
    mysqli_query($con,$sql);
?>

<?php
        include '_dbconnect.php';
        
        $q9 =  "SELECT * from`donation` ;";
        $run9 = mysqli_query($con, $q9);
        if(mysqli_num_rows($run9)>0){
          while($row = $run9->fetch_assoc()){
          $total = $row['total'];
          $given= $row['given'];
          $due = $row['deu'];
          
          }
        }
              
?>

<h3 class="cta2-heading">TOTAL DONATION <em class="yel">৳ <?php echo $oneper;?></em><br>DONATION GIVEN <em class="yel">৳ <?php echo $given;?></em><br>DONATION DUE <em class="yel">৳ <?php echo $due;?></em></h3>
<div id="ffff">
<button id = "fff" onclick="window.location.href='#'" type="button" class="CA btn btn-lg btn-block btn btn-light rounded-pill gap2">Update Doantion</button>
</div>
</section>


  <!-- Footer -->

  <footer id="footer">
    <a id="icon-fb" href="#">
      <i class="s-icons fa-brands fa-facebook"></i>
    </a>
    <a id="icon-insta" href="#">
      <i class="s-icons fa-brands fa-instagram"></i>
    </a>
    <a id="icon-mail" href="mailto:#">
      <i class="s-icons fa-solid fa-envelope" href=""></i>
    </a>
    
    
    <p>© Copyright ProjectO2</p>

  </footer>

<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/624097732abe5b455fc1dc43/1fv64v7g0';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
<script>
      $(document).ready(function() {
      $('#example').DataTable();
      } );
  </script>
        <script>
			$(function () {
            $("#fff").click(function () {
              
                var q_id = $(this).attr("id");
                
                let todo_id = prompt("Please Enter Quantity:");
                
                    location.assign('update_donation.php?id='+q_id+'&todo_id='+todo_id)
                
                return false;
  });
});
</script>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>