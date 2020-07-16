<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>sbeec</title>
    <!-- main css -->
    <link rel="stylesheet" href="assets/css/main.css" />
    <!-- bootstrap css -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <!-- font awsome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" />
    <!-- google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <!-- animate css -->
    <link rel="stylesheet" href="assets/css/animate.css">
  </head>
  <body>
    <!-- Header -->
    <header>
        <nav class="navbar navbar-expand-lg my-nav">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php"
              ><div class="logo">
                <img class="img-fluid wow fadeIn" src="assets/img/logo.png" alt="#" /></div
            ></a>
            <button
              class="navbar-toggler"
              type="button"
              data-toggle="collapse"
              data-target="#navbarTogglerDemo02"
              aria-controls="navbarTogglerDemo02"
              aria-expanded="false"
              aria-label="Toggle navigation"
            >
            <i class="fas fa-bars"></i>
            </button>

            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
              <ul class="navbar-nav m-auto pt-2 pb-2">
                <li class="nav-item">
                  <a class="nav-link" href="index.php"
                    >Home <span class="sr-only">(current)</span></a
                  >
                </li>
                <li class="nav-item dropdown">
                  <a
                    class="nav-link"
                    href="about-us.php"
                  >
                    about us
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="products.php">products</a>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="services.php">services</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="segments.php">segments</a>
                </li>
                <li class="nav-item active">
                  <a class="nav-link" href="contact-us.php">contact us</a>
                </li>
              </ul>
              <div class="form-inline partner my-2 my-lg-0">
              <ul class="partner">
                  <li>
                    <div class="partner__logo">
                      <a href="http://103.31.81.50:8090/ydweb_sb/">
                        <img src="assets/img/partner-1.png" alt="#" />
                      </a>
                    </div>
                  </li>
                  <li>
                    <div class="partner__logo">
                      <a href="https://ems.entrack-sb.com/">
                        <img src="assets/img/partner-2.1.png" alt="#" />
                      </a>
                    </div>
                  </li>
                </ul>
                <!-- <div class="partner__logo">
                  <img class="img-fluid" src="assets/img/partner-1.png" alt="#" />
                </div>
                <div class="partner__logo">
                  <img class="img-fluid" src="assets/img/partner-2.png" alt="#" />
                </div> -->
              </div>
            </div>
        </div>
      </nav>
      </header>
    <section class="banner__inner banner__inner--contact-us">
      <div class="overlay">
          <h1 class="banner__title">
              <span class="wow fadeIn" data-wow-delay=".1s">c</span><span class="wow fadeIn" data-wow-delay=".2s">o</span><span class="wow fadeIn" data-wow-delay=".3s">n</span><span class="wow fadeIn" data-wow-delay=".4s">t</span><span class="wow fadeIn" data-wow-delay=".5s">a</span><span class="wow fadeIn" data-wow-delay=".6s">c</span><span class="wow fadeIn" data-wow-delay=".7s">t</span><span class="wow fadeIn" data-wow-delay=".7s"> u</span><span class="wow fadeIn" data-wow-delay=".7s">s</span>
            </h1>
      </div>
    </section>
    <section class="service pt-5 pb-5">
        <div class="container">
          <div class="row">
            <div class="col-md-6 wow fadeInRight">
              <div class="">
                <h4 class="mb-2">
                    Registered Address:
                </h4>
                <p class="mb-2">
                    SB Electronics Engineering and Control (Pvt.) Ltd.
                </p>
                <p class="mb-3"> Office S-1, 2nd Floor
                    West End Plaza
                    72 The Mall Road
                    Shahrah-e-Quaid-e-Azam
                    Lahore, Pakistan</p>
                    <h4 class="mb-2">
                        Head Office:
                    </h4>
                    <p class="mb-2">
                        200 Ferozepur Road
                        Icchra,
                        Lahore, Pakistan
                    </p>
                    <h4 class="mb-2">
                      Phone No:
                    </h4>
                    <p class="mb-1">
                        +92-42-37530389
                    </p>
                    <p>
                        +92-42-37588198
                    </p>
              </div>
            </div>
            <div class="col-md-6 wow fadeInLeft">
              <h4>To apply for Jobs or any Inquiries, please fill the form below</h4>
                 <?php
$email_to = "info@entrack-sb.com";
$email_subject = "Your email subject line";

if (isset($_POST['submit'])) {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $subject = $_POST['subject'];
    $company = $_POST['company'];
    $textarea = $_POST['textarea'];
    $submit = $_POST['submit'];
    $to = 'info@entrack-sb.com';
    $subject = 'Customer Detail';
    $message .= "Please find the below listed details. \n\n";
    $message .= "FullName: $name\n";
    $message .= "Email: $email\n";
    $message .= "Telephone: $phone\n";
    $message .= "Company: $company\n";
    $message .= "Comment: $textarea\n";
    $from = 'info@entrack-sb.com';

    // Sending email

    if (mail($to, $subject, $message, header)) {
        echo 'Your mail has been sent successfully.';
    } else {
        echo 'Unable to send email. Please try again.';
    }
}
?>
                 <form method="post" action="#.">
                   <div class="container">
                      <div class="row">
                        <div class="col-6 mb-2 px-1">
                          <input type="text" name="name" class="form-control" placeholder="Name">
                        </div>
                        <div class="col-6 px-1">
                          <input type="email" name="email" class="form-control" placeholder="Email">
                        </div>
                        <div class="col-6 mb-2 px-1">
                            <input type="text" name="phone" class="form-control" placeholder="phone">
                        </div>
                        <div class="col-6 mb-2 px-1">
                          <input type="text" name="company" class="form-control" placeholder="company">
                        </div>
                        <div class="col-12 mb-2 px-1">
                          <input type="text" name="subject" class="form-control" placeholder="Subject">
                        </div>
                        <div class="col-12 px-1">
                          <textarea class="form-control" name="textarea" id="user-message" rows="3" placeholder="Your Message..."></textarea>
                        </div>
                        <div class="col-12 px-1 d-flex justify-content-center align-items-center">
                          <button type="submit" name="submit" class="block__button block__button--border submit">send</button>
                        </div>
                      </div>
                      </div>
                    </form>
            </div>
          </div>
        </div>
    </section>

    </section>
    <!-- <section id="clients-section" class="clients">
      <div class="container">
        <ul>
          <li class="wow fadeIn"><div> <img src="assets/img/client-1.png" alt=""></div></li>
          <li class="wow fadeIn" data-wow-delay=".1s"><div> <img src="assets/img/client-2.png" alt=""></div></li>
          <li class="wow fadeIn" data-wow-delay=".2s"><div> <img src="assets/img/client-3.png" alt=""></div></li>
          <li class="wow fadeIn" data-wow-delay=".3s"><div> <img src="assets/img/client-4.png" alt=""></div></li>
          <li class="wow fadeIn" data-wow-delay=".4s"><div> <img src="assets/img/client-5.png" alt=""></div></li>
          <li class="wow fadeIn" data-wow-delay=".5s"><div> <img src="assets/img/client-6.png" alt=""></div></li>
          <li class="wow fadeIn" data-wow-delay=".6s"><div> <img src="assets/img/client-7.png" alt=""></div></li>
          <li class="wow fadeIn" data-wow-delay=".7s"><div> <img src="assets/img/client-8.png" alt=""></div></li>
        </ul>
      </div>
    </section> -->
    <footer id="footer-section" class="footer " data-wow-delay="1s">
        <div class="footer__main">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-3 d-flex align-items-center wow fadeInUp" ><img class="img-fluid" src="assets/img/footer-logo-2.png" alt="#"></div>
            <div class="col-md-9 wow fadeInUp">
              <div class="row">
                <div class="block portal col-12 col-md-3 col-lg-3">
                    <h4 class="block__title">portals login</h4>
                    <ul>
                    <li><a class="block__button" href="http://103.31.81.50:8090/ydweb_sb" target="blank_">Entrack Portal</a></li>
                    <li><a class="block__button" href="http://ems.entrack-sb.com/" target="blank_">Entrack EMS Portal</a></li>
                  </ul>
                </div>
                <div class="block links col-12 col-md-3 col-lg-3">
                      <h4 class="block__title">helpful links</h4>
                      <ul>
                        <li><a href="index.php">home</a></li>
                        <li><a href="about-us.php">about us</a></li>
                        <li><a href="contact-us.php">contact us</a></li>
                        <li><a href="contact-us.php">careers</a></li>
                        <!-- <li><a href="#">news</a></li> -->
                      </ul>
                </div>
                <div class="block news col-12 col-md-4 col-lg-4">
                    <h4 class="block__title">Get In Touch</h4>
                    <!-- <ul>
                      <li>
                        <div class="news__thumbnail">
                        <img src="assets/img/news-img-1.png" alt="#">
                        </div>
                        <div class="news__detail">
                        <h4>news title here</h4>
                        <p>It is a long established fact that a reader will be. </p>
                      </div>
                      </li>
                      <li>
                          <div class="news__thumbnail">
                          <img src="assets/img/news-img-1.png" alt="#">
                          </div>
                          <div class="news__detail">
                          <h4>news title here</h4>
                          <p>It is a long established fact that a reader will be. </p>
                        </div>
                        </li>
                    </ul> -->
                     <?php
$email_to = "info@entrack-sb.com";
$email_subject = "Your email subject line";

if (isset($_POST['submit'])) {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $company = $_POST['company'];
    $textarea = $_POST['textarea'];
    $submit = $_POST['submit'];
    $to = 'info@entrack-sb.com';
    $subject = 'Customer Detail';
    $message .= "Please find the below listed details. \n\n";
    $message .= "FullName: $name\n";
    $message .= "Email: $email\n";
    $message .= "Telephone: $phone\n";
    $message .= "Company: $company\n";
    $message .= "Comment: $textarea\n";
    $from = 'info@entrack-sb.com';

    // Sending email

    if (mail($to, $subject, $message, header)) {
        echo 'Your mail has been sent successfully.';
    } else {
        echo 'Unable to send email. Please try again.';
    }
}
?>
                    <form method="post" action="#.">
                      <div class="container">
                      <div class="row">
                        <div class="col-6 mb-2 px-1">
                          <input type="text" name="name" class="form-control" placeholder="Name">
                        </div>
                        <div class="col-6 px-1">
                          <input type="email" name="email" class="form-control" placeholder="Email">
                        </div>
                        <div class="col-6 mb-2 px-1">
                            <input type="text" name="phone" class="form-control" placeholder="Phone">
                        </div>
                        <div class="col-6 px-1">
                          <input type="text" name="company" class="form-control" placeholder="Company">
                        </div>
                        <div class="col-12 px-1">
                          <textarea class="form-control" name="textarea" id="user-message" rows="3" placeholder="Your Message..."></textarea>
                        </div>
                        <div class="col-12 px-1 d-flex justify-content-center align-items-center">
                          <button type="submit" name="submit" class="block__button submit">send</button>
                        </div>
                      </div>
                      </div>
                    </form>
             </div>
              </div>
            </div>
          </div>
        </div>
      </div>
        <div class="footer__bottom">
           <div class="text-center">
             <p>©2019 ALL RIGHTS RESERVED BY SBEEC</p>
           </div>
        </div>
      </footer>
    <script src="assets/js/jquery-3.4.1.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/wow.js"></script>
    <script src="assets/js/custom.js"></script>
    <script>
    new WOW().init();
    </script>
  </body>
</html>
