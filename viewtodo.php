<?php 

 session_start();
 
 if(!isset($_SESSION['name'])) {
   
    header("location: login.php"); 
    }
 else {

?>

<?php include ("header.php") ?>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">

    <title>Todo List Web App </title>
</head>

<body>

    <nav class="navbar navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">To-Do List Web App</a>
        </div>
    </nav>

    <div class="container">
        <div class="row my-5">
           

            <div class="col-md-8">
                <div class="row">
                    <div class="col-sm-3 text-left title-head">
                        <p class="font-weight-bold" style="color:white;font-size:18px">Title</p>
                    </div>
                    <div class="col-sm-6 text-left desc-head">
                        <p class="font-weight-bold" style="color:white;font-size:18px">Description</p>
                    </div>
                    <div class="col-sm-3 text-right del-head">
                        <p class="font-weight-bold" style="color:white;font-size:18px">Delete</p>
                    </div>
                </div>
                <hr>
                <div id="tasks"></div>

            </div>

        </div>

    </div>

    <script src="js/app.js"></script>

</body>

</html>
<?php } ?>



