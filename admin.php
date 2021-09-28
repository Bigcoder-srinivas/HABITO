<?php 

 session_start();
 
 if(!isset($_SESSION['name'])) {
   
    header("location: login.php"); 
    }
 else {

?>

<?php include ("header.php") ?>




<div class="col-sm-12 jumbo_user"> 
   
   <br>
   

   <a class="a_color" href="index.php"><button type="button" class="btn btn-primary btn-lg">Make a TO-DO list</button></a>
   
   <a class="a_color" href="viewtodo.php"><button type="button" class="btn btn-primary btn-lg">View list</button></a>
   
   
   <a class="a_color" href="#"><button type="button" class="btn btn-primary btn-lg">Bookmarked tasks</button></a>
   
   <a class="a_color" href="logout.php"><button type="button" class="btn btn-primary btn-lg">logout</button></a>
   
</div>
  

<?php } ?>



<?php include("footer.php") ?>