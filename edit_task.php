<?php 

include('db.php');

if(isset($_GET['id_task'])){
    $id = $_GET['id_task'];

    $query = "SELECT * FROM tasks WHERE id_task = $id";
    $result = mysqli_query($conn, $query);

    if(mysqli_num_rows($result) == 1){
        $row = mysqli_fetch_array($result);
        $title = $row['title'];
        $description = $row['description'];

    }
}

if(isset($_POST['update'])){
    $id = $_GET['id_task'];
    $title = $_POST['title'];
    $description = $_POST['description'];

    $query = "UPDATE tasks set title = '$title', description = '$description' WHERE id_task = $id";
    mysqli_query($conn, $query);

    $_SESSION['message'] = "Task Updated successfully";
    $_SESSION['message-color'] = "info";
    header("Location: index.php");


}

?>

<?php include('include/header.php')?>

<div class="container p-4">
    <div class="row">
        <div class="col-md-4 mx-auto">
            <div class="card card-body">
                <form action="edit_task.php?id_task=<?php echo $_GET['id_task']?>" method="POST">
                    <div class="form-group">
                        <input type="text" name="title" placeholder="Update title" 
                        class="form-control" value="<?php echo $title; ?>">
                    </div>
                    <div class="form-group">
                    <textarea name="description" rows="2" placeholder="Update description" 
                    class="form-control"><?php echo $description; ?></textarea>
                    </div>
                    <button class="btn btn-success btn-block" name="update">
                    Update
                    </button>
                </form>                
            </div>
        </div>
    </div>

</div>

<?php include('include/footer.php')?>
