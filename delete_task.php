<?php 

include('db.php');

if(isset($_GET['id_task'])){
    $id = $_GET['id_task'];
    $query = "DELETE FROM tasks WHERE id_task = $id";
    $result = mysqli_query($conn, $query);

        if(!$result){
            die("query fail");
        }

        $_SESSION['message'] = 'Task removed successfully';
        $_SESSION['message-color'] = 'danger';
        header("Location: index.php");

}

?>