
<?php include 'inc/header.php'; ?>

<?php 
$name =$email = $body ='';
$name_error =$email_error = $body_error ='';
// var_dump($_POST);

if(isset($_POST["submit"])){
if(empty($_POST['name'])){
    /* Name validation */
    $name_error ='Name iS Required';
}else{
    $name =filter_input(INPUT_POST, 'name', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
}
 
/* Email validation */
if(empty($_POST['email'])){
    $email_error ='Email  IS Required';
}else{
    $email =filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
}
 /* body validation */
if(empty($_POST['body'])){
   
    $body_error ='Feedback text IS Required';
    
}else{
    $body =filter_input(INPUT_POST, 'body', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
}

if(empty($name_error) && empty($email_error) && empty($body_error)){
    //ADD to the database.
$sql_insertion = "INSERT INTO Feedback (FullName, email,feed) VALUES ('$name', '$email', '$body')";
if($result = mysqli_query($connection, $sql_insertion)){
    //sucess
    header('Location: feedback.php?message=' . urlencode('Data Accepted'));
    exit();
}else {
    echo 'Error' . mysqli_error($connection);
}


}
}


?>


   <div class="row">
            <div class="col-md-12 mx-auto text-center mt-5 ">
                <img src="assets/ikoku_online_logo_.png" alt="ikoku online Logo" height="60px" class="">
            </div>
        </div>
 
        <div class="row">
            <h2 class="text-center my-2 text-light-emphasis">Feedback</h2>
            <p class="lead text-center fw-bold text-body-tertiary mb-3">Leave a feedback for Ikokuonline</p>
            
    
             <!--  the form begins here-->
            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" class="mt-4 w-75 col-md-10 mx-auto" method="post">
                <!--  div for name  and input field-->
                <div class="mb-3">
                    <label for="name" class="form-label"> Name</label>
                    <input type="text" class="form-control <?php if($name_error){echo 'is-invalid';}else{echo null; } ?> shadow" id="name" name="name" placeholder="Enter your Name" autocomplete="off" >
                    <!-- the class invalid-feedback would only be controlled(be present conditionally) by a php conditional -->
                <div class="invalid-feedback">
                    <?php  echo $name_error; ?>
                </div>
                </div>
                 <!--  div for the email label and input field-->
                <div class="mb-3">
                    <label for="email" class="form-label"> Email</label>
                    <input type="email" class="form-control shadow <?php echo !$email_error ? null : 'is-invalid';?>" id="email" name="email" placeholder="Enter your Email" autocomplete="off">
                    <div class="invalid-feedback">
                    <?php  echo $email_error; ?>
                    </div>
                </div>
                 <!--  div for the feedback label and input field-->
                <div class="mb-5">
                    <label for="body" class="form-label"> Feedback</label>
                <textarea class="form-control text-secondary shadow <?php echo !$body_error ? null : 'is-invalid';?>" id="body" name="body" placeholder="enter enter enter"></textarea>
                <div class="invalid-feedback">
                    <?php  echo $body_error; ?>
                </div>
                </div>
                 <!--  div for the submit field-->
                <div class="mb-3 ">
                    
                    <input type="submit" class="btn btn-outline-secondary w-50 d-grid mx-auto fw-bold shadow-lg" name="submit" value="SEND">
            
                </div>
                
            </form>
           
        </div>
 
        <?php include 'inc/footer.php'; ?>
        
       <!--  Datatbase/ msql code comes In from here-->

   