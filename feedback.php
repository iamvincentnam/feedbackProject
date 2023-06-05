

<?php include 'inc/header.php'; ?>
<?php 
       $sql ="SELECT * FROM Feedback;";
       $result = mysqli_query($connection, $sql);
       $feedback = mysqli_fetch_all($result, MYSQLI_ASSOC);

       // to delete the file
$id ='';
       if(isset($_GET['deleteIcon'])){
        $id = $_GET['deleteIcon'];
        $sql_deletion = "DELETE FROM Feedback WHERE id = $id;";
        if( mysqli_query($connection, $sql_deletion)){
                header('Location: feedback.php?message='. urldecode('Row with ID ' . $id . ' deleted' ));
                exit();
        }else{
            echo 'Error' . mysqli_error($connection);
        }
    }
       ?>

<div class="row">
<?php if(empty($feedback)): ?>
  <p class="lead text-danger p-2 text-center fw-bold">
  There Is no Feedback
 </p>
 <?php endif; ?>

  <?php foreach($feedback as $item) :?>
    <!-- the multiple nested divs that exist below is a result of a custom bootstrap implentations of a particular component. the classes have a pre defined meaning recognized and executed by bootstrap -->
    
<div class="card w-75 mb-3 col-md-12 mx-auto  text-center my-5">
<div class="card-header text-light-50">
  
  <h5 class="text-body-tertiary">Email Address</h5>
  <button class="btn btn-warning col-sm-12" type="button" disabled>
  <span class="spinner-grow spinner-grow-sm text-primary" role="status" aria-hidden="true"></span>
  <?php echo $item['email']?>
</button>
</div>
  <div class="card-body">
    <h5 class="card-title ">
    <span class="badge text-bg-secondary"> <?php echo $item['id'] ?>
  </span>
    </h5>


    <p class="card-text"> <?php echo $item['feed'] ?> 
    </p>
    <div class="card-footer text-body-secondary"> <em>by</em> <?php echo $item['FullName']?> <em>on </em>
    <?php echo $item['date']?>
  </div>
   
  </div>
  <div class="delete-icon col-md-1 mx-auto mb-2">
  <span class="material-symbols-outlined fs-3" name="deleteIcon"><a href="?deleteIcon=<?php echo $item['id']; ?>">delete</a></span>
            </div>
</div>
<?php endforeach; ?>
</div>


<?php include 'inc/footer.php'; ?>

