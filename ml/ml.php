<?php require_once(realpath($_SERVER["DOCUMENT_ROOT"]).'\courses\ml\ml.php'); ?>
<!DOCTYPE html>
<head>
    <title>ml</title>
    <link rel="stylesheet" href="ml.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" >
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- jQuery and JS bundle w/ Popper.js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" ></script>
</head>
<body>
    <!--navigation-->
    <section id="nav-bar">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand" href="#"><img src="learn.jpg"></a>
            <h0>IT COURSE</h0>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
  
            </button>
            
            <div class="wrap">
              <div class="search">
                 <input type="text" class="searchTerm" placeholder="What are you looking for?">
                 <button type="submit" class="searchButton">
                   <i class="fa fa-search"></i>
                </button>
              </div>
           </div>
           
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                  <a class="nav-link" href="http://localhost/courses/home.php">HOME </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="http://localhost/courses/index.php">SIGN OUT</a>
                </li>
              </ul>
            </div>
          </nav>
          </section>
    
          <section id ="container">
            <div class="ai">
              <div class="hover">
              <a href = "https://en.wikipedia.org/wiki/Machine_learning"><img src="machine.jpg" alt = "ml" style="width:100%;height:300px;"></a></div>
                            <h5>Welcome</h5><h6> Let's Get start Learning Today!</h6>
              <h1>MACHINE LEARNING</h1>
              <p1 style="color: black;text-align: justify;"> Machine learning (ML) is the study of computer algorithms that improve automatically through experience. It is seen as a subset of artificial intelligence. Machine learning algorithms build a model based on sample data, known as "training data", in order to make predictions or decisions without being explicitly programmed to do so. Machine learning algorithms are used in a wide variety of applications, such as email filtering and computer vision, where it is difficult or unfeasible to develop conventional algorithms to perform the needed tasks.</p1>
              
              <div class="row">
                <div class="column">
                  <div class="vone">
                  <a href = "https://www.youtube.com/watch?v=GwIo3gDZCVQ&t=29584s" style="text-align: center;"><img src="vone.jpg" alt="VIDEO ONE" style="width:100%">_____VIDEO 1 _____</a>
                  </div>
                </div>
                
                <div class="column">
                  <div class="vtwo">
                  <a href = "https://www.youtube.com/watch?v=ukzFI9rgwfU&t=140s" style="text-align:center;"><img src="vtwo.jpg" alt="VIDEO TWO" style="width:100%">_____VIDEO 2 _____</a>
                </div>
              </div>
              
                <div class="column">
                  <div class="vthree">
                  <a href = "https://www.youtube.com/watch?v=hjh1ikznScg" style="text-align:center;"><img src="vthree.jpg" alt="VIDEO THREE" style="width:100%">_____VIDEO 3 _____</a>
                </div>
              </div>
             
              



                </div>
            </div>
            
            
    </body>