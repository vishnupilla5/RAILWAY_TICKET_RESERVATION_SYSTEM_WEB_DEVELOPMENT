

<?php
  require "login.php";
?>

   <main>
        <link rel="stylesheet" href="ind.css">
        <?php
          if(isset($_SESSION['user'])){
           echo '<p><h1><center>YOU ARE LOGGED IN!</center></h1></p>';
          }         
      else{
        echo '<p>YOU ARE LOGGED OUT!!!!!</p>';
         }
       ?>
    </main>
