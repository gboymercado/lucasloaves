<?php
include_once 'Processes/OrderItem.php';
session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="templates/template.css">
    <link rel="stylesheet" href="contentPages/content.css">
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Alata&family=Kanit&family=Parisienne&display=swap" rel="stylesheet">
    <link rel="icon" href="/images/icon.ico" type="image/x-icon">
    <title class="pageTitle">Luca's Loaves</title>
    

  </head>

  <body onload="setFooterCurrentYear()" style="background-color: #f7d8bc;">
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #734b28;">
        <div class="container-fluid">
          <a class="navbar-brand" id="navLogo" href="index.php" style="font-family: 'Parisienne';font-size:35px; padding-left: 10px">Luca&apos;s Loaves</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 w-100">
              <li class="nav-item ps-5 py-2">
                <a class="nav-link " href="products.php" style="font-family: Alata; font-size: 18px">Products</a>
              </li>
              <li class="nav-item ps-5 py-2">
                <a class="nav-link" href="breadMakingClass.php" style="font-family: Alata; font-size: 18px">Bread Making Class</a>
              </li>
              <li class="nav-item ps-5 py-2">
                <a class="nav-link" href="careers.php" style="font-family: Alata; font-size: 18px">Careers</a>
              </li>
              <li class="nav-item ps-5 py-2">
                <a class="nav-link" href="aboutUs.php" style="font-family: Alata; font-size: 18px">About Us</a>
              </li>
              <li class="nav-item ps-5 py-2">
                <a class="nav-link" href="contact.php" style="font-family: Alata; font-size: 18px">Contact</a>
              </li>
              <li class="nav-item ps-5 py-2" id="shoppingCart">
                <a class="nav-link" href="shoppingCart.php">
                  <i class="fas fa-shopping-cart" style="font-size: 18px;"></i>
                  <sup>
                    <span class='badge badge-primary rounded-circle bg-danger d-none'></span>
                  </sup>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    <main>
      <?php include($pageContent);?>
    </main>
    <footer>
      <div class="container-fluid" style="background-color: #734b28;">
        <div class="container">
          <div class="row py-5" id="sitemap-row">
            <div class="col-md-4 d-none d-md-block">
              <a class="text-decoration-none text-center" id="footerLogo" href="index.php" style="font-family: 'Parisienne';font-size:35px"><h1>Luca&apos;s Loaves</h1></a>
            </div>
            <div class="col-md-4 col-sm-12">
              <ul class="list-unstyled">
                <li class="sitemapItem">
                  <a href="products.php" style="font-family: Alata; font-size: 18px">Products</a>
                </li>
                <li class="sitemapItem">
                  <a href="breadMakingClass.php" style="font-family: Alata; font-size: 18px">Bread Making Class</a>
                </li>
                <li class="sitemapItem">
                  <a href="careers.php" style="font-family: Alata; font-size: 18px">Careers</a>
                </li>
                <li class="sitemapItem">
                  <a href="aboutUs.php" style="font-family: Alata; font-size: 18px">About Us</a>
                </li>
                <li class="sitemapItem">
                  <a href="contact.php" style="font-family: Alata; font-size: 18px">Contact</a>
                </li>
                <li class="sitemapItem">
                  <a href="privacy.php" style="font-family: Alata; font-size: 18px">Privacy Policy</a>
                </li>
              </ul>
            </div>
            <div class="col-md-4 col-sm-12 pt-3" id="footerSocial">
              <ul class="list-unstyled">
              <li class="d-inline"><a href="https://www.facebook.com/" target="_blank"><i class="fab fa-facebook fa-2x" style="color: #3b5998;"></i></a></li>
                <li class="d-inline"><a href="https://twitter.com/" target="_blank"><i class="fab fa-twitter fa-2x px-3" style="color: #1DA1F2;"></i></a></li>
                <li class="d-inline"><a href="https://www.instagram.com/" target="_blank"><i class="fab fa-instagram fa-2x" style="color: #E1306C;"></i></a></li>
              </ul>
            </div>
          </div>
          <div class="row copyright text-center">
              <p>COPYRIGHT&copy; <span class="currentYear"></span> Luca's Loaves Pty Ltd. All rights reserved.</p>
          </div>
        </div>

      </div>
    </footer>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/0dd329fe0a.js" crossorigin="anonymous"></script>
    <script src="lucasLoaves.js"></script>
    <script>
      window.addEventListener("load", function(){
        const serverFileGetNumBerOfItemsBought = "Processes/sendNumberOfItemsBought.php";
        ajaxGetDataFromServer(serverFileGetNumBerOfItemsBought, function(parNumberOfItemsBought){
          if(parNumberOfItemsBought > 0)
          {
            document.querySelector(".badge").classList.remove("d-none");
            document.querySelector(".badge").classList.add("d-inline");
            document.querySelector(".badge").innerHTML = parNumberOfItemsBought;
          }
          else
          {
            document.querySelector(".badge").classList.remove("d-inline");
            document.querySelector(".badge").classList.add("d-none");
          }
          
        });

      });//window.addEventListener("load", function(){
      
    </script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->
  </body>
</html>
