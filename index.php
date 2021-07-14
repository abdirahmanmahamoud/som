<?php
include 'conn.php';
?>
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

   <div class="container mt-3">
   <div class="row justify-content-center m-2">
   <div class="col-sm-8">
        <table class="table">
        <thead>
        <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Class</th>
        <th>action</th>
        </tr>
        </thead>
        <tbody>
        <?php
        $j = "SELECT * FROM user ";
        $r = $db ->query($j);
        $htmt = '';
        if($r){
            $htmt .= '<tr>';
            while($row = $r ->fetch_assoc()){

                $htmt .= '<th>' .  $row['id'] . '</th>';
                $htmt .= '<th>' .  $row['name'] . '</th>';
                $htmt .= '<th>' .  $row['class'] . '</th>';

                $link ='form.php?'. 'id= ' . $row['id'] . '&name= ' .$row['name'] . '&class=' . $row['class'];
                $delete ='xaliiriyo.php?'. 'id= ' . $row['id'];
                
                $htmt .= '<th>' .  '<a href="'.$link.'" class="btn btn-success">update</a> <a href="'.$delete.'" class="btn btn-primary">Delete</a>' . '</th>';
                $htmt .= '</tr>';
            }
            echo $htmt;
        }
        else{
            echo $db->error;
        }
        ?>
        </tbody>
        </table>
   </div>
   </div>
   </div>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>