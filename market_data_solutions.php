<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>MDCS</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css'>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.42/css/uikit.min.css'>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
  <link rel="stylesheet" href="assets/css/style.css">
  <style type="text/css">
    .vertical > .front, .vertical > .back {
      height: 300px;
    }
  </style>
</head>
<body>
<!-- partial:index.partial.html -->
<div class="info-header">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</div>

<?php include 'header.php';?>
<!-- partial -->

<!-- Section 1-->

  <section id="porque-sec" class="uk-section  uk-light">
      <div> 
          <div uk-slider="velocity:1.3; easing: cubic-bezier(.4,0,.2,1)">
              <div class="uk-position-relative">
                  <div class="uk-slider-container uk-light">
                      <ul class="uk-slider-items uk-child-width-1-1">
                          <li class="banner-bg">
                              <div class="uk-container uk-container-small" uk-slider-parallax="opacity: 0,1,0">
                                  <div class="text-center">
                                    <div class="main-title-white">Market Data and Connectivity Solutions </div>
                                    <div class="second-title-white"> 
                                        Low Latency exchange connectivity
                                    </div>

                                    <div class="small-text-white py-4-d px-4"> 
                                         Market data feed handlers are mandatory components of any real time trading system. QXT has invested years of hard work and attention to create technologies to get you data faster and with broader reach and provides a market data solution tailored to your trading business needs.
                                    </div>

                                    <div class="btn-mg" style="visibility: hidden;">
                                      <button class="dark-btn">Get Started</button>
                                      <button class="light-btn">Documentation</button>
                                    </div>
                                  </div>
                              </div>
                          </li>
                          <!-- <li class="banner-bg-2">
                              <div class="uk-container uk-container-small" uk-slider-parallax="opacity: 0,1,0">
                                  <div class="text-center">
                                    <div class="main-title">QXFinLib NET2 </div>
                                    <div class="second-title"> 
                                          Empower your Research, Optimize Back tests,
                                          Master the Markets
                                    </div>

                                    <div class="small-text py-4-d px-4"> 
                                          QXFinLib.NET is the ultimate toolkit for quant developers. Craft sophisticated trading systems with ease on the powerful .NET platform.  
                                    </div>

                                    <div class="btn-mg">
                                      <button class="dark-btn">Get Started</button>
                                      <button class="light-btn">Documentation</button>
                                    </div>
                                  </div>
                              </div>
                          </li>
                          <li class="banner-bg-3">
                              <div class="uk-container uk-container-small" uk-slider-parallax="opacity: 0,1,0">
                                  <div class="text-center">
                                    <div class="main-title">QXFinLib .NET3 </div>
                                    <div class="second-title"> 
                                          Empower your Research, Optimize Back tests,
                                          Master the Markets
                                    </div>

                                    <div class="small-text py-4-d px-4"> 
                                          QXFinLib.NET is the ultimate toolkit for quant developers. Craft sophisticated trading systems with ease on the powerful .NET platform.  
                                    </div>

                                    <div class="btn-mg">
                                      <button class="dark-btn">Get Started</button>
                                      <button class="light-btn">Documentation</button>
                                    </div>
                                  </div>
                              </div>
                          </li> -->
                      </ul>
                      <a class="uk-position-center-left uk-position-medium" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                      <a class="uk-position-center-right uk-position-medium" href="#" uk-slidenav-next uk-slider-item="next"></a>
                  </div>
              </div>
              <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin-medium-top">
                  <li></li>
              </ul>
          </div>
      </div>
  </section>

  <section class="container py-6">
      <div class="row">
        <div class="col-12 col-md-6 col-lg-6">
          <p class="sec-title">
            Our Market <span class="span-title"> Data   <br> Solutions</span>     
          </p>
        </div>

        <div class="col-12 col-md-6 col-lg-6" style="padding-top: 10px;">
          <p class="para-text">
            Gain a competitive edge in the financial markets with access to our comprehensive suite of services. Since our inception, we have been building and supporting software systems designed to manage financial markets, specializing in the integration of exchange market data with trading systems.
          </p>
        </div>
      </div>  
      <br><br><br>
      <div class="row">
        <div class="col-12 col-md-7 col-lg-7">
          <div class="accordion accordion-flush" id="accordionFlushExample">
            <div class="accordion-item">
              <h2 class="accordion-header" id="flush-headingOne">
                <button class="accordion-button collapsed para-text" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="true" aria-controls="flush-collapseOne" style="border-bottom: 1px solid #ddd;">
                  Exchange Connectivity
                </button>
              </h2>
              <div id="flush-collapseOne" class="accordion-collapse collapse show" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                  <div class="row py-3"> 
                    <div class="col-lg-12 col-md-12 col-12">
                      <br><br>
                      <div class="para-text">
                        Our solution captures direct exchange feeds and processes them through software for decoding, normalization, enrichment, and standardization. We then store and disseminate market information for analysis and application. With our market data solutions, financial institutions can establish a robust market data infrastructure for their clients in just a few weeks.
                      </div><br> 
                    </div>
                  </div>  
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="flush-headingTwo">
                <button class="accordion-button collapsed para-text" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                  Market Data Dissemination Platform and APIs
                </button>
              </h2>
              <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                  <div class="row py-3"> 
                    <div class="col-lg-12 col-md-12 col-12">
                      <br><br>
                      <div class="para-text">
                       The QX.MDP is a scalable market data dissemination solution that streams real-time market data into brokers' client trading and monitoring apps, boosting the performance of automated trading algorithms. QXT provides a variety of programming language APIs and access solutions, including Java, C/C++, .NET, JavaScript, WebSocket, REST, Python, and FIX, ensuring easy data access for analysis and integration into various applications.
                      </div><br> 
                    </div>
                  </div> 
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="flush-headingThree">
                <button class="accordion-button collapsed para-text" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                  QXT Engineering Services
                </button>
              </h2>
              <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                   <div class="row py-3"> 
                    <div class="col-lg-12 col-md-12 col-12">
                      <br><br>
                      <div class="para-text">
                       We collaborate with our clients on their transformation journeys, delivering the solutions they need to thrive in today’s competitive financial markets. Our services include architectural design, solution implementation, and operational support, empowering clients to leverage technology for high-frequency trading and quantitative trading.
                      </div><br> 
                    </div>
                  </div> 
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-12 col-md-5 col-lg-5">
          <img class="w-100" src="assets/img/mscs.png">
        </div>
      </div>

      <!-- <div class="d-flex justify-content-between mob-col pt-5">
        <div class="border w-33 hover-box">
          <div class="img-icon">
              <img src="assets/img/algorithmic.svg">
            </div>
          <div class="vertical"> 
             
            <section class="front"> 
              
              <div class="d-flex filp-front-title">
                <div class="w-75 text">
                  Exchange Connectivity
                </div>

                <div class="w-25"> 
                  <svg style="color: #595959;" xmlns="http://www.w3.org/2000/svg" width="2em" height="2em" viewBox="0 0 24 24">
                    <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.6" d="M4 12h16m0 0l-6-6m6 6l-6 6" />
                  </svg>
                </div>
            </section>

             
            <section class="back"> 
              <div class="d-flex filp-front-title">
                <div class="w-85 gray flip-text ">
                  Our solution captures direct exchange feeds and processes them through software for decoding, normalization, enrichment, and standardization. We then store and disseminate market information for analysis and application. 
                  With our market data solutions, financial institutions can establish a robust market data infrastructure for their clients in just a few weeks. 
                </div> 
              </div>
            </section>
          </div>
        </div>
        <div class="border w-33 hover-box">
          <div class="img-icon">
              <img src="assets/img/fix.svg">
            </div>
          <div class="vertical"> 
             
            <section class="front"> 
              
              <div class="d-flex filp-front-title">
                <div class="w-75 text">
                  Market Data Dissemination Platform and APIs
                </div>

                <div class="w-25"> 
                  <svg style="color: #595959;" xmlns="http://www.w3.org/2000/svg" width="2em" height="2em" viewBox="0 0 24 24">
                    <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.6" d="M4 12h16m0 0l-6-6m6 6l-6 6" />
                  </svg>
                </div>
              </div>
            </section>

             
            <section class="back"> 
              <div class="d-flex filp-front-title">
                <div class="w-85 gray flip-text ">
                  The QX.MDP is a scalable market data dissemination solution that streams real-time market data into brokers' client trading and monitoring apps, boosting the performance of automated trading algorithms. 
                  QXT provides a variety of programming language APIs and access solutions, including Java, C/C++, .NET, JavaScript, WebSocket, REST, Python, and FIX, ensuring easy data access for analysis and integration into various applications.  

                </div> 
              </div>
            </section>
          </div>
        </div>
        <div class="border w-33 hover-box">
          <div class="img-icon">
              <img src="assets/img/exchange.svg">
            </div>
          <div class="vertical"> 
             
            <section class="front"> 
              
              <div class="d-flex filp-front-title">
                <div class="w-75 text">
                  QXT Engineering Services
                </div>

                <div class="w-25"> 
                  <svg style="color: #595959;" xmlns="http://www.w3.org/2000/svg" width="2em" height="2em" viewBox="0 0 24 24">
                    <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.6" d="M4 12h16m0 0l-6-6m6 6l-6 6" />
                  </svg>
                </div>
              </div>
            </section>

             
            <section class="back"> 
              <div class="d-flex filp-front-title">
                <div class="w-85 gray flip-text ">
                  We collaborate with our clients on their transformation journeys, delivering the solutions they need to thrive in today’s competitive financial markets. Our services include architectural design, solution implementation, and operational support, empowering clients to leverage technology for high-frequency trading and quantitative trading.
                </div> 
              </div>
            </section>
          </div>
        </div>
      </div>  -->
  </section> 


  <section class="container py-6">    
    <div class="text-center">
      <p class="sec-title">
           Exchange <span class="span-title">Connectivity</span> Solution
      </p>

      <p class="para-text">
          Our software is designed from the ground up to be extremely flexible and fully customizable, whilst at the same time providing state of the art performance. We have options to provide a source code of already developed exchange adapter for both market data and interactive components across most Indian exchange in C++ or C#.
      </p> 
    </div>  
    <div class="row pt-5">
      <div class="col-12 col-md-4 col-lg-4">
        <div class="border rounded-4 py-4 px-5">
          <div class="small-title-dark">
              NSE (TBT, NNF Specialization)
          </div>
          <div class="para-text mt-5">
            The National Stock Exchange (NSE) is global leading exchange based in Mumbai, India and is most diverse equity and derivative marketplace. NSE connectivity is our core specialization for both market data and trading interface. We have delivered many connectivity solutions across NSE TBT, NNF market and trading interface. Institution and prop desk’s can leverage our experience to build and integrate the low latency NSE exchange connectivity in their trading infrastructure.
          </div>
          <ul class="para-text ps-5 pt-5" style="list-style-type: number;">
            <li>
              Technology solution to provides TBT level-III data to retail
            </li>
            <li>
              Technology to disseminate Level-I, Level-II market data over API model
            </li>
            <li>
              Technology to integrate TBT data order book to HFT platform
            </li>
          </ul>

          <div class="border-line"></div>

          <div class="d-flex mt-5">
              <div class="w-75 text-box-bottom">
                View documentation
              </div>

              <div class="w-25"> 
                <svg style="color: #595959;" xmlns="http://www.w3.org/2000/svg" width="2em" height="2em" viewBox="0 0 24 24">
                  <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.6" d="M4 12h16m0 0l-6-6m6 6l-6 6"></path>
                </svg>
              </div>
          </div>

        </div>
      </div>

      <div class="col-12 col-md-4 col-lg-4">
        <div class="border rounded-4 py-4 px-5">
          <div class="small-title-dark">
              BSE <br> &nbsp
          </div>
          <div class="para-text mt-5">
            The Bombay Stock Exchange (BSE) is India's oldest stock exchange, established in 1875, and is one of the largest exchanges in the world by market capitalization. 
          </div>

          <div class="para-text mt-5">
            QXT is specialized in BSE exchange technologies for both market data and Trading interface. We help Institutions to provide an adapters of BSE EOBI, MDI and ETI interfaces.
          </div> <br class="mob"> <br class="mob"><br class="mob"><br class="mob"><br class="mob">

          <ul class="para-text ps-5 pt-5" style="list-style-type: number; visibility: hidden;">
            <li>
              Technology solution to provides TBT level-III data to retail
            </li>
            <li>
              Technology to disseminate Level-I, Level-II market data over API model
            </li>
            <li>
              Technology to integrate TBT data order book to HFT platform
            </li>
          </ul>

          <div class="border-line"></div>

          <div class="d-flex mt-5">
              <div class="w-75 text-box-bottom">
                View documentation
              </div>

              <div class="w-25"> 
                <svg style="color: #595959;" xmlns="http://www.w3.org/2000/svg" width="2em" height="2em" viewBox="0 0 24 24">
                  <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.6" d="M4 12h16m0 0l-6-6m6 6l-6 6"></path>
                </svg>
              </div>
          </div>

        </div>
      </div>

      <div class="col-12 col-md-4 col-lg-4">
        <div class="border rounded-4 py-4 px-5">
          <div class="small-title-dark">
              MCX <br> &nbsp
          </div>
          <div class="para-text mt-5">
            The Multi Commodity Exchange of India (MCX) is the leading commodities exchange in India, established in 2003, specializing in the trading of various commodity derivatives.
          </div>
          <div class="para-text mt-5">
            QXT is specialized in MCX exchange technologies for both market data and Trading interface. We help Institutions to provide an adapters of MCX  EOBI, MDI and ETI interfaces.
          </div>
           <br class="mob"> <br class="mob"><br class="mob"> 
          <ul class="para-text ps-5 pt-5" style="list-style-type: number; visibility: hidden;">
            <li>
              Technology solution to provides TBT level-III data to retail
            </li>
            <li>
              Technology to disseminate Level-I, Level-II market data over API model
            </li>
            <li>
              Technology to integrate TBT data order book to HFT platform
            </li>
          </ul>

          <div class="border-line"></div>

          <div class="d-flex mt-5">
              <div class="w-75 text-box-bottom">
                View documentation
              </div>

              <div class="w-25"> 
                <svg style="color: #595959;" xmlns="http://www.w3.org/2000/svg" width="2em" height="2em" viewBox="0 0 24 24">
                  <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.6" d="M4 12h16m0 0l-6-6m6 6l-6 6"></path>
                </svg>
              </div>
          </div>

        </div>
      </div>
    </div> 
  </section>

  <section class="container py-6">
    <div class="row">
      <div class="col-12 col-md-6 col-lg-6 py-5">
        <div class="small-title-dark py-4">
          Comprehensive FIX Session Support: 
        </div>

        <div class="para-text py-4">
          QX.MDP facilitates real-time streaming of market data into a broker’s client trading or monitoring applications, while market surveillance feeds provide essential data and content to improve the performance of automated trading algorithms.
        </div>
      </div>

      <div class="col-12 col-md-6 col-lg-6">
          <img class="p-5" src="assets/img/mdcs1.jpg">
      </div>

      <div class="col-12 col-md-6 col-lg-6  py-5">
          <img class="p-5" src="assets/img/mdcs2.jpg">
      </div>

      <div class="col-12 col-md-6 col-lg-6  py-5">
        <div class="small-title-dark py-4">
          Why the market choose QuantXpress
        </div>

        <div class="para-text py-4">
          <strong>Over 15 Years of Extensive Expertise</strong> across the entire trading lifecycle.<br>
          <strong>Accelerated Speed to Market</strong> with Pre-built trading modules streamline implementation.<br>
          <strong>Customization Expertise</strong> with Proven ability to create complex integrations tailored to client needs.<br>
          <strong>Complete Support and Sustainability:</strong> Our solutions are fully supportable and designed for long-term viability.<br>
          <strong>Leading in Trade Engineering:</strong> We are the experts in trade engineering, dedicated to delivering robust solutions.<br>

        </div>
      </div>
    </div>
  </section>
 
  <?php include 'footer.php';?>

  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.42/js/uikit.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.42/js/uikit-icons.min.js'></script>

  <script  src="assets/js/script.js"></script>
</body> 
<script type="text/javascript">
  $(function () {
     $('.toggle-menu').click(function(){
      $('.exo-menu').toggleClass('display');
     });
  });
</script>
</html>
