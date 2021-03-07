<?php 
  session_start(); 
  
  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
    header("location: login.php");
  }
  
?>
<?php require_once(realpath($_SERVER["DOCUMENT_ROOT"]).'\courses\home.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>home</title>
    <link rel="stylesheet" href="home.css">
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
            <a class="navbar-brand" href="#"><img src="img\learn.jpg"></a>
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
                  <a class="nav-link" href="#">HOME </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#courses">COURSES</a>
                </li>
                <li class="nav-item">

                  <a class="nav-link" href="http://localhost/courses/index.php">SIGN OUT</a>
                </li>
              </ul>
            </div>
          </nav>
    </section>
    <!------SLIDE---->
                  <img class="d-block img-fluid" src="img\learnio.jpg" alt="First slide">
                      
        <h1>Let's start Learning</h1>
        <section id="courses">
               <div class="row">
                  <div class="column">
                    <div class="card">
                      <img src="img\ai.jpg" alt="AI" style="width:100%">
                      <div class="container">
                        <h2>ARTIFICIAL INTELLIGENCE</h2>
                        <p class="title">LEARN</p>
                        <p>Artificial intelligence (AI) is the ability of a computer or a robot controlled by a computer to do tasks that are usually done by humans because they require human intelligence and discernment.</p>
                        
                        <p><a href="http://localhost/courses/ai/ai.php" button class="button">LEARN</a></p>
                      </div>
                    </div>
                  </div>
                
                  <div class="column">
                    <div class="card">
                      <img src="img/iot.jpg" alt="IOT" style="width:100%">
                      <div class="container">
                        <h2>INTERNET OF THINGS</h2>
                        <p class="title">LEARN</p>
                        <p>The Internet of Things (IoT) refers to a system of interrelated, internet-connected objects that are able to collect and transfer data over a wireless network without human intervention</p>
                        
                        <p><a href="http://localhost/courses/iot/iot.php" button class="button">LEARN</a></p>
                      </div>
                    </div>
                  </div>
                
                  <div class="column">
                    <div class="card">
                      <img src="img\machine.jpg" alt="ML" style="width:100%">
                      <div class="container">
                        <h2>MACHINE LEARNING</h2>
                        <p class="title">LEARN</p>
                        <p>Machine learning (ML) is a programming technique that provides your apps the ability to automatically learn and improve from experience without being explicitly programmed to do so. </p>
                        <p><a href="http://localhost/courses/ml/ml.php" button class="button">LEARN</a></p>
                      </div>
                    </div>
                  </div>
                  <div class="column">
                    <div class="card">
                      <img src="img/networking.jpg" alt="N" style="width:100%">
                      <div class="container">
                        <h2>NETWORKING</h2>
                        <p class="title">LEARN</p>
                        <p>Networking is the exchange of information and ideas among people with a common profession or special interest, usually in an informal social setting. Networking often begins with a single point of common ground.</p>
                        <p><a href="http://localhost/courses/n/n.php" button class="button">LEARN</a></p>
                      </div>
                    </div>
                  </div>
                  <div class="column">
                    <div class="card">
                      <img src="img/web.jpg" alt="WD" style="width:100%">
                      <div class="container">
                        <h2>WEB DEVELOPMENT</h2>
                        <p class="title">LEARN</p>
                        <p>Web development is the building and maintenance of websites; it's the work that happens behind the scenes to make a website look great, work fast and perform well with a seamless user experience.</p>
                        <p><a href="http://localhost/courses/webd/webd.php" button class="button">LEARN</a></p>
                      </div>
                    </div>
                  </div>
                  <div class="column">
                    <div class="card">
                      <img src="img/cloud.jpg" alt="CC" style="width:100%">
                      <div class="container">
                        <h2>CLOUD COMPUTING</h2>
                        <p class="title">LEARN</p>
                        <p>Cloud computing is the on-demand availability of computer system resources, especially data storage and computing power, without direct active management by the user. </p>
                        <p><a href="http://localhost/courses/cc/cc.php" button class="button">LEARN</a></p>
                      </div>
                    </div>
                  </div>
                  <div class="column">
                    <div class="card">
                      <img src="img/deepl.jpg" alt="deep learning" style="width:100%">
                      <div class="container">
                        <h2>DEEP LEARNING</h2>
                        <p class="title">LEARN</p>
                        <p>Deep learning is an AI function that mimics the workings of the human brain in processing data for use in detecting objects, recognizing speech, translating languages, and making decisions.</p>
                        <p><a href="http://localhost/courses/dl/dl.php" button class="button">LEARN</a></p>
                      </div>
                    </div>
                  </div>
                  <div class="column">
                    <div class="card">
                      <img src="img/python.jpg" alt="python" style="width:100%">
                      <div class="container">
                        <h2>PYTHON</h2>
                        <p class="title">LEARN</p>
                        <p>Python is an interpreted, object-oriented, high-level programming language with dynamic semantics.Python's simple, easy to learn syntax emphasizes readability and therefore reduces the cost of program maintenance. </p>
                        <p><a href="http://localhost/courses/python/python.php" button class="button">LEARN</a></p>
                      </div>
                    </div>
                  </div>
                  <div class="column">
                    <div class="card">
                      <img src="img/datascience.jpg" alt="data science" style="width:100%">
                      <div class="container">
                        <h2>DATA SCIENCE</h2>
                        <p class="title">LEARN</p>
                        <p>Data science is a "concept to unify statistics, data analysis and their related methods" in order to "understand and analyze actual phenomena" with data. Data scientists also rely heavily on artificial intelligence. </p>
                        <p><a href="http://localhost/courses/ds/ds.php" button class="button">LEARN</a></p>
                      </div>
                    </div>
                  </div>


                  </div>
                </div>
              </section>

            
              </body>
            
           