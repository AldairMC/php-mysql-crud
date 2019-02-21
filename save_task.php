<?php include('db.php') ?>

<?php 

if(isset($_POST['save_task'])):
    $title = $_POST['title'];
    $descrition = $_POST['description'];
    
    $query = "INSERT INTO tasks(title, description) VALUE ('$title','$descrition')";

    $res = mysqli_query($conn, $query);

        if(!$res):
            die("Query fail");
        endif;
        
        $_SESSION['message'] = "Task saved succesfully";
        $_SESSION['message-color'] = "success";

        header("Location: index.php");


endif;

?>