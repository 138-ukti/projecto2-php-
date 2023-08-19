<?php
  session_start();
  $email = $_SESSION['email'];
  if($email==null){
    header('location:login.php?id=home');
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suggetion</title>
</head>
<body>
<?php
        include '_dbconnect.php';      
?>
<?php include 'header1.html' ?>

<div style="margin-top: 50px; text-align:center;">

<form action="#" method="POST">
<p style="font-size: 20px; "><b>1. What is your pot size ?</b></p>
  <select name="pot_size" id="">
  <option value="10m">10m</option>
<option value="20m">20m</option>
<option value="50m">20 to 50 m</option>
  </select>
  <p style="font-size: 20px; "><b>2. Which size of plant height do you need ?</b></p>
  <select name="plant_height" id="">
  <option value="3cm">3cm</option>
<option value="4cm">4cm</option>
<option value="5cm">5cm</option>
  </select>
  <p style="font-size: 20px; "><b>3. Where do you want to place your plant ?</b></p>
  <select name="plant" id="">
  <option value="rooftop">rooftop</option>
<option value="balcony">Balcony</option>
<option value="garden">Garden</option>
  </select>

  <input type="submit" value="submit" name="submit">
</form>
<div style="margin-top: 50px; font-size: 30px; color: blue;">
<?php
    if(isset($_POST['submit'])){ 
        $pot_size = $_POST['pot_size'];
        $plant_size = $_POST['plant_height'];
        $plant=$_POST['plant'];
    
        if($pot_size=='10m' && $plant_size=='3cm' && $plant="rooftop"){
            echo "Cactus";
        }
        else if($pot_size=='10m' && $plant_size=='4cm' && $plant="rooftop"){
            echo "Marigold";
        }
        else if($pot_size=='10m' && $plant_size=='5cm' && $plant="rooftop"){
            echo "Cactus";
        }
        else if($pot_size=='10m' && $plant_size=='3cm' && $plant="balcony"){
            echo "Mariagold";
        }
        else if($pot_size=='10m' && $plant_size=='4cm' && $plant="balcony"){
            echo "Rose";
        }
        else if($pot_size=='10m' && $plant_size=='5cm' && $plant="balcony"){
            echo "Mariagold";
        }
        else if($pot_size=='10m' && $plant_size=='3cm' && $plant="garden"){
            echo "Jesmin";
        }
        else if($pot_size=='10m' && $plant_size=='4cm' && $plant="garden"){
            echo "Rose";
        }
        else if($pot_size=='10m' && $plant_size=='5cm' && $plant="garden"){
            echo "Sunflower";
        }
        else if($pot_size=='20m' && $plant_size=='3cm' && $plant="rooftop"){
            echo "Cactus";
        }
        else if($pot_size=='20m' && $plant_size=='4cm' && $plant="rooftoop"){
            echo "Crapejasmine";
        }
        else if($pot_size=='20m' && $plant_size=='5cm' && $plant="rooftoop"){
            echo "Rose";
        }
        else if($pot_size=='20m' && $plant_size=='3cm' && $plant="balcony"){
            echo "Alovera";
        }
        else if($pot_size=='20m' && $plant_size=='4cm' && $plant="balcony"){
            echo "Crapejasmine";
        }
        else if($pot_size=='20m' && $plant_size=='5cm' && $plant="balcony"){
            echo "pansy";
        }
        else if($pot_size=='20m' && $plant_size=='3cm' && $plant="garden"){
            echo "Jombia";
        }
        else if($pot_size=='20m' && $plant_size=='4cm' && $plant="garden"){
            echo "Orkit";
        }
        else if($pot_size=='20m' && $plant_size=='5cm' && $plant="garden"){
            echo "Lilac";
        }
        else if($pot_size=='50m' && $plant_size=='3cm' && $plant="rooftop"){
            echo "Lilac";
        }
        else if($pot_size=='50m' && $plant_size=='4cm' && $plant="rooftop"){
            echo "Sunflower";
        }
        else if($pot_size=='50m' && $plant_size=='5cm' && $plant="rooftop"){
            echo "Ashok Flower";
        }
        else if($pot_size=='50m' && $plant_size=='3cm' && $plant="balcony"){
            echo "Lily";
        }
        else if($pot_size=='50m' && $plant_size=='4cm' && $plant="balcony"){
            echo "Blood Lily";
        }
        else if($pot_size=='50m' && $plant_size=='5cm' && $plant="balcony"){
            echo "Lilac";
        }
        else if($pot_size=='50m' && $plant_size=='3cm' && $plant="garden"){
            echo "Cobra Saffron";
        }
        else if($pot_size=='50m' && $plant_size=='4cm' && $plant="garden"){
            echo "Tulip";
        }
        else if($pot_size=='50m' && $plant_size=='5cm' && $plant="garden"){
            echo "Magnolia";
        }

    }
?>
</div>
</div>
</body>
</html>