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
                                    <div class="main-title-white">QXFinLib .NET </div>
                                    <div class="second-title-white"> 
                                          Empower your Research, Optimize Back tests,
                                          Master the Markets
                                    </div>

                                    <div class="small-text-white py-4-d px-4"> 
                                          QXFinLib.NET is the ultimate toolkit for quant developers. Craft sophisticated trading systems with ease on the powerful .NET platform.  
                                    </div>

                                    <div class="btn-mg">
                                      <button class="dark-btn">Get Started</button>
                                      <button class="light-btn">Documentation</button>
                                    </div>
                                  </div>
                              </div>
                          </li>

                          <li class="banner-bg">
                              <div class="uk-container uk-container-small" uk-slider-parallax="opacity: 0,1,0">
                                  <div class="text-center">
                                    <div class="main-title-white">BlitzTrader </div>
                                    <div class="second-title-white"> 
                                          Algorithmic Trading Redefined
                                          Power, Simplicity and BlitzTrader
                                    </div>

                                    <div class="small-text-white py-4-d px-4"> 
                                          BlitzTrader empowers clients to conquer the markets with a low-latency, multi-market, multi-asset trading platform. Our groundbreaking strategy development framework streamlines the process, enabling rapid development, testing, deployment, and management of sophisticated trading strategies across any electronic marketplace. 
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

  <section class="container py-5">
      <div class="row">
        <div class="col-12 col-md-6 col-lg-6">
          <p class="sec-title">
            Browse Our <span class="span-title">Technology</span>
          </p>
        </div>

        <div class="col-12 col-md-6 col-lg-6" style="padding-top: 10px;">
          <p class="para-text">
            From our flagship products for enterprise Algorithmic Trading solution named BlitzTrader to next-generation Trading libraries, Market Data and Connectivity solutions, find the answer to your trading business challenge.
          </p>
        </div>
      </div>  

      <div class="d-flex justify-content-between mob-col pt-5">
        <div class="border w-33 hover-box">
          <div class="img-icon">
              <img src="assets/img/algorithmic.png">
            </div>
          <div class="vertical"> 
            <!--  front side  -->
            <section class="front"> 
              
              <div class="d-flex filp-front-title">
                <div class="w-75 text">
                  Algorithmic Trading  Systems
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
                  Automate trade execution, enhance efficiency, and seize market opportunities across diverse asset classes. BlitzTrader stands as the premier trading platform, offering comprehensive solutions for all your trade automation and execution needs
                </div> 
              </div>
            </section>
          </div>
        </div>
        <div class="border w-33 hover-box">
          <div class="img-icon">
              <img src="assets/img/fix.png">
            </div>
          <div class="vertical"> 
            <!--  front side  -->
            <section class="front"> 
              
              <div class="d-flex filp-front-title">
                <div class="w-75 text">
                    FIX API and Connectivity
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
                  Utilizing QX.FIX Engine, institutions can efficiently connect to markets, enhancing speed, reliability, and interoperability.
                </div> 
              </div>
            </section>
          </div>
        </div>
        <div class="border w-33 hover-box">
          <div class="img-icon">
              <img src="assets/img/exchange.png">
            </div>
          <div class="vertical"> 
            <!--  front side  -->
            <section class="front"> 
              
              <div class="d-flex filp-front-title">
                <div class="w-75 text">
                  Exchange and Market Connectivity
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
                  Our exchange and market connectivity solutions leverage advanced technology to seamlessly connect traders with exchanges and markets. These solutions optimize speed, reliability, and interoperability, facilitating efficient trade execution and market access.
                </div> 
              </div>
            </section>
          </div>
        </div>
      </div>
      <div class="d-flex justify-content-between mob-col">
        <div class="border w-33 hover-box">
          <div class="img-icon">
              <img src="assets/img/trading.png">
            </div>
          <div class="vertical"> 
            <!--  front side  -->
            <section class="front"> 
              
              <div class="d-flex filp-front-title">
                <div class="w-75 text">
                  Trading and Backtesting framework
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
                  Our Trading and backtesting frameworks provide robust infrastructures for traders to develop, test, and execute trading strategies. These frameworks integrate historical data and analytical tools, enabling traders to assess strategy performance accurately.
                </div> 
              </div>
            </section>
          </div>
        </div>
        <div class="border w-33 hover-box">
          <div class="img-icon">
              <img src="assets/img/market.png">
            </div>
          <div class="vertical"> 
            <!--  front side  -->
            <section class="front"> 
              
              <div class="d-flex filp-front-title">
                <div class="w-75 text">
                  Market Data solutions
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
                  Live and historical data technology, along with streaming APIs, form the backbone of market data solutions. These solutions offer real-time and historical data feeds, empowering traders with vital insights to make informed decisions in dynamic markets.
                </div> 
              </div>
            </section>
          </div>
        </div>
        <div class="border w-33 hover-box">
          <div class="img-icon">
              <img src="assets/img/scalable.png">
            </div>
          <div class="vertical"> 
            <!--  front side  -->
            <section class="front"> 
              
              <div class="d-flex filp-front-title">
                <div class="w-75 text">
                  Scalable Market Data API
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
                  The Scalable Market Data API offers both websocket streaming and REST API functionalities. This versatile solution ensures seamless data delivery, catering to diverse needs and enabling efficient integration into various trading systems and applications.
                </div> 
              </div>
            </section>
          </div>
        </div>
      </div>
      <div class="d-flex justify-content-between mob-col pb-4">
        <div class="border w-33 hover-box">
          <div class="img-icon">
              <img src="assets/img/strategies.png">
            </div>
          <div class="vertical"> 
            <!--  front side  -->
            <section class="front"> 
              
              <div class="d-flex filp-front-title">
                <div class="w-75 text">
                  Strategies Development Solutions
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
                  The Algo Strategies Development Solutions on the Blitz Trading Platform provide a comprehensive toolkit for traders to conceptualize, develop, and implement algorithmic strategies.
                </div> 
              </div>
            </section>
          </div>
        </div>
        <div class="border w-33 hover-box">
          <div class="img-icon">
              <img src="assets/img/HFT.png">
            </div>
          <div class="vertical"> 
            <!--  front side  -->
            <section class="front"> 
              
              <div class="d-flex filp-front-title">
                <div class="w-75 text">
                  HFT platform
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
                  Delivering consulting and advisory services on HFT trading platforms, we offer expert guidance and strategic insights.
              </div>
            </section>
          </div>
        </div>
        <div class="border w-33 hover-box">
          <div class="img-icon">
              <img src="assets/img/order.png">
            </div>
          <div class="vertical"> 
            <!--  front side  -->
            <section class="front"> 
              
              <div class="d-flex filp-front-title">
                <div class="w-75 text">
                  Order and Risk Management
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
                  Providing comprehensive solutions in Order and Risk Management, our platform facilitates seamless trading streaming Straight Through Processing (STP).
                </div> 
              </div>
            </section>
          </div>
        </div>
      </div>
  </section>

  <section class="py-5" style="background: #011F3D;">    
    <div class="container">
      <div class="row ">
        <div class="col-12 col-md-6 col-lg-6">
          <img class="first-comma" src="assets/img/first-comma.png">
          <p class="sec-title white">
            Innovation, Transformation <br> and Disruption in your  <br> <span class="span-title white">Automated Trading</span>
          </p>

          <div class="medium-title white pb-5">Partnerships that create & grow.</div>

          <p class="para-text white font-weight-300">
            We provides reusable trading software frameworks, components and custom software development services that save lot of your effort and capital in development of customized automated trading solution and drive a profitability and success for you.
          </p>
        </div>

        <div class="col-12 col-md-6 col-lg-6 div-center"> 
            <img src="assets/img/create-grow.svg">
        </div>
      </div>
    </div>
  </section> 

<!--   <section class="container py-5">    
    <div class="row pt-5">
      <div class="col-12 col-md-5 col-lg-5">
        <p class="medium-title">
          How New Jersey Courts stayed in<br>
          session during a global pandemic
        </p>
        <p class="para-text">
          NJ Courts was able to go fully virtual almost overnight and swiftly build for tomorrow with Pega Cloud.
        </p>
        <button class="dark-btn_2 mob-mt-5  mt-5">Get Started</button>
      </div>

      <div class="col-12 col-md-7 col-lg-7 border-left-5 mob-mg">
        <p class="para-text  centerps-5">
          "Because we were in the cloud, we were able to stand things up in about 48 hours that otherwise would have taken us months to do."
        </p>
        <p class="medium-title ps-5">
          Jack McCarthy <br>
          <span class="name"> NJ Courts CIO</span>
        </p>
      </div> 

    </div>
  </section> -->
  
  <section class="py-5">  
    <div class="container">  
      <div class="text-center">
        <p class="sec-title">
            QXFinLib <span class="span-title">.NET</span>
        </p>

        <p class="para-text py-4">
            Experience the power of our comprehensive trading library and framework, designed to revolutionize your trading <br> system development. Cut costs and time to market drastically compared to building from scratch in .NET <br> technology. Unleash your trading potential like never before.
        </p>
      </div>  
      <div class="row  ">
        <div class="col-12 col-md-7 col-lg-7 div-center">
          <img src="assets/img/qxfinLib-img.svg">
        </div>

        <div class="col-12 col-md-5 col-lg-5 ">  

          <ul class="list-style list-box">
            <li>
              <div class="d-flex">
                <div class="w-10">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                  	<path fill="currentColor" fill-rule="evenodd" d="M12 22c5.523 0 10-4.477 10-10S17.523 2 12 2S2 6.477 2 12s4.477 10 10 10M9.97 8.47a.75.75 0 0 1 1.06 0l3 3a.75.75 0 0 1 0 1.06l-3 3a.75.75 0 1 1-1.06-1.06L12.44 12L9.97 9.53a.75.75 0 0 1 0-1.06" clip-rule="evenodd" />
                  </svg>
                </div>
                <div class="para-text ps-3 pt-1px">
                Time Series library with various compression from seconds, minutes to monthly bar.
                </div>
              </div> 
            </li>

            <li>
              <div class="d-flex">
                <div class="w-10">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                  	<path fill="currentColor" fill-rule="evenodd" d="M12 22c5.523 0 10-4.477 10-10S17.523 2 12 2S2 6.477 2 12s4.477 10 10 10M9.97 8.47a.75.75 0 0 1 1.06 0l3 3a.75.75 0 0 1 0 1.06l-3 3a.75.75 0 1 1-1.06-1.06L12.44 12L9.97 9.53a.75.75 0 0 1 0-1.06" clip-rule="evenodd" />
                  </svg>
                </div>
                <div class="para-text ps-3 pt-1px">
                  Technical Indicator framework with pre build 100+ indicators
                </div>
              </div> 
            </li>

            <li>
              <div class="d-flex">
                <div class="w-10">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                  	<path fill="currentColor" fill-rule="evenodd" d="M12 22c5.523 0 10-4.477 10-10S17.523 2 12 2S2 6.477 2 12s4.477 10 10 10M9.97 8.47a.75.75 0 0 1 1.06 0l3 3a.75.75 0 0 1 0 1.06l-3 3a.75.75 0 1 1-1.06-1.06L12.44 12L9.97 9.53a.75.75 0 0 1 0-1.06" clip-rule="evenodd" />
                  </svg>
                </div>
                <div class="para-text ps-3 pt-1px">
                  Strategy building and backtesting library
                </div>
              </div> 
            </li>

            <li>
              <div class="d-flex">
                <div class="w-10">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                  	<path fill="currentColor" fill-rule="evenodd" d="M12 22c5.523 0 10-4.477 10-10S17.523 2 12 2S2 6.477 2 12s4.477 10 10 10M9.97 8.47a.75.75 0 0 1 1.06 0l3 3a.75.75 0 0 1 0 1.06l-3 3a.75.75 0 1 1-1.06-1.06L12.44 12L9.97 9.53a.75.75 0 0 1 0-1.06" clip-rule="evenodd" />
                  </svg>

                </div>
                <div class="para-text ps-3 pt-1px"> 
                  Advance Options strategy backtesting
                </div>
              </div> 
            </li>

            <li>
              <div class="d-flex">
                <div class="w-10">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                  	<path fill="currentColor" fill-rule="evenodd" d="M12 22c5.523 0 10-4.477 10-10S17.523 2 12 2S2 6.477 2 12s4.477 10 10 10M9.97 8.47a.75.75 0 0 1 1.06 0l3 3a.75.75 0 0 1 0 1.06l-3 3a.75.75 0 1 1-1.06-1.06L12.44 12L9.97 9.53a.75.75 0 0 1 0-1.06" clip-rule="evenodd" />
                  </svg>

                </div>
                <div class="para-text ps-3 pt-1px"> 
                  Strategy optimization
                </div>
              </div> 
            </li>

            <li>
              <div class="d-flex">
                <div class="w-10">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                  	<path fill="currentColor" fill-rule="evenodd" d="M12 22c5.523 0 10-4.477 10-10S17.523 2 12 2S2 6.477 2 12s4.477 10 10 10M9.97 8.47a.75.75 0 0 1 1.06 0l3 3a.75.75 0 0 1 0 1.06l-3 3a.75.75 0 1 1-1.06-1.06L12.44 12L9.97 9.53a.75.75 0 0 1 0-1.06" clip-rule="evenodd" />
                  </svg>

                </div>
                <div class="para-text ps-3 pt-1px"> 
                    Options pricing
                </div>
              </div> 
            </li>

            <li>
              <div class="d-flex">
                <div class="w-10">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                  	<path fill="currentColor" fill-rule="evenodd" d="M12 22c5.523 0 10-4.477 10-10S17.523 2 12 2S2 6.477 2 12s4.477 10 10 10M9.97 8.47a.75.75 0 0 1 1.06 0l3 3a.75.75 0 0 1 0 1.06l-3 3a.75.75 0 1 1-1.06-1.06L12.44 12L9.97 9.53a.75.75 0 0 1 0-1.06" clip-rule="evenodd" />
                  </svg>

                </div>
                <div class="para-text ps-3 pt-1px"> 
                  Source code option is available
                </div>
              </div> 
            </li>

          </ul>
        </div> 
      </div>
    </div>
  </section>

  <section class="container py-5">    
    <div class="text-center">
      <p class="sec-title">
          Blitz<span class="span-title">Trader</span>
      </p>

      <p class="medium-title">
          Unleash the Full Potential of Your Trading Ideas
      </p>

      <p class="para-text">
          BlitzTrader empowers professional quants and active traders to bring their algorithmic trading ideas to life. It's a comprehensive platform that streamlines the entire algorithmic trading process, from strategy development to real-time execution across multiple assets and exchanges/brokers.. With BlitzTrader, developers can build complex trading strategies and execution models in a matter of hours to days.
      </p>
    </div>   

    <div class="row py-6">
      <div class="col-lg-5 mob">
        <ul class="nav nav-pills flex-column" id="experienceTab" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#snit" role="tab" aria-controls="home" aria-selected="true">
              Why to Choose BlitzTrader
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#devs" role="tab" aria-controls="profile" aria-selected="false">Asset Neutral, High Performance, Scalable, Open Architecture</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " id="home-tab" data-toggle="tab" href="#snit3" role="tab" aria-controls="home" aria-selected="true">Flexible and Powerful Customization</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#devs4" role="tab" aria-controls="profile" aria-selected="false">Open Framework and SDK</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " id="home-tab" data-toggle="tab" href="#snit5" role="tab" aria-controls="home" aria-selected="true">Loosely Coupled Market Data Feed Components</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#devs6" role="tab" aria-controls="profile" aria-selected="false">Framework and Libraries</a>
          </li>

          <li class="nav-item">
            <a class="nav-link " id="home-tab" data-toggle="tab" href="#snit7" role="tab" aria-controls="home" aria-selected="true">Advanced Trade Execution Capabilities</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#devs8" role="tab" aria-controls="profile" aria-selected="false">Integration with External system</a>
          </li>

        </ul>
      </div>
      <div class="col-lg-7 mob">
        <div class="tab-content" id="experienceTabContent">

          <div class="tab-pane fade show active text-left text-light" id="snit" role="tabpanel" aria-labelledby="home-tab">
            <p class="para-text center">
              BlitzTrader has a proven track record of automating complex trading strategies in a single day, a feat that some proprietary desks struggled to achieve over months. Time to market is a crucial factor when deploying backtested strategies, and we guarantee that BlitzTrader's efficiency cannot be surpassed by any other platform. Our mission is to establish BlitzTrader as the premier algorithmic trading platform for proprietary desks and professional traders.
            </p>
          </div>

          <div class="tab-pane fade text-left text-light" id="devs" role="tabpanel" aria-labelledby="profile-tab">
            <p class="para-text center">
              BlitzTrader's architecture is designed to accommodate various asset classes with high performance and scalability, ensuring seamless integration and operation in any trading environment.
            </p>
          </div>

          <div class="tab-pane fade text-left text-light" id="snit3" role="tabpanel" aria-labelledby="home-tab3">
            <p class="para-text  center">
              Our platform offers robust customization options to adapt to changing market conditions and evolving trading business needs, empowering traders to stay ahead of the curve.
            </p>
          </div>

          <div class="tab-pane fade text-left text-light" id="devs4" role="tabpanel" aria-labelledby="profile-tab4">
            <p class="para-text  center">
              Developers can leverage our open framework and SDK to develop and integrate powerful algorithmic strategies and market connectivity adapters tailored to their specific requirements.
            </p>
          </div>

          <div class="tab-pane fade text-left text-light" id="snit5" role="tabpanel" aria-labelledby="home-tab5">
            <p class="para-text  center">
              BlitzTrader features loosely coupled market data feed components and a dissemination infrastructure, providing traders with real-time, accurate market data for informed decision-making.
            </p>
          </div>

          <div class="tab-pane fade text-left text-light" id="devs6" role="tabpanel" aria-labelledby="profile-tab6">
            <p class="para-text  center">
               We provide a comprehensive suite of frameworks and libraries for TimeData Series, Technical Indicators, and options pricing, enabling traders to conduct advanced analysis and modeling with ease.
            </p>
          </div>

          <div class="tab-pane fade text-left text-light" id="snit7" role="tabpanel" aria-labelledby="home-tab7">
            <p class="para-text  center">
              Our platform offers advanced trade execution capabilities that can be easily customized and integrated into trading strategies, allowing for efficient order routing and execution. Our execution framework empowers your strategy to quote at any level, on any order side, and at any price point.
            </p>
          </div>

          <div class="tab-pane fade text-left text-light" id="devs8" role="tabpanel" aria-labelledby="profile-tab8">
            <p class="para-text  center">
              BlitzTrader Strategies are developed using .NET programming languages, opening up immense possibilities for you to connect with any external system for signals or advanced calculations. This makes the system open and customizable without any limitations.
            </p>
          </div>
        </div>
      </div>
    </div>

    <div class="container accordion desk" id="accordionExample">
      <div class="accordion-item">
        <h2 class="accordion-header" id="headingOne">
          <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
            Why to Choose BlitzTrader
          </button>
        </h2>
        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
          <div class="accordion-body"> 
            <div class="para-text">
              BlitzTrader has a proven track record of automating complex trading strategies in a single day, a feat that some proprietary desks struggled to achieve over months. Time to market is a crucial factor when deploying backtested strategies, and we guarantee that BlitzTrader's efficiency cannot be surpassed by any other platform. Our mission is to establish BlitzTrader as the premier algorithmic trading platform for proprietary desks and professional traders.
            </div>
          </div>
        </div>
      </div>
      <div class="accordion-item">
          <h2 class="accordion-header" id="headingTwo">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
              Asset Neutral, High Performance, Scalable, Open Architecture
            </button>
          </h2>
          <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
            <div class="accordion-body">
               
              <div class="para-text">
                BlitzTrader's architecture is designed to accommodate various asset classes with high performance and scalability, ensuring seamless integration and operation in any trading environment.
            </div>
          </div>
        </div>
      </div>
      <div class="accordion-item">
          <h2 class="accordion-header" id="headingThree">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
              Flexible and Powerful Customization
            </button>
          </h2>
          <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
            <div class="accordion-body">
               
              <div class="para-text">
                
                Our platform offers robust customization options to adapt to changing market conditions and evolving trading business needs, empowering traders to stay ahead of the curve.
            </div>
          </div>
        </div>
      </div>
      <div class="accordion-item">
          <h2 class="accordion-header" id="headingfour">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsefour" aria-expanded="false" aria-controls="collapseThree">
              Open Framework and SDK
            </button>
          </h2>
          <div id="collapsefour" class="accordion-collapse collapse" aria-labelledby="headingfour" data-bs-parent="#accordionExample">
            <div class="accordion-body">
               
              <div class="para-text">
                
                Developers can leverage our open framework and SDK to develop and integrate powerful algorithmic strategies and market connectivity adapters tailored to their specific requirements.
            </div>
          </div>
        </div>
      </div> 
      <div class="accordion-item">
        <h2 class="accordion-header" id="headingfive">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsedfive" aria-expanded="false" aria-controls="collapsedfive">
            Loosely Coupled Market Data Feed Components
          </button>
        </h2>
        <div id="collapsedfive" class="accordion-collapse collapse" aria-labelledby="headingfive" data-bs-parent="#accordionExample">
            <div class="accordion-body">
               
              <div class="para-text">
                
                BlitzTrader features loosely coupled market data feed components and a dissemination infrastructure, providing traders with real-time, accurate market data for informed decision-making.
            </div>
          </div>
        </div>
      </div>  
      <div class="accordion-item">
        <h2 class="accordion-header" id="headingsix">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsedsix" aria-expanded="false" aria-controls="collapseThree">
            Framework and Libraries
          </button>
        </h2>
        <div id="collapsedsix" class="accordion-collapse collapse" aria-labelledby="headingsix" data-bs-parent="#accordionExample">
          <div class="accordion-body">
               
              <div class="para-text">
                 
                 Our platform offers advanced trade execution capabilities that can be easily customized and integrated into trading strategies, allowing for efficient order routing and execution. Our execution framework empowers your strategy to quote at any level, on any order side, and at any price point.
            </div>
          </div>
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header" id="headingseven">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsedseven" aria-expanded="false" aria-controls="collapseseven">
            Advanced Trade Execution Capabilities
          </button>
        </h2>
        <div id="collapsedseven" class="accordion-collapse collapse" aria-labelledby="headingseven" data-bs-parent="#accordionExample">
            <div class="accordion-body">
               
              <div class="para-text">
                
                BlitzTrader Strategies are developed using .NET programming languages, opening up immense possibilities for you to connect with any external system for signals or advanced calculations. This makes the system open and customizable without any limitations.
            </div>
          </div>
        </div>
      </div>  
      <div class="accordion-item">
        <h2 class="accordion-header" id="headingeight">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsedeight" aria-expanded="false" aria-controls="collapseeight">
            Integration with External system
          </button>
        </h2>
        <div id="collapsedeight" class="accordion-collapse collapse" aria-labelledby="headingeight" data-bs-parent="#accordionExample">
          <div class="accordion-body">
               
              <div class="para-text">
                 
                 Our platform offers robust customization options to adapt to changing market conditions and evolving trading business needs, empowering traders to stay ahead of the curve.
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
 
  
  
  <section class="bg-gray py-5 ">  
    <div class="container">  
      <div class="row  ">
        
        <div class="col-12 col-md-6 col-lg-6 div-center">
          <p class="sec-title">
            <span class="span-title">QuantXpress</span> Consulting and Professional Services
          </p>

          <p class="para-text py-3">
            QuantXpress Technologies is a leading technology firm specializing in algorithmic trading and trade lifecycle automation.
            We are your one-stop shop for all your algorithmic trading needs.
          </p>

          <!-- <p class="para-text  centerpy-3">
            With extensive experience and expertise in the capital markets, we offer innovative solutions, consulting, and advisory support to trading firms seeking custom trading software development, algorithmic trading, high-frequency trading (HFT), custom quantitative strategies development on Blitz, exchange connectivity, FIX Engine, and market data solutions. Our team also specializes in electronic connectivity solutions for all major Indian and global exchanges. Trust QuantXpress to elevate your trading experience and optimize your performance in today's dynamic markets.
          </p> -->

          <button class="dark-btn_2 mob-mt-5 "> Learn More</button>
        </div>

        <div class="col-12 col-md-6 col-lg-6 div-center">
          <img src="assets/img/consulting.png">
        </div>
      </div>
    </div>
  </section>
  
  <section class="container py-5">
    <div class="row pt-5">
      <div class="col-12 col-md-5 col-lg-5 div-center">
        <p class="sec-title">
           What Our <span class="span-title"><br>Customers Says</span>
        </p>

        <p class="para-text">
          With extensive experience and expertise in the capital markets, we offer innovative solutions, consulting, and advisory support to trading firms seeking 
        </p>

        <button class="dark-btn_2 mob-mt-5 "> Learn More</button>
      </div>
      <div class="col-12 col-md-7 col-lg-7">
        <div class="row ">
          <div class="col-12 col-md-6 col-lg-6  scroll-box">
            <div class="testimonial-box mg-t-15">
              <p class="para-text">
                multi-client trading platform for best execution of trades with fully automated trading system. 
              </p>

              <div>
                <img width="50" src="assets/img/profile.png">
              </div>

              <div class="d-flex">
                <div class="testimonial-name w-75">
                  Jay (Khajana Equity Pvt Ltd.) 
                </div>
                <div class="w-25">
                  <img src="assets/img/comma.png">
                </div>
              </div> 
            </div>

            <div class="testimonial-box">
              <p class="para-text">
                multi-client trading platform for best execution of trades with fully automated trading system. 
              </p>

              <div>
                <img width="50" src="assets/img/profile.png">
              </div>

              <div class="d-flex">
                <div class="testimonial-name w-75">
                  Kanul Jain (AlgoLab)
                </div>
                <div class="w-25">
                  <img src="assets/img/comma.png">
                </div>
              </div> 
            </div>

            <div class="testimonial-box">
              <p class="para-text">
                multi-client trading platform for best execution of trades with fully automated trading system. 
              </p>

              <div>
                <img width="50" src="assets/img/profile.png">
              </div>

              <div class="d-flex">
                <div class="testimonial-name w-75">
                  Jay (Khajana Equity Pvt Ltd.) 
                </div>
                <div class="w-25">
                  <img src="assets/img/comma.png">
                </div>
              </div> 
            </div>
          </div>
          <div class="col-12 col-md-6 col-lg-6 mg-t-15 scroll-box">
            <div class="testimonial-box mg-t-15">
              <p class="para-text">
                “We completely rely on QuantXpress for all our sophisticated and advance technology needs of proprietary Algorithmic and HFT trading platform. The responsiveness of QXT team has been awesome”
              </p>

              <div>
                <img width="50" src="assets/img/profile.png">
              </div>

              <div class="d-flex">
                <div class="testimonial-name w-75">
                  Kanul Jain (AlgoLab)
                </div>
                <div class="w-25">
                  <img src="assets/img/comma.png">
                </div>
              </div> 
            </div>

            <div class="testimonial-box">
              <p class="para-text">
                “QuantXpress is strategically important for the growth of our proprietary algorithmic trading business and our strategic technology association with QXT is lasting since last 8+ years.” 
              </p>

              <div>
                <img width="50" src="assets/img/profile.png">
              </div>

              <div class="d-flex">
                <div class="testimonial-name w-75">
                  Kanul Jain (AlgoLab)
                </div>
                <div class="w-25">
                  <img src="assets/img/comma.png">
                </div>
              </div> 
            </div>

            <div class="testimonial-box">
              <p class="para-text">
                “QuantXpress is strategically important for the growth of our proprietary algorithmic 
              </p>

              <div>
                <img width="50" src="assets/img/profile.png">
              </div>

              <div class="d-flex">
                <div class="testimonial-name w-75">
                  Jay (Khajana Equity Pvt Ltd.) 
                </div>
                <div class="w-25">
                  <img src="assets/img/comma.png">
                </div>
              </div> 
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="container py-5">    
    <div class="text-center">
      <p class="sec-title">
          <span class="span-title">Career </span>Opportunities
      </p> 

      <p class="para-text py-4">
          Join a group of passionate professionals who are transforming trading industries <br>through Product Engineering, and automation.
      </p>
    </div>

    <div class="w-100">
      <img src="assets/img/career.svg">
    </div>   

    <div class="row pt-5 py-5">
      <div class="col-12 col-md-5 col-lg-5">
        <div class="para-text mob-pt-15">
          Join our team at QuantXpress Technologies to shape the future of trading automation and build a meaningful career. We aspire to be at the forefront of innovation and entrepreneurship, where your talents and ideas can thrive.
        </div>

        <button class="dark-btn_2 mob-mt-5  mt-5">View All Roles</button>
      </div>
      <div class="col-12 col-md-7 col-lg-7">
        <ul class="career-list">
          <li>
            <div class="d-flex d-flex-mob">
              <div class="w-75 para-text mg-bt-5">Job tittle name (Exp. - 3 Years)</div>
              <div><button class="dark-btn_2 mob-mt-5 ">Get Started</button></div>
            </div>
          </li>

          <li>
            <div class="d-flex d-flex-mob">
              <div class="w-75 para-text mg-bt-5">Job tittle name (Exp. - 3 Years)</div>
              <div><button class="dark-btn_2 mob-mt-5 ">Get Started</button></div>
            </div>
          </li>

          <li>
            <div class="d-flex d-flex-mob">
              <div class="w-75 para-text mg-bt-5">Job tittle name (Exp. - 3 Years)</div>
              <div><button class="dark-btn_2 mob-mt-5 ">Get Started</button></div>
            </div>
          </li>
        </ul>
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
        <div class="container-fluid px-5-footer">
            <div class="footer-content">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-12 footer-column">
                        <div class="logo-widget footer-widget">
                            <figure class="logo-box"><a href="#"><img src="assets/img/logo.png" alt=""></a></figure>
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
                    <div class="col-lg-2 col-md-2 col-12 ps-5 footer-column">
                        <div class="service-widget footer-widget">
                            <div class="footer-title">Products</div>
                            <ul class="list"> 
                                <li><a href="#">BlitTrader</a></li>
                                <li><a href="#">QX.FinLib</a></li>
                                <li><a href="#">QX.FIXEngine</a></li>
                                <li><a href="#">QX.MDS</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-2 col-12 ps-5 footer-column">
                        <div class="service-widget footer-widget">
                            <div class="footer-title">Important links</div>
                            <ul class="list"> 
                                <li><a href="#">About QuantXpress</a></li>
                                <li><a href="#">Team</a></li>
                                <li><a href="#">Career</a></li>
                                <li><a href="#">Contact Us Orphan</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-12 offset-lg-1 footer-widget">
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

  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.13.0/js/mdb.min.js'></script>

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
