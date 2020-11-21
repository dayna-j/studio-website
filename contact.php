<?php 
      //Session start, to generate dynamic kcaptcha codes and display flash messages
  session_start();

  //Display errors, can be removed when testing is done
  ini_set('display_errors', 1);
  ini_set('display_startup_errors', 1);
  error_reporting(E_ALL);

?>


<!doctype html>
<html lang="en">

<head>
    <title>Moonflower Productions</title>
    
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff"> 

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com"> 
    <link href="https://fonts.googleapis.com/css2?family=Jim+Nightshade&display=swap" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css2?family=Sofia&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./styles/scss/dist/contact.css">
</head>



<body>
    <div class="fluid-container">
        
        <div class="page-wrapper">
            
            <header class="">
                <nav class="navbar navbar-expand-md navbar-dark">
                    <div class="container">
                        <a href="./index.php" class="navbar-brand">
                            Moonflower Productions
                        </a>
                        <button type="button" class="navbar-toggler collapsed" data-toggle="collapse" aria-expanded="false" data-target="#main-nav">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div id="main-nav" class="collapse navbar-collapse">
                            <ul class="navbar-nav justify-content-lg-center">
                                <li><a href="./index.php" class="px-3 nav-item nav-item-header nav-link nav-link-header active absolute-center">About</a></li>
                                <li><a href="#" class="px-3 nav-item nav-item-header nav-link nav-link-header absolute-center">Mixing</a></li>
                                <li><a href="#" class="px-3 nav-item nav-item-header nav-link nav-link-header absolute-center">Mastering</a></li>
                                <li><a href="#" class="px-3 nav-item nav-item-header nav-link nav-link-header absolute-center">Consultation</a></li>
                                <li><a href="#" class="px-3 nav-item nav-item-header nav-link nav-link-header absolute-center">Contact</a></li>
                            </ul>
                        </div>
                    </div> 
                </nav>
            </header>

            <section id='background-overlay' style='background-image: url("./img/mixer2.jpg");")' class='w-100'>
            </section>

           <section id='contact-section' class='p-3'>

                <div class="row justify-content-center">

                    <div class="col-lg-6">

                        <h3 class='text-center form-header p-4'>Want to work with us?</h3>
                        <form method="POST" action="./contact.php">

                            <div class="form-row">

                                <div class="col-md-6 input-container p-3">

                                    <input required id='name' type="text" class="form-control" >
                                    <label class="" for="name">Name</label>

                                </div>

                                <div class="col-md-6 input-container p-3">

                                    <input required id="email" type="text" class="form-control" >
                                    <label for="email">Email</label>

                                </div>

                            </div>

                            <div class="form-row">

                                <div class="col input-container p-3">
                                    
                                    <input required id="message" type="text" class="form-control" >
                                    <label for="message">Message</label>
                                </div>

                            </div>

                            <div class="form-row">

                                <div class="form-field d-flex justify-content-center col x-10 p-4">
                                    <input class="submit-button" type="submit" value="GET IN TOUCH">
                                </div>

                            </div>

                        </form>

                    </div>

                </div>

           </section>

           <?php include("./footer.php"); ?>