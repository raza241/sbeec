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
                <img class="img-fluid" src="assets/img/logo.png" alt="#" /></div
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
                <li class="nav-item active">
                  <a class="nav-link" href="products.php">products</a>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="services.php">services</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="segments.php">segments</a>
                </li>
                <li class="nav-item">
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
    <section class="banner__inner">
      <h1 class="banner__title">
        <span class="wow fadeIn" data-wow-delay=".1s">P</span><span class="wow fadeIn" data-wow-delay=".2s">r</span><span class="wow fadeIn" data-wow-delay=".3s">o</span><span class="wow fadeIn" data-wow-delay=".4s">d</span><span class="wow fadeIn" data-wow-delay=".5s">u</span><span class="wow fadeIn" data-wow-delay=".6s">c</span><span class="wow fadeIn" data-wow-delay=".7s">t</span><span class="wow fadeIn" data-wow-delay=".7s">s</span>
      </h1>
    </section>
    <section class="products pt-5 pb-5">
      <div class="container">
        <div class="row desktop-tab">
          <div class="col-md-4">
              <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active" data-toggle="tab" href="#home" role="tab" aria-controls="home">
                    <div class="tab-name">
                      <img class="img show-img " src="assets/img/tab-logo-1.png" alt="#" />
                      <img class="img active-img" src="assets/img/2 i.png" alt="#" />
                      <h2>entrack</h2>
                    </div>
                    <div class="tab-arrow">
                      <i class="fas fa-angle-right"></i>
                    </div>
                  </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#profile" role="tab" aria-controls="profile">
                        <div class="tab-name">
                          <img class="img show-img" src="assets/img/tab-logo-2.png" alt="#" />
                          <img class="img active-img" src="assets/img/1 icon.png" alt="#" />
                          <h2>Smart Meters</h2>
                        </div>
                        <div class="tab-arrow">
                          <i class="fas fa-angle-right"></i>
                        </div>
                      </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#messages" role="tab" aria-controls="messages">
                        <div class="tab-name">
                          <img class="img show-img" src="assets/img/4 i.png" alt="#" />
                          <img class="img active-img" src="assets/img/tab-logo-3.png" alt="#" />
                          <h2>Prepayment Meters</h2>
                        </div>
                        <div class="tab-arrow">
                          <i class="fas fa-angle-right"></i>
                        </div>
                      </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#settings" role="tab" aria-controls="settings">
                        <div class="tab-name">
                          <img class="img show-img" src="assets/img/tab-logo-4.png" alt="#" />
                          <img class="img active-img" src="assets/img/3i.png" alt="#" />
                          <h2>Water Metering</h2>
                        </div>
                        <div class="tab-arrow">
                          <i class="fas fa-angle-right"></i>
                        </div>
                      </a>
                </li>
              </ul>
          </div>
          <div class="col-md-8">
            <div class="tab-content">
              <div class="tab-pane active" id="home" role="tabpanel">
                <div class="product-detail">
                  <div class="product-image">
                    <div id="demo" class="carousel slide" data-ride="carousel">
                        <!-- The slideshow -->
                        <div class="carousel-inner">
                          <div class="carousel-item active">
                            <img class="img" src="assets/img/entrack-1.png" alt="#" />
                          </div>
                          <div class="carousel-item">
                            <img class="img" src="assets/img/entrack-2.png" alt="#" />
                          </div>
                          <div class="carousel-item">
                            <img class="img" src="assets/img/entrack-3.png" alt="#" />
                          </div>
                        </div>

                        <!-- Left and right controls -->
                        <a class="carousel-control-prev" href="#demo" data-slide="prev">
                          <i class="fas fa-arrow-alt-circle-left"></i>
                        </a>
                        <a class="carousel-control-next" href="#demo" data-slide="next">
                          <i class="fas fa-arrow-alt-circle-right"></i>
                        </a>

                      </div>
                  </div>
                  <div class="product-discription">
                    <h4>Entrack</h4>
                    <p>
                        Entrack is a Web Portal Energy IOT Solution focused on data to provide Insights to business on their consumption and make sure correct billing and cost savings through Energy Management. We use state of the art cloud services to back up all our customer data in a safe and secure way. Data is retrieved from Smart Meters through GPRS and sorted by the Entarck Portal in real time. Based on this data user can create hourly, daily, weekly and monthly reports based on each customer’s requirements.
                    </p>
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="profile" role="tabpanel">
                  <div class="product-detail">
                      <div class="product-image">
                      <div id="carouselExampleControls-1" class="carousel slide" data-ride="carousel">
                          <div class="carousel-inner">
                            <div class="carousel-item active">
                              <img class="img" src="assets/img/smartmeters-1.JPG" alt="#">
                            </div>
                            <div class="carousel-item">
                              <img class="img" src="assets/img/smartmeters-2.jpg" alt="#">
                            </div>
                            <div class="carousel-item">
                              <img class="img" src="assets/img/smartmeters-3.jpg" alt="#">
                            </div>
                          </div>
                          <a class="carousel-control-prev" href="#carouselExampleControls-1" role="button" data-slide="prev">
                            <i class="fas fa-arrow-alt-circle-left"></i>
                          </a>
                          <a class="carousel-control-next" href="#carouselExampleControls-1" role="button" data-slide="next">
                            <i class="fas fa-arrow-alt-circle-right"></i>
                          </a>
                        </div>
                      </div>
                      <div class="product-discription">
                        <h4>Smart Meters</h4>
                        <p>
                            PSQCA and PTA Approved GPRS Smart Meters & Allied Equipment
                        </p>
                        <ul class="row">
                          <li class="col-6"><span>1. Single Phase</span>
                            <ul>
                              <li>GPRS</li>
                              <li>RS485</li>
                            </ul>
                          </li>
                          <li class="col-6"><span>2. Three Phase Whole Current (WC)</span>
                            <ul>
                                <li>GPRS</li>
                                <li>RS485</li>
                            </ul>
                          </li>
                          <li class="col-6"><span>3. Three Phase LT</span>
                              <ul>
                                  <li>GPRS</li>
                                  <li>RS485</li>
                              </ul>
                          </li>
                          <li class="col-6"><span>4. Three Phase CTt</span>
                              <ul>
                                  <li>GPRS</li>
                                  <li>RS485</li>
                              </ul>
                          </li>
                          <li class="col-6"><span>5. Three Phase HT</span>
                              <ul>
                                  <li>GPRS</li>
                                  <li>RS485</li>
                              </ul>
                          </li>
                          <li class="col-6"><span>6. Data Concentrator</span></li>
                          <li class="col-6"><span>7. Chint Current Transformers (CTs)</span></li>
                        </ul>
                        <!-- <p class="bottom-text">We also offer STS Certification, STS Billing System consultancy and training</p> -->
                      </div>
                    </div>
              </div>
              <div class="tab-pane" id="messages" role="tabpanel">
                  <div class="product-detail">
                      <div class="product-image">
                        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                          <div class="carousel-inner">
                            <div class="carousel-item active">
                              <img class="img" src="assets/img/prepayment-1.png" alt="#">
                            </div>
                            <div class="carousel-item">
                              <img class="img" src="assets/img/prepayment-2.JPG" alt="#">
                            </div>
                          </div>
                          <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                            <i class="fas fa-arrow-alt-circle-left"></i>
                          </a>
                          <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                            <i class="fas fa-arrow-alt-circle-right"></i>
                          </a>
                        </div>
                      </div>
                      <div class="product-discription">
                        <h4>Prepayment Meters</h4>
                        <p>
                            Prepayment Meters being offered are STS Prepaid Meters with STS Certification. STS (South African Standard) is the most secure token based Prepayment system in the world and is the most accepted. We provide a complete turnkey solution to our customer including Meters, STS System Log In, Configuration and Training on Operation.
                        </p>
                        <ul>
                          <li><span>The Meters being offered are:</span>
                            <ul>
                              <li>Single Phase DIN Rail</li>
                              <li>Single Phase Split Body (with separate In House Display)</li>
                              <li>Three Phase/li>
                              <li>Three Phase Split Body  (with separate In House Display)</li>
                            </ul>
                          </li>
                        </ul>

                        <p class="bottom-text">We also offer STS Certification, STS Billing System consultancy and training</p>
                      </div>
                    </div>
              </div>
              <div class="tab-pane" id="settings" role="tabpanel">
                  <div class="product-detail">
                      <div class="product-image">
                        <div id="carouselExampleControls-2" class="carousel slide" data-ride="carousel">
                          <div class="carousel-inner">
                            <div class="carousel-item active">
                              <img class="img" src="assets/img/watermeters-1.png" alt="#">
                            </div>
                            <div class="carousel-item">
                              <img class="img" src="assets/img/watermeters-2.png" alt="#">
                            </div>
                          </div>
                          <a class="carousel-control-prev" href="#carouselExampleControls-2" role="button" data-slide="prev">
                            <i class="fas fa-arrow-alt-circle-left"></i>
                          </a>
                          <a class="carousel-control-next" href="#carouselExampleControls-2" role="button" data-slide="next">
                            <i class="fas fa-arrow-alt-circle-right"></i>
                          </a>
                        </div>
                      </div>
                      <div class="product-discription water-metering">
                        <h4 class="mb-2">Water Metering</h4>
                          <ul>
                          <li><span> Tariff Setting</span>
                            <p>Due to scarcity of water in Pakistan, Water Consumption Billing awareness has increased. Therefore we offer services to perform survey and set tariff as per consumptions and WASA tariff regulations
                              </p>
                          </li>
                          <li><span> Meters</span>
                            <p>SBEEC Water Meters being offered are of the highest quality meeting all international quality testing standards. The following types of Meters are offered</p>
                          <ul>
                            <li>Electromechanical with Plastic Body </li>
                            <li> Ultrasonic</li>
                            <li> Prepayment</li>
                            <li> AMI</li>
                            <li> Brass strainers for pipe fittings</li>
                            <li> Three Phase</li>
                            <li> Three Phase Split Body  (with separate In House Display)</li>
                          </ul>
                          </li>
                          <!-- <li><span> Three Phase</span></li>
                          <li><span> Three Phase Split Body  (with separate In House Display)</span></li> -->
                        </ul>
                        <p class="bottom-text">We offer complete Turnkey services of Meter Installation, Billing and Reporting</p>
                      </div>
                  </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row mobile-tab">
          <div class="col-12">
            <div id="accordion" class="nav-tabs">
              <div class="card">
                <div class="card-header" id="headingOne">
                  <h5 class="mb-0">
                    <button class="btn nav-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                      <div class="tab-name">
                        <img class="img show-img " src="assets/img/tab-logo-1.png" alt="#" />
                        <img class="img active-img" src="assets/img/2 i.png" alt="#" />
                        <h2>entrack</h2>
                      </div>
                      <div class="tab-arrow">
                        <i class="fas fa-angle-right"></i>
                      </div>
                    </button>
                  </h5>
                </div>

                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                  <div class="card-body">
                  <div class="product-detail">
                  <div class="product-image">
                    <div id="demo_1" class="carousel slide" data-ride="carousel">
                        <!-- The slideshow -->
                        <div class="carousel-inner">
                          <div class="carousel-item active">
                            <img class="img" src="assets/img/entrack-1.png" alt="#" />
                          </div>
                          <div class="carousel-item">
                            <img class="img" src="assets/img/entrack-2.png" alt="#" />
                          </div>
                          <div class="carousel-item">
                            <img class="img" src="assets/img/entrack-3.png" alt="#" />
                          </div>
                        </div>

                        <!-- Left and right controls -->
                        <a class="carousel-control-prev" href="#demo_1" data-slide="prev">
                          <i class="fas fa-arrow-alt-circle-left"></i>
                        </a>
                        <a class="carousel-control-next" href="#demo_1" data-slide="next">
                          <i class="fas fa-arrow-alt-circle-right"></i>
                        </a>

                      </div>
                  </div>
                  <div class="product-discription">
                    <h4>Entrack</h4>
                    <p>
                        Entrack is a Web Portal Energy IOT Solution focused on data to provide Insights to business on their consumption and make sure correct billing and cost savings through Energy Management. We use state of the art cloud services to back up all our customer data in a safe and secure way. Data is retrieved from Smart Meters through GPRS and sorted by the Entarck Portal in real time. Based on this data user can create hourly, daily, weekly and monthly reports based on each customer’s requirements.
                    </p>
                  </div>
                </div>
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="card-header" id="headingTwo">
                  <h5 class="mb-0">
                    <button class="btn nav-link" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                      <div class="tab-name">
                        <img class="img show-img" src="assets/img/tab-logo-2.png" alt="#" />
                        <img class="img active-img" src="assets/img/1 icon.png" alt="#" />
                        <h2>Smart Meter</h2>
                      </div>
                      <div class="tab-arrow">
                        <i class="fas fa-angle-right"></i>
                      </div>
                    </button>
                  </h5>
                </div>

                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                  <div class="card-body">
                  <div class="product-detail">
                      <div class="product-image">
                      <div id="carouselExampleControls_1" class="carousel slide" data-ride="carousel">
                          <div class="carousel-inner">
                            <div class="carousel-item active">
                              <img class="img" src="assets/img/smartmeters-1.JPG" alt="#">
                            </div>
                            <div class="carousel-item">
                              <img class="img" src="assets/img/smartmeters-2.jpg" alt="#">
                            </div>
                            <div class="carousel-item">
                              <img class="img" src="assets/img/smartmeters-3.jpg" alt="#">
                            </div>
                          </div>
                          <a class="carousel-control-prev" href="#carouselExampleControls_1" role="button" data-slide="prev">
                            <i class="fas fa-arrow-alt-circle-left"></i>
                          </a>
                          <a class="carousel-control-next" href="#carouselExampleControls_1" role="button" data-slide="next">
                            <i class="fas fa-arrow-alt-circle-right"></i>
                          </a>
                        </div>
                      </div>
                      <div class="product-discription">
                        <h4>Smart Meters</h4>
                        <p>
                            PSQCA and PTA Approved GPRS Smart Meters & Allied Equipment
                        </p>
                        <ul class="row">
                          <li class="col-6"><span>1. Single Phase</span>
                            <ul>
                              <li>GPRS</li>
                              <li>RS485</li>
                            </ul>
                          </li>
                          <li class="col-6"><span>2. Three Phase Whole Current (WC)</span>
                            <ul>
                                <li>GPRS</li>
                                <li>RS485</li>
                            </ul>
                          </li>
                          <li class="col-6"><span>3. Three Phase LT</span>
                              <ul>
                                  <li>GPRS</li>
                                  <li>RS485</li>
                              </ul>
                          </li>
                          <li class="col-6"><span>4. Three Phase CT</span>
                              <ul>
                                  <li>GPRS</li>
                                  <li>RS485</li>
                              </ul>
                          </li>
                          <li class="col-6"><span>5. Three Phase HT</span>
                              <ul>
                                  <li>GPRS</li>
                                  <li>RS485</li>
                              </ul>
                          </li>
                          <li class="col-6"><span>6. Data Concentrator</span></li>
                          <li class="col-6"><span>7. Chint Current Transformers (CTs)</span></li>
                        </ul>
                        <!-- <p class="bottom-text">We also offer STS Certification, STS Billing System consultancy and training</p> -->
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="card-header" id="headingThree">
                  <h5 class="mb-0">
                    <button class="btn nav-link" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                      <div class="tab-name">
                        <img class="img show-img" src="assets/img/4 i.png" alt="#" />
                        <img class="img active-img" src="assets/img/tab-logo-3.png" alt="#" />
                        <h2>Prepayment Meters</h2>
                      </div>
                      <div class="tab-arrow">
                        <i class="fas fa-angle-right"></i>
                      </div>
                    </button>
                  </h5>
                </div>

                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                  <div class="card-body">
                  <div class="product-detail">
                      <div class="product-image">
                        <div id="carouselExampleControls_2" class="carousel slide" data-ride="carousel">
                          <div class="carousel-inner">
                            <div class="carousel-item active">
                              <img class="img" src="assets/img/prepayment-1.png" alt="#">
                            </div>
                            <div class="carousel-item">
                              <img class="img" src="assets/img/prepayment-2.JPG" alt="#">
                            </div>
                          </div>
                          <a class="carousel-control-prev" href="#carouselExampleControls_2" role="button" data-slide="prev">
                            <i class="fas fa-arrow-alt-circle-left"></i>
                          </a>
                          <a class="carousel-control-next" href="#carouselExampleControls_2" role="button" data-slide="next">
                            <i class="fas fa-arrow-alt-circle-right"></i>
                          </a>
                        </div>
                      </div>
                      <div class="product-discription">
                        <h4>Prepayment Meters</h4>
                        <p>
                            Prepayment Meters being offered are STS Prepaid Meters with STS Certification. STS (South African Standard) is the most secure token based Prepayment system in the world and is the most accepted. We provide a complete turnkey solution to our customer including Meters, STS System Log In, Configuration and Training on Operation.
                        </p>
                        <ul>
                          <li><span>The Meters being offered are:</span>
                            <ul>
                              <li>Single Phase DIN Rail</li>
                              <li>Single Phase Split Body (with separate In House Display)</li>
                              <li>Three Phase/li>
                              <li>Three Phase Split Body  (with separate In House Display)</li>
                            </ul>
                          </li>
                        </ul>

                        <p class="bottom-text">We also offer STS Certification, STS Billing System consultancy and training</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="card-header" id="headingFour">
                  <h5 class="mb-0">
                    <button class="btn nav-link" data-toggle="collapse" data-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                    <div class="tab-name">
                          <img class="img show-img" src="assets/img/tab-logo-4.png" alt="#" />
                          <img class="img active-img" src="assets/img/3i.png" alt="#" />
                          <h2>Water Metering</h2>
                        </div>
                        <div class="tab-arrow">
                          <i class="fas fa-angle-right"></i>
                        </div>
                    </button>
                  </h5>
                </div>

                <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
                  <div class="card-body">
                  <div class="product-detail">
                      <div class="product-image">
                        <div id="carouselExampleControls_3" class="carousel slide" data-ride="carousel">
                          <div class="carousel-inner">
                            <div class="carousel-item active">
                              <img class="img" src="assets/img/watermeters-1.png" alt="#">
                            </div>
                            <div class="carousel-item">
                              <img class="img" src="assets/img/watermeters-2.png" alt="#">
                            </div>
                          </div>
                          <a class="carousel-control-prev" href="#carouselExampleControls_3" role="button" data-slide="prev">
                            <i class="fas fa-arrow-alt-circle-left"></i>
                          </a>
                          <a class="carousel-control-next" href="#carouselExampleControls_3" role="button" data-slide="next">
                            <i class="fas fa-arrow-alt-circle-right"></i>
                          </a>
                        </div>
                      </div>
                      <div class="product-discription water-metering">
                        <h4 class="mb-2">Water Metering</h4>
                          <ul>
                          <li><span> Tariff Setting</span>
                            <p>Due to scarcity of water in Pakistan, Water Consumption Billing awareness has increased. Therefore we offer services to perform survey and set tariff as per consumptions and WASA tariff regulations
                              </p>
                          </li>
                          <li><span> Meters</span>
                            <p>SBEEC Water Meters being offered are of the highest quality meeting all international quality testing standards. The following types of Meters are offered</p>
                          <ul>
                            <li>Electromechanical with Plastic Body </li>
                            <li> Ultrasonic</li>
                            <li> Prepayment</li>
                            <li> AMI</li>
                            <li> Brass strainers for pipe fittings</li>
                            <li> Three Phase</li>
                            <li> Three Phase Split Body  (with separate In House Display)</li>
                          </ul>
                          </li>
                          <!-- <li><span> Three Phase</span></li>
                          <li><span> Three Phase Split Body  (with separate In House Display)</span></li> -->
                        </ul>
                        <p class="bottom-text">We offer complete Turnkey services of Meter Installation, Billing and Reporting</p>
                      </div>
                  </div>
                  </div>
                </div>
              </div>
            </div>
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
