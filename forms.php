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
    <title>Forms</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
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
    <link href="css/style.css" rel="stylesheet" />
    <!-- responsive style -->
    <link href="css/responsive.css" rel="stylesheet" />
    <style> 
    p{
      color:#fff;
      font-weight: 500;
      text-align: justify;
      text-justify: inter-word;
      font-size:17px;
      padding:0px 5px;
      
    }
    h5{
      color:#fff;
      /* font-family:Impact, fantasy; */
      font-size:20px;
      font-weight: 800
    }
    </style>
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
                  <li class="nav-item active" >
                    <a class="nav-link" href="forms.php"> Forms  <span class="sr-only">(current)</span></a>
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

    <section class="service_section layout_padding">
      <div class="container-fluid">
        <div
          class="service_container"
          style="
            box-shadow: rgba(0, 0, 0, 0.1) 0px 4px 12px;
            padding: 10px !important;
            border-radius: 10px;
          "
        >
          <!-- first box -->
          <div class="col-xl-12" align="left" style="margin-left: 25px">
            <p
              style="
                font-size: 20px;
                margin: 0px;
                color: green;
                font-weight: 600;
              "
            >
              STEPS:
            </p>
          </div>
          <div
            class="box box2"
            style="padding: 10px !important; margin: 5 1% !important"
            align="left"
          >
            <h5 style="padding-bottom: 10px; color: green">Step 1:</h5>
            <!-- <p>Go to website or scan the qr below</p> -->
            <p><strong> Scan the QR Code:</strong> Use a QR code scanning application on your mobile device to scan the provided QR code</p>
            <div class="img-box">
              <img
                src="images/qrform.png"
                class="img2"
                alt=""
                style="
                  height: 150px;
                  width:150px;
                  border-radius: 0px;
                  margin: 40px 0px;
                  padding-top: 10px;
                "
                loading="lazy"
              />
            </div>
            <div class="detail-box" style="padding-top: 10px"></div>
          </div>
          <!-- clossing box  -->
          <!-- first box -->
          <div
            class="box box2"
            style="padding: 10px !important; margin: 5 1% !important"
            align="left"
          >
            <h5 style="padding-bottom: 10px; color: green">Step 2:</h5>
            <p>
            <strong>Download the File:</strong>  The QR code will likely direct you to a link. Please follow the link and download the associated file.
            </p>
            <div class="detail-box" style="padding-top: 10px"></div>
          </div>
          <!-- clossing box  -->
          <!-- first box -->
          <div
            class="box box2"
            style="padding: 10px !important; margin: 5 1% !important"
            align="left"
          >
            <h5 style="padding-bottom: 10px; color: green">Step 3:</h5>
            <p>
            <strong>Upload the File:</strong> Locate the "Upload" button positioned below the QR code display. Click this button and select the file you downloaded in the previous step to complete the upload process.
            </p>
            <div class="detail-box" style="padding-top: 10px"></div>
          </div>
          <!-- clossing box  -->
        </div>
      </div>


      <div class="container-fluid">
        <div class="service_container">
          <div class="col-lg-12" align="left" style="margin-left: 50px">
            <p
              style="
                font-size: 20px;
                margin: 0px;
                font-weight: 600;
                color: green;
              "
            >
              FORMS:
            </p>
          </div>
          <!-- first box -->
          <div class="box box2" style="margin: 5px; padding: 10px 10px">
            <h5 style="padding-bottom: 30px">Consultation Logbook</h5>
            <div class="img-box">
              <img
                src="images/qr1.png"
                class="img2"
                alt=""
                style="
                  height: 170px;
                  width: 170px;
                  border-radius: 0px;
                  margin: 30px 0px;
                "
                loading="lazy"
              />
            </div>
            <div class="detail-box" style="padding-top: 10px">
              <button
                type="submit"
                onclick="window.open('forms/Consultation Logbook.docx')"
                class="button-19"
                role="button"
              >
                <i class="fa fa-download" aria-hidden="true"></i> Download
              </button>
              <button
                type="submit"
                onclick="window.open('https://docs.google.com/forms/d/e/1FAIpQLSf8tDu2lAlomTgQYZhStguoYyYYevIEV1B4EE4_ZkFtcb0VEg/viewform')"
                class="button-20"
                role="button"
              >
                <i class="fa fa-upload" aria-hidden="true"></i> Upload
              </button>
            </div>
          </div>
          <!-- clossing box  -->
          <!-- first box -->
          <div class="box box2" style="margin: 5px; padding: 10px 10px">
            <h5 style="padding-bottom: 30px">Application for Graduation</h5>
            <div class="img-box">
              <img
                src="images/qr2.png"
                class="img2"
                alt=""
                style="
                  height: 170px;
                  width: 170px;
                  border-radius: 0px;
                  margin: 30px 0px;
                "
                loading="lazy"
              />
            </div>
            <div class="detail-box" style="padding-top: 10px">
              <button
                type="submit"
                onclick="window.open('forms/form1a.docx')"
                class="button-19"
                role="button"
              >
                <i class="fa fa-download" aria-hidden="true"></i> Download
              </button>
              <button
                type="submit"
                onclick="window.open('https://docs.google.com/forms/d/e/1FAIpQLSdCYHgXqdK4c4iMzWs-qnBt3qei7B439U-m7XnyLlisGr9mww/viewform')"
                class="button-20"
                role="button"
              >
                <i class="fa fa-upload" aria-hidden="true"></i> Upload
              </button>
            </div>
          </div>
          <!-- clossing box  -->

          <!-- first box -->
          <div class="box box2" style="margin: 5px; padding: 10px 10px">
            <h5 style="padding-bottom: 30px">Pre-Enrolment Waiver</h5>
            <div class="img-box">
              <img
                src="images/qr3.png"
                class="img2"
                alt=""
                style="
                  height: 170px;
                  width: 170px;
                  border-radius: 0px;
                  margin: 30px 0px;
                "
                loading="lazy"
              />
            </div>
            <div class="detail-box" style="padding-top: 10px">
              <button
                type="submit"
                onclick="window.open('forms/form1a.docx')"
                class="button-19"
                role="button"
              >
                <i class="fa fa-download" aria-hidden="true"></i> Download
              </button>
              <button
                type="submit"
                onclick="window.open('https://docs.google.com/forms/d/e/1FAIpQLSe3YbiAON_L_cWon8--Wn3hRGUezHEUm6oel1x80uxUX1P9eA/viewform')"
                class="button-20"
                role="button"
              >
                <i class="fa fa-upload" aria-hidden="true"></i> Upload
              </button>
            </div>
          </div>
          <!-- clossing box  -->

          <!-- first box -->
          <div class="box box2" style="margin: 5px; padding: 10px 10px">
            <h5 style="padding-bottom: 30px">Application for Shifting</h5>
            <div class="img-box">
              <img
                src="images/qr4.png"
                class="img2"
                alt=""
                style="
                  height: 170px;
                  width: 170px;
                  border-radius: 0px;
                  margin: 30px 0px;
                "
                loading="lazy"
              />
            </div>
            <div class="detail-box" style="padding-top: 10px">
              <button
                type="submit"
                onclick="window.open('forms/form1a.docx')"
                class="button-19"
                role="button"
              >
                <i class="fa fa-download" aria-hidden="true"></i> Download
              </button>
              <button
                type="submit"
                onclick="window.open('https://docs.google.com/forms/d/e/1FAIpQLSfgvrbg4vPUf7xwnOlM9hSfTtwPLux8iRsVUUShD2fjf9oVhw/viewform')"
                class="button-20"
                role="button"
              >
                <i class="fa fa-upload" aria-hidden="true"></i> Upload
              </button>
            </div>
          </div>
          <!-- clossing box  -->

          <!-- first box -->
          <div class="box box2" style="margin: 5px; padding: 10px 10px">
            <h5 style="padding-bottom: 30px">Special Exam Form</h5>
            <div class="img-box">
              <img
                src="images/qr5.png"
                class="img2"
                alt=""
                style="
                  height: 170px;
                  width: 170px;
                  border-radius: 0px;
                  margin: 30px 0px;
                "
                loading="lazy"
              />
            </div>
            <div class="detail-box" style="padding-top: 10px">
              <button
                type="submit"
                onclick="window.open('forms/form1a.docx')"
                class="button-19"
                role="button"
              >
                <i class="fa fa-download" aria-hidden="true"></i> Download
              </button>
              <button
                type="submit"
                onclick="window.open('https://docs.google.com/forms/d/e/1FAIpQLSeC0Q0KR6W_MI2ctwsm8UTTy705_kZdWBTsNdDPzeANHXNeNg/viewform')"
                class="button-20"
                role="button"
              >
                <i class="fa fa-upload" aria-hidden="true"></i> Upload
              </button>
            </div>
          </div>
          <!-- clossing box  -->

          <!-- first box -->
          <div class="box box2" style="margin: 5px; padding: 10px 10px">
            <h5 style="padding-bottom: 30px">Completion Form</h5>
            <div class="img-box">
              <img
                src="images/qr6.png"
                class="img2"
                alt=""
                style="
                  height: 170px;
                  width: 170px;
                  border-radius: 0px;
                  margin: 30px 0px;
                "
                loading="lazy"
              />
            </div>
            <div class="detail-box" style="padding-top: 10px">
              <button
                type="submit"
                onclick="window.open('forms/form1a.docx')"
                class="button-19"
                role="button"
              >
                <i class="fa fa-download" aria-hidden="true"></i> Download
              </button>
              <button
                type="submit"
                onclick="window.open('https://docs.google.com/forms/d/e/1FAIpQLSeLdKU4BYpV7MTygRFTWEJcws8Klf3BHLARXflq_7vV-Ui_Wg/viewform')"
                class="button-20"
                role="button"
              >
                <i class="fa fa-upload" aria-hidden="true"></i> Upload
              </button>
            </div>
          </div>
          <!-- clossing box  -->

          <!-- first box -->
          <div class="box box2" style="margin: 5px; padding: 10px 10px">
            <h5 style="padding-bottom: 30px">Change of Grade</h5>
            <div class="img-box">
              <img
                src="images/qr7.png"
                class="img2"
                alt=""
                style="
                  height: 170px;
                  width: 170px;
                  border-radius: 0px;
                  margin: 30px 0px;
                "
                loading="lazy"
              />
            </div>
            <div class="detail-box" style="padding-top: 10px">
              <button
                type="submit"
                onclick="window.open('forms/form1a.docx')"
                class="button-19"
                role="button"
              >
                <i class="fa fa-download" aria-hidden="true"></i> Download
              </button>
              <button
                type="submit"
                onclick="window.open('https://docs.google.com/forms/d/e/1FAIpQLScXL1Cbl7T_V6YZMcjfQDqo1VFHKDbRSNVO7egYvJgE3OeoHA/viewform')"
                class="button-20"
                role="button"
              >
                <i class="fa fa-upload" aria-hidden="true"></i> Upload
              </button>
            </div>
          </div>
          <!-- clossing box  -->

          <!-- first box -->
          <div class="box box2" style="margin: 5px; padding: 10px 10px">
            <h5 style="padding-bottom: 30px">Adding and Dropping Form</h5>
            <div class="img-box">
              <img
                src="images/qr8.png"
                class="img2"
                alt=""
                style="
                  height: 170px;
                  width: 170px;
                  border-radius: 0px;
                  margin: 30px 0px;
                "
                loading="lazy"
              />
            </div>
            <div class="detail-box" style="padding-top: 10px">
              <button
                type="submit"
                onclick="window.open('forms/form1a.docx')"
                class="button-19"
                role="button"
              >
                <i class="fa fa-download" aria-hidden="true"></i> Download
              </button>
              <button
                type="submit"
                onclick="window.open('https://docs.google.com/forms/d/e/1FAIpQLSfVfriMjNP3gXiuBcBvE4Rr7mIiqk2StpavMbTNrrmTujZcSQ/viewform')"
                class="button-20"
                role="button"
              >
                <i class="fa fa-upload" aria-hidden="true"></i> Upload
              </button>
            </div>
          </div>
          <!-- clossing box  -->
        </div>
      </div>
    </section>
    <!-- end service section -->

    <!-- about section -->

    <!-- end about section -->

    <!-- blog section -->

    <!-- end blog section -->

    <!-- info section -->

    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/bootstrap.js"></script>
  </body>
</html>
