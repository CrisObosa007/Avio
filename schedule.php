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
    <title>Home</title>

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
<style type="text/css">


/* From Uiverse.io by cssbuttons-io */ 
.button1 {
  margin:10px;
  padding: 1.3em 3em;
  font-size: 12px;
  text-transform: uppercase;
  letter-spacing: 2.5px;
  font-weight: 500;
  color: #000;
  background-color: #fff;
  border: none;
  border-radius: 10px;
  box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.1);
  transition: all 0.3s ease 0s;
  cursor: pointer;
  outline: none;
}

.button1:hover {
  background-color: #23c483;
  box-shadow: 0px 15px 20px rgba(46, 229, 157, 0.4);
  color: #fff;
  transform: translateY(-7px);
}

.button1:active {
  transform: translateY(-1px);
}

</style>
  <body style="background-color:#212429">
    <div class="">
      <!-- header section strats -->
      <header class="header_section" style="padding: 0px;background-color:#fff">
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
                      >Home </a
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
                  <li class="nav-item">
                    <a class="nav-link" href="event.php">Event</a>
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
                   <li class="nav-item active">
                    <a class="nav-link" href="schedule.php"> Schedule<span class="sr-only">(current)</span> </a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
        </div>
      </header>
    </div>

        <!-- about section -->
        <section class="about_section layout_padding" align="center"  style="background-color:#212529">
      <div class="container">
        <div class="row">

          <div class="col-md-12 mt-5 mb-5" style=" background-color: #343a40;-webkit-box-shadow: 0 0 10px 0 rgba(0, 0, 0, 0.15);box-shadow: 0 0 10px 0 rgba(0, 0, 0, 0.15);padding: 10px;border-radius:15px">
          <div>
            <button class="button1 room1" id="room1" onclick="myFunctionTable1()">EE Shop</button>
            <button class="button1 room2" id="room2"  onclick="myFunctionTable2()">Com Lab</button>
            <button class="button1 room3" id="room3"   onclick="myFunctionTable3()">AV Lab</button>
            <button class="button1 room4" id="room4"  onclick="myFunctionTable4()">Room 1</button>
            <button class="button1 room5" id="room5"   onclick="myFunctionTable5()">Room 2</button>
            <button class="button1 room6" id="room6"   onclick="myFunctionTable6()">MAB 13</button>
          </div>
          
          <div class="bd-example">
  <div  id="table1" style="display:block">
  <img src="images/rooms/eeshop.png" style="width:100%;height:100%"/>
  </div>
  <div  id="table2" style="display:none">
  <img src="images/rooms/comlab.png" style="width:100%;height:100%"/>
  </div>
  <div  id="table3" style="display:none">
  <img src="images/rooms/avlab.png" style="width:100%;height:100%"/>
  </div>
  <div  id="table4" style="display:none">
  <img src="images/rooms/room1.png" style="width:100%;height:100%"/>
  </div>
  <div  id="table5" style="display:none">
  <img src="images/rooms/room2.png" style="width:100%;height:100%"/>
  </div>
  <div  id="table6" style="display:none">
  <img src="images/rooms/mab.png" style="width:100%;height:100%"/>
  </div>
    </div>
          </div>
        </div>
      </div>
    </section>


      
  <script>
  function myFunctionTable1() {
  document.getElementById("table1").style.display = "block";
  document.getElementById("table2").style.display = "none";
  document.getElementById("table3").style.display = "none";
  document.getElementById("table4").style.display = "none";
  document.getElementById("table5").style.display = "none";
  document.getElementById("table6").style.display = "none";
  document.getElementById("room1").style.backgroundColor = "#23c483";
  document.getElementById("room2").style.backgroundColor = "#fff";
  document.getElementById("room3").style.backgroundColor = "#fff";
  document.getElementById("room4").style.backgroundColor = "#ffffff";
  document.getElementById("room5").style.backgroundColor = "#ffffff";
  document.getElementById("room6").style.backgroundColor = "#ffffff";
  }
  function myFunctionTable2() {
  document.getElementById("table1").style.display = "none";
  document.getElementById("table2").style.display = "block";
  document.getElementById("table3").style.display = "none";
  document.getElementById("table4").style.display = "none";
  document.getElementById("table5").style.display = "none";
  document.getElementById("room1").style.backgroundColor = "#ffffff";
  document.getElementById("room2").style.backgroundColor = "#23c483";
  document.getElementById("room3").style.backgroundColor = "#ffffff";
  document.getElementById("room4").style.backgroundColor = "#ffffff";
  document.getElementById("room5").style.backgroundColor = "#ffffff";
  document.getElementById("room6").style.backgroundColor = "#ffffff";
  }
  function myFunctionTable3() {
  document.getElementById("table1").style.display = "none";
  document.getElementById("table2").style.display = "none";
  document.getElementById("table3").style.display = "block";
  document.getElementById("table4").style.display = "none";
  document.getElementById("table5").style.display = "none";
  document.getElementById("table6").style.display = "none";
  document.getElementById("room1").style.backgroundColor = "#ffffff";
  document.getElementById("room2").style.backgroundColor = "#ffffff";
  document.getElementById("room3").style.backgroundColor = "#23c483";
  document.getElementById("room4").style.backgroundColor = "#ffffff";
  document.getElementById("room5").style.backgroundColor = "#ffffff";
  document.getElementById("room6").style.backgroundColor = "#ffffff";
  }
  function myFunctionTable4() {
  document.getElementById("table1").style.display = "none";
  document.getElementById("table2").style.display = "none";
  document.getElementById("table3").style.display = "none";
  document.getElementById("table4").style.display = "block";
  document.getElementById("table5").style.display = "none";
  document.getElementById("table6").style.display = "none";
  document.getElementById("room1").style.backgroundColor = "#ffffff";
  document.getElementById("room2").style.backgroundColor = "#ffffff";
  document.getElementById("room3").style.backgroundColor = "#ffffff";
  document.getElementById("room4").style.backgroundColor = "#23c483";
  document.getElementById("room5").style.backgroundColor = "#ffffff";
  document.getElementById("room6").style.backgroundColor = "#ffffff";
  }
  function myFunctionTable5() {
  document.getElementById("table1").style.display = "none";
  document.getElementById("table2").style.display = "none";
  document.getElementById("table3").style.display = "none";
  document.getElementById("table4").style.display = "none";
  document.getElementById("table5").style.display = "block";
  document.getElementById("table6").style.display = "none";
  document.getElementById("room1").style.backgroundColor = "#ffffff";
  document.getElementById("room2").style.backgroundColor = "#ffffff";
  document.getElementById("room3").style.backgroundColor = "#ffffff";
  document.getElementById("room4").style.backgroundColor = "#ffffff";
  document.getElementById("room5").style.backgroundColor = "#23c483";
  document.getElementById("room6").style.backgroundColor = "#ffffff";
  }
  function myFunctionTable6() {
  document.getElementById("table1").style.display = "none";
  document.getElementById("table2").style.display = "none";
  document.getElementById("table3").style.display = "none";
  document.getElementById("table4").style.display = "none";
  document.getElementById("table5").style.display = "none";
  document.getElementById("table6").style.display = "block";
  document.getElementById("room1").style.backgroundColor = "#ffffff";
  document.getElementById("room2").style.backgroundColor = "#ffffff";
  document.getElementById("room3").style.backgroundColor = "#ffffff";
  document.getElementById("room4").style.backgroundColor = "#ffffff";
  document.getElementById("room5").style.backgroundColor = "#ffffff";
  document.getElementById("room6").style.backgroundColor = "#23c483";
  }


  </script>
       

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
