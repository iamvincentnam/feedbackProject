<?php include 'inc/feedBackdbase.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <style>
        body{background-color:#4f6a8f;}
        input::placeholder{color: #5f5f5f95 !important;}
.nav{ height: 60px;}
            .nav ul {
        list-style: none;
    }
    .nav ul li{display: inline-block;
        }
        .nav ul a{
            text-decoration: none;
             color: #d9d8da; 
                 font-weight:600;}
        .nav ul a:hover{border-bottom: 2px groove orangered;
        color: #8e8e8e;}
        section{background-color: #efb680;}
        /* section{min-height: 100vh;} */
    /* the 100vh for section is not practicable since i'd including the same header file in other php pages*/
        form label{font-size: 85%; font-weight: bold; color: rgb(61, 61, 61);} 
      
    </style>
    <title>FeedBack Page</title>
</head>
<body>
    
        
        <section class="section col-lg-6  col-sm-12  mx-auto  my-2 shadow">
            <div class="container ">
            <div class="row ">
            
           <div class="col-md-12 nav d-flex justify-content-between align-items-center px-3 bg-dark shadow-lg">
            <div class="logo col-6 ">
                <p class="lead text-white fw-bold m-0 p-0 ">Ikoku <sup class="text-danger">online</sup> </p>
            </div>
            <div id="links" class="col-lg-6 flex-wrap">
                <ul class="d-flex  justify-content-around align-items-center m-0 p-0 ">
                    <li><a href="http://localhost/feedbackProject/index.php"> Home</a></li>
                    <li><a href="http://localhost/feedbackProject/feedback.php"> FeedBack</a></li>
                    <li><a href="http://localhost/feedbackProject/feedback.php">About</a></li>
                </ul>
    
            </div>
           </div>
           </div>