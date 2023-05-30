<?php include 'header.php'; ?>
           <div class="row">
            <div class="col-md-12 mx-auto text-center my-4 ">
                <img src="assets/ikoku_online_logo_.png" alt="ikoku online Logo" height="60px" class="">
            </div>
        </div>
 
        <div class="row">
            <h2 class="text-center my-2 text-light-emphasis">Feedback</h2>
            <p class="lead text-center fw-bold text-body-tertiary mb-3">Leave a feedback for Ikokuonline</p>
            <form action="#" class="mt-4 w-75 col-md-10 mx-auto">
                <div class="mb-3">
                    <label for="name" class="form-label"> Name</label>
                    <input type="text" class="form-control shadow" id="name" name="name" placeholder="Enter your Name" autocomplete="off">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label"> Email</label>
                    <input type="email" class="form-control shadow" id="email" name="email" placeholder="Enter your Email" autocomplete="off">
                </div>
                <div class="mb-5">
                    <label for="body" class="form-label"> Feedback</label>
                    <textarea class="form-control shadow" id="body" name="body" placeholder="Enter your feedback" autocomplete="off">
                        </textarea>
                </div>
                <div class="mb-3 ">
                    
                    <button class="btn btn-outline-secondary w-50 d-grid mx-auto fw-bold" name="submit">SEND
                    </button>
                </div>
                
            </form>
        </div>
        <?php include 'footer.php'; ?>