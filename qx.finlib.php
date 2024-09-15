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
                                    <div class="main-title-white">QX.FinLib </div>
                                    <div class="second-title-white"> 
                                          .NET Suite for your Trading Application
                                    </div>

                                    <div class="small-text-white py-4-d px-4"> 
                                          QX.FinLib for .NET is user friendly library that empowers you with rapid development of high performance trading system with advanced capabilities.  With this versatile API, you can make your trading system development feature rich including Strategy and Indicator Development, Backtesting process, advance options backtesting and many more effortlessly smooth.
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


  <section class="container py-6">
      <div class="row">
        <div class="col-12 col-md-6 col-lg-6">
          <p class="sec-title">
            Why choose <span class="span-title">QX.FinLib</span><br>
            .NET Trading Library? 
          </p>
        </div>

        <div class="col-12 col-md-6 col-lg-6" style="padding-top: 10px;">
          <p class="para-text">
            Discover why midsize companies choose QX.FIX Engine as their trusted foundation for connectivity. Enhance your growth and innovation while addressing today’s challenges and preparing for future opportunities with our robust FIX protocol-based solutions.
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
      <div class="row">
        <div class="col-12 col-md-6 col-lg-6">
          <p class="sec-title">
            How it <span class="span-title">Works?</span> 
          </p>
        </div>

        <div class="col-12 col-md-6 col-lg-6" style="padding-top: 10px;">
          <p class="para-text">
            QX.FinLib SDK for .NET simpliﬁes the development of trading system and research by providing a set of libraries that are consistent and familiar for .NET developers.
          </p>
        </div>
      </div>  
       
      <div class="w-100 my-5 pt-5">
        <img src="assets/img/net.png">
      </div> 
  </section>

  <section class="container py-6">    
    <div class="text-center">
      <p class="sec-title">
          QXFinLib<span class="span-title">.NET</span> Guides
      </p>

      <p class="para-text">
          Build .NET based trading applications and tools faster with QX.FinLib SDK. We provide tutorials, examples, and other resources to speed up your trading system development.
      </p> 
    </div>  
    <div class="row pt-5">
      <div class="col-12 col-md-4 col-lg-4 ">
        <div class="border rounded-4 py-4 px-5 height-35 myDIV">
          <div class="small-title-dark">
              Developer Guide
          </div>
          <div class="para-text mt-5">
            Design and build your trading applications, backtesting and strategy development systems, Tools and your trading research framework 
          </div>

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
        <div class="border rounded-4 py-4 px-5 height-35 myDIV">
          <div class="small-title-dark">
              BackTesting
          </div>
          <div class="para-text mt-5">
            Leverage our SDK to develop trading strategies and perform a backtesting and optimization process using QXFinLib SDK
          </div><br><br>

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
        <div class="border rounded-4 py-4 px-5 height-35 myDIV">
          <div class="small-title-dark">
              SDK Code Examples
          </div>
          <div class="para-text mt-5">
            Explore the Github coding area to navigate tovarious examples of Strategies,Technical Indicator etc.
          </div><br><br><br><br>

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
