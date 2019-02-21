<?php include('db.php') ?>

<?php include('include/header.php')?>

<?php 
 if(isset($_SESSION['message'])) : ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
    <?= $_SESSION['message']?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
    </div>       
<?php session_unset(); 
endif; ?>


<div class="container p-4">
    <div class="row">
        <div class="col-md-4" >
            <div class="card card-body">
                <form action="save_task.php" method="POST">
                    <div class="form-group">
                        <input type="text" name="title" class="form-control" 
                        placeholder="Task titles" autofocus require>
                    </div>
                    <div class="form-group">
                        <textarea name="description" rows="2"
                        class="form-control" placeholder="Task description">
                        </textarea require>
                    </div>
                    <input type="submit" class="btn btn-success btn-block" name="save_task"
                    value="Submit">
                </form>
            
            
            </div>
        
        </div>

        <div class="col-md-8">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Created_at</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        $query = ("SELECT * FROM tasks");
                        $result_task = mysqli_query($conn, $query);
                        
                        while($row = mysqli_fecth_array($result_task)): ?>
                            <tr>
                                <td> <?php  
                                    echo $row['title'];                                
                                ?></td>
                            </tr>
                        <?php endwhile; ?>
                </tbody>            
            </table>
        </div>
    </div>
</div>


<?php include('include/footer.php')?>
    