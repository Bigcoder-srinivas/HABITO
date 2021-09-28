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
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <form id="form-Task">
                            <div class="form-group">
                                <input type="text"  id="title" class="form-control" maxlength="50" autocomplete="off"
                                    placeholder="Title" required >
                            </div>
                            <div class="form-group">
                                <textarea type="text" id="description" cols="30" rows="10" class="form-control"
                                    maxlength="500" autocomplete="off" placeholder="Description" required></textarea>
                            </div>
                            <button type="submit" class="btn btn-success btn-block">Save</button>
                        </form>
                    </div>

                </div>
            </div>

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



