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
            Get the competitive edge you need in the financial markets with access to our full suite of services.
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
                  Exchange Connectivity
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
                  Our solution provides direct exchange feed capture and our software process further decode, normalize,  enriched, standardize, store and disseminate the market information to analyze and apply.  
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
                  Market Data Dissemination Platform and APIs
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
                  QX.MDP scalable market data dissemination solution enables real-time market data streaming into a broker’s client trading or monitoring apps to enhance performance of automated trading algorithms.  

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
                  QXT Engineering Services
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
                  We partner with our clients in their transformation journey to successfully deliver solutions they need to succeed in Today’s competitive financial markets. 
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
            NSE is global leading exchange based in Mumbai, India and is most diverse equity and derivative marketplace. NSE connectivity is our core specialization for both market data and trading interface. 
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
            NSE is global leading exchange based in Mumbai, India and is most diverse equity and derivative marketplace. NSE connectivity is our core specialization for both market data and trading interface. 
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
              MCX <br> &nbsp
          </div>
          <div class="para-text mt-5">
            NSE is global leading exchange based in Mumbai, India and is most diverse equity and derivative marketplace. NSE connectivity is our core specialization for both market data and trading interface. 
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
