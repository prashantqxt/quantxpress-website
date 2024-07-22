<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Home</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css'>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.42/css/uikit.min.css'>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
  <link rel="stylesheet" href="assets/css/style.css">

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
                                    <div class="main-title-white">BlitzTrader </div>
                                    <div class="second-title-white"> 
                                          Transform your Trading Ideas into Action...
                                          Fast Time to the Market never before
                                    </div>

                                    <div class="small-text-white py-4-d px-4"> 
                                          BlitzTrader is next generation, most powerful and flexible algorithmic trading platform for Prop desk, professional traders and quant developers for rapid development, testing and deployment of simple to sophisticated trading strategies into constantly evolving financial marketplace
                                    </div>

                                    <div class="btn-mg">
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

  <section class="container py-5 line-grid-small">
      <div class="row">
        <div class="col-12 col-md-6 col-lg-6">
          <p class="sec-title">
            How it  <span class="span-title">Works?</span>
          </p>
        </div> 
      </div>  

      <div class="row mg-t-90">
        <div class="col-12 col-md-2 col-lg-2">
          <div class="card">
            <div>
              <img class="work-icon" src="assets/img/works.png">
            </div>

            <div class="box-text">
              <div class="div-text">
                Have Trading Ideas? 
              </div>
            </div>
          </div>
        </div>

        <div class="col-12 col-md-2 col-lg-2">
          <div class="card">
            <div>
              <img class="work-icon" src="assets/img/works.png">
            </div>

            <div class="box-text">
              <div class="div-text">
                Build your strategy using BlitzTrader API 
              </div>
            </div>
          </div>
        </div>

        <div class="col-12 col-md-2 col-lg-2">
          <div class="card">
            <div>
              <img class="work-icon" src="assets/img/works.png">
            </div>

            <div class="box-text">
              <div class="div-text">
                Test with simulator in live or recorded market data
              </div>
            </div>
          </div>
        </div>

        <div class="col-12 col-md-2 col-lg-2">
          <div class="card">
            <div>
              <img class="work-icon" src="assets/img/works.png">
            </div>

            <div class="box-text">
              <div class="div-text">
                Fix or fine tune your strategy and re-test
              </div>
            </div>
          </div>
        </div>

        <div class="col-12 col-md-2 col-lg-2">
          <div class="card">
            <div>
              <img class="work-icon" src="assets/img/works.png">
            </div>

            <div class="box-text">
              <div class="div-text">
                Execute
              </div>
            </div>
          </div>
        </div>
      </div>
  </section>

  <section class=" bg-gray py-6">
    <div class="container">
        <div class="row pb-5">
          <div class="col-12 col-md-7 col-lg-7">
            <p class="sec-title">
              3 Reasons to choose <span class="span-title">Blitztrader</span>
            </p>
          </div> 
        </div>  

        <div class="row">
          <div class="col-12 col-md-4 col-lg-4">
            <div class="pb-4">
              <img class="w-25" src="assets/img/works.png">
            </div>

            <div class="small-title-dark py-3">
              Fast time to the market
            </div>

            <div class="para-text py-3">
              BlitzTrader's open architecture allows rapid transition from idea conception to live deployment, enabling traders to capitalize on market opportunities in matter of days.
            </div>
          </div>

          <div class="col-12 col-md-4 col-lg-4">
            <div class="pb-4">
              <img class="w-25" src="assets/img/works.png">
            </div>

            <div class="small-title-dark py-3">
              One Stop Algorithmic Trading  
            </div>

            <div class="para-text py-3">
              BlitzTrader serves as a one-stop solution for algorithmic trading, offering flexibility and customization through its open architecture. 
            </div>
          </div>

          <div class="col-12 col-md-4 col-lg-4">
            <div class="pb-4">
              <img class="w-25" src="assets/img/works.png">
            </div>

            <div class="small-title-dark py-3">
              Unified Platform
            </div>

            <div class="para-text py-3">
              BlitzTrader's asset-neutral and market-agnostic platform integrates Order Management System (OMS), Risk Management System (RMS), and seamless liquidity provider connectivity.
            </div>
          </div>
        </div>
    </div>
  </section>

   <section class="container py-6">

      <div class="row">
        <div class="col-12 col-md-6 col-lg-6">
          <p class="sec-title">
            Powerful   <span class="span-title">Strategy</span>
            <span class="span-title">Development</span> Framework   
          </p>
        </div>

        <div class="col-12 col-md-6 col-lg-6" style="padding-top: 10px;">
          <p class="para-text">
            Leverage the BlitzTrader .NET Strategy development SDK to swiftly bring your proprietary trading ideas to life across diverse markets and asset classes. Our framework offers a user-friendly yet robust mechanism for developing algorithmic strategies with a market-agnostic approach.
          </p>
        </div>
      </div>  


      <div class="d-flex justify-content-between mob-col pt-5">
        <div class="border w-33 hover-box">
          <div class="img-icon">
              <img src="assets/img/algorithmic.svg">
            </div>
          <div class="vertical"> 
            <!--  front side  -->
            <section class="front"> 
              
              <div class="d-flex filp-front-title">
                <div class="w-75 text">
                  Market  Variable Concept
                </div>

                <div class="w-25"> 
                  <svg style="color: #595959;" xmlns="http://www.w3.org/2000/svg" width="2em" height="2em" viewBox="0 0 24 24">
                    <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.6" d="M4 12h16m0 0l-6-6m6 6l-6 6" />
                  </svg>
                </div>
            </section>

            <!--  back side  -->
            <section class="back"> 
              <div class="d-flex filp-front-title">
                <div class="w-85 gray flip-text ">
                  Design strategies using market-neutral variables, allowing seamless deployment across different markets without the need for code modifications.
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
            <!--  front side  -->
            <section class="front"> 
              
              <div class="d-flex filp-front-title">
                <div class="w-75 text">
                  Smart Order Concept
                </div>

                <div class="w-25"> 
                  <svg style="color: #595959;" xmlns="http://www.w3.org/2000/svg" width="2em" height="2em" viewBox="0 0 24 24">
                    <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.6" d="M4 12h16m0 0l-6-6m6 6l-6 6" />
                  </svg>
                </div>
              </div>
            </section>

            <!--  back side  -->
            <section class="back"> 
              <div class="d-flex filp-front-title">
                <div class="w-85 gray flip-text ">
                  Efficiently manage the entire order lifecycle with rapid quoting sequences through a single API command, eliminating concerns about looping in the generation of new order cycles.
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
            <!--  front side  -->
            <section class="front"> 
              
              <div class="d-flex filp-front-title">
                <div class="w-75 text">
                  Smart Execution Library
                </div>

                <div class="w-25"> 
                  <svg style="color: #595959;" xmlns="http://www.w3.org/2000/svg" width="2em" height="2em" viewBox="0 0 24 24">
                    <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.6" d="M4 12h16m0 0l-6-6m6 6l-6 6" />
                  </svg>
                </div>
              </div>
            </section>

            <!--  back side  -->
            <section class="back"> 
              <div class="d-flex filp-front-title">
                <div class="w-85 gray flip-text ">
                  Streamline complex execution models with a single command like EnterLong, EnterShort, GoFlat, SetPosition etc, ensuring optimal order execution.

                </div> 
              </div>
            </section>
          </div>
        </div>
      </div>
      <div class="d-flex justify-content-between mob-col">
        <div class="border w-33 hover-box">
          <div class="img-icon">
              <img src="assets/img/trading.svg">
            </div>
          <div class="vertical"> 
            <!--  front side  -->
            <section class="front"> 
              
              <div class="d-flex filp-front-title">
                <div class="w-75 text">
                  Server Side Deployment
                </div>

                <div class="w-25"> 
                  <svg style="color: #595959;" xmlns="http://www.w3.org/2000/svg" width="2em" height="2em" viewBox="0 0 24 24">
                    <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.6" d="M4 12h16m0 0l-6-6m6 6l-6 6" />
                  </svg>
                </div>
            </section>

            <!--  back side  -->
            <section class="back"> 
              <div class="d-flex filp-front-title">
                <div class="w-85 gray flip-text ">
                  Optimize your trading strategies by deploying them on the server side for improved performance, reliability, and scalability. With server-side deployment, you can enhance the overall performance and responsiveness of your trading system, enabling you to achieve better results in the dynamic financial markets.

                </div> 
              </div>
            </section>
          </div>
        </div>
        <div class="border w-33 hover-box">
          <div class="img-icon">
              <img src="assets/img/market.svg">
            </div>
          <div class="vertical"> 
            <!--  front side  -->
            <section class="front"> 
              
              <div class="d-flex filp-front-title">
                <div class="w-75 text">
                  Live and Historical Market Data Events
                </div>

                <div class="w-25"> 
                  <svg style="color: #595959;" xmlns="http://www.w3.org/2000/svg" width="2em" height="2em" viewBox="0 0 24 24">
                    <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.6" d="M4 12h16m0 0l-6-6m6 6l-6 6" />
                  </svg>
                </div>
              </div>
            </section>

            <!--  back side  -->
            <section class="back"> 
              <div class="d-flex filp-front-title">
                <div class="w-85 gray flip-text ">
                  Access real-time and historical market data events to make well-informed trading decisions in real-time. Our platform provides seamless access to both live and historical market data, enabling you to analyze market trends, identify opportunities, and execute trades with confidence based on accurate and up-to-date information.

                </div> 
              </div>
            </section>
          </div>
        </div>
        <div class="border w-33 hover-box">
          <div class="img-icon">
              <img src="assets/img/scalable.svg">
            </div>
          <div class="vertical"> 
            <!--  front side  -->
            <section class="front"> 
              
              <div class="d-flex filp-front-title">
                <div class="w-75 text">
                  Technical Analysis Library
                </div>

                <div class="w-25"> 
                  <svg style="color: #595959;" xmlns="http://www.w3.org/2000/svg" width="2em" height="2em" viewBox="0 0 24 24">
                    <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.6" d="M4 12h16m0 0l-6-6m6 6l-6 6" />
                  </svg>
                </div>
              </div>
            </section>

            <!--  back side  -->
            <section class="back"> 
              <div class="d-flex filp-front-title">
                <div class="w-85 gray flip-text ">
                  Leverage our extensive technical analysis library, featuring support for over 100+ indicators. Customize your trading strategies with ease using our framework, empowering you to develop and integrate your own proprietary indicators tailored to your specific trading requirements.

                </div> 
              </div>
            </section>
          </div>
        </div>
      </div>
  </section> 

  <section class="container py-6">    
    <div class="text-center">
      <p class="sec-title">
          Explore <span class="span-title">BlitzTrader SDK/API  </span>
      </p> 

      <p class="sec-title">
         to bring life to your trading ideas 
      </p> 
      
      <div class="row container">
        <div class="col-12 col-md-6 col-lg-6">
          <div class="m-5 border rounded-5 para-text p-5">
            <div>
              <img class="w-25" src="assets/img/works.png">
            </div>
            <div class="mt-5">
              <span class="span-title">BLITZ</span>  Developer <br> Area
            </div>
          </div>
        </div>

        <div class="col-12 col-md-6 col-lg-6">
          <div class="m-5 border rounded-5 para-text p-5">
            <div>
              <img class="w-25" src="assets/img/works.png">
            </div>
            <div class="mt-5">
              <span class="span-title">BLITZ</span>  Sample <br>Strategies Code
            </div>
          </div>
        </div>
    </div> 
  </section>

  <section class="text-center bg-cta">
    <div class="cta-heading">Start Your Automation Journey Now!</div>

    <div class="cta-text">
      Lets us address your challenges and empower your <br> trading with state of art technology
    </div>

    <div><button class="dark-btn_2 mob-mt-5 ">Learn More</button></div>
  </section>

  <footer class="main-footer">
        <div class="container">
            <div class="footer-content">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-12 footer-column">
                        <div class="logo-widget footer-widget">
                            <figure class="logo-box"><a href="#"><img src="https://i.ibb.co/QDy827D/ak-logo.png" alt=""></a></figure>
                            <div class="text">
                                <p>QuantXpress Technologies delivers cutting-edge, high-performance, asset neutral algorithmic and execution management system.</p>
                            </div>
                            <ul class="footer-social">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-vimeo-v"></i></a></li>
                                <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12 offset-lg-2 footer-column">
                        <div class="service-widget footer-widget">
                            <div class="footer-title">Services</div>
                            <ul class="list">
                                <li><a href="#">Water Surve</a></li>
                                <li><a href="#">Education for all</a></li>
                                <li><a href="#">Food Serving</a></li>
                                <li><a href="#">Animal Saves</a></li>
                                <li><a href="#">Help Orphan</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 footer-widget">
                        <div class="contact-widget footer-widget">
                            <div class="footer-title">Contacts</div>
                            <div class="text">
                                <p>11/16 Kumar City, Kalyani Nagar, Pune-14 India</p>
                                <p>+91 122 332 3010</p>
                                <p>info@example.com</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- main-footer end -->
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-5 col-12 column">
                    <div class="copyright">QuantXpress Technologies Pvt. Ltd.  &copy; 2024 All Right Reserved</div>
                </div>
                <div class="col-lg-7 col-md-7 col-12 column">
                    <ul class="footer-nav copyright">
                        <li><a href="#">Terms of Service</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="www.chetansawle.site">Designed & Developed by  Chetan Sawle</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
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
