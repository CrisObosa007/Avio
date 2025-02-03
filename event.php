<!DOCTYPE html>
<html>
  <head>
    <!-- Basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <!-- Site Metas -->
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link rel="icon" href="images/logo.png" type="image/icon type" />
    <title>Event</title>

    <!-- slider stylesheet -->
    <link
      rel="stylesheet"
      type="text/css"
      href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css"
    />

    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

    <!-- fonts style -->
    <link
      href="https://fonts.googleapis.com/css?family=Poppins:400,600,700&display=swap"
      rel="stylesheet"
    />
    <!-- Custom styles for this template -->
 <link href="css/style.css?v=<?php echo time();?>" rel="stylesheet" />
    <!-- responsive style -->
    <link href="css/responsive.css" rel="stylesheet" />
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>

  <body>
    <div class="">
      <!-- header section strats -->
      <header class="header_section" style="padding: 0px">
        <div class="container-fluid  py-2">
          <nav class="navbar navbar-expand-lg custom_nav-container">
            <a class="navbar-brand" href="#">
              <img
                src="images/logo.jpg"
                alt=""
                style="border-radius: 50px; height: 50px; width: 50px"
              />
              <span> AVIONICS TECHNOLOGY </span>
            </a>
            <button
              class="navbar-toggler"
              type="button"
              data-toggle="collapse"
              data-target="#navbarSupportedContent"
              aria-controls="navbarSupportedContent"
              aria-expanded="false"
              aria-label="Toggle navigation"
            >
              <span class="s-1"> </span>
              <span class="s-2"> </span>
              <span class="s-3"> </span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <div
                class="d-flex ml-auto flex-column flex-lg-row align-items-center"
              >
                <ul class="navbar-nav">
                  <li class="nav-item ">
                    <a class="nav-link" href="index.php"
                      >Home</a
                    >
                  </li>
                  <li  class="nav-item " >
                    <div class="dropdown nav-link ">
                  <button onclick="myFunction()" class="dropbtn ">AWARD <i class="fa fa-caret-down" style="font-size:20px;"></i></button>
                  <div id="myDropdown" class="dropdown-content">
                    <a href="award/sports.php">SPORTS</a>
                    <a href="award/certificate.php">CERTIFICATE</a>
                  </div>
                </div>
                  </li>
                  <li class="nav-item active">
                    <a class="nav-link" href="event.php">Event  <span class="sr-only">(current)</span></a>
                  </li>
                  <li  class="nav-item " >
                  <div class="dropdown1 nav-link ">
                  <button onclick="myFunction1()" class="dropbtn1 ">OFFICER <i class="fa fa-caret-down" style="font-size:20px;"></i></button>
                  <div id="myDropdown1" class="dropdown-content1">
                    <a href="officer/avsoc.php">AVSOC</a>
                    <a href="officer/mediateam.php">MEDIA TEAM</a>
                  </div>
                </div>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="about.php"> About</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="forms.php"> Forms </a>
                  </li>
                   <li class="nav-item">
                    <a class="nav-link" href="schedule.php"> Schedule </a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
        </div>
      </header>
    </div>

    <!-- service section -->
     <?php
      include ("undermaintenance.php");
     ?>
    <section class="service_section layout_padding" style="display:none">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12" >
            <a href="event/avioween.php" >
              <div
                style="
                  box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
                  margin: 10px;
                  padding: 10px;
                "
                class="border-button1"
              >
                <div
                  class="detail-box"
                  style="
                    width: 100% !important;
                    box-shadow: rgba(0, 0, 0, 0.05) 0px 6px 24px 0px,
                      rgba(0, 0, 0, 0.08) 0px 0px 0px 1px;
                      
                  background-color:#fff;
                  "
                >
                  <div style="width: 100%">
                    <p
                      style="
                        width: 100%;
                        text-align: left;
                        font-size: 23px;
                        font-weight: 700;
                        padding: 14px 10px 0px 10px;
                        color:#1a6803;
                      "
                      class="p1"
                    >
                      AVIOWEEN COSTUME PARTY
                    </p>
                  </div>
                  <div>
                    <img
                      src="images/avioween.gif"
                      alt=""
                      style="height: auto; width: 100%"
                      loading="lazy"
                    />
                  </div>
                </div>
              </div>
            </a>
          </div>

          <div class="col-md-12">
            <a href="event/aerolympic.php">
              <div
                style="
                  box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
                  margin: 10px;
                  padding: 10px;
                "
                class="border-button1"
              >
                <div
                  class="detail-box"
                  style="
                    width: 100% !important;
                    box-shadow: rgba(0, 0, 0, 0.05) 0px 6px 24px 0px,
                      rgba(0, 0, 0, 0.08) 0px 0px 0px 1px;
                      background-color:#fff;
                  "
                >
                  <div style="width: 100%">
                    <p
                      style="
                        width: 100%;
                        text-align: left;
                        font-size: 23px;
                        font-weight: 700;
                        padding: 14px 10px 0px 10px;
                        color:#1a6803;
                      "
                      class="p1"
                    >
                      AEROLYMPIC
                    </p>
                  </div>
                  <div>
                    <img
                      src="images/aerolympic.jpg"
                      alt=""
                      style="height: auto; width: 100%"
                      loading="lazy"
                    />
                  </div>
                </div>
              </div>
            </a>
          </div>

          <div class="col-md-12" style="display:none">
            <a href="avionight.php">
              <div
                style="
                  box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
                  margin: 10px;
                  padding: 10px;
                "
                class="border-button1"
              >
                <div
                  class="detail-box"
                  style="
                    width: 100% !important;
                    box-shadow: rgba(0, 0, 0, 0.05) 0px 6px 24px 0px,
                      rgba(0, 0, 0, 0.08) 0px 0px 0px 1px;
                  "
                >
                  <div style="width: 100%">
                    <p
                      style="
                        width: 100%;
                        text-align: left;
                        font-size: 23px;
                        font-weight: 700;
                        padding: 14px 10px 0px 10px;
                      "
                      class="p1"
                    >
                      AVIONIGHTS
                    </p>
                  </div>
                  <div>
                    <img
                      src="images/avioween.gif"
                      alt=""
                      style="height: auto; width: 100%"
                      loading="lazy"
                    />
                  </div>
                </div>
              </div>
            </a>
          </div>
        </div>

        <!-- <div class="heading_container" align="left" >
        
      
        </div> -->
      </div>
    </section>
    <!-- end service section -->

    <!-- about section -->

    <!-- end about section -->

    <!-- blog section -->

    <!-- end blog section -->

    <!-- info section -->

    <script src="js/dropdown.js"></script>
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/bootstrap.js"></script>
  </body>
</html>
