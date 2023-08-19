<?php

  session_start();
  $admin = $_SESSION['admin'];
  if($admin==null){
    header('location:login.php?id=home');
  }
  include '_dbconnect.php';
  $flag = 0;
  $flag1 = 0;
  $html = "";
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $search = $_POST['search'];
    $cat = $_POST['cat'];
  
    $q =  "SELECT * FROM `event_m` WHERE  `$cat` LIKE '%$search%';";
    $run = mysqli_query($con, $q);
    
  
    
    if(mysqli_num_rows($run)>0){
        while($row = $run->fetch_assoc()){
          $html = $html. "<tr><td>" . $row["user_name"] . "</td><td>" . $row["user_email"] . "</td><td>" . $row["event_name"] . "</td><td>". $row["event_date"] . "</td>
          <td>".'<button type="submit" id="' . $row["id"] .'" class="del btn btn-outline-danger">Delete</button>' ."</td></tr>";
            $flag = 1;
          
        }
      }
    }
        else{
           
          $q =  "SELECT * FROM `event_m`";
          $run = mysqli_query($con, $q);
          $html = "";
          if(mysqli_num_rows($run)>0){
              while($row = $run->fetch_assoc()){
                $html = $html. "<tr><td>" . $row["user_name"] . "</td><td>" . $row["user_email"] . "</td><td>" . $row["event_name"] . "</td><td>". $row["event_date"] . "</td>
          <td>".'<button type="submit" id="' . $row["id"] .'" class="del btn btn-outline-danger">Delete</button>' ."</td></tr>";
                 
              }
                   
        }
          $flag1 = 1;
          
      }
?>
<?php 
    $msg = $_SESSION['update'];
    $_SESSION['update'] = null;
    $msgdelete = $_SESSION['delete'];
    $_SESSION['delete'] = null;
   
    
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>View User Event List</title>
    <link rel = "icon" href="img/fav.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.4/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="css/table.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@900&display=swap" rel="stylesheet">

    <script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    </script>
</head>

<body>

    <?php 
    include('header4.html');
    ?>

    
    <div id="cta">
    <h1 class = "cta-heading"><i class="fa-solid fa-list-check"></i> View User Event List</h1>
    </div>
    
    <form class="form" action="user_event_list.php" method="POST">
     <div class="form-group" id="pad">
        <input type="text" class="form-control" name="search" aria-describedby="emailHelp" placeholder="Search">
     </div>
     
     
     <div class="form-group" id="pad2">
     <select class="form-control" name="cat">
            <option value="user_name">User Name</option>
            <option value="user_email">User Email</option>
            <option value="event_name">Event Name</option>
            <option value="event_date">Event Time</option>
        </select>
    </div>
    
     <div class="col-lg-12 col-md-12 col-sm-12" id = "pad3">
     <button type="submit" class="btn btn-lg btn-block btn-success"><i class="fa-solid fa-magnifying-glass"></i> Search</button>
     <button id="btnSubmit" onclick="window.location.href='user_event_list.php'" type="button" class="btn btn-lg btn-block btn-info"><i class="fa-solid fa-list"></i> See All</button>
     <?php if ($msg) { ?>                
                <div class="row">
                    <div class="col-md-12">
                        <div class="alert alert-success" role="alert">
                            <?php echo $msg ?>
                        </div>
                    </div>

                </div>
              <?php } ?>
              <?php if ($msgdelete) { ?>                
                <div class="row">
                    <div class="col-md-12">
                        <div class="alert alert-danger" role="alert">
                            <?php echo  $msgdelete ?>
                        </div>
                    </div>

                </div>
              <?php } ?>
     <script type="text/javascript">

let btn= document.querySelector('#btnSubmit');
btn.addEventListener('click', function (){
              alert("Are you sure to see all product?" );		  
      });

</script> 
    </div>
    </form>
   
        <table id="example" class="table table-light table-hover table-bordered pad" style="width:100%">
        
        <thead>
            <tr>
                        <th>User Name</th>
                        <th>User email</th>
                        <th>Event name</th>
                        <th>Evet Time</th>
                        <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        <?php
                echo $html;
                ?>
        </tbody>
        </table>

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
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.4/js/dataTables.bootstrap5.min.js"></script>
    <script>
        $(document).ready(function() {
        $('#example').DataTable();
        } );
    </script>
    <script src="https://use.fontawesome.com/2c7ebecd35.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script>
			$(function () {
            $(document).on('click','.del', function () {
                var del_id = $(this).attr("id");
                var info = 'id=' + del_id;
                if (confirm("Are You Sure?")) {
                    location.assign('delete_user_event.php?id='+del_id)
                }
                return false;
  });
});
</script> 
    
</body>
</html>