<?php
include 'conn.php';

// isdiwaange
if(isset($_POST['diri'])){
    $id = $_POST['id'];
    $name = $_POST['name'];
    $class = $_POST['class'];

    $s = "INSERT INTO user(id,name,class) 
    VALUES('$id','$name','$class')";

    $r = $db -> query($s);
    if($r){
        echo 'waa sax idwaangelita';
    }
    else{
        echo $db->error;
    }
}
// update
else if(isset($_POST['update'])){
    $id = $_POST['id'];
    $name = $_POST['name'];
    $class = $_POST['class'];

    $s = "UPDATE user SET name='$name',class='$class' WHERE id =$id";

    $r = $db -> query($s);
    if($r){
        echo 'waa sax idwaangelita';
        header('location: index.php');
    }
    else{
        echo $db->error;
    
   }
// delete
}else if(isset($_GET['id'])){
    $id = $_GET['id'];

    $s = "DELETE FROM user WHERE id =$id";

    $r = $db->query($s);
    
    if($r){
        echo 'delete';
        header('location: index.php');
    }
    else{
        echo $db->error;
    }
}

?>