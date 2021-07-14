<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <?php
        if(isset($_GET['id'])){
            $id = $_GET['id'];
            $name = $_GET['name'];
            $class = $_GET['class'];
        }
        else{
            $id = '';
            $name = '';
            $class = '';
        }
    ?>
   <div class="container mt-3">
   <div class="row justify-content-center m-2">
   <div class="col-sm-8">
   <div class="card">
   <div class="card-body">
    <form action="xaliiriyo.php" method="POST">
    <div class="form-group">
    <label for="exampleFormControlInput1" class="form-label">Id</label>
    <input type="text" name="id" class="form-control m-2" value="<?php echo $id; ?>">
    <label for="exampleFormControlInput1" class="form-label">Name</label>
    <input type="text" name="name" class='form-control m-2' value="<?php echo $name; ?>">
    <label for="exampleFormControlInput1" class="form-label">Class</label>
    <input type="text" name="class" class="form-control m-2" value="<?php echo $class ;?>">
    </div>
    <button type="submit" name="diri" class="btn bg-primary mt-3 text-white ">save </button>
    <button type="submit" name="update" class="btn bg-danger mt-3 text-white ">update </button>
    </form>
   </div>
   </div>
   </div>
   </div>
   </div>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>