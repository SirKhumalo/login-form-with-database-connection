<?php
session_start();
include("connect.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="style1.css">
    <title>Homepage</title>

</head>
<body>

<div class="sticky-div">
    <div style="text-align:center; padding:1%;">
      <h3 class="greeting">
            Hello  <?php 
            if(isset($_SESSION['email'])){
                $email=$_SESSION['email'];
                $query=mysqli_query($conn, "SELECT users.* FROM `users` WHERE users.email='$email'");
                while($row=mysqli_fetch_array($query)){
                    echo $row['firstName'].' '.$row['lastName'];
                }
            }
            ?>
            what are searching today?
        </h3>
<br>
              <a href="logout.php">Logout</a>

<br>
<br>

        <div class="flip-box">
        <div class="flip-box-inner">
            <div class="flip-box-front">
            <h3>Ehlanzeni District</h3>
            </div>
            <div class="flip-box-back">
            <h3>Municipalities</h3>
            <br>
            <a href="#">
            <h2>Bushbuckridge</h2>
            </a>
            <br>
            <a href="#">
            <h2>City of Mbombela</h2>
            </a>
            <br>
            <a href="#">
            <h2>Nkomazi</h2>
            </a>
            <br>
            <a href="#">
            <h2>Thaba Chweu</h2>
            </a>
            </div>
        </div>
        </div>


        <div class="flip-box">
        <div class="flip-box-inner">
            <div class="flip-box-front">
            <h3>Gert Sibande District</h3>
            </div>
            <div class="flip-box-back">
            <h3>Municipalities</h3>
            <br>
            <a href="#">
            <h2>Chief Albert Luthuli</h2>
            </a>
            <br>
            <a href="#">
            <h2>Dipaleseng</h2>
            </a>
            <br>
            <a href="#">
            <h2>Lekwa</h2>
            </a>
            <br>
            <a href="#">
            <h2>Msukaligwa</h2>
            </a>
            <br>
            <a href="#">
            <h2>Govan Mbeki</h2>
            </a>
            <br>
            <a href="#">
            <h2>Dr Pixley Ka Isaka Seme</h2>
            </a>
            <br>
            <a href="#">
            <h2>Mkhondo</h2>
            </a>    
        </div>
        </div>
        </div>


        <div class="flip-box">
        <div class="flip-box-inner">
            <div class="flip-box-front">
            <h3>Nkangala District</h3>
            </div>
            <div class="flip-box-back">
            <h3>Municipalities</h3>
            <br>
            <a href="#">
            <h2>Emakhazeni</h2>
            </a>
            <br>
            <a href="#">
            <h2>Emalahleni</h2>
            </a>
            <br>
            <a href="#">
            <h2>Dr JS Moroka</h2>
            </a>
            <br>
            <a href="#">
            <h2>Victor Khanye</h2>
            </a>
            <br>
            <a href="#">
            <h2>Steve Tshwete</h2>
            </a>
            </div>
        </div>
        </div>

    </div>

   
</div>
 <div>
        <footer class="copyright">&copy;CyberCenter 2026</footer>
    </div>
    
</body>
</html>