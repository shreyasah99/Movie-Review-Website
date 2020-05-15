<?php include('home.php');
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Rflix</title>

  <!-- google fonts -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:100,400|Ubuntu&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Courgette&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
 
  <!-- css stylessheet -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet"  href="..\css\pages\styles.css">

  <!-- fontawesome -->
  <script src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>

  <!-- bootstrap scripts -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>s
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script> 

  <style>
    * {
      box-sizing: border-box;
    }
    
    #myInput {
      background-image: url('/css/searchicon.png');
      background-position: 10px 12px;
      background-repeat: no-repeat;
      width: 100%;
      font-size: 16px;
      padding: 12px 20px 12px 40px;
      border: 1px solid #ddd;
      margin-bottom: 12px;
    }
    
    #myUL {
      list-style-type: none;
      padding: 0;
      margin: 0;
    }
    
    #myUL li a {
      border: 1px solid #ddd;
      margin-top: -1px; /* Prevent double borders */
      background-color: #f6f6f6;
      padding: 12px;
      text-decoration: none;
      font-size: 18px;
      color: black;
      display: block;
    }
    
    #myUL li a:hover:not(.header) {
      background-color: #eee;
    }
    </style>



</head>

<body>


  <section id="title">
    <div class="container-fluid">



      <!-- Nav Bar -->
      <nav class="navbar navbar-expand-lg navbar-dark style=" background-color: #ff4c68 ;">

        <a class="navbar-brand" href="">R-Flix</a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">

          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="#pricing">Movies</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#pricing">Series</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#news">News</a>
            </li>
            <li  class="nav-item">
            <?php
                            global $con;

                    
                            if(!isset($_SESSION['email']))
                            
                            {
                                echo "<a class='nav-link' href='signup.php?in=true'>Sign In</a>";
                                if(isset($_GET['in'])){
                                    echo "<script> window.location.assign('login.php')</script>";	
                                }
                            }
                            else{
                                echo "<a class='nav-link' href='singup.php?out=true'>Sign Out</a>";
                               if(isset($_GET['out']))
                                {
                                    echo "<script> window.location.assign('login.php')</script>";
                                    session_unset();
                                }
                            }
                    ?>
            </li>
          </ul>

        </div>
      </nav>



      <!-- Title -->

      <div class="row">
        <div class="col-lg-6">
          <h1 class="titleh1">Only  Website  to  give  sentimental  analysis.</h1>
          <button type="button" class="btn btn-dark btn-lg download-button"><i class="fab fa-apple"></i> Download</button>
          <button type="button" class="btn btn-outline-light btn-lg download-buton"><i class="fab fa-google-play"></i> Download</button>
        </div>

        <div class="col-lg-6 ">
          <img class="title-image" src="..\assets\iphone6.jpg" alt="iphone-mockup">
        </div>
      </div>
    </div>

  </section>


  <!-- Features -->

  <section id="features">

    <div class="row">
      <div class="feature-box col-lg-4 ">
        <i class="icon fas fa-check-circle fa-4x"></i>
        <h3>Easy to use.</h3>
        <p>So easy to use, that anybody can use it.</p>
      </div>
      <div class=" feature-box col-lg-4">
        <i class="icon fas fa-dot-circle fa-4x"></i>
        <h3>Elite Clientele</h3>
        <p>We have reviews for all movies,series.</p>
      </div>
      <div class=" feature-box col-lg-4">

        <i class="icon fas fa-heart fa-4x"></i>
        <h3>Guaranteed to work.</h3>
        <p>Find out which movie,series you should watch.</p>
      </div>
    </div>


  </section>




  <!-- Pricing -->

  <section id="pricing" >

<div class="a">

  <div class="row">


    <div class="pricing-column col-lg-6">
      <div class="card">
        <div class="card-header">

            <h3>MOVIES</h3>

            <input type="text" id="searchInput" placeholder="Search a movie">
            <script>$("#searchInput").on('keyup', function() {
                var searchValue = $(this).val();
                searchAndFilter(searchValue)
              });
            
              function searchAndFilter(searchTerm) {
                if (searchTerm == '') {
                  $("#myUL li").hide()
                } else {
                  $("#myUL li").each(function() {
                    var currentText = $(this).text();
                    currentText = currentText.toUpperCase();
                    searchTerm = searchTerm.toUpperCase();
                    if (currentText.indexOf(searchTerm) >= 0) {
                      $(this).show();
                    }
                  });
                }
              }
            
              $(document).ready(function() {
                $("#myUL li").hide();
              });
            </script>
            
            <ul id="myUL">
              <li><a href="http://localhost/movies/pages/spiderman.html">Spiderman</a></li>
              <li><a href="http://localhost/movies/pages/bahubali.html">Bahubali</a></li>
              <li><a href="http://localhost/movies/pages/inception.html">inception</a></li>
              <li><a href="http://localhost/movies/pages/aladin.html">aladin</a></li>
              <li><a href="http://localhost/movies/pages/got.html">got</a></li>
              <li><a href="http://localhost/movies/pages/suits.html">suits</a></li>
              <li><a href="http://localhost/movies/pages/goodgirls.html">goodgirls</a></li>
              <li><a href="http://localhost/movies/pages/breakingbad.html">breakingbad</a></li>
              
              
              
            </ul>
            
            

        </div>
        <div class="card-body">

          <h2>WHAT WE OFFER !!</h2>
          <p>Analysis based on Age,Gender etc..</p>
          <p>Box-Office collection,Facts,Dialogue  </p>
          <p>Critics Rating</p>
          <p>Sentimental Review</p>
         </div> </div> </div>


         <div class="pricing-column col-lg-6">
           <div class="card">
             <div class="card-header">

                 <h3>SERIES</h3>

                 <input type="text" id="searchInput" placeholder="Search a series">
            <script>$("#searchInput").on('keyup', function() {
                var searchValue = $(this).val();
                searchAndFilter(searchValue)
              });
            
              function searchAndFilter(searchTerm) {
                if (searchTerm == '') {
                  $("#myUL li").hide()
                } else {
                  $("#myUL li").each(function() {
                    var currentText = $(this).text();
                    currentText = currentText.toUpperCase();
                    searchTerm = searchTerm.toUpperCase();
                    if (currentText.indexOf(searchTerm) >= 0) {
                      $(this).show();
                    }
                  });
                }
              }
            
              $(document).ready(function() {
                $("#myUL li").hide();
              });
            </script>
            
            <ul id="myUL">
              <li><a href="http://localhost/movies/pages/got.html">got</a></li>
              <li><a href="http://localhost/movies/pages/suits.html">suits</a></li>
              <li><a href="http://localhost/movies/pages/goodgirls.html">goodgirls</a></li>
              <li><a href="http://localhost/movies/pages/breakingbad.html">breakingbad</a></li>
              <li><a href="thor.html">Thor</a></li>
              
            </ul>
            
            

        </div>
             <div class="card-body">

               <h2>WHAT WE OFFER !!</h2>
               <p>Analysis based on Age,Gender etc.</p>
               <p>Facts,History,Dialogue  </p>
               <p>Critics Rating</p>
               <p>Sentimental Review</p>
              </div> </div> </div>



        </div>

</div>
</section>



  <!-- Pricing -->

  <section id="news">

<div class="a">

  <div class="row">


    <div class="pricing-column col-lg-6">
      <div class="card">
        <div class="card-header">

            <h3> NEWS :MOVIES</h3>

        </div>
        <div class="card-body">


          <p><a href="https://www.boxofficemojo.com/yearly/chart/?p=.htm&yr=2019">Top 10 highest grossing movie of 2019</a></p>
          <p><a href="https://www.boxofficemojo.com/alltime/world/">Top 10 highest grossing movie of all time</a></p>
          <p><a href="https://www.metacritic.com/feature/film-critics-list-the-top-10-movies-of-2018">Top 10 critics rated movie</a></p>
          <p><a href="https://www.hollywoodreporter.com/lists/scariest-movies-ever-top-10-horror-halloween-2016-941503">Top 10 scariest movie</a></p>
         </div> </div> </div>


         <div class="pricing-column col-lg-6">
           <div class="card">
             <div class="card-header">

                 <h3>NEWS : STARS</h3>

             </div>
             <div class="card-body">

               <p><a href="https://ceoworld.biz/2019/08/28/here-are-the-top-10-highest-paid-male-actors-in-the-world-of-2019/">Top 10 richest male actors</a></p>
               <p><a href="https://wealthygorilla.com/richest-actresses-world/">Top 10 richest female actors</a></p>
               <p><a href="https://boxofficeindia.com/hit-count-actor.php">Top male actors with most no of hits</a></p>
                <p><a href="https://www.imdb.com/list/ls062036835/">Top female actors with most no of hits</a></p>

              </div> </div> </div>



        </div>

</div>
  </section>



  <!-- Call to Action -->

  <section id="cta">

    <h3 class="cta-text">Download the app for more Details.</h3>
    <button type="button" class="btn btn-dark btn-lg download-button"><i class="fab fa-apple"></i> Download</button>
    <button type="button" class="btn btn-dark btn-lg download-button"><i class="fab fa-google-play " ></i> Download</button>

  </section>


  <!-- Footer -->

  <footer id="footer">
    <i class="a fab fa-instagram"></i>
    <i class="a fab fa-twitter"></i>
    <i class="a fab fa-facebook-square"></i>
    <i class="a fas fa-envelope-square"></i>
    <p>© Copyright 2018 TinDog</p>

  </footer>


</body>

</html>
