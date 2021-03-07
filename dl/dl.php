<?php require_once(realpath($_SERVER["DOCUMENT_ROOT"]).'\courses\dl\dl.php'); ?>
<!DOCTYPE html>
<head>
    <title>dl</title>
    <link rel="stylesheet" href="dl.css">
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
              <a href = "https://en.wikipedia.org/wiki/Deep_learning"><img src="deepl.jpg" alt = "ml" style="width:100%;height:300px;"></a></div>
                            <h5>Welcome</h5><h6> Let's Get start Learning Today!</h6>
              <h1>DEEP LEARNING</h1>
              <p1 style="color: black;text-align: justify;"> Deep learning (also known as deep structured learning) is part of a broader family of machine learning methods based on artificial neural networks with representation learning. Learning can be supervised, semi-supervised or unsupervised</p1>
              <div class="row">
                <div class="column">
                  <div class="vone">
                  <a href = "https://www.youtube.com/watch?v=6M5VXKLf4D4" style="text-align: center;"><img src="vone.jpg" alt="VIDEO ONE" style="width:100%">_____VIDEO 1 _____</a>
                  </div>
                </div>
                
                <div class="column">
                  <div class="vtwo">
                  <a href = "https://www.youtube.com/watch?v=dafuAz_CV7Q" style="text-align:center;"><img src="vtwo.jpg" alt="VIDEO TWO" style="width:100%">_____VIDEO 2 _____</a>
                </div>
              </div>
              
                <div class="column">
                  <div class="vthree">
                  <a href = "https://www.youtube.com/watch?v=DooxDIRAkPA&t=3732s" style="text-align:center;"><img src="vthree.jpg" alt="VIDEO THREE" style="width:100%">_____VIDEO 3 _____</a>
                </div>
              </div>
             
              



                </div>
            </div>
            
            
    </body>